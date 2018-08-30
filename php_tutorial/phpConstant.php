<?php $page='12'; include '../header.php'; ?>

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
			<h1>PHP Constants</h1>
 				 <a href="phpBVariable.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="phpExpressions.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            
            
            <p>A constant is a identidfier(name) for a simple value. The value of  constant cannot change during exicution of the script(except megical constant which are not actually constant). Constants are case sensitive by default for convinience always try to declatre in UPPERCASE</p>
            <h3>Syntax</h3>
            <p>Constants can be defined by using a function define() or by usnig the keyword const outside the class. While the function define() allows a constant to be defined an arbitrary expression, the constant keyword have some restractions once the is defined, it will never be change or undefined.</p>
            <h2>Difference between Constants and variables</h2>
            <ul>
                <li>Constants do not have doller($) sign before them.</li>
                <li>Constants may be defined and accessed anywhere without regard to variable scope rule. </li>
                <li>Constants will not redefined or undefined once they have declared.</li>
                <li>Constants may only be defined by using the function define(),  not the simple assignment.</li>
            </ul>
            <div class="w3-panel w3-card-2 w3-light-grey">
        <div class="w3-code htmlHigh notranslate">
                &lt;?php  <br><br>
                
                define("CONSTANT", "Hello World");<br>
                echo CONSTANT;<br><br>
                ?&gt;
        </div>        
    </div>
              <h3>Output:</h3>
            <div style="width:100%;height:100px;" class="w3-border">
            <?php 

define("CONSTANT", "Hello World");
    echo CONSTANT;

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


            <h2>Magic Constants</h2>
            <p>PHP Provides some predefined constants which are known as megical constants. <br><br>There are nine magical constants that change depending on where they are used. All these "megical" constants are resolved at compile time, unlike regular constants that resolve at runtime. <br><br>These special constants are case-sensitive and are as followed: </p>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>__LINE__</td>
                    <td>The current line number of the file.</td>
                </tr>
                <tr>
                    <td>__FILE__</td>
                    <td>It shows the full path and filename of the file.</td>
                </tr>
                <tr>
                    <td>__DIR__</td>
                    <td>It shows the directory of the file.</td>
                </tr>
                <tr>
                    <td>__FUNCTION__</td>
                    <td>It shows the function name.</td>
                </tr>
                <tr>
                    <td>__CLASS__</td>
                    <td>It shows the class name or current class name.</td>
                </tr>
                <tr>
                    <td>__TRAIT__</td>
                    <td>It shows name of trait.</td>
                </tr>
                <tr>
                    <td>__METHOD__</td>
                    <td>It shows the class name method.</td>
                </tr>
                <tr>
                    <td>__NAMESPACE__</td>
                    <td>It shows the name of the current namespace.</td>
                </tr>
            </table>
            <br>


				    <a href="phpBVariable.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="phpExpressions.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
  					
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


