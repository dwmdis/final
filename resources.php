<!DOCTYPE html>
<html lang="en">
<?php 
    //Sets variables
    $relpath= ""; $title="Vi|Resources"; $page="resources"; $imgpath="http://serenity.ist.rit.edu/~iste240t04/240/final/assets/media/images/";
?>
<?php include "assets/inc/head.php" ?>
<!-- <head> went here -->
<body>
<?php include "assets/inc/navigation.php" ?>
  <main>
    <div class="content" id="home"><h1>VIable</h1>
        <p><b>user@localhost~:$</b> $page = beginner/<?php echo $page ?>.php</p>
        <p>
	        <b>user@localhost~:$</b> Here are some helpful sites to check out.
	        <dl>
	        	<dt><a href="https://vimawesome.com/">vimawesome</a></dt>
	        	<dd>A large library of plugins to use.</dd>

	        	<dt><a href="https://www.catswhocode.com/blog/130-essential-vim-commands">catswhocode</a></dt>
	        	<dd>This is a list of 100+ vi commands if you want to learn more.</dd>

				<dt><a href="vim.org">vim</a></dt>
	        	<dd>The main successor to vi.</dd>

	        	<dt><a href="https://www.ted.com/speakers/bill_joy">Billy Joy Ted Talk</a></dt>
	        	<dd>Billy Joy, the original developer of vi, has done a Ted Talk. Although this is not about vi, it is interesting insight from the man behind the editor.</dd>

	        	<dt><a href="https://www.linux.com/learn/vim-101-beginners-guide-vim">linux.com's vim 101</a></dt>
	        	<dd>More about what vim is and why to use it.</dd>
	        </dl>


        </p>
    </div>
  </main>
  <?php include "assets/inc/footer.php" ?>
</body>

</html>