    <?php 
        $linkpath = "http://serenity.ist.rit.edu/~iste240t04/240/final/"
    ?>
    <header>
        <span id="click-here" onclick="openNav()">Click Here!</span>
        <image id="logos">
        <!-- <img id="big-logo" src="http://lorempixel.com/400/200/" alt="big-logo"/>
        <img id="small-logo" src="http://lorempixel.com/100/50/" alt="small-logo" /> -->
        </image>
    </header>
    <nav id="myMobilenav" class="mobilenav">
            <a id="close-nav" href="#" class="closebtn" onclick="closeNav(); closeSubNav()">&times;</a>
            <p class="sub-navlist">    
                <a onclick="getId(this); openOrClose();" id="home-section" <?php if($page == 'home'){  echo 'class="active"';}?> href="#">Home</a>
                <div class="float-container">
                    <a class="subnav1" href="<?= $linkpath ?>index.php">Main Page</a>
                    <a class="subnav1" href="<?= $linkpath ?>beginner/commandline.php">The Command Line</a>
                    <a class="subnav1" href="<?= $linkpath ?>beginner/introduction.php">Introduction</a>
                    <a class="subnav1" href="<?= $linkpath ?>beginner/commands.php">Basic Commands</a>
                </div>
            </p><!-- end <div class="sub-navlist"> -->
            <p class="sub-navlist">
                <a onclick="getId(this); openOrClose();" id="intermediate-section" <?php if($page == 'intermediate'){  echo 'class="active"';}?> href="#">Intermediate</a>
                <div class="float-container">
                    <a class="subnav2" href="<?= $linkpath ?>intermediate/intermediate.php">Intermediate Home</a>
                    <a class="subnav2" href="<?= $linkpath ?>intermediate/modal.php">Modal Editing</a>
                    <a class="subnav2" href="<?= $linkpath ?>intermediate/modes.php">Vi Modes</a>
                    <a class="subnav2" href="<?= $linkpath ?>intermediate/modes.php">Placeholder</a>
                </div>
            </p><!-- END <div class="sub-navlist> -->
            <p class="sub-navlist">
                <a onclick="getId(this); openOrClose();" id="advanced-section" <?php if($page == 'advanced'){ 
                echo 'class="active"';}?> href="#">Advanced</a>
                <div class="float-container">
                    <a class="subnav3" href="<?= $linkpath ?>advanced/advanced.php">Advanced Home</a>
                    <a class="subnav3" href="<?= $linkpath ?>advanced/plugins.php">Plugins</a>
                    <a class="subnav3" href="<?= $linkpath ?>advanced/review.php">Command Refresher</a>
                    <a class="subnav3" href="<?= $linkpath ?>intermediate/modes.php">Placeholder</a>
                </div>
            </p><!-- END <div class="sub-navlist> -->
            <p><a <?php if($page == 'test'){ 
                echo 'class="active"';}?> href="<?= $linkpath ?>test.php">Test of Skill</a></p>
            <p><a <?php if($page == 'glossary'){ 
                echo 'class="active"';}?> href="<?= $linkpath ?>glossary.php">Glossary</a></p>
            <p><a <?php if($page == 'resources'){ 
                echo 'class="active"';}?> href="<?= $linkpath ?>resources.php">Resources</a></p>
            <p><a <?php if($page == 'about'){ 
                echo 'class="active"';}?> href="<?= $linkpath ?>about.php">About</a></p>
    </nav>
    <nav id="dropbar" onload="setActive();">
	  <ul>
	    <li><a href="<?= $linkpath ?>">Home</a></li>
	    <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">Beginner &#9660;</a>
	      <div class="dropdown-content" id="beginner">
	        <a href="<?= $linkpath ?>beginner/commandline.php">The Command Line</a>
	        <a href="<?= $linkpath ?>beginner/introduction.php">Introduction</a>
            <a href="<?= $linkpath ?>beginner/commands.php">Basic Commands</a>
	      </div>
	    </li>
	    <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">Intermediate &#9660;</a>
	      <div class="dropdown-content" id="intermediate">
	        <a href="<?= $linkpath ?>intermediate/intermediate.php">Intermediate Home</a>
            <a href="<?= $linkpath ?>intermediate/modal.php">Modal Editing</a>
            <a href="<?= $linkpath ?>intermediate/modes.php">Vi Modes</a>
	      </div>
	    </li>
	    <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">Advanced &#9660;</a>
	      <div class="dropdown-content" id="advanced">
	        <a href="<?= $linkpath ?>advanced/advanced.php">Advanced Home</a>
            <a href="<?= $linkpath ?>advanced/plugins.php">Plugins</a>
            <a href="<?= $linkpath ?>advanced/review.php">Command Refresher</a>
	      </div>
	    </li>
          <li class="dropdown"><a href="<?= $linkpath ?>test.php">Test of Skill</a></li>
          <li class="dropdown"><a href="<?= $linkpath ?>glossary.php">Glossary</a></li>
          <li class="dropdown"><a href="<?= $linkpath ?>resources.php">Resources</a></li>
          <li class="dropdown"><a href="<?= $linkpath ?>about.php">About</a></li>
          <form id="searchbox">
        <script src="<?= $relpath?>assets/scripts/search.js"></script>
        <input type="search" placeholder="Search this site.." id="searchb" />
        <input type="button" value="Search" class="btn-search" onclick="search();" />
    </form>
	  </ul>
  </nav>