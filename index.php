<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Marvel Movies</title>
</head>
<body>
<header>
    <h1>Michael Crabb - CV</h1>
</header>
<main>
    <section>
        <h2>Connect to three bla database</h2>
            <p>
                what
                <?php
                    include "dbConnect.php";
                $sql_query = "SELECT * FROM superheros WHERE superpower LIKE '%laser%'";
                $result = $db->query($sql_query);
                while($row = $result->fetch_array()){ echo "<p>” .[$row'superheroName']. “</p>";
                }

                $result->close();
                // close connection to database
                $db->close();




                ?>
            </p>

        <p><a href="dbConnect.php">Connect</a></p>

    </section>
    <section>
        <h2>Educa  tion</h2>
    </section>
</main>
<footer>
    <p>Last Updated 19/9/2016</p>
</footer>
</body>
</html>