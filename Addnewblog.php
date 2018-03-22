<?php

		session_start();

		if($_SESSION["login"] != 1)
		{
			header( 'location: index.php' );
		}
        $xmlRead = simplexml_load_file("Blogs.xml");

	 	$xml = new DomDocument("1.0", "UTF-8");
		$xml->preserveWhiteSpace = false;
		$xml->formatOutput = true;
		$xml->load("Blogs.xml");


		 if(!$_FILES['pic']['name'])
		 {
				echo "<br/>Please upload a document";
				echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

		}

		else
		{
			$info = pathinfo($_FILES['pic']['name']);
			$ext = $info['extension'];
			$pic_id=rand();
			$newname = ((string)$pic_id).".".$ext;

			$target = 'Images/'.$newname;

			if(move_uploaded_file( $_FILES['pic']['tmp_name'], $target))
			{
				echo "SUCCESSFULY UPLOADED!!!";
				?>
                <a href="MyblogUI.php">GO TO MY BLOGS</a> &nbsp;
				<a href="home.php">GO TO MY HOME</a>

				<?php

			}
			else
			{
				echo "SORRY YOUR FILE COULDN'T BE UPLOADED!!!";
			}

		}


	$posts = $xml->firstChild;

	if(isset($_POST['submit']))
	{



	    $author_name=$_SESSION["username"];
	    $title=dataFilter($_POST["blogtitle"]);
		$writing=dataFilter($_POST["textarea"]);
		$picPath=$target;

		date_default_timezone_set('Asia/Dhaka');
		$currentDate = date("F j, Y g:i a");







		$Postpp = $xml->createElement("post");
		$posts->appendChild($Postpp);


		$name_push  = $xml->createElement("UserName",$author_name);
		$title_push= $xml->createElement("title",$title);
		$Writings_push = $xml->createElement("writing",$writing);
		$pic_push  = $xml->createElement("pic",$picPath);
		$date =  $xml->createElement("Date",$currentDate);




		$Postpp->appendChild($name_push);
		$Postpp->appendChild($title_push);
		$Postpp->appendChild($Writings_push);
		$Postpp->appendChild($pic_push);
		$Postpp->appendChild($date);



		//echo"<xmp>".$xml->saveXML()."</xmp>";
		$xml->save("Blogs.xml");
		//header("location:mainpage.php");


	}

    function dataFilter($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }



?>
