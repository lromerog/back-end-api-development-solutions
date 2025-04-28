<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/global.css">
        <link rel="stylesheet" type="text/css" href="/css/directory.css">
        <link rel="stylesheet" type="text/css" href="/css/facade.css">

        <style>
            .include-require
            {
                padding:0px;
                padding-top:57px;
                font-size:14px;
            }

            .include-require header
            {
                background-color:#2B3536;
                color:#FFFFFF;
                padding:12px 6px;
            }

            .include-require header .logo
            {
                float:left;
                font-size:18px;
            }

            .include-require header .logo a
            {
                float:left;
                font-size:18px;
                text-decoration:none;
            }
            .include-require header .logo span
            {
                font-weight:bold;
            }

            .include-require header a
            {
               color:#FFFFFF; 
            }
            .include-require nav
            {
                float:right;
            }

            .include-require nav ul
            {
                list-style-type:none;
                padding:0px;
                margin-top:0;
            }
            
             .include-require nav li
             {
                display:inline;
                padding:5px;
                padding-left:18px;
             }
            
            .include-require .body
            {
                width:80%;
                margin:0 auto;
            }
            
            .include-require .body article
            {
                width:26%;
                margin-right:5%;
                padding:0 2%;
                float:left;
                background-color:#EEEEEE;
            }

            .include-require .body article:nth-child(3n+1)
            {
                margin-right:0;
            }

             .include-require .body article h1:first-child
            {
                font-size:24px;
                margin:12px 0;
            }
            
            .include-require footer
            {
                margin-top:32px;
                padding:6px;
                background-color:#5FC8D1;
                color:#FFFFFF;
                text-align:center;
            }

            .position-relative {
                position:relative;
            }
        </style>
    </head>
    <body>
        <h1>Control structures: include/require</h1>

        <h2>Part 1</h2>

        <ul>
            <li>The goal is to split an HTML page into pieces (header, body, footer) and then reassemble them using PHP to create the original page. Data will also be defined in the PHP file, which needs to be read in the HTML.</li>
            <li>Try building your HTML page yourself. You can get inspiration from examples you find on sites like <a href="https://dribbble.com/search?q=website">dribbble</a>.
                <p>The final result should have the following structural appearance:</p>

                <div class="facade-minimal" data-url="http://www.app.local/index.php">

                    <section class=" include-require">
                        <header class="group position-relative">
                            <div class="logo">
                                <a href="#">Daily <span>PHP</span></a>
                            </div>
                            <nav>
                                <ul>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Our Editorial Team</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </nav>
                        </header>

                        <section class="body group">
                            <h1>News</h1>

                            <article>
                                <h1>PHP 8.4 Released</h1>
                                <p>The latest version of PHP includes extensions for mind control facades, in-browser 3D projections, and the drone API.</p>
                                <p>Keywords: new, PHP 8.4</p>

                            </article>

                            <article>
                                <h1>Zymphovel Framework</h1>
                                <p>Will Zymphovel become the newest PHP framework to rapidly conquer the world?</p>
                                <p>Keywords: frameworks</p>
                            </article>

                            <article>
                                <h1>Rasmus Lerdorf Missing</h1>
                                <p>The creator of PHP, Rasmus Lerdorf, has been missing since last week after departing for Ibiza in his private jet.</p>
                                <p>Keywords: bizarre, rasmus lerdorf, party animal</p>
                            </article>
                        </section>

                        <footer>
                            Daily PHP is a blog about PHP.
                        </footer>
                    </section>
                </div>
            </li>

            <li>The folder/file structure looks like this:
                <ul class="directory">
                    <li class="folder">view
                        <ul>
                            <li class="file">header-partial.html</li>
                            <li class="file">body-partial.html</li>
                            <li class="file">footer-partial.html</li>
                        </ul>
                    </li>
                    <li class="file">index.php</li>
                </ul>
            </li>

            <li>
                <h2>Step 1: Create and Split the HTML Page</h2>
                <ul>
                    <li>First, create an HTML page with valid HTML markup.</li>
                    <li>The body should contain at least one paragraph with some text.</li>
                    <li>You can make it as elaborate as you want (header with nav, footer, etc.).</li>
                    <li>Then, split it into the following parts:
                        <ul>
                            <li>
                                <h3>header-partial.html</h3>
                                <ul>
                                    <li>This file should contain valid HTML markup with the required tags up to at least the opening body tag (html, head, title, body) and the header with navigation of your page, if they exist in your design.</li>
                                </ul>
                            </li>
                            <li>
                                <h3>body-partial.html</h3>
                                <ul>
                                    <li>This should contain everything that is within the body container, depending on how your HTML page is structured.</li>
                                </ul>
                            </li>
                            <li>
                                <h3>footer-partial.html</h3>
                                <ul>
                                    <li>This should contain the end of your page with any footer, depending on how your HTML page is structured.</li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>
            <li>
                <h2>Step 2: Reassemble the HTML</h2>
                <li>This is done in the index.php file.</li>
                <li>Create a variable <code>$articles</code> in this file. It should contain a multidimensional array with the following structure:

                    <ul class="array-notation pre">
                        <li>
                            [0] =>
                            <ul>
                                <li>['title'] => Title of article 1</li>
                                <li>['text'] => Text of article 1</li>
                                <li>['tags'] =>
                                    <ul>
                                        <li>[0] => tag 1 of article 1</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            [1] =>
                            <ul>
                                <li>['title'] => Title of article 2</li>
                                <li>['text'] => Text of article 2</li>
                                <li>['tags'] =>
                                    <ul>
                                        <li>[0] => tag 1 of article 2</li>
                                        <li>[1] => tag 2 of article 2</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            [2] =>
                            <ul>
                                <li>['title'] => Title of article 3</li>
                                <li>['text'] => Text of article 3</li>
                                <li>['tags'] =>
                                    <ul>
                                        <li>[0] => tag 1 of article 3</li>
                                        <li>[1] => tag 2 of article 3</li>
                                        <li>[2] => tag 3 of article 3</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>Perform the necessary includes of the header, body, and footer.</li>
                <li>Now, ensure that the <code>$articles</code> array is looped through in the body and the articles are read.</li>
                <li>If successful, check if your HTML is valid using the <a href="http://validator.w3.org/">W3 HTML validator</a>. If not, make the necessary adjustments.</li>
            </li>
        </ul>

    </body>
</html>
