<?php $page = '15'; include '../header.php' ?>
<div class="w3-container w3-col ">
<div id="leftSideMenu" class="w3-quarter ">
<?php include 'htmlMenu.php' ?>
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
			<h1>HTML Form</h1>
 				 <a href="htmlDiscriptionList.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="htmlMarquee.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            
       
        <div class="w3-panel w3-pale-yellow w3-leftbar w3-border-yellow">
        <p style="line-height: 28px">An HTML form is a section of a document which contains controls such as text fields, password fields, checkboxes, radio buttons, submit button, menus etc.<br><br>An HTML form facilitates the user to enter data that is to be sent to the server for processing.</p>
      </div> 
      <h2>Why use HTML Form</h2>
      <p>HTML forms are required if you want to collect some data from of the site visitor.<br><br>For example: If a user want to purchase some items on internet, he/she must fill the form such as shipping address and credit/debit card details so that item can be sent to the given address.</p>
      <h2>HTML Form Syntax</h2>    
    <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">
          &lt;form action="server URL method="get/post"&gt;<br>  
            //input controls e.g. textfiel, textarea, radiobutton, button     
          &lt;/form&gt;          
        </div>
    </div>
    <h2>HTML Form Tags</h2>
    <p>Let's see the list of HTML 5 form tags.</p>
    <table class="w3-table-all w3-card-4">
              <tr class="w3-teal">
                <th>Type</th>
                <th>Description</th>
              </tr>
              <tr>
                <td><strong><code>&lt;form&gt;</code></strong></td>
                <td>It defines an HTML form to enter inputs by the used side.</td>
              </tr>
              <tr>
                <td><strong><code>&lt;input&gt;</code></strong></td>
                <td>It defines an input control.</td>
              </tr>
              <tr>
                <td><strong><code>&lt;textarea&gt;</code></strong></td>
                <td>It defines a multi-line input control.</td>
              </tr>
              <tr>
                <td><strong><code>&lt;label&gt;</code></strong></td>
                <td>It defines a label for an input element.</td>
              </tr>
              <tr>
                <td><strong><code>&lt;fieldset&gt;</code></strong></td>
                <td>It groups the related element in a form.</td>
              </tr>
              <tr>
                <td><strong><code>&lt;legend&gt;</code></strong></td>
                <td>It defines a caption for a <strong><code>&lt;fieldset&gt;</code></strong> element.</td>
              </tr>
              <tr>
                <td><strong><code>&lt;select&gt;</code></strong></td>
                <td>It defines a drop-down list.</td>
              </tr>
              <tr>
                <td><strong><code>&lt;optgroup&gt;</code></strong></td>
                <td>It defines a group of related options in a drop-down list.</td>
              </tr>
              <tr>
                <td><strong><code>&lt;option&gt;</code></strong></td>
                <td>It defines an option in a drop-down list.</td>
              </tr>
              <tr>
                <td><strong><code>&lt;button&gt;</code></strong></td>
                <td>It defines a clickable button.</td>
              </tr>
    </table>
    <h2>HTML 5 Tags</h2>
    <table class="w3-table-all w3-card-4">
              <tr class="w3-teal">
                <th>Type</th>
                <th>Description</th>
              </tr>
              <tr>
                <td><strong><code>&lt;detail&gt;</code></strong></td>
                <td>It specifies a list of pre-defined options for input control.</td>
              </tr>
              <tr>
                <td><strong><code>&lt;keygen&gt;</code></strong></td>
                <td>It defines a key-pair generator field for forms.</td>
              </tr>
              <tr>
                <td><strong><code>&lt;output&gt;</code></strong></td>
                <td>It defines the result of a calculation.</td>
              </tr>                            
    </table>
    
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- SquireBox -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-4645356742269640"
     data-ad-slot="4162882890"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
    <h2>HTML TextField Control</h2>
    <p>The type="text" attribute of input tag creates textfield control also known as single line textfield control. The name attribute is optional, but it is required for the server side component such as JSP, ASP, PHP etc.</p>
    <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">
          &lt;form&gt;<br>  
           First Name: &lt;input type="text" name="firstname"/&gt; &lt;br/&gt;<br>  
           Last Name:  &lt;input type="text" name="lastname"/&gt; &lt;br/&gt;<br> 
                 
          &lt;/form&gt;          
        </div>
    </div>
    <h2>Lable tag in Form</h2>
    <p>It is considered better to have label in form. As it makes the code parser/browser/user friendly.<br><br>If you click on the label tag, it will focus on the text control. To do so, you need to have for attribute in label tag that must be same as id attribute of input tag.</p>
    <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">
          &lt;form&gt;<br>  
            &lt;label for="firstname"&gt;First Name: &lt;/label&gt;<br>  
            &lt;input type="text" id="firstname" name="firstname"/&gt; &lt;br/&gt;<br>  
            &lt;label for="lastname"&gt;Last Name: &lt;/label&gt;&lt;br/&gt;<br>  
            &lt;input type="text" id="lastname" name="lastname"/&gt; &lt;br/&gt;<br> 
                 
          &lt;/form&gt;          
        </div>
    </div>
    <h2>HTML Password Field Control</h2>
    <p>The password is not visible to the user in password field control.</p>
      <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">
          &lt;form&gt;<br>  
              &lt;label for="password"&gt;Password: &lt;/label&gt; <br>
              &lt;input type="password" id="password" name="password"/&gt; &lt;br/&gt;<br> 
                 
          &lt;/form&gt;          
        </div>
    </div>
    <h2>HTML5 Email Field Control</h2>
    <p>The email field in new in HTML 5. It validates the text for correct email address. You must use @ and . in this field.</p> 
      <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">
          &lt;form&gt;<br>  
              &lt;label for="email"&gt;Email: &lt;/label&gt; <br>
              &lt;input type="email" id="email" name="email"/&gt; &lt;br/&gt;<br> 
                 
          &lt;/form&gt;          
        </div>
    </div>
    <h2>Radio Button Control</h2>
    <p>The radio button is used to select one from multiple options. It is used in gender, quiz questions etc.<br><br>If you use one name for all the radio buttons, only one radio button can be selected at a time.</p>
      <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">
          &lt;form&gt;<br>  
              &lt;label for="gender"&gt;Gender: &lt;/label&gt; <br>
              &lt;input type="radio" id="gender" name="gender" value="Male"/&gt;Male<br>
              &lt;input type="radio" id="gender" name="gender" value="Feamle"/&gt;Male<br>                  
          &lt;/form&gt;          
        </div>
    </div>
    <h2>Cheackbox Control</h2>
    <p>The checkbox control is used to check multiple options from given checkboxes.</p>
    <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">
          &lt;form&gt;<br>  
          Hobby:&lt;br&gt;<br>  
              &lt;input type="checkbox" id="cricket" name="cricket" value="cricket"/&gt;<br>  
              &lt;label for="cricket"&gt;Cricket&lt;/label&gt;  <br>
              &lt;input type="checkbox" id="football" name="football" value="football"/&gt;<br>  
              &lt;label for="football"&gt;Football&lt;/label&gt;  <br>
              &lt;input type="checkbox" id="hockey" name="hockey" value="hockey"/&gt;<br>  
              &lt;label for="hockey"&gt;Hockey&lt;/label&gt;  <br>
          &lt;/form&gt;            <br>
        </div>
    </div>
    <h2>HTML Form Example</h2>
    <p>Let's see a simple example of creating HTML form.</p>
    <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">
          
            &lt;form action="#"&gt;<br>  
            &lt;table&gt;<br>
              &lt;tr&gt;<br>  
                &lt;td class="tdLabel"&gt;&lt;label for="register_name" class="label"&gt;Enter name:&lt;/label&gt;&lt;/td&gt;<br> 
                &lt;td&gt;&lt;input type="text" name="name" value="" id="register_name" style="width:160px"/&gt;&lt;/td&gt;<br>  
              &lt;/tr&gt;<br>  
              &lt;tr&gt;<br>  
                &lt;td class="tdLabel"&gt;&lt;label for="register_password" class="label"&gt;Enter password:&lt;/label&gt;&lt;/td&gt;<br>  
                &lt;td&gt;&lt;input type="password" name="password" id="register_password" style="width:160px"/&gt;&lt;/td&gt;<br>
              &lt;/tr&gt;<br> 
              &lt;tr&gt;<br>  
                &lt;td class="tdLabel"&gt;&lt;label for="register_email" class="label"&gt;Enter Email:&lt;/label&gt;&lt;/td&gt;<br>  
                &lt;td&gt;&lt;input type="email" name="email" value="" id="register_email" style="width:160px"/&gt;&lt;/td&gt;<br>
              &lt;/tr&gt;<br>  
              &lt;tr&gt;<br>  
                &lt;td class="tdLabel"&gt;&lt;label for="register_gender" class="label"&gt;Enter Gender:&lt;/label&gt;&lt;/td&gt;<br>  
              &lt;td&gt;  
                &lt;input type="radio" name="gender" id="register_gendermale" value="male"/&gt;<br>  
                &lt;label for="register_gendermale"&gt;male&lt;/label&gt;<br>  
                &lt;input type="radio" name="gender" id="register_genderfemale" value="female"/&gt;<br>  
                &lt;label for="register_genderfemale"&gt;female&lt;/label&gt;  <br>
              &lt;/td&gt;<br>  
              &lt;/tr&gt;<br>  
              &lt;tr&gt;<br>  
                &lt;td class="tdLabel"&gt;&lt;label for="register_country" class="label"&gt;Select Country:&lt;/label&gt;&lt;/td&gt;<br>  
                &lt;td&gt;&lt;select name="country" id="register_country" style="width:160px"&gt;<br>  
                &lt;option value="india"&gt;india&lt;/option&gt;<br>  
                &lt;option value="pakistan"&gt;pakistan&lt;/option&gt;<br>  
                &lt;option value="africa&gt;africa&lt;/option&gt;<br>  
                &lt;option value="china"&gt;china&lt;/option&gt;<br>  
                &lt;option value="other"&gt;other&lt;/option&gt;  <br>
                  &lt;/select&gt;<br>  
                &lt;/td&gt;<br>  
              &lt;/tr&gt;<br>  
              &lt;tr&gt;<br>  
                &lt;td colspan="2"&gt;&lt;div align="right"&gt;&lt;input type="submit" id="register_0" value="register"/&gt;  
                  &lt;/div&gt;&lt;/td&gt;<br>  
              &lt;/tr&gt;<br>  
            &lt;/table&gt;<br>  
          &lt;/form&gt;<br>  
        </div>
         <a href="examples/html_TryitYourself_id=57.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br>
    </div>
            
      


				    <a href="htmlDiscriptionList.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="htmlMarquee.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
  					
  					
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


