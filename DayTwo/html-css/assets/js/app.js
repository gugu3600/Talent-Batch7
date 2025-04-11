const togglers = document.querySelectorAll(".toggle");
const time = document.getElementById("time");

let date = new Date(),
    year = date.getFullYear();

time.textContent = year;






togglers.forEach(function(toggler){


    toggler.addEventListener('click',function(){

        let dd = this.parentNode.nextElementSibling;

       if(dd.classList.contains("active")){

        dd.classList.remove("active");

       }

       else{

        dd.classList.add("active");

       }

    });

});