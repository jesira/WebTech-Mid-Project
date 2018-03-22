<?php

	session_start();
	if($_SESSION["login"] != 1)
	{
		header( 'location: index.php' );
	}
	$xmlRead = simplexml_load_file("Blogs.xml");

	echo "<h3>Contributions: </h3>";
	foreach($xmlRead->post as $author)
	{
	    if((string)$author->UserName == $_SESSION["username"])
		{
			echo "<b>".$author->title."</b><br/>";
			echo "<p>".$author->writing."<p/>";
			echo '<img src="'.$author->pic.'" alt="Picture"  height="50" width="100" />';
			?>
			<a href="Edit.php">Edit</a>
			<?php
			echo "<hr/>";

		}
	}

?>


<a href="home.php">GO TO MY HOME</a>
