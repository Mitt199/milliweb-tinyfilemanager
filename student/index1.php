<!DOCTYPE HTML>
<html>
<head>
<style>
#div1 {width:150px;height:150px;padding:10px;border:1px solid #aaaaaa;}

#left
{
	border: 1px solid #aaaa;
	width: 200px;
	float: left
	
}

#right
{
	border: 1px solid #aaaa;
	width: 200px;
	float: right;
	
}
#container
{
	width: 580px;
	margin: auto;
}
p
{
	font-size: 25px;
	text-align: center;
}
</style>
<script>
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}
</script>
</head>
<body>
<div id="container">
<p>Drag and Drop Image into the squares</p>
<div id="left">
<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<br>
<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<br>
<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<br>
<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<br>
<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<br>
<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<br>

</div>
<img id="drag1" src="drag.jpg" draggable="true" ondragstart="drag(event)" width="150">
<div id="right">
<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<br>
<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<br>
<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<br>
<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<br>
<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<br>
<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<br>

</div>
</div>




</body>
</html>
