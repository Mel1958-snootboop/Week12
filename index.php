<html>
<head>
    <title>My PHP Page</title>
</head>
<body>
    
    <?php

      $x = "Hello, World!";

        echo "<h1>$x</h1>";

        echo "<p>$x</p>";
    ?>  

    <p>Plain Static HTML</p>

    <h1>Shoo! Cha! <?php echo $_SERVER["REQUEST_METHOD"]; ?> </h1>

    <h2>Sup! <?php echo $_SERVER["REQUEST_METHOD"]; ?> </h2>

</body>
</html>