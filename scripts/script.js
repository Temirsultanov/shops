var contactLink = document.querySelector('#contact-link');
contactLink.addEventListener('click', function(evt){
    evt.preventDefault();
    document.querySelector('#contact').scrollIntoView({
        behavior: 'smooth',
        block: 'start'
    });
});
var cartLink = document.querySelector('.menu__cart');
cartLink.addEventListener('mouseover', function(){
    contactLink.classList.add('opacity05');
    cartLink.classList.add('black');
});
cartLink.addEventListener('mouseout', function(){
    contactLink.classList.remove('opacity05');
    cartLink.classList.remove('black');
});
contactLink.addEventListener('mouseover', function(){
    cartLink.classList.add('opacity05');
    contactLink.classList.add('black');
});
contactLink.addEventListener('mouseout', function(){
    cartLink.classList.remove('opacity05');
    contactLink.classList.remove('black');
});