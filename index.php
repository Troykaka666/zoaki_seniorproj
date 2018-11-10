<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/animation.css">
  <link rel="stylesheet" href="css/styles.css">
  <title>Bootstrap Theme</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="fixed-top navbar navbar-expand-sm bg-light navbar-light scroll-navbar" id="main-nav" style="box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
    <div class="container">
      <a href="index.html" class="navbar-logo"><img src="img/Zoaki.png" width="70" heigh="70" alt="" class="logo-img logo-img2"></a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto" data-spy="affix" data-offset-top="200">
          <li class="nav-item">
            <a href="#home" class="nav-link active">Home</a>
          </li>
          <li class="nav-item">
            <a href="missfound.php" class="nav-link">Miss&Found</a>
          </li>
          <li class="nav-item">
            <a href="adopt.php" class="nav-link">Adoption</a>
          </li>
          <li class="nav-item">
            <a href="#create-head-section" class="nav-link">Information</a>
          </li>
          <li class="nav-item">
            <a href="#share-head-section" class="nav-link">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Showcase -->
  <section id="showcase">
    <div id="slider4" class="carousel slide mb-5" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item carousel-item-img-1 active">
          <div class="container">
            <div class="carousel-caption d-md-block">
              <h3>Slide One</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, laudantium!</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="carousel-item carousel-item-img-2">
          <div class="container">
            <div class="carousel-caption d-none d-md-block">
              <h3>Slide One</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, laudantium!</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="carousel-item carousel-item-img-3">
          <div class="container">
            <div class="carousel-caption d-none d-md-block">
              <h3>Slide One</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, laudantium!</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <a href="#slider4" class="carousel-control-prev" data-slide="prev"> <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#slider4" class="carousel-control-next" data-slide="next"> <span class="carousel-control-next-icon"></span>
        </a>
      </div>
  </section>
  <section id="about">
    <div class="container mb-5">
      <hr class="about-line" data-content="Our Mission">
      <div class="container text-center moveInRight">
        <h3 class="custom-heading1">Lorem ipsum dolor sit amet consectetur.</h3>
        <p class="lead custom-p1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sunt, nobis
          molestias illum error odit architecto ipsam beatae quam quasi? Corporis neque maiores repudiandae ullam.</p>
      </div>
      <div class="row mb-5 mt-3">
        <div class="col-sm-6 col-lg-3 card-md-mb ">
          <div class="img-holder shadow">
            <img src="img/slide-img3.jpeg" alt="">
            <div class="card-overlap">
              <a href="" class="card-overlap-text">Miss&Found</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 card-md-mb">
          <div class="img-holder shadow">
            <img src="img/slide-img3.jpeg" alt="">
            <div class="card-overlap">
              <a href="" class="card-overlap-text">Adoption</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6  col-lg-3 card-md-mb">
          <div class="img-holder shadow">
            <img src="img/slide-img3.jpeg" alt="">
            <div class="card-overlap">
              <a href="" class="card-overlap-text">Categories</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 card-md-mb">
          <div class="img-holder shadow">
            <img src="img/slide-img3.jpeg" alt="">
            <div class="card-overlap">
              <a href="" class="card-overlap-text">AboutUs</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="parallax-holder">
    <div class="parallax parallax-1"></div>
    <div class="paralax-overlap">
      <span class="paralax-text">We Care</span>
      <span class="paralax-text paralax-text2">How They Live</span>
    </div>
  </div>

  <section id="ourpurpose" class="mt-4">
    <div class="container">
      <hr class="about-line" data-content="WHY?">
      <div class="container text-center">
        <h2 class="custom-heading1">Lorem ipsum dolor sit amet consectetur.</h2>
        <p class="lead custom-p1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sunt, nobis
          molestias illum error odit architecto ipsam beatae quam quasi? Corporis neque maiores repudiandae ullam.</p>
      </div>
    </div>
    <div class="row my-3">
      <div class="col-sm-4 mb-2 ">
        <div class="card shadow" style="position: relative;">
          <div class="card-body pt-5 fact-holder">
            <div class="card-title text-center text-danger">123</div>
            <div class="card-subtitle text-muted text-danger">Abandoned</div>
            <div class="card-text text-center custom-p1">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Officiis eveniet suscipit amet facilis quaerat exercitationem cum voluptatum corrupti doloribus officia?
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mb-2">
        <div class="card shadow" style=" position: relative;">
          <div class="card-body pt-5 fact-holder">
            <div class="card-title text-center text-danger">123</div>
            <div class="card-subtitle text-muted text-danger">Lost</div>
            <div class="card-text text-center custom-p1">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Officiis eveniet suscipit amet facilis quaerat exercitationem cum voluptatum corrupti doloribus officia?
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mb-2">
        <div class="card shadow" style="position: relative;">
          <div class="card-body pt-5 fact-holder">
            <div class="card-title text-center text-danger">123</div>
            <div class="card-subtitle text-muted text-danger">Found</div>
            <div class="card-text text-center custom-p1">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Officiis eveniet suscipit amet facilis quaerat exercitationem cum voluptatum corrupti doloribus officia?
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="parallax-holder">
    <div class="parallax parallax-2"></div>
    <div class="paralax-overlap">
      <span class="paralax-text">Hope</span>
      <span class="paralax-text paralax-text2">Will Change a life</span>
    </div>
  </div>

  <section id="hope">
    <div class="container">
      <hr class="about-line" data-content="They Need You">
      <div class="container text-center">
        <h2 class="custom-heading1">Lorem ipsum dolor sit amet consectetur.</h2>
        <p class="lead custom-p1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sunt, nobis
          molestias illum error odit architecto ipsam beatae quam quasi? Corporis neque maiores repudiandae ullam.</p>
      </div>
    </div>
    <div class="container mb-2">
      <div class="row">
        <div class='col-lg-3 col-md-6 my-2'>
          <div class='card shadow'>
            <img class='card-img-top img-fluid' src='user_uploaded_img/1.jpeg' alt='Card image cap'>
            <div class='card-body'>
              <div class='container cards-head mb-2'>
                <i class="fas fa-bullhorn d-inline icon-right-animate"></i>
                <h5 class="d-inline">Found</h5>
              </div>
              <div class='container text-center mt-2'>
                <a href='#' class='btn btn-default card-btn-info' data-toggle='modal' data-target='#$user_id'>More
                  Information</a>
              </div>
            </div>
          </div>
        </div>
        <div class='col-lg-3 col-md-6 my-2'>
          <div class='card shadow'>
            <img class='card-img-top img-fluid' src='user_uploaded_img/2.jpeg' alt='Card image cap'>
            <div class='card-body'>
              <div class='container cards-head mb-2'>
                <i class="fas fa-bullhorn d-inline icon-right-animate"></i>
                <h5 class="d-inline">Miss</h5>
              </div>
              <div class='container text-center mt-2'>
                <a href='#' class='btn btn-default card-btn-info' data-toggle='modal' data-target='#$user_id'>More
                  Information</a>
              </div>
            </div>
          </div>
        </div>
        <div class='col-lg-3 col-md-6 my-2'>
          <div class='card shadow'>
            <img class='card-img-top img-fluid' src='user_uploaded_img/3.jpeg' alt='Card image cap'>
            <div class='card-body'>
              <div class='container cards-head mb-2'>
                <i class="fas fa-bullhorn d-inline icon-right-animate"></i>
                <h5 class="d-inline">Adopt Me</h5>
              </div>
              <div class='container text-center mt-2'>
                <a href='#' class='btn btn-default card-btn-info' data-toggle='modal' data-target='#$user_id'>More
                  Information</a>
              </div>
            </div>
          </div>
        </div>
        <div class='col-lg-3 col-md-6 my-2'>
          <div class='card shadow'>
            <img class='card-img-top img-fluid' src='img/unknown.jpg' alt='Card image cap'>
            <div class='card-body'>
              <div class='container cards-head mb-2'>
                <i class="fas fa-bullhorn d-inline icon-right-animate"></i>
                <h5 class="d-inline">There Are More</h5>
              </div>
              <div class='container text-center mt-2'>
                <a href='miss&found.php' class='btn btn-default card-btn-info'>Find Out More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="parallax-holder">
    <div class="parallax parallax-3"></div>
    <div class="paralax-overlap">
      <span class="paralax-text">Together</span>
      <span class="paralax-text paralax-text2">We Will Save More</span>
    </div>
  </div>

  <section id="about" class="mt-2">
    <div class="container">
      <hr class="about-line" data-content="Who We Are?">
      <div class="container text-center">
        <h2 class="custom-heading1">Lorem ipsum dolor sit amet consectetur.</h2>
        <p class="lead custom-p1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sunt, nobis
          molestias illum error odit architecto ipsam beatae quam quasi? Corporis neque maiores repudiandae ullam.</p>
      </div>
    </div>
    <div class="row">
      <div class="container">
        <div class="row">
          <div class="col-xs col-md-4 col-lg-2 mt-1">
            <div class="about-img-holder custom-margin1 shadow">
              <img src="img/people1.jpeg" alt="">
              <div class="img-overlap">
                <div class="img-overlap-text text-center">
                  <p class="about-img-name mt-4">Troy Wu</p>
                  <p class="lead about-img-title">Team Leader</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs col-md-4 col-lg-2 mt-1">
            <div class="about-img-holder custom-margin2 custom-margin3 shadow">
              <img src="img/people1.jpeg" alt="" class="img-fluid">
              <div class="img-overlap">
                <div class="img-overlap-text text-center">
                  <p class="about-img-name mt-4">Troy Wu</p>
                  <p class="lead about-img-title">Team Le3333ader</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs col-md-4 col-lg-2 mt-1">
            <div class="about-img-holder custom-margin2 shadow">
              <img src="img/people1.jpeg" alt="" class="img-fluid">
              <div class="img-overlap">
                <div class="img-overlap-text text-center">
                  <p class="about-img-name mt-4">Troy Wu</p>
                  <p class="lead about-img-title">Team 111eader</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs col-md-4 col-lg-2 mt-1">
            <div class="about-img-holder custom-margin2 shadow">
              <img src="img/people1.jpeg" alt="" class="img-fluid">
              <div class="img-overlap">
                <div class="img-overlap-text text-center">
                  <p class="about-img-name mt-4">Troy Wu</p>
                  <p class="lead about-img-title">Team sdfasdder</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs col-md-4 col-lg-2 mt-1">
            <div class="about-img-holder custom-margin2 shadow">
              <img src="img/people1.jpeg" alt="" class="img-fluid">
              <div class="img-overlap">
                <div class="img-overlap-text text-center">
                  <p class="about-img-name mt-4">Troy Wu</p>
                  <p class="lead about-img-title">Team 2222Leader</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs col-md-4 col-lg-2 mt-1">
            <div class="about-img-holder custom-margin2 shadow">
              <img src="img/people1.jpeg" alt="" class="img-fluid">
              <div class="img-overlap">
                <div class="img-overlap-text text-center">
                  <p class="about-img-name mt-4">Troy Wu</p>
                  <p class="lead about-img-title">Team Le3333ader</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-5">
        <hr class="about-line1" data-content="Gallery">
        <div class="container text-center">
          <h2 class="custom-heading1">Lorem ipsum dolor sit amet consectetur.</h2>
          <p class="lead custom-p1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sunt, nobis
            molestias illum error odit architecto ipsam beatae quam quasi? Corporis neque maiores repudiandae ullam.</p>
        </div>
        <div class="row">
          <div class="col-md-4 shadow" style="overflow: hidden;">
            <div class="gallery-holder">
              <img src="img/animals-cats-cute.jpg" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-md-4" style="overflow: hidden;">
            <div class="gallery-holder">
              <img src="img/animals-cats-cute.jpg" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-md-4" style="overflow: hidden;">
            <div class="gallery-holder">
              <img src="img/animals-cats-cute.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4" style="overflow: hidden;">
            <div class="gallery-holder">
              <img src="img/animals-cats-cute.jpg" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-md-4" style="overflow: hidden;">
            <div class="gallery-holder">
              <img src="img/animals-cats-cute.jpg" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-md-4" style="overflow: hidden;">
            <div class="gallery-holder">
              <img src="img/animals-cats-cute.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4" style="overflow: hidden;">
            <div class="gallery-holder">
              <img src="img/animals-cats-cute.jpg" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-md-4" style="overflow: hidden;">
            <div class="gallery-holder">
              <img src="img/animals-cats-cute.jpg" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-md-4" style="overflow: hidden;">
            <div class="gallery-holder">
              <img src="img/animals-cats-cute.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contact" class="text-center">
    <div id="map"></div>
    <div class="container contact-form text-center">
        <?php include 'php_includes/contact.php'; ?>
      <form action="" method="POST" class="mx-auto" enctype="multipart/form-data">
        <div class="form-row">
          <h2 class="mx-auto">Shoot Us A Message</h2>
        </div>
        <div class="form-row">
          <div class="col my-1">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-address-card"></i></div>
              </div>
              <input type="text" class="form-control" placeholder="Your Name?" name="contact_name">
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col my-1">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-envelope"></i></div>
              </div>
              <input type="text" class="form-control" placeholder="Your Email?" name="contact_email">
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col my-1">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-paw"></i></div>
              </div>
              <select class="custom-select" id="inlineFormCustomSelect" name="contact_ans">
                <option selected>Are You a Pet Owner</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col my-1">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-microphone"></i></div>
              </div>
              <textarea id="" rows="3" cols="12" class="form-control" name="contact_content" placeholder="Your Voice : )"></textarea>
            </div>
          </div>
        </div>
        <button class="btn btn-primary float-right mt-1 btn-sm" name="contact" type="submit"><i class="fas fa-paw"></i></button>
      </form>
    </div>
  </section>
  <hr class="mt-3">
  <div class="row my-3 text-center">
    <div class="container">
      <img src="img/KSU-Mountain-Logo.png" alt="" class="img-fluid" style="width:45%">
    </div>
  </div>



  <!-- Footer -->
  <footer id="main-footer" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 text-center py-4">
          <div class="container">
            <p class="footer-text">Follow us @:</p>
          </div>
          <a href="#" class="footer-icon"><i class="fab fa-facebook-square"></i></a>
          <a href="#" class="footer-icon"><i class="fab fa-instagram"></i></a>
          <a href="#" class="footer-icon"><i class="fab fa-twitter"></i></a>
          <a href="#" class="footer-icon"><i class="fab fa-youtube"></i></a>
        </div>
        <div class="col-sm-6 text-center py-4">
          <h3>Zoaki Team</h3>
          <p>Copyright &copy; <span id="year"></span></p>
        </div>
      </div>
    </div>
  </footer>

  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js_includes/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>


  <script>

    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    //configure slider
    $('.carousel').carousel({
      interval: 6000,
      pause: 'hover'
    });

    //comfirmation alert
    function confirmalert() {
      alert("Thanks For Your Help!!!");
    }


  </script>
</body>

</html>