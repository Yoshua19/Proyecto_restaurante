<?php

include './util/validar_entradas.php';
include 'util/connection.php';

validar_entrada("../reservations.php");

$id_reservacion = $_GET['id'];
$sql = "DELETE from `reservation` WHERE id=$id_reservacion";

try {
    conectar();
    if (ejecutar($sql)) {
        echo "<script>
        window.location.href = '../reservation_history.php';
        alert('Eliminacion realizada con éxito');
      </script>";
    } else {
        echo "<script>
        window.location.href = '../reservations.php';
        alert('Error al realizar la eliminacion');
        </script>";
    }
} catch (Exception $exc) {
    die($exc->getMessage());
}
