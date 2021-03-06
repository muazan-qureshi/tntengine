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
    }
} //class end here

$object = new tripntour;
