/* 

Navigation Window Scroll Code - 

*/

// Set the initial scroll position to 0.
let scrollPosition;

let headerNav = document.getElementById('header-nav');

// On scroll, check the scroll position of the window.
window.addEventListener('scroll', function () {
  let scrollTop = window.screenY || document.documentElement.scrollTop;

  // IF the scroll position is greater than the initial scroll position, set the header navigation position to -400px.
  if (scrollTop > scrollPosition) {
    headerNav.style.cssText = 'top: -400px; ';
  }
  
  // ELSE, set the header navigation background to a white color with a 0.6 opacity and a blur of 6px.
  else {
    headerNav.style.cssText = 'top: 0; background-color: rgba(255, 255, 255, 0.6); backdrop-filter: blur(6px);';
  }

  // IF the scroll position is less than 80, set the header navigation background to transparent.
  if (scrollTop < 80) {
    headerNav.style.cssText = 'top: 0; background-color: transparent;';
  }

  // IF the window width is less than 1200px, set the header navigation background to transparent (This is for mobile devices).
  if (window.innerWidth < 1200) {
    headerNav.style.cssText = 'top: 0; background-color: transparent;';
  }

  // Consistently update the scroll position.
  scrollPosition = scrollTop;
});

/*

Form Submission Functionality.

Note: This form is meant to simulate a form submission as my WP-Forms shortcode was not displaying my form.

*/

// Selecting all my form elements.
let contact = document.getElementById('contact-form');
let contactButton = document.getElementById('contact-button');
let fullname = document.getElementById('fullname').value;
let phone = document.getElementById('phone').value;
let email = document.getElementById('email').value;
let message = document.getElementById('message').value;

// On submission of my form, clear the form fields and the URL parameters
function submitForm(e) {
  e.preventDefault();
  // Clear the form fields on submit.
  fullname = '';
  phone = '';
  email = '';
  message = '';

  // Clear the URL parameters on submit.
  window.location = window.location.href.split('?')[0];
}

// On click of the submit button, call the submitForm function to clear the form fields and URL parameters.
contactButton.addEventListener('click', submitForm);
