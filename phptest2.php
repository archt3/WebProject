<style>
	#cars{
		color:white;
		
	}
</style>
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
		
		case 'order by cost ascending':$query = "SELECT * FROM cars ORDER BY CAST(cost as SIGNED INTEGER) ASC;";
				//echo $query;
				$result = mysqli_query($conn, $query);
				
				while ($row = mysqli_fetch_assoc($result)) {
					
					echo  "\t<tr><td>".$row['yr']."</td><td>".$row['typ']."</td><td>".$row['manufacturer']."</td><td>".$row['model']."</td><td>".$row['cost']."</td></tr>\n".'</span>'; 
					
				} 
				break;
				$result->close();
					$conn->close();
					
					
		case 'order by yr':$query = "SELECT * FROM cars ORDER BY cast(yr as signed integer) ASC;";
		$result = mysqli_query($conn, $query);
				
				while ($row = mysqli_fetch_assoc($result)) {
					
					echo  "\t<tr><td>".$row['yr']."</td><td>".$row['typ']."</td><td>".$row['manufacturer']."</td><td>".$row['model']."</td><td>".$row['cost']."</td></tr>\n".'</span>'; 
					
				} 
				break;
				$result->close();
					$conn->close();
	
		case 'order by cost descending':$query = "SELECT * FROM cars ORDER BY cast(cost as signed integer) DESC;";
		$result = mysqli_query($conn, $query);
				
				while ($row = mysqli_fetch_assoc($result)) {
					
					echo  "\t<tr><td>".$row['yr']."</td><td>".$row['typ']."</td><td>".$row['manufacturer']."</td><td>".$row['model']."</td><td>".$row['cost']."</td></tr>\n".'</span>'; 
					
				} 
				break;
				$result->close();
					$conn->close();
					
		case 'order by make':$query = "SELECT * FROM cars ORDER BY manufacturer;";
		$result = mysqli_query($conn, $query);
				
				while ($row = mysqli_fetch_assoc($result)) {
					
					echo  "\t<tr><td>".$row['yr']."</td><td>".$row['typ']."</td><td>".$row['manufacturer']."</td><td>".$row['model']."</td><td>".$row['cost']."</td></tr>\n".'</span>'; 
					
				} 
				break;
				$result->close();
					$conn->close();		
					
		case 'order by type':$query = "SELECT * FROM cars ORDER BY typ;";
		$result = mysqli_query($conn, $query);
				
				while ($row = mysqli_fetch_assoc($result)) {
					
					echo  "\t<tr><td>".$row['yr']."</td><td>".$row['typ']."</td><td>".$row['manufacturer']."</td><td>".$row['model']."</td><td>".$row['cost']."</td></tr>\n".'</span>'; 
					
				} 
				break;
				$result->close();
					$conn->close();		
					
		case 'pc':$query = "SELECT * FROM cars where typ='Coupe';";
		$result = mysqli_query($conn, $query);
				
				while ($row = mysqli_fetch_assoc($result)) {
					
					echo  "\t<tr><td>".$row['yr']."</td><td>".$row['typ']."</td><td>".$row['manufacturer']."</td><td>".$row['model']."</td><td>".$row['cost']."</td></tr>\n".'</span>'; 
					
				} 
				break;
				$result->close();
					$conn->close();		
					
					case 'ph':$query = "SELECT * FROM cars where typ='Hatchback';";
		$result = mysqli_query($conn, $query);
				
				while ($row = mysqli_fetch_assoc($result)) {
					
					echo  "\t<tr><td>".$row['yr']."</td><td>".$row['typ']."</td><td>".$row['manufacturer']."</td><td>".$row['model']."</td><td>".$row['cost']."</td></tr>\n".'</span>'; 
					
				} 
				break;
				$result->close();
					$conn->close();	
					
					case 'ps':$query = "SELECT * FROM cars where typ='Sedan';";
		$result = mysqli_query($conn, $query);
				
				while ($row = mysqli_fetch_assoc($result)) {
					
					echo  "\t<tr><td>".$row['yr']."</td><td>".$row['typ']."</td><td>".$row['manufacturer']."</td><td>".$row['model']."</td><td>".$row['cost']."</td></tr>\n".'</span>'; 
					
				} 
				break;
				$result->close();
					$conn->close();	
					case 'ps2':$query = "SELECT * FROM cars where typ='SUV';";
		$result = mysqli_query($conn, $query);
				
				while ($row = mysqli_fetch_assoc($result)) {
					
					echo  "\t<tr><td>".$row['yr']."</td><td>".$row['typ']."</td><td>".$row['manufacturer']."</td><td>".$row['model']."</td><td>".$row['cost']."</td></tr>\n".'</span>'; 
					
				} 
				break;
				$result->close();
					$conn->close();
					case 'pt':$query = "SELECT * FROM cars where typ='Truck';";
		$result = mysqli_query($conn, $query);
				
				while ($row = mysqli_fetch_assoc($result)) {
					
					echo  "\t<tr><td>".$row['yr']."</td><td>".$row['typ']."</td><td>".$row['manufacturer']."</td><td>".$row['model']."</td><td>".$row['cost']."</td></tr>\n".'</span>'; 
					
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
				echo '<span style="color:white" align>'.$row[$testField].'</span>';
				}
		}}
		
		
	?>
</table>

