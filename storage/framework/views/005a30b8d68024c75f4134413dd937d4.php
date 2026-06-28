<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Event Seminar</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">


<link rel="preconnect" href="https://fonts.googleapis.com">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">



<style>

body{
    background:#F8FAFC;
    font-family:'Poppins',sans-serif;
}


.navbar{
    background:#ffffff;
    box-shadow:0 2px 10px rgba(0,0,0,.05);
}


.navbar-brand{
    font-weight:600;
    color:#5B8DEF !important;
}


.nav-link{
    color:#64748B !important;
    font-weight:500;
}


.nav-link:hover{
    color:#5B8DEF !important;
}


.card{
    border:none;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,.05);
}


.btn-primary{
    background:#7DD3FC;
    border:none;
}


.btn-primary:hover{
    background:#67C5F5;
}


.btn-warning{
    background:#FDE68A;
    border:none;
}


.btn-danger{
    background:#FDA4AF;
    border:none;
}


.table{
    background:white;
}


table th{
    background:#EFF6FF;
}


h2{
    font-weight:600;
    color:#334155;
}


</style>


</head>



<body>


<nav class="navbar navbar-expand-lg">

<div class="container">


<a class="navbar-brand" href="/">
🎓 Event Seminar
</a>



<div class="collapse navbar-collapse show">


<ul class="navbar-nav ms-auto">


<li class="nav-item">
<a class="nav-link" href="/">
Dashboard
</a>
</li>



<li class="nav-item">
<a class="nav-link" href="/kategori">
Kategori
</a>
</li>



<li class="nav-item">
<a class="nav-link" href="/seminar">
Seminar
</a>
</li>



<li class="nav-item">
<a class="nav-link" href="/peserta">
Peserta
</a>
</li>



<li class="nav-item">
<a class="nav-link" href="/pendaftaran">
Pendaftaran
</a>
</li>


</ul>


</div>


</div>

</nav>



<div class="container mt-5">


<?php echo $__env->yieldContent('content'); ?>


</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html><?php /**PATH C:\laragon\www\event-seminar\resources\views/layouts/app.blade.php ENDPATH**/ ?>