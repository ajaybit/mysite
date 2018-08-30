<?php $page='35'; include '../header.php'; ?>

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
			<h1>PHP Append File</h1>
 				 <a href="phpFileWrite.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="phpDeleteFile.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            
           <p>Appen means to add some data to exesting file data. In PHP you can append file using a and a+ mode in fopen() function. The concept of Append file was is used to avoid to create new file and make new entry to the exesting file.<br><br>We have a exesting file with name(data2.txt) have some data is shown below</p>
            <div style="width:100%;height:50px;" class="w3-border">
            <p>Welcome to file data2.txt append operation is takes place there.</p>

            </div>
            <h2>Append to File- fwrite()</h2>
            <p>Let's see an example to understand the concept of append file:</p>
                        <div class="w3-panel w3-card-2 w3-light-grey">
            <div class="w3-code htmlHigh notranslate">

            &lt;?php<br><br>  
            &nbsp;$fp = fopen('data2.txt', 'a');&nbsp;//opens file in append mode <br> 
            &nbsp;fwrite($fp, ' this is additional text ');<br>  
            &nbsp;fwrite($fp, 'appending data'); <br> 
            &nbsp;fclose($fp); <br> 

            &nbsp;echo "File appended successfully";<br><br>  
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

            <h3>Output</h3>
            <div style="width:100%;height:50px;" class="w3-border">
            <p>Welcome to file data2.txt append operation is takes place there.appending data</p>

            </div>
            
            
            
               
            <br>    
				    <a href="phpFileWrite.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="phpDeleteFile.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
  					
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


