<?php 
require 'users.php';

$users = getUsers();

include 'body/header.php';
?>

<table class="table">
    <p>
        <a class="btn btn-success m-3" href="create.php">Create New User</a>
    </p>
    <thead>
        <tr>
            <th>Images</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Website</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user) : ?>
        <tr>
            <td><img src="img/<?= $user['files']?>" width=150px></td>
            <td><?= $user['name']?></td>
            <td><?= $user['username']?></td>
            <td><?= $user['email']?></td>
            <td><?= $user['phone']?></td>
            <td>
                <a target="_blank" href="http://<?= $user['website']?>">
                    <?= $user['website']?>
                </a>
            </td>
            <td>
                <a href="view.php?id=<?= $user['id'] ?>" class="btn btn-sm btn-outline-info">View</a>
                <a href="update.php?id=<?= $user['id'] ?>" class="btn btn-sm btn-outline-secondary">Update</a>
                <a href="delete.php?id=<?= $user['id'] ?>" class="btn btn-sm btn-outline-danger">Delete</a>
            </td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>

<?php include 'body/footer.php'?>