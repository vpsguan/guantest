//等待页面加载完成
window.onload=function(){
	//验证码
	var fm=document.getElementsByTagName('form')[0];
	fm.onsubmit=function(){

		//能用客户端验证就用客户端验证
		//用户名验证
		if(fm.username.value.length<2||fm.username.value.length>20){
			alert('用户名不得小于2位或大于20位');
			fm.username.value='';//清空
			fm.username.focus();//焦点至于表单段
			return false;
		}
		if(/[<>\'\"\ \ ]/.test(fm.username.value)){
			alert('包含非法字符');
			fm.username.value='';
			fm.username.focus();
			return false;
		}
		//密码
		if(fm.pwd.value.length<6){
			alert('密码小于6位');
			fm.pwd.value='';
			fm.pwd.focus();
			return false;	
		}
		if(fm.pwd.value!=fm.pwd1.value){
			alert('密码输入不一致');
			fm.pwd1.value='';
			fm.pwd1.focus();
			return false;
		}
		//邮箱验证
		if(!/^[\w\-\.]+@[\w\=\.]+(\.\w+)+$/.test(fm.email.value)){
			alert('邮箱格式不对');
			fm.email.value='';
			fm.email.focus();
			return false;
		}
		//验证码
		if(fm.yzm.value.length!=4){
			alert('验证码必须是4 位');
			fm.yzm.value='';
			fm.yzm.focus();
			return false;
		}
		return true;
	}
}
