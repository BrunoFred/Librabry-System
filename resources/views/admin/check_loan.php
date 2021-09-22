<?php
require_once ('./models/User.php');
require_once ('./models/Book.php');
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
            <?php foreach ($loans as $loan) { ?>
                <div class="loans-list">
                    <h6>Loan ID: <?= $loan['id'] ?> </h6>

                    <?php if ($user = (new User())->find($loan['user_id'])) { ?>
                        <h6>User: <?= $user['name'] ?></h6>
                    <?php } ?>

                    <?php if ($book = (new Book())->find($loan['book_id'])) { ?>
                        <h6>Book: <?= $book['name'] ?></h6>
                    <?php } ?>

                    <h6>Start Date: <?= $loan['date_start'] ?></h6>

                    <h6>End Date: <?= $loan['date_end'] ?> </h6>
                </div>
            <?php } ?>
        </fieldset>
    </div>
    <?php
    include './resources/views/layout/footer.php';
    ?>
    <script src="../../../resources/public/js/register.js"></script>
</body>

</html>