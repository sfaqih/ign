<?php
    class Request
    {
        public static function get($url,$header)
        {
            // Start curl
            $ch = curl_init();
        
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
    
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    
            $response = curl_exec($ch);
            curl_close($ch);

            // End
    
            return $response;
    
        }
    }
    
?>