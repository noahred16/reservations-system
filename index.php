<?php
require "header.php";
?>
    
    
<main> 

<center>
<h2>Reservation System </h2>

<!--<section class="section-default"> -->
<!--</section>-->
<?php
    if (!isset($_SESSION['userId'])) {
          echo'
        <p>Login to reserve a court</p>
        <br>
        <form class="form-login" action="includes/login.inc.php" method="post">
            <h5 style="padding: 0 0 15 0px">Member Log In  </h5>
            <input type="text" name="mail" placeholder="E-mail">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="login-submit">Login</button>
            <p style="font-size: 12px; padding: 15 15px">Dont have an account yet? Contact the Pro Shop</p>
        </form>
        ';
    }
    else if (isset($_SESSION['userId'])) {
        //admin options
        if($_SESSION['level'] == "pro-shop"){
            require "options/menu.php";
            if (isset($_GET["menu"])) {
                if ($_GET["menu"] == "home") {
                    $_SESSION['page'] = "home";
                }
                else if ($_GET["menu"] == "schedule") {
                    $_SESSION['page'] = "schedule";
                    require "options/schedule.php";
                }
                else if ($_GET["menu"] == "reservations") {
                    $_SESSION['page'] = "reservations";
                }
                else if ($_GET["menu"] == "members") {
                    $_SESSION['page'] = "members";
                    require "options/members.php";
                }
            }
            else{
                require "options/schedule.php";
            }
        //     echo "wassup";
            // echo $_SESSION['page'];
        //     echo '<form action="includes/logout.inc.php" method="post">
        //     <button type="submit" name="login-submit">Logout</button>
        //   </form>';
        }
        else{
        echo '
            <form class="form-login" action="" method="post">
                <p>You are logged in</p>
                <br>
            </form>
            ';
        }
    }
?>
<!--      <br>-->



<!--<p>Date:</p>

<form class="form-signup input" action="" method="get";>
    <input type="date" name="dateFrom" 
        value="<?php 
        $temp = $_GET['dateFrom'];
        if($temp){ echo $temp; }
        else{ echo date('Y-m-d'); }
        ?>"
        min="2020-01-01" max = "2020-12-31"/><br><br>
    <button type="submit" name="showDate">Show Date</button>
</form>
-->




<!--<form action="" method="get";>-->
<!--    <input type="date" name="dateFrom" -->
<!--        value="2020-05-05"-->
<!--        min="2020-01-01" max = "2020-12-31"/><br>-->
<!--    <button type="submit" name="showDate">Show Date</button>-->
<!--</form>-->
<br>



<!--

<style type="text/css">
    table {
        border: 2px solid black;
        /*border: 2px dashed #cccccc;;*/
        border-spacing: 0px;
    }
    tr.border_bottom td {
        border-bottom: 1px dashed grey;
    }
    tr.border_top td {
        border-top:inset 0px; 
    }
    th {
        font-family: 'Roboto';
        text-align: center;
        font-size: 15px;
        height: 40;
        width: 65;
    }
    td {
        font-family: 'Roboto';
        text-align: center;
        color: white;
        border: 1px solid grey;
        font-size: 10px;
        height: 12;
        width: 90;
    }
    table td#TIMES {
        font-family: 'Roboto';
        font-size: 12px;
        color: black;
        border:inset 0px; 
        text-align: right;
        padding-right: 7px;
        width: 70;
        height: 24;
    }
    table td#BLANK {
        border:inset 0px; 
        width: 50;
    }
    table td#a1, td#b1 {
        background-color: #66B2FF;
    }
    table td#k7, td#l7, td#m7 {
        background-color: #66B2FF;
    }
    table td#h3, td#i3, td#j3, td#k3 {
        background-color: #004C99;
    }
    table td#v4, td#w4, td#x4 {
        background-color: #66B2FF;
    }
    table td#n6, td#o6, td#p6 {
        background-color: #66B2FF;
    }
    table td#n2, td#o2, td#p2, td#q2 {
        background-color: #99FF33;
    }
    table td#e2, td#f2, td#g2, td#h2 {
        background-color: #66B2FF;
    }
    table td#g4, td#h4, td#i4, td#j4 {
        background-color: #FF6666;
    }
