<?php

function get_navbar(){
    echo '        <i class="main-menu fa fa-2x fa-bars"></i>
        <nav class="full-navbar">
            <a id="left-align" href="index.php">Sean Heuer</a>
            <ul>
                <li><a href="/contact.php">Contact</a></li>
                <li><a href="/about.php">About</a></li>
                <li><a href="/testing_grounds.php">Testing Grounds</a></li>
                <li><a href="/portfolio.php">Portfolio</a></li>
            </ul>
        </nav>
        <div id="sidr-menu">
            <nav>
                <a href="index.php">Sean Heuer</a>
                <ul>
                    <li><a href="/contact.php">Contact</a></li>
                    <li><a href="/about.php">About</a></li>
                    <li><a href="/testing_grounds.php">Testing Grounds</a></li>
                    <li><a href="/portfolio.php">Portfolio</a></li>
                </ul>
            </nav>
        </div>

        <script>
            $(\'.main-menu\').sidr({
                name: \'sidr-menu\',
                source: \'nav\',
                side: \'right\'
            });
        </script>';

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
