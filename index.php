<?php
    session_start();
    require "includes/dbh.php";
?>

<html>
<head>
    <title>Noah's Reservation System</title>
    <link rel="stylesheet" href="includes/reservation_system_style.css">
    <script type="text/javascript" src="jquery/jquery-3.5.1.min.js"></script>
</head>

<main>
<center>
<?php
if(isset($_POST['login-submit'])){
    $mailuid = $_POST['mail'];
    $password = $_POST['pwd'];
    
    if(empty($mailuid) || empty($password)){
        echo 'Empty Fields';
    }
    else{
        $sql = "SELECT * FROM users WHERE email=?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            echo 'Server error. Contact Web Developer Noah Smith (727) 871-6624)';
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_verify($password,$row['password']);
                if($pwdCheck == false){
                    echo 'Wrong Password';
                }
                else if($pwdCheck == true){
                    session_start();
                    $_SESSION['userId'] = $row['user_id'];
                    $_SESSION['memberId'] = $row['member_id'];
                    $_SESSION['access'] = $row['access'];
                    $_SESSION['first'] = $row['first_name'];
                    $_SESSION['last'] = $row['last_name'];
                    $_SESSION['email'] = $row['email'];
                    // exit();
                }
                else{
                    echo 'Wrong Password';
                }
            }
            else{
                echo 'Email not found';
            }
        }   
    }   
}
if (!isset($_SESSION['userId'])) {
    echo'
  <p>Welcome to the Reservaiton System Prototype</p>
  <form action="" method="post">
      <h3 style="padding: 0 0 15 0px">Member Log In  </h3>
      <input style="width: 300px" type="text" name="mail" placeholder="E-mail"><br>
      <input style="width: 300px" type="password" name="pwd" placeholder="Password"><br>
      <button type="submit" name="login-submit">Login</button>
      <p style="font-size: 12px; padding: 15 15px">Dont have an account yet? Contact the Pro Shop</p>
  </form>
  ';
}
else{
    if($_SESSION['access'] == "pro-shop"){
        echo 'ADMIN/PRO-SHOP USER LOGGED IN';
        ?>
        <body onload="loadHomePage(event,'SchedulePage')">
        <table>
            <tr>
            <td class="options"><button id="homePage" class="tablinks" onclick="switchTab(event,'SchedulePage')">View Schedule</button></td>
            <td class="options"><button class="tablinks" onclick="switchTab(event,'ReservationPage')">Reserve A Court</button></td>
            <td class="options"><button class="tablinks" onclick="switchTab(event,'MemberPage')">Members</button></td>
            <td></td>
            <td class="options"><button class="tablinks" onclick="switchTab(event,'LogoutPage')">Logout</button></td>
            </tr>
        </table>
        

        <div id="SchedulePage" class="tabcontent">
            <h3>Court Schedule</h3>
            <label for="dateSelected">Date:</label>
            <input type="date" name="dateSelected" id="dateSelected" type="text" onchange="loadSchedule('date','date');"/>
            <br>
            <button id="courtRange1" class="courtButtons" onclick="loadSchedule(event, '1-8')">1-8</button>
            <button id="courtRange2" class="courtButtons" onclick="loadSchedule(event, '9-16')">9-16</button>
            <div id="schedule_div">
            <!-- All data will display here  -->
            </div>
            <!-- <div id="loadMembers"></div> -->
        </div>

        <div id="ReservationPage" class="tabcontent">
        <h3>Make A Reservation</h3>
        <form id="res_form">
            <label for="res_date">Date:</label>
            <input type="date" id="res_date" name="res_date"><br>
            
            <label for="res_court">Court Number:</label>
            <select name="res_court" id="res_court">
                <option value="0">-- Select Court --</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select><br>
            
            <label for="res_time">Start Time:</label>
            <select name="res_time" id="res_time">
                <option value="0">-- Select Time --</option>
                <option value="08:00:00">8:00 AM</option>
                <option value="08:30:00">8:30 AM</option>
                <option value="09:00:00">9:00 AM</option>
                <option value="09:30:00">9:30 AM</option>
            </select><br>

            <label for="res_dur">Duration:</label>
            <select name="res_dur" id="res_dur">
                <option value="0">-- Select Duration --</option>
                <option value="01:00:00">1 hr</option>
                <option value="01:30:00">1.5 hrs</option>
                <option value="02:00:00">2 hrs</option>
                <option value="02:30:00">2.5 hrs</option>
            </select><br>
            
            <input type="button" name="res_submit" id="res_submit" onclick="submitReservation();" value="Submit" />
        </form>
        <div id="form-valid">
        </div>
        
        </div>


        <div id="MemberPage" class="tabcontent">
        <h3>MemberPage</h3>
        <p>MemberPage is the capital of France.</p> 
        

        </div>

        <div id="LogoutPage" class="tabcontent">
        <h3>LogoutPage</h3>
        <p>LogoutPage is the capital of Japan.</p>
        </div>


        </body>

        <script>
        function loadHomePage(evt, pageContent) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(pageContent).style.display = "block";
            document.getElementById("homePage").className += " active";

            document.getElementById("dateSelected").value = "<?php echo date('Y-m-d'); ?>";
            document.getElementById("courtRange1").className += " active";

            var dateSelected=document.getElementById("dateSelected").value;
            range='1-8';
            $.post("options/scheduleParams.php", { dateSelected: dateSelected, range: range}, function(data) {
                $('#schedule_div').html(data);
            });
        }
        function switchTab(evt, pageContent) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(pageContent).style.display = "block";
            evt.currentTarget.className += " active";
        }
        function submitReservation(){
            var res_date = $("#res_date").val();
            var res_court = $("#res_court").val();
            var res_time = $("#res_time").val();
            var res_dur = $("#res_dur").val();
            var res_memid = "<?php echo $_SESSION['memberId']; ?>";
            $.post("includes/res_form_submit.php", { res_date: res_date, res_court: res_court, res_time: res_time, res_dur: res_dur, res_memid: res_memid }, function(data) { 
                $('#form-valid').html(data);
                //alert("Reservation Added");
            });
            setTimeout(function() {
                document.getElementById("res_form").reset();
                $('#form-valid').html("");
            }, 3000);
        }
        function loadSchedule(evt, courtRange) {
            var range, courtButtons;
            var dateSelected = $("#dateSelected").val();
            if(courtRange == 'date'){
                range = '1-8';
                courtButtons = document.getElementsByClassName("courtButtons");
                for (i = 0; i < courtButtons.length; i++) {
                    courtButtons[i].className = courtButtons[i].className.replace(" active", "");
                }
                document.getElementById("courtRange1").className += " active";
            }
            else{
                range = courtRange;
                courtButtons = document.getElementsByClassName("courtButtons");
                for (i = 0; i < courtButtons.length; i++) {
                    courtButtons[i].className = courtButtons[i].className.replace(" active", "");
                }
                evt.currentTarget.className += " active";
            }
            $.post("options/scheduleParams.php", { dateSelected: dateSelected, range: range}, function(data) {
                $('#schedule_div').html(data);
            });
        }
	    
        </script>

        <?php
    }
}
?>
</center>
</main>
</html>