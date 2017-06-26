<html>



<head>

<style>
		body {background-color:grey}
       #upload,#download,#title,#bug,#viewbug  {     
        margin : 0 auto;
        border : 5px solid #0000ff;
        padding : 30px;
        width : 600px;
        
            
       }  
	   
	   
        
        
        </style>
		</head>
		
	<body>	
		
		<div id="upload">
		
		<font size="6">
<b>
<p style="color:blue;text-align:center;font-family:verdana">Developer</p>
<form action="index.php" method = "post" >

<input type = "submit" value="Sign Out" style="color:blue;font-family:verdana" name ="Logout" >


</form>
</b>
</font>
<br>
<br>
<b>
</div>
<div id="upload">
<p style="color:blue;text-align:center;font-family:verdana">Upload Projects </p>
<form action="index.php" method = "POST" style="color:blue;font-family:verdana" enctype = "multipart/form-data" >

<input type = "file" style="color:blue;font-family:verdana" name="file">
<input type = "submit" value="Upload Files" style="color:blue;font-family:verdana" name ="upload">
<br>
<br>
</div>
</form>

</body>

<div id="download">
<p style="color:blue;text-align:center;font-family:verdana">Download Projects :</p>
<form action="index.php" method = "post" >

<input type = "submit" value="Available Downloads" style="color:blue;font-family:verdana" name= "Download">


</form>
</div>
<div id="bug">
<p style="color:blue;text-align:center;font-family:verdana">File Bug Report :</p>
<form action="index.php" method = "POST" enctype = "multipart/form-data">
</b>

<p style="color:blue;font-family:verdana">Project ID :</p>  <INPUT TYPE = "Text" NAME = "projectID"> <br>
<p style="color:blue;font-family:verdana">Bug Description :</p> <INPUT TYPE = "Text" size="50" maxlength="50" NAME = "bugDesc">
<br>
<input type = "submit" value="Submit" style="color:blue;font-family:verdana" name = 'bug'>
<br>
<br>
</form>
</div>
<b>
<div id="viewBug">
<p style="color:blue;text-align:center;font-family:verdana">View Bug Report :</p>
</b>
<form action="index.php" method = "POST" enctype = "multipart/form-data">

<p style="color:blue;font-family:verdana">Project ID :</p>  <INPUT TYPE = "Text" NAME = "bugProject"> <br>
<br>
<input type = "submit" value="View" style="color:blue;font-family:verdana" name = "viewBug">
</form>
</div>


</html>

