<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
//the first name parameter from the url is received by GET
$firstname=filter_input(INPUT_GET,'firstname', FILTER_SANITIZE_STRING);

//the last name parameter from the url is received by GET
$lastname=filter_input(INPUT_GET,'lastname', FILTER_SANITIZE_STRING);

//The age parameter from the url is received by GET
$age=filter_input(INPUT_GET, 'age', FILTER_SANITIZE_NUMBER_INT);

//Get parameters are printed to screen when url is searched
print_r(INPUT_GET);

//the first sentence is displayed on screen
echo "Hello, my name is {$firstname} {$lastname}.<br/>";

//based on condition, displaying the string
if($age>=18)
{
echo "I am $age years old and I am old enough to vote in the United States.<br/>";
}
else
{
echo "I am $age years old and I am not old enough to vote in the United States.<br/>";
}
//the calculation for the total number of days that the age is equaled to
$numofdays = $age * 365;

echo "This age is equaled to this amount of days: $numofdays <br/>";

//displaying current date
$date = date('m-d-Y H:i:s');

echo $date;

if(empty($firstname&&$lastname&&$age)) {
    $message = "Invalid Parameters";
    
    echo $message;

}

?>
        
    </body>
</html>
