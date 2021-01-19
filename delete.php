<?php 
//menaruh isi file header
// include 'body/header.php';

//mengambil fungsi yang ada di dalam file
require __DIR__.'/users.php';

//mengambil id dari yang tadi di click dan merubahnya ke variabel $userId
$userId = $_GET['id'];

deleteUser($userId);

//variabel $user adalah fungsi getUserById yang diambil dari file '/users.php' dengan parameter $userId yang diambil dari id yang tadi kita click
// $user = getUserById($userId);

header("Location: index.php");
?>