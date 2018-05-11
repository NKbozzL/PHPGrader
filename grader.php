<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>N Boesel Lab 1</title>
		<link rel="stylesheet"  href="../webstyle.css" type="text/css" />
		<link rel="stylesheet"  href="labuno.css" type="text/css" />
	</head>
	<body>
		<?php include "../menu.inc";?>
		
		<div id="topside">
		<?php include "../school.inc";?>
		
		<?php include "../meinfo.php";?>
		</div>
		
		<div id="stuph">
			<?php
				$earned1=$_POST["earned1"];
				$earned2=$_POST["earned2"];
				$earned3=$_POST["earned3"];
				$earned4=$_POST["earned4"];
				$max1=$_POST["max1"];
				$max2=$_POST["max2"];
				$max3=$_POST["max3"];
				$max4=$_POST["max4"];
				$weight1=$_POST["weight1"];
				$weight2=$_POST["weight2"];
				$weight3=$_POST["weight3"];
				$weight4=$_POST["weight4"];
				
				function calcPercent($earned,$max)
				{
					$percent=(($earned / $max)*100);
					return $percent;
				}
				
				function calcWeighted($earned,$max,$weight)
				{
					$weighted=(($earned / $max)*$weight);
					return $weighted;
				}
				
				$percent1=calcPercent($earned1,$max1);
				$weighval1=calcWeighted($earned1,$max1,$weight1);
				
				$percent2=calcPercent($earned2,$max2);
				$weighval2=calcWeighted($earned2,$max2,$weight2);
				
				$percent3=calcPercent($earned3,$max3);
				$weighval3=calcWeighted($earned3,$max3,$weight3);
				
				$percent4=calcPercent($earned4,$max4);
				$weighval4=calcWeighted($earned4,$max4,$weight4);
				
				echo "<p>You earned a ".$percent1."% for Participation, with a weighted value of ".$weighval1."%</p><br />";
				echo "<p>You earned a ".$percent2."% for Participation, with a weighted value of ".$weighval2."%</p><br />";
				echo "<p>You earned a ".$percent3."% for Participation, with a weighted value of ".$weighval3."%</p><br />";
				echo "<p>You earned a ".$percent4."% for Participation, with a weighted value of ".$weighval4."%</p><br />";
				
				$numgrade=$weighval1+$weighval2+$weighval3+$weighval4;
				$letgrade="F";
				($numgrade >=60)?
					$letgrade="D":
					"F";
				($numgrade >=70)?
					$letgrade="C":
					"D";
				($numgrade >=75)?
					$letgrade="C+":
					"C";
				($numgrade >=80)?
					$letgrade="B":
					"C+";
				($numgrade >=85)?
					$letgrade="B+":
					"B";
				($numgrade >=90)?
					$letgrade="A":
					"B+";
				($numgrade >=95)?
					$letgrade="A+":
					"A";
				echo "<p><strong>Your final grade is a ".$numgrade."% which is a ".$letgrade."</strong></p>"
			?>
		</div>
		
		<div id="copyright">
			<p>This web site is entirely original work and full academic copyright is retained. This web site complies with the Mason Honor Code (<a href="http://catalog.gmu.edu/content.php?catoid=5&amp;navoid=410#Honor">http://catalog.gmu.edu/content.php?catoid=5&amp;navoid=410#Honor</a>).</p>
		</div>
	</body>
</html>