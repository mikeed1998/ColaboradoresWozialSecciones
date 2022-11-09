<?php
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $whatsapp = $_POST['whatsapp'];

    // $list = [$nombre, $correo, $whatsapp];
    $list = array(
        "nombre" => $nombre,
        "correo" => $correo,
        "whatsapp" => $whatsapp,
    );

    var_dump($list);
?>