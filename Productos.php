<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer 635|dpQ8rIYnu4zuYBZB71sBeAhBrEtTuTZe8M4SGYjQ'
  ),
));

$response = curl_exec($curl);

curl_close($curl);


$response=json_decode($response,true)['data']; 



// Filtrar solo los campos necesarios 
/*$simplifiedProducts = array_map(function($product) {
    return [
        'name' => $product['name'] ?? 'Nombre no disponible',
        'slug' => $product['slug'] ?? 'Slug no disponible',
        'description' => $product['description'] ?? 'Descripción no disponible',
        'cover' => $product['cover'] ?? 'URL de imagen no disponible'
    ];
}, $products);*/



?>