<?php

class tripntour
{
    // Connection start here
    function connection()
    {
        $connect = mysqli_connect('localhost', 'root', '', 'tripntour');
        return $connect;
    }
    // connection end here

    // contact query form insertion to database
    function client_query()
    {
        if (isset($_POST['cq_btn'])) {
            $a = $_POST['name'];
            $b = $_POST['email'];
            $c = $_POST['subject'];
            $d = $_POST['message'];


            $sql = "INSERT INTO `client_query`(`cq_name`, `cq_email`, `cq_subject`, `cq_message`) VALUE('$a','$b','$c','$d')";
            $query = mysqli_query($this->connection(), $sql);
            // return $query;

            if (!$query) {
                echo ('<div class="alert alert-danger p-0 m-0" role="alert">
                Sorry! Something went Wrong Please Try Again
              </div>');
            } else {
                echo ('<div class="alert alert-success p-0 m-0" role="alert">
                Your Query is Successfully Submitted!
              </div>');
            }
        }
    }//client query function end here

   

    function csup()
    {
        if(isset($_GET['btn']))
        {
            $a = $_GET['fname'];
            $b = $_GET['uname'];
            $c = $_GET['email'];
            $d = $_GET['phone'];
            $e = $_GET['password'];

            $sql = "INSERT INTO `clients`(`cl_id`, `cl_fname`, `cl_uname`, `cl_email`, `cl_password`, `cl_phone`, `cl_createDT`) VALUES ('$a','$b','$c','$e','$d')";
            $query = mysqli_query($this->connection(), $sql);
            if(!$query){
        echo('0');
        
        }
        else{
            echo ('1');
            }
        }
    }//function end here



    // Function for packages on website
    function getpkgs()
    {
        $sql = "SELECT * FROM `packages`";
        $query = mysqli_query($this->connection(), $sql);
        return $query;
    }
    //function end here

    //function from string to array
    function expo()
    {
        if(isset($_POST['btn']))
        {
            $a = json_encode(explode(".", $_POST['name']));

            $sql = "INSERT INTO `tester`(`name`) VALUES ('$a')";
            $query = mysqli_query($this->connection(), $sql);
            return $query;    
        }
         
    }



} //class end here

$object = new tripntour;
