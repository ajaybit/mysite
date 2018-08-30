<?php $page='27'; include '../header.php'; ?>

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
			<h1>Call by Reference</h1>
 				 <a href="phpCallbyValue.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="phpDefaultArgument.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            
            
                <p>In call by reference, actual value is modified if it is modified inside the function. In such case, you need to use &(ampersand) symbol with formal arguments.<br><br>Let's see this example, variable $string is passed to the function(adder) where it is concatenated with 'Call by reference' string.</p>
            <div class="w3-panel w3-card-2 w3-light-grey">
            <div class="w3-code htmlHigh notranslate">

&lt;?php<br><br>  
&nbsp;function adder(&$string2)<br>  
&nbsp;{<br>  
&nbsp;    $string2 .= 'Call By Reference';<br>  
&nbsp;}<br>  
&nbsp;$string = 'This is ';<br>  
&nbsp;adder($string);<br>  
&nbsp;echo $string;<br><br>  
?&gt;  
        </div>        
    </div>
 <h3>Output</h3>
<div style="width:100%;height:100px;" class="w3-border">
            
<?php  
function adder(&$str2)  
{  
    $str2 .= 'Call By Reference';  
}  
$str = 'This is ';  
adder($str);  
echo $str;  
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

    <p>Let's see another example:</p>
  <div class="w3-panel w3-card-2 w3-light-grey">

      <div class="w3-code htmlHigh notranslate">

&lt;?php<br><br>  
&nbsp;function increment(&$i) <br> 
&nbsp;{<br>  
&nbsp;    $i++;<br>  
&nbsp;}<br>  
&nbsp;$i = 10;<br>  
&nbsp;increment($i);<br>  
&nbsp;echo $i;<br><br>  
?&gt;
      </div>        
    </div>
<h3>Output</h3>
<div style="width:100%;height:100px;" class="w3-border">
            
<?php

 function increment(&$i) 
 {
  $i++;
 }
 $i = 10;
 increment($i);
 echo $i;

?>
            </div> 
    
    
    
				    <a href="phpCallbyValue.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="phpDefaultArgument.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
  					
  					
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


