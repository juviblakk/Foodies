<?php 
    $title = 'View Record';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php'; 
    require_once 'db/conn.php';

    $results = $crud->getCustomers();
 ?>
<section>
    <table class = "table">
        <tr>
            <th>#</th>
            <th>#First Name</th>
            <th>Last Name</th>
            <th>Date of Order</th>
            <th>Addresss</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Order</th>
            <th>Meal Type</th>
        </tr>

        <?php while($r = $results ->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td> <?php echo $r['customer_id'] ?> </td>
                <td> <?php echo $r['firstname'] ?> </td>
                <td> <?php echo $r['lastname'] ?> </td>
                <td> <?php echo $r['dateoforder'] ?> </td>
                <td> <?php echo $r['area'] ?> </td>
                <td> <?php echo $r['email'] ?> </td>
                <td> <?php echo $r['phone'] ?> </td>
                <td> <?php echo $r['order'] ?> </td>
                <td> <?php echo $r['meal_id'] ?> </td>
                <td>
                    <a href="view.php?id=<?php echo $r['customer_id'] ?>" class="btn btn-primary">View</a>
                    <a href="edit.php?id=<?php echo $r['custoer_id'] ?>" class="btn btn-warning">Edit</a>
                    <a onclick="return confirm('Are you sure you want to delete this record ?')" href="delete.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php } ?>   
    </table>
</section>
<?php require_once 'includes/footer.php'; ?>