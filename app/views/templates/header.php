<!DOCTYPE html>
<html>
<head>
	<title><?= $data['judul']; ?></title>
	<link rel="stylesheet"  href="<?= BASEURL; ?>/css/bootstrap.css">

</head>
<body>
	<div class="container-fluid"> 
	<nav class="navbar navbar-expand-lg bg-light">
	
  <div class="container-fluid">
    <a class="navbar-brand" href="<? BASEURL; ?>">PHP MVC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/home/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/about/ ">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/mahasiswa/ ">mahasiswa</a>
        </li>
  </div>
      
      </ul>
    </div>
  </div>
</nav>