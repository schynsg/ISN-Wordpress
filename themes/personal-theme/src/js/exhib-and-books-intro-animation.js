const exhibsHover = document.getElementsByClassName('exhibitions__intro')[0];
const booksHover = document.getElementsByClassName('books__intro')[0];
const exhibs = document.getElementsByClassName('exhibitions')[0];
const books = document.getElementsByClassName('books')[0];
const booksItems = document.getElementById('books__items');
const exhibsItems = document.getElementById('exhibitions__items');


const booksTitle = document.getElementsByClassName('books__title')[0];
const booksLink = document.getElementsByClassName('books-arrow__bottom')[0];
const exhibsTitle = document.getElementsByClassName('exhibitions__title')[0];
const exhibsLink = document.getElementsByClassName('exhibs-arrow__bottom')[0];

function exhibshilighted() {
    exhibs.style.gridColumn = '1 / 10';
    books.style.gridColumn = '10 / 11';
    booksItems.style.display = 'none';
    exhibsItems.style.display = 'block';
    booksTitle.classList.add('vertical');
    booksLink.style.display = 'none';
    exhibsTitle.classList.remove('vertical');
    exhibsLink.style.display = 'block';
}

function bookshilighted() {
    exhibs.style.gridColumn = '1 / 2';
    books.style.gridColumn = '2 / 11';
    booksItems.style.display = 'block';
    exhibsItems.style.display = 'none';
    booksTitle.classList.remove('vertical');
    booksLink.style.display = 'block';
    exhibsTitle.classList.add('vertical');
    exhibsLink.style.display = 'none';
}

function exhibshilightedMobile() {
    exhibs.style.gridColumn = '1 / 6';
    books.style.gridColumn = '6 / 7';
    booksItems.style.display = 'none';
    exhibsItems.style.display = 'block';
    booksTitle.classList.add('vertical');
    booksLink.style.display = 'none';
    exhibsTitle.classList.remove('vertical');
    exhibsLink.style.display = 'block';
    exhibsHover.style.cursor = 'auto';
    booksHover.style.cursor = 'pointer';
}

function bookshilightedMobile() {
    exhibs.style.gridColumn = '1 / 2';
    books.style.gridColumn = '2 / 7';
    booksItems.style.display = 'block';
    exhibsItems.style.display = 'none';
    booksTitle.classList.remove('vertical');
    booksLink.style.display = 'block';
    exhibsTitle.classList.add('vertical');
    exhibsLink.style.display = 'none';
    exhibsHover.style.cursor = 'pointer';
    booksHover.style.cursor = 'auto';
}


if (window.innerWidth < 1000){
    exhibsHover.addEventListener('click', exhibshilightedMobile);
    booksHover.addEventListener('click', bookshilightedMobile);
    window.addEventListener("DOMContentLoaded", exhibshilightedMobile);
}

