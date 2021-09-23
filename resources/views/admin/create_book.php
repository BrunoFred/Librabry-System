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
            <div class="book-form">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" required>
                <label for="description">Description:</label><br>
                <textarea columns="30" rows="10" id="description" name="description" required></textarea>
                <label for="author">Author:</label><br>
                <input type="text" id="author" name="author" required>
                <label for="category">Category:</label><br>
                <input type="text" id="category" name="category" required>
                <label for="Quantity">Quantity:</label><br>
                <input type="number" id="quantity" name="quantity" required>
                <label for="book_cover">Book Cover:</label><br>
                <input type="file" id="book_cover" name="book_cover" required>
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