<?php
/**
 * Created by PhpStorm.
 * User: jonto
 * Date: 6/25/2017
 * Time: 11:56 AM
 */
class Database{
    private $host = "grabitngofoodmartcom.domaincommysql.com";
    private $db_name = "php_shopping_cart";
    private $username = "grabitngo";
    private $password = "Grab_go2017";
    public $conn;

    public function getConnection(){

        $this->conn = null;

        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch (PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }

}