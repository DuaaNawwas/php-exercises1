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
        echo "------------Q1---------- <br>";
        $year = 2022;
        if($year % 4 == 0){
            if($year % 100 == 0 and $year % 400 == 0){
                echo "This year is a leap year <br>";
            } elseif($year % 100 <> 0) {
                echo "This year is a leap year <br>";
            } else {
                echo "This year is not a leap year <br>";

            }
        } else {
            echo "This year is not a leap year <br>";
        }
        echo "------------Q2---------- <br>";
        $temp = 27;
        if($temp > 20) {
            echo "It is summertime! <br>";
        } else {
            echo "It is wintertime! <br>";
        }

        echo "------------Q3---------- <br>";
        $num1 = 2;
        $num2 = 3;
        if($num1 == $num2){
            echo ($num1 + $num2) * 3;
            echo "<br>";
        } else {
            echo $num1 + $num2;
            echo "<br>";
        }
    
        echo "------------Q4---------- <br>";
        function sum30($int1, $int2){
            if($int1 + $int2 == 30){
                echo 30;
                echo "<br>";
            } else {
                echo "false <br>";
            }
        }
        sum30(10, 20);
        sum30(10, 10);

        echo "------------Q5---------- <br>";
        function multiple3($num){
            if($num % 3 == 0) {
                echo "true <br>";
            }else {
                echo "false <br>";
            }
        }
        multiple3(20);
        multiple3(21);
        echo "------------Q6---------- <br>";
        function rangeCheck($num){
            if($num >= 20 and $num <= 50) {
                echo "true <br>";
            }else {
                echo "false <br>";
            }
        }
        rangeCheck(50);
        rangeCheck(1);
        rangeCheck(25);

        echo "------------Q7---------- <br>";
        function largestInt($num1, $num2, $num3){
            if($num1 > $num2 and $num1 > $num3) {
                echo $num1;
                echo "<br>";
            }elseif($num2 > $num1 and $num2 > $num3) {
                echo $num2;
                echo "<br>";
            } else {
                echo $num3;
                echo "<br>";
            }
        }
        largestInt(1,2,3);
        largestInt(5,2,3);
        largestInt(5,8,3);

        echo "Q7 using array---------- <br>";
        function largestIntArr($array){
            $largest = 0;
            for ($i=0; $i < count($array) ; $i++) { 
                if ($i != 0 and $array[$i] > $array[$i-1]){
                    $largest = $array[$i];
                }
            }
            echo $largest;
            echo "<br>";
        }
        largestIntArr([1,2,3]);
        largestIntArr([1,12,3]);
        largestIntArr([1,12,3,15,20]);

        echo "------------Q8---------- <br>";
        function electricity($units){
            if ($units <= 50){
                $bill = 2.5 * $units;
            } elseif($units <= 150) {
                $bill = (2.5 * 50) + (5 * ($units - 50));
            } elseif($units <= 250) {
                $bill = (2.5 * 50) + (5 * 100) + (6.2 * ($units - 150));
            } else {
                $bill = (2.5 * 50) + (5 * 100) + (6.2 * 100) + (7.5 * ($units - 250)) ;
            }

            echo "$bill JD <br>";
        }

        electricity(50);
        electricity(70);
        electricity(230);
        electricity(270);


        echo "------------Q9---------- <br>";
        function calculator($num1, $oper, $num2){
            if ($oper == "+") {
                $answer = $num1 + $num2;
            } elseif ($oper == "-") {
                $answer = $num1 - $num2;
            } elseif ($oper == "/") {
                $answer = $num1 / $num2;
            } elseif ($oper == "*") {
                $answer = $num1 * $num2;
            }

            echo "$answer <br>";
        }

        calculator(1, "+", 2);
        calculator(5, "*", 10);
        calculator(10, "/", 2);
        calculator(12, "-", 2);

        echo "------------Q10---------- <br>";
        function isEligible($age){
            if($age >= 18){
                echo "is eligible to vote <br>";
            } else {
                echo "is not eligible to vote <br>";
            }
        }

        isEligible(16);
        isEligible(18);
        isEligible(20);

        echo "------------Q11---------- <br>";
        function posNegZero($num){
            if($num < 0) {
                $answer = "Negative";
            } elseif($num >0) {
                $answer = "Positive";
            } else {
                $answer = "Zero";
            }

            echo "This number is $answer <br>";
        }

        posNegZero(-10);
        posNegZero(0);
        posNegZero(50);

        echo "------------Q12---------- <br>";
        function grade($array){
            $sum = 0;
            for ($i=0; $i < count($array) ; $i++) { 
               $sum += $array[$i];
            }
            $ave = $sum / count($array);
           
            if($ave < 60){
                echo "F <br>";
            }elseif($ave < 70) {
                echo "D <br>";
            }elseif($ave < 80) {
                echo "C <br>";
            }elseif($ave < 90) {
                echo "B <br>";
            }elseif($ave <100) {
                echo "A <br>";
            }
        }

        grade([60,86,95,63,55,74,79,62,50]);
        grade([60,86,80,60,55,54,39,52,50]);
        grade([60,96,90,90,95,94,99,92,50]);
        grade([90,96,90,90,95,94,99,92,90]);
    ?>
</body>
</html>