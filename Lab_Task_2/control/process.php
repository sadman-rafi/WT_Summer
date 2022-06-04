<?php
$name=$_REQUEST["fname"];
$name2=$_REQUEST["fname2"];
if(empty($name)){
    echo"<br>Your first name should not be empty";
}
else if(strlen($name)<4)
{
    echo "<br>First name should be more than 4 characters";
}
else{
    echo"<br>Your first name is ".$name;
}
if(strlen($name2)<4)
{
    echo"<br>Your first name should not be empty";
}
if(empty($name2)){
    echo"<br>Your last name should not be empty";
}
else if(strlen($name2)<4)
{
    echo "<br>Last name should be more than 4 characters";
}
else{
    echo"<br>Your Last name is ".$_REQUEST["fname2"];;
}

if(isset($_REQUEST["prog"]))
{
    $program=$_REQUEST["prog"];
    echo "<br>Your designation is ".$program;
}
else{
    echo "<br>You must select designation";
}

if(isset($_REQUEST["lang1"]) || isset($_REQUEST["lang2"]) || isset($_REQUEST["lang3"]))
{
    if(isset($_REQUEST["lang1"]) && isset($_REQUEST["lang2"]) && isset($_REQUEST["lang3"]) ){
        echo "<br> You have selected ".$_REQUEST["lang1"]." and ".$_REQUEST["lang2"]." and ".$_REQUEST["lang3"];
    }
    else if(isset($_REQUEST["lang1"]) && isset($_REQUEST["lang2"])){
        echo "<br> You have selected ".$_REQUEST["lang1"]." and ".$_REQUEST["lang2"];
    }
    else if(isset($_REQUEST["lang2"]) && isset($_REQUEST["lang3"])){
        echo "<br> You have selected ".$_REQUEST["lang2"]." and ".$_REQUEST["lang3"];
    }
    else if(isset($_REQUEST["lang1"]) && isset($_REQUEST["lang3"])){
        echo "<br> You have selected ".$_REQUEST["lang1"]." and ".$_REQUEST["lang3"];
    }
    else if(isset($_REQUEST["lang1"])){
        echo "<br> You have selected ".$_REQUEST["lang1"];
    }
    else if(isset($_REQUEST["pref2"])){
        echo "<br> You have selected ".$_REQUEST["lang2"];
    }
    else{
        echo "<br> You have selected ".$_REQUEST["lang3"];
    }
}
else{
    echo "<br>You must select preferance";
}

if(empty($_REQUEST["male"])){
    echo "<br>Email should not be empty";
}
else{
    echo "<br>Your email is :".$_REQUEST["male"];
}

if(is_numeric($_REQUEST["password"])<2){
    echo "<br>Your password is valid";
}
else{
    echo "<br>Your password must contain 1 numerical value";
}


?>