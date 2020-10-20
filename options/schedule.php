<?php
	//require '../includes/dbh.php';
	// <button class="reservation2">Noah</button>
?>
<main>
    <br>

<style>

.modal {
    /*display: none; 
    position: fixed; 
    z-index: 1;*/
    padding-top: 100px; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4); 
  }
  
  /* Modal Content */
  .modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
  }
  
  /* The Close Button */
  .close2 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }
  
  .close2:hover,
  .close2:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }
  
  table {
      border: 2px solid black;
      width: 100%;
      max-width: 800px;
      border-spacing: 0px;
      border-collapse: separate;
  }
  th, td {
    border: 1px solid black;
    text-align: center;
    height: 24px;
  }
  td.border_bottom {
      border-bottom: 1px dashed black;
  }
  td.border_top {
      border-top:inset 0px; 
  }
  td.blank {
      width: 5%;
      border: none;
  }
  td.court {
      width: 10%;
      border: none;
  }
  td.times {
      font-size: 11px;
      width: 15%;
      border: none;
  }
  
  input[type=date].schedule_input {
    width: 27%;
    margin: 8px 8px;
    
    /*box-sizing: border-box;*/
    /*border: 2px solid red;*/
    /*border-radius: 4px;*/
  }
  
  button.reservation4 {
      background-color: #66B2FF;
      color: #FFF;
      /* border: 1px solid black; */
      border: 1px solid white; 
      border-radius: 20px;
      position:absolute;
      transform: translate(-50%, -10%);
      /*transform: translateX(-50%);*/
      height: 120px;
      width: 9.7%;
      max-width: 78px;
  }
  button.reservation3 {
      background-color: #66B2FF;
      color: #FFF;
      /*border: 2px solid black; */
      border: 1px solid white; 
      border-radius: 20px;
      position:absolute;
      transform: translate(-50%, -12%);
      /*transform: translateX(-50%);*/
      height: 96px;
      width: 9.7%;
      max-width: 78px;
  }
  button.reservation2 {
      background-color: #66B2FF;
      color: #FFF;
      /*border: 2px solid black; */
      border: 1px solid white; 
      border-radius: 20px;
      position:absolute;
      transform: translate(-50%, -16%);
      /*transform: translateX(-50%);*/
      height: 72px;
      width: 9.7%;
      max-width: 78px;
  }
  button.reservation1 {
      background-color: #66B2FF;
      color: #FFF;
      /*border: 2px solid black; */
      border: 1px solid white; 
      border-radius: 20px;
      position:absolute;
      transform: translate(-50%, -24%);
      /*transform: translateX(-50%);*/
      height: 48px;
      width: 9.7%;
      max-width: 78px;
  }
  


</style>
    


<table>
<tr>
    <td class="times"></td>
	<td style="border: none" colspan="8">
	    Court Schedule for 
		<?php echo $query_date;
		echo $res_08_00[0];

// 
// if($courtSelection=='1-8'){
// 	$query="SELECT * FROM reservations WHERE date='2020-09-21' AND court='1' AND start_time='09:00:00' AND duration='02:00:00'";
// 	$result = mysqli_query($conn, $query);
// 	while($rows=mysqli_fetch_assoc($result)){
// 		echo '<button class="reservation2">Noah</button>';
// 	}
// }
// else{
// 	$query="SELECT * FROM reservations WHERE date='2020-09-21' AND court='9' AND start_time='09:00:00' AND duration='02:00:00'";
// 	$result = mysqli_query($conn, $query);
// 	while($rows=mysqli_fetch_assoc($result)){
// 		echo '<button class="reservation2">Noah</button>';
// 	}
// }
//
		
		//echo $reservationDate;
	      
  
// echo "User List:";
// $query="SELECT * FROM reservations WHERE date='2020-09-21' AND court='4' AND start_time='08:00:00' AND duration='02:00:00'";
// $result = mysqli_query($conn, $query);
// while($rows=mysqli_fetch_assoc($result)){
//  echo $rows['date'];
// }
// echo "Reservaitions:";
// $query = "SELECT * FROM reservations WHERE date='2020-09-21' AND court='4' AND start_time='08:00:00' AND duration='02:00:00';"
// $result = mysqli_query($conn, $query);
// while($rows=mysqli_fetch_assoc($result)){
// 	echo $rows['court'];
// }

