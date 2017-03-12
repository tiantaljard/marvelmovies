<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>X-Men Movies</title>
</head>
<body>
<header>
    <h1>X-Men  Movies</h1>
</header>
<main>
    <section>
        <h2>List of all Marvel Movies</h2>
        <?
        include 'dbConnect.php';
        $sql_query = "SELECT marvelMovieID,yearReleased,title,productionStudio,notes,LENGTH(notes) as llen FROM marvelmovies where UPPER(title) like '%MEN%'; ";
        $result = $link->query($sql_query);
        while($row = $result->fetch_array()){
            // print out fields from row of data
            echo "<p>".$row ['marvelMovieID']. " - ". $row ['yearReleased']." - ".$row ['title']." - ".$row ['productionStudio']."</p>";
            $notes=$row ['notes'];
            $len=$row ['llen'];
            echo "<p>$notes, $len</p>";



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