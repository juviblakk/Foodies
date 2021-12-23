<?php 
$title = 'Order';
require_once 'includes/header.php';
require_once 'db/conn.php';
$results = $crud ->getmeal();
?>
  


<section class="order" id="order">

<h1 class="heading"> make an <span>order</span> </h1>

<div class="row">

    <form method="post" action="success.php">
        <label for="orderDate" class="box">Order Date:</label>
        <input type="date" id="start" name="orderDate"value="2021-12-22"min="2021-12-01" max="2090-12-31">
        <input type="text" placeholder="your first name" class="box" name="fname">
        <input type="text" placeholder="your last name" class="box" name="lname">
        <input type="email" placeholder="your email" class="box"name="email">
        <input type="number" placeholder="your number" class="box"name="phone">
        <input type="area" placeholder="Address" class="box"name="area">
        <label for="meal" class="box">Choose a Meal:</label>
        <select id="meal" name="meal"class="box">
            <?php while($r = $results->fetch(PDO::FETCH_ASSOC)){?>
                <option value="<?php echo $r['meal_id']?>"> 
                    <?php echo $r ['name']; ?>
                </option>
            <?php }?>
        </select>
        <input name="foodOrder" id="foodOrder" class="box address" placeholder="your Order">
        <div class="custom-file">
            <input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar" >
            <label class="custom-file-label" for="avatar">Choose File</label>
            <small id="avatar" class="form-text text-danger">File Upload is Optional</small>
        </div>

        <button type="submit" class="btn" name="submit">order now</button>
    </form>

    <div class="image">
        <img src="images/chef-niix-4.jpeg" alt="">
    </div>

</div>

</section>

<?php require_once 'includes/footer.php'; ?>