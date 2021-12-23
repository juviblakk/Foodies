<<?php
    $title = 'User Login'; 

    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 
    
    //If data was submitted via a form POST request, then...
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = strtolower(trim($_POST['username']));
        $password = $_POST['password'];
        $new_password = md5($password.$username);

        $result = $user->getUser($username,$new_password);
        if(!$result){
            echo '<div class="alert alert-danger">Username or Password is incorrect! Please try again. </div>';
        }else{
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = $result['id'];
            header("Location: viewrecords.php");
        }

    }
?>
<section class="order" id="order">
<h1 class="heading"><span><?php echo $title ?></span> </h1>
   
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <table class="table table-sm">
            <tr>
                <td><label for="username" class="box">Username: * </label></td>
                <td><input type="text" name="username" class="box" id="username" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username']; ?>">
                </td>
            </tr>
            <tr>
                <td><label for="password" class="box">Password: * </label></td>
                <td><input type="password" name="password" class="box" id="password">
                </td>
            </tr>
        </table><br/><br/>
        <input type="submit" value="Login" class="btn"><br/>
        <a href="#"> Forgot Password </a>
            
    </form><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>


</secction>
<?php include_once 'includes/footer.php'?>