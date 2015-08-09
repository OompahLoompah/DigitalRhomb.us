<?php

function get_navbar(){
    echo '        <nav>
            <a id="index-link" href="index.php">Sean Heuer</a>
            <ul>
                <li><a href="/contact.php">Contact</a></li>
                <li><a href="/about.php">About</a></li>
                <li><a href="/testing_grounds.php">Testing Grounds</a></li>
                <li><a href="/portfolio.php">Portfolio</a></li>
            </ul>
            <i class="fa fa-2x fa-bars"></i>
        </nav>';
}

function get_header(){
    echo '    <head>
        <title>For lack of better code</title>
        <meta name="author" content="Sean Heuer">
        <meta name="description" content="The personal homepage and resume of Sean M Heuer">
        <meta name="ketwords" content="resume, web developer, web development, sean heuer">
        <link rel="stylesheet" href="/assets/stylesheets/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    </head>';
}

function get_footer(){
    echo '        <footer>
            <p>The full source code for DigitalRhomb.us is available under the MIT License. Please visit the <a href="https://github.com/SeanHeuer/DigitalRhomb.us/blob/master/LICENSE">project page</a> for more information.</p>
        </footer>';
}

?>
