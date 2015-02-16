<!DOCTYPE html>
<HTML>
   <link rel="stylesheet" type="text/css" href="testMakingPage.css">
   <HEAD>
   <style>
   div#load_screen{
	background:#FFF;
	opacity:0.7;
	position:fixed;
	z-index:10;
	top: 0px;
	width:100%;
	height:100%;
   }
   </style>
   <script>
   window.addEventListener("load", function(){
   
	var load_screen = document.getElementById("load_screen");
	document.body.removeChild(load_screen);
   });
   </script>
      <TITLE>
	  MegaTest - Online Testing Application
      </TITLE>
   </HEAD>
<BODY>
<div id="load_screen"><img src="images/megamonkeysloading.png" />loading document</div>
<div class="header">
<img src="images/header.png" class="header"/>
<div class="title">Online Test</div>
</div>
<div class="content">
<form action="./logout.php" method="post">
You are login as <span> </span>
<input type="submit" value="Sign out" class="logout-button"></br>
<div class="informationForm">
<table>
<tr>
<td>
Class: &nbsp;
<select class="inputs">
  <option value="CS214">CS 214</option>
  <option value="CS306">CS 306</option>
  <option value="CS414">CS 414</option>
  <option value="BA303">BA 303</option>
</select> </br>
Start: &nbsp;<input type="date" name="startDate" class="inputs"> &nbsp;&nbsp;&nbsp; <input type="time" class="inputs" name="startTime"></br>
End  : &nbsp;<input type="date" id="endDate" class="inputs">  &nbsp;&nbsp;&nbsp; <input type="time" class="inputs" name="endTime"></br>
</td>
<td>
Test Name:  &nbsp;<input type="text" name="testName" class="inputs" placeholder="Test #1"> </br></br>
Time limit : &nbsp;<input type="number" name="hours" min="0" max="10" class="inputs" placeholder="1"> &nbsp; hr &nbsp;
<input type="number" name="minute" min="0" max="60" class="inputs" placeholder="45"> &nbsp; min
</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" value="publish" class="publish-Button">
<input type="submit" value="save" class="save-Button">
<input type="submit" value="cancel" class="cancel-Button">
</td>
</tr>
</table>
</div>
<div class ="questionTable">
<table>
<tr>
	<td>Point</td>
	<td>Question Type</td>
	<td>Number</td>
	<td>Question</td>
</tr>
<tr>
	<td height="300"> 2</td>
	<td>Multiple Choice</td>
	<td>1</td>
	<td> This is a Question</td>
</tr>

</table></div>
<table>
<tr>
<td>
PLEDGE:</br>
<input type="text" name="pledge" class="inputs"
 value="This is a pledge. This is a pledge. This is a pledge. This is a pledge. This is a pledge. This is a pledge. "
 style="width:700px; height:100px">
</br>
</td>
<td>
<input type="submit" value="preview" class="preview-Button">
</td>
</tr>
</table>
</form>
</div>
<div class="footer"></br>
<img src="images/footerblue.png" class="footerblue"/>
&copy; MegaMonkey Group - Pensacola Christian College 2015
</div>
</BODY>
</HTML>