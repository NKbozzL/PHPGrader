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
			<form action="grader.php" method="post">
				<h2>Participation<br /></h2>
				<p>Earned:<input type="text" name="earned1"/>Max:<input type="text" name="max1"/>Weight (Percentage):<input type="text" name="weight1"/><br /></p>
				<h2>Quizzes<br /></h2>
				<p>Earned:<input type="text" name="earned2"/>Max:<input type="text" name="max2"/>Weight (Percentage):<input type="text" name="weight2"/><br /></p>
				<h2>Lab Assignments<br /></h2>
				<p>Earned:<input type="text" name="earned3"/>Max:<input type="text" name="max3"/>Weight (Percentage):<input type="text" name="weight3"/><br /></p>
				<h2>Practica<br /></h2>
				<p>Earned:<input type="text" name="earned4"/>Max:<input type="text" name="max4"/>Weight (Percentage):<input type="text" name="weight4"/><br /></p>
				<p><input type="submit"/></p>
			</form>
		</div>
		
		<div id="copyright">
			<p>This web site is entirely original work and full academic copyright is retained. This web site complies with the Mason Honor Code (<a href="http://catalog.gmu.edu/content.php?catoid=5&amp;navoid=410#Honor">http://catalog.gmu.edu/content.php?catoid=5&amp;navoid=410#Honor</a>).</p>
		</div>
	</body>
</html>