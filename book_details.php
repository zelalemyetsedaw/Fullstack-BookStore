<?php
$bookId = $_GET['id'];
include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

$sql = "SELECT * FROM products WHERE id = $bookId";
$result = $conn->query($sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shop</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Book Details</h3>
   <p> <a href="home.php">home</a> / book_details </p>
</div>

<section class="products">

   <h1 class="title">latest products</h1>

   <div class="bookdetails">

      <?php  
         if ($result->num_rows > 0) {
            // Display book details
            while ($row = $result->fetch_assoc()) {
      ?>
      <div class = "images">
         <img class="image" src="uploaded_img/<?php echo $row['image']; ?>" alt="">
      </div>
      
      <div class = "contents">
         <p>  <?php echo $row['name']; ?> </p>
         <p>  <?php echo $row['author']; ?> </p>
         <p>  <?php echo $row['genre']; ?> </p>
         
         <p>  <?php echo $row['price']; ?> Birr </p>
      </div>
      
     
      <?php
           }
         } else {
           echo "Book not found.";
         }
      ?>
   </div>

</section>








<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>