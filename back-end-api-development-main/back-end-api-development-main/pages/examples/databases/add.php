<?php

    try {
        
        $db = createSqliteDbConnection('spotify.sqlite');
       
        $playlistColums = fetchResultForQuery(
            $db, 
            'PRAGMA table_info(playlists)'
        );

        // Check if an employee need to be deleted
        if (isset($_POST['add']))
        {
            $playlistAddQuery = "INSERT INTO playlists (Name) VALUES (:Name)";

            $params = [
                ':Name' => $_POST['Name']
            ];

            fetchResultForQuery(
                $db, 
                $playlistAddQuery,
                $params
            );
        }

        // Get all employees
        $playlistsQuery = "SELECT * FROM playlists";
        $playlists = fetchResultForQuery(
            $db, 
            $playlistsQuery
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


    function fetchResultForQuery($db, $query, $params = false)
    {
        $result = array();

        // Preparing means sanitizing them, checking for errors/malicious code before execution
        $preparedStatement = $db->prepare($query);

        if ($params)
        {
            foreach ($params as $placeholder => $value) {

                $preparedStatement->bindParam($placeholder, $value);
            }
            // For debugging purposes
            //var_dump(strtr($query, $params));

        }
        // For debugging purposes
        //$preparedStatement->debugDumpParams();

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

        <h1>Databases: update</h1>

        <h2>Add a playlist</h2>

        <form action="add.php" method="POST">
            <input type="text" name="Name">
            <button name="add">Add playlist</button>
        </form>

        <h2>Getting all playlists from the database</h2>

        <p><b>query:</b> <code><?= $playlistsQuery ?></code></p>

        <table>
            <tr>
                <?php foreach($playlistColums as $column): ?>
                    <td><?= $column['name'] ?></td>
                <?php endforeach ?>
            </tr>
            <?php foreach($playlists as $playlist): ?>
            <tr>
                <?php foreach($playlist as $key => $playlistData): ?>
                    <td>
                        <?= $playlistData ?>
                    </td>
                <?php endforeach ?>    
            </tr>
            <?php endforeach ?>
        </table>

    </body>
</html>