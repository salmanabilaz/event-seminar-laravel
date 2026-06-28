<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use App\Models\KategoriSeminar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SeminarController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $kategori = $request->kategori;
        $tanggal = $request->tanggal;

        $seminars = Seminar::with('kategori')

            ->when($search, function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('judul', 'like', '%' . $search . '%')
                      ->orWhere('pembicara', 'like', '%' . $search . '%');
                });
            })

            ->when($kategori, function ($query) use ($kategori) {
                $query->where('kategori_id', $kategori);
            })

            ->when($tanggal, function ($query) use ($tanggal) {
                $query->whereDate('tanggal', $tanggal);
            })

            ->orderBy('tanggal', 'desc')
            ->paginate(10)
            ->withQueryString();

        $kategoris = KategoriSeminar::all();

        return view('seminar.index', compact('seminars', 'kategoris'));
    }

    public function create()
    {
        $kategori = KategoriSeminar::all();

        return view('seminar.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori_id' => 'required',
            'judul' => 'required|min:5',
            'pembicara' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'kuota' => 'required|integer|min:1',
            'poster' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $poster = $request->file('poster')->store('posters', 'public');

        Seminar::create([
            'kategori_id' => $request->kategori_id,
            'judul' => $request->judul,
            'pembicara' => $request->pembicara,
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
            'kuota' => $request->kuota,
            'poster' => $poster,
        ]);

        return redirect()->route('seminar.index')
            ->with('success', 'Data seminar berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $seminar = Seminar::findOrFail($id);
        $kategori = KategoriSeminar::all();

        return view('seminar.edit', compact('seminar', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kategori_id' => 'required',
            'judul' => 'required|min:5',
            'pembicara' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'kuota' => 'required|integer|min:1',
            'poster' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $seminar = Seminar::findOrFail($id);

        if ($request->hasFile('poster')) {

            if ($seminar->poster && Storage::disk('public')->exists($seminar->poster)) {
                Storage::disk('public')->delete($seminar->poster);
            }

            $seminar->poster = $request->file('poster')->store('posters', 'public');
        }

        $seminar->kategori_id = $request->kategori_id;
        $seminar->judul = $request->judul;
        $seminar->pembicara = $request->pembicara;
        $seminar->tanggal = $request->tanggal;
        $seminar->lokasi = $request->lokasi;
        $seminar->kuota = $request->kuota;

        $seminar->save();

        return redirect()->route('seminar.index')
            ->with('success', 'Data seminar berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $seminar = Seminar::findOrFail($id);

        if ($seminar->poster && Storage::disk('public')->exists($seminar->poster)) {
            Storage::disk('public')->delete($seminar->poster);
        }

        $seminar->delete();

        return redirect()->route('seminar.index')
            ->with('success', 'Data seminar berhasil dihapus.');
    }
}