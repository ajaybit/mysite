<?php $page='21'; include '../header.php'; ?>

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
			<h1>PHP Jumping Statements</h1>
 				 <a href="phpFor.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="phpInclude&Include_once.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            
            <p>There are some jumping statements using PHP that is helps us to jump/terminate any function and object on avoiding the whole programs in between. They have diffent propewrties and functionalities, are listed:</p>
            <ul>
                <li>Break</li>
                <li>Switch</li>
                
                <li>Goto</li>
            </ul>
            <h1>Break </h1>
            <p>Break statement is used to stop execution of the current <i>for, foreach, while, do-while, and switch</i>structure<br><br>Let's see example: </p>
            <div class="w3-panel w3-card-2 w3-light-grey">
        
        <div class="w3-code htmlHigh notranslate">
&lt;?php<br><br>
&nbsp;$arr = array('one', 'two', 'three', 'four', 'stop', 'five');<br>
&nbsp;while (list(, $val) = each($arr)) {<br>
&nbsp;    if ($val == 'stop') {<br>
&nbsp;        break;    /* You could also write 'break 1;' here. */<br>
&nbsp;    }<br>
&nbsp;    echo "$val &lt;br /&gt;\n";<br>
&nbsp;}<br><br>
    ?&gt;
        </div>        
    </div>
            <h3>Output:</h3>
            <div style="width:100%;height:120px;" class="w3-border">
            
<?php

 $arr = array('one', 'two', 'three', 'four', 'stop', 'five');
 while (list(, $val) = each($arr)) {
  if ($val == 'stop') {
  break; /* You could also write 'break 1;' here. */
  }
  echo "$val <br />\n";
 }

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


            <h1>Switch</h1>
            <p>The <i>switch</i> statement is most likely to a series of IF statements on the same expression. In many occasions, you may want to compare the same variable (or expression) with many different values, and you want execute a different piece of code depending on which value it equals to. This is exactly what the switch statement is for.<br><br>Let's see an example:</p>
<div class="w3-panel w3-card-2 w3-light-grey">
        
        <div class="w3-code htmlHigh notranslate">
&lt;?php<br><br>
&nbsp;$i=1;<br><br>

&nbsp;switch ($i) {<br>
&nbsp;    case 0:<br>
&nbsp;        echo "i equals 0";<br>
&nbsp;        break;<br>
&nbsp;    case 1:<br>
&nbsp;        echo "i equals 1";<br>
&nbsp;        break;<br>
&nbsp;    case 2:<br>
&nbsp;        echo "i equals 2";<br>
&nbsp;        break;<br>
&nbsp;}<br><br>
?&gt;
        </div>        
    </div>        
            <h3>Output:</h3>
            <div style="width:100%;height:120px;" class="w3-border">
            
<?php
$i=1;

switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
}
?> 
            </div>

   <p><i>switch atatement executes line by line(actually statement by statements). So When it found the exect match of statement it execute the statement as followed.</i></p>
            <h1>Goto</h1>
            <p>It is used to jump to the another section of program. The target point is specified by a label followed by the colon, and the instruction is given as <i>goto</i> followed by the desired target label. It is not full unrestricted <i>goto</i><br><br>Consider an example:</p>
          <div class="w3-panel w3-card-2 w3-light-grey">
        
        <div class="w3-code htmlHigh notranslate">
&lt;?php<br><br>
&nbsp;goto a;<br>
&nbsp;echo 'Foo';<br><br>
 
&nbsp;a:<br>
&nbsp;echo 'Bar';<br><br>
?&gt;
        </div>        
    </div>        
            <h3>Output:</h3>
            <div style="width:100%;height:120px;" class="w3-border">
            
<?php

 goto a;
 echo 'Foo';

 a:
 echo 'Bar';

?>
            </div><br>
            
            
				    <a href="phpFor.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="phpInclude&Include_once.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
  					
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


