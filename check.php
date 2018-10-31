<?php

session_start();

$id="";
$idErr="";

$conn = new mysqli("localhost", "root", "", "innovision");

if ($_SERVER["REQUEST_METHOD"] == "POST")
{  
    $val=$_POST["id"];
        
    if (empty($_POST["id"])) 
    {    
        $idErr = "Id is required";  
    }
    else
    {     
        $id = $_POST["id"];  

        $cod=$conn->query("SELECT * FROM feedback WHERE id='".$val."' ");

        if ($cod->num_rows>0)  { $idErr= "You have already submitted once"; }

        else
        {
            $_SESSION["id"]=$id;
            header("location:home.php");  
            exit;              
        }
    }
}

?>