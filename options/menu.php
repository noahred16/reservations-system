
<style type="text/css">

.wrapper {
    text-align: center;  
   
}

.menu .items {
    padding-left: 1em;
    display: inline-block;
    vertical-align: middle;
    margin: 0;
}


.menu .items li {
    float: left;
    list-style: none;
    list-style-position: inside;
    margin-right: 1em;
    text-align: left;
    /*padding: 10 0.5%;*/
    /*padding: 10 5px;*/


}

button {
    border: 0;
    padding: 0;
    font-size: 20px;
    display: inline;
    background: none;
    /*text-decoration: underline;*/
    /*color: blue;*/
}
button:hover {
    cursor: pointer;
}

button#form-logout {
  display: block;
  height: 30px;
  padding: 0 10px;
  margin: 0 auto;
  border: none;
  border-radius: 4px;
  background-color: #333;
  font-family: arial;
  font-size: 13px;
  color: #FFF;
  text-transform: uppercase;
  text-align: center;
}

</style>


<section class="menu">   <!--Price section -->
  <form action="options/navigation.php" method="post">
  <div class="wrapper" >
  <ul  class="items">
        <!--<li><a href="index.php">Home</a></li>-->
        <!--<li><a href="index.php">Schedule</a></li>-->
        <!--<li><button type="submit" name="home">Home</button></li>-->
        <li><button type="submit" name="schedule">Schedule</button></li>
        <li><button type="submit" name="reservations">Reservations</button></li>
        <li><button type="submit" name="members">Members</button></li>
        <!--<li><button type="submit" name="list">List</button></li>-->
        <li><button id="form-logout" type="submit" name="logout">Logout</button></li>

</ul>
 </div>
 </form>


<br>





<!--<section class= "menu">-->
<!--<nav class="wrapper">-->
<!--    <ul class = "items">-->
<!--        <li><a href="index.php">Home</a></li>-->
<!--        <li><a href="#">Portfolio</a></li>-->
<!--        <li><a href="#">About me</a></li>-->
<!--        <li><a href="#">Contact</a></li>-->
<!--</ul>-->
<!--</nav>-->

<!--</section>-->

<!--<form action="includes/logout.inc.php" method="post">-->
<!--    <button type="submit" name="login-submit">Logout</button>-->
<!--</form>-->