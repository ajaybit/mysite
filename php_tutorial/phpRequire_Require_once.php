<?php $page='23'; include '../header.php'; ?>

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
			<h1>PHP Requires</h1>
 				 <a href="phpInclude&Include_once.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="phpFunctions.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            <h1>require</h1>
            <p>require is identical to include except upon failure it will also produce a fatal E_COMPILE_ERROR level error. In other words, it will halt the script whereas include only emits a warning (E_WARNING) which allows the script to continue</p>
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

&nbsp;require 'vars.php';<br>

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
            <h1>require_once</h1>
            <p>The require_once statement is identical to require except PHP will check if the file has already been included, and if so, not include (require) it again</p>
            
            
				    <a href="phpInclude&Include_once.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="phpFunctions.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
  					
  					
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


