<?php $page='17'; include '../header.php'; ?>

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
			<h1>PHP If-Else/Else-If</h1>
 				 <a href="phpElse.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="phpWhile.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            
                      
        <p><i>else-if</i> as its name suggests, it is a combination of <i>if</i> and <i>else</i>, it extends an <i>if</i> statement to execute the different in case if orignal expression evaluates FALSE<br><br>Let's see example:</p>
             <div class="w3-panel w3-card-2 w3-light-grey">
        <div class="w3-code htmlHigh notranslate">
         &lt;?php<br><br>
            &nbsp;$a="10";<br>
            &nbsp;$b="12";<br><br>
            &nbsp;if ($a > $b) {<br>
            &nbsp;    echo "a is bigger than b";<br>
            &nbsp;} elseif ($a == $b) {<br>
            &nbsp;    echo "a is equal to b";<br>
            &nbsp;} else {<br>
            &nbsp;    echo "a is smaller than b";<br>
            &nbsp;}<br><br>
          
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

            <h3>Output:</h3>
            <div style="width:100%;height:100px;" class="w3-border">
            
<?php

 $a="10";
 $b="12";

 if ($a > $b) {
  echo "a is bigger than b";
 } elseif ($a == $b) {
  echo "a is equal to b";
 } else {
  echo "a is smaller than b";
 }

?>            </div>
            
  <div class="w3-panel w3-pale-yellow w3-leftbar w3-border-yellow">
        <p style="line-height: 28px"><strong>NOTE</strong>:<i>elseif</i> and <i>else if</i> will only be considered exaxtly the same when using curly braces as in the above example.</p>
      </div>        
            <div class="w3-panel w3-card-2 w3-light-grey">
        <div class="w3-code htmlHigh notranslate">
&lt;?php<br><br>

&nbsp;&nbsp;/* Incorrect Method: */<br>
&nbsp;if ($a > $b):<br>
&nbsp;    echo $a." is greater than ".$b;<br>
&nbsp;else if ($a == $b):&nbsp; // Will not compile.<br>
&nbsp;    echo "The above line causes a parse error.";<br>
&nbsp; endif;<br><br>


&nbsp;&nbsp;/* Correct Method: */<br>
&nbsp;if ($a > $b):<br>
&nbsp;    echo $a." is greater than ".$b;<br>
&nbsp; elseif ($a == $b):&nbsp; // Note the combination of the words.<br>
&nbsp;    echo $a." equals ".$b;<br>
&nbsp; else:<br>
&nbsp;    echo $a." is neither greater than or equal to ".$b;<br>
&nbsp; endif;<br><br>

?&gt;
        </div>        
    </div>
            
            
				    <a href="phpElse.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="phpWhile.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
  					
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


