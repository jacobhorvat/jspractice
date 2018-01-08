const myHeading = document.getElementById('myHeading');

const myButton = document.getElementById('myButton');
const myTextInput = document.getElementById('myTextInput');

const myBorderInput = document.getElementById('myBorderInput');
const myBorderButton = document.getElementById('myBorderButton');

const myParagraphInput = document.getElementById('myParagraphInput');
const myParagraphButton = document.getElementById('myParagraphButton');
const myParagraph = document.getElementsByTagName('p');


myButton.addEventListener('click',() => {
  myHeading.style.color = myTextInput.value;
});


myBorderButton.addEventListener('click',() => {
  myHeading.style.borderColor = myBorderInput.value;
});


myParagraphButton.addEventListener('click',() => {
  myParagraph.style.color = myParagraphInput.value;
});
