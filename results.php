<?php include('header.php'); ?>

    <!-- Begin page content -->
    <main role="main" class="container">
      <h1 class="mt-5">Query Results</h1>
      <p class="lead">Tickets Sold Per Category</p>
	  
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Category</th>
				<th>Amount</th>
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
			switch ($row['row_cat']) {
			   case 1:
			         $catOne += $row['row_sold'];
			         break;
			   case 2:
			         $catTwo += $row['row_sold'];
			         break;
			   case 3:
			         $catThree += $row['row_sold'];
			         break;
			}
		}
			echo "<tr><td>Category 1</td><td>" . $catOne . "</td></tr>";
			echo "<tr><td>Category 2</td><td>" . $catTwo . "</td></tr>";
			echo "<tr><td>Category 3</td><td>" . $catThree . "</td></tr>";
	} else {
		echo "0 results";
	}
	$conn->close();
	?>
		</tbody>
	</table>

      <p class="lead">Tickets Availible Per Category</p>
	  
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Category</th>
				<th>Amount</th>
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
			switch ($row['row_cat']) {
			   case 1:
			         $catOne2 += $row['row_sold'];
			         break;
			   case 2:
			         $catTwo2 += $row['row_sold'];
			         break;
			   case 3:
			         $catThree2 += $row['row_sold'];
			         break;
			}
		}
			echo "<tr><td>Category 1</td><td>" . (75 - $catOne2) . "</td></tr>";
			echo "<tr><td>Category 2</td><td>" . (75 - $catTwo2) . "</td></tr>";
			echo "<tr><td>Category 3</td><td>" . (75 - $catThree2) . "</td></tr>";
	} else {
		echo "0 results";
	}
	$conn->close();
	?>
		</tbody>
	</table>

	      <p class="lead">Sales Report</p>
	  
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Category</th>
				<th>Amount</th>
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
			switch ($row['row_cat']) {
			   case 1:
			         $catOneTotal += (($row['row_sold'] * $row['row_price']) * 1.07);
			         break;
			   case 2:
			         $catTwoTotal += (($row['row_sold'] * $row['row_price']) * 1.07);
			         break;
			   case 3:
			         $catThreeTotal += (($row['row_sold'] * $row['row_price']) * 1.07);
			         break;
			}
		}
			$catOneTotal = number_format($catOneTotal, 2);
			$catTwoTotal = number_format($catTwoTotal, 2);
			$catThreeTotal = number_format($catThreeTotal, 2);
			echo "<tr><td>Category 1</td><td>$" . $catOneTotal . "</td></tr>";
			echo "<tr><td>Category 2</td><td>$" . $catTwoTotal  . "</td></tr>";
			echo "<tr><td>Category 3</td><td>$" . $catThreeTotal  . "</td></tr>";
			echo "<tr><th scope=\"col\">Category Total</th><th>$" . number_format(($catThreeTotal + $catTwoTotal + $catOneTotal), 2)  . "</th></tr>";
	} else {
		echo "0 results";
	}
	$conn->close();
	?>
		</tbody>
	</table>
	  
    </main>

<?php include('footer.php'); ?>