
const navbar = document.getElementById("navbar");
window.onscroll = function() {scroll()};
var sticky = navbar.offsetTop;
function scroll() {
  if (window.pageYOffset >= sticky+350) {
    navbar.classList.add("sticky");
  } 
  else {
    navbar.classList.remove("sticky");
  }
};


//carusel
var slide = 0;
schimbapoza();

function schimbapoza() {
  var i;
  var poze = document.getElementsByClassName("carousel-item");

  for (i = 0; i < poze.length; i++) {
    poze[i].style.display = "none";
  }
  slide++;

  if (slide > poze.length) {slide = 1}
  poze[slide-1].style.display = "block";

  setTimeout(schimbapoza, 10000); 
}

//footer form

function validateForm() {
  if (isEmpty(document.getElementById('email').value.trim())) {
  alert('Nu aţi introdus o adresă de e-mail!');
  return false;
  }
  if (!validateEmail(document.getElementById('email').value.trim())) {
  alert('Adresa de e-mail trebuie să fie validă!');
  return false;
  }
  return alert("Mulţumesc că te-ai abonat! :)");

  function isEmpty(str) { return (str.length === 0 || !str.trim()); }

  function validateEmail(email) {
  var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
  return isEmpty(email) || re.test(email);
  }
}
