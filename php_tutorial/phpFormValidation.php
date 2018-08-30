<?php $page='46'; include '../header.php'; ?>

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
			<h1>PHP Form Validation</h1>
 				 <a href="phpFormIntro.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="phpCompleteForm.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            
            <p>Validation is the important part of form handling. Required fields will check whether the field is filled  or not. We will the * symbol for required field.</p>
            <h2>What is Validation?</h2>
            <p>Validation means when a user click on submitted button then fields in the form are correctly filled or not to check whether the fiels are correctly filled, hence we use validation.</p>
            <h2>Fields For Validations</h2>
            <table class="w3-table-all w3-card-4">
              <tr class="w3-teal">
                <th>Field</th>
                <th>Validation Rule</th>
              </tr>
                <tr>
                    <td>Name</td>
                    <td>Should require letters and white-space</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>Should require @ and .</td>
                </tr>
                <tr>
                    <td>Website</td>
                    <td>Should require valid URL</td>
                </tr>
                <tr>
                    <td>Radio</td>
                    <td>Must be selectable at least one</td>
                </tr>
                <tr>
                    <td>Check Box</td>
                    <td>Must be checkable at least one</td>
                </tr>
                <tr>
                    <td>Drop Down Menu</td>
                    <td>Must be selectable at least one</td>
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

 
            <h2>Valid URL</h2>
            <p>Blow code is used as URL validation:</p>
            <div style="width:100%;height:200px;" class="w3-border">
            
            $website = input($_POST["site"]);<br><br>

if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {<br><br>
  &nbsp; $websiteErr = "Invalid URL"; <br>
}
            </div>
            <h2>Valid Email</h2>
            <div style="width:100%;height:200px;" class="w3-border">
            
           $email = input($_POST["email"]);<br><br>

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {<br>
 &nbsp;  $emailErr = "Invalid format and please re-enter valid email"; <br>
}
            </div>
       <p>Let's see an example:</p>
        <div class="w3-panel w3-card-2 w3-light-grey">
            <div class="w3-code htmlHigh notranslate">
                
<html>
   
   <head>
      <style>
         .error {color: #FF0000;}
      </style>
   </head>
   
   <body>
      <?php
         // define variables and set to empty values
         $nameErr = $emailErr = $genderErr = $websiteErr = "";
         $name = $email = $gender = $comment = $website = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
               $nameErr = "Name is required";
            }else {
               $name = test_input($_POST["name"]);
            }
            
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            }else {
               $email = test_input($_POST["email"]);
               
               // check if e-mail address is well-formed
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
            }
            
            if (empty($_POST["website"])) {
               $website = "";
            }
            else {
               $website = test_input($_POST["website"]);
            }
            
            if (empty($_POST["comment"])) {
               $comment = "";
            }else {
               $comment = test_input($_POST["comment"]);
            }
            
            if (empty($_POST["gender"])) {
               $genderErr = "Gender is required";
            }else {
               $gender = test_input($_POST["gender"]);
            }
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
     
      <h2>HeadHack regestration Form</h2>
     
      <p><span class = "error">* required field.</span></p>
     
      <form method = "post" action = "<?php 
         echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <table>
            <tr>
               <td>Name:</td>
               <td><input type = "text" name = "name">
                  <span class = "error">* <?php echo $nameErr;?></span>
               </td>
            </tr>
           
            <tr>
               <td>E-mail: </td>
               <td><input type = "text" name = "email">
                  <span class = "error">* <?php echo $emailErr;?></span>
               </td>
            </tr>
           
            <tr>
               <td>Time:</td>
               <td> <input type = "text" name = "website">
                  <span class = "error"><?php echo $websiteErr;?></span>
               </td>
            </tr>
            
            <tr>
               <td>Classes:</td>
               <td> <textarea name = "comment" rows = "5" cols = "40"></textarea></td>
            </tr>
            
            <tr>
               <td>Gender:</td>
               <td>
                  <input type = "radio" name = "gender" value = "female">Female
                  <input type = "radio" name = "gender" value = "male">Male
                  <span class = "error">* <?php echo $genderErr;?></span>
               </td>
            </tr>
				
            <td>
               <input type = "submit" name = "submit" value = "Submit"> 
            </td>
				
         </table>
			
      </form>
      
      <?php
         echo "<h2>Your given values are as:</h2>";
         echo $name;
         echo "<br>";
         
         echo $email;
         echo "<br>";
         
         echo $website;
         echo "<br>";
         
         echo $comment;
         echo "<br>";
         
         echo $gender;
      ?>
   
   </body>
</html>         
                
                
            </div>
            </div>
            
            
            
            
            
               
            <br>    
				    <a href="phpFormIntro.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="phpCompleteForm.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
  					
  					
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


