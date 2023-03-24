<?php 

echo "hello <br>";

$t = date("H");
?>


<h4>LOOPS</h4>
<?php
//if
if ($t < "20") {
  echo "Its a For Loop <br>";
}

//break
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x  break<br>";
}
//continue
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x continue <br>";
}
?>




<h4>Functions</h4>
<?php
//functions
function familyName($fname) {
    echo "$fname Refsnes function.<br>";
  }
  
  familyName("ABC");
  familyName("BCD");
  familyName("EFG");
  familyName("BD");
  familyName("AAA");

?>



<h4>Arrays</h4>
 <?php
//arrays
  $fruits = array("ORANGE", "APPLE", "BANANA");
echo "I like " . $fruits[0] . ", " . $fruits[1] . " and " . $fruits[2] . ".<br>";
echo "The Count is " . count($fruits) ."<br>";


//associative
$address=array("nikky"=>"hyd","meghana"=>"ap","venky"=>"hyd");

echo "nikky lives in " . $address['nikky'] ."<br>" ;

foreach($address as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }

?>


<h4>Super Globals</h4>

<h5>GLOBALS</h5>

<?php
  //superglobals
  $n=7;
  $p=9;
  function m(){
    $GLOBALS['np']=$GLOBALS['n']+$GLOBALS['p'];
 

  }
  m();
  echo $np;
?>
<h5>$_SERVER</h5>
<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>

<h5>$_REQUEST and $_POST</h5>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

</body>
</html>

<h5>$_GET</h5><html>
<?php
   if( $_GET["name"] || $_GET["age"] ) {
      echo "Welcome ". $_GET['name']. "<br />";
      echo "You are ". $_GET['age']. " years old.";
      
      exit();
   }
?>
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" />
      </form>
      
   </body>
</html>


<h4>regEx</h4>
<?php
//regEx
$str = "Hello All";
$pattern = "/all/i";
echo "MATCH ". preg_match($pattern, $str) . "<br>"; // Outputs 1
?>
<?php
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo "MATCH_ALL "  . preg_match_all($pattern, $str); // Outputs 4
?>

<h4>FORM HANDLING</h4>
<h5>post</h5>
<html>
<body>

<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>

<h5>get<h5>
<html>
<body>

<form action="welcome_get.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>