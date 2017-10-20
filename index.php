<!DOCTYPE html>
<html lang="en">
<?php 
    //Sets variables
    $relpath= ""; $title="Vi|home"; $page="home"; $imgpath="http://serenity.ist.rit.edu/~iste240t04/240/final/assets/media/images/";
?>
<?php include "assets/inc/head.php" ?>
<!-- <head> went here -->
<body>
    <span id="click-here" onclick="openNav()">Click Here!</span>
    <header>
        <image id="logos">
        <img id="big-logo" src="http://lorempixel.com/400/200/" alt="big-logo"/>
        <img id="small-logo" src="http://lorempixel.com/100/50/" alt="small-logo" />
        </image>
        <form id="search-box">
            <input type="search" placeholder="Search this site..." />
            <input type="submit" value="Search" class="btn-search"  />
        </form>
    </header>
    <nav id="myMobilenav" class="mobilenav">
            <a id="close-nav" href="#" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="http://serenity.ist.rit.edu/~iste240t04/240/final/index.php">Home</a>
            <a href="#">Intermediate</a>
            <a href="#">Advanced</a>
            <a href="#">About</a>
    </nav>
  <main>
    <div>HTML Boilerplate test
      "javascript:void(0)"
      </div>
  </main>
</body>

</html>