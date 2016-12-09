<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Secret lab</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.min.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <div class="row">
      <div class="one-half column" style="margin-top: 25%">
        <h4>Super secret page</h4>

<?php
$success = false;
$message = '';
if (isset($_POST['password']) && (sha1($_POST['password']) == '3516a19a3d9228c2d0844e1a2139c421f49892bb')) {
  $success = true;
  $message = 'You got access! Secret component is HCK42-133t';
} else if (isset($_POST['password'])) {
  $message = 'Wrong password... try again';
}

if ($message != '') {
  print('<p>'.$message.'</p>');
}
if ($success === false ) { ?>
        <form action='index.php' method='post'>
        <label for="password">Password</label>
        <input class="u-full-width" placeholder="enter password" name="password" type="password"/>
        <input class="button-primary" type="submit" value="Check">
        </form>  
<?php
}
?>   
      </div>
    </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
