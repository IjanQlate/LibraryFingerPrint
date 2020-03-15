<?php

class User {

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


    // read book
    function read(){
    
        // select all query
        $query = "SELECT
                    *
                FROM
                    " . $this->table_name ."
                ORDER BY id ASC";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }

    // create book
    function create(){


    }

    // Read One
    function readOne(){

        // query to read single record
        $query = "SELECT
                    *
                FROM
                    " . $this->table_name . "
                WHERE
                    id = ?
                LIMIT
                    0,1";

        // prepare query statement
        $stmt = $this->conn->prepare( $query );
    
        // bind id of pelajar to be updated
        $stmt->bindParam(1, $this->id);
    
        // execute query
        $stmt->execute();
    
        // get retrieved row
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // set values to object properties
        $this->id               = $row['id'];
        $this->username         = $row['username'];
        $this->password         = $row['password'];
        $this->fingerprintid    = $row['fingerprintid'];
        $this->fullname         = $row['fullname'];
        $this->identitycard     = $row['identitycard'];
        $this->gender           = $row['gender'];
        $this->title            = $row['title'];
        $this->privilege        = $row['privilege'];
        $this->status           = $row['status'];
        $this->createdon        = $row['createdon'];
        $this->createdby        = $row['createdby'];

	}


	function update(){


	}



	function delete(){


	}


}

?>