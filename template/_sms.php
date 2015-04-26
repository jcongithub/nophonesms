<?php 
	require_once 'nophonesms.php';
	$activeNumbers = $nophonesms->getCurrentNumbers();
	if(isset($_GET['number'])){
		$number = $_GET['number'];
	}
	else{
		$number = $activeNumbers[0];
	}	
	$smsList = $nophonesms->getLastMessages($number, 20);
?>

<div class="row">
	<div class="col-lg-12 text-center">
		<h1>Meesages received</h1>
		<select class="form-control" id="number">
		<?php 
				foreach($activeNumbers as $activeNumber){
					$num = $activeNumber->number;
					if($num == $number){
						echo "<option value=\"$num\" selected>$num</option>";
					}
					else{
						echo "<option value=\"$num\">$num</option>";								
					}
				}
		?>
		</select>		      
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<table class="table table-striped ">
  		    <thead>
		      <tr>
		        <th>From Number</th>
		        <th>Time</th>
		        <th>Content</th>
		      </tr>
		    </thead>
			<tbody>
				<?php 
					foreach ($smsList as $sms){
						echo"<tr><td>".$sms->getFrom()."</td><td>".$sms->getTime()."</td><td>".$sms->getContent()."</td></tr>";
					}
				?>
			</tbody>
		</table>
	</div>        
</div>	
