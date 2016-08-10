<?php
/**
 * Created by PhpStorm.
 * User: James SIngizi
 * Date: 30/1/2016
 * Time: 6:24 PM
 */
class MiNoteDB{

    private  $con;
    /**
     *
     * @var instance
     */
    public static $instance;

    /**
     * get DB instance
     * @return instance
     */
    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * connect via constructor
     */
    public function __construct(){
        // local settings $this->con = new mysqli('localhost', 'root', 'tafadzwa', 'minote');
        $this->con = new mysqli('localhost', 'adminK62fAph', 'A9GaBAFvdPGW', 'minote');
        if (mysqli_connect_error()) {
            trigger_error("error for db con",E_USER_ERROR);
        }
    }


    /**
     *
     * @return mysqli connection
     */
    public function getConnection(){
        return $this->con;
    }

}
?>
