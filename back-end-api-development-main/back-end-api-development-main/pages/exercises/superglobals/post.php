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
        
        <h1>Superglobals: $_POST</h1>

        <h2>Part 1</h2>
        <ul>
            <li>Create an HTML form following best practices
                <ul>
                    <li>The action is the name of the current page</li>
                    <li>Use a POST method</li>
                    <li>This form contains two input fields:
                        <ul>
                            <li>username</li>
                            <li>password (of the password type!)</li>
                            <li>Don't forget to assign a name attribute to these fields</li>
                            <li>Use a label (work with an id on the input fields)</li>
                        </ul>
                    </li>
                    <li>
                        The result should look something like this:

                        <div class="facade-minimal" data-url="http://www.app.local/index.php">

                            <h1>Login</h1>

                            <form>
                                <ul>
                                    <li>
                                        <label for="username">Username</label>
                                        <input type="text" id="username" name="username">
                                    </li>
                                    <li>
                                        <label for="password">Password</label>
                                        <input type="password" id="password" name="password">
                                    </li>
                                </ul>
                                <input type="submit" name="submit">
                            </form>
                        </div>
                    </li>
                </ul>
            </li>

            <li>In the PHP script tag (at the top), do the following:

                <ul>
                    <li>Create a variable <code>$password</code> with a string of your choice as the password (e.g., <code>'azerty'</code>)</li>
                    <li>Create a variable <code>$username</code> with a string of your choice as the username (e.g., <code>'stijn'</code>)</li>
                    <li>
                        Check if the form has been submitted
                        <ul>
                            <li>Use the <code>isset()</code> function</li>
                            <li>Make sure no Undefined index occurs. If this occurs, it means you have not worked with <code>isset()</code> correctly.</li>
                        </ul>
                    </li>
                    <li>If the form has been submitted, check if the username and password entered by the user are equal to the value you placed in the variable (e.g., azerty/stijn)
                        <ul>
                            <li>If they do not match, give an error message: 'There was an error logging in, please try again'</li>
                            <li>If they match, display a message: 'Welcome'</li>
                            <li>
                                Place this message in a variable <code>$message</code> which you display at the bottom in the HTML.
                                <p class="remark">If the form has not been submitted, an undefined variable error may occur; try to resolve this by, for example, defining the variable outside the <code>if ( isset ( ... ) )</code> or giving it a certain value.</p>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </body>
</html>