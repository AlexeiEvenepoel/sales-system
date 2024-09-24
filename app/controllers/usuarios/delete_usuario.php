<?php
/**
 * Created by PhpStorm.
 * User: HILARIWEB
 * Date: 20/1/2023
 * Time: 10:19
 */
include ('../../config.php');
session_start();
$id_usuario = $_POST['id_usuario'];
$sentencia = $pdo->prepare("DELETE FROM tb_usuarios WHERE id_usuario=:id_usuario ");
$sentencia->bindParam('id_usuario', $id_usuario);
if ($sentencia->execute()) {
    $_SESSION['mensaje'] = "Se elimino al usuario de la manera correcta";
    $_SESSION['icono'] = "success";
    if ($id_usuario == $_SESSION['id_usuario']) { // Asegúrate de que esta variable de sesión es la correcta
        session_destroy();
        header('Location: '.$URL.'/login');
        exit();
    } else {
        header('Location: '.$URL.'/usuarios/');
        exit();
    }
} else {
    $_SESSION['mensaje'] = "Error no se pudo eliminar el usuario en la base de datos";
    $_SESSION['icono'] = "error";
    header('Location: '.$URL.'/usuarios/');
    exit();
}
?>

