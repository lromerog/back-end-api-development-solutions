<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/global.css">
        <link rel="stylesheet" type="text/css" href="/css/directory.css">
        <link rel="stylesheet" type="text/css" href="/css/facade.css">
    </head>
    <body>
        <h1>Databases: add</h1>

        <h2>Part 1: database</h2>
        <ul>
            <li>Create a database called back-end-users-exercise
                <ul>
                    <li>Add a table called <b>users</b></li>
                    <li>This table contains the following columns
                        <ul>
                            <li><b>id</b>: primary key, unique</li>
                            <li><b>username</b>: varchar</li>
                            <li><b>password</b>: varchar</li>
                        </ul>
                    </li>
                    <li>Manually add some users</li>
                    <li>This will be the database for this exercise</li>
                </ul>
            </li>
        </ul>

        <h2>Part 2: register form</h2>
        <ul>
            <li>
                Create a form to register a user:
                <div class="facade-minimal" data-url="http://www.app.local/add.php">
                    <h1>Register</h1>
                    <form action="initializing.php" method="post">
                        <ul>
                            <li><label for="username">Username: </label>
                            <input type="text" name="username" id="username"></li>
                            <li><label for="password">Password: </label>
                            <input type="password" name="password" id="password"></li>
                        </ul>
                        <input type="submit">
                    </form>
                </div>
            </li>
            <li>When clicking on submit the data is sent to the same page.</li>
            <li>Add the userdata to the database</li>
            <li>Show a message that the user has registered successfully</li>
            <li>Check in the database using SQLite studio if the user has been added.</li>
        </ul>

        <h2>Part 3: validation</h2>
        <ul>
            <li>
                Add validation to the form. If a users submits an invalid username (ie. an empty one) or password, an error message needs to be shown.
                <div class="facade-minimal" data-url="http://www.app.local/add.php">
                    <h1>Register</h1>
                    <div class="modal error">Your username or password are invalid</div>
                    <form action="initializing.php" method="post">
                        <ul>
                            <li><label for="username">Username: </label>
                            <input type="text" name="username" id="username"></li>
                            <li><label for="password">Password: </label>
                            <input type="password" name="password" id="password"></li>
                        </ul>
                        <input type="submit">
                    </form>
                </div>
            </li>
            <li>The conditions the <b>username</b> needs to apply to:
                <ul>
                    <li>It can not be empty</li>
                    <li>It can not be already present in the database</li>
                </ul>
            </li>
            <li>The conditions the <b>password</b> needs to apply to:
                <ul>
                    <li>It can not be empty</li>
                    <li>It needs to be at least 8 characters long</li>
                    <li>It needs contain at least one of these special characters: <b>! ? @ _</b></li>
                </ul>
            </li>
            <li class="extra">Show detailed feedback on what is wrong under the input field that is invalid</li>
            <li class="extra">Add an extra input field that makes the user confirm the password. Check if they match in the PHP-code.</li>
            <li class="extra">Add an extra column to the users table that is called <b>created_at</b>. This needs to contain the date on which the user has been created (use <b>timestamp<b>)</li>
        </ul>
    </body>
</html>
