<?php 
$title = 'Menu';
require_once 'includes/header.php';
?>

<section class="menu" id="menu">

<h1 class="heading"> our delicious <span>menu</span> </h1>

<ul class="list">
    <li class="btn" data-src="images/Jamaican-Ackee-Codfish.jpg">breakfast</li>
    <li class="btn active" data-src="images/Jamaican-Jerk-Chicken.jpg">lunch</li>
    <li class="btn" data-src="images/Jamaican-Oxtail-Rice-Peas.jpg">dinner</li>
    <li class="btn" data-src="images/Jamaican-Gizzada.jpg">dessert</li>
</ul>

<div class="row">

    <div class="image">
        <img src="images/Jamaican-Curry-Goat.jpg" id="menu-img" alt="">
    </div>

    <div class="content">
        <div class="info">
            <h3> <span>01.</span> Breakfast</h3>
            <p>Ackee & saltfish | Mackerel Rundown | Curried Chicken | Callaloo</p>
            <p>Breadfruit | Boiled dumplin | fried dumplin | boiled food</p>
        </div>
        <div class="info">
            <h3> <span>02.</span> Lunch </h3>
            <p>Jerk Chicken | Curry Goat | Chicken & Chips | Oxtail</p>
            <p>Rice & Peas | White Rice | fried Rice | Mash potatoes </p>
        </div>
        <div class="info">
            <h3> <span>03.</span> Dinner </h3>
            <p>Jerk Turkey | Lonster | Fried Fish | Lo Mein</p>
            <p>Rice |  Mash potatoes | Mac & Cheese | Rainbow Salad</p>
        </div>
        <div class="info">
            <h3> <span>04.</span> Dessert </h3>
            <p>Gizzada| Banana Bread |  Coconut Drops | Fruit Salad</p>
        </div>
    </div>

</div>

<!-- aos js cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- initializing aos  -->

<script>

    AOS.init({
        delay:400,
        duration:1000
    })

</script>

</section>
<?php require_once 'includes/footer.php'; ?>
