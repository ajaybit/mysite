<?php $page='22'; include '../header.php'; ?>

<div class="w3-container w3-col ">
<div id="leftSideMenu" class="w3-quarter ">
<?php include 'phpMenu.php' ?>
</div>

<div class="w3-half contant" style="border:.1px solid white ;" id="font">

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- responsive1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4645356742269640"
     data-ad-slot="7954664539"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>


		<div >
			<h1>PHP Includes</h1>
 				 <a href="phpJumpingtatements.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="phpRequire&Require_once.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            <h1>include</h1>
            <p>The <i>include</i> statement is used to include and execute the specific file.<br><br>Thew files are include based on file path, of if none of given<br><br>When a file is included, the code it contains inherited to the file where include statement is used or call the file. However, all functions and classes defined in the included file have global scope.<br><br>Let's see example: </p>
  <div class="w3-panel w3-card-2 w3-light-grey">
      <h3>vars.php</h3>
        <div class="w3-code htmlHigh notranslate">
&lt;?php<br><br>

&nbsp;$color = 'green';<br>
&nbsp;$fruit = 'apple';<br>

?&gt;
        </div>        
    </div> 
    
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- SquireBox -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-4645356742269640"
     data-ad-slot="4162882890"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

  
<div class="w3-panel w3-card-2 w3-light-grey">
      <h3>test.php</h3>
        <div class="w3-code htmlHigh notranslate">
&lt;?php<br><br>
            
&nbsp;echo "A $color $fruit";&nbsp; // A<br>

&nbsp;include 'vars.php';<br>

&nbsp;echo "A $color $fruit";&nbsp; // A green apple<br><br>

?&gt;
        </div>        
    </div> 
            <h3>Output:</h3>
            <div style="width:100%;height:120px;" class="w3-border">
            
<?php

 $color = 'green';
 $fruit = 'apple';

    echo "A $color $fruit";
    ?>
            </div>
      
            <h1>include_once</h1>
            <p>The <i>include_once</i> statement is very similar to <i>include</i> but only difference being that if the code from a file has already been included, it will not be include again, and <i>include_once</i> returns TRUE. As the name suggests, the file will be include just once.</p>
            <h3>Syntax</h3>
    <div class="w3-panel w3-card-2 w3-light-grey">
      
        <div class="w3-code htmlHigh notranslate">
&lt;?php<br><br>

            &nbsp;include_once "a.php";<br><br>

?&gt;
        </div>        
    </div>
            
            
            
				    <a href="phpJumpingtatements.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="phpRequire&Require_once.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
  					
  					<div class="w3-hide-small w3-hide-medium">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- FooterBanner -->
<ins class="adsbygoogle"
     style="display:inline-block;width:650px;height:200px"
     data-ad-client="ca-pub-4645356742269640"
     data-ad-slot="4521975542"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>


<!--CONTANT AREA ENDS-->
			</div>			
	</div>	
		<div class="w3-quarter" style="border: 1px solid white;"  >		
			<?php include '../rightSideBar.php' ?>
	</div>
	
		
	


		

	




<footer style="border: 1px solid white;float: left; width: 100%" ><?php include '../footer.php' ?></footer>


