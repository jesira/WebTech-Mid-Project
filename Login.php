<?php
	session_start();

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$name = dataFilter($_POST["username"]);
		$passWord = dataFilter($_POST["password"]);

		$xml = simplexml_load_file("Registration.xml");
		$logindone = FALSE ;

		foreach($xml->Author as $author)
		{
			if($name==$author->UserName && $passWord==$author->Password)
			{
				$logindone = TRUE ;
					$_SESSION["name"] = (string)$author->Name;
					$_SESSION["username"] = (string)$author->UserName;
					$_SESSION["email"] = (string)$author->Email;
					$_SESSION["password"] = (string)$author->Password;
					break;

			}

		}

    }

	if($logindone)
	{
		header("location:home.php");
	}
	else if($name!=$author->UserName)
	{
		echo "INCORRECT USERNAME!!!";
	}
	else if($passWord!=$author->Password)
	{
		echo "INCORRECT PASSWORD!!!";
	}


	function dataFilter($data)
	{
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);

		return $data;
	}
	?>
