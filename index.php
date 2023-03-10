<?php include 'includes/header.php';?>

<!-- Start of database link -->
<?php require_once('database.php');

$queryCars = 'SELECT * FROM cars';
$statement = $db->prepare($queryCars);
$statement->execute();
$cars = $statement->fetchAll();
$statement->closeCursor();

?>
<!-- Finishing of database link  --> 

<main class="container">
  <div class="starter-template text-center">
    <h1 class="first_title">Second Hand Cars</h1>
    <p class="lead">Best second hand cars in Ireland.</p>
  </div>

  <table class ="styled-table">
            <tr>
                <th>Make</th>
                <th>Model</th>
                <th>Registration</th>
                <th>Year</th>
            </tr>

            <?php foreach ($cars as $car) : ?>
            <tr>
                <td><?php echo $car['Make']; ?></td>
                <td><?php echo $car['Model']; ?></td>
                <td><?php echo $car['Registration']; ?></td>
                <td><?php echo $car['Year']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>


  <div class="container text-center">

  </div>
</div>

  <?php include 'includes/footer.php';?>