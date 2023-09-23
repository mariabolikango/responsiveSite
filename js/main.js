const btnshow = document.querySelector("#menu-btn");
const rep = document.querySelector("#link");

const clikbtn = function () {
    rep.classList.toggle("cache") 
    rep.classList.toggle("show") 

    btnshow.classList.toggle("bi-x")
    btnshow.classList.toggle("bi-list")
  
};
btnshow.addEventListener("click", clikbtn);