</style>
<table> 
<tr>
    <td id="TIMES"></th>
    <th rowspan="2">COURT 1</th>
    <th rowspan="2">COURT 2</th>
    <th rowspan="2">COURT 3</th>
    <th rowspan="2">COURT 4</th>
    <th rowspan="2">COURT 5</th>
    <th rowspan="2">COURT 6</th>
    <th rowspan="2">COURT 7</th>
    <th rowspan="2">COURT 8</th>
    <td id="BLANK"></th>
</tr>
<tr>
    <td id="TIMES" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr class="border_bottom">
    <td id="a1" rowspan="2"></td>
    <td id="a2" rowspan="2"></td>
    <td id="a3" rowspan="2"></td>
    <td id="a4" rowspan="2"></td>
    <td id="a5" rowspan="2"></td>
    <td id="a6" rowspan="2"></td>
    <td id="a7" rowspan="2"></td>
    <td id="a8" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr>
    <td id="TIMES" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr class="border_top">
    <td id="b1" rowspan="2"></td>
    <td id="b2" rowspan="2"></td>
    <td id="b3" rowspan="2"></td>
    <td id="b4" rowspan="2"></td>
    <td id="b5" rowspan="2"></td>
    <td id="b6" rowspan="2"></td>
    <td id="b7" rowspan="2"></td>
    <td id="b8" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr>
    <td id="TIMES" rowspan="2">9:00 AM</td>
    <td id="BLANK"></td>
</tr>
<tr class="border_bottom">
    <td id="c1" rowspan="2"></td>
    <td id="c2" rowspan="2"></td>
    <td id="c3" rowspan="2"></td>
    <td id="c4" rowspan="2"></td>
    <td id="c5" rowspan="2"></td>
    <td id="c6" rowspan="2"></td>
    <td id="c7" rowspan="2"></td>
    <td id="c8" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr>
    <td id="TIMES" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr class="border_top">
    <td id="d1" rowspan="2"></td>
    <td id="d2" rowspan="2"></td>
    <td id="d3" rowspan="2"></td>
    <td id="d4" rowspan="2"></td>
    <td id="d5" rowspan="2"></td>
    <td id="d6" rowspan="2"></td>
    <td id="d7" rowspan="2"></td>
    <td id="d8" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr>
    <td id="TIMES" rowspan="2">10:00 AM</td>
    <td id="BLANK"></td>
</tr>
<tr class="border_bottom">
    <td id="e1" rowspan="2"></td>
    <td id="e2" rowspan="2">S. Smith</td>
    <td id="e3" rowspan="2"></td>
    <td id="e4" rowspan="2"></td>
    <td id="e5" rowspan="2"></td>
    <td id="e6" rowspan="2"></td>
    <td id="e7" rowspan="2"></td>
    <td id="e8" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr>
    <td id="TIMES" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr class="border_top">
    <td id="f1" rowspan="2"></td>
    <td id="f2" rowspan="2">S. Smith</td>
    <td id="f3" rowspan="2"></td>
    <td id="f4" rowspan="2"></td>
    <td id="f5" rowspan="2"></td>
    <td id="f6" rowspan="2"></td>
    <td id="f7" rowspan="2"></td>
    <td id="f8" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr>
    <td id="TIMES" rowspan="2">11:00 AM</td>
    <td id="BLANK"></td>
</tr>
<tr class="border_bottom">
    <td id="g1" rowspan="2"></td>
    <td id="g2" rowspan="2">S. Smith</td>
    <td id="g3" rowspan="2"></td>
    <td id="g4" rowspan="2"></td>
    <td id="g5" rowspan="2"></td>
    <td id="g6" rowspan="2"></td>
    <td id="g7" rowspan="2"></td>
    <td id="g8" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr>
    <td id="TIMES" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr class="border_top">
    <td id="h1" rowspan="2"></td>
    <td id="h2" rowspan="2">S. Smith</td>
    <td id="h3" rowspan="2">N. Smith</td>
    <td id="h4" rowspan="2"></td>
    <td id="h5" rowspan="2"></td>
    <td id="h6" rowspan="2"></td>
    <td id="h7" rowspan="2"></td>
    <td id="h8" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr>
    <td id="TIMES" rowspan="2">12:00 PM</td>
    <td id="BLANK"></td>
