<div class="row">
<div class="col-lg-12 text-center">
<h1>Protect Your Privacy</h1>
<p class="lead">Don't give your phone number to a stranger or a untrusted website. Use following number instead and receive text message here. Nobody would know your real number.</p>
            </div>
        </div>
        <!-- /.row 2-->
        <div class="row">
            <div class="col-lg-12">
		  		<table class="table table-striped ">
		  		    <thead>
				      <tr>
				        <th>Country</th>
				        <th>Number</th>
				        <th>SMS</th>
				        <th>Country</th>
				        <th>Number</th>
				        <th>SMS</th>
				      </tr>
				    </thead>
					<tbody>
				    <?php
						$i = 0;
						$count = count($activeNumbers);
						while($i < $count){
							$number = $activeNumbers[$i];
							echo "<tr><td>".$number->country."</td><td>".$number->number."</td><td>1<a href=\"sms.php?number=".$number->number."\">See SMS</a></td>";
							$i = $i + 1;
							if($i < $count){
								$number = $activeNumbers[$i];
								echo "<td>".$number->country."</td><td>".$number->number."</td><td>1<a href=\"sms.php?number=".$number->number."\">See SMS</a></td>";
								$i = $i + 1;
							}
							else{
								echo "<td></td><td></td><td></td>";
							}
							echo '</tr>';
						}
					?>
					</tbody>
				</table>
            </div>
		</div>
		<!--/.row 2-->
		<!-- row 3 -->
		<div class="row text-center">
			<div class="container text-center">
	            <div class="row">
	                <div class="col-lg-3 col-md-6">
	                    <div class="service-box">
	                        <i class="fa fa-4x fa-diamond wow bounceIn text-primary"></i>
	                        <h3>Why No Phone SMS</h3>
	                        <p class="text-muted">Protect your privacy</p>
	                        <p class="text-muted">Free</p>
	                        <p class="text-muted">No phone needed</p>
	                    </div>
	                </div>
	                <div class="col-lg-3 col-md-6 text-center">
	                    <div class="service-box">
	                        <i class="fa fa-4x fa-paper-plane wow bounceIn text-primary" data-wow-delay=".1s"></i>
	                        <h3>Private Virtual Number</h3><p class="text-muted"></p>
	                        <p class="text-muted">Receive calls and messages</p>
	                        <p class="text-muted">Great for privatly register a website</p>
	                        <p class="text-muted">Great for giving  to people for them to call you short period time</p>
	                        <p class="text-muted">Very cheap starts $1.99</p>
	                        <a class="btn btn-primary btn-lg" href="buyvirtualnumber.php" role="button">Buy Virtual Number »</a>
	                    </div>
	                </div>
	            </div>
			</div>

		</div>
		<!-- /.row 3-->




