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
        
        <h1>Cookie: basic</h1>

        <h2>Part 1</h2>
    	<ul>
		    <li>
		        Create a login form according to best practices. The result should look like this:

		        <div class="facade-minimal" data-url="http://www.app.local/cookie-login.php">

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

		    <li>Create a .txt file with the following content: ian,password01 <span class="tip">Avoid spaces and/or line breaks at the end of this string</span></li>

		    <li>Make sure this .txt file is loaded via PHP</li>

		    <li>Put the content of the .txt file into an array. Use the <code>explode()</code> function based on the comma or use a JSON notation in combination with <code>json_decode()</code></li>

		    <li>
		        Now make sure that when the form is submitted the username AND password are equal to those in the .txt file.

		        <p>This means that if you change the data in the text file, you must log in with this changed data</p>
		    </li>

		    <li>When the password and/or username are not equal, the following message should appear:

		        <div class="facade-minimal" data-url="http://www.app.local/cookie-login.php">

		            <h1>Login</h1>

		            <div class="modal error">
		                Username and/or password incorrect. Try again.
		            </div>

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

		    <li>When they are equal, a cookie must be set with an expiration date of 6 minutes.</li>

		    <li>If the cookie is set and the user is logged in correctly, the following page should be displayed:

		        <div class="facade-minimal" data-url="http://www.app.local/cookie-login.php">

		            <h1>Dashboard</h1>

		            <p>You are logged in.</p>
		            <p><a href="#">Logout</a></p>
		        </div>
		    </li>

		    <li>When "logout" is clicked, the cookie must be deleted. <span class="tip">Use a GET variable</span></li>
		    <li>When the browser is closed and reopened within 6 minutes, the dashboard should still be visible.</li>
		</ul>

		<h1 class="extra">Part 2</h1>

		<ul>
		    <li>Provide a "remember me" checkbox in the input form:

		        <div class="facade-minimal" data-url="http://www.app.local/cookie-login.php">

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
		                    <li>
		                        <input type="checkbox" id="remember" name="remember">
		                        <label for="remember">Remember me</label>
		                    </li>
		                </ul>
		                <input type="submit" name="submit">
		            </form>
		        </div>
		    </li>
		    <li>When this is checked, the cookie has an expiration date of 30 days</li>
		    <li>When this is not checked, the cookie expires after the session ends</li>
		</ul>

		<h1 class="extra">Part 3</h1>

		<ul>
		    <li>Make sure a personal greeting appears when logged in. (e.g., "Hello Ian, welcome back!")

		        <li>If the cookie is set and the user is logged in correctly, the following page should be displayed:

		            <div class="facade-minimal" data-url="http://www.app.local/opdracht-cookies-login.php">

		                <h1>Dashboard</h1>

		                <p>Hello Ian, glad to have you back!</p>
		                <p><a href="#">Logout</a></p>
		            </div>

		        </li>
		    </li>
		</ul>

		<h1 class="extra">Part 4</h1>

		<ul>
		    <li>Add multiple users and passwords to the .txt file.</li>
		    <li>Now make sure you can log in with multiple users.</li>
		</ul>  

    </body>
</html>