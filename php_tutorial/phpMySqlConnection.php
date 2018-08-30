<?php $page='38'; include '../header.php'; ?>

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
			<h1>PHP MySQL Connection</h1>
 				 <a href="phpDeleteFile.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="phpMySqlCreateDb.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            
            <p>To create dynamic website, CMS(Content Management System), Managing File or any other management there is a requirement of database to manage it. So, the basically to interect with database the first step is to connect with database management system(DBMS). <br><br>There are two ways to create connection are listed below:</p>
            <ul>
                <li><strong>mysqli_connect()</strong></li>
                <li><strong>PDO::__construct()</strong></li>
            </ul>
            <h2>mysqli_connect() function</h2>
            <p><strong>mysqli_connect() function</strong> is used to connect with MySQL database.</p>
            <h3>Syntax</h3>
            <div class="w3-panel w3-card-2 w3-light-grey">
            <div class="w3-code htmlHigh notranslate">
                mysqli_connect(server_name, username, password)
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

            <h2>mysqli_close() function</h2>
            <p><strong>mysqli_close() function</strong> is used to disconnect/terminate the with MySQL database.</p>
            <div class="w3-panel w3-card-2 w3-light-grey">
            <div class="w3-code htmlHigh notranslate">
                mysqli_close(resource $resource_link)
            </div>        
            </div>
            <p>Let's see an example:</p>
            <div class="w3-panel w3-card-2 w3-light-grey">
            <div class="w3-code htmlHigh notranslate">
                &lt;?php <br><br> 
                &nbsp;$host = 'localhost'; <br> 
                &nbsp;$user = '';<br>  
                &nbsp;$pass = '';<br>  
                &nbsp;$conn = mysqli_connect($host, $user, $pass); <br> 
                &nbsp;if(! $conn ) <br> 
                &nbsp;{  <br>
                &nbsp;  die('Could not connect: ' . mysqli_error()); <br> 
                &nbsp;}  <br>
                &nbsp;echo 'Connected successfully';<br>  
                &nbsp;mysqli_close($conn); <br><br> 
                ?&gt;
            </div>        
            </div>
            <h3>Output</h3>
            <div style="width:100%;height:50px;" class="w3-border">
            Connected Sucessfully

            </div>
            

            
           
            
               
            <br>    
				    <a href="phpDeleteFile.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="phpMySqlCreateDb.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
  					
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


