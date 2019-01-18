<?php include "menu.php"; ?>
<form class="" action="fift.php" method="post">
  <label for="">Write two numbers</label>
  <input type="number" name="a" value="">
  <input type="munber" name="b" value="">
  <input type="submit" name="btn" value="sum">

</form>
<?php
if(isset($_POST['btn'])){
  $result=$_POST['a']+$_POST['b'];
  echo 'The sume is '.$result;

}

 ?>

<?php include "footer.php"; ?>
