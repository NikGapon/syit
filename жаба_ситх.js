function validateLoginINLog(element) {
    let errorBlock = document.getElementById('text-error');
    if (element.value.length <= 2) {
        element.className = 'error-border';
        errorBlock.innerHTML = 'логин не может быть короче 3 символов';
        document.getElementById('knopka').disabled = 1;
    } else {
        element.className = 'success-border';
        errorBlock.innerHTML = '';
        document.getElementById('knopka').disabled = 0;
    }
}

function validatePasswordINLog(element) {
    let errorBlock = document.getElementById('text-error');
    if (element.value.length <= 2) {
        element.className = 'error-border';
        errorBlock.innerHTML = 'пароль не может быть короче 3 символов';
        document.getElementById('knopka').disabled = 1;
    } else {
        element.className = 'success-border';
        errorBlock.innerHTML = '';
        document.getElementById('knopka').disabled = 0;
    }
}

function validatePasswordINPassword(element) {  
    let errorBlock = document.getElementById('text-error');
    let dsa = document.getElementById('First_pas')
    
    if (element.value !== dsa.value) {
        element.className = 'error-border';
        errorBlock.innerHTML = 'пароли не совпадают';
        document.getElementById('knopka').disabled = 1;
    } else {
        
        document.getElementById('knopka').disabled = 0;
    }
    
}

// function proverka_login(element) {
//     let errorBlock = document.getElementById('text-error');
//     if (element.value.length <= 0) {
//         element.className = 'error-border';
//         errorBlock.innerHTML = 'поле не может быть пустое';
//     }
// }


