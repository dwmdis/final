<!DOCTYPE html>
<html lang="en">
<?php 
    //Sets variables
    $relpath= ""; $title="Vi|Test of Skill"; $page="test"; $imgpath="http://serenity.ist.rit.edu/~iste240t04/240/final/assets/media/images/";
?>
<?php include "assets/inc/head.php" ?>
<link type="text/css" href="assets/scripts/testmodal.css" rel="stylesheet">
<!-- <head> went here -->
<body>
<?php include "assets/inc/navigation.php" ?>
    <script src="assets/scripts/answerKey.js"></script>
  <main>
      <div class="content" id="home">
          <p><b>user@localhost~:$</b> $page = <?php echo $page ?>.php</p>
        <h1>Vi Quiz: How VIable are you?</h1>
        <form method="post" action="certificate.php" id="quizform">
            <p>
                <span>1. The command to quit without saving is:<br/></span>
                    <label for="q1a1"><input type="radio" class="radButtons" value="Answer1" id="q1a1" name="q1"/> q&emsp;</label>
                    <label for="q1a2"><input type="radio" class="radButtons" value="Answer2" id="q1a2" name="q1"/> :q&emsp;</label>
                    <label for="q1a3"><input type="radio" class="radButtons" value="Answer3" id="q1a3" name="q1"/> :quit&emsp;</label>
                    <label for="q1a4"><input type="radio" class="radButtons" value="Answer4" id="q1a4" name="q1"/> :x&emsp;</label>
            </p>
        
            <p>
                <span>2. What key do you press to enter insert mode?:<br/></span>
                    <label for="q2a1"><input type="radio" class="radButtons" value="Answer1" id="q2a1" name="q2"/> i&emsp;</label>
                    <label for="q2a2"><input type="radio" class="radButtons" value="Answer2" id="q2a2" name="q2"/> num0&emsp;</label>
                    <label for="q2a3"><input type="radio" class="radButtons" value="Answer3" id="q2a3" name="q2"/> :&emsp;</label>
                    <label for="q2a4"><input type="radio" class="radButtons" value="Answer4" id="q2a4" name="q2"/> w&emsp;</label>
            </p>
        
            <p>
                <span>3. What command brings you to the beginning of a line?:<br/></span>
                    <label for="q3a1"><input type="radio" class="radButtons" value="Answer1" id="q3a1" name="q3"/> 0&emsp;</label>
                    <label for="q3a2"><input type="radio" class="radButtons" value="Answer2" id="q3a2" name="q3"/> b&emsp;</label>
                    <label for="q3a3"><input type="radio" class="radButtons" value="Answer3" id="q3a3" name="q3"/> $&emsp;</label>
                    <label for="q3a4"><input type="radio" class="radButtons" value="Answer4" id="q3a4" name="q3"/> G&emsp;</label>
            </p>
        
            <p>
                <span>4. What would you type to move to the 5th line of a file?:<br/></span>
                    <label for="q4a1"><input type="radio" class="radButtons" value="Answer1" id="q4a1" name="q4"/> 5&emsp;</label>
                    <label for="q4a2"><input type="radio" class="radButtons" value="Answer2" id="q4a2" name="q4"/> l5&emsp;</label>
                    <label for="q4a3"><input type="radio" class="radButtons" value="Answer3" id="q4a3" name="q4"/> 5l&emsp;</label>
                    <label for="q4a4"><input type="radio" class="radButtons" value="Answer4" id="q4a4" name="q4"/> 5G&emsp;</label>
            </p>
        
            <p>
                <span>5. What command forward searches for a string?:<br/></span>
                    <label for="q5a1"><input type="radio" class="radButtons" value="Answer1" id="q5a1" name="q5"/> string&emsp;</label>
                    <label for="q5a2"><input type="radio" class="radButtons" value="Answer2" id="q5a2" name="q5"/> /string&emsp;</label>
                    <label for="q5a3"><input type="radio" class="radButtons" value="Answer3" id="q5a3" name="q5"/> fstring&emsp;</label>
                    <label for="q5a4"><input type="radio" class="radButtons" value="Answer4" id="q5a4" name="q5"/> f&emsp;</label>
            </p>
        
            <p>
                <span>6. What can you type to repeat a previous search?:<br/></span>
                    <label for="q6a1"><input type="radio" class="radButtons" value="Answer1" id="q6a1" name="q6"/> N&emsp;</label>
                    <label for="q6a2"><input type="radio" class="radButtons" value="Answer2" id="q6a2" name="q6"/> r&emsp;</label>
                    <label for="q6a3"><input type="radio" class="radButtons" value="Answer3" id="q6a3" name="q6"/> n&emsp;</label>
                    <label for="q6a4"><input type="radio" class="radButtons" value="Answer4" id="q6a4" name="q6"/> repeat&emsp;</label>
            </p>
        
            <p>
                <input type="submit" value="Submit Quiz" id="btnSubmit" onclick="check();"/>
            </p>
    
        </form>
        <!-- Trigger/Open The Modal -->
         <!-- <button id="myBtn">Open Modal</button>-->

        <!-- The Modal -->
         <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content" id="modalContent">
                <span class="close">&times;</span>
             </div>
         </div>
    <script src="assets/scripts/successFail.js"></script>
    </div>
  </main>
  <?php include "assets/inc/footer.php" ?>
</body>

</html>