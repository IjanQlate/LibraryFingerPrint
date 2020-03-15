<?php

class Book {

    private $conn;
    private $table_name = "book";

	public $bookname;
	public $author;
	public $quantity;
	public $quantityloan;
	public $statusbook;
	public $updateby;


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


	}


	function update(){


	}



	function delete(){


	}


}

include '../config/database.php';

$book = new Book();


?>