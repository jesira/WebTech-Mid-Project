<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>LOGIN PAGE</title>
        <link rel="stylesheet" href="BLOG-CSS/login.css">


    </head>
    <body>
        <form class="" action="Login.php" method="post">
                <br/><br/><br/>
                <p style="text-align:center;">LOGIN</p>

                <hr/>

                 <table style="margin: auto;">
                    <tr>
                        <td>
                            Enter Username:
                        </td>
                        <td>
                            <input type="text" name="username" value="" placeholder="[a-z/+0-9]" required pattern="[a-z0-9]+"/> <br/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Enter password:
                        </td>
                        <td>
                             <input type="password" name="password" value="" placeholder="[A-Z/+a-z/+0-9]" required pattern="[A-Za-z0-9]+"/> <br/>
                        </td>
                    </tr>
                </table>
                <p style="text-align:center;">
                    <input type="submit" name="submit" value="Login"/>
                </p>



        </form>
    </body>
</html>
