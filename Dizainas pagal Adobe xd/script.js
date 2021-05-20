
var suma;

suma = 5;

console.log('Labas');
console.log(suma);

document.addEventListener('DOMContentLoaded', function() {

    if(document.querySelector('#login .or')) {
        document.querySelector('#login .or').classList.add('login');
    }

    if(document.querySelector('#forgot .or')) {
        document.querySelector('#forgot .or').classList.add('forgot');
    }

    // document.querySelector('#forgot .or').classList.add('forgot');
});