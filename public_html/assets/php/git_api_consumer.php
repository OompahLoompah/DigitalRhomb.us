<?php

include(dirname(__FILE__)."/settings.php");

function call_GitHub($method, $url, $data = false){

    $curl = curl_init();
    $auth = get_authentication("usrpass");
    switch ($method){
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);
            
            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            $url = sprintf("%s?%s", $url, http_build_query($data));
    }
    
    curl_setopt($curl, CURLOPT_USERAGENT, 'OompahLoompah/DigitalRhomb.us');

    //Authentication
    curl_setopt($curl, "CURLOPTHTTPAUTH", CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_USERPWD, $auth["username"].":".$auth["password"]);

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);

    curl_close($curl);

    return $result;
    
}

function get_GitHubStats($request){

   $stats = json_decode(call_GitHub('get', 'https://api.github.com/'.$request));
   echo '<pre>'.var_dump($stats).'</pre>';

};

?>
