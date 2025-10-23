<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $cars = ["volvo", "saab", "mercedes", "audi"];
    if (isset($_GET['fname'] ,($_GET['lname']),($_GET['cars']))) {
       print("user ".$_GET['fname']." ". $_GET['lname']." picked a ". $_GET['cars']);
        
    }
    ?>
      <form method="get">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>
  Pick up your favourite cart 
   <label for="cars">Choose a car:</label>

<select name="cars" id="cars">
    <?php 
    foreach ($cars as $car) {
        echo "<option value='$car'>".ucfirst($car)."</option>";
    
    
    ?>
    <option value="<?php echo $car; ?>"><?php echo ucfirst($car); ?></option>
<?php 
 }
?>
</select> <br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>