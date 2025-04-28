<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/global.css">
        <link rel="stylesheet" type="text/css" href="/css/directory.css">
        <link rel="stylesheet" type="text/css" href="/css/facade.css">
    </head>
    <body >
		<h1>Databases: connection</h1>

        <h2>Part 1</h2>
		<ul>
            <li>Connect to the spotify.sqlite database (you can copy it to your solution folder)
                <ul>
                    <li>You can find it in this repository in the folder pages/exercises/databases/</li>
                    <li>Copy it to your solutions folder</li>
                </ul>
            </li>
            <li>Retrieve all the artists</li>
            <li class="extra">Make sure the artists are ordered from A-Z</li>
            <li>
                It should look something like this:
                <div class="facade-minimal" data-url="http://www.app.local/index.php">
                    <table>
                        <tr>
                            <th>Artist name</th>
                        </tr>
                        <tr><td>Aaron Copland & London Symphony Orchestra</td></tr>
                        <tr><td>AC/DC</td></tr>
                        <tr><td>...</td></tr>
                        <tr><td>Zeca Pagodinho</td></tr>
                    </table> 
                </div>
            </li>
		</ul>

        <h2>Part 2</h2>
        <ul>
            <li>Retrieve all the column names of the customers table</li>
            <li>
                It should look something like this:
                <div class="facade-minimal" data-url="http://www.app.local/index.php">
                    <h1>Customer table colums:</h1>
                    <ul>
                        <li>CustomerId</li>
                        <li>FirstName</li>
                        <li>LastName</li>
                        <li>Company</li>
                        <li>Address</li>
                        <li>City</li>
                        <li>State</li>
                        <li>Country</li>
                        <li>PostalCode</li>
                        <li>Phone</li>
                        <li>Fax</li>
                        <li>Email</li>
                        <li>SupportRepId</li>
                    </ul>
                </div>
            </li>
        </ul>

        <h2>Part 3</h2>
        <ul>
            <li>Create a text input that acts as a search bar in which you can search</li>
            <li>
                It should look something like this:
                <div class="facade-minimal" data-url="http://www.app.local/index.php?table=artists">
                    <h1>List the columns of a specific table</h1>
                    <p>
                        <input type="text" name="table" placeholder="table name" value="artists"><button>search</button>
                    </p>
                    <h1>Result:</h1>
                    <ul>
                        <li>ArtistId</li>
                        <li>Name</li>
                    </ul>
                </div>
            </li>

            <li>When clicking on the submit button it will submit the table name to the same page and populate a result array that contains the columns of the table.</li>

            <li>Make the query <i>shareable</i>, meaning you can copy paste the URL and it will show the results immediately</li>

            <li>When first entering the page, everything under the search bar should be invisible</li>

            <li>If there is a result, it should list the columns in an unordered list</li>

            <li>If there is no result, ie. the table name doesn't exist in the database, it should print in a paragraph that there are no results</li>

            <li class="extra">In stead of a search input, use a select that lists all the tables of the database</li>

            <li class="extra">In stead of adding some text into the search input, try filling in the following code: <code>1 OR 1=1; DROP TABLE customers</code>. Check the customers table. Is it still there? Can you figure out what this piece of code is trying to do? And how you can prevent it from doing what it's supposed to do?</li>
        </ul>
    </body>
</html>
