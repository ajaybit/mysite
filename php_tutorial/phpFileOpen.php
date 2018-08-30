<?php $page='32'; include '../header.php'; ?>

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
			<h1>PHP Open File</h1>
 				 <a href="phpFileHandling.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="phpReadFile.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            
                <p>PHP fopen() function is used to open file and return source. In order to open any file there are two arguments are accepted: <i>$filename</i> and <i>$mode</i>. The <i>$filename</i> represents the file to be open <i>$mode</i> represents the in which mode the file is open. These modes are read-only, read-write, write-only etc.</p>
            <h3>Syntax</h3>
            <div class="w3-panel w3-card-2 w3-light-grey">
            <div class="w3-code htmlHigh notranslate">

            &lt;?php<br><br>
                &nbsp;$file = fopen(string $filename, string $mode)<br><br>
            ?&gt;
            </div>        
            </div>
            
            <h2>Modes of file Open</h2>
            <table class="w3-table-all w3-card-4">
              <tr class="w3-teal">
                <th>Tag</th>
                <th>Description</th>
              </tr>
                <tr>
                    <td>r</td>
                    <td>Opens file in <strong>read-only</strong> mode. It places the file pointer at the beginning of the file.</td>
                </tr>
                <tr>
                    <td>r+</td>
                    <td>Opens file in <strong>read-write</strong> mode. It places the file pointer at the beginning of the file.</td>
                </tr>
                <tr>
                    <td>w</td>
                    <td>	Opens file in <strong>write-only</strong> mode. It places the file pointer to the beginning of the file and truncates the file to zero length. If file is not found, it creates a new file.</td>
                </tr>
                <tr>
                    <td>w+</td>
                    <td>Opens file in <strong>read-write</strong> mode. It places the file pointer to the beginning of the file and truncates the file to zero length. If file is not found, it creates a new file.</td>
                </tr>
                <tr>
                    <td>a</td>
                    <td>Opens file in <strong>write-only</strong> mode. It places the file pointer to the end of the file. If file is not found, it creates a new file.</td>
                </tr>
                <tr>
                    <td>a+</td>
                    <td>Opens file in <strong>read-write</strong> mode. It places the file pointer to the end of the file. If file is not found, it creates a new file.</td>
                </tr>
                <tr>
                    <td>x</td>
                    <td>Creates and opens file in <strong>write-only</strong> mode. It places the file pointer at the beginning of the file. If file is found, fopen() function returns FALSE.</td>
                </tr>
                <tr>
                    <td>x+</td>
                    <td>It is same as x but it creates and opens file in <strong>read-write</strong> mode.</td>
                </tr>
                <tr>
                    <td>c</td>
                    <td>Opens file in <strong>write-only</strong> mode. If the file does not exist, it is created. If it exists, it is neither truncated (as opposed to 'w'), nor the call to this function fails (as is the case with 'x'). The file pointer is positioned on the beginning of the file</td>
                </tr>
                <tr>
                    <td>c+</td>
                    <td>It is same as c but it opens file in <strong>read-write</strong> mode.</td>
                </tr>
            </table><br>
            
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- SquireBox -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-4645356742269640"
     data-ad-slot="4162882890"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>


            <p>Let's see an example:</p>
            <div class="w3-panel w3-card-2 w3-light-grey">
            <div class="w3-code htmlHigh notranslate">

            &lt;?php<br><br>
            $file = fopen("headhackfile.txt" , "r");<br><br>
            ?&gt;
            </div>        
            </div>
            <br>
            
            
            
            
            
            
            
            
            
            
            
            
          

    
				    <a href="phpFileHandling.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="phpReadFile.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
  					
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


