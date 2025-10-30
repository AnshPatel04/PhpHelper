<?php

    // $userName1  =  $_POST['userName'];
    
    ####// extract($_POST);
    
    // echo $userName;
    
    
    //------------
    
    // Get Post 

    // echo "<pre>";
    // print_r($_GET);

    // echo "<pre>";
    // echo $_GET;exit;

    //Post


    // if(isset($_POST["submit"])){
    //     if(empty($_POST["username"])){
    //         echo "<b style=\"color: red\">Username is required</b>";
    //     }
    // }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Text Field -->
    
    <!-- <form action="index.php" method="post"> 
        <div>
            <label>
                UserName : 
            </label>
            <input type="text" name="username">
        </div>
        <div>
            <label>
                Password : 
            </label>
            <input type="password" name="Password">
        </div>
        <button type="submit" name="submit">Login</button>
    </form> -->


    <!-- Radio -->
    
    <!-- <?php 
        if(isset($_POST['submit'])){
            if(!isset($_POST['gender'])){
            // if(empty($_POST['gender'])){
                echo "<b style=\"color:red\">Select your Gender</b>";
            }else{
                echo "<b>Selected Gender Is ". $_POST['gender']."</b>";
            }
        }
    ?>
    <form action="index.php" method="post">
        <label>Select Gender</label><br /><br />
        <input type="radio" name="gender" value="Male">Male<br />
        <input type="radio" name="gender" value="Female">Female<br />
        <input type="radio" name="gender" value="Other">Other<br />

        <br />
        <br />
        <input type="submit"  name="submit" value="Confirm">
    </form> -->


    <!-- Check -->


    <?php
        if(isset($_POST['submit'])){
            $movies = [];
            if(isset($_POST['movies'])){
                $movies = $_POST['movies'];
            }

            if(count($movies) != 0){
                echo 'Selected Movies Are : <br>';
            }

            foreach ($movies as $movie) {
                echo $movie . "<br>";
            }
        }    
    ?>

    <form action="index.php" method="post">
        <label>Select Movies</label><br /><br />
        <input type="checkbox" name="movies[]" value="FF">FF<br />
        <input type="checkbox" name="movies[]" value="FF5">FF5<br />
        <input type="checkbox" name="movies[]" value="F1">F1<br />

        <br />
        <br />
        <input type="submit"  name="submit" value="Confirm">
    </form>

    <br />
    <br />
    <br />

    <a href="./index.php">Home</a>


</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1><?php echo"Hello"?></h1>
    <?php echo "<h2>Hello H2</h2>"?>
</body>
</html> -->


<?php

// $name = "Ansh";
// $age = 21;
// $marks = 88.6;
// $isFail = false;

// echo "My name is : ". $name . ".";
// echo "My name is :  $name.";
// echo "<br>Fail :  $isFail.<br>"; //false never shown, true = 1
// var_dump($name);
// var_dump($marks);

// $name = "ansh patel";

// echo strlen($name);

// echo str_replace("h","H",$name);
// echo str_ireplace("H","H",$name);

// echo ucwords($name);
// echo ucfirst($name);
// echo strtoupper($name);

// $a = 10;

// var_dump(is_int($a));
// var_dump(is_float($a));
// var_dump(is_numeric($a));


// echo pi() . "<br>";
// echo abs(-10). "<br>";
// echo sqrt(25). "<br>";
// echo round(3.9). "<br>";
// echo rand() . "<br>";
// echo rand(1, 100) . "<br>";


// -----------------

// condition

// if(1){}else if(1){}else{}

// switch ($variable) {
//     case 'value':
//         # code...
//         break;
    
//     default:
//         # code...
//         break;
// }


// -----------------

// for

// for($i = 0; $i < 5; $i++){
//     echo rand() . "<br>";
// }

// -----------------

// while

// $i = 1;
// while($i <= 10){

//     $i++;
// }

// -----------------

// Arrays

// $names =  array("Ansh", "Aarsh", "MrKnight");

// $names[0] = "ANSH";

// array_push( $names,"MD", "GN");
//$names[3] = "MD";

// array_pop($names);
// array_shift($names);

// $rName = array_reverse($names);

// echo count($names) . "<br>";

// foreach($names as $name){

//     echo $name . "<br>";
// }


// -----------------


// associate array - key-value

// $employees = array(
//     "A" => "DBA", 
//     "K" => "WD", 
//     "D" =>"UIUX",
//     "QA" // [0]
// );

// echo "<pre>";
// print_r($employees);

// print_r(array_keys($employees));

// echo "<br>";

// print_r(array_values($employees));

// $employees = array_flip($employees);


// print_r($employees);
// print_r(array_reverse($employees));


// -----------------

// Multi D Arrays

// $students = array(
//     array("Name" => "Ansh", "Class" => "B1"),
//     array("Name" => "Anshu", "Class" => "B2"),
// );


// foreach ($students as $student) {
//     foreach ($student as $key => $value) {
//         echo $key . "=>" . $value;
//         echo "<br>";
//     }
// }


// -----------------


// UDF

// Don't receve
// myFunc(10,20);
// function myFunc(){}


// function myFunc(){
//     echo "My Function<br>";
//     // return "My Function<br>";
// }


// -----------------

# isset()  => Set (Value assigned + Declared / "" ok) + not null
# empty()  => null + falsy

// -----------------

// $a;

// echo isset($a);
// echo empty($a);


?>


<!-- // ----------------- -->


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $i = 1;
        while ($i <= 10) {
            // echo    "<h1>$i</h1><br>";
    ?>
            <h1><?php echo $i; ?></h1><br>
    <?php
            $i++;
        }
    ?>

</body>
</html> -->


<!-- <?php
// -----------------


// associate array - key-value

$employees = array(
    "A" => "DBA", 
    "K" => "WD", 
    "D" =>"UIUX",
    "QA" // [0]
);
// echo "<pre>";
// print_r($employees);

foreach ($employees as $key => $value) {
?>
<p><b><?php echo ucwords($key) ?></b> : <?php echo $value?></p>


<?php }?> -->