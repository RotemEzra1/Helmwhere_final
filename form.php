<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP form</title>
        </head>
    <body>
        <?php
            $fname = $_GET["fName"]; 
            $lName = $_GET["lName"];
            $date = $_GET["date"];
            $location = $_GET["location"];
            $email = $_GET["email"];
            $gender = $_GET["gender"];
            $height = $_GET["height"];
            $Weight = $_GET["Weight"];
            $age = $_GET["age"];

            echo "<h1>Welcome ".$fname. "</h1>" ;
            echo "<h2> your first name is:" .$fname. "</h2>" ;
            echo "<h2> your last name is:" .$lName. "</h2>" ;
            echo "<h2> your Birth date  is:" .$date. "</h2>" ;
            echo "<h2> your state  is:" .$location. "</h2>" ;
            echo "<h2> your Email is:" .$email. "</h2>" ;
            echo "<h2> your Gender is:" .$gender. "</h2>" ;
            echo "<h2> your height is:" .$height. "</h2>" ;
            echo "<h2> your Weight is:" .$Weight. "</h2>" ;
            echo "<h2> your age is:" .$age. "</h2>" ;

        ?>
    </body>
</html>