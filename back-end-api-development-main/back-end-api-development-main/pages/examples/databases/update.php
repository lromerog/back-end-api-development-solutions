<?php

    try {
        
        $db = createSqliteDbConnection('spotify.sqlite');
       
        $employeesColumns = fetchResultForQuery(
            $db, 
            'PRAGMA table_info(employees)'
        );

        // Check if an employee need to be deleted
        if (isset($_POST['update']))
        {
            $employeesUpdateQuery = "UPDATE employees SET LastName = :LastName WHERE EmployeeId = :EmployeeId";

            $params = [
                ':EmployeeId' => $_POST['EmployeeId'],
                ':LastName' => $_POST['LastName'],
            ];

            // For debugging the query
            //var_dump(strtr($employeesUpdateQuery, $params));

            fetchResultForQuery(
                $db, 
                $employeesUpdateQuery,
                $params
            );
        }

        // Get all employees
        $employeesQuery = "SELECT * FROM employees";
        $employees = fetchResultForQuery(
            $db, 
            $employeesQuery
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
                $preparedStatement->bindValue($placeholder, $value);
            }
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

        <h2>Getting all employees from the database</h2>

        <p><b>query:</b> <code><?= $employeesQuery ?></code></p>

        <table>
            <tr>
                <td>action</td>
                <?php foreach($employeesColumns as $column): ?>
                    <td><?= $column['name'] ?></td>
                <?php endforeach ?>
            </tr>
            <?php foreach($employees as $employee): ?>
            <tr>
                <form action="update.php" method="POST">
                    <input type="hidden" name="EmployeeId" value="<?= $employee['EmployeeId'] ?>">

                    <td>
                        <button type="submit" name="update">update</button>
                    </td>
                <?php foreach($employee as $key => $employeeData): ?>

                    <td>
                        <?php if($key == 'LastName'): ?>
                        <input type="text" name="<?= $key ?>" value="<?= $employeeData ?>">
                        <?php else: ?>
                            <?= $employeeData ?>
                        <?php endif ?>
                    </td>
                <?php endforeach ?>    
                </form>
            </tr>
            <?php endforeach ?>
        </table>

    </body>
</html>