
<br>

<form class="form-login" action="includes/add-member.inc.php" method="post">
    <h5 style="padding: 0 0 15 0px">Add To System</h5>
    <input type="text" name="firstName" placeholder="First Name">
    <input type="text" name="lastName" placeholder="Last Name">
    <input type="text" name="mail" placeholder="E-mail">
    <p style="font-size:14px">Access: 
    <select class="select-css" id="access" name="access">
        <option value="member">Member</option>
        <option value="teaching-pro">Teaching Pro</option>
        <option value="pro-shop">Pro Shop</option>
    </select></p>
    <button type="submit" name="add-submit">Add Member</button>
    <br>
    <!--<p style="font-size: 12px; padding: 15 15px">Dont have an account yet? Contact the Pro Shop</p>-->
</form>
<br>

<!--Full texts	-->
<!--idUsers-->
<!--firstName-->
<!--lastName-->
<!--emailUsers-->
<!--pwdUsers-->
<!--access-->


    <!--echo $rows['firstName'];-->

<table>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>access</th>
    </tr>

<?php
echo "User List:";
$query="SELECT * FROM users";
$result = mysqli_query($conn, $query);
while($rows=mysqli_fetch_assoc($result)){
?>
    <tr>
        <td> <?php if($rows['idUsers']>0){ echo $rows['idUsers']; }
        else{ echo "0"; } ?> </td>
        <td> <?php if($rows['idUsers']>0){ echo $rows['firstName']; }
        else{ echo "0"; } ?> </td>
        <td> <?php if($rows['idUsers']>0){ echo $rows['lastName']; }
        else{ echo "0"; } ?> </td>
        <td> <?php if($rows['idUsers']>0){ echo $rows['emailUsers']; }
        else{ echo "0"; } ?> </td>
        <td> <?php if($rows['idUsers']>0){ echo $rows['access']; }
        else{ echo "0"; } ?> </td>
    </tr>
<?php
}
?>
</table>


