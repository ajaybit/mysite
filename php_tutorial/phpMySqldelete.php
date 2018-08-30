<?php $page='43'; include '../header.php'; ?>

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
			<h1>PHP MySQL Delete</h1>
 				 <a href="phpMySqlUpdate.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="phpMySqlSelect.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            
            <p>PHP mysql_query() is used to delete record in a table.</p>
            <h2>Delete Record</h2>
            <p>Let's see an example:</p>
            <div class="w3-panel w3-card-2 w3-light-grey">
            <div class="w3-code htmlHigh notranslate">

            &lt;?php <br><br> 
            &nbsp;$host = 'localhost:3306';<br>  
            &nbsp;$user = '';<br>  
            &nbsp;$pass = ''; <br> 
            &nbsp;$dbname = 'test'; <br><br> 

            &nbsp;$conn = mysqli_connect($host, $user, $pass,$dbname);<br>  
            &nbsp;if(!$conn){ <br> 
            &nbsp;  die('Could not connect: '.mysqli_connect_error());<br>  
            &nbsp;}<br>  
            &nbsp;echo 'Connected successfully&lt;br/&gt;';<br> <br> 

            &nbsp;$id=2;<br>  
            &nbsp;$sql = "delete from emp4 where id=$id";<br>  
            &nbsp;if(mysqli_query($conn, $sql)){<br>  
            &nbsp; echo "Record deleted successfully";<br>  
            &nbsp;}else{ <br> 
            &nbsp;echo "Could not deleted record: ". mysqli_error($conn);<br>  
            &nbsp;}<br><br>  

            &nbsp;mysqli_close($conn);<br><br>  
            ?&gt;<br><br> 
              
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
            <div style="width:100%;height:75px;" class="w3-border">
            <p>Connected successfully<br>Record deleted successfully</p>

            </div>
            
           
            
               
            <br>    
				    <a href="phpMySqlUpdate.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="phpMySqlSelect.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
  					
  					
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


