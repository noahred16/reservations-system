<?php 
echo $_POST['var1'].'<br>';
echo $_POST['var2'].'<br>';
?>

<body onload="resLoad()">
<!-- <p>TEST1!!!</p> -->
<!-- <p id="p1">Hello World!</p> -->
<script>
    var param1 = "<?php echo $_POST['var1'] ?>";
    var param2 = "<?php echo $_POST['var2'] ?>";
    setInterval(function () {
    $('#res_load').load('test2.php', {param1: param1, param2: param2})
    }, 1000);
</script>
    
<div id="res_load"></div>


</body>

<script>
// window.onload = function(){
    // document.getElementById("p1").innerHTML = "New text!";
    
//   document.getElementById("dateSelected").value = "<?php echo date('Y-m-d'); ?>";
//   SubmitFormData('1-8');
//   document.getElementById("courtRange1").className += " active";
// }
</script>

<script>
    // resLoad(){
    //     document.getElementById("p1").innerHTML = "New text!";
        // setInterval(function () {
        //     var param1 = "<//?php echo $_POST['var1'] ?>";
        //     var param2 = "<//?php echo $_POST['var2'] ?>";
        //     $('#res_load').load('test2.php', {param1: param1, param2: param2})
        // }, 5000);
        // $('#res_load').load('test2.php');
    // }
</script>