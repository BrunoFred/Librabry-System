<?php
include "./resources/views/layout/head.php";
?>
<title>Update User</title>
</head>
<body>
<?php
include "./resources/views/layout/nav.php";
?>
</section>
<div class="create-user-form">
    <h3>Update your data here</h3>
    <div>
        <fieldset>
            <form method="POST" action="/users/selfUpdate">
                <div class="user-form">
                    <legend>User Register:</legend>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="<?= $_SESSION['name'] ?>">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?= $_SESSION['email']?>">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" value="<?= $_SESSION['password']?>">
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" value="<?= $_SESSION['phone']?>">
                    <input type="hidden" name="id" value="<?= $_SESSION['id'] ?>">
                    <button class="book-form-button" type="submit">Update</button>
                </div>
        </fieldset>
        <?php
        include "./resources/views/layout/footer.php";
        ?>
        <script src="../../../resources/public/js/register.js"></script>
</body>
</html>