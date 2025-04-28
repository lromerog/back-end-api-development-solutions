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
        
        <h1>Revision exercise 01</h1>
        
        <ul>
            <li>The goal is to create a kind of index page where you can view the course, examples, and assignments on one page and search for specific keywords in the examples and assignments.</li>

            <li>Create navigation using a <code>ul</code> that contains the following:
                <ul>
                    <li>An <code>a</code> element with <code>href</code> value <code>"exercise-repetition-assignment-01.php?link=course"</code> and content "Course"</li>
                    <li>An <code>a</code> element with <code>href</code> value <code>"exercise-repetition-assignment-01.php?link=examples"</code> and content "Examples"</li>
                    <li>An <code>a</code> element with <code>href</code> value <code>"exercise-repetition-assignment-01.php?link=assignments"</code> and content "Assignments"</li>
                </ul>
            </li>

            <li>
                Create a <code>form</code> with an <code>action</code> that refers to itself and a <code>GET</code> as <code>method</code>
            </li>

            <li>
                The result should look something like this:

                <div class="facade-minimal revision-01" data-url="http://www.app.local/index.php">

                    <style>
                        .revision-01 form label {
                            display: inline;
                        }

                        .revision-01 iframe {
                            display: block;
                            height: 200px;
                            width: 400px;
                            border: 1px solid lightgrey;
                            background: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100% 100%"><text fill="%23454545" x="50%" y="50%" font-family="sans-serif" font-size="16" text-anchor="middle">course pdf content here</text></svg>') 0px 0px no-repeat;
                        }
                    </style>

                    <h1>Index Page</h1>

                    <ul>
                        <li><a href="solution-repetition-assignment-01.php?link=course-reference-guide">Course</a></li>
                        <li><a href="solution-repetition-assignment-01.php?link=examples">Examples</a></li>
                        <li><a href="solution-repetition-assignment-01.php?link=solutions">Solutions</a></li>
                    </ul>

                    <form action="solution-repetition-assignment-01.php" method="GET">

                        <label id="search-query">Search for:</label>
                        <input type="text" name="search-query" id="search-query" placeholder="Enter a search term">

                        <input type="submit">

                    </form>

                    <h2>Content</h2>

                    <iframe src="">
                        <p>Here comes the reference to the .pdf course in an iframe</p>
                    </iframe>

                </div>

            </li>

            <li>Then create a PHP script block.</li>

            <li>
                <h2>STEP 1: Reference Guide</h2>
                <ul>
                    <li>When you click on the 'Course' link, an iframe should be displayed with a height of 750px and a width of 1000px, containing a reference to the PDF version of the course.
                    <li>You can use the <code>GET</code> variable <code>link</code> in combination with a switch for this.</li>
                </ul>
            </li>

            <li>
                <h2>STEP 2: Show Examples and Assignments List</h2>
                <ul>
                    <li>
                        When you click on examples or assignments, a list should be displayed with all the files in these folders. <span class="tip"><code>scandir</code> or <code>glob</code> can help</span>
                    </li>
                    <li>All these items are in a list. Use a custom function <code>showList</code> for this. The result looks like this:
                        <div class="facade-minimal" data-url="http://www.app.local/index.php?link=solutions">
                            <h1>Index Page</h1>

                            <ul>
                                <li><a href="exercise-repetition-assignment-01.php?link=course-reference-guide">Course</a></li>
                                <li><a href="exercise-repetition-assignment-01.php?link=examples">Examples</a></li>
                                <li><a href="exercise-repetition-assignment-01.php?link=solutions">Solutions</a></li>
                            </ul>

                            <form action="exercise-repetition-assignment-01.php" method="GET">

                                <label id="search-query">Search for:</label>
                                <input type="text" name="search-query" id="search-query" placeholder="Enter a search term">

                                <input type="submit">

                            </form>

                            <h2>Index of Solutions</h2>

                            <ul>
                                <li>solution-arrays-functions.php</li>
                                <li>solution-arrays-basic.php</li>
                                <li>solution-comments.php</li>
                                <li>solution-conditional-statements.php</li>
                            </ul>
                        </div>
                    </li>

                    <li class="extension">Do not show folders or other files, only .php files (depending on which function you used to index the files)</li>

                    <li class="extension">Make the list clickable so you can navigate to your exercises.</li>
                </ul>
            </li>

            <li>
                <h2>STEP 3: Create a Search Function</h2>
                <ul>
                    <li>Create a function <code>searchFiles</code></li>
                    <li>When someone enters a search term, the examples and assignments folder should be searched for all filenames that contain the search term.</li>
                    <li>A list should appear with the filenames that contain the search term.</li>
                    <li>Show a title with the search term.</li>
                    <li>Show a message when nothing is found.

                        <div class="facade-minimal" data-url="http://www.app.local/index.php?search-query=AAAARGGHHHHHHHHLLL%21%21%21%21">

                            <h1>Index Page</h1>

                            <ul>
                                <li><a href="solution-repetition-assignment-01.php?link=course-reference-guide">Course</a></li>
                                <li><a href="solution-repetition-assignment-01.php?link=examples">Examples</a></li>
                                <li><a href="solution-repetition-assignment-01.php?link=solution">Solutions</a></li>
                            </ul>

                            <form action="solution-repetition-assignment-01.php" method="GET">

                                <label id="search-query">Search for:</label>
                                <input type="text" name="search-query" id="search-query" placeholder="Enter a search term">

                                <input type="submit">

                            </form>

                            <h2>Search Result for "AAAARGGHHHHHHHHLLL!!!!"</h2>

                            <p>Sorry, no search results found for "AAAARGGHHHHHHHHLLL!!!!"</p>
                        </div>

                    <li>When something is found, a list of the found files is created.</li>

                    <li class="extension">Make sure the value of the placeholder contains the search term. If no search term is specified, the value of this placeholder is 'enter a search term'.</li>

                    <li class="extension">Make the filenames clickable so you can navigate to your found search terms.</li>

                    <li class="extension">Make the content of the files searchable as well <span class="remark">Does this work for every file?</span></li>
                </ul>
            </li>
        </ul>
    </body>
</html>