<?php $page = '8'; include '../header.php' ?>
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
			<h1>HTML Anchor Tag</h1>
 				 <a href="htmlParagraph.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="htmlImage.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            
             <div class="w3-panel w3-pale-yellow w3-leftbar w3-border-yellow">
        <p style="line-height: 28px">Links are found in nearly all web pages. Links allow users to click their way from page to page.<p>
      </div> 
      <h2>HTML Link - Hyperlinks</h2><p>HTML Links are hyperlinks.<br><br>You can click on a link and jump to another document.<br><br>When you move the mouse over a link, the mouse arrow will turn into a little hand.</p>
      <div class="w3-panel w3-pale-yellow w3-leftbar w3-border-yellow"><p><b>Note:</b> A link does not have to be text. It can be Image or any other HTML element.</p></div>
      <h2>HTML Links - Syntax</h2>
      <p>In HTML, links are defined with the <strong><code>&lt;a&gt;</code></strong> tag:<br><b>&lt;a href="URL"&gt;Link text&lt;/a&gt;</b> </p>

    <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">
          &lt;a href="http://www.headhack/html.html"&gt;Visite to our HTML Tutorial&lt;/a&gt;<br>
          
        </div>
         <a href="examples/html_TryitYourself_id=21.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br>
    </div>
    <p>The <b>href</b> attribute specifies the destination address (http://www.headhack.in/html.html/) of the link.<br><br>The <b>link text</b> is the visible part(Visite to our HTML Tutorial)<br><br> Clicking on the text will send you to the specified address.</p>
     <div class="w3-panel w3-pale-yellow w3-leftbar w3-border-yellow"><p><b>Note:</b>Without a forward slash on subfolder addresses, you might generate two requests to the server. Many servers will automatically add a forward slash to the address, and then create a new request.</p></div>
     <h2>Local Link</h2>
     <p>The example above used an absolute URL (A full web address).<br><br>A local link (Link to the same website) is specified with a relative URL (http://www....).</p>
     <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">
          &lt;a href="image.html"&gt;HTML Image&lt;/a&gt;<br>
          
        </div>
         <a href="examples/html_TryitYourself_id=22.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br>
    </div>
    <h2>HTML Link Color</h2>
    <p>By default, a link will appear like this  (in all browsers:)</p>
    <ul>
      <li>All unvisited link is underline and blue</li>
      <li>A visited link is underline and purple</li>
      <li>An active link is underline and red</li>
    </ul>
    <p>You can change the default color, by using styles:</p>
    <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">
          &lt;style&gt;<br>
          a:link{<br>
            color: green;<br>
            background-color: transparent;<br>
            text-decoration: none; <br>
          }<br><br>
          a:visited{<br>
            color: pink;<br>
            background-color: transparent;<br>
            text-decoration: none;<br>
          }<br><br>
          a:hover{<br>
            color: red;<br>
            background-color: transparent;<br>
            text-decoration: underline;<br>
          }<br><br>
          a:active{<br>
            color: yellow;<br>
            background-color: transparent;<br>
            text-decoration: underline;<br>
          }<br>

          &lt;/style&gt;
          
        </div>
         <a href="examples/html_TryitYourself_id=23.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br>
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

    <h2>HTML Links - The target Attribute</h2>
    <p>The <b>targer</b> attribute specifies where to open the linked document.<br><br>The targer attribute can have one of the following values:</p>
    <ul>
      <li>_blank - Open the linked document  in the new window or tab </li>
      <li>_self - Open the linked document in the same  window/tab as it was clicked (this is default)</li>
      <li>_parent - Open the linked document in the parent frame</li>
      <li>_top - Open the linked document in the full body  of the window</li>
      <li>framename - Open the linked document in a named frame</li>
    </ul>
    <p>This example will  open the linked document in a new browser window/tab:</p>
    <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">
          &lt;a href="http://wwww.hradhack.in/" target="_blank"&gt;Visite Headhack.in&lt;/a&gt;          
        </div>
         <a href="examples/html_TryitYourself_id=25.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br>
    </div>
    <p><b>Tip:</b>If your webpage is locked in frame, you can use taget="_top" to break out of the frame:</p>
    <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">
          &lt;a href="http://wwww.hradhack.in/html.html" target="_top"&gt;HTML5 Tutorial&lt;/a&gt;          
        </div>
         <a href="examples/html_TryitYourself_id=26.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br>
    </div>
    <h2>HTML Links - Image as link</h2>
    <p>It is common to use image as link:</p>
    <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">
          &lt;a href="http://wwww.hradhack.in/"&gt;<br>&lt;img src="images/image.png" alt="HTML Tutorial"&gt;<br>
          &lt;/a&gt;          
        </div>
         <a href="examples/html_TryitYourself_id=27.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br>
    </div>
    <h2>Chapter Summary</h2>
    <ul>
      <li>Use the <b>&lt;a&gt;</b> element to define a link</li>
      <li>Use the <b>href</b> attribute to define the link address</li>
      <li>Use the <b>taget</b> attribute to define where to open the link document</li>
      <li>USe the &lt;img&gt; element (inside &lt;a&gt;) to use image as a link</li>
      <li>Use the <b>id</b> attribute (<i>id="value"</i>) to define bookmarks in a page</li>
      <li>Use the <b>href</b> attribute (<i>href="#value"</i>) to link the bookmark</li>
    </ul>
       







				    <a href="htmlParagraph.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="htmlImage.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
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


