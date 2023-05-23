<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php program</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        @import url('https://fonts.cdnfonts.com/css/poppins');

        * {
            padding: 0;
            margin: 0;

            font-family: 'Poppins', sans-serif;
        }

        body {
            display: grid;
            place-items: center;

            text-align: center;
        }
        .green { color: rgb(16, 231, 100); }

        .min-h-screen { min-height: 100vh; }
    </style>
</head>

<body>
    <div class='bg-success container-fluid text-white p-4'>        
        <h1>PHP program!!</h1>
        <h3>By <?php $name = "TheUnquiet"; echo $name;?></h3>
        <a href="form.php" class="link link-white">Add <i class="fa fa-plus" aria-hidden="true"></i></a>
    </div>

    <form action="form.php" method="post">

    </form>

    <?php
    $servername = "localhost";
    $username = "TheUnquiet";
    $password = "Lin@7521";
    $dbname = "ninja";

    // Connection
    $connection = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    echo "<h3 class='text-success m-3'>" . "Connection success!" . "<br> </h3>"; 

    // Create Records
    $sql = "INSERT INTO ninjas (ninja_name, element)
    VALUES ('zane', 'ice');";
    
    $ninja_name = $_POST["ninja_name"];
    $element = $_POST["element"];

    $sql = "INSERT INTO ninjas (ninja_name, element)
    VALUES ('$ninja_name', '$element');";

    // Check if Record's been added
    if ($connection->query($sql) === TRUE)
    {
        echo "<h2 class='text-success m-3'>" . "Record added successfully!" . "<br> </h2>";
    } else {
        echo "Error: ". $sql . "<br>" . $connection->error;
    }

    // Select Data
    $sql = "SELECT id, ninja_name, element FROM ninjas;";
    $result = $connection->query($sql);

    // Check for data
    if ($result->num_rows > 0) {
        // Output all data
        echo "<table class='table table-bordered container'>"
        ."<caption>List of Ninja's and their elements</caption>"
        ."<tr class='table-success'>"
        ."<th scope='col'>#</th>"
        ."<th scope='col'>Name</th>"
        ."<th scope='col'>Element</th>"
        ."</tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>". 
            "<td>". $row["id"] . "</td>".
            "<td>". $row["ninja_name"] . "</td>".
            "<td>". $row["element"] ."</td>". 
            "</tr>";
        }

        echo "</table>";
    } else {
        echo "0 results :(";
    }

    $connection->close();

    ?>
</body>

</html>