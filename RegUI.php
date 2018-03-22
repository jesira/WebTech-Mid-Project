<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTRATION</title>
    <link rel="stylesheet" href="BLOG-CSS/registration.css">
</head>
<body>
    <form class="" action="Reg.php" method="post">
        <p style="text-align:center;">REGISTRATION</p>
        <hr/>
        <table style="margin: auto;">
            <tr>
                <td>
                    Name:

                </td>
                <td>
                    <input type="text" name="name" value="" placeholder="[A-Z/+a-z ]" required pattern="[A-Za-z ]+"/> <br/>
                </td>

            </tr>
            <tr>
                <td>
                    Username:
                </td>
                <td>
                    <input type="text" name="username" value=""placeholder="[a-z/+0-9]" required pattern="[a-z0-9]+"/> <br/>
                </td>

            </tr>
            <tr>
                <td>
                    Email:
                </td>
                <td>
                    <input type="email" name="email" value=""placeholder="E-mail"/> <br/>
                </td>

            </tr>
            <tr>
                <td>
                    Password:
                </td>
                <td>
                    <input type="password" name="password" value=""placeholder="[A-Z/+a-z/+0-9]" required pattern="[a-zA-Z0-9]+"/> <br/>
                </td>

            </tr>

        </table>

        <p style="text-align:center;">
        <input type="submit" name="submit"/> <br/>
        </p>

    </form>
</body>
</html>
