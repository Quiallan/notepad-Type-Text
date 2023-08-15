// script.js
const nameInput = document.getElementById('name');
const dynamicName = document.getElementById('dynamic-name');

nameInput.addEventListener('input', (event) => {
  dynamicName.innerText = event.target.value;
});