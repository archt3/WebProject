<style>
	#cars{
		color: #0392de;
		margin: 0 auto;
		
	}
</style>
<table id="cars">
    <tr>
        <th>Year</th>
        <th>Type</th>
        <th>Make</th>
        <th>Model</th>
        <th>Cost ($)</th>
    </tr> <!--Arrange the data into a table AR-->
    
<?php
		include_once 'formtest.html';
		require_once 'login.php';
		$conn = mysqli_connect($host, $user, $pass, $db, $port);
		if($conn->connect_error) die($conn->connect_error);
		$option = isset($_POST['myTest']) ? $_POST['myTest'] : false; //from the sample
	
$query =$_POST['myTest']; //Set the query to whatever the post is; the posts are all the various queries AR
				$result = mysqli_query($conn, $query);
				
				while ($row = mysqli_fetch_assoc($result)) {
					
					echo  "\t<tr><td>".$row['yr']."</td><td>".$row['typ']."</td><td>".$row['manufacturer']."</td><td>".$row['model']."</td><td>".$row['cost']."</td></tr>\n".'</span>'; 
					//the echo is to format in a table AR
				} 
				
				$result->close();
					$conn->close();
					
					

		
	?>
</table>

