<?php

use LDAP\Result;

class operation
{
    private $conn;

    public function __construct()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "crud_operation";

        $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        if (!$this->conn) {
            die("Database connection error");
        }
    }
    public function insert($data)
    {
        $in_name = trim($data['in_name']);
        $in_age = $data['in_age'];
        $in_img = "xyz";
        if (!empty($in_age) && !empty($in_name)) {
            $query = "INSERT INTO student (name,age,img_name) VALUES('$in_name','$in_age','$in_img')";
            $result = mysqli_query($this->conn, $query);
            if ($result) {
                return "Data inserted successfully";
            }
        } else {
            return "Invalid operation";
        }
    }

    public function display()
    {
        $query = "SELECT * FROM student";
        $result = mysqli_query($this->conn, $query);
        if ($result) {
            return $result;
        }
    }
}
