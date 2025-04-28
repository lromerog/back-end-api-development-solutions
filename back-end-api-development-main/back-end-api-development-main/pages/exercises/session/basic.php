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
        
        <h1>Session: basic</h1>

        <h2>Part 1: Registration Page</h2>
	        <ul>
	            <li>Create a form that looks like this:
	                <div class="facade-minimal" data-url="http://www.app.local/register.php">
	                    <h1>Part 1: Registration Details</h1>
	                    <form>
	                        <ul>
	                            <li>
	                                <label for="email">Email</label>
	                                <input type="text" id="email">
	                            </li>
	                            <li>
	                                <label for="nickname">Nickname</label>
	                                <input type="text" id="nickname">
	                            </li>
	                        </ul>
	                        <input type="submit" value="Next">
	                    </form>
	                </div>
	            </li>
	            <li>Use a POST method</li>
	            <li>The action is set to the address details page</li>
	            <li>When 'Next' is clicked, the values of the input elements must be stored in the session.</li>
	        </ul>

		    <h2>Part 2: Address Page</h2>

		        <ul>
		            <li>Display the email address and nickname under a title "Registration Details"</li>
		            <li>Create another form so that the address page looks like this:
		                <div class="facade-minimal" data-url="http://www.app.local/registration-address.php">
		                    <h1>Registration Details</h1>
		                    <ul>
		                        <li>Email: richard@piedpiper.com</li>
		                        <li>Nickname: The Puppet Master</li>
		                    </ul>
		                    <h1>Part 2: Address</h1>
		                    <form>
		                        <ul>
		                            <li>
		                                <label for="street">Street</label>
		                                <input type="text" id="street">
		                            </li>
		                            <li>
		                                <label for="number">Number</label>
		                                <input type="number" id="number">
		                            </li>
		                            <li>
		                                <label for="city">City</label>
		                                <input type="text" id="city">
		                            </li>
		                            <li>
		                                <label for="zipcode">Zipcode</label>
		                                <input type="text" id="zipcode">
		                            </li>
		                        </ul>
		                        <input type="submit" value="Next">
		                    </form>
		                </div>
		            </li>
		            <li>Now ensure that when the page is refreshed using <kbd>F5</kbd> / <kbd><kdb>cmd</kdb> + <kbd>r</kbd></kbd>, the entered information remains in the input fields.</li>
		            <li>Also provide a link to destroy the session (so that all information in the session is deleted). You can use this for better testing instead of manually deleting your session ID.</li>
		            <li>Work via a POST method</li>
		            <li>The action is set to the overview page</li>
		            <li>When 'Next' is clicked, the values of the input elements must be stored in the session.</li>
		        </ul>

		        <h2>Part 3: Overview Page</h2>
		        <ul>
		            <li>This page contains all the data entered in the previous pages. It looks like this:
		                <div class="facade-minimal" data-url="http://www.app.local/registration-overview.php">
		                    <h1>Overview Page</h1>
		                    <ul>
		                        <li>Email: richard@piedpiper.com | <a href="">Edit</a></li>
		                        <li>Nickname: The Puppet Master | <a href="">Edit</a></li>
		                        <li>Street: Great America Parkway | <a href="">Edit</a></li>
		                        <li>Number: 4401 | <a href="">Edit</a></li>
		                        <li>City: Palo Alto | <a href="">Edit</a></li>
		                        <li>Zipcode: CA 95054 | <a href="">Edit</a></li>
		                    </ul>
		                </div>
		            </li>
		            <li>Provide an "Edit" link for each piece of data. When this link is clicked, go to the page where the input field for that piece of information is located.</li>
		            <li>The field to be edited is automatically focused:
		                <div class="facade-minimal" data-url="http://www.app.local/opdracht-sessions-pagina-02-adres.php">
		                    <h1>Registration Details</h1>
		                    <ul>
		                        <li>Email: richard@piedpiper.com</li>
		                        <li>Nickname: The Puppet Master</li>
		                    </ul>
		                    <h1>Part 2: Address</h1>
		                    <form>
		                        <ul>
		                            <li>
		                                <label for="street">Street</label>
		                                <input type="text" id="street" value="Great America Parkway" class="emphasize" data-tooltip="This is automatically focused">
		                            </li>
		                            <li>
		                                <label for="number">Number</label>
		                                <input type="number" id="number" value="4401">
		                            </li>
		                            <li>
		                                <label for="city">City</label>
		                                <input type="text" id="city" value="Palo Alto">
		                            </li>
		                            <li>
		                                <label for="zipcode">Zipcode</label>
		                                <input type="text" id="zipcode" value="CA 95054">
		                            </li>
		                        </ul>
		                        <input type="submit" value="Next">
		                    </form>
		                </div>
		            </li>
		            <li>You can choose how you set this focus (via GET, via session, ...) and how you visually represent the focus (via class or via autofocus attribute). Investigate what you think is the best option.</li>
		        </ul>

    </body>
</html>