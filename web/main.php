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

    // client signup
    // function c_signup()
    // {
    //     if(isset($_POST['c_signup']))
    //     {
    //         $a = $_POST['c_fname'];
    //         // $b = $_POST['c_uname'];
    //         $c = $_POST['c_email'];
    //         $d = $_POST['c_phone'];
    //         $e = $_POST['c_password'];

    //         $sql = "INSERT INTO `clients`(`cl_fname`, `cl_email`, `cl_password`, `cl_phone`,) VALUES ('$a','$c','$e','$d')";
    //         $query = mysqli_query($this->connection(), $sql);
    //         if(!$query)
    //         {
    //            echo('<script>alert("error")</script>');
    //         }
    //         else
    //         {      
    //             // header('location:index.php');
    //             echo('<script>alert("done")</script>');
    //         }

    //     }

    // }
    //function end here

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
    }


} //class end here

$object = new tripntour;
