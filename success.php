<?php 
    $title = 'success';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php'; 
    require_once 'db/conn.php';
    require_once 'sendemail.php';


    if(isset($_POST['submit'])){
        //extract values from the $_POST array
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $orderdate = $_POST['orderDate'];
        $area = $_POST['area'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $foodorder = $_POST['foodOrder'];
        $meal = $_POST['meal'];

            $orig_file = $_FILES["avatar"]["tmp_name"];
            $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
            $target_dir = 'uploads/';
            $destination = "$target_dir$contact.$ext";
            move_uploaded_file($orig_file,$destination);
        
        
        //Call function to the insert and track if successful or not
        $issuccess = $crud->insertCustomers($fname,$lname,$orderdate,$area,$email,$phone,$foodorder,$meal);

        if($issuccess){
            //SendEmail::SendMail($email,'Thank you for your purchase','Your was sucessfully submitted');
            include 'includes/successmessage.php';

        }else{
            include 'includes/errormessage.php';
        }
    }


    ?>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <section>
        <div class="center">

            <h1 class="text-center text-success"> Your order has been placed successfully </h1>


                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $_POST['fname']. ' ' .$_POST['lname']; ?> </h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php  echo $_POST['meal']; ?> </h6>
                        <p class="card-text">Order Date: <?php echo $_POST['orderDate']; ?></p>
                        <p class="card-text">Address: <?php echo $_POST['area']; ?></p>
                        <p class="card-text">Email Address: <?php echo $_POST['email']; ?></p>
                        <p class="card-text">Contact Number: <?php echo $_POST['phone']; ?></p>
                        <p class="card-text">Your Order: <?php echo $_POST['foodOrder']; ?></p>
                    </div>
                </div>
        </div>
    </section>

    <?php require_once 'includes/footer.php'; ?>



?>