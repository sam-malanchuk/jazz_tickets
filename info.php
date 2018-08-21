<?php include('header.php'); ?>

    <!-- Begin page content -->
    <main role="main" class="container">
      <h1 class="mt-5">Order Information (2/3)</h1>
      <p class="lead">Enter your personal information below.</p>
	  <form action="confirm.php" method="post">
	  <?php
		if(isset($_POST['submit'])){
			for ($x = a; $x <= i; $x++) {
				$seatOrders[$x] = $_POST['input-row-' . $x . ''];
			} 
		} else {
			header('Location: tickets.php');
		}
		$q = a;
		foreach($seatOrders as $item) {
		echo "<input type=\"hidden\" class=\"form-control\" name=\"input-row-" . $q . "\" value=\"" . $seatOrders[$q] . "\">";
		$q++;
		}
		?>
	    <div class="form-row">
		<div class="form-group col-md-6">
		  <label for="fname">First Name</label>
		  <input type="text" class="form-control" name="fname" placeholder="First Name" id="fname" required>
		</div>
		<div class="form-group col-md-6">
		  <label for="lname">Last Name</label>
		  <input type="text" class="form-control" name="lname" placeholder="Last Name" id="lname">
		</div>
		</div>
		<div class="form-group">
		<label for="email">Email</label>
		<input type="email" class="form-control" name="email" placeholder="example@email.com" id="email" required>
		</div>
		<div class="form-group">
		<label for="address">Address</label>
		<input type="text" class="form-control" name="address" placeholder="1234 Main St" id="address">
		</div>
		<div class="form-row">
		<div class="form-group col-md-6">
		  <label for="city">City</label>
		  <input type="text" class="form-control" name="city" id="city">
		</div>
		<div class="form-group col-md-4">
		  <label for="state">State</label>
		  <select name="state" class="form-control" id="state">
			<option selected>Choose...</option>
			<option value="AL">Alabama</option>
			<option value="AK">Alaska</option>
			<option value="AZ">Arizona</option>
			<option value="AR">Arkansas</option>
			<option value="CA">California</option>
			<option value="CO">Colorado</option>
			<option value="CT">Connecticut</option>
			<option value="DE">Delaware</option>
			<option value="DC">District Of Columbia</option>
			<option value="FL">Florida</option>
			<option value="GA">Georgia</option>
			<option value="HI">Hawaii</option>
			<option value="ID">Idaho</option>
			<option value="IL">Illinois</option>
			<option value="IN">Indiana</option>
			<option value="IA">Iowa</option>
			<option value="KS">Kansas</option>
			<option value="KY">Kentucky</option>
			<option value="LA">Louisiana</option>
			<option value="ME">Maine</option>
			<option value="MD">Maryland</option>
			<option value="MA">Massachusetts</option>
			<option value="MI">Michigan</option>
			<option value="MN">Minnesota</option>
			<option value="MS">Mississippi</option>
			<option value="MO">Missouri</option>
			<option value="MT">Montana</option>
			<option value="NE">Nebraska</option>
			<option value="NV">Nevada</option>
			<option value="NH">New Hampshire</option>
			<option value="NJ">New Jersey</option>
			<option value="NM">New Mexico</option>
			<option value="NY">New York</option>
			<option value="NC">North Carolina</option>
			<option value="ND">North Dakota</option>
			<option value="OH">Ohio</option>
			<option value="OK">Oklahoma</option>
			<option value="OR">Oregon</option>
			<option value="PA">Pennsylvania</option>
			<option value="RI">Rhode Island</option>
			<option value="SC">South Carolina</option>
			<option value="SD">South Dakota</option>
			<option value="TN">Tennessee</option>
			<option value="TX">Texas</option>
			<option value="UT">Utah</option>
			<option value="VT">Vermont</option>
			<option value="VA">Virginia</option>
			<option value="WA">Washington</option>
			<option value="WV">West Virginia</option>
			<option value="WI">Wisconsin</option>
			<option value="WY">Wyoming</option>
		  </select>
		</div>
		<div class="form-group col-md-2">
		  <label for="zip">Zip</label>
		  <input type="text" class="form-control" name="zip" id="zip">
		</div>
		</div>
	  <input class="btn btn-primary" type="submit" value="Submit">
	  </form>
	  <br>
    </main>

	<script>
	function autoFill() {
		document.getElementById('fname').value = "John";
		document.getElementById('lname').value = "Smith";
		document.getElementById('email').value = "testemail@gmail.com";
		document.getElementById('address').value = "1600 Amphitheatre Parkway";
		document.getElementById('city').value = "Mountain View";
		document.getElementById('state').value = "CA";
		document.getElementById('zip').value = "94043";
	}
	var askAutoFill = window.confirm("This form will AutoFill with placeholder information for security reasons.  WARNING: All information submited to this form can be viewed on the tables page!");
	if (askAutoFill) {
		autoFill();
	}
	</script>
	
<?php include('footer.php'); ?>