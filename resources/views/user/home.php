<?php
    include './resources/views/layout/head.php';
?>
    <title>Home</title>
</head>
<body>
    <?php
        include './resources/views/layout/nav.php';
    ?>
            <a href="../../views/index.php">Logout</a>
        </div>
    </section>
    <section class="home-features">
        <div class="search-box">
            <h3>Welcome, <?= $_SESSION['name'] ?></h3><br>
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
        include "./resources/views/layout/footer.php";
    ?>
    <script src="../../../resources/public/js/register.js"></script>
</body>
</html>