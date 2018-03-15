function openTab(evt, tabname) {
  var i, x, tablinks;
  x = document.getElementsByClassName("tab");
  for (i = 0; i < x.length; i++) {
     x[i].className = "hidden tab";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" tab-active", ""); 
  }
  document.getElementById(tabname).className = "tab";
  evt.currentTarget.className += " tab-active";
 }