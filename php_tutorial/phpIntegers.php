<?php $page='6'; include '../header.php'; ?>

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
			<h1>PHP Integers </h1>
 				 <a href="phpBolleans.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="phpFloatingPoints.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            
            
            <p>An integers is a number of set <code>ℤ</code>={...-2, -1, 0, 1, 2...}</p>
            <h3>Syntax</h3>
            <p>Integers can be declared and specified in decimal(base 10), hexadecimal(base 16), octal(base 8) or binary(base 2)</p>
            
      <div class="w3-panel w3-card-2 w3-light-grey">         
        <div class="w3-code htmlHigh notranslate">
         &lt;?php<br><br>
           &nbsp;$a = 1234;&nbsp;//decimal number<br>
            &nbsp;$a = -123;&nbsp;//a negative number<br>
            &nbsp;$a = 0123;&nbsp;//octal number (equivalent to 83 decimal)<br>
            &nbsp;$a = 0x1A;&nbsp;//hexadecimal number (equivalent to 26 decimal)<br>
            &nbsp;$a = 0b11111111;&nbsp;//binary number (equivalent to 255 deciaml)
            <br> <br>      
            ?&gt;
        </div>        
    </div>
            <p>Let's see an example to print integer value using echo command:</p>
      <div class="w3-panel w3-card-2 w3-light-grey">
        <div class="w3-code htmlHigh notranslate">
         &lt;?php<br><br>
           &nbsp;$a = 1234;&nbsp;//decimal number<br>
            &nbsp;$b = -123;&nbsp;//a negative number<br>
            &nbsp;$c = 0123;&nbsp;//octal number (equivalent to 83 decimal)<br>
            &nbsp;$d = 0x1A;&nbsp;//hexadecimal number (equivalent to 26 decimal)<br>
            &nbsp;$e = 0b11111111;&nbsp;//binary number (equivalent to 255 deciaml)
            <br> <br> 
            &nbsp;echo "$a, $b, $c, $d, $e";<br><br> 
           
            ?&gt;
        </div>        
    </div>
            
            <h3>Output:</h3>
            <div style="width:100%;height:100px;" class="w3-border">
           <?php

                 $a = 1234; //decimal number
                 $b = -123; //a negative number
                 $c = 0123; //octal number (equivalent to 83 decimal)
                 $d = 0x1A; //hexadecimal number (equivalent to 26 decimal)
                 $e = 0b11111111; //binary number (equivalent to 255 deciaml) 

                 echo "$a, $b, $c, $d, $e";

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


            <h2>Integer OverFlow</h2>
            <p>Interger overflow means whene any result of arithmetic operation, such as multiplicaion or addition exceeds the maximum size of the integer. Every 32-bit and 64-bit architecture have different interger size.<br><br>Integer Size can be determined using the constant PHP_INT_SIZE, Maximum value using the constant PHP_INT_MAX,  Minimum value using the constant PHP_INT_MIN<br><br>Let's see an example to print integer value</p>
            <div class="w3-panel w3-card-2 w3-light-grey">
        <div class="w3-code htmlHigh notranslate">
         &lt;?php<br><br>
           &nbsp;$a = PHP_INT_SIZE;&nbsp;//sixe of integer<br>
            &nbsp;$b = PHP_INT_MAX;&nbsp;//Maximum value that integer contain<br>
            &nbsp;$c = PHP_INT_MIN;&nbsp;//Minimum Value that integer contain<br>
           
             <br> 
            &nbsp;echo "$a, $b, $c";<br><br> 
           
            ?&gt;
        </div>        
    </div>
            <h3>Output:</h3>
            <div style="width:100%;height:100px;" class="w3-border">
           <?php

             $a = PHP_INT_SIZE; //sixe of integer
             $b = PHP_INT_MAX; //Maximum value that integer contain
             $c = PHP_INT_MIN; //Minimum Value that integer contain

             echo "$a, $b, $c";

            ?>
            </div>
            <p>If PHP encounters a number beyond the bounds of integer type, it will be interpreted it as float.<br><br>Let's see how does it work. <strong>Overflow on 32-bit system</strong></p>
        <div class="w3-panel w3-card-2 w3-light-grey">
        <div class="w3-code htmlHigh notranslate">
         &lt;?php<br><br>
         &nbsp; $large_number = 2147483647;<br>
          &nbsp;  var_dump($large_number); &nbsp;                    // int(2147483647)<br><br>

          &nbsp;  $large_number = 2147483648;<br>
          &nbsp;  var_dump($large_number);&nbsp;                     // float(2147483648)<br><br>

          &nbsp;  $million = 1000000;<br>
          &nbsp;  $large_number =  50000 * $million;<br>
          &nbsp;  var_dump($large_number);&nbsp;                     // float(50000000000)<br><br>

            ?&gt;
        </div>        
    </div>
            <h3>Output:</h3>
            <div style="width:100%;height:100px;" class="w3-border">
            <?php
             $large_number = 2147483647;
              var_dump($large_number);   // int(2147483647)

              $large_number = 2147483648;
              var_dump($large_number);  // float(2147483648)

              $million = 1000000;
              $large_number = 50000 * $million;
              var_dump($large_number);  // float(50000000000)

            ?>               
            </div>
             <strong>Overflow on 64-bit system</strong>
    <div class="w3-panel w3-card-2 w3-light-grey">
        <div class="w3-code htmlHigh notranslate">
         &lt;?php<br><br>
            &nbsp;$large_number = 9223372036854775807;<br>
            &nbsp;var_dump($large_number); &nbsp;                    // int(9223372036854775807)<br><br>

           &nbsp; $large_number = 9223372036854775808;<br>
           &nbsp; var_dump($large_number);  &nbsp;                   // float(9.2233720368548E+18)<br><br>

           &nbsp; $million = 1000000;<br>
           &nbsp; $large_number =  50000000000000 * $million;<br>
           &nbsp; var_dump($large_number); &nbsp;                    // float(5.0E+19)<br><br>

            ?&gt;
        </div>        
    </div>
            <h3>Output:</h3>
            <div style="width:100%;height:100px;" class="w3-border">
            <?php
              $large_number = 9223372036854775807;
             var_dump($large_number);   // int(9223372036854775807)

              $large_number = 9223372036854775808;
              var_dump($large_number);   // float(9.2233720368548E+18)

              $million = 1000000;
              $large_number = 50000000000000 * $million;
              var_dump($large_number);   // float(5.0E+19)

            ?>               
            </div>
            <div class="w3-panel w3-pale-yellow w3-leftbar w3-border-yellow">
        <p style="line-height: 28px"><strong>NOTE</strong>:There is no division opertaion in PHP 1/2 yields to float 0.5.</p>
      </div>
    <p>Understand with example:</p>        
    <div class="w3-panel w3-card-2 w3-light-grey">
        <div class="w3-code htmlHigh notranslate">
         &lt;?php<br><br>
            
           &nbsp; var_dump(25/7); &nbsp;        // float(3.5714285714286)<br>
           &nbsp; var_dump((int) (25/7));&nbsp; // int(3)<br>
           &nbsp; var_dump(round(25/7)); &nbsp; // float(4)<br><br>
            

            ?&gt;
        </div>        
    </div>
            <h3>Output:</h3>
            <div style="width:100%;height:100px;" class="w3-border">
            <?php
                  var_dump(25/7);   // float(3.5714285714286)
                  var_dump((int) (25/7));  // int(3)
                  var_dump(round(25/7));   // float(4)

            ?>               
            </div>
            <h2>Converting to integer</h2>
            <p>To explicitly convert a value to integer, use either (int) or (integer) casts. However, in most cases the cast is not needed, since a value will be automatically converted if an operator, function or control structure required a integer argument. </p>
            <h4>From Boolean to Integer</h4>
            <p>It confition is FALSE will yield(0), and if TRUE will yield(1)</p>
            <h4>From Floating point number</h4>
            <p>If the number is converted from floating point to integer, the number will be rounded off towards zero(0).<br><br> If the float is beyond the boundries of integer(usually +/- 2.15e+9=2^31 on 32-bit platform and +/- 9.22e+18=2^63 on 64-bit platform). the result is undefined. No warning, even a notice will be issued when it happen</p>
            
            
   

            

				    <a href="phpBolleans.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="phpFloatingPoints.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
  					
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


