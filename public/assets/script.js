// Menu
const buttons = document.querySelectorAll('[data-filter]');
const categories = document.querySelectorAll('[data-cat]');

buttons.forEach(function(button) {
    button.addEventListener('click', function() {
        const cat = button.dataset.filter;

        categories.forEach(function(category) {
            category.classList.add('is-hidden');

            if (category.dataset.cat.includes(cat) || cat === '*') {
                category.classList.remove('is-hidden');
            }
        })
    });
})