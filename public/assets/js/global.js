const navbar =document.querySelector('#m-menu');
const sideNav=document.querySelector('.side-nav');
const closeNav=document.querySelector('#close-nav');
const mobileNavItem= document.querySelectorAll('.m-navbar-item');
const mobileSubMenu=document.querySelectorAll('.sub-menu');
const sideNavDropdown=document.querySelectorAll('.side-nav-dropdown')

let currentOpenIndex = null;

//========================================== mobile-nav=======================================
navbar.addEventListener("click",function(){
	sideNav.classList.add('ml-0','duration-500');
	sideNav.classList.remove('-ml-[767px]')
})
closeNav.addEventListener("click",function(){
	sideNav.classList.add('-ml-[767px]','duration-600')
	sideNav.classList.remove('ml-0');
})

// ===========================================side-nav============================================
mobileNavItem.forEach(function(item, index) {
	item.addEventListener("click", function () {
	  if (currentOpenIndex === index) {
		sideNavDropdown[index].classList.remove('active');
		currentOpenIndex = null;
	  } else {
		if (currentOpenIndex !== null) {
		  sideNavDropdown[currentOpenIndex].classList.remove('active');
		}  
		sideNavDropdown[index].classList.add('active');
		currentOpenIndex = index;
	  }
	});	
});
