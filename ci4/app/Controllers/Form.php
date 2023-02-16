<?php

namespace App\Controllers;

class Form extends BaseController
{
    public function index()
    {
        return view('content');
    }

    public function submit()
    {
        // getting values from html form
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $phone = $this->request->getPost('phone');
        $notes = $this->request->getPost('notes');

        // database details
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "new_db";

        // creating connection
        $connect = mysqli_connect($host, $user, $pass, $dbname);

        if (!$connect)
        {
            die("Connection Failed!" . mysqli_connect_error());
        }

        // using sql to create a data entry query
        $sql = "INSERT INTO `db_table` (`name`, `email`, `phone`, `notes`) VALUES ('$name', '$email', '$phone', '$notes')";

        // send query to the database to add values and confirm if successful
        $rs = mysqli_query($connect, $sql);
        if ($rs) 
        {
            echo "Form Submitted!";
        }
        else
        {
            echo "Error Submitting Form: " . mysqli_error($connect);
        }

        // close connection
        mysqli_close($connect);
    }
}
