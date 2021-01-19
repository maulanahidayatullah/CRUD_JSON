<?php 
//mengambil fungsi yang ada di dalam file
require __DIR__.'/users.php';

//mengambil id dari yang tadi di click dan merubahnya ke variabel $userId
$userId = $_GET['id'];

//variabel $user adalah fungsi getUserById yang diambil dari file '/users.php' dengan parameter $userId yang diambil dari id yang tadi kita click
$user = getUserById($userId);

//menaruh isi file header
include 'body/header.php';

//mengecek request method
// var_dump($_SERVER);

//mengecek file yang dikirim POST
// var_dump($_POST);

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $user = updateUser($_POST, $userId);

    //mengecek inputan dari gambar
    // var_dump($_FILES);

    $fileName = $_FILES['picture']['name'];
    move_uploaded_file($_FILES['picture']['tmp_name'], __DIR__."/img/$fileName");
    
    header("location: index.php");

    $user['files'] = $fileName ;
    updateUser($user, $userId);
}

?>

<?php include 'body/form.php'?>
