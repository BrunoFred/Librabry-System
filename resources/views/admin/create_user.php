<?php
    include("../layout/head.php")
?>
    <title>Create User</title>
</head>
<body>
    <?php
        include("../layout/nav.php")
    ?>
            <a href="#">Check Loans</a>
            <a href="create_user.php">Create User</a>
            <a href="create_book.php">Register Book</a>
            <a href="../../views/index.php">Logout</a>
        </div>
    </section>
    <div class="create-user-form">
        <h3>Create an user here</h3>
    <div>
    <form action="#">
        <fieldset>
            <legend>User Register:</legend>
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br><br>
            <label for="phone">Phone:</label><br>
            <input type="text" id="phone" name="phone"><br><br>
            <label class="is_admin">Is Admin? <br><br>
                <label>Yes
                    <input type="radio" name="type_user">
                    <span class="checkmark"></span>
                </label>

                <label>No
                    <input type="radio" name="type_user">
                    <span class="checkmark"></span>
                </label>
            </label><br><br>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
    <?php
        include("../layout/footer.php")
    ?> 
    <script src="../../public/js/register.js"></script>
</body>
</html>