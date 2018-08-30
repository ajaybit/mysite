<?php $page='29'; include '../header.php'; ?>

<div class="w3-container w3-col ">
<div id="leftSideMenu" class="w3-quarter ">
<?php include 'phpMenu.php' ?>
</div>

<div class="w3-half contant" style="border:.1px solid white ;" id="font">
		<div >
			<h1>Variable Argument Function</h1>
 				 <a href="phpDefaultArgument.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="phpRecursiveFunction.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            
            
            <p>If you use 3 ellipses(dots) before the argumant name then it can pass 0, 1 or "n" numbers of the arguments in in the function.<br><br>Let's see an example of variable length argument function:</p>
    <div class="w3-panel w3-card-2 w3-light-grey">
<div class="w3-code htmlHigh notranslate">

&lt;?php<br> <br> 
&nbsp;function add(...$numbers) {<br>  
&nbsp;    $sum = 0;  <br>
&nbsp;    foreach ($numbers as $n) { <br> 
&nbsp;        $sum += $n; <br> 
&nbsp;    } <br> 
&nbsp;    return $sum;<br>  
&nbsp;}  <br>
  
&nbsp;echo add(1, 2, 3, 4);<br><br>  
?&gt;
</div>        
    </div>
<h3>Output</h3>
<div style="width:100%;height:100px;" class="w3-border">
<?php

 function add(...$numbers) {
  $sum = 0; 
  foreach ($numbers as $n) { 
  $sum += $n; 
  } 
  return $sum;
 } 
 echo add(1, 2, 3, 4);

?>    
           
  
</div><br>
    
				    <a href="phpDefaultArgument.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="phpRecursiveFunction.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
<!--CONTANT AREA ENDS-->
			</div>			
	</div>	
		<div class="w3-quarter" style="border: 1px solid white;"  >		
			<?php include '../rightSideBar.php' ?>
	</div>
	
		
	


		

	




<footer style="border: 1px solid white;float: left; width: 100%" ><?php include '../footer.php' ?></footer>


