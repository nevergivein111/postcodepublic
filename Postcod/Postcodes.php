<?php
/**
 * The RestDispatchService can be used to send SMS and Voice messages
 */
class Postcodes
{   
  
    function getpostcodes($postcode)
    {
        $account = Config::get('app.account');
        $password = Config::get('app.password');

        $URL = "http://ws1.postcodesoftware.co.uk/lookup.asmx/getAddress?account=" . $account . "&password=" . $password . "&postcode=" . $postcode;
            
        $xml = simplexml_load_file(str_replace(' ','', $URL)); // Removes unnecessary spaces

        If ($xml->ErrorNumber <> 0) // If an error has occured show message
        {
            echo $xml->ErrorMessage;
            return;
        }

        else
        {            
            return $xml;
        }
    }
}

?>
