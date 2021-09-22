<?php
    include "./resources/views/layout/head.php";
?>
    <title>Create Book</title>
</head>
<body>
    <?php
        include "./resources/views/layout/nav-admin.php";
    ?>
    <div class="create-book-form">
        <h3>Register a book here</h3>
    <div>
    <fieldset>
        <legend>Book Register:</legend>
        <form method="POST" action="/books/store">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br><br>
            <label for="description">Description:</label><br>
            <textarea columns="30" rows="10" id="description" name="description"></textarea><br><br>
            <label for="author">Author:</label><br>
            <input type="text" id="author" name="author"><br><br>
            <label for="category">Category:</label><br>
            <input type="text" id="category" name="category"><br><br>
            <label for="Quantity">Quantity:</label><br>
            <input type="number" id="quantity" name="quantity"><br><br>
            <input type="submit" value="Submit">
        </form>
    </fieldset>
    <?php
        include "./resources/views/layout/footer.php";
    ?> 
    <script src="../../../resources/public/js/register.js"></script>
</body>
</html>