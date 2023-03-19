let form = document.querySelector('nav form');
let input = document.querySelector('nav form input');
let btn = document.querySelector('nav form button');

form.addEventListener('submit', function(event) {
  event.preventDefault(); // prevent default form submission behavior
  let searchValue = input.value;
  
  let url = `./views/searchingview.html?search=${searchValue}`; // construct the URL with the search query string
  window.location.href = url; // redirect to the specified URL
});
