<?php 
//mengambil fungsi yang ada di dalam file
require __DIR__.'/users.php';

//mengambil id dari yang tadi di click dan merubahnya ke variabel $userId
$userId = $_GET['id'];

//variabel $user adalah fungsi getUserById yang diambil dari file '/users.php' dengan parameter $userId yang diambil dari id yang tadi kita click
$user = getUserById($userId);

include 'body/header.php';
?>

<div class="card">
    <div class="card-header">
        <h3>View User : <b><?= $user['name']?></b></h3>
    </div>
    <div class="card-body">

    </div>
    <table class="table">
        <tbody>
            <tr>
                <th>Name : </th>
                <td><?= $user['name'] ?></td>
            </tr>
            <tr>
                <th>Username : </th>
                <td><?= $user['username'] ?></td>
            </tr>
            <tr>
                <th>Email : </th>
                <td><?= $user['email'] ?></td>
            </tr>
            <tr>
                <th>Phone : </th>
                <td><?= $user['phone'] ?></td>
            </tr>
            <tr>
                <th>Website : </th>
                <td>
                    <a target="_blank" href="http://<?= $user['website']?>">
                        <?= $user['website']?>
                    </a>
                </td>
            </tr>
            <tr>
                <th>Images : </th>
                <td><img src="img/<?= $user['files']?>" width=150px></td>
            </tr>
        </tbody>
    </table>
</div>



<?php include 'body/footer.php'?>