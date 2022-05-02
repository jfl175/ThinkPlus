<?php 
    $title = "Think Plus Education";
    include("header.php");
?>

    <!-- pending:
        nav > courses > cat page
        nav > login functionality
        nav > register
        intro > book session functionality
        intro > test form functionality
        intro > tooltips
        testimonials > aspirant photos
        team > 2 founders?
        faqs page
        footer > put social links
        footer > put quick links
    -->

      <!-- intro section -->
      <section id="intro" class="shadow-sm">
          <div class="container py-5">
              <div class="row">
                  <div class="col-md-6 offset-md-1">
                      <img src="assets/intro.png" class="img-fluid" alt="intro image">
                  </div>
                  <div class="col-md-3 offset-md-1 align-self-center">
                    
                    <button type="button" class="container btn shadow btn-danger my-3" data-bs-toggle="modal" data-bs-target="#bookSession">
                        Book FREE Mentoring Session
                    </button>

                    <button type="button" class="container btn btn-lg shadow btn-danger my-3" data-bs-toggle="modal" data-bs-target="#test">
                        Test Your Ability
                    </button>

                  </div>
              </div>
          </div>

          <!-- Modals -->
          <!-- book session modal -->
            <div class="modal fade" id="bookSession" tabindex="-1" aria-labelledby="bookSessionLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content ">
                    <div class="modal-header">
                    <h5 class="container modal-title text-center h5" id="bookSessionLabel">Your FREE Mentoring Session</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Kindly provide your details</p>
                        <form action="" id="formBook" method="get">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="bookName" name="bookName" required placeholder="Name">
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control" id="bookMobile" name="bookMobile" required placeholder="Phone number (10 digits)">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="bookEmail" name="bookEmail" required placeholder="Email address">
                            </div>
                            <div class="mb-3">
                                <input type="date" class="form-control" id="bookDate" name="bookDate" min="2022-04-26" value="2022-04-27" required placeholder="Prefferred date">
                            </div>
                    </div>
                    <div class="modal-footer">
                        
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                        <!-- <button type="button" class="btn btn-success">Submit</button> -->
                    </div>
                </div>
                </div>
            </div>

            <!-- test modal -->
            <div class="modal fade" id="test" tabindex="-1" aria-labelledby="testLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="container modal-title text-center h5" id="bookSessionLabel">FREE Assessment Test</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    <div class="modal-body">
                        <p>Kindly provide your details</p>
                        <form action="" id="formTest" method="get">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="testName" name="testName" required placeholder="Name">
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control" id="testMobile" name="testMobile" required placeholder="Phone number (10 digits)">
                            </div>
                            <div class="mb-3">
                            <input type="email" class="form-control" id="testEmail" name="testEmail" required placeholder="Email address">
                            </div>
                    </div>
                    <div class="modal-footer">
                        
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Start Test</button>
                        </form>
                        <!-- <button type="button" class="btn btn-success">Submit</button> -->
                    </div>
                </div>
                </div>
            </div>

      </section>

        <!-- Why choose us section -->
        <section id="choose-us">
            <div class="container py-5">
                <div class="row">
                    <h1 class="text-center">WHY CHOOSE <img src="assets/Think_Plus_Logo_PNG.png" class="img-fluid" style="height: 60px!important;margin-top:-20px;" alt=""></h1>
                    <h3 class="text-center">Advantage of both offline & online classes</h2>
                    <div class="col-md-10 offset-md-1 row d-flex align-self-center bg-red-gradient">
                        <div class="p-3 col-sm-6 col-md-3 text-center">
                            <img src="assets/choose1.png" class="img-fluid d-blcok" style="height: 80px!important;" alt="why coose us image 1">
                            <h5 class="d-block text-white">One on One Mentor</h5>
                            <p class="text-light">Each student have a personal mentor for individual attention and guidance.</p>
                        </div>
                        <div class="p-3 col-sm-6 col-md-3 text-center">
                            <img src="assets/choose2.png" class="img-fluid d-blcok" style="height: 80px!important;" alt="why coose us image 1">
                            <h5 class="d-block text-white">One on One Mentor</h5>
                            <p  class="text-light">Each student have a personal mentor for individual attention and guidance.</p>
                        </div>
                        <div class="p-3 col-sm-6 col-md-3 text-center">
                            <img src="assets/choose3.png" class="img-fluid d-blcok" style="height: 80px!important;" alt="why coose us image 1">
                            <h5 class="d-block text-white">One on One Mentor</h5>
                            <p  class="text-light">Each student have a personal mentor for individual attention and guidance.</p>
                        </div>
                        <div class="p-3 col-sm-6 col-md-3 text-center">
                            <img src="assets/choose4.png" class="img-fluid d-blcok" style="height: 80px!important;" alt="why coose us image 1">
                            <h5 class="d-block text-white">One on One Mentor</h5>
                            <p  class="text-light">Each student have a personal mentor for individual attention and guidance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      <!-- personal mentoring session -->
      <section id="mentoring" class="bg-light">
        <div class="container py-5">
            <div class="row">
              <h2 class="text-center text-uppercase">One on One Personal Mentoring</h2>
                <div class="col-md-6 offset-md-1 align-self-center">
                    <p class="text-justifyy">A personal mentor is assigned to the student who will guide the student at every step of the preparation journey.</p>
                    <p class="text-justifyy">Mentor will cater to all of the student's academic problems and help them to get through it. Mentor will be a constant companion of the student in this preparation journey</p>

                    <div class="d-flex justify-content-center">
                    <button type="button" class="btn shadow-sm btn-outline-danger my-3" data-bs-toggle="modal" data-bs-target="#bookSession">
                        Book FREE Mentoring Session
                      </button>
                      </div>
                </div>
                <div class="col-md-5">
                    <img src="assets/oneonone.png" class="img-fluid" alt="personal mentoring sessions">
                </div>
            </div>
        </div>
    </section>
      
      <!-- courses | requires separate pages as well -->
      <section id="courses" class="">
          <div class="container py-5">
              <div class="row">
                <h2 class="text-center">OUR COURSES</h2>
                <div class="col-md-4 offset-md-2 pt-5">
                    <div class="card border border-danger shadow text-dark bg-light" >
                        <img src="assets/ipmat.png" class="card-img-top p-2 bg-white" alt="ipmat course">
                        <div class="card-body">
                          <h4 class="card-title text-center">IPMAT 2022</h4>
                          <p class="card-text">
                            Quant: 150+ Hours of Live Interactive Sessions | 1000+ videos | 40+ Assignments
                        </p><p class="card-text">
                            LRDI: 100+ Hours of Live Interactive Sessions | 250+ videos | 30+ Assignments
                            </p><p class="card-text">
                            VARC: 100+ Hours of Live Interactive Sessions | 250+ videos | 30+ Assignments
                          </p>
                          <a href="#" class="shadow-sm d-block btn btn-primary mb-3">Enroll Now</a>
                          <a href="ipmat.php" class="shadow-sm d-block btn btn-outline-danger">Learn More</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-4 mx-4 mb-5 pt-5">
                    <div class="card border border-danger shadow text-dark bg-light" >
                        <img src="assets/cat.png" class="card-img-top p-2 bg-white" alt="ipmat course">
                        <div class="card-body">
                          <h4 class="card-title text-center">CAT 2022</h4>
                          <p class="card-text">
                            Quant: 150+ Hours of Live Interactive Sessions | 1000+ videos | 40+ Assignments
                        </p>
                        <p class="card-text">
                            LRDI: 100+ Hours of Live Interactive Sessions | 250+ videos | 30+ Assignments
                            </p>
                            <p class="card-text">
                                VARC: 100+ Hours of Live Interactive Sessions | 250+ videos | 30+ Assignments
                          </p>
                          <a href="#" class="shadow-sm d-block btn btn-primary mb-3">Enroll Now</a>
                          <a href="cat.php" class="shadow-sm d-block btn btn-outline-danger">Learn More</a>
                        </div>
                      </div>
                </div>
              </div>
          </div>
    </section>


    <!-- testimonials -->
    <section id="testimonials" class="bg-light">
        <div class="container py-5">
            <div class="row">
                <h2 class="text-center mb-5">WHAT OUR ASPIRANTS SAY</h2>
                <div class="col-md-3">
                    <img src="assets/ram.png" class="img-fluid shadow-sm border d-block custom-thumbnail" alt="aspirant photo 1">
                    <div class="container p-3 pt-5 testimonial-bg">
                        <p class="text-warning text-center">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </p>
                        <p class="">
                            " The guidance provided by Sir is one of a kind. He understands the strengths and weaknesses of every student under him and plans out strategies accordingly. The entire preparation process became an engaging and enjoyable experience. I believe the techniques of solving problems that I have learned would not only be helpful for the exam but also for my future career."    
                        </p>
                        <p class="text-end"> - Likitha, IIM Ranchi</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="assets/ram.png" class="img-fluid shadow-sm border d-block custom-thumbnail" alt="aspirant photo 1">
                    <div class="container p-3 pt-5 testimonial-bg">
                        <p class="text-warning text-center">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </p>
                        <p class="">
                            " PRK sir has been instrumental in upskilling my Quant, which helped me crack the first batch of IIM Sambalpur. His invaluable suggestions for interview were unmatched with any of the CAT faculty I have known till now."    
                        </p>
                        <p class="text-end"> - Satish, IIM Sambalpur</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="assets/ram.png" class="img-fluid shadow-sm border d-block custom-thumbnail" alt="aspirant photo 1">
                    <div class="container p-3 pt-5 testimonial-bg">
                        <p class="text-warning text-center">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </p>
                        <p class="">
                            " Even after taking coaching I failed to get a good CAT score. Being from Bsc background, Quants was a big headache. Then Sir guided me step by step: clearing basics, teaching time-saver methods and doing extensive practice. It was due to his motivation and guidance I was elated to receive CAP calls, IIM K (LSM) call & a final admission in a prestigious Baby IIM."    
                        </p>
                        <p class="text-end"> - Sandhya , IIM Udaipur</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="assets/ram.png" class="img-fluid shadow-sm border d-block custom-thumbnail" alt="aspirant photo 1">
                    <div class="container p-3 pt-5 testimonial-bg">
                        <p class="text-warning text-center">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </p>
                        <p class="">
                            " Ram sir has this unique way of mentoring his coachees! He understands the strengths and areas of improvement of each his students and helps them accordingly. I have seen him help students with not so great quant skills score amazing percentiles. Personally, he helped me cultivate discipline and practice which helped me crack CAT and get into IIM Indore! "    
                        </p>
                        <p class="text-end"> - Anudeep, IIM Indore</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <!-- about us -->
      <section id="about-us" class="">
          <div class="container py-5">
              <div class="row mt-5">
                <div class="col-md-4 offset-md-1 py-3">
                    <h2 class="text-center">ABOUT US</h2>
                    <p class="text-justifyy">Think Plus Education was initiated by a group of IIM graduates and incubated at IIM Udaipur to help students crack competitive exams like IPMAT and CAT. It provides end-to-end support in training students with the proper assessment for identifying the challenges and solving them through customized content and personalized mentoring.</p>
                    <p class="text-justifyy">Many students preparing for BBA and MBA entrance exams lack awareness, guidance, and direction in cracking the exam and choosing the right college. We allocate a dedicated mentor to every student to support throughout the preparation journey. </p>
                </div>
                <div class="col-md-7">
                    <div id="aboutUsSlider" class=" shadow carousel slide carousel-fade" data-bs-ride="carousel" style="width:100%;overflow:hidden;">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#aboutUsSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#aboutUsSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#aboutUsSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
                          <button type="button" data-bs-target="#aboutUsSlider" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner ">
                          <div style="height:360px;" class="carousel-item  active" data-bs-interval="10000">
                              <div class="d-flex justify-content-center">
                                <img src="assets/about1.png" class="rounded d-block w-100" alt="session image 1">
                              </div>
                            <!-- <div class="carousel-caption d-none d-md-block">
                              <h5>First slide label</h5>
                              <p>Some representative placeholder content for the first slide.</p>
                            </div> -->
                          </div>
                          <div style="height:360px;" class="carousel-item" data-bs-interval="2000">
                            <div class="d-flex justify-content-center">
                            <img src="assets/about2.jpg" class="rounded d-block w-100" alt="session image 2">
                        </div>
                          </div>
                          <div style="height:360px;" class="carousel-item">
                            <div class="d-flex justify-content-center">
                            <img src="assets/about3.jpg" class="rounded d-block w-100" alt="session image 3">
                        </div>
                          </div>
                          <div style="height:360px;" class="carousel-item">
                            <div class="d-flex justify-content-center">
                            <img src="assets/about4.jpg" class="rounded d-block w-100" alt="session image 4">
                        </div>
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#aboutUsSlider" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#aboutUsSlider" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
              </div>
          </div>

      </section>

      <!-- our team -->
      <section id="team" class="bg-light">
          <div class="container py-5">
              <div class="row">
                <h2 class="text-center mb-5">FOUNDERS</h2>
                <div class="mt-5"></div>
                <div class="col-sm-2 offset-sm-4">
                    <div class="card text-dark bg-white" >
                        <img src="assets/rama.png" class="card-img-top shadow p-2 bg-primary custom-thumbnail-2" alt="ipmat course">
                        <div class="card-body">
                            <h5 class="card-title text-center">Rama Krishna P</h5>
                            <p class="card-text text-center">IIM Udaipur</p>
                        </div>
                    </div>
                </div> 
                <div class="col-sm-2">
                    <div class="card text-dark bg-white" >
                        <img src="assets/rama.png" class="card-img-top shadow p-2 bg-primary custom-thumbnail-2" alt="ipmat course">
                        <div class="card-body">
                            <h5 class="card-title text-center">Rama Krishna P</h5>
                            <p class="card-text text-center">IIM Udaipur</p>
                        </div>
                    </div>
                </div>
              </div>
              
              <div class="mt-5"></div>

              <div class="row py-5">
                <h2 class="text-center mb-5">SUPPORT TEAM</h2>
                <div class="mt-5"></div>
                <div class="col-md-2 offset-md-2">
                    <div class="card text-dark bg-white" >
                        <img src="assets/siti.png" class="card-img-top shadow p-2 bg-danger custom-thumbnail-2" alt="ipmat course">
                        <div class="card-body">
                            <h5 class="card-title text-center">Sitikantha</h5>
                            <p class="card-text text-center">IIM Udaipur</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card text-dark bg-white" >
                        <img src="assets/ram.png" class="card-img-top shadow p-2 bg-success custom-thumbnail-2" alt="ipmat course">
                        <div class="card-body">
                            <h5 class="card-title text-center">Ram Pavan</h5>
                            <p class="card-text text-center">IIM Udaipur</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card text-dark bg-white" >
                        <img src="assets/sriram.png" class="card-img-top shadow p-2 bg-warning custom-thumbnail-2" alt="ipmat course">
                        <div class="card-body">
                            <h5 class="card-title text-center">Sriram</h5>
                            <p class="card-text text-center">IIM Udaipur</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card text-dark bg-white" >
                        <img src="assets/sarat.png" class="card-img-top shadow p-2 bg-primary custom-thumbnail-2" alt="ipmat course">
                        <div class="card-body">
                            <h5 class="card-title text-center">Sarat</h5>
                            <p class="card-text text-center">IIM Udaipur</p>
                        </div>
                    </div>
                </div>
              </div>

              <div class="row d-flex pt-5 text-center">
                  <h2>Contact Us @</h2>
                  <p class="lead mt-3">
                      <span class="mx-3">
                        <a href="mailto:support@thinkpluseducation.com" class="text-body text-decoration-none fw-normal">
                        <i class="bi bi-envelope"></i> support@thinkpluseducation.com
                        </a>
                      </span>
                      <span class="mx-3 fw-normal">
                        <i class="bi bi-telephone-fill"></i> +91-7396653357, +91-8125442244
                      </span>
                    </p> 
              </div>
          </div>
      </section>

<?php 
    include("footer.php");
?>