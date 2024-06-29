const storedTheme = localStorage.getItem('theme');

const getPreferredTheme = () => {
    if (storedTheme) {
        return storedTheme;
    }
    return window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'dark';
};

const setTheme = function (theme) {
    document.documentElement.setAttribute('data-bs-theme', theme);
};

setTheme(getPreferredTheme());

window.addEventListener('DOMContentLoaded', () => {
    const toggleButton = document.querySelector('.theme-toggle-button');
    if (toggleButton) {
        toggleButton.addEventListener('click', () => {
            let currentTheme = document.documentElement.getAttribute('data-bs-theme');
            let newTheme = currentTheme === 'light' ? 'dark' : 'light';
            localStorage.setItem('theme', newTheme);
            setTheme(newTheme);
        });
    }
});



document.addEventListener('DOMContentLoaded', function () {
    fetch('articles.json')
        .then(response => response.json())
        .then(articles => {
            const articlesContainer = document.getElementById('articles');

            articles.forEach(article => {
                // Create the card element
                const articleCard = document.createElement('div');
                articleCard.className = 'col-md-8';
                articleCard.innerHTML = `
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">${article.title}</h2>
                            <p class="card-text">${article.snippet}</p>
                            <a href="${article.link}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                `;

                // Append the card to the articles container
                articlesContainer.appendChild(articleCard);
            });
        })
        .catch(error => console.error('Error fetching articles:', error));
});

