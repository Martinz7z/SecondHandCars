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



  <!-- start of database table -->
  <table class ="styled-table">
    <!-- Styled thead -->
  <thead>
            <tr>
                <th>Make</th>
                <th>Model</th>
                <th>Registration</th>
                <th>Price</th>
                <th>Year</th>
            </tr>
  </thead>
           <!-- for loop going through database -->
            <?php foreach ($cars as $car) : ?>


              <!-- Tbody thats styled -->
       <tbody>
            <tr>
                <td><?php echo $car['Make']; ?></td>
                <td><?php echo $car['Model']; ?></td>
                <td><?php echo $car['Registration']; ?></td>
                <td><?php echo $car['Price']; ?></td>
                <td><?php echo $car['Year']; ?></td>
            </tr>
        </tbody>

        
            <?php endforeach; ?>
        </table>
        <!-- end of table -->

        


  <div class="container text-center">

  </div>
</div>

  <?php include 'includes/footer.php';?>