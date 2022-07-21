var loader = document.getElementById('loader');
window.addEventListener('load' , function(){
    loader.classList.add("fade-out");
    setTimeout(function(){
        loader.style.display = 'none';
    }, 1000);
});