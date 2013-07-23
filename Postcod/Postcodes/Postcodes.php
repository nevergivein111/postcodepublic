<?php
/**
 * The RestDispatchService can be used to send SMS and Voice messages
 */
class Postcodes
{   

	public $account="account";
	public $password="password";
	public $postcode="password";
	
  
    function getpostcodes()
    {
        $account = 'test1';
        $password = 'test1';

        $URL = "http://ws1.postcodesoftware.co.uk/lookup.asmx/getAddress?account=" . $this->account . "&password=" . $this->password . "&postcode=" . $this->postcode;
            
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
