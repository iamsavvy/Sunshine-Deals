<ul>
	<?php
		$db = mysql_connect("5.43.204.56", "root", "wamadproj01") or die('cant connect');
		mysql_select_db("sunshinedeals");
		$results = mysql_query("SELECT * FROM COUPONS;") or die(mysql_error());
		while ($row = mysql_fetch_array($results)){
	?>
		<li><?= $row["COUP_NAME"] ?></li>
	<?php
		}
		mysql_close($db);
	?>
</ul>