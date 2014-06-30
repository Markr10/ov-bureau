<?php
/**
 * @author  INF2D
 * @date    13-mei-2014
 */

/**
 * Class voor Connectie
 *
 * Connectie van de database aanmaken
 *
 * @category   Connection
 * @copyright  Copyright (c) 2014-2015 INF2D
 * @version    0.1
 * @link       http://ovbureau.serverict.nl/include/cls.connection.php
 * @since      File available since Release 0.1.0
 */

class Connection
{
    protected $link;
    private $server, $userName, $password, $db;
    
    public function Connection($server = '', $userName = '', $password = '', $db = '')
    {
        $this->server = $server;
        $this->userName = $userName;
        $this->password = $password;
        $this->db = $db;
        $this->connect();
    }
    
    private function connect()
    {
        $this->link = mysql_connect($this->server, $this->userName, $this->password) or die (mysql_error());
        if($this->link)
        {
            mysql_select_db($this->db, $this->link) or die (mysql_error());
        }
    }
    
    public function close()
    {
        mysql_close($this->link);
    }
}

?>
