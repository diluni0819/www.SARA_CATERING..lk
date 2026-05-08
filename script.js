const menuBtn = document.getElementById("menu-btn");
const navLinks = document.getElementById("nav-links");
const menuBtnIcon = menuBtn.querySelector("i");

menuBtn.addEventListener("click", (e) => {
  navLinks.classList.toggle("open");

  const isOpen = navLinks.classList.contains("open");
  menuBtnIcon.setAttribute("class", isOpen ? "ri-close-line" : "ri-menu-line");
});

navLinks.addEventListener("click", (e) => {
  navLinks.classList.remove("open");
  menuBtnIcon.setAttribute("class", "ri-menu-line");
});

const scrollRevealOption = {
  distance: "50px",
  origin: "bottom",
  duration: 1000,
};

ScrollReveal().reveal(".header__badge", {
  ...scrollRevealOption,
  origin: "top",
});
ScrollReveal().reveal(".header__content__center h1", {
  ...scrollRevealOption,
  delay: 500,
});

ScrollReveal().reveal(".order__card", {
  ...scrollRevealOption,
  interval: 500,
});

ScrollReveal().reveal(".event__content", {
  duration: 1000,
});

function order(){
  window.location = "login.php";
}
function changeview(){
     
    document.getElementById("signUpbox");
    document.getElementById("signInbox");

    signInbox.classList.toggle("d-none");
    signUpbox.classList.toggle("d-none");

}
function signup(){
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var mobile = document.getElementById("mobile");
    

    var form = new FormData();
    form.append("f",fname.value);
    form.append("l",lname.value);
    form.append("e",email.value);
    form.append("p",password.value);
    form.append("m",mobile.value);
    

    var request = new XMLHttpRequest();
      
    request.onreadystatechange = function(){
        if(request.status == 200 && request.readyState == 4){
            var response = request.responseText;
            if(response == "success"){
                document.getElementById("msg").innerHTML = "Registration Successfull!";
                document.getElementById("msg").className = "alert alert-success";
                document.getElementById("msgdiv").className = "d-block";
                changeview();
                
            }else{
                document.getElementById("msg").innerHTML = response;
                document.getElementById("msgdiv").className = "d-block";

            }
        }

    }

    request.open("POST","signUpProcess.php",true);
    request.send(form);

}

function signin(){
    
   var email = document.getElementById("email2");
   var password = document.getElementById("password2");
   var rememberMe = document.getElementById("rememberMe");

   var form = new FormData();
   form.append("e",email.value);
   form.append("p",password.value);
   form.append("r",rememberMe.checked);

   var request = new XMLHttpRequest();

    request.onreadystatechange = function(){
        if(request.status == 200 && request.readyState == 4){
           var response = request.responseText;
           if(response == "success"){
            window.location = "payment.php";
           }else{
            document.getElementById("msg1").innerHTML = response;
            document.getElementById("msgdiv1").className = "d-block";
           }
        }
    }


   request.open("POST","signInprocess.php",true);
   request.send(form);

}

function showPayment(){
    document.getElementById("paymentForm").style.display = "block";
}

function payNow(){
    document.getElementById("successMsg").style.display = "block";
    window.location="index.php";
}