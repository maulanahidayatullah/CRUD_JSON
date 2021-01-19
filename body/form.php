<div class="container">
    <div class="card-header">
        <h3>
        <?php if ($user['id']) :?>
            Update User <b><?= $user['name'] ?></b>
        <?php else  : ?>
            Create new User
        </h3>
        <?php endif?>
    </div>
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="">
            <div class="form-group">
                <label>Name</label>
                <input name="name" value="<?= $user['name'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Username</label>
                <input name="username" value="<?= $user['username'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input name="email" value="<?= $user['email'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input name="phone" value="<?= $user['phone'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Website</label>
                <input name="website" value="<?= $user['website'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <input name="picture" type="file" class="form-control-file">
            </div>
            <button class="btn btn-success">Submit</button>
        </form>
    </div>
</div>