<h2>Add User</h2>
<form action="<?php echo base_url('UserController/store')?>" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <br>
    <button type="submit">Save</button>
</form>