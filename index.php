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
        print " dbhost - ".$connectstr_dbhost;
        print " dbname- ".$connectstr_dbhost." - ".$connectstr_dbname." - ". $connectstr_dbusername." - ".$connectstr_dbpassword ;
        print " dbusername - ".$connectstr_dbhost." - ".$connectstr_dbname." - ". $connectstr_dbusername." - ".$connectstr_dbpassword ;
        print " dbpassword - ".$connectstr_dbhost." - ".$connectstr_dbname." - ". $connectstr_dbusername." - ".$connectstr_dbpassword ;

        ?>
        <p><a href="all.php">All Marvel Movies</a></p>
        <p><a href="xmen.php">All X-MEN Movies</a></p>
        <p><a href="utils\dbConnect.php">dbC17Aonnect</a></p>

    </section>

</main>
<footer>
</footer>
</body>
</html>