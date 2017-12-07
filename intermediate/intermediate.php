<!DOCTYPE html>
<html lang="en">
<?php 
    //Sets variables
    $relpath= "../"; $title="Vi|Intermediate"; $page="intermediate"; $imgpath="http://serenity.ist.rit.edu/~iste240t04/240/final/assets/media/images/";
?>
<?php include "../assets/inc/head.php" ?>
<body>
<?php include "../assets/inc/navigation.php" ?>
  <main>
    <div class="content" id="home"><h1>VIable</h1>
        <p>page = "<?php echo $page ?>"</p>
        <p>
	        <b>user@localhost~:$</b> 
		Here are additional commands that are also helpful : 
		<dl>
			<dt>  jump to end of word</dt>
			<dd>- e </dd>
			
			<dt> jump to end of line</dt>
			<dd>- $</dd>
			
			<dt>copy</dt>
			<dd> -y</dd>
			
			<dt>paste </dt>
			<dd> -p</dd> 
			
			There are three different modes:
			<dt> command mode  </dt>
			<dd> When you first enter vi, you are in command mode, and cannot enter text until you change modes</dd>
			<dt>insert mode </dt>
			<dd>You can switch to Text input mode by hitting the i key (for insert)hit <Esc> or <CTRL 3> whenever you want to switch from Text Input mode to Command mode.</dd>
			<dt>last line mode </dt>
			<dd>You can only get to last line mode from command mode, and you get into last line mode by pressing the colon key :</dd>	
				 
				
		
		
        </p>
    </div>
  </main>
  <?php include "../assets/inc/footer.php" ?>
</body>

</html>
  </main>
</body>

</html>
