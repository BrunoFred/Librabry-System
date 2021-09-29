<?php
include "./resources/views/layout/head.php";
?>
<title>Books</title>
</head>
<body>
<script src="../../../resources/public/js/register.js"></script>
<?php
include "./resources/views/layout/nav.php";
?>

<div class="check-loans">
    <h3>Check Pending Loans</h3>
    <fieldset>
        <?php foreach ($loans as $loan) { ?>
            <?php if ($loan['user_id'] == $_SESSION['id']) { ?>
                <div class="loans-list">
                    <?php if ($book = (new Book())->find($loan['book_id'])) { ?>
                        <h6>Book: <?= $book['name'] ?></h6>
                        <h6>Status: <?= $book['status'] ?></h6>
                    <?php } ?>
                    <h6>Date Start: <?= $loan['date_start'] ?></h6>
                    <h6>Date End: <?= $loan['date_end'] ?></h6>
                    <form method="POST" action="/loans/devolve">
                        <input type="hidden" name="id" value="<?= $loan['id'] ?>">
                        <input type="hidden" name="book_id" value="<?= $book['id'] ?>">
                        <div class="book-button-outside">
                            <button type="submit" class="book-button">Finish Loan</button>
                        </div>
                    </form>
                </div>
            <?php }
        } ?>
    </fieldset>
</div>
<?php
include "./resources/views/layout/footer.php";
?>
</body>
</html>