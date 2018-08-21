<?php include('header.php'); ?>

    <!-- Begin page content -->
    <main role="main" class="container">
      <h1 class="mt-5">Choose your seats (1/3)</h1>
      <p class="lead">Enter the amount of seats.</p>
	  
	<?php
	$rowsArray = array();
	
	include('db_connect.php');
	$sql = "SELECT row_id, row_price, row_cat, row_sold FROM ticket_row";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		$i = 0;
		while($row = $result->fetch_assoc()) {
			$rowsArray[$i] = array($row["row_id"], $row["row_price"], $row["row_cat"], $row["row_sold"]);
			$i++;
		}
	} else {
		echo "0 results";
	}
	$conn->close();
	?>
	  
	  <form action="info.php" method="post">
  <div class="form-row">
	<div class="col-md-4">
	  <h2>Row A - $50 per seat</h2>
	  <div class="form-group row">
		<div class="col-3">
			<input class="form-control" type="number" min="0" max="<?php echo (25 - $rowsArray[0][3]); ?>" value="0" name="input-row-a" id="input-row-a" <?php if((25 - $rowsArray[0][3])==0){ echo "disabled";}; ?>>
		</div>
		<label for="input-row-a" class="col-2 col-form-label">Seats</label>
	  </div>
	  <div class="progress">
	  <?php	  if ((25 - $rowsArray[0][3]) == 0) {?>
		<div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">0/25 Seats Available</div>
	  <?php	  } else {?>
		<div class="progress-bar bg-success" role="progressbar" style="width: <?php echo (25 - $rowsArray[0][3]) * 4; ?>%;" aria-valuenow="<?php echo (25 - $rowsArray[0][3]) * 4; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo 25 - $rowsArray[0][3]; ?>/25 Seats Available</div>
	  <?php	  } ?>
	  </div>
	  <br>
	  <h2>Row B - $50 per seat</h2>
	  <div class="form-group row">
		<div class="col-3">
			<input class="form-control" type="number" min="0" max="<?php echo (25 - $rowsArray[1][3]); ?>" value="0" name="input-row-b" id="input-row-b" <?php if((25 - $rowsArray[1][3])==0){ echo "disabled";}; ?>>
		</div>
		<label for="input-row-b" class="col-2 col-form-label">Seats</label>
	  </div>
	  <div class="progress">
	  <?php	  if ((25 - $rowsArray[1][3]) == 0) {?>
		<div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">0/25 Seats Available</div>
	  <?php	  } else {?>
		<div class="progress-bar bg-success" role="progressbar" style="width: <?php echo (25 - $rowsArray[1][3]) * 4; ?>%;" aria-valuenow="<?php echo (25 - $rowsArray[1][3]) * 4; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo 25 - $rowsArray[1][3]; ?>/25 Seats Available</div>
	  <?php	  } ?>
	  </div>
	  <br>
	  <h2>Row C - $50 per seat</h2>
	  <div class="form-group row">
		<div class="col-3">
			<input class="form-control" type="number" min="0" max="<?php echo (25 - $rowsArray[2][3]); ?>" value="0" name="input-row-c" id="input-row-c" <?php if((25 - $rowsArray[2][3])==0){ echo "disabled";}; ?>>
		</div>
		<label for="input-row-c" class="col-2 col-form-label">Seats</label>
	  </div>
	  <div class="progress">
	  <?php	  if ((25 - $rowsArray[2][3]) == 0) {?>
		<div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">0/25 Seats Available</div>
	  <?php	  } else {?>
		<div class="progress-bar bg-success" role="progressbar" style="width: <?php echo (25 - $rowsArray[2][3]) * 4; ?>%;" aria-valuenow="<?php echo (25 - $rowsArray[2][3]) * 4; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo 25 - $rowsArray[2][3]; ?>/25 Seats Available</div>
	  <?php	  } ?>
	  </div>
	</div>
	<div class="col-md-4">
	  <h2>Row D - $40 per seat</h2>
	  <div class="form-group row">
		<div class="col-3">
			<input class="form-control" type="number" min="0" max="<?php echo (25 - $rowsArray[3][3]); ?>" value="0" name="input-row-d" id="input-row-d" <?php if((25 - $rowsArray[3][3])==0){ echo "disabled";}; ?>>
		</div>
		<label for="input-row-d" class="col-2 col-form-label">Seats</label>
	  </div>
	  <div class="progress">
	  <?php	  if ((25 - $rowsArray[3][3]) == 0) {?>
		<div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">0/25 Seats Available</div>
	  <?php	  } else {?>
		<div class="progress-bar bg-success" role="progressbar" style="width: <?php echo (25 - $rowsArray[3][3]) * 4; ?>%;" aria-valuenow="<?php echo (25 - $rowsArray[3][3]) * 4; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo 25 - $rowsArray[3][3]; ?>/25 Seats Available</div>
	  <?php	  } ?>
	  </div>
	  <br>
	  <h2>Row E - $40 per seat</h2>
	  <div class="form-group row">
		<div class="col-3">
			<input class="form-control" type="number" min="0" max="<?php echo (25 - $rowsArray[4][3]); ?>" value="0" name="input-row-e" id="input-row-e" <?php if((25 - $rowsArray[4][3])==0){ echo "disabled";}; ?>>
		</div>
		<label for="input-row-e" class="col-2 col-form-label">Seats</label>
	  </div>
	  <div class="progress">
	  <?php	  if ((25 - $rowsArray[4][3]) == 0) {?>
		<div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">0/25 Seats Available</div>
	  <?php	  } else {?>
		<div class="progress-bar bg-success" role="progressbar" style="width: <?php echo (25 - $rowsArray[4][3]) * 4; ?>%;" aria-valuenow="<?php echo (25 - $rowsArray[4][3]) * 4; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo 25 - $rowsArray[4][3]; ?>/25 Seats Available</div>
	  <?php	  } ?>
	  </div>
	  <br>
	  <h2>Row F - $40 per seat</h2>
	  <div class="form-group row">
		<div class="col-3">
			<input class="form-control" type="number" min="0" max="<?php echo (25 - $rowsArray[5][3]); ?>" value="0" name="input-row-f" id="input-row-f" <?php if((25 - $rowsArray[5][3])==0){ echo "disabled";}; ?>>
		</div>
		<label for="input-row-f" class="col-2 col-form-label">Seats</label>
	  </div>
	  <div class="progress">
	  <?php	  if ((25 - $rowsArray[5][3]) == 0) {?>
		<div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">0/25 Seats Available</div>
	  <?php	  } else {?>
		<div class="progress-bar bg-success" role="progressbar" style="width: <?php echo (25 - $rowsArray[5][3]) * 4; ?>%;" aria-valuenow="<?php echo (25 - $rowsArray[5][3]) * 4; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo 25 - $rowsArray[5][3]; ?>/25 Seats Available</div>
	  <?php	  } ?>
	  </div>
	</div>
	<div class="col-md-4">
	  <h2>Row G - $30 per seat</h2>
	  <div class="form-group row">
		<div class="col-3">
			<input class="form-control" type="number" min="0" max="<?php echo (25 - $rowsArray[6][3]); ?>" value="0" name="input-row-g" id="input-row-g" <?php if((25 - $rowsArray[6][3])==0){ echo "disabled";}; ?>>
		</div>
		<label for="input-row-g" class="col-2 col-form-label">Seats</label>
	  </div>
	  <div class="progress">
	  <?php	  if ((25 - $rowsArray[6][3]) == 0) {?>
		<div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">0/25 Seats Available</div>
	  <?php	  } else {?>
		<div class="progress-bar bg-success" role="progressbar" style="width: <?php echo (25 - $rowsArray[6][3]) * 4; ?>%;" aria-valuenow="<?php echo (25 - $rowsArray[6][3]) * 4; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo 25 - $rowsArray[6][3]; ?>/25 Seats Available</div>
	  <?php	  } ?>
	  </div>
	  <br>
	  <h2>Row H - $30 per seat</h2>
	  <div class="form-group row">
		<div class="col-3">
			<input class="form-control" type="number" min="0" max="<?php echo (25 - $rowsArray[7][3]); ?>" value="0" name="input-row-h" id="input-row-h" <?php if((25 - $rowsArray[7][3])==0){ echo "disabled";}; ?>>
		</div>
		<label for="input-row-h" class="col-2 col-form-label">Seats</label>
	  </div>
	  <div class="progress">
	  <?php	  if ((25 - $rowsArray[7][3]) == 0) {?>
		<div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">0/25 Seats Available</div>
	  <?php	  } else {?>
		<div class="progress-bar bg-success" role="progressbar" style="width: <?php echo (25 - $rowsArray[7][3]) * 4; ?>%;" aria-valuenow="<?php echo (25 - $rowsArray[7][3]) * 4; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo 25 - $rowsArray[7][3]; ?>/25 Seats Available</div>
	  <?php	  } ?>
	  </div>
	  <br>
	  <h2>Row I - $30 per seat</h2>
	  <div class="form-group row">
		<div class="col-3">
			<input class="form-control" type="number" min="0" max="<?php echo (25 - $rowsArray[8][3]); ?>" value="0" name="input-row-i" id="input-row-i" <?php if((25 - $rowsArray[8][3])==0){ echo "disabled";}; ?>>
		</div>
		<label for="input-row-i" class="col-2 col-form-label">Seats</label>
	  </div>
	  <div class="progress">
	  <?php	  if ((25 - $rowsArray[8][3]) == 0) {?>
		<div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">0/25 Seats Available</div>
	  <?php	  } else {?>
		<div class="progress-bar bg-success" role="progressbar" style="width: <?php echo (25 - $rowsArray[8][3]) * 4; ?>%;" aria-valuenow="<?php echo (25 - $rowsArray[8][3]) * 4; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo 25 - $rowsArray[8][3]; ?>/25 Seats Available</div>
	  <?php	  } ?>
	  </div>
	</div>
   </div>
	  <br>
	  <input class="btn btn-primary" type="submit" name="submit" value="Checkout">
	  </form>
    </main>

<?php include('footer.php'); ?>