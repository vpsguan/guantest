document.write("sss");
document.write("<div id=\"time\">");
today=new Date();

var hours = today.getHours();

var minutes = today.getMinutes();

var seconds = today.getSeconds();

function initArray(){

this.length=initArray.arguments.length

for(var i=0;i<this.length;i++)

this[i+1]=initArray.arguments[i] }

var d=new initArray("������","����һ","���ڶ�","������","������","������","������");

document.write(today.getMonth()+1,"��",today.getDate(),"�� ",d[today.getDay()+1]," ",hours,":",minutes);

document.write("</div>");
document.write("<div id=\"head\">");
document.write("<a href="#/"><img src=\"images\/logo2.jpg\"style=\"FILTER: progid:DXImageTransform.Microsoft.Fade ( duration=0.5,overlap=1.0 );text-align:center; WIDTH: 100%; HEIGHT:170%;\" ></a>");
document.write("<div id=\"headline\">");
document.write("<ul>");
document.write("<li id=\"one\"><a href="./index.php/">��ҳչʾ|</a></li>");
document.write("<li id=\"two\"><a href="./show.php/">�������|</a></li>");
document.write("<li id=\"three\"><a href="./dongtai.php/">������̬|</a></li>");
document.write("<li id=\"four\"><a href="./message.php/">��������|</a></li>");
document.write("<li id=\"five\"><a href="./down.php/">��������|</a></li>");
document.write("<li id=\"six\"><a href="./complain.php/">�ٱ�Ͷ��|</a></li>");
document.write("</ul>");
document.write("</div>");
document.write("</div>");
                       