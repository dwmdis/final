    <span id="click-here" onclick="openNav()">Click Here!</span>
    <header>
        <image id="logos">
        <!-- <img id="big-logo" src="http://lorempixel.com/400/200/" alt="big-logo"/>
        <img id="small-logo" src="http://lorempixel.com/100/50/" alt="small-logo" /> -->
        </image>
        <form id="search-box">
            <input type="search" placeholder="Search this site..." />
            <input type="submit" value="Search" class="btn-search"  />
        </form>
    </header>
    <nav id="myMobilenav" class="mobilenav">
            <a id="close-nav" href="#" class="closebtn" onclick="closeNav(); closeSubNav()">&times;</a>
            <div class="sub-navlist">    
                <a onclick="closeSubNav(); getId(this); openSubNav()" id="home-section" <?php if($page == 'home'){  echo 'class="active"';}?> href="#">Home</a>
                <div class="float-container">    
                    <a class="subnav1" href="index.php">Home Sub1</a>
                    <a class="subnav1" href="#">Home Sub2</a>
                    <a class="subnav1" href="#">Home Sub3</a>
                </div>
            </div><!-- end <div class="sub-navlist"> -->
            <div class="sub-navlist">
                <a onclick="closeSubNav(); getId(this); openSubNav()" id="intermediate-section" <?php if($page == 'intermediate'){  
                echo 'class="active"';}?> href="#">Intermediate</a>
                <div class="float-container">
                    <a class="subnav2" href="intermediate.php">Intermediate Sub1</a>
                    <a class="subnav2" href="#">Intermediate Sub2</a>
                    <a class="subnav2" href="#">Intermediate Sub3</a>
                </div>
            </div><!-- END <div class="sub-navlist> -->
            <div class="sub-navlist">
                <a onclick="closeSubNav(); getId(this); openSubNav()" id="advanced-section" <?php if($page == 'advanced'){ 
                echo 'class="active"';}?> href="#">Advanced</a>
                <div class="float-container">
                    <a class="subnav3" href="advanced.php">Advanced Sub1</a>
                    <a class="subnav3" href="#">Advanced Sub2</a>
                    <a class="subnav3" href="#">Advanced Sub3</a>
                </div>
            </div><!-- END <div class="sub-navlist> -->
            <a <?php if($page == 'about'){ 
                echo 'class="active"';}?> href="#">About</a>
    </nav>
    <nav id="myDesktopNav" class="desktopNav">
      <ul id="desktop">
        <li>Home</li>
        <li>Beginner</li>
        <li>Intermediate</li>
        <li>Advanced</li>
      </ul>
    </nav>