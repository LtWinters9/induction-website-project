// Get cookie
function getCookie(c_name) {
  if (document.cookie.length > 0) {
    c_start = document.cookie.indexOf(c_name + "=");
    if (c_start != -1) {
      c_start = c_start + c_name.length + 1;
      c_end = document.cookie.indexOf(";", c_start);
      if (c_end == -1) {
        c_end = document.cookie.length;
      }
      return unescape(document.cookie.substring(c_start, c_end));
    }
  }
  return null;
}


// Set Cookie
function setCookie(name, value, days) {
  var expires = "";
  if (days) {
    var thedate = new Date();
    thedate.setTime(thedate.getTime() + (days * 24 * 60 * 60 * 1000));
    var expires = "; expires=" + thedate.toUTCString();
  }
  document.cookie = name + "=" + escape(value) + ((days == null) ? "" : expires + "; path=/en-uk/home/projects");
}





function getDocHeight() {
  var d = document,
    b = d.body,
    e = d.documentElement;
  return Math.max(
    b.scrollHeight, e.scrollHeight, b.offsetHeight, e.offsetHeight, b.clientHeight, e.clientHeight
  );
}

function getWinHeight() {
  var w = window,
    d = document,
    e = d.documentElement;
  var scrollposition = (w.pageYOffset || e.scrollTop) - (e.clientTop || 0);
  return scrollposition;
}

function getWinWidth() {
  var w = window,
    d = document,
    e = d.documentElement,
    g = d.getElementsByTagName('body')[0],
    x = w.innerWidth || e.clientWidth || g.clientWidth;
  return x;
}

function getScrollPosition() {
  var w = window,
    d = document,
    e = d.documentElement;
  var scrollposition = (w.pageYOffset || e.scrollTop) - (e.clientTop || 0);
  return scrollposition;
}

function stopDefaultAction(e) {
  if (e.preventDefault) {
    e.preventDefault();
  } else {
    e.returnValue = false;
  }
}

function createXHR() {
  if (window.XMLHttpRequest) {
    return new XMLHttpRequest();
  } else if (window.ActiveXObject) {
    return new ActiveXObject("Microsoft.XMLHTTP");
  }
}



// Cross browser compatible event target
function getTargetElement(e) {
  var targetelement = null;
  targetelement = (e.target || e.srcElement || e.toElement)
  return targetelement;
}

function prepareIntents(level) {
  if (window.addEventListener) {
    if (addarticle) {
      addarticle.addEventListener("click", function() {
        setCookie("userintent", "addarticle", 1);
      }, false);
    }
  } else {
    if (addarticle) {
      addarticle.attachEvent("onclick", function() {
        setCookie("userintent", "addarticle", 1)
      });
    }
  }
}

function showOne(str) {
  if (str == "") {
    document.getElementById("hide(0)").innerHTML = "";
    return;
  } else {
    if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
    } else {
      // code for IE6, IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("hide(0)").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "oneway.php?q=" + str, true);
    xmlhttp.send();
  }
}

//Only uppercase for postcode
function upperCaseF(a){
    setTimeout(function(){
        a.value = a.value.toUpperCase();
    }, 1);
}


// js validation for only numbers on mobile & tel
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function prepareMenu() {
  if (!window.getComputedStyle) {
    window.getComputedStyle = function(myElement, parTwo) {
      this.myElement = myElement;
      this.getPropertyValue = function(theProperty) {
        var re = /(\-([a-z]){1})/g;
        if (theProperty == 'float') theProperty = 'styleFloat';
        if (re.test(theProperty)) {
          theProperty = theProperty.replace(re, function() {
            return arguments[2].toUpperCase();
          });
        }
        return myElement.currentStyle[theProperty] ? myElement.currentStyle[theProperty] : null;
      }
      return this;
    }
  }
  var menutoggle = document.getElementById("menubutton");
  var menu = document.getElementById("menu");
  if (window.addEventListener) {
    // Menu display toggle for small screen <640px wide layout
    document.addEventListener("click", function(e) {

      var menustyle = window.getComputedStyle(menu);
      var menuvisstyle = menustyle.getPropertyValue("display");
      if (getWinWidth() < 639 && (menuvisstyle == "block" || e.target != menutoggle)) {
        menu.style.display = "none";
      } else {
        menu.style.display = "block";
      }

    }, false);

    // if screen resized decide whether or not to switch to 'popup' style menu
    window.addEventListener("resize", function() {
      if (getWinWidth() >= 639) {
        menu.style.display = "block";
      } else {
        menu.style.display = "none";
      }
    }, false);
    // as above but to catch iOs devices which do not trigger a resize event
    // when switching between portrait and landscape mode
    window.addEventListener('orientationchange', function() {
      if (getWinWidth() >= 639) {
        menu.style.display = "block";
      } else {
        menu.style.display = "none";
      }
    }, false);
  }
}
