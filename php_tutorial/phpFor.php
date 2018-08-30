<?php $page='20'; include '../header.php'; ?>

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
			<h1>PHP For Loop</h1>
 				 <a href="phpDoWhile.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="phpJumpingtatements.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            
                      
              <p><i>for</i> loops is the most complex loops in PHP. They behave like C counterpart</p>
            <h3>Syntax</h3>
      <div class="w3-panel w3-card-2 w3-light-grey">
        <div class="w3-code htmlHigh notranslate">
         for(exp1; exp2; exp3)<br>
            &nbsp;statements
        </div>        
    </div>
            <ul>
                <li>The first condition/expression (exp1) is run(executed) one unconditionally at the begning of the loop</li>
                <li>After the sucessfully execution of first expression(exp1), (exp2) is execute. if the execution to of second expression is TRUE, the loop continues and the nested statement(s) are executed. if the execution is FALSE then execution of the loop ends. </li>
                <li>At the end of each iteration, (exp3) is executed to check wether the condition is TRUE or FALSE</li>
            </ul>
            <p>Consider the following exmples:</p>
    <div class="w3-panel w3-card-2 w3-light-grey">
        
        <div class="w3-code htmlHigh notranslate">
         &lt;?php<br><br>
            &nbsp;for($i=0; $i<5; $i++)<br>
                &nbsp;echo $i;<br><br>
            ?&gt;
        </div>        
    </div>
            <h3>Output:</h3>
            <div style="width:100%;height:120px;" class="w3-border">
            
            <?php 
                for($i=0;$i<5;$i++)
                    echo "$i<br/>";
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

    <h2>Foreach loop</h2>
            <p>The <i>foreach</i> construct provides an easy way to iterate an array. You can easily work on array and  objects using <i>foreach</i>  array and will issue an error when you try to use it on variable with a different data type or an uninitialize variable</p>
            <h3>Syntax</h3>
          <div class="w3-panel w3-card-2 w3-light-grey">
        
        <div class="w3-code htmlHigh notranslate">
         foreach(array_expression as $value)<br>
            statement
        </div>        
    </div>  
            <p>Let's see example:</p>
            <div class="w3-panel w3-card-2 w3-light-grey">
        
        <div class="w3-code htmlHigh notranslate">
         &lt;?php<br><br>
            &nbsp;$arr = array(1, 2, 3, 4, 5);<br>
            &nbsp;foreach($arr as &$value){<br>
            &nbsp;echo "$value";<br><br>
            }
            
        </div>        
    </div>  
            <h3>Output:</h3>
            <div style="width:100%;height:120px;" class="w3-border">
            
            <?php
$arr = array(1, 2, 3, 4, 5);
foreach ($arr as &$value) {
  echo  "$value";
}

unset($value); // break the reference with the last element
?> 
            </div>
            
            
				    <a href="phpDoWhile.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="phpJumpingtatements.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
  					
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