?>
	</td>
    <td class="blank"></td></tr>
<tr>
	<td class="times"></td>
    <td class="court"><?php echo $court1; ?></td>
    <td class="court"><?php echo $court2; ?></td>
    <td class="court"><?php echo $court3; ?></td>
    <td class="court"><?php echo $court4; ?></td>
    <td class="court"><?php echo $court5; ?></td>
    <td class="court"><?php echo $court6; ?></td>
    <td class="court"><?php echo $court7; ?></td>
    <td class="court"><?php echo $court8; ?></td>
    <td class="blank"></td>
</tr>
<tr>
	<td class="times"></td>
	<td class="border_bottom"><?php
	if($res_08_00[0]==1){ echo '<button class="reservation1">Noah</button>'; }
	else if($res_08_00[0]==2){ echo '<button class="reservation2">Noah</button>'; }
	else if($res_08_00[0]==3){ echo '<button class="reservation3">Noah</button>'; }
	else if($res_08_00[0]==4){ echo '<button class="reservation4">Noah</button>'; }
	?></td></td></td>
    <td class="border_bottom"><?php
	if($res_08_00[1]==1){ echo '<button class="reservation1">Noah</button>'; }
	else if($res_08_00[1]==2){ echo '<button class="reservation2">Noah</button>'; }
	else if($res_08_00[1]==3){ echo '<button class="reservation3">Noah</button>'; }
	else if($res_08_00[1]==4){ echo '<button class="reservation4">Noah</button>'; }
	?></td>
    <td class="border_bottom"><?php
	if($res_08_00[2]==1){ echo '<button class="reservation1">Noah</button>'; }
	else if($res_08_00[2]==2){ echo '<button class="reservation2">Noah</button>'; }
	else if($res_08_00[2]==3){ echo '<button class="reservation3">Noah</button>'; }
	else if($res_08_00[2]==4){ echo '<button class="reservation4">Noah</button>'; }
	?></td>
    <td class="border_bottom"><?php
	if($res_08_00[3]==1){ echo '<button class="reservation1">Noah</button>'; }
	else if($res_08_00[3]==2){ echo '<button class="reservation2">Noah</button>'; }
	else if($res_08_00[3]==3){ echo '<button class="reservation3">Noah</button>'; }
	else if($res_08_00[3]==4){ echo '<button class="reservation4">Noah</button>'; }
	?></td>
    <td class="border_bottom"><?php
	if($res_08_00[4]==1){ echo '<button class="reservation1">Noah</button>'; }
	else if($res_08_00[4]==2){ echo '<button class="reservation2">Noah</button>'; }
	else if($res_08_00[4]==3){ echo '<button class="reservation3">Noah</button>'; }
	else if($res_08_00[4]==4){ echo '<button class="reservation4">Noah</button>'; }
	?></td>
    <td class="border_bottom"><?php
	if($res_08_00[5]==1){ echo '<button class="reservation1">Noah</button>'; }
	else if($res_08_00[5]==2){ echo '<button class="reservation2">Noah</button>'; }
	else if($res_08_00[5]==3){ echo '<button class="reservation3">Noah</button>'; }
	else if($res_08_00[5]==4){ echo '<button class="reservation4">Noah</button>'; }
	?></td>
    <td class="border_bottom"><?php
	if($res_08_00[6]==1){ echo '<button class="reservation1">Noah</button>'; }
	else if($res_08_00[6]==2){ echo '<button class="reservation2">Noah</button>'; }
	else if($res_08_00[6]==3){ echo '<button class="reservation3">Noah</button>'; }
	else if($res_08_00[6]==4){ echo '<button class="reservation4">Noah</button>'; }
	?></td>
    <td class="border_bottom"><?php
	if($res_08_00[7]==1){ echo '<button class="reservation1">Noah</button>'; }
	else if($res_08_00[7]==2){ echo '<button class="reservation2">Noah</button>'; }
	else if($res_08_00[7]==3){ echo '<button class="reservation3">Noah</button>'; }
	else if($res_08_00[7]==4){ echo '<button class="reservation4">Noah</button>'; }
	?></td>
    <td class="blank"></td>
