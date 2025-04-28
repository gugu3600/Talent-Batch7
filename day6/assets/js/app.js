const toggle = document.querySelector(".hamburger"),
menu = document.getElementById("menu"),
navbar = document.getElementById("navbar"),
hearts = document.querySelectorAll(".heart");

let active = false;




toggle.addEventListener("click",function(){

    if(active){

        toggle.classList.remove("active");
        menu.classList.remove("open");
        active = 0;
    }

    else{

        toggle.classList.add("active");
        menu.classList.add("open");
        active = 1;
    } 
});


document.addEventListener('scroll', function() {
    if (window.scrollY > 20) {
      navbar.style.backgroundColor = "#E76F51";
    } else {
      navbar.style.backgroundColor = 'transparent';
    }
  });

  hearts.forEach((heart)=>{

    heart.addEventListener("click",()=>{

      heart.classList.contains("far") ? heart.className = "fas fa-heart heart" : heart.className = "far fa-heart heart";
    });

  });

  