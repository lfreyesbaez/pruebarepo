<?php 

$path = 'C:/xampp/htdocs/prueba/prueba';
$uploadFile = $path. basename($_FILES['archivo']['name']);

if (move_uploaded_file($_FILES['archivo']['name'], $uploadFile)) {
    echo 'File uploaded successfully'; 
}else {
    echo 'File not uploaded'. $_FILES['archivo']['name'];
}

echo '<br>';
print_r($_FILES['archivo']['name']);

echo '<br>';
print_r(move_uploaded_file($_FILES['archivo']['name'], $uploadFile));

// ESTAMOS PROBANDO LOS COMMITS :) :D
?>

