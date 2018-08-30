<?php $page='25'; include '../header.php'; ?>

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
			<h1>Parameterized Function</h1>
 				 <a href="phpFunctions.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="phpCallbyValue.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            
        <p>Parameterized functions are the functions that contains parameters. You can pass any number of parameters inside a function. These passed parameters acts as variable inside function.<br><br>Let's understand parameterized functions with example</p> 
    <div class="w3-panel w3-card-2 w3-light-grey">
      
        <div class="w3-code htmlHigh notranslate">

            &lt;?php<br><br>  
        &nbsp;&nbsp;//Adding two numbers<br>  
        &nbsp; function add($x, $y) {<br>  
        &nbsp;    $sum = $x + $y;<br>  
        &nbsp;    echo "Sum of two numbers is = $sum &lt;br&gt;&lt;br&gt;";<br>  
        &nbsp; }<br>   
        &nbsp; add(467, 943);<br><br>  
  
        &nbsp;&nbsp; //Subtracting two numbers<br>  
        &nbsp; function sub($x, $y) { <br> 
        &nbsp;    $diff = $x - $y;<br>  
        &nbsp;    echo "Difference between two numbers is = $diff";<br>  
        &nbsp; }<br>   
        &nbsp; sub(943, 467);<br><br>  
      ?&gt;  
        </div>        
    </div>
             <h3>Output:</h3>
            <div style="width:100%;height:100px;" class="w3-border">
            
<?php  
        //Adding two numbers  
         function add($x, $y) {  
            $sum = $x + $y;  
            echo "Sum of two numbers is = $sum <br><br>";  
         }   
         add(467, 943);  
  
         //Subtracting two numbers  
         function sub($x, $y) {  
            $diff = $x - $y;  
            echo "Difference between two numbers is = $diff";  
         }   
         sub(943, 467);  
      ?>  
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

            <p>Addition and subtraction with dynamic values</p>
<div class="w3-panel w3-card-2 w3-light-grey">
      
        <div class="w3-code htmlHigh notranslate">

&lt;?php<br><br>  
&nbsp;&nbsp;//add() function with two parameter  <br>
&nbsp;function add($x,$y)    <br>
&nbsp;{  <br>
&nbsp;$sum=$x+$y;<br>  
&nbsp;echo "Sum = $sum &lt;br&gt;&lt;br&gt;";<br>  
&nbsp;}<br>  
&nbsp;&nbsp;//sub() function with two parameter<br>  
&nbsp;function sub($x,$y)<br>    
&nbsp;{ <br> 
&nbsp;$sub=$x-$y;<br>  
&nbsp;echo "Diff = $sub &lt;br&gt;&lt;br&gt;"; <br> 
&nbsp;}<br>  
&nbsp;&nbsp;//call function, get  two argument through input box and click on add or sub button<br>  
&nbsp;if(isset($_POST['add']))<br>  
&nbsp;{<br>  
&nbsp;&nbsp;//call add() function  <br>
&nbsp; add($_POST['first'],$_POST['second']);<br>  
&nbsp;}<br>     
&nbsp;if(isset($_POST['sub']))<br>  
&nbsp;{<br>  
&nbsp;&nbsp;//call add() function<br>  
&nbsp;sub($_POST['first'],$_POST['second']);<br>  
&nbsp;}<br><br>  
?&gt;
  
        </div>        
    </div>  
            <h3>Output:</h3>
            <div style="width:100%;height:200px;" class="w3-border">
            
<?php  
//add() function with two parameter  
function add1($x,$y)    
{  
$sum=$x+$y;  
echo "Sum = $sum <br><br>";  
}  
//sub() function with two parameter  
function sub1($x,$y)    
{  
$sub=$x-$y;  
echo "Diff = $sub <br><br>";  
}  
//call function, get  two argument through input box and click on add or sub button  
if(isset($_POST['add']))  
{  
//call add() function  
 add($_POST['first'],$_POST['second']);  
}     
if(isset($_POST['sub']))  
{  
//call add() function  
sub($_POST['first'],$_POST['second']);  
}  
?>  
<form method="post">  
Enter first number: <input type="number" name="first"/><br><br>  
Enter second number: <input type="number" name="second"/><br><br>  
<input type="submit" name="add" value="ADDITION"/>  
<input type="submit" name="sub" value="SUBTRACTION"/>  
</form>
            </div>
            
            
				    <a href="phpFunctions.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="phpCallbyValue.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
  					
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


