<?php
defined('_JEXEC') or die('Direct Access to this location is not allowed.');
 
class SInfo
{
    /**
     * Returns visitor's information
    */
    public function getDate()
    {
        $date = date('l jS \of F Y h:i:s A');
 
        return $date;
    } //end getIDate
 
} //end SInfo
?>
