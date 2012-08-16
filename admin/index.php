<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<!-- jQuery CheckBox: http://widowmaker.kiev.ua/checkbox/ -->
<link type='text/css' rel='stylesheet' href='../plugins/checkbox/jquery.checkbox.css'/>
<link type='text/css' rel='stylesheet' href='../plugins/checkbox/jquery.safari-checkbox.css'/>
<!-- <script type='text/javascript' src='../plugins/checkbox/jquery.js'></script> -->
<script type='text/javascript' src='../plugins/checkbox/jquery.checkbox.min.js'></script>

<script type="text/javascript">
$(function(){

	$('input:checkbox:not([safari])').checkbox();

});
</script>

<link type="text/css" rel="stylesheet" href="css/admin.css" media="all" />
<title>Admin set</title>
</head>
<body>

<?php

	if (isset($_POST["submit"])) {
	
		$post = $_POST;
		
		$cookie = "";
		
		foreach ($post as $key => $val) {
		
			if ($val=="on") {
			
				$cookie.= $key.",";
			
			}
		
		}
	
		$cookie = substr_replace($cookie ,"",-1);
		
		file_put_contents("plugins.ini",$cookie);
	
	}
	
	if (file_exists("plugins.ini"))
	{
	
		$plugins = file_get_contents("plugins.ini");
	
		$plugin = explode(",",$plugins);
	
	}
	
?>
	
    <div class="wrapper">
    
        <div class="content">
        
            <table id="tplugins">
			
			<form action="/admin/" method="post" />
			
				<!-- jQuery -->
                <tr><td><div class="h"><a href="http://jquery.com" class="l" target="_blank">jQuery</a><input type="checkbox" class="l" <?php echo (in_array("jquery",$plugin)) ? "checked='checked'" : ""; ?> name="jquery" /></div></div></td></tr>
								
				<!-- jQuery-UI -->
                <tr><td><div class="h"><a href="http://jqueryui.com" class="l" target="_blank">jQuery UI</a><input type="checkbox" class="l" <?php echo (in_array("jqueryui",$plugin)) ? "checked='checked'" : ""; ?> name="jqueryui" /></div></td></tr>
				
				<!-- jQuery Cookie -->
				<tr><td><div class="h"><a href="https://github.com/carhartl/jquery-cookie/" class="l" target="_blank">jQuery cookie</a><input type="checkbox" class="l" <?php echo (in_array("jqcookie",$plugin)) ? "checked='checked'" : ""; ?> name="jqcookie" /></div></td></tr>
				
				<!-- jQuery ScrollPane & Mouswheel -->
				<tr><td><div class="h"><a href="http://jscrollpane.kelvinluck.com" class="l" target="_blank">jScrollPane & Mousewheel</a><input type="checkbox" class="l" <?php echo (in_array("jscrollpane",$plugin)) ? "checked='checked'" : ""; ?> name="jscrollpane" /></div></td></tr>
				
				<!-- jQuery scrollTo -->
				<tr><td><div class="h"><a href="http://flesler.blogspot.com/2007/10/jqueryscrollto.html" class="l" target="_blank">scrollTo</a><input type="checkbox" class="l" <?php echo (in_array("scrollto",$plugin)) ? "checked='checked'" : ""; ?> name="scrollto" /></div></td></tr>
				
				<!-- jQuery mTip -->
				<tr><td><div class="h"><a href="http://dev.mauvm.nl/mTip/#manual" class="l" target="_blank">mTip</a><input type="checkbox" class="l" <?php echo (in_array("mtip",$plugin)) ? "checked='checked'" : ""; ?> name="mtip" /></div></td></tr>
				
				<!-- jQuery cusel -->
				<tr><td><div class="h"><a href="http://www.xiper.net/collect/html-and-css-tricks/verstka-form/nice-select-jquery.html" class="l" target="_blank">cuSel</a><input type="checkbox" class="l" <?php echo (in_array("cusel",$plugin)) ? "checked='checked'" : ""; ?> name="cusel" /></div></td></tr>
				
				<!-- StickyScrollMenu -->
				<tr><td><div class="h"><a href="http://blog.echoenduring.com/2010/11/15/freebie-contained-sticky-scroll-jquery-plugin/" class="l" target="_blank">StickyScroll Menu</a><input type="checkbox" class="l" <?php echo (in_array("stickyscrollmenu",$plugin)) ? "checked='checked'" : ""; ?> name="stickyscrollmenu" /></div></td></tr>
				
				<!-- CheckBox -->
				<tr><td><div class="h"><a href="http://widowmaker.kiev.ua/checkbox/" class="l" target="_blank">CheckBox</a><input type="checkbox" class="l" <?php echo (in_array("chkbox",$plugin)) ? "checked='checked'" : ""; ?> name="chkbox" /></div></td></tr>

				<!-- Kwicks -->
				<tr><td><div class="h"><a href="http://ruseller.com/adds/adds2276/example/" class="l" target="_blank">Kwicks</a><input type="checkbox" class="l" <?php echo (in_array("kwicks",$plugin)) ? "checked='checked'" : ""; ?> name="kwicks" /></div></td></tr>
				
				<tr><td><div class="h"><input align="left" type="submit" value="Применить плагины" class="sub" name="submit"/> </span></td><td><span>&nbsp;</div></td>
				
			</form>
				
            </table>
        
        </div>
    <a href="/">root..</a>
    </div>
    
</body>
</html>