<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP code to Add two user inputs</h1>
    <form action="" method="post">
        <input type="text" id="inp1" placeholder="Number 1" name="inp1">
        <input type="text" id="inp2" placeholder="Number 2" name="inp2">
        <input type="submit" value="Arithmetic Operations">
    </form>

    <?php 
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $num1=$_POST["inp1"];
            $num2=$_POST["inp2"];
            $sum=$num1+$num2;
            $diff=$num1-$num2;
            $mul=$num1*$num2;
            $div=$num1/$num2;
            $rem=$num1%$num2;
            echo " Sum of $num1 and $num2 is $sum <br>";
            echo "Difference of $num1 and $num2 and is $diff <br>";
            echo "Product of $num1 and $num2 is $mul <br>";
            echo "Quotient of $num1 and $num2 is $div <br>";
            echo "Remainder of $num1 and $num2 is $rem <br>";
        }
    ?>
</body>
</html>