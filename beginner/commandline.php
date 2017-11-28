<!DOCTYPE html>
<html lang="en">
<?php 
    //Sets variables
    $relpath= "../"; $title="Vi|Command Line"; $page="command-line"; $imgpath="http://serenity.ist.rit.edu/~iste240t04/240/final/assets/media/images/";
?>
<?php include "../assets/inc/head.php" ?>
<!-- <head> went here -->
<body>
<?php include "../assets/inc/navigation.php" ?>
  <main>
    <div class="content" id="home"><h1>VIable</h1>
        <p>page = "<?php echo $page ?>"</p>
        <p>
	        <b>user@localhost~:$</b>
	        The command-line is a useful tool for you to use as you become more experienced in programming. To use, all you have to do is enter in a valid command with any parameters. Commands must have correct spelling and syntax in order to work. We are focusing on how to use vi on the command-line to edit code. But first you need to learn how to use the command-line. <br/>

	        There are many command-line interpreters to use. Two of the most popular on windows devices are the Command Prompt and Windows PowerShell. The command-line interface is the Terminal. <br/>

	        Once you have the command-line open, you can start using VI! First, you need to navigate to the directory the file you wish to edit is. In orderto see where you currently are use pwd. In order to enter a directory, use: cd <i>directory name</i>. Finally to pull up the file in Vi, use: vi <i>filename</i>. You should now be all set to start using vi, navigate to the commands tab to learn more about how to edit with vi.


        </p>
    </div>
  </main>
  <?php include "../assets/inc/footer.php" ?>
</body>

</html>