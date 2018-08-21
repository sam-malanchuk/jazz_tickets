<?php
		if(isset($_POST['submit'])){
			for ($x = a; $x <= i; $x++) {
				$seatOrders[$x] = $_POST['input-row-' . $x . ''];
				$seatOrdersTotal[$x] = $_POST['input-row-' . $x . ''];
			} 
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			$state = $_POST['state'];
			$zip = $_POST['zip'];
			$city = $_POST['city'];
			
			include('db_connect.php');
			
			$sql = "SELECT row_sold FROM ticket_row";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					$rowSold[] = $row['row_sold'];
				}
				foreach ($rowSold as $item){
					//echo $item . "<br>";
				}
			} else {
				//echo "0 results";
			}
			
			$i = 0;
			for ($x = a; $x <= i; $x++) {
				$seatOrdersTotal[$x] += $rowSold[$i];
				$i++;
			} 
			//echo "--------------------";
			$l = "a";
			foreach ($seatOrdersTotal as $item2) {
				//echo "<br>" . $item2;
				$sql = "UPDATE ticket_row SET row_sold='$item2' WHERE row_id='$l'";
				if ($conn->query($sql) === TRUE) {
					//echo "Record updated successfully";
				} else {
					//echo "Error updating record: " . $conn->error;
				}
				$l++;
			}
			$conn->close();
			
			include('db_connect.php');
			
			$sql = "INSERT INTO clients (fname, lname, email, street, zip, city, state)
VALUES ('$fname', '$lname', '$email', '$address', '$zip', '$city', '$state')";
			
			if ($conn->query($sql) === TRUE) {
				$last_id = $conn->insert_id;
				//echo "New record created successfully. Last inserted ID is: " . $last_id;
			} else {
				//echo "Error: " . $sql . "<br>" . $conn->error;
			}

			?>
			<form method="POST" id="myform" action="confirm.php?s=confirmed">
			<?php
			for ($b = a; $b <= i; $b++) {
				$seatOrders2[$b] = $_POST['input-row-' . $b . ''];
			}
			$h = a;
			foreach($seatOrders2 as $item) {
			echo "<input type=\"hidden\" class=\"form-control\" name=\"input-row-" . $h . "\" value=\"" . $seatOrders2[$h] . "\">";
			$h++;
			}
			
			$conn->close();
			
			include('db_connect.php');

			$sql = "INSERT INTO orders (ClientID, RowA, RowB, RowC, RowD, RowE, RowF, RowG, RowH, RowI, Shipping)
		VALUES ('$last_id', '" . $seatOrders['a'] . "', '" . $seatOrders['b'] . "', '" . $seatOrders['c'] . "', '" . $seatOrders['d'] . "', '" . $seatOrders['e'] . "', '" . $seatOrders['f'] . "', '" . $seatOrders['g'] . "', '" . $seatOrders['h'] . "', '" . $seatOrders['i'] . "', '$shipping')";
			
			
			if ($conn->query($sql) === TRUE) {
				//echo "Added Successfully";
				$last_id_order = $conn->insert_id;
			} else {
				//echo "Error: " . $sql . "<br>" . $conn->error;
			}
			?>
			  <input type="hidden" name="orderID" value="<?php echo $last_id_order; ?>">
			  <input type="hidden" name="fname" value="<?php echo $_POST['fname']; ?>">
			  <input type="hidden" name="lname" value="<?php echo $_POST['lname']; ?>">
			  <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
			  <input type="hidden" name="address" value="<?php echo $_POST['address']; ?>">
			  <input type="hidden" name="city" value="<?php echo $_POST['city']; ?>">
			  <input type="hidden" name="zip" value="<?php echo $_POST['zip']; ?>">
			  <input type="hidden" name="state" value="<?php echo $_POST['state']; ?>">
			</form>

			<script type="text/javascript">
			  document.getElementById("myform").submit();
			</script>
			<?

		} else {
			header('Location: tickets.php');
		}
?>