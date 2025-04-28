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
        <h1>Classes: instance</h1>

        <ul>
            <li>The purpose of this exercise is to create a class that calculates what percentage a number is based on a unit, e.g., what percentage is 150 of 100 (=unit)? -> 150 divided by 100 -> 1.5</li>

            <li>It should be possible to call this result in 4 different ways (absolute, relative, based on a whole number, and a nominal value). You do this by accessing these members of the class, e.g., $instance->absolute.</li>

            <li>The structure of this exercise looks like this:
                <ul class="directory">
                    <li class="folder">classes
                        <ul>
                            <li class="file">Percent.php</li>
                        </ul>
                    </li>
                    <li class="file">application.php</li>
                </ul>
            </li>
        </ul>

        <h2>Part 1: Creating the Percent Class</h2>

        <ul>
            <li>Create a file Percent.php. This will contain a class Percent with the following properties:

                <ul>
                    <li><code>$absolute</code> (member, public)</li>
                    <li><code>$relative</code> (member, public)</li>
                    <li><code>$hundred</code> (member, public)</li>
                    <li><code>$nominal</code> (member, public)</li>
                    <li><code>__construct</code> (method, public) with two parameters: <code>$new</code> and <code>$unit</code>
                        <ul>
                            <li>This constructor sets <code>$absolute</code> equal to the value of <code>$new / $unit</code></li>
                            <li><code>$relative</code> equal to the member <code>$absolute - 1</code></li>
                            <li><code>$hundred</code> equal to <code>$absolute * 100</code></li>
                            <li><code>$nominal</code> equal to:
                                <ul>
                                    <li><code>'positive'</code> when <code>$absolute</code> is greater than 1</li>
                                    <li><code>'status-quo'</code> when <code>$absolute</code> is equal to 1</li>
                                    <li><code>'negative'</code> when <code>$absolute</code> is less than 1</li>
                                </ul>
                            </li>
                            <li>Note that all numbers must be stored with two decimal places</li>
                            <li>Each result must pass through the <code>formatNumber</code> method.</li>
                        </ul>
                    </li>
                    <li>
                        <code>formatNumber</code> (method, public) with one parameter: <code>$number</code>
                        <ul>
                            <li>Returns the number with two decimal places <span class="tip"><code>number_format()</code></span></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>

        <h2>Part 2: Calling the Class from application.php</h2>
        <ul>
            <li class="extra">In stead of using the <code>require_once</code> function to load the class, use the <code>autoload</code> function to automatically load the classes. Keep in mind that the class is in the classes directory.</li>

            <li>Create an instance of the <code>Percent</code> class and pass two arguments when creating the instance (e.g., 150 and 100).</li>

            <li>Create a table in the HTML where you access all 4 members using the instance you just created. The result should look like this:

                <div class="facade-minimal table-result" data-url="http://www.app.local/application.php">
                    <style>
                        .table-result table
                        {
                            border:1px solid lightgrey;
                            border-collapse:collapse;
                            max-width:350px;
                        }

                        .table-result td
                        {
                            border:1px solid lightgrey;
                            padding:12px;
                        }
                    </style>
                    <table>
                        <caption>What percentage is 150 of 100?</caption>
                        <thead></thead>
                        <tfoot></tfoot>
                        <tbody>
                            <tr>
                                <td>Absolute</td>
                                <td>1.50</td>
                            </tr>
                            <tr>
                                <td>Relative</td>
                                <td>0.50</td>
                            </tr>
                            <tr>
                                <td>Whole number</td>
                                <td>150.00%</td>
                            </tr>
                            <tr>
                                <td>Nominal</td>
                                <td>positive</td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </li>
        </ul>
    </body>
</html>



