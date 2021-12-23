<?php 
        $title = 'Edit Record';
        require_once 'includes/header.php';
        require_once 'includes/auth_check.php';  
        require_once 'db/conn.php';

        $results = $crud ->getMeal();
        if(!isset($_GET['id'])){
            include 'includes/errormessage.php';
            header("Location: viewrecords.php");
        }else{
            $id = $_GET['id'];
            $attendee = $crud->getCustomersDetails($id);

    ?>

        <section class="order" id="order">

            <h1 class="heading"> Edit Records  </h1>

            <div class="row">

                <form method="post" action="edit.php">
                    <input type = "hidden" name = "id" value="<?php echo $customer['customer_id']?>"/>
                    <label for="orderDate" class="box">Order Date:</label>
                    <input type="date" id="start" name="orderDate"value="<?php echo $customer['orderdate']?>">
                    <input type="text" value="<?php echo $customer['firstname']?>" id="firstname"placeholder="your first name" class="box" name="fname">
                    <input type="text" value="<?php echo $customer['lastname']?>" id="lastname" placeholder="your last name" class="box" name="lname">
                    <input type="email"value="<?php echo $customer['email']?>"id="email"placeholder="your email" class="box"name="email">
                    <input type="number" value="<?php echo $customer['phone']?>"id="phone" placeholder="your number" class="box"name="phone">
                    <input type="area" value="<?php echo $customer['area']?>" id="area" placeholder="Address" class="box"name="area">
                    <label for="meal" class="box">Choose a Meal:</label>
                    <select id="meal" name="meal"class="box">
                        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)){?>
                                <option value="<?php echo $r['meal_id']?>" <?php if($r['meal_id'] == $customer['meal_id'])echo 'selected' ?> > 
                                    <?php echo $r ['name']; ?>
                                </option>
                            <?php }?>
                    </select>
                    <input name="foodOrder" value="<?php echo $customer['order']?>" id="foodOrder" class="box address" placeholder="your Order">

                    <button type="submit" class="btn" name="submit">Save Changes</button>
                    <a href="viewrecords.php" class="btn">Back to List</a>
                </form>

                

            </div>

        </section>

        
            
            
        
    <?php } ?>

<?php require_once 'includes/footer.php'; ?>

    