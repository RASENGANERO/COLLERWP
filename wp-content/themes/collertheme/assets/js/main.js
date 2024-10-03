
function show_modal(){
 document.getElementsByClassName("modal js-feedback-modal")[0].setAttribute("class","modal js-feedback-modal active");
}
function close_modal(){
   document.getElementsByClassName("modal js-feedback-modal active")[0].setAttribute("class","modal js-feedback-modal");
}
function send_data_about(){
   let name=document.getElementById("nameform").value;
   let tel=document.getElementById("telform").value;
   jQuery.ajax({
       url: '/wp-content/themes/collertheme/mailsends/api.php',
       type: "POST",
       dataType: 'json',
       data: {
           "nameform":name,
           "telform":tel,
       },
       success: function (datas) {
          setTimeout(()=>{
               window.location.reload();
            },1500);
       },
       error: function (event, request, settings) {
           window.alert('@Resource.AjaxError' + ' : ' + settings);
       },
   });
}
function send_data(){
   let name=document.getElementById("namesendmodal").value;
   let tel=document.getElementById("telsendmodal").value;
   let email=document.getElementById("emailsendmodal").value;
   jQuery.ajax({
       url: '/wp-content/themes/collertheme/mailsends/api.php',
       type: "POST",
       dataType: 'json',
       data: {
           "namemodal":name,
           "telmodal":tel,
           "emailmodal":email,
       },
       success: function (datas) {
           let s=document.getElementsByClassName("inputs btn-wrapper")[0];
           s.setAttribute("style","justify-content: space-between;");
           let psr=document.createElement('p');
           psr.innerText=String("Ваше сообщение отправлено!");
           s.appendChild(psr);
           setTimeout(()=>{
               window.location.reload();
            },1500);
       },
       error: function (event, request, settings) {
           window.alert('@Resource.AjaxError' + ' : ' + settings);
       },
   });
}
function send_data_comment(){
   let name=document.getElementById("namecomment").value;
   let text=document.getElementById("textcomment").value;
   let dts=text +" Комметарий оставил: "+name;
   jQuery.ajax({
       url: '/wp-comments-post.php',
       type: "POST",
       dataType: 'json',
       data: {
           "textcomment":dts,
       },
       success: function (datas) {
           let s=document.getElementsByClassName("inputs btn-wrapper")[0];
           s.setAttribute("style","justify-content: space-between;");
           let psr=document.createElement('p');
           psr.innerText=String("Ваш комментарий отправлен!");
           s.appendChild(psr);
           setTimeout(()=>{
               window.location.reload();
            },1200);
       },
       error: function (event, request, settings) {
           window.alert('@Resource.AjaxError' + ' : ' + settings);
       },
   });
}
document.addEventListener("DOMContentLoaded",()=>{
   console.log(window.location.href);

   if(document.getElementsByClassName("modal-all").length!=0){
         let s=document.getElementsByClassName("modal-all");
         for(let i=0;i<s.length;i++){
            s[i].addEventListener("click",show_modal);
         }
      }
   if(document.getElementsByClassName("modal-overlay modal-all").length!=0){
      let sq=document.getElementsByClassName("modal-overlay modal-all")[0];
      sq.addEventListener("click",close_modal);
      let sq1=document.getElementsByClassName("close-icon modal-all")[0];
      sq1.addEventListener("click",close_modal);
   }
   if(document.getElementById("showmodal-order")!=null){
      document.getElementById("showmodal-order").addEventListener("click",show_modal);
   }
   if(document.getElementById("sendmodal")!=null){
      document.getElementById("sendmodal").addEventListener("click",send_data);
   }
   if(document.getElementById("sendform")!=null){
      document.getElementById("sendform").addEventListener("click",send_data_about);
   }
   if(document.getElementById("send-comment")!=null){
      document.getElementById("send-comment").addEventListener("click",send_data_comment);
   }
   if(document.getElementById("order-serv")!=null){
      document.getElementById("order-serv").addEventListener("click",show_modal);
   }
   if(String(window.location.href).endsWith("#install")){

      document.getElementById("install-smooth").scrollIntoView({
         behavior: 'smooth',
         block: "center",
         inline: "center"
     });
   }


});