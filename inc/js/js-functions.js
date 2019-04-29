/* navigation objects */
var root = "./";
var nav = {
  home: "index.php",
  gallery: root + "gallery.php",
  event: root + "event.php",
  about: root + "about.php",
  contact: root + "contact.php"
};

//create site navigation
function runNavScript(nav) {
  document.write('<ul class="js-top-nav js-mobile-nav">');
  Object.keys(nav).forEach(function(key) {
    //console.log('<a href="' + nav[key] + '" />' + key + "</a>");
    document.write('<li><a href="' + nav[key] + '" />' + key + "</a></li>");
  });
  document.write("</ul>");
}

/* 
  ### hero image slider ###
  #########################
*/
var imgHero = document.getElementsByClassName("hero-cnt");
var strHero = document.getElementsByClassName("hero-text-cnt");

var imgArr = [
  "./web-images/images/event-8.jpg",
  "./web-images/images/wedding-195.jpg",
  "./web-images/images/bor-on-the-table.jpg"
];

var strArr = ["Your Life Through A Lens ", "Rafik Studio", "Memorable Event"];

var imgIndex = 0;

function swapHero(imgHero, strHero) {
  var imgHero = document.getElementsByClassName("hero-cnt");
  var strHero = document.getElementsByClassName("hero-text-cnt");
  for (var i = 0; i < imgHero.length; i++) {
    imgHero[i].style.backgroundImage =
      "linear-gradient(rgba(0,0,0, .6), rgba(0,0,0, .6)), url('" +
      imgArr[i] +
      "')";
    imgHero[i].classList.add("img" + i);
    imgHero[i].style.display = "none";
  }

  imgIndex++;
  if (imgIndex > imgArr.length) {
    imgIndex = 1;
  }

  imgHero[imgIndex - 1].style.display = "flex";
  strHero[imgIndex - 1].innerHTML = strArr[imgIndex - 1];

  //console.log(imgHero.length);
  setTimeout(swapHero, 3500);
}
