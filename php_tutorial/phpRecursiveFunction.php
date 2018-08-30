<?php $page='30'; include '../header.php'; ?>

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
			<h1>Recursive Function</h1>
 				 <a href="phpVariableArgument.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="phpFileHandling.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            
            <p>The call of function within function is called recursive function or recursion. PHP also support recursion like C/C++.<br><br>Let's see example of factorial of number using recursion:</p>
            
 <div class="w3-panel w3-card-2 w3-light-grey">
<div class="w3-code htmlHigh notranslate">

&lt;?php <br><br>   
&nbsp;function factorial($n)<br>    
&nbsp;{  <br>  
&nbsp;    if ($n < 0) <br>   
&nbsp;        return -1; /*Wrong value*/<br>    
&nbsp;    if ($n == 0) <br>   
&nbsp;        return 1; /*Terminating condition*/ <br>   
&nbsp;    return ($n * factorial ($n -1));  <br>  
&nbsp;}  <br>  
    
&nbsp;echo factorial(5); <br><br>   
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

<h3>Output</h3>
<div style="width:100%;height:100px;" class="w3-border">
<?php 

 function factorial($n)
 { 
  if ($n < 0) 
  return -1; /*Wrong value*/
  if ($n == 0) 
  return 1; /*Terminating condition*/ 
  return ($n * factorial ($n -1)); 
 } 
 echo factorial(5); 

?>   
           
  
</div><br>

    
				    <a href="phpVariableArgument.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="phpFileHandling.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
  					
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


