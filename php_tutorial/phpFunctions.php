<?php $page='24'; include '../header.php'; ?>

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
			<h1>PHP Functions</h1>
 				 <a href="phpRequire&Require_once.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="phpParameterizedFunction.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            
            
            <p>PHP Function is a peace of code that can be reuse many times. It can take input as argument and return value/output. Actually there are thousands of built in functions in PHP.<br><br>Some advantages of function are listed below:</p>
            <ul>
                <li><strong>Code Reusability</strong>:Like any other programming langusge, PHP functions are defined only once and can invoke many times.</li>
                <li><strong>Less Code</strong>:As function can invoke many times this means that there is no need to write same logic many times so, you can write logic once and reuse it.</li>
                <li><strong>Easy to understand</strong>:Due to the separation in logic. So, it is easy to understand the flow of application because every logic is divided into different functions.</li>
            </ul>
            <h2>User-Defined Functions</h2>
            <p>Functions that defined by user called User-Defined Functions. PHP functions can define and call very easily.<br><br>Let's see the syntax of user-defined function:</p>
            <div class="w3-panel w3-card-2 w3-light-grey">
      
        <div class="w3-code htmlHigh notranslate">
function function_name(){<br>
            &nbsp;//put your code here...<br>
            }
        </div>        
    </div>
            <div class="w3-panel w3-pale-yellow w3-leftbar w3-border-yellow">
        <p style="line-height: 28px"><strong>NOTE</strong>: Function name must be start with lettr and underscore. It can not be start with number and special symbol.</p>
      </div>
<div class="w3-panel w3-card-2 w3-light-grey">
      
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br><br>
            &nbsp;function hello(){<br>
                &nbsp;echo "Hello World!";<br>
            &nbsp;}<br><br>
            hello();<br><br>
            ?&gt;
        </div>        
    </div>
            <h3>Output:</h3>
            <div style="width:100%;height:50px;" class="w3-border">
            
<?php

 function hello(){
 echo "Hello World!";
 }

hello();

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


            <h2>Function Arguments</h2>
            <p>We can pass the argument in php function, argument may be value, string or array which seperated by comma.<br><br>Let's see the example to pass single argument in function:</p>
<div class="w3-panel w3-card-2 w3-light-grey">
      
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br><br>
&nbsp;function sayName($name){<br>  
&nbsp;echo "What is your $name&lt;br/&gt;";<br>  
&nbsp;}<br>  
&nbsp;sayName("Mac");<br>  
&nbsp;sayName("Martin");<br><br>  
  

            ?&gt;
        </div>        
    </div>
            <h3>Output:</h3>
            <div style="width:100%;height:50px;" class="w3-border">
            
<?php

 function sayName($name){
 echo "My name is $name<br/>";
 }
 sayName("Mac");
 sayName("Martin");

?>
            </div>
            <p>Let's see the example to pass two argument in function:</p>
            <div class="w3-panel w3-card-2 w3-light-grey">
      
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br><br>
&nbsp;function NameAge($name,$age){  <br>
&nbsp;echo "$name, you are $age years old&lt;br/&gt;";  <br>
&nbsp;}<br>  
&nbsp;NameAge("Mac",19);<br>  
&nbsp;NameAge("Martin",24);<br><br>
            ?&gt;
        </div>        
    </div>
            <h3>Output:</h3>
            <div style="width:100%;height:50px;" class="w3-border">
            
<?php

function NameAge($name, $age){
    echo "$name, you are $age old<br/>";
}
                NameAge("Mac",19);
                NameAge("Martin",24);
?>
            </div>
            
            
				    <a href="phpRequire&Require_once.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="phpParameterizedFunction.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
  					
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


