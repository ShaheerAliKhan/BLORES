<?php
include 'config.php';
include 'headers/loggedinUser.php';
?>

<title>About Us | BLORES</title>
<div class="spacer"></div>
<div class="spacer"></div>
<center><h1>BLORES - ABOUT US</h1></center>
		<div class="spacer"></div>
          <div class="container">
              <div class="row">
                  <div class="col-lg-3">

                  </div>

                  <div class="col-lg-6">
                    <div class="bb-registrationAccordian">
                        <button class="accordion">What Is BLORES? </button>
                        <div class="panel">
                          <p>This web
                            app would be able to help people in finding their desired blood . This web app
                            allows people to search for blood online which will give result of the blood bank
                            available with the blood anytime and anywhere. Through this web app the donor
                            will also get a full report of his blood test at the time of donating blood in exchange
                            of the other blood . This web app would also recommend the blood needy to the
                            nearest blood banks to his current location .The main goal of this web app is to
                            provide a suitable and a single platform for people in need of blood search easier
                            and faster.</p>
                        </div>
                        
                        <button class="accordion">What BLORES Do?</button>
                        <div class="panel">
                          <p>A web app where you can find &amp; reserve blood when in need and can take-away in the
                            given amount of time. This web-app will give a simple platform to various blood banks to
                            connect and share their blood bags with the people in need. Through this web app when
                            a family is in need of blood, they can go to our web-app, register themselves and search
                            for their required blood group, then the list of blood banks will be displayed of those who
                            possess those blood groups. After reserving that blood in the blood bank, the user will
                            be navigated to that respective blood bank. There the blood will be reserved for two
                            hours. When the user reserves the blood, the user will be notified through a confirmation
                            message about the reservation. With that the countdown will start for the user until he
                            comes and collect that blood bottle, after which if the person does not come and collect,
                            the booking will be given to the other person in line.
                            The person who donates the blood for the sake of getting the blood in return, his medical
                            report will be maintained accordingly, and will be updated as many times as he donates
                            the blood</p>
                        </div>
                        
                        <button class="accordion">Why Integrating Blood Banks?</button>
                        <div class="panel">
                          <p>The intergration of more blood banks - more needy persons can avail.
                              We are not having any confidential sort of data of any particular blood 
                              bank. We are collecting only few attributes of Blood bag even the identity 
                              of the owner is also unknown.
                          </p>
                        </div>
                        
                     </div>
                </div>

                <div class="col-lg-3">
                      
                </div>
              </div>
          </div>

          <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

</script>












<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
                        