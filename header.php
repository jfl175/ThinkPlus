<?php 
    require_once 'config.php';
    header("Cache-Control: max-age=31536000");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-control" content="public" >

  <title>
      <?php echo $title; ?>
   </title>


    <link rel="shortcut icon" href="favicon.png" />
    <!-- <link rel="preload" href="styles.css" as="style" onload="this.onload=null;this.rel='stylesheet'"> -->
    
    <link rel="preload" as="style" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" onload="this.onload=null;this.rel='stylesheet'" >
    <link rel="preload" as="style" href="bootstrap/css/bootstrap.min.css" onload="this.onload=null;this.rel='stylesheet'" >
    <link rel="preload" as="style" href="custom.css" onload="this.onload=null;this.rel='stylesheet'">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-229307368-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-229307368-1');
    </script>
</head>
<body>

    <div id="header"></div>

    <!-- navigation header -->
    <nav class="navbar sticky-top bg-white navbar-expand-sm navbar-light shadow-sm">
        <div class="container-lg">
            <a class="navbar-brand" href="../">
                <img src="assets/Think_Plus_Logo_PNG.webp" alt="thinkplus logo" width="90" class="img-fluid">
                <!-- <span class="fw-bold text-secondary">Think Plus Education</span> -->
              </a>

            <!-- navigation toggle for small screens -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
                aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- navigation links -->
            <div class="collapse navbar-collapse justify-content-end" id="main-nav">

                <ul class="navbar-nav">
                    <li class="mx-2 nav-item ">
                        <a class="nav-link shadow-sm btn btn-light" aria-current="page" href="../">
                        Home
                        </a>
                    </li> 
                    
                    <li class="mx-2 nav-item ">
                        <a class="nav-link shadow-sm btn btn-light" aria-current="page" href="roadmap">
                        Roadmap
                        </a>
                    </li> 
                    <li class="mx-2 nav-item  dropdown">
                      <a class="nav-link dropdown-toggle shadow-sm btn btn-light" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Courses
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="ipmat">IPMAT</a></li>
                        <li><a class="dropdown-item" href="cat">CAT</a></li>
                      </ul>
                    </li>
                    <li class="mx-2 nav-item ">
                        <a class="nav-link shadow-sm btn btn-light" aria-current="page" href="../#about-us">
                        About Us
                        </a>
                    </li>  
                    <li class="mx-2 nav-item ">
                      <a class="nav-link shadow-sm btn btn-light" aria-current="page" href="#footer">
                          Contact
                      </a>
                  </li>
                    
                  <!-- <li class="nav-item">
                      <a class="nav-link py-1" aria-current="page">
                          <button type="button" class="shadow-sm btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                              Login <i class="bi bi-box-arrow-in-right"></i>
                          </button>
                      </a>
                  </li>        -->
                      
                  
                    <!-- <li class="nav-item d-none d-sm-inline">
                        <a class="m-1 shadow-sm btn btn-outline-success align-self-center btn-sm" href="#" role="button"> Register </a>                    
                    </li> -->
                    <!-- <li class="nav-item d-sm-none">
                        <a class="nav-link" href="#">Login</a>  
                    </li>
                    <li class="nav-item d-sm-none">
                        <a class="nav-link" href="#" > Register </a>                    
                    </li> -->
                </ul>

            </div>
        </div>
    </nav>

      <!-- Login Modal -->
      <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content ">
              <div class="modal-header">
              <h5 class="container modal-title text-center h5" id="loginLabel">Login</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form action="" id="formLogin">
                      <div class="mb-3">
                          <input type="text" class="form-control" id="loginID" name="loginID" required placeholder="Username">
                      </div>
                      <div class="mb-3">
                      <input type="password" class="form-control" id="loginPassword" name="loginPassword" required placeholder="Password">
                      </div>
              </div>
              <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-success">Login</button>
                  </form>
                  <!-- <button type="button" class="btn btn-success">Submit</button> -->
              </div>
          </div>
          </div>
      </div>

      <div class="position-fixed fixed-button">
          <button type="button" class="container shadow btn btn-danger" data-bs-toggle="modal" data-bs-target="#contactUs">
              Ask Us Anything!
          </button>
      </div>

      <!-- Contact Us Modal -->
      <div class="modal fade" id="contactUs" tabindex="-1" aria-labelledby="contactUsLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content container">
              <div class="modal-header">
              <h5 class="container modal-title text-center h5" id="contactUsLabel">Ask Us Anything!</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                    <div id="contactModalContent">
                        <form action="" id="formContact">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="contactName" name="contactName" required placeholder="Your Name">
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control" id="contactMobile" name="contactMobile" required placeholder="Your Contact No.">
                            </div>
                            <div class="mb-3">
                                <textarea type="textarea" class="form-control" id="contactQuery" name="contactQuery" required placeholder="Your Query"></textarea>
                            </div>
                    </div>
              </div>
              <div class="modal-footer" id="contactModalFooter">
                      <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                      <button type="submit" id="contactSubmit" class="btn btn-success">Send</button>
                    </form>
                  <!-- <button type="button" class="btn btn-success">Submit</button> -->
              </div>
          </div>
          </div>
      </div>

      


