<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
function setOptions(chosen) {
var selbox = document.myform.opttwo;

 
selbox.options.length = 0;
if (chosen == " ") {
  selbox.options[selbox.options.length] = new Option('Please select one of the options above first',' ');
 
}
if (chosen == "1") {
  selbox.options[selbox.options.length] = new
Option('first choice - option one','oneone');
  selbox.options[selbox.options.length] = new
Option('first choice - option two','onetwo');
}
if (chosen == "2") {
  selbox.options[selbox.options.length] = new
Option('second choice - option one','twoone');
  selbox.options[selbox.options.length] = new
Option('second choice - option two','twotwo');
}
if (chosen == "3") {
  selbox.options[selbox.options.length] = new
Option('third choice - option one','threeone');
  selbox.options[selbox.options.length] = new
Option('third choice - option two','threetwo');
}
if (chosen == "4") {
 document.getElementById("mylabel").innerText="hi";
}
}
</script>
</head>

<body>

<form name="myform">
<div align="center">
<select name="optone" size="1" onchange="setOptions(document.myform.optone.options[document.myform.optone.selectedIndex].value);">
   <option value=" " selected="selected"> </option>
   <option value="1">First Choice</option>
    <option value="2">Second Choice</option>
     <option value="3">Third Choice</option>
      <option value="4">Third Choice</option>
</select><br> <br>
<select name="opttwo" size="1">
   <option value=" " selected="selected">Please select one of the options above first</option>
</select>
<input type="button" name="go" value="Value Selected" 
onclick="alert(document.myform.opttwo.options[document.myform.opttwo.selectedIndex].value);">
</br>
<label id="mylabel">HArika</label>
</div>
</form>
</body>
</html>