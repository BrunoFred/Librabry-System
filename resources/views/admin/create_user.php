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
        <h3>Create an user here</h3>
    <div>
    <fieldset>
        <form method="POST" action="/users/store">
            <div class="user-form">
                <legend>User Register:</legend>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone">
                <label class="is_admin">Is Admin?
                    <label>Yes
                        <input type="radio" name="type_user" value="<?= true ?>">
                        <span class="checkmark"></span>
                    </label>

                    <label>No
                        <input type="radio" name="type_user" value="<?= false ?>">
                        <span class="checkmark"></span>
                    </label>
                </label>
                <input type="submit" value="Submit">
            </div>
        </form>
    </fieldset>
    <?php
        include "./resources/views/layout/footer.php";
    ?> 
    <script src="../../../resources/public/js/register.js"></script>
</body>
</html>