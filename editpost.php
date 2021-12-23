<?php
    require_once 'db/conn.php';

    if(isset($_POST['submit'])){
        //extract values from the $_POST array
        $id = $_POST['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $orderDate = $_POST['orderdate'];
        $area = $_POST['area'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $foodOrder = $_POST['order'];
        $meal = $_POST['meal'];
        //call crud function
        
        $result = $crud->editCustomer($fname,$lname,$orderDate,$area,$email,$phone,$foodOrder,$meal);

        //Redirect to index.php
        if($result){
            header("location: viewrecords.php");
        }else{
            include 'includes/errormessage.php';
        }
    }
    else{
        include 'includes/errormessage.php';
    }
?>