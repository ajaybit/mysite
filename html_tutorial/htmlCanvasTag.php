<?php $page = '48'; include '../header.php' ?>
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
			<h1>HTML Cnavas Tag</h1>
 				 <a href="htmlWbrTag.php" class="w3-btn w3-border">PREVIOUS</a>
				 <a href="htmlSvg.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
            
        
    <div class="w3-panel w3-pale-yellow w3-leftbar w3-border-yellow">
        <p style="line-height: 28px">The HTML canvas element provides HTML a bitmapped surface to work with. It is used to draw graphics on the web page.<br><br>The HTML 5 <code>&lt;canvas&gt;</code> tag is used to draw graphics using scripting language like JavaScript.</p>
      </div>      
            <p>The <code>&lt;canvas&gt;</code> element is only a container for graphics, you must need a scripting language to draw the graphics. The <code>&lt;canvas&gt;</code> element allows for dynamic and scriptable rendering of 2D shapes and bitmap images.<br><br>It is a low level, procedural model that updates a bitmap and does not have a built-in scene. There are several methods in canvas to draw paths, boxes, circles, text and add images.</p>
      <h2>How to create a HTML canvas?</h2>
      <p>A canvas is a rectangle like area on an HTML page. It is specified with canvas element. By default, the &lt;canvas&gt; element has no border and no content, it is like a container.</p>      
    <div class="w3-panel w3-card-2 w3-light-grey">      
        <div class="w3-code htmlHigh notranslate">
            &lt;canvas id = "mycanvas" width ="200" height ="100"&gt; &lt;/canvas&gt;  
        </div>
    </div>
    <h2>HTML 5 Canvas Tag Example</h2>
    <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">
            &lt;canvas id="myCanvas1" width="300" height="100" style="border:2px solid;"&gt; <br> 
            Your browser does not support the HTML5 canvas tag. <br> 
            &lt;/canvas&gt; 
        </div>
          <a href="examples/html_TryitYourself_id=115.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br> 
    </div>
    <div class="w3-panel w3-pale-red w3-leftbar w3-border-red">
        <p style="line-height: 28px"><b>Note:</b> It is always necessary to specify the id attribute and the height & width attribute to define the size of the canvas. You can have multiple canvas elements on one HTML page.</p>
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

    <h2>HTML Canvas Tag (Draw a Line)</h2>
    <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">              
            &lt;script&gt; <br> 
            var c = document.getElementById("myCanvas");<br>
            var ctx = c.getContext("2d");<br>
            ctx.moveTo(0,0);<br>
            ctx.lineTo(200,100);<br>
            ctx.stroke();<br>
            &lt;/script&gt;   <br>
        </div>
          <a href="examples/html_TryitYourself_id=116.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br> 
    </div>
    <h2>HTML Canvas Tag (Draw a Circle)</h2>
    <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">              
            &lt;script&gt; <br> 
            var c = document.getElementById("myCanvas");<br>
            var ctx = c.getContext("2d");<br>
            ctx.beginPath();<br>
            ctx.arc(95,50,40,0,2*Math.PI);<br>
            ctx.stroke();<br>
            &lt;/script&gt;   <br>
        </div>
          <a href="examples/html_TryitYourself_id=117.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br> 
    </div>
    <h2>HTML Canvas Tag (Draw a Text)</h2>
    <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">              
            &lt;script&gt; <br> 
            var c = document.getElementById("myCanvas");<br>
            var ctx = c.getContext("2d");<br>
            ctx.font = "30px Arial";<br>
            ctx.fillText("Hello World",10,50);<br>
            &lt;/script&gt;   <br>
        </div>
          <a href="examples/html_TryitYourself_id=118.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br> 
    </div>
    <h2>HTML Canvas Tag (Draw a Strock Text)</h2>
    <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">              
            &lt;script&gt; <br> 
            var c = document.getElementById("myCanvas");<br>
            var ctx = c.getContext("2d");<br>
            ctx.font = "30px Arial";<br>
            ctx.strokeText("Hello World",10,50);<br>
            &lt;/script&gt;   <br>
        </div>
          <a href="examples/html_TryitYourself_id=119.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br> 
    </div>
    <h2>HTML Canvas Tag (Draw Linear Gradient)</h2>
    <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">              
            &lt;script&gt; <br> 
            var c = document.getElementById("myCanvas");<br>
            var ctx = c.getContext("2d");<br>
<br>
            // Create gradient<br>
            var grd = ctx.createLinearGradient(0,0,200,0);<br>
            grd.addColorStop(0,"red");<br>
            grd.addColorStop(1,"white");<br>
<br>
            // Fill with gradient<br>
            ctx.fillStyle = grd;<br>
            ctx.fillRect(10,10,150,80);<br>
            &lt;/script&gt;   <br>
        </div>
          <a href="examples/html_TryitYourself_id=120.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br> 
    </div>  
    <h2>HTML Canvas Tag (Draw Circular Gradient)</h2>
    <div class="w3-panel w3-card-2 w3-light-grey"> 
      <h4>Example</h4>
        <div class="w3-code htmlHigh notranslate">              
            &lt;script&gt; <br> 
            var c = document.getElementById("myCanvas");<br>
            var ctx = c.getContext("2d");<br>
<br>
            // Create gradient<br>
            var grd = ctx.createRadialGradient(75,50,5,90,60,100);<br>
            grd.addColorStop(0,"red");<br>
            grd.addColorStop(1,"white");<br>
<br>
            // Fill with gradient<br>
            ctx.fillStyle = grd;<br>
            ctx.fillRect(10,10,150,80);<br>
            &lt;/script&gt;   <br>
        </div>
          <a href="examples/html_TryitYourself_id=121.html" class="w3-btn w3-teal" target="_blank">Run</a> <br><br> 
    </div>      
       
   


				    <a href="htmlWbrTag.php" class="w3-btn w3-border">PREVIOUS</a>
  					<a href="htmlSvg.php" class="w3-btn w3-teal" style="float: right;">NEXT</a>
  					
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


