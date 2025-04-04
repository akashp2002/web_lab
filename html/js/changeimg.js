const content = document.getElementById('image');
const text = document.getElementById('text');

content.addEventListener('mouseover', () => {
  image.src = './images/shoes2.jpg';
  text.textContent = 'New Text!';
});

content.addEventListener('mouseout', () => {
  image.src = './images/shoes1.jpg';
  text.textContent = 'Original Text';
});

