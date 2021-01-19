<?php
//mengambil fungsi yang ada di dalam file
require __DIR__ . '/users.php';

//menaruh isi file header dan bootstrap
include 'body/header.php';

$user = [
    'id' => '',
    'name' => '',
    'username' => '',
    'email' => '',
    'phone' => '',
    'website' => '',
    'files' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fileName = $_FILES['picture']['name'];
    move_uploaded_file($_FILES['picture']['tmp_name'], __DIR__ . "/img/$fileName");

    $user['name'] = $_POST['name'];
    $user['username'] = $_POST['username'];
    $user['email'] = $_POST['email'];
    $user['phone'] = $_POST['phone'];
    $user['website'] = $_POST['website'];
    $user['files'] = $fileName;

    createUser($user);

    header("location: index.php");
}
?>

<?php include 'body/form.php' ?>