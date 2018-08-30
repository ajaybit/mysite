<?php $page = '9'; include '../header.php' ?>
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
			<h1>HTML Images</h1>
 				 <a href="htmlAnchor.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="htmlTable.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
             <div class="w3-panel w3-pale-yellow w3-leftbar w3-border-yellow">
        <p style="line-height: 28px">Images are very important to beautify as well as to depict many complex concepts in simple way on your web page. This tutorial will take you through simple steps to use images in your web pages.<p>
      </div> 
      <h2>Insert Image</h2>
            <p>You can insert any image in your web page by using &lt;img&gt; tag. Following is the simple syntax to use this tag.</p>
      <div class="w3-panel w3-pale-yellow w3-leftbar w3-border-yellow"><p><h3>Syntax:</h3><strong><code>&lt;img src="Image URl"........attributes-List&gt;</code></strong></p></div>


    <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">
          &lt;!DOCTYPE html&gt;<br>
          &lt;html&gt;<br>
          &lt;head&gt; &lt;title&gt;This is image Tag&lt;/title&gt;<br> 
          &lt;/head&gt;<br>
          &lt;body&gt;<br>
          &lt;p&gt;This is image tag&lt;/p&gt;<br>
          &lt;img src="images/image.png" alt="Image Tag"&gt;<br>

          &lt;/body&gt;<br>
          &lt;/html&gt;
        </div>
         <a href="examples/html_TryitYourself_id=24.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br>
    </div>
   <h2>The alt Attibute</h2>
   <p>The alt attribute provides an alternate text for image, if the user for some reason cannot view it(because  of slow connection,  an error in the src attribute, or it the user uses a screen reader).<br><br>If borwser cnanot find image, it will display the value  of the alt attribute:</p>
   <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">
          &lt;img src="Unknown source" alt="There is a image"&gt;
        </div>
         <a href="examples/html_TryitYourself_id=28.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br>
    </div>
    <p>The alt attribute is required. A web page will not validate correctly without it.</p>
    <h2>HTML Screen Readers</h2>
    <p>A Screen Reader is a software that reads the HTML code,  converts the text, and allows the user to 'listen' to the content. Screen Readers are useful for people are blind, visually impaired, or learning disable.</p>
    <br>
    <h2>Image Size - Width and Height</h2>
    <p>You can use <b>style</b> attribute to specify the width and height of an image.<br><br>The Value are specified in pixels (use <i>px</i> after the value):</p>
    <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">
          &lt;img src="images/image.png" alt="Headhack image" style="width:100px;height:50px;"&gt;
        </div>
         <a href="examples/html_TryitYourself_id=29.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br>
    </div>
    <p>Alternatively, You can use the <b>width</b> and <b>height</b> attributes. Here, the value are specified in pixels by default.</p>
    <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">
          &lt;img src="images/image.png" alt="Headhack image" width="200" height="100"&gt;
        </div>
         <a href="examples/html_TryitYourself_id=30.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br>
    </div>
    <div class="w3-panel w3-pale-yellow w3-leftbar w3-border-yellow "><p><b>Note:</b> Always specify the width and height of an image. If width and height are not specified, the page will flicker while the image loads.</p></div>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- SquireBox -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-4645356742269640"
     data-ad-slot="4162882890"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

    <h2>Width and Height or Style</h2>
    <p>Both the width, height, ans style attributes are valid in HTML5<br><br>However, we suggest using the style attribute. It prevents internal or external or style sheets from changing the orignal size of images:</p>
    <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">
          &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>&lt;style&gt;<br>img{<br>width:100%;<br>}<br> &lt;/style&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;img src="images/image.png alt="Headhack Image" style="width:300px;height:150px;"&gt;<br>&lt;/body&gt;<br>
          &lt;/html&gt;
        </div>
         <a href="examples/html_TryitYourself_id=31.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br>
    </div>
    <h2>Using Image as a Link</h2>
    <p>To use the image as a link, simply nest &lt;img&gt; tag inside the &lt;a&gt; tag:</p>
    <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
      <div class="w3-code htmlHigh notranslate">
          &lt;a href="index.html"&gt;<br>
          &lt;img src="images/image.png" alt="Headhack image"&gt;<br>
          &lt;/a&gt;
      </div>
         <a href="examples/html_TryitYourself_id=32.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br>
    </div>
    <h2>Image Floating</h2>
    <p>Use the CSS <b>float</b> property to let the image float to the right or to the left of the text:</p>
    <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
      <div class="w3-code htmlHigh notranslate">
          &lt;p&gt;&lt;img src="images/image.png" alt="Headhack image" style="float:left;width:200px;height:100px"&gt;<br>The image will float to left of the text.&lt;/p&gt;<br><br>
          &lt;p&gt;&lt;img src="images/image.png" alt="Headhack image" style="float:right;width:200px;height:100px"&gt;<br>The image will float to the right of the text.&lt;/p&gt;
      </div>
         <a href="examples/html_TryitYourself_id=33.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br>
    </div>
    <h2>Chapter Summary</h2>
    <p><ul>
        <li>Use the HTML &lt;img&gt; element to define an image</li>
        <li>Use the HTML <b>src</b> attribute to define the URL of the image</li>
        <li>Use the HTML <b>alt</b> attribute to define an alternate text for an image, if it cannot be displayed</li>
        <li>Use the HTML <b>width and height</b> attributes to define the size of the image</li>
        <li>Use the CSS width and height properties to define the size of the image (alternatively)</li>
        <li>Use the CSS <b>float</b> property to let the image float</li>
      </ul>
    </p>

            
           

            
      


				    <a href="htmlAnchor.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="htmlTable.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>

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


