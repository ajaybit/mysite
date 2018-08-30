<?php $page='19'; include '../header.php'; ?>

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
			<h1>PHP Do While Loop</h1>
 				 <a href="phpWhile.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="phpFor.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            
                      
                    
            <p><i>do-while</i> are very similar to <i>while</i> loops, excepts it check expression at the end of iteration  insted of check the expression in the beginning. The main difference between <i>while</i> and <i>do-while</i> is  the first iteration of <i>do-while</i> loop is guarenteed to run(the expression is only checked at the end of the iteration).<br><br></p>
            <h3>Syntax</h3>
    <div class="w3-panel w3-card-2 w3-light-grey">
        <div class="w3-code htmlHigh notranslate">

            &lt;php<br><br>
            &nbsp;$i = 0;<br>
            &nbsp;do{<br>
            &nbsp;&nbsp;echo $i;<br>
            &nbsp;}&nbsp;while($i>0);<br><br>
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

            <p>The above loop will run one time exectly, since after the first iteration, when true expression is checked.<br><br>Let's see example:</p>
    <div class="w3-panel w3-card-2 w3-light-grey">
        <div class="w3-code htmlHigh notranslate">
&lt;?php<br><br>
    $i = 1;<br>
do {<br>
    if ($i < 5) {<br>
        echo "i is not big enough";<br>
        break;<br>
    }<br>
    $i *= $factor;<br>
    if ($i < $minimum_limit) {<br>
        break;<br>
    }<br>
   echo "i is ok";<br><br>

    /* process i */<br><br>

} while (0);<br><br>
?&gt;
        </div>        
    </div>  
            
<h3>Output:</h3>
            <div style="width:100%;height:100px;" class="w3-border">
            
            <?php
    $i = 1;
do {
    if ($i < 5) {
        echo "i is not big enough";
        break;
    }
    $i *= $factor;
    if ($i < $minimum_limit) {
        break;
    }
   echo "i is ok";

    /* process i */

} while (0);
?>
            </div>            
            
         
				    <a href="phpWhile.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="phpFor.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
  					
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


