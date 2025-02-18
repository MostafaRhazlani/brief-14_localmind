const add = document.getElementById('add');
const formAdd = document.querySelector('.form-add');

if(add) {
    add.addEventListener('click', () => {
        formAdd.classList.toggle('active');
    });
}

