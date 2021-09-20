<?php
    include './resources/views/layout/head.php';
?>
    <title>Check Loans</title>
</head>
<body>
    <?php
        include './resources/views/layout/nav-admin.php';
    ?>
    <div class="check-loans">
        <h3>Check loans info</h3>
        <div class="loan-search-box">
            <input type="search" placeholder="Search..">
        </div>
        <fieldset>
            <?php foreach ($loans as $loan){ ?>
                <h6>Loan ID</h6><br>
                <h1><?= $loan['id'] ?></h1>
                <h6>User</h6><br>
                <h1><?= $loan['user_id'] ?></h1>
                <h6>Book</h6><br>
                <h1><?= $loan['book_id'] ?></h1>
                <h6>Start Date</h6><br>
                <h1><?= $loan['date_start'] ?></h1>
                <h6>End date</h6><br>
                <h1><?= $loan['date_end'] ?></h1>
            <?php }?>
        </fieldset>
    </div>
    <?php
        include './resources/views/layout/footer.php';
    ?> 
    <script src="../../../resources/public/js/register.js"></script>
</body>
</html>