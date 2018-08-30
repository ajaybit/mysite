<?php $page='11'; include '../header.php'; ?>

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
			<h1>PHP Variables</h1>
 				 <a href="phpObjects.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="phpConstant.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            <p>Variable is a symbol or a name that stands for value. They are used to store values such as numeric values, characters, character strings so that they can be used in any part of the program.</p>
            <h3>Declaration PHP Variables</h3>
            <p>All Variables in PHP are starts with doller($) sign followed by the name of variable.<br><br>A variable will be valid if it is stars with a letter(A-Z, a-z) or Underscore(_), followed by any number of letters, numbers, or underscore.<br><br>If the name of variable is more than one word than the two or more words can be seperated by underscore(For example $employee_name), PHP also follow camel rule of variable declaration(For example $EmployeeName), This is the best paractice to write name one this sequence insted of ($employeename).</p>
            <div class="w3-panel w3-pale-yellow w3-leftbar w3-border-yellow">
        <p style="line-height: 28px"><strong>NOTE</strong>:'$' is a special variable that can never be assigned.</p>
      </div>
            <h3>Valid or Invalid variables</h3>
       <div class="w3-panel w3-card-2 w3-light-grey">
        <div class="w3-code htmlHigh notranslate">
                &lt;?php  <br><br>
                &nbsp;$abc = 'Welcome';  //valid  <br>
                &nbsp;$Abc = 'W3resource.com'; //valid  <br>
                &nbsp;$9xyz = 'Hello world';  //invalid; starts with a number <br> 
                &nbsp;$_xyz = 'Hello world';  //valid; starts with an underscore <br> 
                &nbsp;$_9xyz = 'Hello world';  //valid  <br>
                &nbsp;$aäa = 'Hello world';  //valid; 'ä' is (Extended) ASCII 228.  <br><br>
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

        <h3>Remind that PHP variables are case-sensitive</h3>     
            <p>Let's see this examples:</p>
      <div class="w3-panel w3-card-2 w3-light-grey">
        <div class="w3-code htmlHigh notranslate">
                &lt;?php  <br><br>
                    $var="Hello World!";<br><br>
                    
                    echo "$var";&nbsp;//call of variable in same case<br>
                    echo "$VAR";&nbsp;//call of variable in uppercase<br><br>
                ?&gt;
        </div>        
    </div>
            <h3>Output:</h3>
            <div style="width:100%;height:100px;" class="w3-border">
            <?php 

$var="Hello World!";

echo "$var"; //call of variable in same case


?> 
            </div>
            <h2>Loosely Type language</h2>
            <p>In langueges like C, C++ and Java the programmer must declare the name and type of the variable before use it. In PHP there is no boundation to declare type of variable and As a result, a variable can change the type of its values as much as well.<br><br>As previously mentioned you that PHP automatically convert the one type of variable to another if it requires. In fact $height is float and $weidth is integer number. </p>
<div class="w3-panel w3-card-2 w3-light-grey">
        <div class="w3-code htmlHigh notranslate">
                &lt;?php  <br><br>
                    &nbsp;$height = 3.5; <br> 
                    &nbsp;$width = 4;  <br>
                    &nbsp;$area=$height*$width;  <br>
                    &nbsp;echo "Area of the rectangle is : $area"; <br><br>
                ?&gt;
        </div>        
    </div>
            <h2>PHP Variable variables</h2>
            <p>PHP provides a special property on variables You can use a variable as another variable this is great technique to define helical variable approach. <br><br>Let's see this example:</p>
   <div class="w3-panel w3-card-2 w3-light-grey">
        <div class="w3-code htmlHigh notranslate">
                &lt;?php  <br><br>
                    &nbsp;$a = 'Hello';<br>
                    &nbsp;$$a = 'world';<br><br>
                    &nbsp;echo "$a ${$a}";<br><br>
                    
            
                ?&gt;
        </div>        
    </div>
            
        <h3>Output:</h3>
            <div style="width:100%;height:100px;" class="w3-border">
            <?php 
                    $a = 'Hello';
                    $$a = 'world';
                    echo "$a ${$a}";

?> 
            </div>
<br>
            

				    <a href="phpArray.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="phpConstant.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
  					
  					
  					
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


