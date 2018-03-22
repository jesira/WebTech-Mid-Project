<?php
session_start();
$un = 	$_SESSION["username"];
$_SESSION["login"] = 1;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>BLOGING SITE</title>
        <link rel="stylesheet" href="BLOG-CSS/index.css"/>


    </head>
    <body>

        <header>
            <ul>
              <li><a href="home.php">Home</a></li>
              <li><a href="MyblogUI.php">My Blogs</a></li>
              <li class ="noRightBorder"><a href="AddnewblogUI.php">Add New blog</a></li>
               <li class= "rfloat"><a href="#"><?php echo $un ?></a></li>
              <li class= "rfloat"><a href="Logout.php">Logout</a></li>
              <!--<li class= "rfloat"><a href="LoginUI.php">Login</a></li>
              <li class= "rfloat"><a href="RegUI.php">Registration</a></li>-->
            </ul>
            <h1>Recent posts</h1>
        </header>

        <main>


            <?php
                $countpost = 0;
                $xmlRead = simplexml_load_file("Blogs.xml");
                $postinfo = array_reverse($xmlRead->xpath('post'));
            	foreach($postinfo as $author)
            	{
                        $countpost++;
                        echo "<b>"."Author: ".$author->UserName."</b></br>";
                        echo $author->Date."</br>";
                        echo "<p><b>"."Title: ".$author->title."</b></p>";
            			echo "<p>".$author->writing."</p>";
            			echo '<img src="'.$author->pic.'" alt="Picture"  height="200" width="200" />';
            			echo "<hr/>";

                        if($countpost==3)
                        {break;}
            	}
            ?>
        </main>

        <footer>
            <form class="" action="ReadMore.php" method="post">


                <table>
                    <tr>
                    <?php
                    $fp = 0;
                    foreach($xmlRead->post as $au)
                    {
                        $fp++;
                    ?>

                    <td>
                        <?php echo '<img src="'.$au->pic.'" alt="Picture"  height="200" width="200" />';?>
                    </td>

                    <?php
                        if($fp==6)
                        {break;}
                    }?>

                    </tr>

                    <tr>
                    <?php
                        $fp = 0;
                        foreach($xmlRead->post as $au)
                        {
                            $fp++;
                    ?>
                    <td>
                        <input type="submit" name="" value="<?php echo $au->title ?>">


                    </td>
                        <?php
                        if($fp==6)
                        {break;}

                        }


                        ?>
                    </tr>
                 </table>
             </form>

             <hr/>
             <small>&copy; Copyright 2018, bloggingsite.com</small>
        </footer>
    </body>
</html>
