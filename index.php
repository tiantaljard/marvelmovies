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