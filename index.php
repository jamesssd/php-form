<?php
//echo "<p>This is PHP!</p>";

if(isset($_GET["FirstName])){//show feedback
  //echo $GET["FirstName"];
  
  echo '<pre>';
  var_dump($_GET);
  echo '</pre>';
  
}else{//show form
  echo '
  <form action =" ">
  <p>First Name: <input type ="text" name="FirstName" /></p>
  <p>Last Name: <input type="text" name="LastName" /> </p>
  <p>Favorite Color:</p>
  <p><input type="radio" name="FavoriteColor" value="red" /> </p>
  <p><input type="radio" name="FavoriteColor" value="blue" /> </p>
  <p><input type="radio" name="FavoriteColor" value="yellow" /> </p>
  
  <p>Sundae Toppings:</p>
  <p><input type="radio" name="Toppings" value="Chocolate Syrup" /> </p>
  <p><input type="radio" name="Toppings" value="Oreos" /> </p>
  <p><input type="radio" name="Toppings" value="Marshmellow" /> </p>
  
  <input type="submit" />  
  </form>
  ';
}


?>
<p>This is HTML</p>
