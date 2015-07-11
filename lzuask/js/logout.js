/*
 * 
 * 下面的都没用
 * 至少现在 
 */

function body_onUnload()
{
   if (window.event.clientX>document.body.clientWidth&&event.clientY<0||event.altKey)
   {
      alert("浏览器关闭");
   }
   else
   {
      alert("刷新或者跳转到其他页");
   }
} 

<script> 
function CloseOpen(event) { 
       if(event.clientX<=0 && event.clientY<0) { 
            
       } 
       else 
       { 
              alert("刷新或离开"); 
              <?php $A->destroy_session();?>
       } 
} 
</script> 
<body onunload="CloseOpen(event)"> 
