<?php
include_once("header.php");
?>
<title>BookStore</title>
</head>
<style>
body {
    background-image: url(livro.jpg);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
}

.container {
    text-align: center;
}
</style>

<body>
    <?php
	include_once("menu.php");
	?>
    <div class="container">
        <div class="col-md-12">
            <h1 style="text-align: center">Bem-vindo ao BookStore</h1>
            <h2 style="text-align: center">Seu sistema de gerenciamento de escola!</h2>
        </div>
    </div>
</body>

</html>