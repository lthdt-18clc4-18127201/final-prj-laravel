const addSection = document.querySelector('.content-title-content');
const cancelSection = document.querySelector('.cancel-section');
const titleArea = document.getElementById('title-text');
const charCounter = document.querySelector('.char-counter');
const cancelButton = document.querySelector('.btn-cancel');
const maxChars = 50;

addSection.addEventListener('click', () => {
    addSection.style.display = 'none';
    cancelSection.style.display = 'flex';
    titleArea.style.display = 'flex';
});

cancelButton.addEventListener('click', () => {
    addSection.style.display = 'flex';
    cancelSection.style.display = 'none';
    titleArea.style.display = 'none';
});

titleArea.addEventListener('input', () => {
    const content = titleArea.value;
    const charCount = content.length;

    charCounter.textContent = `${charCount}`;
});
