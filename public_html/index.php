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
        <div id="info">
            <div class="columns-3">
                <div class="panel first-panel">
                    <h3>Education</h3>
                    <p>With training and knowledge provided by a Bachelors of Science in Computer and Information Science no project is too complex to be completed.</p>
                </div>
                <div class="panel second-panel">
                    <h3>Experience</h3>
                    <p>With professional experience both as a Full Stack Developer and as a Linux Systems Administrator you don't need to worry about any part of the stack.</p>
                </div>
                <div class="panel third-panel">
                    <h3>Passion</h3>
                    <p>This isn't just a job, this is fun. You can rest easy knowing that the job will receive the attention that it deserves.</p>
                </div>
            </div>
        </div>
        <?php get_footer(); ?>
    </body>
</html>
