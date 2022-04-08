<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<title>Package Setup</title>
<link rel="shortcut icon" href="sys.setup.png?rev=<?=time();?>" type="image/x-icon">
<style>
@font-face
{
  font-family: "segoeui";
  src: url("segoeui.ttf");
}
body
{
   background-color: #009F4B;
   color: #FFFFFF;
   font-family: "segoeui";
   font-size: 14pt;
}
font, a, p, b, i, strong, em, li, table, td, tr, th
{
   color: #FFFFFF;
   font-family: "segoeui";
   font-size: 14pt;
}
input, select, textarea
{
   background-color: #FFFFFF;
   color: #000000;
   font-family: "segoeui";
   font-size: 14pt;
} 
h1
{
   color: #FFFFFF;
   font-family: "segoeui";
   font-weight: normal;
   font-size: 26pt;
}
h2
{
   color: #FFFFFF;
   font-family: "segoeui";
   font-weight: normal;
   font-size: 20pt;
}
</style>
<script src="jquery.js?rev=<?=time();?>"></script>
<script src="base.js?rev=<?=time();?>"></script>
</head>
<body>
<label>Existing Package: </label>
<input type="text" id="enterPkg" value="from"><br>
<label>Install Package: </label>
<input type="text" id="enterRepo" value=""><br>
<label>Distributor: </label>
<input type="text" id="enterUser" value=""><br>
<select id="enterKey" onchange="
var curSys = getButton.name;
var keyVal = enterKey.options[enterKey.selectedIndex].value;
if (keyVal == 'i') {
    enterPkg.value = 'from';
    enterRepo.value = '';
    enterUser.value = '';
} else if (keyVal == 'r') {
    enterPkg.value = curSys;
    enterRepo.value = '';
    enterUser.value = '';
} else if (keyVal == 'd') {
    enterPkg.value = '';
    enterRepo.value = 'from';
    enterUser.value = 'here';
}">
<option value="i">Install/Update</option>
<option value="r">Reinstall/Replace</option>
<option value="d">Deinstall/Remove</option>
</select>
<input id='getButton' name="<?=file_get_contents('system.info');?>" type="button" id="enterSubmit" value="Execute" onclick="get(enterKey.options[enterKey.selectedIndex].value,enterPkg.value,enterRepo.value,enterUser.value);">
<input type="button" id="enterExit" value="Exit" onclick="window.location.href='index.php';">
</body>
</html>
