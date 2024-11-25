<h2>Edit User</h2>
<form action="<?php echo base_url('usercontroller/update/'.$user['id'])?>" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?= $user['name'] ?>" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?= $user['email'] ?>" required>
    <br>
    <button type="submit">Update</button>
</form>
