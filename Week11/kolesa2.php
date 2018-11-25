<?php
   $dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,'cars');
   if(isset($_POST['submit'])){
   $maker = $_POST['maker'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $year = $_POST['year'];
    $url = $_POST['url'];
    $sql = "INSERT INTO kolesa(maker, model, price, year, url) VALUES ('".$maker."','".$model."',".$price.",".$year.",'".$url."')";
   if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
   } else {
   echo "Error: " . $sql . "" . mysqli_error($conn);}
   mysqli_close($conn);
   }
   if(isset($_REQUEST['delete'])){
   $sql = ' DELETE FROM kolesa WHERE id = '.$_REQUEST['id'].'';
   if (mysqli_query($conn, $sql)) {
      echo "deleted successfully";
   } else {
   echo "Error: " . $sql . "" . mysqli_error($conn);}
   mysqli_close($conn);
   }
?>
<html>
   <head>
      <title>Connecting MySQLi Server</title>
      <style>
         #cars{
            display: flex;
            justify-content: flex-start;
            flex-wrap: wrap;
         }
         .card{
            display: flex;
            border: 1px solid black;
            border-radius: 3px;
         }
         img{
            width: 150px;
            height: 100px;
         }

      </style>
   </head>

   <body>
      <form action="" method="post">
       <div id="data">
            <label>maker</label>
            <input type="text" name="maker"><br>
            <label>model</label>
            <input type="text" name="model"><br>
            <label>price</label>
            <input type="text" name="price"><br>
            <label>year</label>
            <input type="text" name="year"><br>
            <label>url</label>
            <input type="text" name="url"><br>
        </div>
        <div id="buttons">
            <input type="submit" value="submit" name="submit">
        </div>
     </form>
      <?php
         $dbhost = 'localhost:3306';
         $dbuser = 'root';
         $dbpass = '';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,'cars');
         if(! $conn ) {
            echo 'Connected failure<br>';
         }
         echo '<div id="cars">';
         $sql = 'SELECT * FROM kolesa';
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               echo '<div class="card"><img src="' .$row["url"]. '"> <div class="description">'.$row["maker"].' '.$row["model"].'<br>'.$row["year"].'<br>'.$row["price"].'<br><a href="kolesa2.php?delete=true&id='.$row['id'].'">Delete</a></div></div>';
            }
         } 
         echo '</div>';
         mysqli_close($conn);
      ?>
   </body>
</html>