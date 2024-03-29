//Book Class
class Book {
    constructor(title, author, isbn) {
        this.title = title;
        this.author = author;
        this.isbn = isbn;
    }
}
//Ui Class
class UI {
    static displayBooks() {
        const StoredBooks = [
            {
                title: 'Book One',
                author: 'Chang 1',
                isbn: '121212'
            },
            {
                title: 'Book Two',
                author: 'Chang 2',
                isbn: '343434'
            }
        ];

        const books = StoredBooks;

        books.forEach((book) => UI.addBookToList(book));
    }

    static addBookToList(book) {
        const list = document.querySelector('#book-list');

        const row = document.createElement('tr');

        row.innerHTML = `
            <td>${book.title}</td>
            <td>${book.author}</td>
            <td>${book.isbn}</td>
            <td><a href="#" class="btn btn-danger btn-sm delete">X</a></td>
        `;

        list.appendChild(row);
    }

    static deleteBook(el) {
        if(el.classList.contains('delete')) {
            el.parentElement.parentElement.remove();
        }
    }

    static clearFields() {
        document.querySelector('#title').value = '';
        document.querySelector('#author').value = '';
        document.querySelector('#isbn').value = '';
    }
}

//Store Class: Handles Storage

//Event: Display book
document.addEventListener('DOMContentLoaded', UI.displayBooks);

//Event add boook
document.querySelector('#book-form').addEventListener('submit',(e) => {
    //Prevent actual submit
    e.preventDefault();
    //Get form value
    const title = document.querySelector('#title').value;
    const author = document.querySelector('#author').value;
    const isbn = document.querySelector('#isbn').value;

    //validate
    if(title == '' || author == '' || isbn === '') {
        alert('Please fill in field');
    } else {
        //Instatiate book
        const book = new Book(title, author, isbn);
        //console.log(book)
    
        //Add book to UI
        UI.addBookToList(book);
        
        //Clear field
        UI.clearFields();
    }
});

//Event delete book
document.querySelector('#book-list').addEventListener('click',(e)=>{
    UI.deleteBook(e.target);
});