<!DOCTYPE html>
<html lang="en">
<?php 
    //Sets variables
    $relpath= "../"; $title="Vi|Intermediate Commands"; $page="intermediate commands"; $imgpath="http://serenity.ist.rit.edu/~iste240t04/240/final/assets/media/images/";
?>
<?php include "../assets/inc/head.php" ?>
<!-- <head> went here -->
<body>
<?php include "../assets/inc/navigation.php" ?>
  <main>
    <div class="content" id="home"><h1>VIable</h1>
        <p><b>user@localhost~:$</b> $page = intermediate/<?php echo $page ?>.php</p>
        <div>
            <p><b>user@localhost~:$</b> Here are more navigation commands that are helpful as you become more familiar with vi:</p>

	        <dl>
	       		<dt>$</dt>
	        	<dd>Move to end of line</dd>
	        	
	        	<dt>0</dt>
	        	<dd>Move to beginning of line</dd>

	        	<dt>e</dt>
	        	<dd>Move to end of word</dd>       	

	        	<dt>w</dt> 
	        	<dd>Move cursor to the beginning of next word</dd>

	        	<dt>b</dt> 
	        	<dd>Move to beginning of word</dd>

	        	<dt>G</dt> 
	        	<dd>Move to last line in file</dd>

	        	<dt>nG</dt> 
	        	<dd>Move to nth line in file</dd>
				
				<dt>y</dt>	
	        	<dd>Copy</dd>  

	        	<dt>p</dt>  
	        	<dd>Paste</dd> 

	        	<dt>u</dt> 
	        	<dd>undo</dd>

	        </dl>
        </div>
    </div>
  </main>
  <?php include "../assets/inc/footer.php" ?>
</body>
</html>