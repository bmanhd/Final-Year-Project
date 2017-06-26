<html>



<head>
<style>
		body {background-color:grey}
       #upload,#bug,#view {     
        margin : 0 auto;
        border : 5px solid #0000ff;
        padding : 30px;
        width : 600px;
        
            
       }  
        
        
        </style>
		</head>
		
	<body>	
		<div id="upload">
		
		<font size="4">
<b>
<p style="color:blue;text-align:center;font-family:verdana">Non Developer Page </p>
<form action="index.php" method = "post" >

<input type = "submit" value="Logout" name ="Logout">


</form>
</b>
</font>
<br>
<br>
<b>
</div>
<div id="upload">
</body>

<p style="color:blue;text-align:center;font-family:verdana">Download Projects :</p>
<form action="index.php" method = "post" >

<input type = "submit" value="Download List" name ="DownloadN">


</form>
</div>

<div id="bug">
<p style="color:blue;text-align:center;font-family:verdana">File Bug Report :</p>
<form action="index.php" method = "POST" enctype = "multipart/form-data">
</b>

<p style="color:blue;font-family:verdana">Project ID : </p> <INPUT TYPE = "Text" NAME = "projectID"> <br>
<p style="color:blue;font-family:verdana">Bug Description : <INPUT TYPE = "Text" size="50" maxlength="50" NAME = "bugDesc">
<br>
<input type = "submit" value="Submit" name = 'bugN'>
<br>
<br>
</form>
</div>

<div id="view">
<b>
<p style="color:blue;text-align:center;font-family:verdana">View Bug Report :</p>
</b>
<form action="index.php" method = "POST" enctype = "multipart/form-data">

<p style="color:blue;font-family:verdana">Project ID : &nbsp &nbsp &nbsp &nbsp &nbsp </p> <INPUT TYPE = "Text" NAME = "bugproject"> <br>
<br>
<input type = "submit" value="View" name = "viewbugN">
</form>

</div>

</html>


<?php



?>