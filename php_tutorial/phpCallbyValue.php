<?php $page='26'; include '../header.php'; ?>

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
			<h1>Call by Value</h1>
 				 <a href="phpParameterizedFunction.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="phpCallbyReference.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            
            
            <p>In case of PHP call by value, Actual value is not modified if it is modified inside function.<br><br>Consider the exmples that help in understending call by value example:</p>
            <div class="w3-panel w3-card-2 w3-light-grey">
      
        <div class="w3-code htmlHigh notranslate">

           &lt;?php<br><br>  
            &nbsp;function adder($str2)<br>  
            &nbsp;{<br>  
            &nbsp;    $str2 .= 'Call By Value';<br>  
            &nbsp;}<br>  
            &nbsp;$str = 'Hello ';<br>  
            &nbsp;adder($str);<br>  
            &nbsp;echo $str;<br><br>  
            ?&gt;
        </div>        
    </div>
            <h3>Output</h3>
<div style="width:100%;height:100px;" class="w3-border">
            
<?php  
function adder($str2)  
{  
    $str2 .= 'Call By Value';  
}  
$str = 'Hello, Welcome to php Call by value. ';  
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

    <div class="w3-panel w3-card-2 w3-light-grey">
      
        <div class="w3-code htmlHigh notranslate">

&lt;?php<br><br>  
&nbsp;function increment($i)<br>                          
&nbsp;{ <br> 
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
function increment($i)  
{  
    $i++;  
}  
$i = 10;  
increment($i);  
echo $i;  
?>  
            </div>        
    <br>        
            
				    <a href="phpParameterizedFunction.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="phpCallbyReference.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
  					
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