</tr>
<tr class="border_bottom">
    <td id="i1" rowspan="2"></td>
    <td id="i2" rowspan="2"></td>
    <td id="i3" rowspan="2">N. Smith</td>
    <td id="i4" rowspan="2"></td>
    <td id="i5" rowspan="2"></td>
    <td id="i6" rowspan="2"></td>
    <td id="i7" rowspan="2"></td>
    <td id="i8" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr>
    <td id="TIMES" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr class="border_top">
    <td id="j1" rowspan="2"></td>
    <td id="j2" rowspan="2"></td>
    <td id="j3" rowspan="2">N. Smith</td>
    <td id="j4" rowspan="2"></td>
    <td id="j5" rowspan="2"></td>
    <td id="j6" rowspan="2"></td>
    <td id="j7" rowspan="2"></td>
    <td id="j8" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr>
    <td id="TIMES" rowspan="2">1:00 PM</td>
    <td id="BLANK"></td>
</tr>
<tr class="border_bottom">
    <td id="k1" rowspan="2"></td>
    <td id="k2" rowspan="2"></td>
    <td id="k3" rowspan="2">N. Smith</td>
    <td id="k4" rowspan="2"></td>
    <td id="k5" rowspan="2"></td>
    <td id="k6" rowspan="2"></td>
    <td id="k7" rowspan="2"></td>
    <td id="k8" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr>
    <td id="TIMES" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr class="border_top">
    <td id="l1" rowspan="2"></td>
    <td id="l2" rowspan="2"></td>
    <td id="l3" rowspan="2"></td>
    <td id="l4" rowspan="2"></td>
    <td id="l5" rowspan="2"></td>
    <td id="l6" rowspan="2"></td>
    <td id="l7" rowspan="2"></td>
    <td id="l8" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr>
    <td id="TIMES" rowspan="2">2:00 PM</td>
    <td id="BLANK"></td>
</tr>
<tr class="border_bottom">
    <td id="m1" rowspan="2"></td>
    <td id="m2" rowspan="2"></td>
    <td id="m3" rowspan="2"></td>
    <td id="m4" rowspan="2"></td>
    <td id="m5" rowspan="2"></td>
    <td id="m6" rowspan="2"></td>
    <td id="m7" rowspan="2"></td>
    <td id="m8" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr>
    <td id="TIMES" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr class="border_top">
    <td id="n1" rowspan="2"></td>
    <td id="n2" rowspan="2"></td>
    <td id="n3" rowspan="2"></td>
    <td id="n4" rowspan="2"></td>
    <td id="n5" rowspan="2"></td>
    <td id="n6" rowspan="2"></td>
    <td id="n7" rowspan="2"></td>
    <td id="n8" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr>
    <td id="TIMES" rowspan="2">3:00 PM</td>
    <td id="BLANK"></td>
</tr>
<tr class="border_bottom">
    <td id="o1" rowspan="2"></td>
    <td id="o2" rowspan="2"></td>
    <td id="o3" rowspan="2"></td>
    <td id="o4" rowspan="2"></td>
    <td id="o5" rowspan="2"></td>
    <td id="o6" rowspan="2"></td>
    <td id="o7" rowspan="2"></td>
    <td id="o8" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr>
    <td id="TIMES" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr class="border_top">
    <td id="p1" rowspan="2"></td>
    <td id="p2" rowspan="2"></td>
    <td id="p3" rowspan="2"></td>
    <td id="p4" rowspan="2"></td>
    <td id="p5" rowspan="2"></td>
    <td id="p6" rowspan="2"></td>
    <td id="p7" rowspan="2"></td>
    <td id="p8" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr>
    <td id="TIMES" rowspan="2">4:00 PM</td>
    <td id="BLANK"></td>
