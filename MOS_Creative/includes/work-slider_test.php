
<div id="da-slider" class="da-slider shadow"  style="background:white;">
	
	<div class="da-slide">
    	<h2 class="work-slide" style="">Premier Home Building<br/>Branding</h2>
        <a style="padding:20px" href="#" class="da-link">More about him<div class="arrow "></div></a>
		<div class="da-description" style="top: 300px; left:300px; position:relative; visibility:hidden;">
        	first description first description first description first description first description
        </div>
       <div class="da-img"><img src="images/project-bhn.png" alt="Tony" /></div>
	</div>
	<div class="da-slide">
		<h2>Dorothy Philips<br/>Print &amp; Web Desigher</h2>
        <a href="#" class="da-link">More about her<div class="arrow"></div></a>
		<div class="da-description" style="visibility:hidden;">other description other descriptionother descriptionother description</div>
		<div class="da-img"><img src="images/dorothy.png" alt="Dorothy" /></div>
	</div>
	<!--<div class="da-arrows">
		<span class="da-arrows-prev"></span>
		<span class="da-arrows-next"></span>
	</div>-->
</div><!-- end #da-slider -->

<!--<div id="testdiv" style="border:1px solid black;width:100px; z-index:1000; position:absolute;">TESTING</div>-->
<div id="test" style="border:1px solid blue;width:200px;margin-left:10%;"><p></p></div>

<button onclick="CHANGE()">TESTING</button>

<script>
	function CHANGE()
	{
		//document.getElementsByClassName("da-slide-current")[0].innerHTML="Hello World";
		var x = document.getElementsByClassName("da-slide-current")[0].getElementsByClassName("da-description")[0].innerHTML;
		document.getElementById("test").innerHTML= x;
	}
</script>