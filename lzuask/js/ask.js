/*
 * 袁俊虎 
 * js/ask.js
 * 2012/7/25
 * 用于ask.php 页面 
 * 实现 页面跳转 新的页面   
 * 后面的 屏蔽掉的是肖祖鹏的代码   我不知道干什么的     加上的话前面的就失效了
 */
window.onload=function(){
	//加载完成
	var fa=document.getElementById('input');
	var fsearch=document.getElementById('squestion');
	var fask=document.getElementById('aquestion');
	fsearch.onclick=function(){
		var con=fa.value;
		var pass='search_question?='+con;
		window.open(pass);
	} ;
	fask.onclick=function(){
		var con=fa.value;
		var pass='ask_question?contents='+con;
		window.open(pass);
		var fatherpass='ask.php';
		window.close(fatherpass);
	};
/*	
	function $(element){
		return element = document.getElementById(element);
	}
	function $D(){
		var d=$('class1content');
		var h=d.offsetHeight;
		var maxh=300;
		function dmove(){
			h+=50; //设置层展开的速度
			if(h>=maxh){
				d.style.height='300px';
				clearInterval(iIntervalId);
			}else{
				d.style.display='block';
				d.style.height=h+'px';
			}
		}
		iIntervalId=setInterval(dmove,2);
	}
	function $D2(){
		var d=$('class1content');
		var h=d.offsetHeight;
		var maxh=300;
		function dmove(){
			h-=50;//设置层收缩的速度
			if(h<=0){
				d.style.display='none';
				clearInterval(iIntervalId);
			}else{
				d.style.height=h+'px';
			}
		}
		iIntervalId=setInterval(dmove,2);
	}
	function $use(){
		var d=$('class1content');
		var sb=$('stateBut');
		if(d.style.display=='none'){
			$D();
			sb.innerHTML='展开';
		}else{
			$D2();
			sb.innerHTML='收缩';
		}
*/
}
