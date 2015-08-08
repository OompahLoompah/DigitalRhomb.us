<?php 

include(dirname(__FILE__)."/assets/php/test.php"); 

?>

<!DOCTYPE html>
<html>
    <?php get_header(); ?>
    <body>
        <?php get_navbar(); ?>
        <div id="main">
            <img src="assets/images/seanheuer.jpg" title="Sean Heuer">
            <div class="info-box">
                <ul>
                    <li><a href="https://github.com/SeanHeuer" class="octocat" title="GitHub Profile"></a></li>
                    <li><a href="https://www.linkedin.com/pub/sean-heuer/65/679/778" class="linkedin" title="LinkedIn Profile"></a></li>
                </ul>
                <h3>Sean Heuer</h3>
                <h5>Full Stack Developer</h5>
                <p>Clean, efficient, maintainable code written for you.</p>
            </div>
        </div>
    </body>
</html>
