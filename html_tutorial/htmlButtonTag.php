    <?php $page = '26'; include '../header.php' ?>
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
			<h1>HTML Button Tag</h1>
 				 <a href="htmlInputTag.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="htmlHrTag.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            
         <div class="w3-panel w3-pale-yellow w3-leftbar w3-border-yellow">
        <p style="line-height: 28px">The &lt;button&gt; tag is used to create a clickable button within HTML form on your webpage. You can put content like text or image within the &lt;button&gt;........&lt;/button&gt; tag.</p>
      </div> 
      <p>You should always specify the type attribute for a &lt;button&gt; tag. Different browsers use different default type for the button element.<br><br>HTML Button tag can be used inside and outside the form.<br><br>If you use it <b>inside the form</b>, it works as the submit button. You can also use it as reset button.<br><br>If you use it <b>outside the form</b>, you can call JavaScript function on it.</p>
      <h2>HTML Button Tag Example</h2>    
    <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">
            &lt;button name="button" type="button"&gt;Click Here&lt;/button&gt;  
        </div>
          <a href="examples/html_TryitYourself_id=82.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br> 
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


    <h2>HTML Button Example: Calling JavaScript Function</h2>
    <p>Let's see the code to call JavaScript function on button click.</p>
    <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">
            &lt;button name="button" value="OK" type="button" onclick="hello()"&gt;Click Here&lt;/button&gt;  <br>
            &lt;script&gt;<br>  
                function hello(){  <br>
                alert("hello headhack user");  <br>
                }  <br>
            &lt;/script&gt;
        </div>
          <a href="examples/html_TryitYourself_id=83.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br> 
    </div>
    <h2>HTML Button Example: Submit Form</h2>
    <p>Let's see the code to submit form on button click.</p>
    <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">
            &lt;form&gt;<br>  
            Enter Name:&lt;input type="text" name="name"/&gt;&lt;br/&gt; <br> 
            &lt;button>Submit&lt;/button&gt;<br>  
            &lt;/form&gt; 
        </div>
          <a href="examples/html_TryitYourself_id=84.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br> 
    </div>
    <h2>HTML Button Example: Reset Form</h2>
    <p>Let's see the code to reset form on button click.</p>
    <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">
            &lt;form&gt;  <br>
            Enter Name:&lt;input type="text" name="name"/&gt;&lt;br/&gt;  <br>
            &lt;button type="reset"&gt;reset&lt;/button&gt;  <br>
            &lt;/form&gt;   
        </div>
          <a href="examples/html_TryitYourself_id=85.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br> 
    </div>
    <h2>Attributes of HTML Button Tag</h2>
    <p>&lt;button&gt; tag supports all global attributes and some specific additional attributes.<br><br>There is given a list of HTML button tag attributes.</p>
    <table class="w3-table-all w3-card-4">
              <tr class="w3-teal">
                <th>Tag</th>
                <th>Description</th>
              </tr>
              <tr>
                <td>autofocus</td>
                <td>It specifies that a button should automatically get focus while the loading of the page.</td>
              </tr>
              <tr>
                <td>disabled</td>
                <td>It specifies that a button shuld be disabled.</td>
              </tr>       
              <tr>
                <td>form</td>
                <td>It specifies one or more forms that the button belongs to.</td>
              </tr> 
              <tr>
                <td>formaction</td>
                <td>It is used for submit type. It specifies where to send the form data when form is submitted.</td>
              </tr>     
              <tr>
                <td>formmethod</td>
                <td>It specifies how to send form-data.</td>
              </tr> 
              <tr>
                <td>formenctype</td>
                <td>It specifies how form-data should be encoded before sending it to server.</td>
              </tr> 
              <tr>
                <td>formnovalidate</td>
                <td>It specifies that the form data should not be validated on submission.</td>
              </tr>
              <tr>              
                  <td>formtarget</td>
                  <td>It specifies that where to display the response after submitting the form.</td>                
              </tr>
              <tr>
                <td>name</td>
                <td>It specifies the name of the button.</td>
              </tr>
              <tr>
                <td>type</td>
                <td>It specifies the type of the button.</td>
              </tr> 
              <tr>
                <td>value</td>
                <td>It specifies the value of the button.</td>
              </tr>            
    </table>



    <div class="w3-panel w3-pale-yellow w3-leftbar w3-border-yellow">    
       <b> HTML button tag also supports the global and event attributes in HTML.</b>
      </div>
            
      


				    <a href="htmlInputTag.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="htmlHrTag.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
  					
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


