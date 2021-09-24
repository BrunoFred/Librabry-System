<?php
include "./resources/views/layout/head.php";
?>
<title>Create User</title>
</head>
<body>
<?php
include "./resources/views/layout/nav-admin.php";
?>
</section>
<div class="create-user-form">
    <h3>Update an user here</h3>
    <div>
        <fieldset>
            <form method="POST" action="/users/update">
                <div class="user-form">
                    <legend>User Register:</legend>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="<?= $user['name']?>">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?= $user['email']?>">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" value="<?= $user['password']?>">
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" value="<?= $user['phone']?>">
                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                    <button class="book-form-button" type="submit">Update</button>
                </div>
            </form>
            <form method="POST" action="/users/delete">
                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                <button class="book-form-button" type="submit">Remove</button>
            </form>
        </fieldset>
        <?php
        include "./resources/views/layout/footer.php";
        ?>
        <script src="../../../resources/public/js/register.js"></script>
</body>
</html>