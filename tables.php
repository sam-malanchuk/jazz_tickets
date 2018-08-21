<?php include('header.php'); ?>

    <!-- Begin page content -->
    <main role="main" class="container">
      <h1 class="mt-5">Database Tables</h1>
      <p class="lead">Orders Table</p>
	  
	<table class="table table-striped">
		<thead>
			<tr>
				<th>OrderID</th>
				<th>ClientID</th>
				<th>RowA</th>
				<th>RowB</th>
				<th>RowC</th>
				<th>RowD</th>
				<th>RowE</th>
				<th>RowF</th>
				<th>RowG</th>
				<th>RowH</th>
				<th>RowI</th>
				<th>Shipping</th>
			</tr>
		</thead>
		<tbody>
	<?php
	include('db_connect.php');
	$sql = "SELECT * FROM orders";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row['OrderID'] . "</td><td>" . $row['ClientID'] . "</td><td>" . $row['RowA'] . "</td><td>" . $row['RowB'] . "</td><td>" . $row['RowC'] . "</td><td>" . $row['RowD'] . "</td><td>" . $row['RowE'] . "</td><td>" . $row['RowF'] . "</td><td>" . $row['RowG'] . "</td><td>" . $row['RowH'] . "</td><td>" . $row['RowI'] . "</td><td>" . $row['Shipping'] . "</td></tr>";
		}
	} else {
		echo "0 results";
	}
	$conn->close();
	?>
		</tbody>
	</table>

      <p class="lead">Tickets Table</p>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>row_id</th>
				<th>row_price</th>
				<th>row_cat</th>
				<th>row_sold</th>
			</tr>
		</thead>
		<tbody>
	<?php
	include('db_connect.php');
	$sql = "SELECT * FROM ticket_row";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row['row_id'] . "</td><td>" . $row['row_price'] . "</td><td>" . $row['row_cat'] . "</td><td>" . $row['row_sold'] . "</td></tr>";
		}
	} else {
		echo "0 results";
	}
	$conn->close();
	?>
		</tbody>
	</table>


	<p class="lead">Clients Table</p>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>client_id</th>
				<th>fname</th>
				<th>lname</th>
				<th>email</th>
				<th>street</th>
				<th>zip</th>
				<th>city</th>
				<th>state</th>
			</tr>
		</thead>
		<tbody>
	<?php
	include('db_connect.php');
	$sql = "SELECT * FROM clients";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row['client_id'] . "</td><td>" . $row['fname'] . "</td><td>" . $row['lname'] . "</td><td>" . $row['email'] . "</td><td>" . $row['street'] . "</td><td>" . $row['zip'] . "</td><td>" . $row['city'] . "</td><td>" . $row['state'] . "</td></tr>";
		}
	} else {
		echo "0 results";
	}
	$conn->close();
	?>
		</tbody>
	</table>
	  
    </main>

<?php include('footer.php'); ?>