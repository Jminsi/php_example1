<?php include "menu.php"; ?>

<h1> Post example</h1>
<p>
Array is name "$_post". And you check the content with print_r-function.
</p>
<?php
print_r($_POST);
 ?>
<p>
You can reach the values of the array like "$_post['fn']"
</p>

<?php echo'Hello'.$_POST['fname']. ' '.$_post ['lname']; ?>
<?php include "footer.php"; ?>
