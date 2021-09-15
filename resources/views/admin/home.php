<?php
    include("../layout/head.php")
?>
    <title>Home Admin</title>
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
    <section class="home-features">
        <div class="search-box">
            <h3>Looking for a book in especific? <br>
            <h3>Try our searchbox!</h3>
            <br><input type="search" placeholder="Search..">
        </div>
        <div class="category-link">
            <h3>Top Categories: </h3><br>
            <a href="#">Action, </a>
            <a href="#">Adventure, </a>
            <a href="#">Detective, </a>
            <a href="#">Drama, </a>
            <a href="#">Fiction, </a>
            <a href="#">Romance</a>
        </div>
    </section>
    <?php
        include("../layout/footer.php")
    ?>
    <script src="../../public/js/register.js"></script>
</body>
</html>