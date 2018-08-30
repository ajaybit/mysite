<?php $page='33'; include '../header.php'; ?>

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
			<h1>PHP Read File</h1>
 				 <a href="phpFileOpen.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="phpFileWrite.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            
           <p>PHP provides the a various functions to read file data. There are different functions that allows you to read all data of file and read data line by line and read data character by character.<br><br>The avialable file read functions are given below:</p>
            <ul>
                <li>fread()</li>
                <li>fgets()</li>
                <li>fgetc()</li>
            </ul>
            <h2>fread() function</h2>
            <p>This function is required two arguments: <i>file resource and file size</i></p>
            <h3>Syntax</h3>
            <div class="w3-panel w3-card-2 w3-light-grey">
            <div class="w3-code htmlHigh notranslate">

            &lt;?php<br><br>
                &nbsp;$file = fread(string $filename, int $filesize);<br><br>
            ?&gt;
            </div>        
            </div>
            <p>Let's see an example:</p>
             <div class="w3-panel w3-card-2 w3-light-grey">
            <div class="w3-code htmlHigh notranslate">

            &lt;?php<br><br>    
            &nbsp;$filename = "c:\\file1.txt";<br>    
            &nbsp;$fp = fopen($filename, "r");&nbsp;//open file in read mode<br>    

            &nbsp;$contents = fread($fp, filesize($filename));&nbsp;//read file  <br>  

            &nbsp;echo "&lt;pre&gt;$contents&lt;/pre&gt;";&nbsp;//printing data of file  <br>
            &nbsp;fclose($fp);//close file<br><br>    
            ?&gt; 
            </div>        
            </div>
            <h3>Output</h3>
            <div style="width:100%;height:175px;" class="w3-border">
            <?php    
            $filename = "headhackfile.txt";    
            $fp = fopen($filename, "r");//open file in read mode    

            $contents = fread($fp, filesize($filename));//read file    

            echo "<pre>$contents</pre>";//printing data of file  
            fclose($fp);//close file    
            ?>   

            </div>
            <h2>fgets() function</h2>
            <p>This is function is used to read the single line from the file<br><br>Let's understand with example:</p>
            <div class="w3-panel w3-card-2 w3-light-grey">
            <div class="w3-code htmlHigh notranslate">

            &lt;?php<br><br>    
            &nbsp;$fp = fopen("c:\\file1.txt", "r");&nbsp;//open file in read mode  <br>  
            &nbsp;echo fgets($fp);  <br>
            &nbsp;fclose($fp);   <br><br> 
            ?&gt; 
            </div>        
            </div>
            <h3>Output</h3>
            <div style="width:100%;height:175px;" class="w3-border">
             <?php

             $fp = fopen("headhackfile.txt", "r"); //open file in read mode 
             echo fgets($fp); 
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


            <h2>fgetc() function</h2>
            <p>This function is used to read single character from the file. To read whole data from using fgetc() you need to use !feof() function with while loop.<br><br>Lets see the simple use of fgetc() function:</p>
            <div class="w3-panel w3-card-2 w3-light-grey">
            <div class="w3-code htmlHigh notranslate">

            &lt;?php<br><br>    
            &nbsp;$fp = fopen("c:\\file1.txt", "r");&nbsp;//open file in read mode  <br>  
            &nbsp;echo fgetc($fp); <br> 
  
            &nbsp;fclose($fp);<br><br>
            ?&gt; 
            </div>        
            </div>
            <h3>Output</h3>
            <div style="width:100%;height:50px;" class="w3-border">
             <?php    
            $fp = fopen("headhackfile.txt", "r");//open file in read mode    

              echo fgetc($fp);  

            fclose($fp);

            ?>  

            </div>
            <p>Let's see example to read whole file using fgetc() function</p>
            <div class="w3-panel w3-card-2 w3-light-grey">
            <div class="w3-code htmlHigh notranslate">

            &lt;?php  <br>  <br>
            &nbsp;$fp = fopen("c:\\file1.txt", "r");&nbsp;//open file in read mode  <br>  
            &nbsp;while(!feof($fp)) { <br> 
            &nbsp;  echo fgetc($fp); <br> 
            &nbsp;}  <br>
            &nbsp;fclose($fp);<br> <br> 
            ?&gt; 
            </div>        
            </div>
            <h3>Output</h3>
            <div style="width:100%;height:100px;" class="w3-border">
            <?php 

             $fp = fopen("headhackfile.txt", "r"); //open file in read mode 
             while(!feof($fp)) { 
              echo fgetc($fp); 
             } 
             fclose($fp);

            ?> 

            </div>
            
            
            
            
               
            <br>    
				    <a href="phpFileOpen.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="phpFileWrite.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
  					
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


