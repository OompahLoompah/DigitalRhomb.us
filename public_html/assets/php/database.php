<?php

require('settings.php');

class database
{

    private $connection;

    function __construct()
    {

        $settings = $get_database();
        $this->connection = new PDO('mysql:host=localhost;dbname='.$settings[2], $settings[0], $settings[1]);
    }

    function query($theQuery)
    {

        foreach($this->connection->query($theQuery) as $row) {
            echo($row);
        }

    }

    

}

?>
