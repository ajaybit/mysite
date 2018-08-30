<?php $page='28'; include '../header.php'; ?>

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
			<h1>Default Argument Value Function</h1>
 				 <a href="phpCallbyReference.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="phpVariableArgument.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            
            
            <p>PHP allow you to use default argument such as C++. If you do not pass any value to the function, it will use default argument value. Default argument value is first define to the function if in any case you want to use this value you can easily make void call of the function.<br><br>Let's see above example:</p>
         <div class="w3-panel w3-card-2 w3-light-grey">
            <div class="w3-code htmlHigh notranslate">

&lt;?php  <br><br>
&nbsp;function Hello($name="Mac"){ <br> 
&nbsp;echo "Hello $name&lt;br/&gt;";  <br>
&nbsp;}  <br>
&nbsp;Hello("Martin"); <br> 
&nbsp;Hello();//passing no value  <br>
&nbsp;Hello("Ajay"); <br> <br>
?&gt; 
        </div>        
    </div>
            <h3>Output</h3>
<div style="width:100%;height:100px;" class="w3-border">
            
<?php 

 function Hello($name="Mac"){ 
 echo "Hello $name<br/>"; 
 } 
 Hello("Martin"); 
 Hello();//passing no value 
 Hello("Ajay"); 

?>  
            </div>
            <div class="w3-panel w3-pale-yellow w3-leftbar w3-border-yellow">
        <p style="line-height: 28px"><strong>NOTE</strong>:The concept of default argument value with call by reference was used since PHP 5.</p>
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


<p>Let's take another example to pass two default argument values:</p>
<div class="w3-panel w3-card-2 w3-light-grey">
<div class="w3-code htmlHigh notranslate">

&lt;?php <br><br>      
&nbsp;function greeting($first="Mac",$last="Martin"){ <br>   
&nbsp;echo "Greeting: $first $last&lt;br/&gt;";  <br>  
&nbsp;}  <br>  
&nbsp;greeting(); <br> 
&nbsp;greeting("Ajay");  <br>
&nbsp;greeting("Raj","Kumar"); <br> <br>    
?&gt;
</div>        
    </div>
<h3>Output</h3>
<div style="width:100%;height:100px;" class="w3-border">
    
<?php 

 function greeting($first="Mac",$last="Martin"){ 
 echo "Greeting: $first $last<br/>"; 
 } 
 greeting(); 
 greeting("Ajay"); 
 greeting("Raj","Kumar"); 

?>           
  
</div>
<div class="w3-panel w3-card-2 w3-light-grey">
<div class="w3-code htmlHigh notranslate">

&lt;?php  <br><br>
&nbsp;function add($n1=10,$n2=10){ <br> 
&nbsp;$n3=$n1+$n2;  <br>
&nbsp;echo "Addition is: $n3&lt;br/&gt;";<br>  
&nbsp;} <br> 
&nbsp;add();  <br>
&nbsp;add(20); <br> 
&nbsp;add(40,40); <br> <br>
?&gt;  
</div>        
    </div>
<h3>Output</h3>
<div style="width:100%;height:100px;" class="w3-border">
<?php 

 function add($n1=10,$n2=10){ 
 $n3=$n1+$n2; 
 echo "Addition is: $n3<br/>";
 } 
 add(); 
 add(20); 
 add(40,40); 

?>    
           
  
</div>
<br>
    
    
				    <a href="phpCallbyReference.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="phpVariableArgument.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
  					
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


