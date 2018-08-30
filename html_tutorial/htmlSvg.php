<?php $page = '49'; include '../header.php' ?>
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
			<h1>HTML SVG Tag</h1>
 				 <a href="htmlCanvasTag.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="../" class="w3-btn w3-teal" style="float: right;">HOME</a>
            
        
     <h2>What is SVG?</h2>
      <ul>
        <li>SVG stands for Scalable Vector Graphics</li>
        <li>SVG is used to define graphics for the Web</li>
        <li>SVG is a W3C recommendation</li>
      </ul> 
      <h2>The HTML <code>&lt;svg&gt;</code> Element</h2>
      <p>The HTML <code>&lt;svg&gt;</code> element is a container for SVG graphics.<br><br>SVG has several methods for drawing paths, boxes, circles, text, and graphic images.</p>
      <h2>SVG Circle</h2>
      <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">              
            &lt;!DOCTYPE html&gt; <br>
            &lt;html&gt; <br>
            &lt;body&gt; <br>
<br>
            &lt;svg width="100" height="100"&gt; <br>
              &lt;circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="yellow" /&gt; <br>
            &lt;/svg&gt; <br>
<br>
            &lt;/body&gt; <br>
            &lt;/html&gt; <br>
        </div>
          <a href="examples/html_TryitYourself_id=122.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br> 
    </div>
    <h2>SVG Rectangle</h2>
      <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">              
           &lt;svg width="400" height="100"&gt; <br>
              &lt;rect width="400" height="100" style="fill:rgb(0,0,255);stroke-width:10;stroke:rgb(0,0,0)" /&gt; <br>
            &lt;/svg&gt;  <br>
        </div>
          <a href="examples/html_TryitYourself_id=123.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br> 
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


    <h2>SVG Rounded Rectangle</h2>
      <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">              
           &lt;svg width="400" height="180"&gt; <br>
            &lt;rect x="50" y="20" rx="20" ry="20" width="150" height="150" <br>
            style="fill:red;stroke:black;stroke-width:5;opacity:0.5" /&gt; <br>
          &lt;/svg&gt; <br>
        </div>
          <a href="examples/html_TryitYourself_id=124.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br> 
    </div> 
    <h2>SVG Star</h2>
      <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">              
           &lt;svg width="300" height="200"&gt; <br>
            &lt;polygon points="100,10 40,198 190,78 10,78 160,198"<br>
            style="fill:lime;stroke:purple;stroke-width:5;fill-rule:evenodd;" /&gt; <br>
          &lt;/svg&gt; <br>
        </div>
          <a href="examples/html_TryitYourself_id=125.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br> 
    </div> 
    <h2>SVG Logo</h2>
      <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">              
           &lt;svg height="130" width="500"&gt;<br>
            &lt;defs&gt;<br>
              &lt;linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%"&gt;<br>
                &lt;stop offset="0%" style="stop-color:rgb(255,255,0);stop-opacity:1" /&gt;<br>
                &lt;stop offset="100%" style="stop-color:rgb(255,0,0);stop-opacity:1" /&gt;<br>
              &lt;/linearGradient&gt;<br>
            &lt;/defs&gt;<br>
            &lt;ellipse cx="100" cy="70" rx="85" ry="55" fill="url(#grad1)" /&gt;<br>
            &lt;text fill="#ffffff" font-size="45" font-family="Verdana" x="50" y="86"&gt;SVG&lt;/text&gt;<br>
            Sorry, your browser does not support inline SVG.<br>
          &lt;/svg&gt;<br>
        </div>
          <a href="examples/html_TryitYourself_id=126.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br> 
    </div>
    <h2>Differences Between SVG and Canvas</h2> 
    <p>SVG is a language for describing 2D graphics in XML.<br><br>Canvas draws 2D graphics, on the fly (with a JavaScript).<br><br>SVG is XML based, which means that every element is available within the SVG DOM. You can attach JavaScript event handlers for an element.<br><br>In SVG, each drawn shape is remembered as an object. If attributes of an SVG object are changed, the browser can automatically re-render the shape.<br><br>Canvas is rendered pixel by pixel. In canvas, once the graphic is drawn, it is forgotten by the browser. If its position should be changed, the entire scene needs to be redrawn, including any objects that might have been covered by the graphic.</p>
       
   


				    <a href="htmlCanvasTag.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="../" class="w3-btn w3-teal" style="float: right;">HOME</a>
  					
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


