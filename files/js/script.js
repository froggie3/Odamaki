function getCurrentY() {
    let currentY = window.scrollY;
    document.getElementById('debugInfo').innerHTML = currentY

    window.addEventListener('scroll', function(){
        currentY = window.scrollY;
        document.getElementById('debugInfo').innerHTML = '<p>'.concat('', currentY + 'px</p>')
    });
}

window.addEventListener('DOMContentLoaded', function(){
    getCurrentY()
});

function toHead() {
    console.log('clicked');
    document.scrollTo({
        top: 0,
        left: 0,
        behavior: 'smooth'
      });
}
