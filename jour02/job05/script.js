var footer = document.getElementById('footer');
var body = document.body


var val = window.scrollY/1000;

var u = val - 15


/**
 *  ${window.scrollY/1000}  contient le nombre du scrolle divisé par mille car c'est trop grand
 */
body.onscroll = function() {
  footer.style.backgroundColor = `rgba(${u}, 70, 50 , ${window.scrollY/1000})`;
};





