<html>

<head>
   <title>PHP Test</title>
</head>

<body>
   <?php


   // Q1: Write a program that will count the "r" characters in a string

   function countR($str)
   {
      $count = 0;
      for ($i = 0; $i < strlen($str); $i++) {
         if ($str[$i] == "r") {
            $count++;
         }
      }
      return $count;
   }
   echo countR("roger that random person") . "<br>";

   // Q2 Write a PHP function that checks whether a string is all lowercase
   function isLower($str)
   {
      $lowerStr = strtolower($str);
      if ($str == $lowerStr) {
         echo "The string is all lowercase";
      } else {
         echo "The string is not all lowercase";
      }
   }
   isLower("hello");
   echo "<br>";
   isLower("Hello");
   echo "<br>";

   function isLowerRgex($str)
   {

      if (!preg_match('/[A-Z]/', $str)) {
         echo "The string is all lowercase";
      } else {
         echo "The string is not all lowercase";
      }
   }
   isLowerRgex("hello");
   echo "<br>";
   isLowerRgex("Hello");
   echo "<br>";


   function isLowerAscii($str)
   {
      $count = 0;
      for ($i = 0; $i < strlen($str); $i++) {
         if (!(ord($str[$i]) >= 97 and ord($str[$i]) <= 122)) {
            $count++;
         }
      }

      if ($count > 0) {
         echo "The string is not all lowercase <br>";
      } else {
         echo "The string is all lowercase";
      }
   }

   isLowerAscii("hello");
   echo "<br>";
   isLowerAscii("Hello");
   echo "<br>";
   ?>
   <table style="border: 1px solid black">
      <?php
      // Q3: Write a PHP script that creates the following table (use for loops).
      $x = 0;
      function row()
      {
         global $x;
         $x++;
         for ($i = 1; $i <= 10; $i++) {
            echo "<td style='border: 1px solid black'>" . $i * $x . "</td>";
         }
      }

      function table()
      {
         for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            row();
            echo "</tr>";
         }
      }

      table();
      ?>

   </table>
   <?php
   // Q4: Write a PHP script to extract text (within square brackets ) from a string. 
   // Sample strings: 'The quick brown [fox].'
   // Expected Output: 'fox'


   function extractBracket($str)
   {
      for ($i = 0; $i < strlen($str); $i++) {
         if ($str[$i] == "[") {
            $startOfWord = substr($str, $i + 1);
         }
      }
      for ($i = 0; $i < strlen($startOfWord); $i++) {
         if ($startOfWord[$i] == "]") {
            echo substr($startOfWord, 0, $i) . "<br>";
         }
      }
   }

   extractBracket('The quick brown [fox] in the forrest.');

   extractBracket('[fox] in the forrest.');



   // Q5: Write a PHP Calculator class that will accept two values as arguments, then add them, subtract them, multiply them together, or divide them on request. For example :
   // $mycalc = new MyCalculator( 12, 6);
   // echo $mycalc- > add(); // Displays 18
   // echo $mycalc- > multiply(); // Displays 72

   class MyCalculator
   {
      private $num1;
      private $num2;

      public function __construct($num1, $num2)
      {
         $this->num1 = $num1;
         $this->num2 = $num2;
      }

      public function add()
      {
         return $this->num1 + $this->num2;
      }

      public function multiply()
      {
         return $this->num1 * $this->num2;
      }

      public function substract()
      {
         return $this->num1 - $this->num2;
      }

      public function divide()
      {
         return $this->num1 / $this->num2;
      }
   }

   $mycalc = new MyCalculator(12, 6);
   echo $mycalc->add(); // Displays 18
   echo "<br>";
   echo $mycalc->multiply(); // Displays 72

   ?>
</body>

</html>