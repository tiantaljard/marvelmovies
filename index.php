<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Marvel Movies</title>
</head>
<body>
<header>
    <h1>Marvel Movies</h1>
</header>
<main>
    <section>
        <h2>Connect to  database</h2>
        <?
        include 'utils\dbConnect.php';
        ?>
        <p><a href="all.php">All Marvel Movies</a></p>
        <p><a href="xmen.php">All X-MEN Movies</a></p>
        <?php
        echo "<p>{$db}</p>";
        ?>
    </section>

</main>
<footer>
</footer>
</body>
</html>