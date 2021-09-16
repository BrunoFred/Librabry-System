<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library System</title>
    <link rel="icon" href="../../resources/public/imgs/Robinweatherall-Library-Books.ico" type="image/x-icon">
    <link type="text/css" rel="stylesheet" href="../public/css/style.css">
</head>

<body>
    <div class="container">
        <div class="main-text">
            <h1>Library</h1>
        </div>
        <form action="../views/user/home.php" method="post">
            <div class="login-form">
                <label>Email</label><input type=text name="email"><br><br>
                <label>Password</label><input type=password name="password"><br><br>
                <button type="submit">Login</button><br>
                <button type="button" onclick="openModal()">Register</button>
            </div>
        </form>
    </div>
    <section class="register-modal">
        <div id="myModal" class="register">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <form method="post" action="#"></form>
                <h1>User Register</h1>
                <label>Name</label><input type=text name="name"><br><br>
                <label>Password</label><input type=password name="password"><br><br>
                <label>Email</label><input type=text name="email"><br><br>
                <label>Phone</label><input type=text name="phone"><br><br>
            </div>
        </div>
    </section>
    <script src="../../resources/public/js/register.js"></script>
</body>

</html>