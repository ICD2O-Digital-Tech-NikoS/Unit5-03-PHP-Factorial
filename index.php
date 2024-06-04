<!DOCTYPE html>
<html>

  <head>
    <!-- Meta data section -->
    <meta charset="utf-8">
    <meta name="description" content="factorial of numbers, Using Javascript">
    <meta name="keywords" content="immaculata, icd2o">
    <meta name="author" content="Niko Shivkumar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">
  
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Factorial of Numbers</title>
  </head>

  <body>
    <?php
    echo "<h1>Factorial of Numbers</h1>"
    ?>
    <!-- form for user input for numbers -->
    <form action="results.php" method="post" target="results">
      <label for="userNumber">Enter a number</label>
      <input type="number" id="userNumber" name="userNumber" step="1" min="0" placeholder="Enter a Number"><br><br>
      <input type="submit">
    </form>
    <iframe id="results" name="results">
      
    </iframe>
  </body>

</html>
