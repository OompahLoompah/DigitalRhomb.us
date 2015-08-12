<?php

function get_navbar(){
    echo '        <div id="nav-wrapper">
        <i class="menu-bars fa fa-2x fa-bars"></i>
        <nav class="full-menu">
            <a id="left-align" href="index.php">Sean Heuer</a>
            <ul>
                <li><a href="/contact.php">Contact</a></li>
                <li><a href="/about.php">About</a></li>
                <li><a href="/gitstats.php">GitHub Statistics</a></li>
                <li><a href="/testing_grounds.php">Testing Grounds</a></li>
                <li><a href="/portfolio.php">Portfolio</a></li>
            </ul>
        </nav>
        <div id="sidr-menu">
            <ul>
                <li><a href="/index.php">Home</a></li>
                <li><a href="/contact.php">Contact</a></li>
                <li><a href="/about.php">About</a></li>
                <li><a href="/gitstats.php">GitHub Statistics</a></li>
                <li><a href="/testing_grounds.php">Testing Grounds</a></li>
                <li><a href="/portfolio.php">Portfolio</a></li>
                <li><a href="https://github.com/SeanHeuer" title="GitHub Profile">GitHub</a></li>
                <li><a href="https://www.linkedin.com/pub/sean-heuer/65/679/778" title="LinkedIn Profile">LinkedIn</a></li>
            </ul>
        </div>

        <script>
            $(\'.menu-bars\').sidr({
                name: \'sidr-menu\',
                source: \'#sidr-menu\',
                side: \'right\'
            });
        </script>
        </div>';

}

function get_header(){
    echo '    <head>
        <title>For lack of better code</title>
        <meta name="author" content="Sean Heuer">
        <meta name="description" content="The personal homepage and resume of Sean M Heuer">
        <meta name="ketwords" content="resume, web developer, web development, sean heuer">
        <link rel="stylesheet" href="/assets/stylesheets/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="/assets/js/sidr/src/jquery.sidr.js"></script>
    </head>';
}

function get_footer(){
    echo '        <footer>
            <p>The full source code for DigitalRhomb.us is available under the MIT License. Please visit the <a href="https://github.com/SeanHeuer/DigitalRhomb.us/blob/master/LICENSE">project page</a> for more information.</p>
        </footer>';
}

?>
