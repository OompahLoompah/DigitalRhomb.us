<?php

include(dirname(__FILE__)."/assets/php/common_html_getters.php");
include(dirname(__FILE__)."/assets/php/git_api_consumer.php");

?>

<!DOCTYPE html>
<html>
    <?php get_header(); ?>
    <body>
        <?php get_navbar(); ?>
        <div id="wrapper">
            <?php get_GitHubStats(); ?>
        </div>
    <?php get_footer(); ?>
    </body>
</html>
