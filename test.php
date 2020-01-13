<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="theme-color" content="#3ed2a7">
	
	<link rel="shortcut icon" href="./favicon.png" />
	
	<title>I_AMVOCAL VOICES</title>

	<link rel="stylesheet" href="https://use.typekit.net/qxb8htk.css">
	
	<link rel="stylesheet" href="assets/vendors/liquid-icon/liquid-icon.min.css" />
	<link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="assets/css/theme-vendors.min.css" />
	<link rel="stylesheet" href="assets/css/theme.min.css" />
	<link rel="stylesheet" href="assets/css/themes/original.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
	 <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
	
	<!-- Head Libs -->
	<script async src="assets/vendors/modernizr.min.js"></script>
	
</head>
<body>
	


<form action=".." ..>
<!-- the first page has style set to be visible -->
<div id="formpage_1" style="visibility: visible; display: block; .."> 
  <label for="..">..</label>
  <input type=".." ..>
  ..
  <!-- NEXT button -->
  <input type="button" value="next" onclick="pagechange(1,2);">
</div>
<!-- the 2nd and following pages have style set to be invisible -->
<div id="formpage_2"  style="visibility: hidden; display: none; ..">
  <label for="..">..</label>
  <input type=".." ..>
  ..
  <!-- PREVIOUS and NEXT buttons -->
  <input type="button" value="back" onclick="pagechange(2,1);">
  <input type="button" value="next" onclick="pagechange(2,3);">
</div>
...
<div id="formpage_10"  style="visibility: hidden; display: none; ..">
  <label for="..">..</label>
  <input type=".." ..>
  ..
  <!-- PREVIOUS and SUBMIT buttons -->
  <input type="button" value="back" onclick="pagechange(10,9);">
  <input type="submit" value="Submit">
</div>
</form>

<script src="assets/js/jquery-2.2.1.min.js"></script>

<script type="text/javascript">
	function pagechange(frompage, topage) {
  var page=document.getElementById('formpage_'+topage);
  if (!page) return false;
  page.style.visibility='hidden';
  page.style.display='none';

  page=document.getElementById('formpage_'+topage);
  if (!page) return false;
  page.style.display='block';
  page.style.visibility='visible';

  return true;
}
</script>
</body>

</html>