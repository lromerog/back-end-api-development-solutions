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
		<h1>Databases: delete</h1>

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

        <h2>Part 2: dashboard</h2>
        <ul>
            <li>This will contain an overview of the users:
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
                                <td>Jeff</td>
                                <td>IHatePasswords!</td>
                                <td>[<a href="" title="delete">x</a>]</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Theresa</td>
                                <td>_1k33pF0rg3tt1ng_</td>
                                <td>[<a href="" title="delete">x</a>]</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Tam</td>
                                <td>Ayooooo@</td>
                                <td>[<a href="" title="delete">x</a>]</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Tim</td>
                                <td>!timtimtimtim</td>
                                <td>[<a href="" title="delete">x</a>]</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </li>
            <li>When clicking on the [x] the user needs to be deleted</li>
        </ul>

        <h2>Part 3: confirm delete</h2>
        <ul>
            <li>When clicking on the delete button, show a confirmation dialog first:
                <div class="facade-minimal" data-url="http://www.app.local/index.php">
                    <h1>Dashboard</h1>
                    <h2>user overview</h2>
                    <div class="modal warning">
                        <p>You are about to delete "<b>Jeff"</b>(id: 1). Are you sure?</p>
                        <p><button>delete</button> <button>cancel</button></p>
                    </div>
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
                                <td>Jeff</td>
                                <td>IHatePasswords!</td>
                                <td>[<a href="" title="delete">x</a>]</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Theresa</td>
                                <td>_1k33pF0rg3tt1ng_</td>
                                <td>[<a href="" title="delete">x</a>]</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Tam</td>
                                <td>Ayooooo@</td>
                                <td>[<a href="" title="delete">x</a>]</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Tim</td>
                                <td>!timtimtimtim</td>
                                <td>[<a href="" title="delete">x</a>]</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </li>
            <li>When clicking on cancel the overview page is shown again</li>
            <li>When clicking on delete the row is finally deleted</li>
        </ul>

        <h2 class="extra">Part 4: soft delete</h2>
        <ul>
            <li>Add an extra column <b>SoftDeleted</b> to the users table
                <ul>
                    <li>Type: boolean</li>
                    <li>Default value: 0</li>
                </ul>
            </li>

            <li>This will be used to <i>softly delete</i> the user, meaning it will still be present in the database. These softdeleted rows are never shown or used.</li>

            <li>Rewrite your overview query to hide all the users where the SoftlyDeleted value equals 1</li>
            </li>

            <li>Rewrite your delete query, so it doesn't delete the row, but it sets the SoftDeleted boolean value to 1. This will hide it from the overview.</li>

            <li>💡 By reverting the SoftDeleted value in the database you can revive the user</li>
        </ul>
    </body>
</html>
