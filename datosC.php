<?php
    $nombreC = $_POST['nombreC'];
    $correoC = $_POST['correoC'];
    $whatsappC = $_POST['whatsappC'];
    $mensajeC = $_POST['mensajeC'];

    // $list = [$nombre, $correo, $whatsapp];
    $listC = array(
        "nombreC" => $nombreC,
        "correoC" => $correoC,
        "whatsappC" => $whatsappC,
        "mensajeC" => $mensajeC,
    );

    var_dump($listC);
?>