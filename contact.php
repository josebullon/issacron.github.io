<?php
  // var
  $act05 = "active";
  // import
  include_once 'header.php';
?>

              <!-- About -->
              <div class="pb-0 pb-sm-2">
                <h1 class="title title--h1 title__separate">Contact</h1>
              </div>

              <!-- Contact -->
              <div class="map" id="map"></div>
              <h2 class="title title--h2">Contact Form</h2>
              <form id="contact-form" class="contact-form" data-toggle="validator">
                <div class="row">
                  <div class="form-group col-12 col-md-6">
                    <input type="text" class="input form-control" id="nameContact" name="nameContact" placeholder="Full name" required="required" autocomplete="on" oninvalid="setCustomValidity('Fill in the field')" onkeyup="setCustomValidity('')" />
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group col-12 col-md-6">
                    <input type="email" class="input form-control" id="emailContact" name="emailContact" placeholder="Email address" required="required" autocomplete="on" oninvalid="setCustomValidity('Email is incorrect')" onkeyup="setCustomValidity('')" />
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group col-12 col-md-12">
                    <textarea class="textarea form-control" id="messageContact" name="messageContact" placeholder="Your Message" rows="4" required="required" oninvalid="setCustomValidity('Fill in the field')" onkeyup="setCustomValidity('')"></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 col-md-6 order-2 order-md-1 text-center text-md-start">
                    <div id="validator-contact" class="hidden"></div>
                  </div>
                  <div class="col-12 col-md-6 order-1 order-md-2 text-end">
                    <button type="submit" class="btn"><i class="font-icon icon-send"></i> Send Message</button>
                  </div>
                </div>
              </form>

<?php
  // import
  include_once 'footer.php';
?>
