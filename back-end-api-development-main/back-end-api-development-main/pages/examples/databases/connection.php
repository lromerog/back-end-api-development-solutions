<?php

    try {
        
        // Part 1: establishing a connection
        $db = createSqliteDbConnection('spotify.sqlite');

        // Part 2: Query to execute        
        // Select all artists
        $genresQuery = "SELECT * FROM genres";

        // Part 3: execute query and return result as an array        
        $genres = fetchResultForQuery(
            $db, 
            $genresQuery
        );

        // Part 4: when you're done, close the DB connection
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

        // Preparing means sanitizing them, checking for errors/malicious code before execution
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

        <h1>Databases: connection</h1>

        <h2>Getting all genres from the database</h2>

        <p><b>query:</b> <code><?= $genresQuery ?></code></p>

        <table>
            <tr>
                <th>GenreId</th>
                <th>Name</th>
            </tr>
            <?php foreach($genres as $genre): ?>
            <tr>
                <td><?= $genre['GenreId'] ?></td>
                <td><?= $genre['Name'] ?></td>
            </tr>

            <?php endforeach ?>
        </table>

    </body>
</html>