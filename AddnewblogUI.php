<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Add new blog</title>
        <link rel="stylesheet" href="BLOG-CSS/addblog.css">
    </head>
    <body>
        <form class="" action="Addnewblog.php" method="post" enctype="multipart/form-data"/>
            <input type="text" name="blogtitle" value="" placeholder="Insert the title of your article.." required/> <br/><br/>
            <textarea name="textarea" rows="10" cols="60" ></textarea required><br/><br/>
            <b>CHOOSE PICTURE:</b> <br/>

            <input name="pic" type="file" required/><br/><br/><br/>

            <input type="submit" name="submit" value="SAVE"/>



        </form>
    </body>
</html>