</tr>
<tr>
	<td class="times" rowspan="2">9:00 AM</td>
	<td class="border_top"><?php
	if($res_08_30[0]==1){ echo '<button class="reservation1">Noah</button>'; }
	else if($res_08_30[0]==2){ echo '<button class="reservation2">Noah</button>'; }
	else if($res_08_30[0]==3){ echo '<button class="reservation3">Noah</button>'; }
	else if($res_08_30[0]==4){ echo '<button class="reservation4">Noah</button>'; }
	?></td>
	<td class="border_top"><?php
	if($res_08_30[1]==1){ echo '<button class="reservation1">Noah</button>'; }
	else if($res_08_30[1]==2){ echo '<button class="reservation2">Noah</button>'; }
	else if($res_08_30[1]==3){ echo '<button class="reservation3">Noah</button>'; }
	else if($res_08_30[1]==4){ echo '<button class="reservation4">Noah</button>'; }
	?></td>
	<td class="border_top"><?php
	if($res_08_30[2]==1){ echo '<button class="reservation1">Noah</button>'; }
	else if($res_08_30[2]==2){ echo '<button class="reservation2">Noah</button>'; }
	else if($res_08_30[2]==3){ echo '<button class="reservation3">Noah</button>'; }
	else if($res_08_30[2]==4){ echo '<button class="reservation4">Noah</button>'; }
	?></td>
	<td class="border_top"><?php
	if($res_08_30[3]==1){ echo '<button class="reservation1">Noah</button>'; }
	else if($res_08_30[3]==2){ echo '<button class="reservation2">Noah</button>'; }
	else if($res_08_30[3]==3){ echo '<button class="reservation3">Noah</button>'; }
	else if($res_08_30[3]==4){ echo '<button class="reservation4">Noah</button>'; }
	?></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>	
    <td class="border_top"></td>
	<td class="blank"></td>
</tr>
<tr>
	<td class="border_bottom"><?php
	if($res_09_00[0]==1){ echo '<button class="reservation1">Noah</button>'; }
	else if($res_09_00[0]==2){ echo '<button class="reservation2">Noah</button>'; }
	else if($res_09_00[0]==3){ echo '<button class="reservation3">Noah</button>'; }
	else if($res_09_00[0]==4){ echo '<button class="reservation4">Noah</button>'; }
	?></td>
	<td class="border_bottom"><?php
	if($res_09_00[1]==1){ echo '<button class="reservation1">Noah</button>'; }
	else if($res_09_00[1]==2){ echo '<button class="reservation2">Noah</button>'; }
	else if($res_09_00[1]==3){ echo '<button class="reservation3">Noah</button>'; }
	else if($res_09_00[1]==4){ echo '<button class="reservation4">Noah</button>'; }
	?></td>
	<td class="border_bottom"><?php
	if($res_09_00[2]==1){ echo '<button class="reservation1">Noah</button>'; }
	else if($res_09_00[2]==2){ echo '<button class="reservation2">Noah</button>'; }
	else if($res_09_00[2]==3){ echo '<button class="reservation3">Noah</button>'; }
	else if($res_09_00[2]==4){ echo '<button class="reservation4">Noah</button>'; }
	?></td>
	<td class="border_bottom"><?php
	if($res_09_00[3]==1){ echo '<button class="reservation1">Noah</button>'; }
	else if($res_09_00[3]==2){ echo '<button class="reservation2">Noah</button>'; }
	else if($res_09_00[3]==3){ echo '<button class="reservation3">Noah</button>'; }
	else if($res_09_00[3]==4){ echo '<button class="reservation4">Noah</button>'; }
	?></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
    <td class="blank"></td>
