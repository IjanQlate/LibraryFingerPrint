<?php

class Index {

    private $conn;
    private $table_name = "user";

    public $id;
	public $username;
	public $password;
	public $fingerprintid;
	public $fullname;
	public $identitycard;
	public $gender;
    public $title;
    public $privilege;
    public $status;
    public $createdby;


    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read all user
    function read(){
    
        // select all query
        $query = "SELECT
                    *
                FROM
                    " . $this->table_name ." WHERE 
                ORDER BY id ASC";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }

    function hashingpassword(){
    }

    // read user by id & password
    function read_one(){
    
        // select all query
        $query = "SELECT
                    *
                FROM
                    " . $this->table_name ." WHERE 
                username = '" . $this->username ."' AND password = '" . $this->password ."' AND privilege = '" . $this->privilege ."'";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        // get retrieved row
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }


}

?>