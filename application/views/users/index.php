<h2>User List</h2>
<a href="<?php echo base_url('UserController/create')?>">Add New User</a>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email'] ?></td>
            <td>
                <!-- <a href="/users/edit/<?= $user['id'] ?>">Edit</a> -->

                <a href="<?php echo base_url('UserController/edit/'.$user['id'])?>">Edit</a>
                <a href="<?php echo base_url('UserController/delete/'.$user['id'])?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>