</tr>
<tr class="border_bottom">
    <td id="q1" rowspan="2"></td>
    <td id="q2" rowspan="2"></td>
    <td id="q3" rowspan="2"></td>
    <td id="q4" rowspan="2"></td>
    <td id="q5" rowspan="2"></td>
    <td id="q6" rowspan="2"></td>
    <td id="q7" rowspan="2"></td>
    <td id="q8" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>

<tr>
    <td id="TIMES" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr class="border_top">
    <td id="r1" rowspan="2"></td>
    <td id="r2" rowspan="2"></td>
    <td id="r3" rowspan="2"></td>
    <td id="r4" rowspan="2"></td>
    <td id="r5" rowspan="2"></td>
    <td id="r6" rowspan="2"></td>
    <td id="r7" rowspan="2"></td>
    <td id="r8" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr>
    <td id="TIMES" rowspan="2">5:00 PM</td>
    <td id="BLANK"></td>
</tr>
<tr class="border_bottom">
    <td id="s1" rowspan="2"></td>
    <td id="s2" rowspan="2"></td>
    <td id="s3" rowspan="2"></td>
    <td id="s4" rowspan="2"></td>
    <td id="s5" rowspan="2"></td>
    <td id="s6" rowspan="2"></td>
    <td id="s7" rowspan="2"></td>
    <td id="s8" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr>
    <td id="TIMES" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr class="border_top">
    <td id="t1" rowspan="2"></td>
    <td id="t2" rowspan="2"></td>
    <td id="t3" rowspan="2"></td>
    <td id="t4" rowspan="2"></td>
    <td id="t5" rowspan="2"></td>
    <td id="t6" rowspan="2"></td>
    <td id="t7" rowspan="2"></td>
    <td id="t8" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr>
    <td id="TIMES" rowspan="2">6:00 PM</td>
    <td id="BLANK"></td>
</tr>
<tr class="border_bottom">
    <td id="u1" rowspan="2"></td>
    <td id="u2" rowspan="2"></td>
    <td id="u3" rowspan="2"></td>
    <td id="u4" rowspan="2"></td>
    <td id="u5" rowspan="2"></td>
    <td id="u6" rowspan="2"></td>
    <td id="u7" rowspan="2"></td>
    <td id="u8" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr>
    <td id="TIMES" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr class="border_top">
    <td id="v1" rowspan="2"></td>
    <td id="v2" rowspan="2"></td>
    <td id="v3" rowspan="2"></td>
    <td id="v4" rowspan="2"></td>
    <td id="v5" rowspan="2"></td>
    <td id="v6" rowspan="2"></td>
    <td id="v7" rowspan="2"></td>
    <td id="v8" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr>
    <td id="TIMES" rowspan="2">7:00 PM</td>
    <td id="BLANK"></td>
</tr>
<tr class="border_bottom">
    <td id="w1" rowspan="2"></td>
    <td id="w2" rowspan="2"></td>
    <td id="w3" rowspan="2"></td>
    <td id="w4" rowspan="2"></td>
    <td id="w5" rowspan="2"></td>
    <td id="w6" rowspan="2"></td>
    <td id="w7" rowspan="2"></td>
    <td id="w8" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr>
    <td id="TIMES" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr class="border_top">
    <td id="x1" rowspan="2"></td>
    <td id="x2" rowspan="2"></td>
    <td id="x3" rowspan="2"></td>
    <td id="x4" rowspan="2"></td>
    <td id="x5" rowspan="2"></td>
    <td id="x6" rowspan="2"></td>
    <td id="x7" rowspan="2"></td>
    <td id="x8" rowspan="2"></td>
    <td id="BLANK"></td>
</tr>
<tr>
    <td id="TIMES" rowspan="2">8:00 PM</td>
    <td id="BLANK"></td>
</tr>
<tr>
    <td id="BLANK"></td>
</tr>
<tr>
    <td id="BLANK"></td>
</tr>

</table>

-->


<br>


 <?php
// require "options/schedule.php";
 ?>


                  

</center>
</main>



</html>