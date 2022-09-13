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
        echo "------------Part 1 Logical operators---------- <br>";

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


        echo "------------Part 2 Arrays---------- <br>";



        echo "------------Q1---------- <br>";

        
        function paragraph($colors){
            echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[0] carpet, the $colors[1] lawn, the $colors[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon <br>";
        }
        paragraph(["red", "green", "white"]);

        echo "------------Q2---------- <br>";
        function unorderedList($colors){
            echo "<ul>";
            foreach($colors as $color){
                echo "<li> $color </li>";
            }
            echo "</ul><br>";
        }
        unorderedList(['white', 'green', 'red']);


        echo "------------Q3---------- <br>";
        function capitals($cities){
            foreach($cities as $country => $capital){
                echo "The capital of $country is $capital <br>";
            }
        }

        capitals(["Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid"]);

        echo "------------Q4---------- <br>";
        function firstElement($colors){
            echo $colors[array_key_first($colors)]."<br>";
            echo reset($colors)."<br>";
        }
        firstElement([4 => 'white', 6 => 'green', 11=> 'red']);

        echo "------------Q5---------- <br>";
        //  function insert($array, $location, $newItem){
        //     foreach($array as $i => $item){
        //         if ($location == $i){
        //             $array[$i+1] = $array[$i];
        //             $array[$i] = $newItem;
        //         } elseif($i > $location) {
        //             $array[$i+1] = $array[$i];
        //         } else {
        //             $array[$i] = $array[$i];
        //         }
        //     }
        //     print_r($array);
        //  }

        //  insert([1,2,3,4,5],2,"$")
        $array = [1,2,3,4,5];
        $location = 4;
        $newItem = array("$");
        array_splice($array, $location-1, 0 , $newItem);
        print_r($array);
        echo "<br>";
     
        echo "------------Q6---------- <br>";
        $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
        asort($fruits);
        foreach($fruits as $i => $fruit){
            echo "$i : $fruit <br>";
        }


        echo "------------Q7---------- <br>";
        function aveLowestHighest($array){
            $total = 0;
            foreach($array as $temp){
                $total += $temp;
            }
            $ave = $total / count($array);
            echo "Average Temperature is: $ave <br>";
            
            $arrayUnique = array_unique($array);
            sort($arrayUnique);
            echo "Lowest 5 temperatures: $arrayUnique[0] $arrayUnique[1] $arrayUnique[2] $arrayUnique[3] $arrayUnique[4] <br>";
            rsort($arrayUnique);
            echo "Highest 5 temperatures: $arrayUnique[0] $arrayUnique[1] $arrayUnique[2] $arrayUnique[3] $arrayUnique[4] <br>";
        }

        aveLowestHighest([78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73]);

        echo "------------Q8---------- <br>";
        $array1 = array("color" => "red", 2, 4);
        $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
        print_r(array_merge($array1, $array2));
        echo "<br>";
        
        echo "------------Q9---------- <br>";
        function upperCase($array){
            $flippedArray = array_flip($array);
            $upperFlipped = array_change_key_case($flippedArray,CASE_UPPER);
            $upperArray = array_flip($upperFlipped);
            print_r($upperArray);
            echo "<br>";
        }

        upperCase(["red","blue", "white","yellow"]);

        echo "------------Q10---------- <br>";
        function lowerCase($array){
            $flippedArray = array_flip($array);
            $lowerFlipped = array_change_key_case($flippedArray,CASE_LOWER);
            $lowerArray = array_flip($lowerFlipped);
            print_r($lowerArray);
            echo "<br>";
        }

        lowerCase(["RED","BLUE", "WHITE","YELLOW"]);

        echo "------------Q11---------- <br>";
        $divisible4 =[];
        for($i = 200; $i <= 250; $i++){
            if($i % 4 == 0){
                array_push($divisible4, $i); //you could've just echo $i lol
            }
        }
        foreach($divisible4 as $num){
            echo "$num , ";
        }

        echo "<br>";

        echo "------------Q12---------- <br>";
        function stringLen($words){
            $lengths =[];
            foreach($words as $word){
                array_push($lengths, strlen($word));
            }
            sort($lengths);
            echo "The shortest array length is " . $lengths[0] .". The longest array length is " . $lengths[count($lengths)-1].". <br>";
        }
        stringLen(["abcd","abc","de","hjjj","g","wer"]);

        echo "------------Q13---------- <br>";
        function randomBtw($num1, $num2){
            $numArray = [];
            for($i = $num1; $i <= $num2; $i++){
                array_push($numArray, $i);

            }
            $random10 = array_rand($numArray, 10);
            foreach($random10 as $num){
                echo $num . ",";
            }

            echo "<br>";
        }

        randomBtw(5, 40);

        echo "------------Q14---------- <br>";
        function lowestInt($array){
            sort($array);
            if ($array[0] == 0){
              echo next($array);
            } else {
                echo $array[0];
            }
        }

       lowestInt([ 2, 0, 10, 12, 6]) . "<br>";

       echo "------------Part 3 Loops---------- <br>";
    ?>
</body>
</html>