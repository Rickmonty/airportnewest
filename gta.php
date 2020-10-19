<?php
session_start();
include "includes/db.php";
include "includes/functions.php";
if ( isset( $_SESSION['email'] ) ) {
} else {
    // Redirect them to the login page
    header("Location: login.php");
}

include "header.php";

 
 ?>
 <div class="col-9 text-center" style="background-color:pink;">
<div class="container-fluid">
    	 <p> Car theft is a more serious offence. Some experience in petty crime is required.
When you manage to steal a vehicle be sure to store it in your garage!</p>
<?php  if(isset($_POST['Submit'])){
    if(isset($_POST['gta'])) {

        $selected_gta = $_POST['gta'];
        if($selected_gta == 1 ){
            $numbergen = mt_rand(0, 10);
    if($numbergen >=0 && $numbergen <=5 ){
                   $randomcarid = mt_rand(1,5);
                   $query = "SELECT car , value , carimage FROM cars WHERE car_id = '$randomcarid'";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);
        $car = $row['car'];
        $carfullvalue = $row['value'];
        $carimage = $row['carimage'];
        $damage = mt_rand(0,99);
        $damagedecimal = $damage / 100;
        $cardamagevalue = $damagedecimal * $carfullvalue;
        $carvalue = $carfullvalue - $cardamagevalue;
        echo "You Sucessfully Stole A $car worth £ $carvalue with $damage % damage! It has been placed in your garage.</br>";
        echo  "<img width='350' length='125' src='$carimage' />";
                   // Select statement to mysql to select car by $randomcarid
                   //rand the value and damage
                   //insert the car into users garage
                   //echo the car 



                 }
                   else{echo"You Got Caught You Failure!";}}

                       if($selected_gta == 2 ){
        $numbergen = mt_rand(0, 10);
    if($numbergen >=0 && $numbergen <=5 ){
                   echo "You Sucessfully Stole A Car!";}
           
               else { echo "You Got Caught You Failure!";}}

 if($selected_gta == 3 ){
        $numbergen = mt_rand(0, 10);
    if($numbergen >=0 && $numbergen <=5 ){
                   echo "You Sucessfully Stole A Car!";}
           
               else { echo "You Got Caught You Failure!";}}

                if($selected_gta == 4 ){
        $numbergen = mt_rand(0, 10);
    if($numbergen >=0 && $numbergen <=5 ){
                   echo "You Sucessfully Stole A Car!";}
           
               else { echo "You Got Caught You Failure!";}}




               
                            






    

    }}


?>
    	<form action ="gta.php" method="post">
<div class="radio">
<label><input type="radio" name="gta" value="1">Steal your neighbours car</label>
</div>
<div class="checkbox">
<label><input type="radio" name="gta" value="2">Steal from a car garage</label>
</div>
<div class="radio">
<label><input type="radio" name="gta" value="3">Hijack a car on a motorway </label>
</div>
<div class="radio">
<label><input type="radio" name="gta" value="4">Break into a SuperCar garage</label>
</div>
<button type="Submit" class="btn btn-default" name="Submit" value="Submit">Submit</button>
</select>
         </form>
     </div>
 </div>
</body>
</html>