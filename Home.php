
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

/*Connection Of Php To Mysql

* $con = Variable
* mysqli_connect(); = Method
Note: " i " in mysqli represents improved version.


Arguments of mysqli_connect();
1st Argument is localhost.
2nd Argument is your Database user name which is ' root ' by default.
3rd Argument is Password (You can leave 3rd argument empty like this '' if you have not set password)
4th Argument is your Database name
*/

$con = mysqli_connect('localhost','root','','facebook');
if($con==true)
{
   echo "";
}
else
{
    echo ".";
}

?>

</body>
</html>  
