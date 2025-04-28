<?php

    try {
        
        $result = null;

        $db = createSqliteDbConnection('spotify.sqlite');

        // Select all artists
        // To keep the example short, only first 10 are used
        $artistsQuery = "SELECT * FROM artists";
        $artists = fetchResultForQuery(
            $db, 
            $artistsQuery
        );
        // Only show first 10 to keep an overview
        $artistsSpliced = array_slice($artists, 0, 10);


        // Select the first customer
        $firstCustomerQuery = "SELECT * FROM customers LIMIT 1";
        $firstCustomer = fetchResultForQuery(
            $db, 
            $firstCustomerQuery
        );

        // Select the album which has "Worlds" as it's title 
        $albumWithWorldsQuery = "SELECT * FROM albums WHERE Title LIKE 'Worlds' LIMIT 1";
        $albumWithWorlds = fetchResultForQuery(
            $db, 
            $albumWithWorldsQuery
        );

        // Select the albums which have "oo" in it's title 
        $albumTitleThatContainsOoQuery = "SELECT * FROM albums WHERE Title LIKE '%oo%'";
        $albumTitleThatContainsOo = fetchResultForQuery(
            $db, 
            $albumTitleThatContainsOoQuery
        );

        // Select the artist that has released the album "Worlds"
        $artistWithAlbumTitleWorldsQuery = "SELECT * FROM artists JOIN albums ON artists.ArtistId = albums.ArtistId WHERE albums.Title LIKE 'WORLDS'";
        $artistWithAlbumTitleWorlds = fetchResultForQuery(
            $db, 
            $artistWithAlbumTitleWorldsQuery
        );

        closeSqliteDbConnection($db);
    } 
    catch (PDOException $e) 
    {
        // Handle any errors
        echo "Error: " . $e->getMessage();
    }

    function createSqliteDbConnection($dbFilePath)
    {
        // Create a new PDO instance for SQLite
        $db = new PDO("sqlite:" . $dbFilePath);

        // Set error mode to exception
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $db;
    }


    function fetchResultForQuery($db, $query)
    {
        $result = array();

        $preparedStatement = $db->prepare($query);

        // Execute the query
        $preparedStatement->execute();

        // Fetch all the result as an associative array
        $result = $preparedStatement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    function closeSqliteDbConnection($db)
    {
        // Close the database connection
        $db = null;
    }

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/global.css">
    <link rel="stylesheet" type="text/css" href="/css/directory.css">
    <link rel="stylesheet" type="text/css" href="/css/facade.css">
</head>
    <body>

        <h1>Databases: queries</h1>

        <h2>Getting all artists from the database (only first 10 shown...)</h2>

        <p><b>query:</b> <code><?= $artistsQuery ?></code></p>

        <table>
            <tr>
                <th>ArtistId</th>
                <th>Name</th>
            </tr>
            <?php foreach($artistsSpliced as $artist): ?>
            <tr>
                <td><?= $artist['ArtistId'] ?></td>
                <td><?= $artist['Name'] ?></td>
            </tr>

            <?php endforeach ?>
            <tr><td colspan="2">(<?= count($artists) - 10 ?> results omited)</td></tr>
        </table>
        
        <p>dump of the <code>$artists</code> array (only first 10 shown...):</p>
        <pre><?php print_r($artistsSpliced) ?>
            
(<?= count($artists) - 10 ?> results omited)
        </pre>
        

        <h2>Fetch first customer from the database</h2>
        <p><b>query:</b> <code><?= $firstCustomerQuery ?></code></p>
        <p>name: <?= $firstCustomer[0]['FirstName'] ?>, <?= $firstCustomer[0]['LastName'] ?> email: <?= $firstCustomer[0]['Email'] ?></p>


        <h2>Fetch album which has the title "Worlds"</h2>
        <p><b>query:</b> <code><?= $albumWithWorldsQuery ?></code></p>
        <p><b>AlbumId</b>: <?= $albumWithWorlds[0]['AlbumId'] ?>, <b>Title</b>: <?= $albumWithWorlds[0]['Title'] ?> <b>ArtistId</b>: <?= $albumWithWorlds[0]['ArtistId'] ?></p>

        <h2>Fetch album titles that contain the letter "o"</h2>
        <p><b>query:</b> <code><?= $albumTitleThatContainsOoQuery ?></code></p>
        <p>
            <ul>
                <?php foreach($albumTitleThatContainsOo as $album): ?>
                <li><b>AlbumId</b>: <?= $album['AlbumId'] ?>, <b>Title</b>: <?= $album['Title'] ?> <b>ArtistId</b>: <?= $album['ArtistId'] ?></li>
                <?php endforeach ?>
            </ul>
        </p>


        <h2>Fetch the artist which has an album that has the title "Worlds"</h2>
        <p><b>query:</b> <code><?= $artistWithAlbumTitleWorldsQuery ?></code></p>
        <p><b>ArtistId</b>: <?= $artistWithAlbumTitleWorlds[0]['ArtistId'] ?>, <b>Name</b>: <?= $artistWithAlbumTitleWorlds[0]['Name'] ?> </p>


    </body>
</html>