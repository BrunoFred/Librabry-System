<?php
    include("../layout/head.php")
?>
    <title>Check Loans</title>
</head>
<body>
    <?php
        include("../layout/nav-admin.php")
    ?>
    <div class="check-loans">
        <h3>Check loans info</h3>
        <div class="loan-search-box">
            <input type="search" placeholder="Search..">
        </div>
        <fieldset>
            <h6>Loan ID</h6><br>
            <p>text</p><br>
            <h6>User</h6><br>
            <p>text</p><br>
            <h6>Book</h6><br>
            <p>text</p><br>
            <h6>Start Date</h6><br>
            <p>text</p><br>
            <h6>End date</h6><br>
        </fieldset>
    </div>
    <?php
        include("../layout/footer.php")
    ?> 
    <script src="../../public/js/register.js"></script>
</body>
</html>