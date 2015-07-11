
document.write("<div id=\"time\">");
today=new Date();

var hours = today.getHours();

var minutes = today.getMinutes();

var seconds = today.getSeconds();

function initArray(){

this.length=initArray.arguments.length

for(var i=0;i<this.length;i++)

this[i+1]=initArray.arguments[i] }

var d=new initArray("星期日","星期一","星期二","星期三","星期四","星期五","星期六");

document.write(today.getMonth()+1,"月",today.getDate(),"日 ",d[today.getDay()+1]," ",hours,":",minutes);

document.write("</div>");
document.write("<div id=\"head\">");
document.write("<a href=\"#\"><img src=\"images\/logo2.jpg\"style=\"FILTER: progid:DXImageTransform.Microsoft.Fade ( duration=0.5,overlap=1.0 );text-align:center; WIDTH: 100%; HEIGHT:170%;\" ></a>");
document.write("<div id=\"headline\">");
document.write("<ul>");
document.write("<li id=\"one\"><a href=\"index.php\">主页展示|</a></li>");
document.write("<li id=\"two\"><a href=\"show.php\">社联简介|</a></li>");
document.write("<li id=\"three\"><a href=\"dongtai.php\">社联动态|</a></li>");
document.write("<li id=\"four\"><a href=\"message.php\">公告中心|</a></li>");
document.write("<li id=\"five\"><a href=\"down.php\">常用下载|</a></li>");
document.write("<li id=\"six\"><a href=\"complain.php\">举报投诉|</a></li>");
document.write("</ul>");
document.write("</div>");
document.write("</div>");