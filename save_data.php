<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    
    $data = "Nombre: $name\nTeléfono: $phone\n";
    
    $file = 'datos.txt';
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
    
    echo 'Datos guardados correctamente.';
}
?>
