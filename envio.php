<?php
// Verificar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recoger los valores enviados por el formulario
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $age = isset($_POST['age']) ? intval($_POST['age']) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
    $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : '';
    $interests = isset($_POST['interest']) ? $_POST['interest'] : []; // Esto será un array
    $country = isset($_POST['country']) ? htmlspecialchars($_POST['country']) : '';
    $comments = isset($_POST['comments']) ? htmlspecialchars($_POST['comments']) : '';

    // Formatear y mostrar los datos recibidos (solo para debug)
    echo "<h1>Datos recibidos:</h1>";
    echo "<p><strong>Nombre:</strong> $name</p>";
    echo "<p><strong>Correo Electrónico:</strong> $email</p>";
    echo "<p><strong>Edad:</strong> $age</p>";
    echo "<p><strong>Teléfono:</strong> $phone</p>";
    echo "<p><strong>Género:</strong> $gender</p>";
    echo "<p><strong>Intereses:</strong> <br>";
foreach ($interests as $interest){
    echo $interest ."<br>";
}
    echo "<br>";
    echo "<p><strong>País:</strong> $country</p>";
    echo "<p><strong>Comentarios:</strong> $comments</p>";

    // También puedes guardar esta información en un archivo, base de datos, etc.
} else {
    echo "<p>No se han enviado datos del formulario.</p>";
}
?>