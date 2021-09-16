<?php
include("./layout/head.php")
?>
<link rel="icon" href="../../resources/public/imgs/Robinweatherall-Library-Books.ico" type="image/x-icon">
<link type="text/css" rel="stylesheet" href="../../resources/public/css/style.css">
<title>Books</title>
</head>

<body>
    <script src="../../resources/public/js/register.js"></script>
    <section class=navbar>
        <nav class="nav">
            <div class="logo">
                <input type="image" class="book-logo" src="../../resources/public/imgs/navlogo.png" onclick="myFunction()" />
            </div>
        </nav>
        <div id="menu" class="menu-hover">
            <a href="../views/admin/home.php">Home</a>
            <a href="../books.php">Books</a>
            <a href="#">Pendant</a>
            <a href="#">Historic</a>
            <a href="#">Check Loans</a>
            <a href="../../resources/views/admin/create_user.php">Create User</a>
            <a href="../../resources/views/admin/create_book.php"">Register Book</a>
            <a href=" ../../views/index.php">Logout</a>
        </div>
    </section>
    <div class="book-container">
        <h3>List of Books</h3>
        <div class="book-search-box">
            <input type="search" placeholder="Search..">
        </div>
    </div>
    <div class="books">
        <input type="image" class="folder" src="../../resources/public/imgs/ohobbit.jpg" onclick="makeLoanContent()">
        <ul class="book-atribute">
            <li class="atribute-style">Book Name</li>
            <p class="data-style">O Hobbit</p>
            <li class="atribute-style">Author</li>
            <p class="data-style">Tolkien</p>
            <li class="atribute-style">Category</li>
            <p class="data-style">Adventure</p>
        </ul>
    </div>
    <section>
        <div id="make-loan" class="book-loan">
            <div class="make-loan-content">
                <span class="close" onclick="makeLoanContent()">&times;</span>
                <h4>Description</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lacus urna, dignissim sit amet enim in, fringilla dignissim erat. Praesent vitae vestibulum lectus, vitae lobortis massa. Donec quis nisl scelerisque risus dapibus condimentum vel ut nunc. Morbi ut odio eu quam vulputate porttitor. Duis dignissim lorem vel lectus condimentum facilisis. Nullam est orci, dignissim eget volutpat vel, tempus vitae justo. Nullam quis diam facilisis, molestie nunc id, ornare ante. Etiam venenatis ex quis vestibulum egestas. Integer in metus gravida, efficitur eros vitae, egestas est. Phasellus commodo mi eros, eu ornare purus cursus ac. Nam nec mollis eros, et condimentum mauris. Integer consectetur non velit non pharetra. Nam iaculis, magna sed iaculis consequat, quam sapien congue magna, sed tempus est odio nec mauris. Aenean ac hendrerit velit, et porttitor libero. </p>
                <button type="submit">Get Book</button><br>
            </div>
        </div>
    </section>
    <?php
        include("../../resources/views/layout/footer.php")
    ?>
</body>
</html>