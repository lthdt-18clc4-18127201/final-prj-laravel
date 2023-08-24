const filterButtons = document.querySelectorAll('.category-item-title');

const newestPostsItem = document.querySelector('.newest-posts-item');
const divTags = document.querySelector('.newest-posts-tags');
const divContact = document.querySelector('.newest-posts-contact');
const aNewestPostsItem = divTags.querySelector('a:first-child');

filterButtons.forEach(button => {
    button.addEventListener('click', () => {
        filterButtons.forEach(btn => btn.classList.remove('active-title'));
        button.classList.add('active-title');
    });
});

divTags.removeChild(aNewestPostsItem);
newestPostsItem.appendChild(divTags);
newestPostsItem.appendChild(divContact);
