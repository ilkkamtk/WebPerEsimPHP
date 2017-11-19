'use strict';

const modal = document.querySelector('#modal');
const img = modal.querySelector('img');
const closeBtn = document.querySelector('.closeBtn');

const linkit = ul.querySelectorAll('a');
linkit.forEach((linkki) => {
  linkki.addEventListener('click', (evt) => {
    evt.preventDefault();
    // console.log(evt.currentTarget);
    img.setAttribute('src', evt.currentTarget.href);
    modal.classList.replace('hidden', 'modal');
    modal.style = 'top: ' + window.scrollY + 'px';
  });
});

closeBtn.addEventListener('click', (evt) => {
  evt.preventDefault();
  modal.classList.replace('modal', 'hidden');
});