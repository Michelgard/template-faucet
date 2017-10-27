<?php

class Vpn
{
    function getVPN($ip, $contactEmail){
            $timeout=5; //by default, wait no longer than 5 secs for a response
            $banOnProability=0.99; //if getIPIntel returns a value higher than this, function returns true, set to 0.99 by default

            //init and set cURL options
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
            //if you're using custom flags (like flags=m), change the URL below
            curl_setopt($ch, CURLOPT_URL, "http://check.getipintel.net/check.php?ip=$ip&contact=$contactEmail");
            $response=curl_exec($ch);

            curl_close($ch);


            if ($response > $banOnProability) {
                    return true;
            } else {
                if ($response < 0 || strcmp($response, "") == 0 ) {
                    //The server returned an error, you might want to do something
                    //like write to a log file or email yourself
                    //This could be true due to an invalid input or you've exceeded
                    //the number of allowed queries. Figure out why this is happening
                    //because you aren't protected by the system anymore
                    //Leaving this section blank is dangerous because you assume
                    //that you're still protected, which is incorrect
                    //and you might think GetIPIntel isn't accurate anymore
                    //which is also incorrect.
                    //failure to implement error handling is bad for the both of us
                }
                    return false;
            }
    }
}