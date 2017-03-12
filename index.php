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
        include dbConnect.php;
        ?>
        <p><a href="dbConnect.php">Connect</a></p>

        <?php
        $connectstr_dbhost = '';
        $connectstr_dbname = '';
        $connectstr_dbusername = '';
        $connectstr_dbpassword = '';
        foreach ($_SERVER as $key => $value) {
            if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
                continue;
            }
            $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
            $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
            $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
            $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
        }
        $link = mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword, $connectstr_dbname);



        if (!$link) {
            echo "Error: Unable to  connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }



        $sql_query = "SELECT marvelMovieID,yearReleased,title,productionStudio,notes FROM marvelmovies; ";
        $result = $link->query($sql_query);
        while($row = $result->fetch_array()) {
            // print out fields from row of data
            echo "<p>" . $row ['marvelMovieID'] . " - " . $row ['title'] . " - " . $row ['notes'] . "</p>";
        }
        ?>

    </section>

</main>
<footer>
</footer>
</body>
</html>