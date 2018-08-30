<?php $page='34'; include '../header.php'; ?>

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
			<h1>PHP Write File</h1>
 				 <a href="phpReadFile.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="phpAppendfile.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            
           <p>PHP fwrite() and fputs() functions are used to write data into file. you to use the modes of files to perform this operation</p>
            <h2>fwrite() function</h2>
            <p>The fwrite() function is used to write content of the string.<br><br>Let's see an example to understand fwrite() function:</p>
            <div class="w3-panel w3-card-2 w3-light-grey">
            <div class="w3-code htmlHigh notranslate">

            &lt;?php<br><br>  
            &nbsp;$fp = fopen('data.txt', 'w');&nbsp;//opens file in write-only mode <br> 
            &nbsp;fwrite($fp, 'welcome ');<br>  
            &nbsp;fwrite($fp, 'to php file write');  <br>
            &nbsp;fclose($fp); <br> 

            &nbsp;echo "File written successfully";  <br><br>
            ?&gt; 
            </div>        
            </div>
            <h3>Output</h3>
            <div style="width:100%;height:50px;" class="w3-border">
            <?php 

             $fp = fopen("data.txt", "r"); //open file in read mode 
             while(!feof($fp)) { 
              echo fgetc($fp); 
             } 
             fclose($fp);

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


            <h2>Overwrite File</h2>
            <p>If you want to run above code again, it will erase the previous content of file and write new content(data). <br><br>Let's see the code that writes only new data into data.txt file.</p>
            <div class="w3-panel w3-card-2 w3-light-grey">
            <div class="w3-code htmlHigh notranslate">

            &lt;?php <br><br> 
            &nbsp;$fp = fopen('data.txt', 'w');&nbsp;//opens file in write-only mode<br>  
            &nbsp;fwrite($fp, 'hello');<br>  
            &nbsp;fclose($fp);  <br>

            &nbsp;echo "File written successfully";<br><br>  
            ?&gt;  
            </div>        
            </div>
            <h3>Output</h3>
            <div style="width:100%;height:50px;" class="w3-border">
            <?php 

             $fp = fopen('data1.txt', 'w'); //opens file in write-only mode
             fwrite($fp, 'hello');
             fclose($fp); 
             echo "File written successfully";

            ?>

            </div>
            
            
            
            
               
            <br>    
				    <a href="phpReadFile.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="phpAppendfile.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
  					
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


