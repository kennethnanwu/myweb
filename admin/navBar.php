<!-- Navbar -->
<div class="w3-top draw-when-load">
<ul class="w3-navbar w3-black w3-card-2 w3-left-align draw-when-load">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-padding-large" onclick="toggleNavigationMenu()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
  </li>
  <li><a href="aceadmin.php" class="w3-hover-none w3-hover-text-grey w3-padding-large" onclick="closeNavBar()">HOME</a></li>
  <li class="w3-hide-small"><a href="addEvents.php" class="w3-padding-large">ADD EVENTS</a></li>
</ul>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <ul class="w3-navbar w3-left-align w3-black">
    <li><a class="w3-padding-large" href="addEvents.php" onclick="closeNavBar()">ADD EVENTS</a></li>
  </ul>
</div>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function toggleNavigationMenu() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
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