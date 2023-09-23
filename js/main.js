const toggleBtn = document.querySelector('.toggle-btn');
const toggleBtnIcon = document.querySelector('.toggle-btn i');
const menuMobile = document.querySelector('.menuMobile');

toggleBtn.addEventListener('click', function(){
    menuMobile.classList.toggle('open');
    const isOpen = menuMobile.classList.contains('open');
    toggleBtnIcon.classList = isOpen ? 'fa fa-close' : 'fa fa-bars';
});