
<table>
    <tr>
        <th>Year</th>
        <th>Type</th>
        <th>Make</th>
        <th>Model</th>
        <th>Cost ($)</th>
    </tr>
    
<?php
    
    //Connect to the database
    $host = "127.0.0.1";
    $user = "architr";                     //Your Cloud 9 username
    $pass = "";                                  //Remember, there is NO password by default!
    $db = "cars";                                  //Your database name you want to connect to
    $port = 3306;                                //The port #. It is always 3306
    
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());

//And now to perform a simple query to make sure it's working
    $query = "SELECT * FROM cars";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "\t<tr><td>".$row['yr']."</td><td>".$row['typ']."</td><td>".$row['manufacturer']."</td><td>".$row['model']."</td><td>".$row['cost']."</td></tr>\n";
    }
    ?>
</table>