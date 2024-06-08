var loginbtn= document.getElementById("login_up")
var loginpage = document.getElementById('login_nav')
var closebtn =document.getElementById("close-icon");

function open_close(){
       if(loginpage.style.display=="none"){
              loginpage.style.display="flex";
             }
             else{
              loginpage.style.display="none";
             }
}
var signpage= document.getElementById('signup_nav');
function open_close_2(){
       if(signpage.style.display=="none"){
              signpage.style.display="flex";
             }
             else{
              signpage.style.display="none";
             }
}

function v_name(){
var name= fs.name.value;
var name_error =document.getElementById("v-name");
if(name.match(/^(?=.*[A-Z])[a-zA-Z]*\s[a-zA-Z]+$/)){
       name_error.innerHTML="<i class='fa-solid fa-circle-check'></i>";
       return true;
}else{
       name_error.innerHTML="Invalid";
       return false;
}

}

function v_pass(){
       var pass= fs.password.value;
var pass_error =document.getElementById("v-password");
       if(pass.match(/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9@#$%^&*]{6,16}$/)){
              pass_error.innerHTML="<i class='fa-solid fa-circle-check'></i>";
              return true;
       }else{
              pass_error.innerHTML="Invalid";
              return false;
       }

}function v_phone(){
       var phone= fs.phone.value;
var phone_error =document.getElementById("v-phone");
       if(phone.match(/^[+]{1}[0-9]{10,12}$/)){
              phone_error.innerHTML="<i class='fa-solid fa-circle-check'></i>";
              return true;
       }else{
              phone_error.innerHTML="Invalid";
              return false;
       }

}

function v_email(){
       var email= fs.email.value;
var email_error =document.getElementById("v_email");
       if(email.match(/^[a-zA-Z0-9]*@[a-z]*\.[a-z]{2,3}$/)){
              email_error.innerHTML="<i class='fa-solid fa-circle-check'></i>";
              return true;
       }else{
              email_error.innerHTML="Invalid";
              return false;
       }

}

/*window.addEventListener('scroll',function(){
       const img=document.getElementById("logo");
       img.classList.toggle("small",window.scrollY>0);
})*/

function open_close_3(){
       var search_div=document.getElementById("search-div");
       if(search_div.style.display=="none"){
              search_div.style.display="flex";
             }
             else{
              search_div.style.display="none";
             }
}
function validate_form(){
       var sub_error=document.getElementById("v-submit");
       if(!v_name() || !v_pass() || !v_email() || !v_phone()){
              sub_error.style.display="inline-block";
              sub_error.innerHTML="*Please fix the error";
              setTimeout(function(){sub_error.style.display="none";},3000);
              return false;
       }
}
