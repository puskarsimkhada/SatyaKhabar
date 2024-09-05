import 'flowbite';
import './bootstrap';

// For navbar
var bar1 = document.getElementById('bar');
var nav = document.querySelector('.navigation ul');
var close = document.getElementById('close');

if(bar1){
bar1.addEventListener('click', () => {
    nav.classList.toggle('active');
});
}
if(close){
    close.addEventListener('click', () => {
        nav.classList.remove('active'); 
        
    });
}
document.addEventListener('click', function(event) {
  if (nav.classList.contains('active') && !nav.contains(event.target) && event.target !== bar1) {
      nav.classList.remove('active');
  }
});

// For user profile
document.addEventListener('click', function(event) {
  const userMenuButton = document.getElementById('user-menu-button');
  const dropdownMenu = document.getElementById('user-dropdown');
  if (!userMenuButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
    dropdownMenu.classList.add('hidden'); // Hide the dropdown
  }
});

// For search bar

const searchbar = document.getElementById('searchbtn');
const searchtext = document.getElementById('searchtext');

if(searchbar){
  searchbar.addEventListener(('click'), () => {
    searchtext.classList.toggle('popup');
  });
}