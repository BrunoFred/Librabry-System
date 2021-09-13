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
            <a href="#">Create User</a>
            <a href="#">Create Books</a>
            <a href="../../views/index.php">Logout</a>
        </div>
    </section>
    <div class="container">
        <div class="main-text">
            <h1>Library</h1>
        </div>
        <form action="../../views/admin/home.php" method="post">
            <div class="login-form">
                <label>Email</label><input type=text name="email"><br><br>
                <label>Password</label><input type=password name="password"><br><br>
                <button type="submit">Register</button><br>
            </div>
        </form>
    </div>
    <?php
        include("../layout/footer.php")
    ?> 
    <script src="../../public/js/register.js"></script>
</body>
</html>