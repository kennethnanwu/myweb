<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleNavigationMenu() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var ticketModal = document.getElementById('ticketModal');
var eventDetailModal = document.getElementById('eventDetailModal');
window.onclick = function(event) {
  if (event.target == ticketModal) {
    ticketModal.style.display = "none";
  } else if (event.target == eventDetailModal) {
    eventDetailModal.style.display = "none";
  }
}

// Close when the user clicks anywhere outside the menu on small screens
function closeNavBar() {
	var smallMenu = document.getElementById("navDemo");
	if (smallMenu.className.indexOf("w3-show") !== -1) {
		smallMenu.className = smallMenu.className.replace(" w3-show", "");
	}
}

// Close when the user clicks anywhere outside the menu on small screens
var smallMenu = document.getElementById('navDemo');

</script>