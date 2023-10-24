var nxt_btn=document.querySelectorAll(".next_button");
var prev_btn=document.querySelectorAll(".previous_button");
var submit_btn=document.querySelectorAll(".submit_button");
var main_form=document.querySelectorAll(".main");
var main_signin_form=document.querySelectorAll(".main_signin");
var sign_in_submit=document.querySelector(".signin_submit_button")
var progressbar = document.querySelectorAll(".steps li");
var steps = document.querySelector(".steps");
let forumnumber=0;
nxt_btn.forEach(function(butn){
   butn.addEventListener('click',function(){
       if(!validateform()){
           return false;
       }
       forumnumber++;
       progress('color');
       update_form(); 
   });
});  


prev_btn.forEach(function(prev_button){
    prev_button.addEventListener('click',function(){ 
       forumnumber--;
       progress('nocolor');
       update_form();
    });
}); 

submit_btn.forEach(function(submit_button){
    submit_button.addEventListener('click',function(){
        if(!validateform()){
            return false;
        }
    var f_name=document.querySelector("#user_name");
    var shown_name = document.querySelector("#shown_name");
    shown_name.innerHTML=f_name.value;
        forumnumber++;
        update_form();
        steps.classList.add("d-none");
    });
});

    let signinnumber = 0;
    sign_in_submit.addEventListener('click',function(){
        if(!validateformsignin()) return false;
        signinnumber++;
        main_signin_form.forEach(function(main){
            main.classList.remove("active");
        });
        var f_name=document.querySelector("#user_signin_name");
        var shown_name = document.querySelector("#shown_signin_name");
        shown_name.innerHTML=f_name.value;
        main_signin_form[signinnumber].classList.add("active");
    });

 
   
 
 function progress(state){ 
     if(state=='color'){
          progressbar[forumnumber].classList.add('li-active'); 
     }else{
         
         progressbar[forumnumber+1].classList.remove('li-active');
     }
    
 }


function update_form(){ 
    main_form.forEach(function(main){
       main.classList.remove('active');
    }); 
      main_form[forumnumber].classList.add('active');   
}
  
function validateform(){  
    validate=true;
var validate_inputs = document.querySelectorAll(".main.active input");
validate_inputs.forEach(function(input_valid){
    input_valid.classList.remove('warning'); 
    if(input_valid.hasAttribute('require')){ 
        if(input_valid.value.length==0){
            validate=false;
            input_valid.classList.add('warning');
        }
    }
});
return validate;
}

function validateformsignin(){  
    validate=true;
var validate_inputs = document.querySelectorAll(".main_signin.active input");
validate_inputs.forEach(function(input_valid){
    input_valid.classList.remove('warning'); 
    if(input_valid.hasAttribute('require')){ 
        if(input_valid.value.length==0){
            validate=false;
              input_valid.classList.add('warning');
        }
    }
});
return validate;
}


var signin_toggle = document.querySelector(".sign-in-up-toggle");
var s_form = document.querySelectorAll(".s_form");
var account = document.querySelectorAll(".account");
var right_image=document.querySelectorAll(".right_img");
signin_toggle.addEventListener('click',function(){
       
       s_form.forEach(function(form){
           form.classList.toggle("d-none");
       });
       
        account.forEach(function(acc){
           acc.classList.toggle("d-none");
       });
        
        right_image.forEach(function(ri_img){
          ri_img.classList.toggle("d-none");  
        });
        
       if(signin_toggle.innerHTML=="Sign in"){
           signin_toggle.innerHTML="Sign up";
      }
      else{
          signin_toggle.innerHTML="Sign in";
      }
     
      
});
/*js menu despliegue*/
function handleMenuDisplay(element) {
    const menu = document.querySelector('.sidebar-menu');

    if (menu.classList.contains('show')) {
        menu.classList.remove('show');
        element.classList.add('fa-circle-chevron-right');
        element.classList.remove('fa-circle-chevron-left');
        localStorage.setItem('menuStatus', ''); // Guarda el estado oculto en el almacenamiento local
    } else {
        menu.classList.add('show');
        element.classList.remove('fa-circle-chevron-right');
        element.classList.add('fa-circle-chevron-left');
        localStorage.setItem('menuStatus', 'shown'); // Guarda el estado mostrado en el almacenamiento local
    }
}

// Restaura el estado del menú al cargar la página
document.addEventListener('DOMContentLoaded', function() {
    const menu = document.querySelector('.sidebar-menu');
    const menuStatus = localStorage.getItem('menuStatus');

    if (menuStatus === 'shown') {
        menu.classList.add('show');
        const element = document.querySelector('.nav-toggle i');
        element.classList.remove('fa-circle-chevron-right');
        element.classList.add('fa-circle-chevron-left');
    } else {
        menu.classList.remove('show');
        const element = document.querySelector('.nav-toggle i');
        element.classList.add('fa-circle-chevron-right');
        element.classList.remove('fa-circle-chevron-left');
    }
});



// Restaura el estado del menú al cargar la página
document.addEventListener('DOMContentLoaded', function () {
    const menu = document.querySelector('.sidebar-menu');
    const menuStatus = localStorage.getItem('menuStatus');

    if (menuStatus === 'shown') {
        menu.classList.add('show');
        const element = document.querySelector('.nav-toggle i[data-toggle="menu"]');
        element.classList.remove('fa-circle-chevron-right');
        element.classList.add('fa-circle-chevron-left');
    } else {
        menu.classList.remove('show');
        const element = document.querySelector('.nav-toggle i[data-toggle="menu"]');
        element.classList.add('fa-circle-chevron-right');
        element.classList.remove('fa-circle-chevron-left');
    }
});

function redirectToSelectedOption(selectElement) {
    var selectedOption = selectElement.options[selectElement.selectedIndex];
    if (selectedOption.value) {
        window.location.href = selectedOption.value;
    }
}

