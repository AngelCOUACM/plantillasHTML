<?php
$connect = mysqli_connect("localhost", "root", "customer_table");
$output = '';

if(isset($_POST['query'])){

	$search = mysqli_real_escape_string($connect, $_POST['query']);
	$query = "SELECT * FROM users WHERE CustomerName Like '%".$search."%' 
	OR Address Like '%".$search."%'
	OR City Like '%".$search."%'
	OR PostalCode Like '%".$search."%'
	OR Country Like '%".$search."%'";

}else{

	$query = "SELECT * FROM users ORDER BY CustomerID";

}

$result = mysqli_query($connect, $query);

if(mysqli_num_rows($result) > 0){

	$output .= '<div class="table-responsive">
	<tr>
	<th>Customer Name</th>
	<th>Address</th>
	<th>City</th>
	<th>Postal Code</th>
	<th>Country</th>
	</tr>
	';

	while($row = mysqli_fetch_array($result)){

		$output .= '
		<tr>
		<td>'.$row["CustomerName"].'</td>
		<td>'.$row["Address"].'</td>
		<td>'.$row["City"].'</td>
		<td>'.$row["PostalCode"].'</td>
		<td>'.$row["Country"].'</td>
		</tr>
		';

	}

	echo $output;

}else{

	echo 'Data Not Found';

}

?>