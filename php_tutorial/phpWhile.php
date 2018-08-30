<?php $page='18'; include '../header.php'; ?>

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
			<h1>PHP While Loop</h1>
 				 <a href="phpIfElse.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="phpDoWhile.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            
                      
       <p>While loops are the simplest type of loop in PHP. They behave like a C counterparts. The basic form of <i>While</i>:</p>
                        <div class="w3-panel w3-card-2 w3-light-grey">
        <div class="w3-code htmlHigh notranslate">
while(expr)<br>
            &nbsp;&nbsp;statement
        </div>        
    </div>
            <p>It tells PHP to execute the nested statement(s) repetedly, as long as the <i>while</i>  expression evaluates TRUE. <br>The expression is checked every time in the beginning of the loop, the execution will not stop until the end of the iteration. Sometime, if <i>while</i> expression is FALSE from the beginning the nested statements will not run once.</p>
    <div class="w3-panel w3-card-2 w3-light-grey">
        <div class="w3-code htmlHigh notranslate">
while(expr)<br>
            &nbsp;&nbsp;statement<br>
            &nbsp;&nbsp;...<br>
            endwhile;<br>
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

            <p>Let's see example:</p>
            <div class="w3-panel w3-card-2 w3-light-grey">
        <div class="w3-code htmlHigh notranslate">
&lt;?php<br><br>


&nbsp;$i = 1;<br>
&nbsp;while ($i <= 10) {<br>
&nbsp;echo $i++;  /* the printed value would be<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$i before the increment<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(post-increment) */<br>
&nbsp;}<br><br>
?&gt;
        </div>        
    </div> 
            <h3>Output:</h3>
            <div style="width:100%;height:100px;" class="w3-border">
            
 <?php
/* example 1 */

$i = 1;
while ($i <= 10) {
    echo $i++;  /* the printed value would be
                   $i before the increment
                   (post-increment) */
}
    ?>
            </div>
            
				    <a href="phpIfElse.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="phpDoWhile.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
  					
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


