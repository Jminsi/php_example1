<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <hi> PHP Basic </hi>
     <?php
     $myname="Minsi";
     echo "Hello $myname";
     echo '<br>';
     echo 'Hello' .$myname;
     echo '<br>';
     echo 'Here is the link: <a href="http://www.oamk.fi">'. $myname.'</a>';
      ?>
      <h2> An array</h2>
      <?php
      $students=array('Jim','Lisa','Bob');
      echo 'Second student is '.$students[1];
      ?>
      <h3> Print_r-function</h3>
      <?php print_r($students); ?>
      <h3>foreach -loop</h3>
      <ul>
      <?php
      foreach ($students as $row) {
        echo'<li>'.$row. '</li>';
      }
       ?>
     </ul>

     <h3> Two-demensional array</h3>
     <?php
     $names=array(
       array('Jim','Lisa','Bob'),
       array('m','Lia','Bb'),
       array('J','L','B'),
     );
     echo 'with print_r<br>';
     print_r($names);
     echo '<h3>with foreach-loop</h3>';
     echo '<ul>';
     foreach ($names as $row) {
       echo '<li>'.$row[0].' '.$row[1].'</li>';

     }
     echo '</ul>'
      ?>
  </body>
</html>