</tr>
<tr>
	<td class="times"rowspan="2">10:00 AM</td>
    <td class="border_top"><?php
	if($res_09_30[0]==1){ echo '<button class="reservation1">Noah</button>'; }
	else if($res_09_30[0]==2){ echo '<button class="reservation2">Noah</button>'; }
	else if($res_09_30[0]==3){ echo '<button class="reservation3">Noah</button>'; }
	else if($res_09_30[0]==4){ echo '<button class="reservation4">Noah</button>'; }
	?></td>
	<td class="border_top"><?php
	if($res_09_30[1]==1){ echo '<button class="reservation1">Noah</button>'; }
	else if($res_09_30[1]==2){ echo '<button class="reservation2">Noah</button>'; }
	else if($res_09_30[1]==3){ echo '<button class="reservation3">Noah</button>'; }
	else if($res_09_30[1]==4){ echo '<button class="reservation4">Noah</button>'; }
	?></td>
	<td class="border_top"><?php
	if($res_09_30[2]==1){ echo '<button class="reservation1">Noah</button>'; }
	else if($res_09_30[2]==2){ echo '<button class="reservation2">Noah</button>'; }
	else if($res_09_30[2]==3){ echo '<button class="reservation3">Noah</button>'; }
	else if($res_09_30[2]==4){ echo '<button class="reservation4">Noah</button>'; }
	?></td>
	<td class="border_top"><?php
	if($res_09_30[3]==1){ echo '<button class="reservation1">Noah</button>'; }
	else if($res_09_30[3]==2){ echo '<button class="reservation2">Noah</button>'; }
	else if($res_09_30[3]==3){ echo '<button class="reservation3">Noah</button>'; }
	else if($res_09_30[3]==4){ echo '<button class="reservation4">Noah</button>'; }
	?></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="blank"></td>
</tr>
<tr>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
    <td class="blank"></td>
</tr>
<tr>
	<td class="times"rowspan="2">11:00 AM</td>
    <td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="blank"></td>
</tr>
<tr>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
    <td class="blank"></td>
</tr>
<tr>
	<td class="times"rowspan="2">12:00 PM</td>
    <td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="blank"></td>
</tr>
<tr>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
    <td class="blank"></td>
</tr>
<tr>
	<td class="times"rowspan="2">1:00 PM</td>
    <td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="blank"></td>
</tr>
<tr>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
    <td class="blank"></td>
</tr>
<tr>
	<td class="times"rowspan="2">2:00 PM</td>
    <td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="blank"></td>
</tr>
<tr>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
    <td class="blank"></td>
</tr>
<tr>
	<td class="times"rowspan="2">3:00 PM</td>
    <td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="blank"></td>
</tr>
<tr>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
    <td class="blank"></td>
</tr>
<tr>
	<td class="times"rowspan="2">4:00 PM</td>
    <td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="blank"></td>
</tr>
<tr>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
    <td class="blank"></td>
</tr>
<tr>
	<td class="times"rowspan="2">5:00 PM</td>
    <td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="blank"></td>
</tr>
<tr>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
    <td class="blank"></td>
</tr>
<tr>
	<td class="times"rowspan="2">6:00 PM</td>
    <td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="blank"></td>
</tr>
<tr>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
    <td class="blank"></td>
</tr>
<tr>
	<td class="times"rowspan="2">7:00 PM</td>
    <td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="blank"></td>
</tr>
<tr>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
	<td class="border_bottom"></td>
    <td class="blank"></td>
</tr>
<tr>
	<td class="times" rowspan="2">8:00 PM</td>
    <td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="border_top"></td>
	<td class="blank"></td>
</tr>
<tr>
	<td class="blank"></td>
	<td class="blank"></td>
	<td class="blank"></td>
	<td class="blank"></td>
	<td class="blank"></td>
	<td class="blank"></td>
	<td class="blank"></td>
	<td class="blank"></td>
    <td class="blank"></td>
</tr>
</table>


</main>
