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
        
        <h1>Functions: advanced</h1>
        
        <h2>Part 1</h2>

        <ul>
            <li>Create a global variable <code>$md5HashKey</code> with the value <code>'d1fa402db91a7a93c4f414b8278ce073'</code></li>

            <li>Create three different functions that each address the global variable <code>$md5HashKey</code> in a different way.</li>

            <li>The purpose of these functions is always the same: to count how many percent a certain parameter occurs in <code>$md5HashKey</code>.</li>

            <li>Call each function once, each time with a different argument:
                <ul>
                    <li>Argument Function 1: <code>'2'</code></li>
                    <li>Argument Function 2: <code>'8'</code></li>
                    <li>Argument Function 3: <code>'a'</code></li>
                </ul>
            </li>

            <li>
                Make sure the following is displayed:

                <div class="facade-minimal" data-url="http://www.app.local/index.php">
                    <p>Function 1: The needle '2' occurs 2 times in the hash key 'd1fa402db91a7a93c4f414b8278ce073'</p>
                    <p>Function 2: The needle '8' occurs 1 time in the hash key 'd1fa402db91a7a93c4f414b8278ce073'</p>
                    <p>Function 3: The needle 'a' occurs 3 times in the hash key 'd1fa402db91a7a93c4f414b8278ce073'</p>
                </div>
            </li>
        </ul>

        <h1 class="extra">Part 2 (Angry Birds)</h1>

        <ul>
            <li>The goal is to create a simplified text version of Angry Birds (<a href="http://chrome.angrybirds.com/" target="_blank">http://chrome.angrybirds.com/</a>)</li>

            <li>Create a global variable <code>$pigHealth</code> with value <code>5</code> and a global variable <code>$maximumThrows</code> with value <code>8</code></li>

            <li>Create a function <code>calculateHit</code>. This function is responsible for:
                <ul>
                    <li>Calculating the hit chance (40%). Use the <code>rand</code> function for this.</li>

                    <li>Reducing the <code>$pigHealth</code> variable by one as soon as a hit is made.</li>

                    <li>Returning the string <code>'Hit! There are only xxx pigs left.'</code> or <code>'Miss! xxx pigs left in the team.'</code> depending on the result of the random number. The xxx must be replaced by the effective number.
                    </li>
                </ul>
            </li>

            <li>Create a function <code>launchAngryBird</code>. This function is responsible for:
                <ul>
                    <li>This function contains a static variable to keep track of how many times the function has been called.</li>

                    <li>As long as this static variable is smaller than the number of <code>$maximumThrows</code>, the static variable is incremented by one and the function <code>launchAngryBird</code> calls itself again.</li>

                    <li>As soon as the static variable is equal to <code>$maximumThrows</code>, it is checked whether <code>$pigHealth</code> is equal to zero. If this is the case, the message <code>'Won!'</code> must appear. If the variable pigHealth is greater than zero, the message <code>'Lost!'</code> appears.
                    </li>
                </ul>
            </li>

            <li>You can call the function <code>launchAngryBird</code> a maximum of once in the document.</li>

            <li>
                The end result should look something like this:

                <div class="facade-minimal" data-url="http://www.app.local/index.php">

                    <h1>Text-based Angry Birds</h1>

                    <p>Hit! There are only 4 pigs left.</p>

                    <p>Hit! There are only 3 pigs left.</p>

                    <p>Miss! There are 3 pigs left.</p>

                    <p>Miss! There are 3 pigs left.</p>

                    <p>Miss! There are 3 pigs left.</p>

                    <p>Hit! There is only 1 pig left.</p>

                    <p>Hit! There are only 0 pigs left.</p>

                    <p>Won!</p>

                </div>
            </li>

            <li class="extension">Make sure the text is grammatically correct when <code>$pigHealth</code> is equal to 1</li>

            <li class="extension">Make sure the function automatically stops when <code>$pigHealth</code> is equal to 0</li>
        </ul>

    </body>
</html>