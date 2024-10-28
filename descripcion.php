<?php 

$slug=$_GET["slug"];


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products/slug/'. $slug,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer 17|rRMO05q3HMyZcdCF7zGX586aW7sNSPvrDD9ytYut'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$producto = json_decode($response, true);
$producto = $producto['data'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Menu</title>
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<nav class="navbar navbar-expand-lg bg-body-tertiary position-relative" >
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Menu</a>
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
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <nav class="navbar bg-body-tertiary class="d-flex justify-content-end">
          
            <div class="container">
              <a class="navbar-brand" href="#">
                <img src="https://www.dolphindiscovery.com.mx/src/about/dolphins/About_Dolphins.jpg" alt="Bootstrap" width="50" height="44" class="border border-5">
              </a>
              <button class="btn btn-primary">Añadir</button>
            </div>
          </nav>

      </div>
    </div>
   
</nav>

<ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Active</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" aria-disabled="true">Disabled</a>
    </li>
</ul>


<div class="container mt-4 text-center">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <div class="card-body">
        <img class="card-img-top" src="<?= $producto['cover'] ?>" alt="Product Image"> 
          <!--<img src="https://i.blogs.es/a3c185/croquetas/1366_2000.jpg" class="d-block w-100" alt="300"> -->
          <h5 class="card-title"><?= $producto['name'] ?></h5>
          <p class="card-text"><?= $producto['description'] ?></p>
        </div>
        <div class="card-footer d-flex justify-content-between">
          <a href="Ejercicio3.html" class="btn btn-primary">Go somewhere</a>
          <a href="#" class="btn btn-warning">Editar</a>
          <a href="#" class="btn btn-danger">Eliminar</a>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
