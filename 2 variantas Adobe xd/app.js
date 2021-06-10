document.querySelector('.toggle').onclick = function() {
    this.classList.toggle('active');
    document.querySelector('.list').classList.toggle('active');
 }