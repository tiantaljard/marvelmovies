<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Marvel Movies</title>
</head>
<body>
<header>
    <h1>All Marvel Movies</h1>
</header>
<main>
    <section>
        <h2>List of all Marvel Movies</h2>
        <?
        include 'dbConnect.php';
        $sql_query = "SELECT top 4 marvelMovieID,yearReleased,title,productionStudio,notes FROM marvelmovies; ";
        $result = $link->query($sql_query);
        while($row = $result->fetch_array()){
            // print out fields from row of data
            echo "<p>".$row ['marvelMovieID']. " - ". $row ['title']." - ".$row ['notes']."</p>";

        }
        $result->close();
        $link->close();
        ?>



    </section>

</main>
<footer>
</footer>
</body>
</html>