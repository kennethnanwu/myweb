<html>
<title>ACE (Alumnus of Chinese Engineers)</title>
<?php
include("navBar.php");
?>
<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- The Event Section -->
  <div class="w3-black" id="events">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">EVENT DATES</h2>
      <p class="w3-opacity w3-center"><i>Remember to book your tickets!</i></p><br>

      <ul class="w3-ul w3-border w3-white w3-text-grey">
        <li class="w3-padding">September <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
        <li class="w3-padding">October <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
        <li class="w3-padding">November <span class="w3-badge w3-right w3-margin-right">1</span></li>
      </ul>
      <!-- Ongoing Events -->
        <div class="w3-third w3-margin-bottom">
          <img src="img/Logo.png" alt="San Francisco" style="width:100%" class="w3-hover-opacity"  onclick="document.getElementById('eventDetailModal').style.display='block'">
          <div class="w3-container w3-white">
            <p><b>Running man</b></p>
            <p class="w3-opacity">Feb. 18</p>
            <p class="w3-opacity">University of Toronto</p>
            <p>A break from the reading week</p>
            <p class="more_info"><a onclick="document.getElementById('eventDetailModal').style.display='block'">details...</a></p>
            <button class="w3-btn w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Event details -->
  <div id="eventDetailModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-bottom w3-card-8">
      <header class="w3-container w3-teal w3-center w3-padding-32 w3-white"> 
        <span onclick="document.getElementById('eventDetailModal').style.display='none'" 
       class="w3-closebtn w3-padding-xlarge w3-xxlarge w3-display-topright w3-hover-red">x</span>
        <h2 class="w3-wide">Event Title</h2>
      </header>
      <div class="w3-container">
        <p>details<br>
        details<br>
        details
        </p>
      </div>
    </div>
  </div>

  <!-- Ticket Modal -->
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-bottom w3-card-8">
      <header class="w3-container w3-teal w3-center w3-padding-32 w3-white"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-closebtn w3-padding-xlarge w3-xxlarge w3-display-topright">x</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
        <input class="w3-input w3-border" type="text" placeholder="How many?">
        <p><label><i class="fa fa-envelope"></i> Send To</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Enter email">
        <button class="w3-btn-block w3-teal w3-padding-12 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
        <button class="w3-btn w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">Need <a href="" class="w3-text-blue">help?</a></p>
      </div>
    </div>
  </div>

<!-- End Page Content -->
</div>

<?php
include('footer.php');
?>
</html>

<!-- Script -->
<script>
  
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

</script>