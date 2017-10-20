<!DOCTYPE html>
<html lang="en">
<?php 
    //Sets variables to be used
    $relpath= ""; $title="Vi|home"; $page="home"; $imgpath="http://serenity.ist.rit.edu/~iste240t04/240/final/assets/media/images/";
?>
<?php include "<?php $relpath; ?>assets/inc/head.php" ?>
<head><!-- This will be stripped out later to /inc-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=700, initial-scale=1">
    <title><?php echo $title; ?></title>
    <!-- Set device width to appropriate values, and name css files accordingly -->
    <!--<link type="text/css" href="assets/css/main.css" rel="stylesheet"> -->
    <link rel="stylesheet" media="screen and (min-device-width: 800px)" href="assets/css/main.css" />
    <link rel='stylesheet' media='screen and (min-width: 601px) and (max-width: 799px)' href='assets/css/medium.css' />
    <script src="assets/scripts/mobileNav.js"></script>
</head>
<body>
    <nav id="myMobilenav" class="mobilenav">
        <a id="close-nav" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="http://serenity.ist.rit.edu/~iste240t04/240/final/index.php">Home</a>
        <a href="#">Intermediate</a>
        <a href="#">Advanced</a>
        <a href="#">About</a>
    </nav>
    <span id="click-here" onclick="openNav()">Click Here!</span>
  <main>
    <div>HTML Boilerplate test</div>
  </main>
</body>

</html>