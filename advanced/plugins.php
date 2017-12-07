<!DOCTYPE html>
<html lang="en">
<?php 
    //Sets variables
    $relpath= "../"; $title="Vi|Plugins"; $page="plugins"; $imgpath="http://serenity.ist.rit.edu/~iste240t04/240/final/assets/media/images/";
?>
<?php include "../assets/inc/head.php" ?>
<!-- <head> went here -->
<body>
<?php include "../assets/inc/navigation.php" ?>
  <main>
    <div class="content" id="home"><h1>VIable</h1>
        <p><b>user@localhost~:$</b> $page = advanced/<?php echo $page ?>.php</p>
        <div>
	        <p><b>user@localhost~:$</b>
	        A great way to optimize your experience with vi is to utilize vi plugins. Below you will find some plug-ins you can use, but there are many more to you can use.</p>

	        <dl>
	        	<dt>vim-pencil</dt>
	        	<dd>This plugin was made to make writing in vim easier and compete with word processors.</dd>

	        	<dt>Syntastic</dt>
	        	<dd>A syntax checking plugin</dd>

	        	<dt>youcompleteme</dt>
	        	<dd>A code completion engine.</dd>

	        	<dt>vim-test</dt>
	        	<dd>A plugin for running tests.</dd>

	        	<dt>Vundle</dt>
	        	<dd>A plugin manager</dd>

	        	<dt>VIm-easymotion</dt>
	        	<dd>This plugin helps with quick movement around vi.</dd>


	        </dl>
	        
        </div>
    </div>
  </main>
  <?php include "../assets/inc/footer.php" ?>
</body>
</html>