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
        
        <h1>Superglobals: $_GET</h1>

        <h2>Part 1</h2>

    <ul>
        <li>Search the internet for three different articles and store the following things in a multidimensional array:
            <ul>
                <li>The title of the article</li>
                <li>At least one paragraph</li>
                <li>An image associated with the article
                    <p>It's best to place these image files in a separate folder (e.g., <span class="directory-sa-folder">img</span>)</p>
                </li>
            </ul>
        </li>

        <li>The goal is to create a mini-newspaper where the user can browse an overview of the articles. The result should look something like this:

            <div class="facade-minimal" data-url="http://www.app.local/index.php">

                <style>
                    .multiple {
                        float: left;
                        width: 288px;
                        margin: 16px;
                        padding: 16px;
                        box-sizing: border-box;
                        background-color: #EEEEEE;
                    }

                    .multiple:nth-child(3n+1) {
                        margin-left: 0px;
                    }

                    .multiple:nth-child(3n) {
                        margin-right: 0px;
                    }

                    .single img {
                        float: right;
                        margin-left: 16px;
                    }

                    .multiple h1 {
                        margin: 0;
                        font-size: 18px;
                    }

                    .read-more {
                        text-align: right;
                    }

                    .read-more:after {
                        padding-left: 6px;
                        content: ">";
                    }
                </style>

                <h1>Today's Newspaper</h1>

                <section class="articles">

                    <article class="multiple">
                        <h1>Eight Internet Giants Demand Restrictions on NSA Spying</h1>
                        <p>December 9, 2013</p>
                        <img src="/img/get-article-01.jpg" alt="Mark Zuckerberg next to the Facebook logo">
                        <p>Eight major technology companies, such as Googl...</p>
                        <p class="read-more"><a href="#">Read more</a></p>
                    </article>

                    <article class="multiple">
                        <h1>Wild Benefactor Puts Money in Mailboxes</h1>
                        <p>December 9, 2013</p>
                        <img src="/img/get-article-02.jpg" alt="The residence in Koksijde where the benefactor was working.">
                        <p>Residents of two apartment blocks in Koksijd...</p>
                        <p class="read-more"><a href="#">Read more</a></p>
                    </article>

                    <article class="multiple">
                        <h1>Original Hergé Pieces Auctioned for Hundreds of Thousands of Euros</h1>
                        <p>December 9, 2013</p>
                        <img src="/img/get-article-03.jpg" alt="Tintin and Snowy">
                        <p>Two original pieces by Hergé were auctioned on Sunday for...</p>
                        <p class="read-more"><a href="#">Read more</a></p>
                    </article>
            </div>
        </li>

        <li>
            <h2>Step 1: HTML</h2>
            <ul>
                <li>Create an HTML document in which the articles have a nice appearance.</li>
                <li>Work according to a fixed structure (e.g., title - text - image)</li>
            </ul>
        </li>

        <li>
            <h2>Step 2: Prepare article data</h2>

            <ul>
                <li>Create an array <code>$articles</code>. This will be a multidimensional array.</li>
                <li>The values of the <code>$articles</code> array will contain an associative array with the following keys: <code>'title'</code>, <code>'date'</code>, <code>'content'</code>, <code>'image'</code>, <code>'imageDescription'</code>
                </li>
                <li>The value of these keys corresponds to the content of the three articles you found.</li>
            </ul>

        </li>

        <li>
            <h2>Step 3: Read article data through PHP</h2>
            <ul>
                <li>Now use the <code>$articles</code> array to dynamically populate the content for each article in the HTML structure you just created.
                    <ul>
                        <li>Work in your HTML with a <code>foreach</code> <span class="tip">Use shorthand notation</span></li>
                        <li>In this <code>foreach</code>, put the content (title, content, date, image-src) in the correct place.</li>
                        <li>Instead of showing the full content, only show the first 50 characters, followed by an ellipsis: ...</li>
                        <li>Under the content, add a 'read more' link
                            <ul>
                                <li>The <code>a</code> element has <code>"index.php?id=0"</code> as its <code>href</code> value.</li>
                                <li>Where the <code>id</code> value corresponds to the key in the <code>$articles</code> array.</li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>

        <li>
            <h2>Step 4: Implement GET variable to retrieve individual articles</h2>
            <ul>
                <li>Now modify the script to check if the <code>GET</code> variable <code>id</code> is set.
                    <ul>
                        <li>If this is the case, the individual article should be displayed instead of the full overview.</li>
                        <li>The content is then shown in full instead of just 50 characters.</li>
                        <li>The 'read more' link should no longer be visible.</li>
                        <li>The title (in the head tag) of the HTML page should also be changed to the title of the article.</li>
                        <li>The result should look something like this:

                            <div class="facade-minimal" data-url="http://www.app.local/index.php?id=0">

                                <h1>Individual Article</h1>

                                <div class="container">

                                     <article class="single">

                                    <h1>Eight Internet Giants Demand Restrictions on NSA Spying</h1>

                                    <p>December 9, 2013</p>

                                    <img src="/img/get-article-01.jpg" alt="Mark Zuckerberg next to the Facebook logo">

                                    <p>Eight major technology companies, such as Google, Apple, and Facebook, have demanded changes in the way the government spies in an open letter to US President Barack Obama. They want to restore public trust in the internet.</p>

                                    <p>Internet companies are coordinating for the first time a large, joint response to whistleblower Edward Snowden's revelations about the practices of the US secret service NSA. These include Apple, Google, Microsoft, Facebook, Twitter, AOL, LinkedIn, and Yahoo.</p>

                                    <p>The letter is published on the website www.reformgovernmentsurveillance.com, but it is currently unavailable. The companies complain that the balance has shifted in favor of the government, at the expense of individual freedom. ‘A right enshrined in the Constitution. It’s time for change.’</p>

                                    <p>According to the internet giants, the NSA is threatening their companies, which are suffering from declining public trust in the internet. ‘People don’t use technology they don’t trust,’ said Brad Smith of Microsoft to The Guardian newspaper. ‘Governments have endangered that trust, and governments must now help to restore it.’</p>

                                    <p>‘Reports of government spying have shown that there is a need for more revelations and new limits on government information gathering,’ according to Mark Zuckerberg, CEO of Facebook. ‘The US government must seize this opportunity to initiate reforms and set things right.’ ‘Big data’</p>

                                    <p>Importantly, the companies now support the reform plans of some politicians in Washington. They agree that the NSA should no longer be allowed to collect large amounts of data without a reason to suspect someone of terrorism. Spying should only be applied to ‘specific, known users, and for legitimate purposes’.</p>

                                </article>
                            </div>

                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </li>

    <li class="extension">Make sure that when an id is browsed that does not exist (e.g., <code>"index.php?id=1nj3ct10n"</code>), a message "This article does not exist" is displayed.</li>

    <li class="extension">Make sure you can search the articles.
        <ul>
            <li>Create a form with a search field.</li>
            <li>Check if the form has been submitted.</li>
            <li>If it has been submitted, the arrays should be searched to see if the word appears in the <code>$articles</code> array.
                <p>Try first to check if the word appears in the content; if that works, you can optionally extend with title, date, ...</p>
            </li>
            <li>If the word appears, the corresponding articles should be displayed.</li>
            <li>If the word does not appear, the appropriate message should be displayed: "The search term 'search term' does not appear in our newspaper."</li>
        </ul>
    </li>
    </ul>
            

    </body>
</html>