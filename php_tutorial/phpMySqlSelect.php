<?php $page='44'; include '../header.php'; ?>

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
			<h1>PHP MySQL Select Query</h1>
 				 <a href="phpMySqldelete.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="phpFormIntro.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            
            <p>PHP mysql_query() function is used to execute select query in database. SELECT query is used to fatch data/record from table that already formed or contain record. seclect query is case insensitive but data sensitive that means if no data/record present in table it shows error. </p>
            <h2>Select Query</h2>
            <p>Let's see example:</p>
            <div class="w3-panel w3-card-2 w3-light-grey">
            <div class="w3-code htmlHigh notranslate">

            &lt;?php <br><br> 
            &nbsp;$host = 'localhost:3306'; <br> 
            &nbsp;$user = '';<br>  
            &nbsp;$pass = '';<br>  
            &nbsp;$dbname = 'test'; <br> 
            &nbsp;$conn = mysqli_connect($host, $user, $pass,$dbname); <br> 
            &nbsp;if(!$conn){  <br>
            &nbsp;  die('Could not connect: '.mysqli_connect_error()); <br> 
            &nbsp;} <br> 
            &nbsp;echo 'Connected successfully&lt;br/&gt;';<br><br>  

            &nbsp;$sql = 'SELECT * FROM emp4';<br>  
            &nbsp;$retval=mysqli_query($conn, $sql); <br><br> 

            &nbsp;if(mysqli_num_rows($retval) > 0){ <br> 
            &nbsp; while($row = mysqli_fetch_assoc($retval)){ <br> 
            &nbsp;&nbsp;&nbsp;&nbsp;echo "EMP ID :{$row['id']}  &lt;br&gt; ".<br>  
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         "EMP NAME : {$row['name']} &lt;br&gt; ".<br>  
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         "EMP SALARY : {$row['salary']} &lt;br&gt; ". <br> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         "*************************&lt;br&gt;";<br>  
            &nbsp; }&nbsp;&nbsp; //end of while <br> 
            &nbsp;}else{ <br> 
            &nbsp;echo "0 results";<br>  
            &nbsp;} <br> 
            &nbsp;mysqli_close($conn);<br><br>  
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
            <div style="width:100%;height:350px;" class="w3-border">
            <p>Connected successfully<br>EMP ID :1<br>EMP NAME : Mac<br>EMP SALARY : 50000<br>*************************<br>EMP ID :2<br>EMP NAME : Martin<br>EMP SALARY : 40000<br>*************************<br>EMP ID :3<br>EMP NAME : Ajay<br>EMP SALARY : 60000<br>*************************</p>
            </div>
           
            
               
            <br>    
				    <a href="phpMySqldelete.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="phpFormIntro.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
  					
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


