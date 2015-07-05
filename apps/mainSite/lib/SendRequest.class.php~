<?php
class sendRequest
{

function sendCurlPostRequest($urlToHit,$postParams)
        {       
                $ch = curl_init($urlToHit);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                if($postParams)
                        curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                if($postParams)
                        curl_setopt($ch, CURLOPT_POSTFIELDS,$postParams);
                curl_setopt($ch, CURLOPT_TIMEOUT, 50);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                $output = curl_exec($ch);
                return $output;
        }
}
?>
