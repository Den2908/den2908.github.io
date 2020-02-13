<?
echo '
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252"> 

<title>Den2908</title>

<body>
<script> 
var tit = document.title; 
var c = 0; 
function writetitle() { 
document.title = tit.substring(0,c);//osw 
if(c==tit.length) { 
c = 0;setTimeout("writetitle()", 3000) 
} else { 
c++; 
setTimeout("writetitle()", 200) 
} 
} 
writetitle() 
</script>
</body>
<link href="/Den2908/styles.css" rel="stylesheet"> 
</head> 
<body> 
'; 
$rand = rand(1, 1); 
echo '<video src="Den2908/'.$rand.'.mp4" muted autoplay loop></video>

<button id="mybtn" type="button" style="background-color: white">Test</button>

<audio id="myaudio" loop="true">
  <source src="1.mp3"/> 
</audio>

<script>
	document.getElementById("mybtn").onclick = function()
    {
      var myaudio = document.getElementById("myaudio");
      if(myaudio.paused == true)
      {
        document.getElementById("myaudio").play();
        this.style.backgroundColor = "Blue"; //Цвет кнопки можно изменить напрямую, без всяких картинок.
        this.style.color = "White"; //Заодно меняем цвет текста для удобичитаемости
        //this здесь является самой кнопкой, так как функция является дочерней кнопке
      }
      else if (myaudio.paused == false)
      {
        document.getElementById("myaudio").pause();
        this.style.backgroundColor = "White";
        this.style.color = "Black";
      }
    }
</script>

<script>
document.addEventListener("DOMContentLoaded", function(){ 
var x = document.getElementById("myaudio"); 
x.play(); 
});
</script>

<div class="block">
<div class="nickname animated bounceInDown">Den2908</div> 
<div class="media animated bounceInDown"> 
<a href="https://vk.com/den2908_n" target="_blank"><i class="fa fa-vk"></i></a> 
<a href="https://www.youtube.com/channel/UClpE3773ZagI5y1huhpucXw" target="_blank"><i class="fa fa-youtube-play"></i></a> 
<a href="http://steamcommunity.com/id/den2908" target="_blank"><i class="fa fa-steam-square"></i></a> 
</div> 
</div> 
<div class="telegram"> 
Telegram: @Den29082001 
</div> 
</body>
</html>
'; 
?>