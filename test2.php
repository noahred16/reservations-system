<?php 
//echo $_POST['param1'].'<br>';
//echo $_POST['param2'].'<br>';
//echo "test2:<br>";

$query_date = $_POST['param1'];


require 'includes/dbh.php';

//echo "Reservaitions:".'<br>';

if($_POST['param2'] == '1-8'){
    // 1-8
    $query="SELECT * FROM reservations WHERE date='$query_date' AND (court='1' OR court='2' OR court='3' OR court='4' OR court='5' OR court='6' OR court='7' OR court='8')";
}
else{
    // 9-16
    $query="SELECT * FROM reservations WHERE date='$query_date' AND (court='9' OR court='10' OR court='11' OR court='12' OR court='13' OR court='14' OR court='15' OR court='16')";
}


$res_08_00 = array(0,0,0,0,0,0,0,0);   
$res_08_30 = array(0,0,0,0,0,0,0,0);  
$res_09_00 = array(0,0,0,0,0,0,0,0); 
$res_09_30 = array(0,0,0,0,0,0,0,0); 
$res_10_00 = array(0,0,0,0,0,0,0,0); 
$res_10_30 = array(0,0,0,0,0,0,0,0); 
$res_11_00 = array(0,0,0,0,0,0,0,0); 
$res_11_30 = array(0,0,0,0,0,0,0,0); 
$res_12_00 = array(0,0,0,0,0,0,0,0); 
$res_12_30 = array(0,0,0,0,0,0,0,0); 
$res_13_00 = array(0,0,0,0,0,0,0,0); 
$res_13_30 = array(0,0,0,0,0,0,0,0); 
$res_14_00 = array(0,0,0,0,0,0,0,0); 
$res_14_30 = array(0,0,0,0,0,0,0,0); 
$res_15_00 = array(0,0,0,0,0,0,0,0); 
$res_15_30 = array(0,0,0,0,0,0,0,0); 
$res_16_00 = array(0,0,0,0,0,0,0,0); 
$res_16_30 = array(0,0,0,0,0,0,0,0); 
$res_17_00 = array(0,0,0,0,0,0,0,0); 
$res_17_30 = array(0,0,0,0,0,0,0,0); 
$res_18_00 = array(0,0,0,0,0,0,0,0); 
$res_18_30 = array(0,0,0,0,0,0,0,0); 
$res_18_30 = array(0,0,0,0,0,0,0,0); 



if($_POST['param2']=='1-8'){
    $court1 = "1";
    $court2 = "2";
    $court3 = "3";
    $court4 = "4";
    $court5 = "5";
    $court6 = "6";
    $court7 = "7";
    $court8 = "8";
}
else{
    $court1 = "9";
    $court2 = "10";
    $court3 = "11";
    $court4 = "12";
    $court5 = "13";
    $court6 = "14";
    $court7 = "15";
    $court8 = "16";
}


