<?php include('header.php'); ?>

    <!-- Begin page content -->
    <main role="main" class="container">
	  <?php
		if ($_GET['s'] == 'confirmed') {
	  ?>
      <h1 class="mt-5">Order #<?php echo $_POST['orderID']; ?> Confirmed!</h1>
      <p class="lead">Your order details are below. You can print this page for your records.</p>
	  <form action="order.php" method="post">
	  <?php
		} else {
	  ?>
      <h1 class="mt-5">Review your Order (3/3)</h1>
      <p class="lead">Confirm the details of your order.</p>
	  <form action="order.php" method="post">
	  <?php
		}
	  ?>
		<table class="table">
			<thead class="thead-light">
				<tr>
					<th colspan="2">Personal Information</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>First Name: <b><?php echo $_POST['fname']; ?></b></td>
					<td>Last Name: <b><?php echo $_POST['lname']; ?></b></td>
				</tr>
				<tr>
					<td colspan="2">Address: <b><?php echo $_POST['address']; ?></b></td>
				</tr>
				<tr>
					<td>City: <b><?php echo $_POST['city']; ?></b></td>
					<td>Zip Code: <b><?php echo $_POST['zip']; ?></b></td>
				</tr>
				<tr>
					<td>State: <b><?php echo $_POST['state']; ?></b></td>
					<td>Email: <b><?php echo $_POST['email']; ?></b></td>
				</tr>
			</tbody>
		</table>
		<table class="table">
			<thead class="thead-light">
				<tr>
					<th>Order Details</th>
					<th>Quantity</th>
					<th></th>
					<th width="2">Price</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
			<?php
			for ($x = a; $x <= i; $x++) {
				$seatOrders[$x] = $_POST['input-row-' . $x . ''];
			} 
			$q = A;
			foreach($seatOrders as $item) {
				if($item > 0) {
				if($q=='A'||$q=='B'||$q=='C'){
					$salesBefore += 50 * $item;
					echo "<tr><td>Seats in Row " . $q . "</td><td width=\"2\">" . $item . "</td><td width=\"1\">X</td><td width=\"2\">$50</td><td>$" . 50 * $item . "</td>";
				} elseif ($q=='D'||$q=='E'||$q=='F'){
					$salesBefore += 40 * $item;
					echo "<tr><td>Seats in Row " . $q . "</td><td width=\"2\">" . $item . "</td><td width=\"1\">X</td><td width=\"2\">$40</td><td>$" . 40 * $item . "</td>";
				} elseif ($q=='G'||$q=='H'||$q=='I'){
					$salesBefore += 30 * $item;
					echo "<tr><td>Seats in Row " . $q . "</td><td width=\"2\">" . $item . "</td><td width=\"1\">X</td><td width=\"2\">$30</td><td>$" . 30 * $item . "</td>";
				}
				}
			$q++;
			}
					echo "<tr><td><b>Subtotal</b></td><td width=\"2\"></td><td width=\"1\"></td><td width=\"2\"></td><td><b>$" . $salesBefore . "</b></td>";
					$salesTax = $salesBefore * 0.07;
					$salesTax = sprintf('%0.2f', $salesTax);
					echo "<tr><td><b>Processing Fee</b></td><td width=\"2\"></td><td width=\"1\"></td><td width=\"2\"></td><td><b>$" . $salesTax . "</b></td>";
					echo "<tr><td><b>Total</b></td><td width=\"2\"></td><td width=\"1\"></td><td width=\"2\"></td><td><b>$" . sprintf('%0.2f', ($salesTax + $salesBefore)) . "</b></td>";
			?>
			</tbody>
		</table>
		<?php
		$i = a;
		foreach($seatOrders as $item) {
		echo "<input type=\"hidden\" class=\"form-control\" name=\"input-row-" . $i . "\" value=\"" . $seatOrders[$i] . "\">";
		$i++;
		}
		?>
	  <input type="hidden" name="fname" value="<?php echo $_POST['fname']; ?>">
	  <input type="hidden" name="lname" value="<?php echo $_POST['lname']; ?>">
	  <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
	  <input type="hidden" name="address" value="<?php echo $_POST['address']; ?>">
	  <input type="hidden" name="city" value="<?php echo $_POST['city']; ?>">
	  <input type="hidden" name="zip" value="<?php echo $_POST['zip']; ?>">
	  <input type="hidden" name="state" value="<?php echo $_POST['state']; ?>">
	  <?php
		if ($_GET['s'] == 'confirmed') {
			
		} else {
	  ?>
	  <input class="btn btn-primary" type="submit" name="submit" value="Confirm">	  <a class="btn btn-danger" href="tickets.php" role="button">Start Over</a>
	  <?php
		}
	  ?>
	  </form>
    </main>

<?php include('footer.php'); ?>