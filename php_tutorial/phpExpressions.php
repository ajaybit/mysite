<?php $page='13'; include '../header.php'; ?>
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
			<h1>PHP Expressions</h1>
 				 <a href="phpConstant.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="phpOperators.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            
            <p>Expressions is the most important part of PHP. Almost every time you write is an expression. The simples but most accurate way to define expressions is "anythng that has a value".<br><br>The most basic form of expressions are constants and variables. When you type "$a = 5" this means that you assgned value 5 to $a is the simplest form of any expression<br><br>A very common type of expression are comparision expressions. These expressions evaluate either FALSE or TRUE<br><br>PHP supports <code>></code>(bigger then), <code>>=</code>(biger than or equal to), <code>==</code>(equal), <code>!=</code>(not equal), <code>&lt;</code>(smaller than) and <code>&lt;=</code>(smaller than or equal to)<br><br>These expressions mostly commonly used inside conditional expressions, such as <i>if</i> statement.<br><br></p>
            
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- SquireBox -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-4645356742269640"
     data-ad-slot="4162882890"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>


            <h3>Pre and Post increment/decrement and Expressions</h3>
            <p>Pre-increment/decrement and post increment/decrement provides the drection flow fo any expression. <br><br>Following example should help you to understand pre- and post-increment and expression in general a bit better:</p>
            <div class="w3-panel w3-card-2 w3-light-grey">
        <div class="w3-code htmlHigh notranslate">
         &lt;?php<br><br>
            
               &nbsp;$a=10;<br>
               &nbsp;for($i=0;$i<$a;$i++){<br>
               &nbsp;    echo "$i";  <br>                                                                    
               &nbsp;    }<br>
               &nbsp;    for($i=10;$i>=0;$i--){<br>
               &nbsp;        echo "$i";<br>
               &nbsp;}  <br><br>

            ?&gt;
        </div>        
    </div>
            <h3>Output:</h3>
            <div style="width:100%;height:300px;" class="w3-border">
            
           <?php
    $a=5;
    echo "this is incresed expression<br/>";
    for($i=0;$i<$a;$i++){//increment expression
        echo "$i<br/>";                                                                      
    }
    echo "this is decresed expression<br/>";
    for($i=5;$i>=0;$i--){
        echo "$i<br/>";
    }
?> 
            </div><br>
            


				    <a href="phpConstant.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="phpOperators.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
  					
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