$result = mysqli_query($conn, $query);
while($rows=mysqli_fetch_assoc($result)){
    if($rows['start_time']=='08:00:00'){
        if($rows['court']==$court1){
            if($rows['duration']=='01:00:00'){ $res_08_00[0] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_08_00[0] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_08_00[0] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_08_00[0] = 4; }
        }
        else if($rows['court']==$court2){
            if($rows['duration']=='01:00:00'){ $res_08_00[1] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_08_00[1] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_08_00[1] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_08_00[1] = 4; }
        }
        else if($rows['court']==$court3){
            if($rows['duration']=='01:00:00'){ $res_08_00[2] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_08_00[2] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_08_00[2] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_08_00[2] = 4; }
        }
        else if($rows['court']==$court4){
            if($rows['duration']=='01:00:00'){ $res_08_00[3] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_08_00[3] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_08_00[3] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_08_00[3] = 4; }
        }
        else if($rows['court']==$court5){
            if($rows['duration']=='01:00:00'){ $res_08_00[4] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_08_00[4] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_08_00[4] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_08_00[4] = 4; }
        }
        else if($rows['court']==$court6){
            if($rows['duration']=='01:00:00'){ $res_08_00[5] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_08_00[5] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_08_00[5] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_08_00[5] = 4; }
        }
        else if($rows['court']==$court7){
            if($rows['duration']=='01:00:00'){ $res_08_00[6] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_08_00[6] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_08_00[6] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_08_00[6] = 4; }
        }
        else if($rows['court']==$court8){
            if($rows['duration']=='01:00:00'){ $res_08_00[7] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_08_00[7] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_08_00[7] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_08_00[7] = 4; }
        }
    }
    else if($rows['start_time']=='08:30:00'){
        if($rows['court']==$court1){
            if($rows['duration']=='01:00:00'){ $res_08_30[0] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_08_30[0] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_08_30[0] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_08_30[0] = 4; }
        }
        else if($rows['court']==$court2){
            if($rows['duration']=='01:00:00'){ $res_08_30[1] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_08_30[1] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_08_30[1] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_08_30[1] = 4; }
        }
        else if($rows['court']==$court3){
            if($rows['duration']=='01:00:00'){ $res_08_30[2] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_08_30[2] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_08_30[2] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_08_30[2] = 4; }
        }
        else if($rows['court']==$court4){
            if($rows['duration']=='01:00:00'){ $res_08_30[3] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_08_30[3] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_08_30[3] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_08_30[3] = 4; }
        }
        else if($rows['court']==$court5){
            if($rows['duration']=='01:00:00'){ $res_08_30[4] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_08_30[4] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_08_30[4] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_08_30[4] = 4; }
        }
        else if($rows['court']==$court6){
            if($rows['duration']=='01:00:00'){ $res_08_30[5] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_08_30[5] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_08_30[5] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_08_30[5] = 4; }
        }
        else if($rows['court']==$court7){
            if($rows['duration']=='01:00:00'){ $res_08_30[6] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_08_30[6] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_08_30[6] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_08_30[6] = 4; }
        }
        else if($rows['court']==$court8){
            if($rows['duration']=='01:00:00'){ $res_08_30[7] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_08_30[7] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_08_30[7] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_08_30[7] = 4; }
        }
    }
    else if($rows['start_time']=='09:00:00'){
        if($rows['court']==$court1){
            if($rows['duration']=='01:00:00'){ $res_09_00[0] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_09_00[0] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_09_00[0] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_09_00[0] = 4; }
        }
        else if($rows['court']==$court2){
            if($rows['duration']=='01:00:00'){ $res_09_00[1] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_09_00[1] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_09_00[1] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_09_00[1] = 4; }
        }
        else if($rows['court']==$court3){
            if($rows['duration']=='01:00:00'){ $res_09_00[2] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_09_00[2] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_09_00[2] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_09_00[2] = 4; }
        }
        else if($rows['court']==$court4){
            if($rows['duration']=='01:00:00'){ $res_09_00[3] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_09_00[3] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_09_00[3] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_09_00[3] = 4; }
        }
        else if($rows['court']==$court5){
            if($rows['duration']=='01:00:00'){ $res_09_00[4] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_09_00[4] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_09_00[4] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_09_00[4] = 4; }
        }
        else if($rows['court']==$court6){
            if($rows['duration']=='01:00:00'){ $res_09_00[5] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_09_00[5] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_09_00[5] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_09_00[5] = 4; }
        }
        else if($rows['court']==$court7){
            if($rows['duration']=='01:00:00'){ $res_09_00[6] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_09_00[6] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_09_00[6] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_09_00[6] = 4; }
        }
        else if($rows['court']==$court8){
            if($rows['duration']=='01:00:00'){ $res_09_00[7] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_09_00[7] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_09_00[7] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_09_00[7] = 4; }
        }
    }
    else if($rows['start_time']=='09:30:00'){
        if($rows['court']==$court1){
            if($rows['duration']=='01:00:00'){ $res_09_30[0] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_09_30[0] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_09_30[0] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_09_30[0] = 4; }
        }
        else if($rows['court']==$court2){
            if($rows['duration']=='01:00:00'){ $res_09_30[1] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_09_30[1] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_09_30[1] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_09_30[1] = 4; }
        }
        else if($rows['court']==$court3){
            if($rows['duration']=='01:00:00'){ $res_09_30[2] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_09_30[2] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_09_30[2] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_09_30[2] = 4; }
        }
        else if($rows['court']==$court4){
            if($rows['duration']=='01:00:00'){ $res_09_30[3] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_09_30[3] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_09_30[3] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_09_30[3] = 4; }
        }
        else if($rows['court']==$court5){
            if($rows['duration']=='01:00:00'){ $res_09_30[4] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_09_30[4] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_09_30[4] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_09_30[4] = 4; }
        }
        else if($rows['court']==$court6){
            if($rows['duration']=='01:00:00'){ $res_09_30[5] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_09_30[5] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_09_30[5] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_09_30[5] = 4; }
        }
        else if($rows['court']==$court7){
            if($rows['duration']=='01:00:00'){ $res_09_30[6] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_09_30[6] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_09_30[6] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_09_30[6] = 4; }
        }
        else if($rows['court']==$court8){
            if($rows['duration']=='01:00:00'){ $res_09_30[7] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_09_30[7] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_09_30[7] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_09_30[7] = 4; }
        }
    }
    else if($rows['start_time']=='10:00:00'){
        if($rows['court']==$court1){
            if($rows['duration']=='01:00:00'){ $res_10_00[0] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_10_00[0] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_10_00[0] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_10_00[0] = 4; }
        }
        else if($rows['court']==$court2){
            if($rows['duration']=='01:00:00'){ $res_10_00[1] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_10_00[1] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_10_00[1] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_10_00[1] = 4; }
        }
        else if($rows['court']==$court3){
            if($rows['duration']=='01:00:00'){ $res_10_00[2] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_10_00[2] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_10_00[2] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_10_00[2] = 4; }
        }
        else if($rows['court']==$court4){
            if($rows['duration']=='01:00:00'){ $res_10_00[3] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_10_00[3] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_10_00[3] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_10_00[3] = 4; }
        }
        else if($rows['court']==$court5){
            if($rows['duration']=='01:00:00'){ $res_10_00[4] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_10_00[4] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_10_00[4] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_10_00[4] = 4; }
        }
        else if($rows['court']==$court6){
            if($rows['duration']=='01:00:00'){ $res_10_00[5] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_10_00[5] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_10_00[5] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_10_00[5] = 4; }
        }
        else if($rows['court']==$court7){
            if($rows['duration']=='01:00:00'){ $res_10_00[6] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_10_00[6] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_10_00[6] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_10_00[6] = 4; }
        }
        else if($rows['court']==$court8){
            if($rows['duration']=='01:00:00'){ $res_10_00[7] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_10_00[7] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_10_00[7] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_10_00[7] = 4; }
        }
    }
    else if($rows['start_time']=='10:30:00'){
        if($rows['court']==$court1){
            if($rows['duration']=='01:00:00'){ $res_10_30[0] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_10_30[0] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_10_30[0] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_10_30[0] = 4; }
        }
        else if($rows['court']==$court2){
            if($rows['duration']=='01:00:00'){ $res_10_30[1] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_10_30[1] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_10_30[1] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_10_30[1] = 4; }
        }
        else if($rows['court']==$court3){
            if($rows['duration']=='01:00:00'){ $res_10_30[2] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_10_30[2] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_10_30[2] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_10_30[2] = 4; }
        }
        else if($rows['court']==$court4){
            if($rows['duration']=='01:00:00'){ $res_10_30[3] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_10_30[3] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_10_30[3] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_10_30[3] = 4; }
        }
        else if($rows['court']==$court5){
            if($rows['duration']=='01:00:00'){ $res_10_30[4] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_10_30[4] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_10_30[4] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_10_30[4] = 4; }
        }
        else if($rows['court']==$court6){
            if($rows['duration']=='01:00:00'){ $res_10_30[5] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_10_30[5] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_10_30[5] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_10_30[5] = 4; }
        }
        else if($rows['court']==$court7){
            if($rows['duration']=='01:00:00'){ $res_10_30[6] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_10_30[6] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_10_30[6] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_10_30[6] = 4; }
        }
        else if($rows['court']==$court8){
            if($rows['duration']=='01:00:00'){ $res_10_30[7] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_10_30[7] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_10_30[7] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_10_30[7] = 4; }
        }
    }
    else if($rows['start_time']=='11:00:00'){
        if($rows['court']==$court1){
            if($rows['duration']=='01:00:00'){ $res_11_00[0] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_11_00[0] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_11_00[0] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_11_00[0] = 4; }
        }
        else if($rows['court']==$court2){
            if($rows['duration']=='01:00:00'){ $res_11_00[1] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_11_00[1] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_11_00[1] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_11_00[1] = 4; }
        }
        else if($rows['court']==$court3){
            if($rows['duration']=='01:00:00'){ $res_11_00[2] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_11_00[2] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_11_00[2] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_11_00[2] = 4; }
        }
        else if($rows['court']==$court4){
            if($rows['duration']=='01:00:00'){ $res_11_00[3] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_11_00[3] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_11_00[3] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_11_00[3] = 4; }
        }
        else if($rows['court']==$court5){
            if($rows['duration']=='01:00:00'){ $res_11_00[4] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_11_00[4] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_11_00[4] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_11_00[4] = 4; }
        }
        else if($rows['court']==$court6){
            if($rows['duration']=='01:00:00'){ $res_11_00[5] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_11_00[5] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_11_00[5] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_11_00[5] = 4; }
        }
        else if($rows['court']==$court7){
            if($rows['duration']=='01:00:00'){ $res_11_00[6] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_11_00[6] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_11_00[6] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_11_00[6] = 4; }
        }
        else if($rows['court']==$court8){
            if($rows['duration']=='01:00:00'){ $res_11_00[7] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_11_00[7] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_11_00[7] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_11_00[7] = 4; }
        }
    }
    else if($rows['start_time']=='11:30:00'){
        if($rows['court']==$court1){
            if($rows['duration']=='01:00:00'){ $res_11_30[0] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_11_30[0] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_11_30[0] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_11_30[0] = 4; }
        }
        else if($rows['court']==$court2){
            if($rows['duration']=='01:00:00'){ $res_11_30[1] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_11_30[1] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_11_30[1] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_11_30[1] = 4; }
        }
        else if($rows['court']==$court3){
            if($rows['duration']=='01:00:00'){ $res_11_30[2] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_11_30[2] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_11_30[2] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_11_30[2] = 4; }
        }
        else if($rows['court']==$court4){
            if($rows['duration']=='01:00:00'){ $res_11_30[3] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_11_30[3] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_11_30[3] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_11_30[3] = 4; }
        }
        else if($rows['court']==$court5){
            if($rows['duration']=='01:00:00'){ $res_11_30[4] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_11_30[4] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_11_30[4] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_11_30[4] = 4; }
        }
        else if($rows['court']==$court6){
            if($rows['duration']=='01:00:00'){ $res_11_30[5] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_11_30[5] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_11_30[5] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_11_30[5] = 4; }
        }
        else if($rows['court']==$court7){
            if($rows['duration']=='01:00:00'){ $res_11_30[6] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_11_30[6] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_11_30[6] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_11_30[6] = 4; }
        }
        else if($rows['court']==$court8){
            if($rows['duration']=='01:00:00'){ $res_11_30[7] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_11_30[7] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_11_30[7] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_11_30[7] = 4; }
        }
    }
    else if($rows['start_time']=='12:00:00'){
        if($rows['court']==$court1){
            if($rows['duration']=='01:00:00'){ $res_12_00[0] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_12_00[0] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_12_00[0] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_12_00[0] = 4; }
        }
        else if($rows['court']==$court2){
            if($rows['duration']=='01:00:00'){ $res_12_00[1] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_12_00[1] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_12_00[1] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_12_00[1] = 4; }
        }
        else if($rows['court']==$court3){
            if($rows['duration']=='01:00:00'){ $res_12_00[2] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_12_00[2] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_12_00[2] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_12_00[2] = 4; }
        }
        else if($rows['court']==$court4){
            if($rows['duration']=='01:00:00'){ $res_12_00[3] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_12_00[3] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_12_00[3] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_12_00[3] = 4; }
        }
        else if($rows['court']==$court5){
            if($rows['duration']=='01:00:00'){ $res_12_00[4] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_12_00[4] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_12_00[4] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_12_00[4] = 4; }
        }
        else if($rows['court']==$court6){
            if($rows['duration']=='01:00:00'){ $res_12_00[5] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_12_00[5] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_12_00[5] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_12_00[5] = 4; }
        }
        else if($rows['court']==$court7){
            if($rows['duration']=='01:00:00'){ $res_12_00[6] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_12_00[6] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_12_00[6] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_12_00[6] = 4; }
        }
        else if($rows['court']==$court8){
            if($rows['duration']=='01:00:00'){ $res_12_00[7] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_12_00[7] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_12_00[7] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_12_00[7] = 4; }
        }
    }
    else if($rows['start_time']=='12:30:00'){
        if($rows['court']==$court1){
            if($rows['duration']=='01:00:00'){ $res_12_30[0] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_12_30[0] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_12_30[0] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_12_30[0] = 4; }
        }
        else if($rows['court']==$court2){
            if($rows['duration']=='01:00:00'){ $res_12_30[1] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_12_30[1] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_12_30[1] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_12_30[1] = 4; }
        }
        else if($rows['court']==$court3){
            if($rows['duration']=='01:00:00'){ $res_12_30[2] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_12_30[2] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_12_30[2] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_12_30[2] = 4; }
        }
        else if($rows['court']==$court4){
            if($rows['duration']=='01:00:00'){ $res_12_30[3] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_12_30[3] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_12_30[3] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_12_30[3] = 4; }
        }
        else if($rows['court']==$court5){
            if($rows['duration']=='01:00:00'){ $res_12_30[4] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_12_30[4] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_12_30[4] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_12_30[4] = 4; }
        }
        else if($rows['court']==$court6){
            if($rows['duration']=='01:00:00'){ $res_12_30[5] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_12_30[5] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_12_30[5] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_12_30[5] = 4; }
        }
        else if($rows['court']==$court7){
            if($rows['duration']=='01:00:00'){ $res_12_30[6] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_12_30[6] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_12_30[6] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_12_30[6] = 4; }
        }
        else if($rows['court']==$court8){
            if($rows['duration']=='01:00:00'){ $res_12_30[7] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_12_30[7] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_12_30[7] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_12_30[7] = 4; }
        }
    }
    else if($rows['start_time']=='13:00:00'){
        if($rows['court']==$court1){
            if($rows['duration']=='01:00:00'){ $res_13_00[0] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_13_00[0] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_13_00[0] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_13_00[0] = 4; }
        }
        else if($rows['court']==$court2){
            if($rows['duration']=='01:00:00'){ $res_13_00[1] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_13_00[1] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_13_00[1] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_13_00[1] = 4; }
        }
        else if($rows['court']==$court3){
            if($rows['duration']=='01:00:00'){ $res_13_00[2] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_13_00[2] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_13_00[2] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_13_00[2] = 4; }
        }
        else if($rows['court']==$court4){
            if($rows['duration']=='01:00:00'){ $res_13_00[3] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_13_00[3] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_13_00[3] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_13_00[3] = 4; }
        }
        else if($rows['court']==$court5){
            if($rows['duration']=='01:00:00'){ $res_13_00[4] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_13_00[4] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_13_00[4] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_13_00[4] = 4; }
        }
        else if($rows['court']==$court6){
            if($rows['duration']=='01:00:00'){ $res_13_00[5] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_13_00[5] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_13_00[5] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_13_00[5] = 4; }
        }
        else if($rows['court']==$court7){
            if($rows['duration']=='01:00:00'){ $res_13_00[6] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_13_00[6] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_13_00[6] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_13_00[6] = 4; }
        }
        else if($rows['court']==$court8){
            if($rows['duration']=='01:00:00'){ $res_13_00[7] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_13_00[7] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_13_00[7] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_13_00[7] = 4; }
        }
    }
    else if($rows['start_time']=='13:30:00'){
        if($rows['court']==$court1){
            if($rows['duration']=='01:00:00'){ $res_13_30[0] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_13_30[0] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_13_30[0] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_13_30[0] = 4; }
        }
        else if($rows['court']==$court2){
            if($rows['duration']=='01:00:00'){ $res_13_30[1] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_13_30[1] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_13_30[1] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_13_30[1] = 4; }
        }
        else if($rows['court']==$court3){
            if($rows['duration']=='01:00:00'){ $res_13_30[2] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_13_30[2] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_13_30[2] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_13_30[2] = 4; }
        }
        else if($rows['court']==$court4){
            if($rows['duration']=='01:00:00'){ $res_13_30[3] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_13_30[3] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_13_30[3] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_13_30[3] = 4; }
        }
        else if($rows['court']==$court5){
            if($rows['duration']=='01:00:00'){ $res_13_30[4] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_13_30[4] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_13_30[4] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_13_30[4] = 4; }
        }
        else if($rows['court']==$court6){
            if($rows['duration']=='01:00:00'){ $res_13_30[5] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_13_30[5] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_13_30[5] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_13_30[5] = 4; }
        }
        else if($rows['court']==$court7){
            if($rows['duration']=='01:00:00'){ $res_13_30[6] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_13_30[6] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_13_30[6] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_13_30[6] = 4; }
        }
        else if($rows['court']==$court8){
            if($rows['duration']=='01:00:00'){ $res_13_30[7] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_13_30[7] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_13_30[7] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_13_30[7] = 4; }
        }
    }
    else if($rows['start_time']=='14:00:00'){
        if($rows['court']==$court1){
            if($rows['duration']=='01:00:00'){ $res_14_00[0] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_14_00[0] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_14_00[0] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_14_00[0] = 4; }
        }
        else if($rows['court']==$court2){
            if($rows['duration']=='01:00:00'){ $res_14_00[1] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_14_00[1] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_14_00[1] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_14_00[1] = 4; }
        }
        else if($rows['court']==$court3){
            if($rows['duration']=='01:00:00'){ $res_14_00[2] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_14_00[2] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_14_00[2] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_14_00[2] = 4; }
        }
        else if($rows['court']==$court4){
            if($rows['duration']=='01:00:00'){ $res_14_00[3] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_14_00[3] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_14_00[3] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_14_00[3] = 4; }
        }
        else if($rows['court']==$court5){
            if($rows['duration']=='01:00:00'){ $res_14_00[4] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_14_00[4] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_14_00[4] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_14_00[4] = 4; }
        }
        else if($rows['court']==$court6){
            if($rows['duration']=='01:00:00'){ $res_14_00[5] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_14_00[5] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_14_00[5] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_14_00[5] = 4; }
        }
        else if($rows['court']==$court7){
            if($rows['duration']=='01:00:00'){ $res_14_00[6] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_14_00[6] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_14_00[6] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_14_00[6] = 4; }
        }
        else if($rows['court']==$court8){
            if($rows['duration']=='01:00:00'){ $res_14_00[7] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_14_00[7] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_14_00[7] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_14_00[7] = 4; }
        }
    }
    else if($rows['start_time']=='14:30:00'){
        if($rows['court']==$court1){
            if($rows['duration']=='01:00:00'){ $res_14_30[0] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_14_30[0] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_14_30[0] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_14_30[0] = 4; }
        }
        else if($rows['court']==$court2){
            if($rows['duration']=='01:00:00'){ $res_14_30[1] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_14_30[1] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_14_30[1] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_14_30[1] = 4; }
        }
        else if($rows['court']==$court3){
            if($rows['duration']=='01:00:00'){ $res_14_30[2] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_14_30[2] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_14_30[2] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_14_30[2] = 4; }
        }
        else if($rows['court']==$court4){
            if($rows['duration']=='01:00:00'){ $res_14_30[3] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_14_30[3] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_14_30[3] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_14_30[3] = 4; }
        }
        else if($rows['court']==$court5){
            if($rows['duration']=='01:00:00'){ $res_14_30[4] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_14_30[4] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_14_30[4] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_14_30[4] = 4; }
        }
        else if($rows['court']==$court6){
            if($rows['duration']=='01:00:00'){ $res_14_30[5] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_14_30[5] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_14_30[5] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_14_30[5] = 4; }
        }
        else if($rows['court']==$court7){
            if($rows['duration']=='01:00:00'){ $res_14_30[6] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_14_30[6] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_14_30[6] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_14_30[6] = 4; }
        }
        else if($rows['court']==$court8){
            if($rows['duration']=='01:00:00'){ $res_14_30[7] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_14_30[7] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_14_30[7] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_14_30[7] = 4; }
        }
    }
    else if($rows['start_time']=='15:00:00'){
        if($rows['court']==$court1){
            if($rows['duration']=='01:00:00'){ $res_15_00[0] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_15_00[0] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_15_00[0] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_15_00[0] = 4; }
        }
        else if($rows['court']==$court2){
            if($rows['duration']=='01:00:00'){ $res_15_00[1] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_15_00[1] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_15_00[1] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_15_00[1] = 4; }
        }
        else if($rows['court']==$court3){
            if($rows['duration']=='01:00:00'){ $res_15_00[2] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_15_00[2] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_15_00[2] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_15_00[2] = 4; }
        }
        else if($rows['court']==$court4){
            if($rows['duration']=='01:00:00'){ $res_15_00[3] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_15_00[3] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_15_00[3] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_15_00[3] = 4; }
        }
        else if($rows['court']==$court5){
            if($rows['duration']=='01:00:00'){ $res_15_00[4] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_15_00[4] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_15_00[4] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_15_00[4] = 4; }
        }
        else if($rows['court']==$court6){
            if($rows['duration']=='01:00:00'){ $res_15_00[5] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_15_00[5] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_15_00[5] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_15_00[5] = 4; }
        }
        else if($rows['court']==$court7){
            if($rows['duration']=='01:00:00'){ $res_15_00[6] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_15_00[6] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_15_00[6] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_15_00[6] = 4; }
        }
        else if($rows['court']==$court8){
            if($rows['duration']=='01:00:00'){ $res_15_00[7] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_15_00[7] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_15_00[7] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_15_00[7] = 4; }
        }
    }
    else if($rows['start_time']=='15:30:00'){
        if($rows['court']==$court1){
            if($rows['duration']=='01:00:00'){ $res_15_30[0] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_15_30[0] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_15_30[0] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_15_30[0] = 4; }
        }
        else if($rows['court']==$court2){
            if($rows['duration']=='01:00:00'){ $res_15_30[1] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_15_30[1] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_15_30[1] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_15_30[1] = 4; }
        }
        else if($rows['court']==$court3){
            if($rows['duration']=='01:00:00'){ $res_15_30[2] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_15_30[2] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_15_30[2] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_15_30[2] = 4; }
        }
        else if($rows['court']==$court4){
            if($rows['duration']=='01:00:00'){ $res_15_30[3] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_15_30[3] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_15_30[3] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_15_30[3] = 4; }
        }
        else if($rows['court']==$court5){
            if($rows['duration']=='01:00:00'){ $res_15_30[4] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_15_30[4] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_15_30[4] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_15_30[4] = 4; }
        }
        else if($rows['court']==$court6){
            if($rows['duration']=='01:00:00'){ $res_15_30[5] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_15_30[5] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_15_30[5] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_15_30[5] = 4; }
        }
        else if($rows['court']==$court7){
            if($rows['duration']=='01:00:00'){ $res_15_30[6] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_15_30[6] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_15_30[6] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_15_30[6] = 4; }
        }
        else if($rows['court']==$court8){
            if($rows['duration']=='01:00:00'){ $res_15_30[7] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_15_30[7] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_15_30[7] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_15_30[7] = 4; }
        }
    }
    else if($rows['start_time']=='16:00:00'){
        if($rows['court']==$court1){
            if($rows['duration']=='01:00:00'){ $res_16_00[0] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_16_00[0] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_16_00[0] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_16_00[0] = 4; }
        }
        else if($rows['court']==$court2){
            if($rows['duration']=='01:00:00'){ $res_16_00[1] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_16_00[1] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_16_00[1] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_16_00[1] = 4; }
        }
        else if($rows['court']==$court3){
            if($rows['duration']=='01:00:00'){ $res_16_00[2] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_16_00[2] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_16_00[2] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_16_00[2] = 4; }
        }
        else if($rows['court']==$court4){
            if($rows['duration']=='01:00:00'){ $res_16_00[3] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_16_00[3] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_16_00[3] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_16_00[3] = 4; }
        }
        else if($rows['court']==$court5){
            if($rows['duration']=='01:00:00'){ $res_16_00[4] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_16_00[4] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_16_00[4] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_16_00[4] = 4; }
        }
        else if($rows['court']==$court6){
            if($rows['duration']=='01:00:00'){ $res_16_00[5] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_16_00[5] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_16_00[5] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_16_00[5] = 4; }
        }
        else if($rows['court']==$court7){
            if($rows['duration']=='01:00:00'){ $res_16_00[6] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_16_00[6] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_16_00[6] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_16_00[6] = 4; }
        }
        else if($rows['court']==$court8){
            if($rows['duration']=='01:00:00'){ $res_16_00[7] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_16_00[7] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_16_00[7] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_16_00[7] = 4; }
        }
    }
    else if($rows['start_time']=='16:30:00'){
        if($rows['court']==$court1){
            if($rows['duration']=='01:00:00'){ $res_16_30[0] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_16_30[0] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_16_30[0] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_16_30[0] = 4; }
        }
        else if($rows['court']==$court2){
            if($rows['duration']=='01:00:00'){ $res_16_30[1] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_16_30[1] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_16_30[1] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_16_30[1] = 4; }
        }
        else if($rows['court']==$court3){
            if($rows['duration']=='01:00:00'){ $res_16_30[2] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_16_30[2] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_16_30[2] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_16_30[2] = 4; }
        }
        else if($rows['court']==$court4){
            if($rows['duration']=='01:00:00'){ $res_16_30[3] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_16_30[3] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_16_30[3] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_16_30[3] = 4; }
        }
        else if($rows['court']==$court5){
            if($rows['duration']=='01:00:00'){ $res_16_30[4] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_16_30[4] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_16_30[4] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_16_30[4] = 4; }
        }
        else if($rows['court']==$court6){
            if($rows['duration']=='01:00:00'){ $res_16_30[5] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_16_30[5] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_16_30[5] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_16_30[5] = 4; }
        }
        else if($rows['court']==$court7){
            if($rows['duration']=='01:00:00'){ $res_16_30[6] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_16_30[6] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_16_30[6] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_16_30[6] = 4; }
        }
        else if($rows['court']==$court8){
            if($rows['duration']=='01:00:00'){ $res_16_30[7] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_16_30[7] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_16_30[7] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_16_30[7] = 4; }
        }
    }
    else if($rows['start_time']=='17:00:00'){
        if($rows['court']==$court1){
            if($rows['duration']=='01:00:00'){ $res_17_00[0] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_17_00[0] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_17_00[0] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_17_00[0] = 4; }
        }
        else if($rows['court']==$court2){
            if($rows['duration']=='01:00:00'){ $res_17_00[1] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_17_00[1] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_17_00[1] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_17_00[1] = 4; }
        }
        else if($rows['court']==$court3){
            if($rows['duration']=='01:00:00'){ $res_17_00[2] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_17_00[2] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_17_00[2] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_17_00[2] = 4; }
        }
        else if($rows['court']==$court4){
            if($rows['duration']=='01:00:00'){ $res_17_00[3] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_17_00[3] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_17_00[3] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_17_00[3] = 4; }
        }
        else if($rows['court']==$court5){
            if($rows['duration']=='01:00:00'){ $res_17_00[4] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_17_00[4] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_17_00[4] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_17_00[4] = 4; }
        }
        else if($rows['court']==$court6){
            if($rows['duration']=='01:00:00'){ $res_17_00[5] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_17_00[5] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_17_00[5] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_17_00[5] = 4; }
        }
        else if($rows['court']==$court7){
            if($rows['duration']=='01:00:00'){ $res_17_00[6] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_17_00[6] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_17_00[6] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_17_00[6] = 4; }
        }
        else if($rows['court']==$court8){
            if($rows['duration']=='01:00:00'){ $res_17_00[7] = 1; }
            else if($rows['duration']=='01:30:00'){ $res_17_00[7] = 2; }
            else if($rows['duration']=='02:00:00'){ $res_17_00[7] = 3; }
            else if($rows['duration']=='02:30:00'){ $res_17_00[7] = 4; }
        }
    }





    echo $rows['court'].', '.$rows['start_time'].', '.$rows['duration'].'<br>';
    

}
require 'options/schedule.php';



?>

<p>HERE I AM TEST2!!!</p>


