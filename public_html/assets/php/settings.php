<?php

function get_authentication($type)
{
    switch($type)
    {
        case "OAuth":
            return -1;
        default:
            return array(
                     "username" => "OompahLoompah",
                     "password" => "my life for aiur"
            );
    }
}

function get_database()
{

    return array(
             "username" => "the_week_admin",
             "password" => "dontbeanassholeyouasshole",
             "database" => "theweektheoretically"
    );

}

?>
