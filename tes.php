<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<body>
<center><h1>BAHAN BOOTSTRAP UNTUK TAMPILAN LAYOUT</h1></center>
<br>
<br>
<br>
<br>
<H2>NAVBAR</H2>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<br>
<br>
<br>
<br>
<h2>BUTTON</h2>
<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>
<button type="button" class="btn btn-link">Link</button>


<br>
<br>
<br>
<br>
<h2>TABLE</h2>
<table class="table table-dark table-striped">
  <tr>
      <td>NO</td>
      <td>NAMA</td>
      <td>KELAS</td>
      <td>JURUSAN</td>
  </tr>
  <tr>
      <td>1</td>
      <td>Jono</td>
      <td>XRPL1</td>
      <td>RPL</td>
  </tr>
  <tr>
      <td>2</td>
      <td>Jono</td>
      <td>XRPL1</td>
      <td>RPL</td>
  </tr>
</table>
<br>
<table class="table table-success table-striped">
<tr>
      <td>NO</td>
      <td>NAMA</td>
      <td>KELAS</td>
      <td>JURUSAN</td>
  </tr>
  <tr>
      <td>1</td>
      <td>Jono</td>
      <td>XRPL1</td>
      <td>RPL</td>
  </tr>
  <tr>
      <td>2</td>
      <td>Jono</td>
      <td>XRPL1</td>
      <td>RPL</td>
  </tr>
</table>


<br>
<br>
<br>
<br>
<h2>ALERT</h2>
<div class="alert alert-primary" role="alert">
  A simple primary alert—check it out!
</div>
<div class="alert alert-secondary" role="alert">
  A simple secondary alert—check it out!
</div>
<div class="alert alert-success" role="alert">
  A simple success alert—check it out!
</div>
<div class="alert alert-danger" role="alert">
  A simple danger alert—check it out!
</div>
<div class="alert alert-warning" role="alert">
  A simple warning alert—check it out!
</div>
<div class="alert alert-info" role="alert">
  A simple info alert—check it out!
</div>
<div class="alert alert-light" role="alert">
  A simple light alert—check it out!
</div>
<div class="alert alert-dark" role="alert">
  A simple dark alert—check it out!
</div>

    <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</body>
</html>