
<?php

$xml = new DomDocument("1.0", "UTF-8");
$xml->preserveWhiteSpace = false;
$xml->formatOutput = true;
$xml->load("Registration.xml");



    $authorList = $xml->firstChild; // taking the root element into $authorList.

if(isset($_POST['submit']))
{
    $fname=$_POST["name"];
    $fuserName=$_POST["username"];
    $femail=$_POST["email"];
    $fpassword=$_POST["password"];


    $author = $xml->createElement("Author");
    $authorList->appendChild($author);


    $name = $xml->createElement("Name",$fname);
    $username = $xml->createElement("UserName",$fuserName);
    $email = $xml->createElement("Email",$femail);
    $password = $xml->createElement("Password",$fpassword);

    $author->appendChild($name);
    $author->appendChild($username);
    $author->appendChild($email);
    $author->appendChild($password);


    //$xml->formatOutput = true;
    //echo"<xmp>".$xml->saveXML()."</xmp>";
    $xml->save("Registration.xml");

    echo "<i><br><br>Congratulations</i><b> ".strtoupper($fname)."(".$fuserName.")</b>,<i> you have successfully registered to this site !!!<i>";


}
?>

<a href="LoginUI.php">Login</a>
