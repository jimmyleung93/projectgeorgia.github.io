function includeHTML() {
  var z, i, elmnt, file, xhttp;
  /*loop through a collection of all HTML elements:*/
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain atrribute:*/
    file = elmnt.getAttribute("loadNav");
    if (file) {
      /*make an HTTP request using the attribute value as the file name:*/
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          if (this.status == 404) {elmnt.innerHTML = "&#9888;There is a problem loading the header. Please try reloading the page.";}
          /*remove the attribute, and call this function once more:*/
          elmnt.removeAttribute("loadNav");
          includeHTML();
        }
      } 
      xhttp.open("GET", file, true);
      xhttp.send();
      /*exit the function:*/
      return;
    }
  }
	
	if(sessionStorage.getItem('myUserEntity') == null){
    //Redirect to login page, no user entity available in sessionStorage
    
  } else {
    //User already logged in
    var userEntity = {};
    userEntity = JSON.parse(sessionStorage.getItem('myUserEntity'));
    
	//var profile = googleUser.getBasicProfile();
	//$("#guestIcon").css("display","none");
	//$("#userIcon").attr('src',profile.getImageUrl());
	$("#guestIcon").css("display","none");
	$("#userIcon").attr('src',localStorage.getItem('imageUrl'));
	$("#Username").text(localStorage.getItem('Name'));
  }

	if (window.location.href.substr(39, 5) === "tools") {
		$('#tools').addClass('active');
    } else if (window.location.href.substr(39, 5) === "games") {
		$('#games').addClass('active');
	} else if (window.location.href.substr(39, 8) === "learning") {
		$('#learning').addClass('active');
		$("#Browser").css({"z-index": "1", "position": "absolute", "left": "0", "top": "50vh", "width": "100vw", "height": "50vh"});
	} else if (window.location.href.substr(39, 6) === "others") {
		$('#others').addClass('active');
	}

	var link = document.querySelector("link[rel*='icon']") || document.createElement('link');
    link.type = 'image/x-icon';
    link.rel = 'shortcut icon';
    link.href = 'http://student.tanghin.edu.hk/~S150646/logo.png';
    document.getElementsByTagName('head')[0].appendChild(link);

document.body.innerHTML = document.body.innerHTML + '<footer class="bg-dark text-center" style="position: absolute; width: 100%; color: white;"><br><a href="#">English</a> | <a href="#zh-hant">繁體中文(實驗版)</a><br><span class="eng">© 2017-2019 Jimmy Leung. All rights reserved.</span><span class="chi">© 2017-2019 Jimmy Leung 版權所有</span><br><span class="eng">Follow me on </span><span class="chi">追蹤我：</span><a class="d-inline" href="https://www.instagram.com/jimmyleung0_0/" target="_blank"><i class="fab fa-instagram"></i> Instagram</a><br> 	<a href="http://student.tanghin.edu.hk/~S150646/siteMap"><i class="fas fa-sitemap"></i><span class="eng"> Site Map</span><span class="chi"> 網站導覽</span></a><br> 	<a href="http://student.tanghin.edu.hk/~S150646/privacyPolicy"><i class="fas fa-lock"></i><span class="eng"> Privacy Policy</span><span class="chi"> 私隱政策聲明</span></a></footer>';

$(".feed-item-title").before("<hr>");

if (window.location.hash.substr(1) === "zh-hant") {
$('.chi').show();
$('.eng').hide();
} else {
$('.chi').hide();
$('.eng').show();
}

$(window).on('hashchange', function() {
if (window.location.hash.substr(1) === "zh-hant") {
$('.chi').show();
$('.eng').hide();
} else {
$('.chi').hide();
$('.eng').show();
}
});

}





function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "Header")) {
    /* if present, the header is where you move the DIV from:*/
    document.getElementById(elmnt.id + "Header").onmousedown = dragMouseDown;
  } else {
    /* otherwise, move the DIV from anywhere inside the DIV:*/
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;
  }
}





function browser(url) {
var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
		var element = document.getElementById('text');
		if (isMobile) {
  			$("#Browser").css("position","fixed");
		}
		$("#Browser").attr('class',"d-block");
		document.getElementById('browserCore').src = url; //"http://student.tanghin.edu.hk/~S150646/browse?url=" + 
		$("#originalLink").attr('href',url);

		
		
		
//var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
//		var element = document.getElementById('text');
//		if (isMobile) {
//  			window.location.href = "http://student.tanghin.edu.hk/~S150646/learning/browser#" + url;
//		} else {
//			$("#Browser").attr('class',"d-block");
//			document.getElementById('browserCore').src = url; //"http://student.tanghin.edu.hk/~S150646/browse?url=" + 
//			$("#originalLink").attr('href',url);
//		}
}

function closeBrowser() {
$("#Browser").attr('class',"d-none");
}