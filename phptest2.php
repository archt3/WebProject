<table id="cars">
    <tr>
        <th>Year</th>
        <th>Type</th>
        <th>Make</th>
        <th>Model</th>
        <th>Cost ($)</th>
    </tr>
<?php
		include_once 'formtest.html';
		require_once 'login.php';
		$conn = mysqli_connect($host, $user, $pass, $db, $port);
		if($conn->connect_error) die($conn->connect_error);
		$option = isset($_POST['myTest']) ? $_POST['myTest'] : false;
	
	switch($_POST['myTest']){
		
		case 'order by cost;':$query = "SELECT * FROM cars ORDER BY CAST(cost as SIGNED INTEGER) ASC;";
				//echo $query;
				$result = mysqli_query($conn, $query);
				
				while ($row = mysqli_fetch_assoc($result)) {
					echo "\t<tr><td>".$row['yr']."</td><td>".$row['typ']."</td><td>".$row['manufacturer']."</td><td>".$row['model']."</td><td>".$row['cost']."</td></tr>\n"; 
					
				} 
				break;
				$result->close();
					$conn->close();
		
	
		default:
			
			if ($option){
				$testField = $_POST['myTest'];
				//echo $testField;
				$query = "	select ". $testField . " from cars;";
				
				$result = mysqli_query($conn, $query);
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<br>";
				echo $row[$testField];
				}
		}}
		
		
	?>
</table>

