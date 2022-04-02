var acc = document.getElementsByClassName("explorerButton");
var i;
var x = document.getElementById("demo");
changeIcon();

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    changeIcon();
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
    
  });
}

function changeIcon(){
  if (x.innerHTML == "navigate_next") {
    x.innerHTML = "expand_more";
  } else {
    x.innerHTML = "navigate_next";
  }
}