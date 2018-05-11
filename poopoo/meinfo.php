<div id="meinfo">
		<p><strong>Nicholas Boesel </strong><a href="mailto:nboesel@gmu.edu">nboesel@gmu.edu</a></p>
		<p><strong><?php
		date_default_timezone_set("EST");
		echo "Last Modified: ".date("H:i F d Y T ", getlastmod());
		echo "<p>PHP Version: ".phpversion()."</p>";
		?>
			</strong></p>
		</div>