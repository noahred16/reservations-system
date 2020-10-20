<?php
    // echo "Date PHP: ".$_POST['name'] . "<br />";
    // echo "Range: ".$_POST['range'];

    $reservationDate = $_POST['dateSelected'];
    $courtSelection = $_POST['range'];

    if($courtSelection=='1-8'){
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



    // echo $_POST['dateSelected'];
    // echo $_POST['range'];
    //   $coolt = $_POST['name'];

    // echo $_POST['noah'] . "<br />";
    // require 'schedule.php';
?>

<body>
<div id="load_params"></div>


</body>



<script type="text/javascript">
	$(document).ready(function() {
        // $('#load_params').load('test.php');
        var x = "<?php echo $reservationDate ?>";
        var y = "<?php echo $courtSelection ?>";
        $('#load_params').load('test.php', {var1:x, var2:y});


        // $('#show').load('options/schedule.php');
		// setInterval(function () {
		// 	$('#load_params').load('test.php', {var1:x, var2:y})
		// }, 5000);
        // setInterval(function () {
        //     $('#show').load('options/schedule.php')
        // }, 5000);
        // $("#myDiv").load("myScript.php", {var1:x, var2:y, var3:z})
	});
</script>


