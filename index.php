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
    <link type="text/css" href="assets/css/main.css" rel="stylesheet">
    <!-- <link rel="stylesheet" media="screen and (min-device-width: 800px)" href="assets/css/bleh.css" />
    <link rel='stylesheet' media='screen and (min-width: 701px) and (max-width: 900px)' href='assets/css/blah.css' /> -->
    <script>
        /* Set the width of the side navigation to 250px */
        function openNav() {
            document.getElementById("myMobilenav").style.width = "250px";
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
            document.getElementById("myMobilenav").style.width = "0";
        }
    </script>
</head>
<body>
    <nav id="myMobilenav" class="mobilenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">Home</a>
        <a href="#">Intermediate</a>
        <a href="#">Advanced</a>
        <a href="#">About</a>
    </nav>
    <span onclick="openNav()">Click Here!</span>
  <main>
    <div>HTML Boilerplate test</div>
  </main>
</body>

</html>