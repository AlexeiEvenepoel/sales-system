<?php
include ('../../config.php');

$id_usuario = $_POST['id_usuario'];
$nombres = $_POST['nombres'];
$email = $_POST['email'];
$rol = $_POST['rol'];
$password_user = $_POST['password_user'];
$password_repeat = $_POST['password_repeat'];

if($password_user == $password_repeat){
    $sentencia = $pdo->prepare("UPDATE tb_usuarios
        SET nombres=:nombres,
            email=:email,
            id_rol=:id_rol,
            password_user=:password_user,
            fyh_actualizacion=:fyh_actualizacion 
        WHERE id_usuario = :id_usuario ");

    $sentencia->bindParam('nombres', $nombres);
    $sentencia->bindParam('email', $email);
    $sentencia->bindParam('id_rol', $rol);
    $sentencia->bindParam('password_user', $password_user);
    $sentencia->bindParam('fyh_actualizacion', $fechaHora);
    $sentencia->bindParam('id_usuario', $id_usuario);
    $sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Se actualizó al usuario de la manera correcta";
    $_SESSION['icono'] = "success";
    header('Location: '.$URL.'/usuarios/');
} else {
    session_start();
    $_SESSION['mensaje'] = "Las contraseñas no coinciden";
    $_SESSION['icono'] = "error";
    header('Location: '.$URL.'/usuarios/edit.php?id='.$id_usuario);
}
?>

