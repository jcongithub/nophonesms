<?php 
	require_once 'nophonesms.php';
	$numbers = $nophonesms->getNumbersForSell();
?>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
	  <h2>Buy Virtual Number</h2>
	  <form role="form">
	    <div class="form-group">
	      <label for="number">Pick a number</label>
			<select class="form-control" id="new_number">
				<?php 
					foreach($numbers as $number){
						echo "<option value=\"".$number->number."\">".$number->number."</option>";
					}
				?>
			</select>		      
	    </div>
	    <div class="form-group">
	    	<label for="plan">Pick a plan</label>	    
		   <div class="radio" id="number">
		      <label><input type="radio" name="optradio">$1.99 for one week</label>
		    </div>
		    <div class="radio">
		      <label><input type="radio" name="optradio">$3.99 for 2 weeks</label>
		    </div>
		    <div class="radio disabled">
		      <label><input type="radio" name="optradio" disabled>$9.99 for one month</label>
		    </div>
	    </div>
	    <div class="form-group">
	    	<label for="email">Your Email</label>
	    	<input type="text" class="form-control" id="email">
	    </div>
	    <div class="form-group">
	    	<label for="pass">Password</label>
	    	<input type="text" class="form-control" id="password">
	    </div>
	  	<button type="submit" class="btn btn-default">Paypal Submit</button>
	  </form>
	</div>	
	<div class="col-md-4"></div>
</div>
