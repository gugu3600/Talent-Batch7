const menu_icon = document.getElementById("hamburger");
const menu = document.getElementById("menu");
const time = document.getElementById("year");
const modal = document.querySelector(".modal");
const close = document.querySelector(".close-btn");
const play = document.querySelector(".modal-toggler");
const btns = document.querySelectorAll(".btn"); 

let open = false;
let show = false;
let year = new Date();



menu_icon.addEventListener("click",function(e){

    if(!open){
        menu_icon.classList.add("active");
        menu.classList.add("open");
        open = true;
    }

    else{
        menu_icon.classList.remove("active");
        menu.classList.remove("open");
        open = false;
    }
    
});

play.addEventListener('click',()=>{
    if(!show){
        modal.style.display = 'flex';
        show = true;
    }
})

btns.forEach(btn=>{

    btn.addEventListener('click',(e)=>{

        e.preventDefault();

        if(!show){
            modal.style.display = 'flex';
            show = true;
        }   
    });

});


close.addEventListener('click',(e)=>{

    e.preventDefault();

    if(show){
        modal.style.display = 'none';
        show = false;
    }
});



console.log(play);

time.textContent = year.getFullYear();
