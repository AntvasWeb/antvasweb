
const menu = document.getElementById('menu');
const hamburgueza = document.getElementById('hamburgueza');


/* ------ ------ ------ ------ ------
 EFECTO MENU MOVIL 
 ------ ------ ------ ------ ------ */
hamburgueza.addEventListener('click', () => {

    console.log(menu.classList.value);
    menu.classList.toggle('activo');
    hamburgueza.classList.toggle('activo')

})

/* ------ ------ ------ ------ ------
 EFECTO STICKY SCROLL 
 ------ ------ ------ ------ ------ */
 window.addEventListener('scroll', () => {

    const cabezote = document.getElementById('cabezote');
    cabezote.classList.toggle('sticky', window.scrollY > 0);
    menu.classList.toggle('sticky', window.scrollY > 0);

 })