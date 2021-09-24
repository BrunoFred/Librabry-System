<?php
include './resources/views/layout/head.php';
?>
<title>Check Users</title>
</head>

<body>
<?php
include './resources/views/layout/nav-admin.php';
?>
<div class="check-users">
    <h3>Check users info</h3>
    <fieldset>
        <?php foreach ($users as $user) { ?>
            <div class="users-list">
                <h6>User ID: <?= $user['id'] ?> </h6>
                <h6>Name: <?= $user['name'] ?> </h6>
                <h6>Email: <?= $user['email'] ?></h6>
                <h6>Phone: <?= $user['phone'] ?></h6>
            </div>
            <form method="POST" action="/users/edit">
                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                <div class="book-button-outside">
                    <button type="submit" class="book-button">Update</button>
                </div>
            </form>
        <?php } ?>
    </fieldset>
</div>
<?php
include './resources/views/layout/footer.php';
?>
<script src="../../../resources/public/js/register.js"></script>
</body>

</html>