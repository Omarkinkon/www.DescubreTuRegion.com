<?php
// Definir las credenciales de acceso
$user_admin = 'admin_omvv';
$password_admin = 'es1511108646';
$user_cliente = 'cliente_omvv';
$password_cliente = 'es1511108646';

// Inicializar variable de mensaje de error
$error_message = '';

// Obtener los datos del formulario
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$rol = $_POST['rol'] ?? '';

// Verificar las credenciales y el rol
if ($rol === 'admin') {
    if ($username === $user_admin && $password === $password_admin) {
        // Redirigir a la sección de administrador
        header('Location: ../pages/OMVV_catalogoAdmin.html');
        exit();
    } else {
        // Mostrar mensaje de error y recargar la página login admin
        echo '<script>alert("Usuario o contraseña incorrectos para administrador. \n ACCESO DENEGADO."); window.location.href="../pages/OMVV_loginAdmin.html";</script>';
        exit();
    }
} elseif ($rol === 'cliente') {
    if ($username === $user_cliente && $password === $password_cliente) {
        // Redirigir a la sección de cliente
        header('Location: ../pages/OMVV_catalogoCliente.html');
        exit();
    } else {
        // Mostrar mensaje de error y recargar la página login cliente
        echo '<script>alert("Usuario o contraseña incorrectos para cliente. \n ACCESO DENEGADO."); window.location.href="../pages/OMVV_loginCliente.html";</script>';        		
		exit();
    }
} else {
    // Mostrar mensaje de error este no se ejecutara por que lso fomularios mandan el rol automaticamente
    echo '<script>alert("Acceso no permitido."); </script>';	
    exit();
}
?>