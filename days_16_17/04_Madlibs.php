<!doctype html>
<html>
  <head>
    <title>Mad Libs</title>
  </head>
  <body>
    <h1>Mad Libs</h1>
    <?php
      if ($_POST['submit']){
      $name = $_POST["name"];
      $verb = $_POST['verb'];
      $noun = $_POST['noun'];
      $adjective = $_POST['adjective'];
      $adverb = $_POST['adverb'];
      print "the $name $noun was very hungry so it decided to $adverb $verb to the nearest restaurant";
      }else {
        print "problem"; 
      }
      
  

    

     ?>



    <form method="post" action="04_Madlibs.php">
      Name: <input type="text" name="name"><br>
      Verb: <input type="text" name="verb"><br>
      Noun: <input type="text" name="noun"><br>
      Adjective: <input type="text" name="adjective"><br>
      Adverb: <input type="text" name="adverb"><br>
      <input type="submit">
    </form>
  




  </body>
</html>
