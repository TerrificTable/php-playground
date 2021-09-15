<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Calculator</title>
  </head>
  <body>
    <?php echo "<h1>Plus</h1><hr>"; // Calculator?>
     <form action="plus.php" method="get">
       <input type="number" name="num1"><br>
       <input type="number" name="num2"><br>
       <input type="submit">
     </form><br>

     Awnser: <?php echo $_GET["num1"] + $_GET["num2"], "<br>"; ?>
   </body>
 </html>
