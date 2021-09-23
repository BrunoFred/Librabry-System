<?php
    include "./resources/views/layout/head.php";
?>
    <title>Update Book</title>
</head>
<body>
    <?php
        include "./resources/views/layout/nav-admin.php";
    ?>
    <div class="create-book-form">
        <h3>Update a book here</h3>
    <div>
    <fieldset>
        <legend>Update Book:</legend>
        <form method="POST" action="/books/update">
            <div class="book-form">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" value="<?= $book['name'] ?>">
                <label for="description">Description:</label>
                <textarea columns="30" rows="10" id="description" name="description"><?= $book['description'] ?></textarea>
                <label for="author">Author:</label><br>
                <input type="text" id="author" name="author" value="<?= $book['author'] ?>">
                <label for="category">Category:</label><br>
                <input type="text" id="category" name="category" value="<?= $book['category'] ?>">
                <label for="Quantity">Quantity:</label><br>
                <input type="number" id="quantity" name="quantity" value="<?= $book['quantity'] ?>">
                <label for="book_cover">Book Cover:</label><br>
                <input type="text" id="book_cover" name="book_cover" value="<?= $book['book_cover'] ?>">
                <input type="hidden" name="id" value="<?= $book['id'] ?>">
                <button type="submit">Update</button>
            </div>
        </form>
        <form method="POST" action="/books/delete">
            <input type="hidden" name="id" value="<?= $book['id'] ?>">
            <button type="submit">Remove</button>
        </form>
    </fieldset>
    <?php
        include "./resources/views/layout/footer.php";
    ?>
    <script src="../../../resources/public/js/register.js"></script>
</body>
</html>