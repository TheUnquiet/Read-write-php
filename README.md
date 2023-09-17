# Hypertext
## Databases

Read and write data into a database.
Add this snippet to create a database from your code. <br>

Only run the code once thought. Otherwise you'll run into an error. <br>

Code Snippet:
```php
$sql = "CREATE DATABASE $db_name";

if ($conn->query($sql) === TRUE) {
    echo "DB online!";
}
else {
    echo "Woops error: ". $conn->error;
}

$conn->close();

```

This is website uses *Bootstrap* and *Font Awesome* for styling. Makes things a little easier.

I'm a genius. Am I right lads or am I right lads?
