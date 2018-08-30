<div class="w3-container w3-border-top w3-border-blue">
<div class="w3-third " >
    
    <h3><strong><code><span style="border-bottom:3px solid green">You</span>r Feedback</code></strong></h3>
<form action="connect.php" method="post" target="_blank" />
  <strong>Name:</strong><br>
  <input type="text" name="name" required style="width:90%;" class="w3-border w3-hover-border-green" placeholder="Full Name"><br>
 
  <strong>Email:</strong><br>
  <input type="email" name="email_id" required style="width:90%;" class="w3-border w3-hover-border-green" placeholder="Email ID"><br> 
<strong>Message:</strong><br>
    <textarea name="feedback" required style="width:90%;" class="w3-border w3-hover-border-green" placeholder="Write your feedback/suggestion"></textarea><br>
 
<input type="submit" value="Submit" class="w3-btn w3-border" >
    </div>
    
    
    
    
    
    
<div class="w3-third">
    <h3><strong><code><span style="border-bottom:3px solid green">Tec</span>h Quotes</code></strong></h3>
    <div class="w3-content w3-display-container" style="height:250px;width:95%;float:left">
       
        
        
        <div class="mySlides w3-center">            
            <h1 style="font:italic bold 20px/25px Georgia, serif;color:gray;line-height:50px">“The best thing about <br>boolean is even if<br> you are wrong,<br> you are only off by a bit.”</h1>
        </div>
        
        <div class="mySlides w3-center">            
            <h1 style="font:italic bold 30px/30px Georgia, serif;color:brown;line-height:50px">“The best way<br> to predict the future<br> is to invent it.”</h1>
        </div>
        <div class="mySlides w3-center">            
            <h1 style="font:italic bold 30px/30px Georgia, serif;color:lightblue;line-height:50px">“We are changing<br> the world with <br> technology”</h1>
        </div>
        
  

  <button class="w3-button w3-cyan w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-cyan w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

  
    
    </div>
    
    
<div class="w3-third">
     <h3><strong><code><span style="border-bottom:3px solid green">Con</span>tact Us</code></strong></h3>
    <span><img src="../images/envlop.png" style="width:25px;height:25px"/></span><span><code>&nbsp;Email:<strong>contact@headhack.in</strong></code></span><br><br>
    
    <span><img src="../images/web.png" style="width:25px;height:25px"/></span><span><code>&nbsp;Website:<strong>HeadHack.in</strong></code></span><br><br>
    
    <span><a href="https://www.facebook.com/Headhack15/" class="w3-hover" target="_blank"><img src="/images/fb.png" style="width:50px;height:40px" /></a></span>
    
    <span><a href="https://plus.google.com/u/0/106005021442472906664" class="w3-hover" target="_blank"><img src="/images/g++.png" style="width:50px;height:40px" /></a></span>
    
    </div>
</div>

<h5 class="w3-center w3-panel w3-card-4">Copyright&copy; 2017 <a href="../" style="color:green"><code>HeadHack.in</code></a>&nbsp;&nbsp;    Read Our&nbsp;<a href="../privacy_policy/" style="color:green">Privacy Policy</a></h5>




</body>
</html>