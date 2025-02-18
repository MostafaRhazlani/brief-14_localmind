const add = document.getElementById('add');
const formAdd = document.querySelector('.form-add');

const addComment = document.getElementById('add-comment');
const comment = document.querySelector('.comment');

if(add) {
    add.addEventListener('click', () => {
        formAdd.classList.toggle('active');
    });
}

if(addComment) {
    addComment.addEventListener('click', () => {
        comment.classList.toggle('active');
    });
}

