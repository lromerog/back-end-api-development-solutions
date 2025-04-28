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
		<h1>Databases: update</h1>

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

        <h2>Part 2: updating users</h2>
        <ul>
            <li>Make all the user columns editable, apart from the id:
                <div class="facade-minimal" data-url="http://www.app.local/index.php">
                    <h1>Dashboard</h1>
                    <h2>user overview</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>username</th>
                                <th>password</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><input type="text" value="Jeff"></td>
                                <td><input type="text" value="IHatePasswords!"></td>
                                <td>[<a href="" title="update">update</a>]</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><input type="text" value="Theresa"></td>
                                <td><input type="text" value="_1k33pF0rg3tt1ng_"></td>
                                <td>[<a href="" title="update">update</a>]</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><input type="text" value="Tam"></td>
                                <td><input type="text" value="Ayooooo@"></td>
                                <td>[<a href="" title="update">update</a>]</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><input type="text" value="Tim"></td>
                                <td><input type="text" value="!timtimtimtim"></td>
                                <td>[<a href="" title="update">update</a>]</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </li>
            <li>When changing some data and clicking on <i>update</i>, the data is updated for that user</li>
        </ul>
    </body>
</html>
