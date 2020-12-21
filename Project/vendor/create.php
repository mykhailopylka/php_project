<?php
require_once '../config/conection.php';

print_r($_POST);

$title = $_POST['title_kay'];
$description = $_POST['description_kay'];
$phone = $_POST['phone_kay'];

$add = mysqli_query($connect, "INSERT INTO `united` (`id`, `name`, `phone`, `description`) VALUES (NULL, '$title', '$phone', '$description')");

//переадресація на початкову сторінку, видає помилку!
//function redirect($url, $statusCode = 303)
//{
//    header('Location: ' . $url, true, $statusCode);
//    die();
//}
//redirect('/', false);
?>
<script>
    window.location.replace("/");
</script>
