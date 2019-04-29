/* 
  ### functions for modal nav ###
  ###############################
*/

var oModal = document.getElementById("launch-mobile-nav");
oModal.addEventListener("click", openModal);
var modal_open = document.getElementById("mobileNav");

function openModal() {
  //console.log(modal_open.className);
  if (!modal_open.className.endsWith("animate-opacity")) {
    modal_open.className += " animate-opacity";
    modal_open.style.width = "100%";
    //console.log(modal_open.className);
  }
}

//console.log(modal_open.className);

var cModal = document.querySelector(".close-modal");
cModal.addEventListener("click", closeModal);

function closeModal() {
  var modal_close = document.querySelector(".mobile-nav");
  modal_close.style.width = "0";
  modal_open.classList.remove("animate-opacity");
}

/*
  ### gallery page filter selection ###
  #####################################
*/

//var url = decodeURIComponent(window.location.href);

filterSelection("all");

function filterSelection(param) {
  var imgClass, i;
  imgClass = document.getElementsByClassName("column");
  if (param == "all" || param === "undefined") param = "";
  //console.log(param);
  for (i = 0; i < imgClass.length; i++) {
    removeSelection(imgClass[i], "expose");
    if (imgClass[i].className.indexOf(param) > -1)
      addSelection(imgClass[i], "expose");
  }
  //console.log(param);
}

//show filtered elements

function addSelection(element, name) {
  //console.log(element);
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  //console.log(arr1);
  //console.log(arr2);
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// hide unselected elements
function removeSelection(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");

  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

//highlight selected tab
var tabContainer = document.getElementById("tab-container");
var tabs = tabContainer.getElementsByClassName("btn");

for (var i = 0; i < tabs.length; i++) {
  tabs[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace("active", "");
    this.className += " active";
  });
}

/*
  ### gallery modal container ###
  ###############################
*/
var collage_modal = document.getElementById("galleryModal");

function imgModal(element) {
  var collage_modal = document.getElementById("galleryModal");
  var modal_img = document.getElementById("modalImage");

  /* get image holder */
  //console.log(element.src);
  collage_modal.style.display = "block";
  modal_img.src = element.src;
  modal_img.style.borderRadius = "8px";
  //console.log(modal_img);
}

var close_x = document.querySelector(".close-gallery-modal");
function closeColgModal() {
  var collage_modal = document.getElementById("galleryModal");
  collage_modal.style.display = "none";
}
