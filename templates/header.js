let toggle= document.getElementById('toggle');
let nav=document.getElementsByClassName('nav-links')[0];
// let links=document.querySelectorAll('.nav-links li');

toggle.onclick= function () {
    nav.classList.toggle('active')
};

// links.forEach((link,index)=>{
//     link.style.animation=`navLinkFade 0.5s ease forwards ${index/1}`
// });

