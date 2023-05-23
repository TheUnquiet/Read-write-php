<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            display: grid;
            place-content: center;
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add ninja</h1>
        <form action="index.php" method="post">
            <label for="ninja_name">Name</label>
            <input type="text" class="form-control" name="ninja_name" id="ninja_name">
            <label for="element">Element</label>
            <input type="text" class="form-control" name="element" id="element">
            <input type="submit" value="Add" class="btn btn-primary mt-2">
        </form>
    </div>
</body>
</html>