<!DOCTYPE html>
<html lang="en">
<?php 
    //Sets variables
    $relpath= ""; $title="Vi|home"; $page="home"; $imgpath="http://serenity.ist.rit.edu/~iste240t04/240/final/assets/media/images/";
?>
<?php include "assets/inc/head.php" ?>
<body>
<?php include "assets/inc/navigation.php" ?>
  <main>
    <div class="content" id="home">
    	<img id="logo" src="assets/images/logo-final.png">
    	<h1>VIable</h1>
        <p><b>user@localhost~:$</b> $page = <?php echo $page ?>.php</p>
        <p>
	        <b>user@localhost:~/home/history$</b> The <b>vi</b> editor was developed
	        by Bill Joy in 1976. Joy was a graduate student at University of 
	        California at Berkeley, and later founded Sun Microsystems. Before vi, however,
	        came a text editor called "ed". Ed was the original Unix text editor 
	        of choice (or lack thereof). Ed was line oriented and used from 
	        printing terminals. Vi was developed to provide a <b>v</b>isual <b>i</b>nterface
	        to text editing; in effect, allow text to be viewed on a full screen rather than
	        just a single line at a time.<br>
	        Nowadays, most CLI and Unix interfaces come packaged with <b>Vim</b>, which stands for VI IMProved.
	        Vim serves as a superset of Vi, and aims to be more functional by adding several
	        features that are standard in text editors - syntax highlighting, code folding, etc.
	        <br>However, the core features of Vi and Vim are the same; whatever functionality is present in
	        Vi is also present in Vim. For the purpose of this tutorial site, we'll stick to Vi for a simpler 
	        and more straight-forward approach to modal text editing. Whether you are new to command-line
	        text editing or an experienced programmer, VIable always has more Vi to offer.
        </p>
    </div>
  </main>
  <?php include "assets/inc/footer.php" ?>
</body>

</html>