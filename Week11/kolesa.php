<html>
   <head>
      <title>Connecting MySQLi Server</title>
      <style>
         #cars{
            display: flex;
            justify-content: space-between;
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
               echo '<div class="card"><img src="' .$row["url"]. '"> <div class="description">'.$row["maker"].' '.$row["model"].'<br>'.$row["year"].'<br>'.$row["price"].'</div></div>';
            }
         } 
         echo '</div>';
         mysqli_close($conn);
      ?>
   </body>
</html>