
const toggleBtn = document.querySelector('.toggle-btn');
const toggleBtnIcon = document.querySelector('.toggle-btn i');
const mobile = document.querySelector('.mobile');

toggleBtn.addEventListener('click', function(){
    mobile.classList.toggle('open');
    const isOpen = mobile.classList.contains('open');
    toggleBtnIcon.classList = isOpen ? 'fa fa-close' : 'fa fa-bars';
});






















/*let btn = document.getElementById("btn");
let btnIcon = document.getElementById("btn-icon");
let link = document.getElementById("link");

const  toggleMobile = () => {
    if(btnIcon.name === "list"){
        btnIcon.name = "close";
        link.style.height = "100px";
    } else{
        btnIcon.name = "list";
        link.style.height = 0
    }
};

btn.addEventListener("click", toggleMobile); */

