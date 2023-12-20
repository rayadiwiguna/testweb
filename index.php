<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />

    <!-- My Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700&family=Poppins&family=Roboto:wght@400;700;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Inter:wght@100;300;400;500;600;700&family=Poppins&family=Roboto:ital,wght@0,700;0,900;1,300&display=swap"
      rel="stylesheet"
    />

    <!-- Icon -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- My Java -->
    <script src="javascript/java.js"></script>

    <title>HAPPY LUCK</title>
    <link rel="icon" type="image/x-icon" href="images/PayXYZ-Logo.png" />

    <!-- Phone Country -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css"
      rel="stylesheet"
      type="text/css"
    />

    <!-- Owl-carousel -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <!-- LOGO HEADER -->
    <div class="container">
      <div class="row mx-0 main-content">
        <div class="col-12 col-lg-8 col-md-7 main-left">
          <!-- View Desktop -->
          <div class="view-desktop">
            <div class="logo-header">
              <img class="img-logo" src="images/logo-2.png" />
            </div>
          </div>
          <!-- View Desktop -->

          <div class="image-content text-right">
            <img class="img-content" src="images/aircraft2.webp" />
          </div>
          <div class="bottom-content">
            <div class="badge">25.00x</div>
            <div class="main-text">
              <div class="change" id="eng-lang">
                <div class="top-text">PLAY WITHOUT RISK</div>
                <div class="bottom-text">
                  GET <span class="highlight-text">150%</span> BONUS <br />
                  AND <span class="highlight-text">50</span> FREESPINS
                </div>
                <div class="label-text">
                  <div class="label-text-content">1. Sign Up</div>
                  <div class="label-text-content">
                    2. Make your first deposit
                  </div>
                  <div class="label-text-content">3. Get a 150% bonus</div>
                </div>

                <div class="label-text-mobile">
                  <div class="grid-container">
                    <span>1. Sign up</span>
                    <span>2. Make your first deposit</span>
                    <span>3. Get a 150% bonus</span>
                  </div>
                </div>
              </div>

              <div class="change-lang" id="ind-lang">
                <div class="top-text">बिना जोखिम के खेलें</div>
                <div class="bottom-text">
                  एक <span class="highlight-text">150%</span> बोनस <br />
                  और <span class="highlight-text">50</span> फ्री स्पिन प्राप्त
                  करें
                </div>
                <div class="label-text">
                  <div class="label-text-content">1. साइन अप करें</div>
                  <div class="label-text-content">
                    2. अपना पहला डिपॉज़िट करें
                  </div>
                  <div class="label-text-content">
                    3. 150% बोनस प्राप्त करें
                  </div>
                </div>

                <div class="label-text-mobile">
                  <div class="grid-container">
                    <span>1. साइन अप करें</span>
                    <span>2. अपना पहला डिपॉज़िट करें</span>
                    <span>3. 150% बोनस प्राप्त करें 15</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 col-md-5 main-right">
          <div class="main-box">
            <!-- HEAD LANGUAGE -->
            <div class="view-desktop">
              <?php include 'language-head.php';?>
            </div>
            <div class="form-list">
              <!-- FORM REGIST -->
              <?php include 'form-regist.php';?>
            </div>
            <div class="modal-btn">
              <!-- FORM REGIST -->
              <?php include 'terms-and-conditions.php';?>
              <?php include 'privacy-policy.php';?>
              <?php include 'betting-rules.php';?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Owl-carousel jQuery Bundle (includes Popper) -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
      integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script type="text/JavaScript" src="JS/funtions.js"></script>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"
    ></script>

    <!-- Modal--button -->
    <script>
      $("#myModal").on("shown.bs.modal", function () {
        $("#myInput").trigger("focus");
      });
    </script>

    <script>
      function getValue(event) {
        const list_currency = document.querySelector("#inputState");
        if (event.value == "India (भारत)") {
          document.getElementById("number").value = "+91";
          list_currency.options[0].defaultSelected = true;
          list_currency.options[1].defaultSelected = false;
          list_currency.options[2].defaultSelected = false;
        } else if (event.value == "Bangladesh (বাংলাদেশ)") {
          document.getElementById("number").value = "+880";
          list_currency.options[0].defaultSelected = false;
          list_currency.options[1].defaultSelected = true;
          list_currency.options[2].defaultSelected = false;
        } else {
          document.getElementById("number").value = "+92";
          list_currency.options[0].defaultSelected = false;
          list_currency.options[1].defaultSelected = false;
          list_currency.options[2].defaultSelected = true;
        }
      }
    </script>

    <script>
      const sectEngChange = document.querySelector("#eng-lang");
      const sectIndChange = document.querySelector("#ind-lang");

      function btn_eng() {
        sectEngChange.classList.remove("change-lang");
        sectIndChange.classList.add("change-lang");
      }

      function btn_ind() {
        sectEngChange.classList.add("change-lang");
        sectIndChange.classList.remove("change-lang");
      }
    </script>

    <script>
      function change_lang(event) {
        console.log(event.value);
        if (event.value == "en") {
          btn_eng();
        } else {
          btn_ind();
        }
      }
    </script>

    <script>
      //TOGGLING NESTED ul
      $(".drop-down .selected a").click(function () {
        $(".drop-down .options ul").toggle();
      });

      //SELECT OPTIONS AND HIDE OPTION AFTER SELECTION
      $(".drop-down .options ul li a").click(function () {
        var text = $(this).html();
        $(".drop-down .selected a span").html(text);
        $(".drop-down .options ul").hide();
      });

      //HIDE OPTIONS IF CLICKED ANYWHERE ELSE ON PAGE
      $(document).bind("click", function (e) {
        var $clicked = $(e.target);
        if (!$clicked.parents().hasClass("drop-down"))
          $(".drop-down .options ul").hide();
      });
    </script>

    <!-- accordion section betting rules -->
    <script>
      var acc = document.getElementsByClassName("accordion");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
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
  </body>
</html>
