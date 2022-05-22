<?php 
    $title = "Think Plus Education";
    include("header.php");
?>

    <!-- pending:
        user journey?
            nav > login functionality
            nav > register
            intro > test form functionality
            courses > enroll now
            ask me anything
            
        intro > tooltips
        
        team > 2 founders?
        faqs on faqs page
        footer > put social links
        footer > brochure link
    -->

      <!-- intro section -->
      <section id="intro" class="shadow-sm">
          <div class="container py-5">
              <div class="row">
                  <div class="col-md-6 offset-md-1">
                      <img src="assets/intro.webp" class="img-fluid" alt="intro image">
                  </div>
                  <div class="col-md-3 offset-md-1">

                  <!-- <div class="float-end">
                    <button type="button" class="btn shadow btn-danger my-3" data-bs-toggle="modal" data-bs-target="#registerModal">
                        Register Now
                    </button>
                    </div> -->

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
          <!-- register Modal -->
            <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content ">
                    <div class="modal-header">
                    <h5 class="container modal-title text-center h5" id="registerLabel">Register</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" id="formBook">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="registerName" name="registerIName" required placeholder="Student's name">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="registerEmail" name="registerEmail" required placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control" id="registerMobile" name="registerMobile" required placeholder="Phone number (10 digits)">
                            </div>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Register</button>
                        </form>
                        <!-- <button type="button" class="btn btn-success">Submit</button> -->
                    </div>
                </div>
                </div>
            </div>

          <!-- book session modal -->
            <div class="modal fade" id="bookSession" tabindex="-1" aria-labelledby="bookSessionLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="container modal-title text-center h5" id="bookSessionLabel">Your FREE Mentoring Session</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="mentorModalContent">
                            <p>Kindly provide your details</p>
                            <form action="" id="formMentor" method="get">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="bookName" name="bookName" required placeholder="Name">
                                </div>
                                <div class="mb-3">
                                    <input type="tel" class="form-control" id="bookMobile" name="bookMobile" required placeholder="Phone number (10 digits)">
                                    <!-- Validate mobile number -->
                                    <script>
                                        function validate(){
                                            var num = document.getElementById("bookMobile").value;
                                            var regx = /^[6-9]\d{9}$/;
                                            if(regx.test(num)){
                                                return true;
                                            }
                                            else{
                                                alert("Invalid Contact Number")
                                            }
                                        }
                                    </script>


                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="bookEmail" name="bookEmail" required placeholder="Email address">
                                </div>
                                <div class="mb-3">
                                    <input type="date" class="form-control" id="bookDate" name="bookDate" min="<?php echo date('Y-m-j',strtotime("+2 days"));?>" value="<?php echo date('Y-m-j',strtotime("+2 days"));?>" required placeholder="Prefferred date">
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer" id="mentorModalFooter">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                            <button onclick="validate()" type="submit" id="mentorSubmit" class="btn btn-success">Submit</button>
                        </form>
                        <!-- <button type="button" class="btn btn-success">Submit</button> -->
                    </div>
                </div>
                </div>
            </div>
            

            <!-- free test modal -->
            <div class="modal fade" id="test" tabindex="-1" aria-labelledby="testLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="container modal-title text-center h5" id="bookSessionLabel">FREE Assessment Test</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    <div class="modal-body">
                        <div id="testModalContent">
                            <p>Kindly provide your details</p>
                            <form action="" id="formTest">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="testName" name="testName" required placeholder="Name">
                                </div>
                                <div class="mb-3">
                                    <input type="tel" class="form-control" id="testMobile" name="testMobile" required placeholder="Phone number (10 digits)">
                                </div>
                                <!-- Validate mobile number -->
                                <script>
                                        function validate(){
                                            var num = document.getElementById("bookMobile").value;
                                            var regx = /^[6-9]\d{9}$/;
                                            if(regx.test(num)){
                                                return true;
                                            }
                                            else{
                                                alert("Invalid Contact Number")
                                            }
                                        }
                                </script>
                                
                                <div class="mb-3">
                                <input type="email" class="form-control" id="testEmail" name="testEmail" required placeholder="Email address">
                                </div>
                                <div class="mb-3">
                                    <select class="form-select" id="testExam" name="testExam" required aria-label="Select exam">
                                        <option selected>Select exam</option>
                                        <option value="IPMAT">IPMAT</option>
                                        <option value="CAT">CAT</option>
                                    </select>
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer" id="testModalFooter">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                            <button onclick="validate()" type="submit" id="testSubmit" class="btn btn-success">Submit</button>
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
                    <h1 class="text-center">WHY CHOOSE <img src="assets/Think_Plus_Logo_PNG.webp" class="img-fluid" style="height: 60px!important;margin-top:-20px;" alt=""></h1>
                    <h3 class="text-center">Advantage of both offline & online classes</h2>
                    <div class="col-md-10 offset-md-1 row d-flex align-self-center bg-red-gradient">
                        <div class="p-3 col-sm-6 col-md-3 text-center">
                            <img src="assets/choose1.webp" class="img-fluid d-blcok" style="height: 80px!important;" alt="why coose us image 1">
                            <h5 class="d-block text-white">One on One Mentor</h5>
                            <p class="text-light">Each student have a personal mentor for individual attention and guidance.</p>
                        </div>
                        <div class="p-3 col-sm-6 col-md-3 text-center">
                            <img src="assets/choose2.webp" class="img-fluid d-blcok" style="height: 80px!important;" alt="why coose us image 1">
                            <h5 class="d-block text-white">Concept Videos</h5>
                            <p  class="text-light">All sessions' lectures have been recorded and are available to our students at any time.</p>
                        </div>
                        <div class="p-3 col-sm-6 col-md-3 text-center">
                            <img src="assets/choose3.webp" class="img-fluid d-blcok" style="height: 80px!important;" alt="why coose us image 1">
                            <h5 class="d-block text-white">Self Paced</h5>
                            <p  class="text-light">Listen to lectures and recorded concept videos at your own pace to ensure that you grasp everything. Accessible at any time.</p>
                        </div>
                        <div class="p-3 col-sm-6 col-md-3 text-center">
                            <img src="assets/choose4.webp" class="img-fluid d-blcok" style="height: 80px!important;" alt="why coose us image 1">
                            <h5 class="d-block text-white">Comprehensive Super 30</h5>
                            <p  class="text-light">Physical sessions with access to recordings of the sessions, as well as live sessions with the faculty.</p>
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
              <div class="p-3"></div>
                <div class="col-md-4 offset-md-2 align-self-center">
                    <p>A personal mentor is assigned to the student who will guide the student at every step of the preparation journey.</p>
                    <p>Mentor will cater to all of the student's academic problems and help them to get through it. </p>
                    <p> Mentor will be a constant companion of the student in this preparation journey</p>

                    <div class="col-md-8 border border-5 border-alternate mentor-box p-3 pb-0">
                        <h5 class="text-center text-success mb-3">Benefits of  Mentoring</h5>
                        <ul>
                            <li>64% more chance of getting a top B-school</li>
                            <li>More clarity about the courses</li>
                            <li>Exam cracking techniques and tricks</li>
                        </ul>
                    </div>


                    <div class="p-3"></div>

                    <!-- <div class="d-flex justify-content-center"> -->
                    <button type="button" class="btn btn-lg shadow-sm btn-danger my-3" data-bs-toggle="modal" data-bs-target="#bookSession">
                        Book FREE Mentoring Session
                      </button>
                      <!-- </div> -->
                </div>
                <div class="col-md-5">
                    <img src="assets/oneonone2.webp" class="img-fluid" alt="personal mentoring sessions">
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
                        <img src="assets/ipmat.webp" class="card-img-top p-2 bg-white" alt="ipmat course">
                        <div class="card-body">
                          <h4 class="card-title text-center">IPMAT 2022</h4>
                          <p class="card-text">
                              Quant: 60+ Hours of Live Interactive Sessions | 90+ Mock Tests | 40+ in class tests | 40+ concept sheets
                            </p>
                            <p class="card-text">
                                LRDI: 70+ Hours of Live Interactive Sessions | 110+ Mock Tests | 45+ in class tests | 60+ Concept sheets
                            </p>
                            <p class="card-text">
                                VARC: 100+ Hours of Live Interactive Sessions | 90+ Mock Tests | 65+ in class tests | 50+ concept sheets
                          </p>
                          <a href="ipmat" class="shadow-sm d-block btn btn-primary mb-3 disabled">Enroll Now</a>
                          <a href="ipmat" class="shadow-sm d-block btn btn-outline-danger">Learn More</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-4 mx-4 mb-5 pt-5">
                    <div class="card border border-danger shadow text-dark bg-light" style="height: 575px!important;" >
                        <img src="assets/cat.webp" class="card-img-top p-2 bg-white" alt="ipmat course">
                        <div class="card-body">
                          <h4 class="card-title text-center">CAT 2022</h4>
                          <!-- <p class="card-text">
                            Quant: 150+ Hours of Live Interactive Sessions | 1000+ videos | 40+ Assignments
                        </p>
                        <p class="card-text">
                            LRDI: 100+ Hours of Live Interactive Sessions | 250+ videos | 30+ Assignments
                            </p>
                            <p class="card-text">
                                VARC: 100+ Hours of Live Interactive Sessions | 250+ videos | 30+ Assignments
                          </p>
                          <a href="#" class="shadow-sm d-block btn btn-primary mb-3">Enroll Now</a>
                          <a href="cat" class="shadow-sm d-block btn btn-outline-danger">Learn More</a> -->
                          
                          <div class="p-5"></div>
                          <h2 class="text-center">Coming Soon</h2>
                          <div class="p-5"></div>
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
                    <img src="assets/aspirant1.webp" class="img-fluid shadow-sm border d-block custom-thumbnail" alt="aspirant photo 1">
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
                    <img src="assets/aspirant2.webp" class="img-fluid shadow-sm border d-block custom-thumbnail" alt="aspirant photo 1">
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
                    <img src="assets/aspirant5.webp" class="img-fluid shadow-sm border d-block custom-thumbnail" alt="aspirant photo 1">
                    <div class="container p-3 pt-5 testimonial-bg">
                        <p class="text-warning text-center">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </p>
                        <p class="">
                            " Personally and Professionally the best thing about PRK sir is, the way he observes and gauges the understanding level of each student and then tailors his teaching methods accordingly. Sir is an inspiration for handwork and smart work. Never looks down upon anyone, how silly the doubt may be, sir knows that the doubt may be silly for someone but for the student it is very important for his/her progress."    
                        </p>
                        <p class="text-end"> - Keertan , IIM Lucknow</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="assets/aspirant4.webp" class="img-fluid shadow-sm border d-block custom-thumbnail" alt="aspirant photo 1">
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
                                <img src="assets/about1.webp" class="rounded d-block w-100" alt="session image 1">
                              </div>
                            <!-- <div class="carousel-caption d-none d-md-block">
                              <h5>First slide label</h5>
                              <p>Some representative placeholder content for the first slide.</p>
                            </div> -->
                          </div>
                          <div style="height:360px;" class="carousel-item" data-bs-interval="2000">
                            <div class="d-flex justify-content-center">
                            <img src="assets/about2.webp" class="rounded d-block w-100" alt="session image 2">
                        </div>
                          </div>
                          <div style="height:360px;" class="carousel-item">
                            <div class="d-flex justify-content-center">
                            <img src="assets/about3.webp" class="rounded d-block w-100" alt="session image 3">
                        </div>
                          </div>
                          <div style="height:360px;" class="carousel-item">
                            <div class="d-flex justify-content-center">
                            <img src="assets/about4.webp" class="rounded d-block w-100" alt="session image 4">
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
              <div class="row ">
                <h2 class="text-center mb-5">FOUNDERS</h2>
                <div class="mt-5"></div>
                <div class="d-flex justify-content-center">
                <!-- <div class="col-sm-2 offset-sm-4"> -->
                    <div class="card text-dark bg-white mx-3" >
                        <img src="assets/rama.webp" class="card-img-top shadow p-2 bg-primary custom-thumbnail-2" alt="ipmat course">
                        <div class="card-body">
                            <h5 class="card-title text-center">Rama Krishna P</h5>
                            <p class="card-text text-center">IIM Udaipur</p>
                        </div>
                    </div>
                <!-- </div>  -->
                    <!-- <div class="col-sm-2">
                    <div class="card text-dark bg-white mx-3" >
                        <img src="assets/rama.webp" class="card-img-top shadow p-2 bg-primary custom-thumbnail-2" alt="ipmat course">
                        <div class="card-body">
                            <h5 class="card-title text-center">Rama Krishna P</h5>
                            <p class="card-text text-center">IIM Udaipur</p>
                        </div>
                    </div> -->
                <!-- </div> -->
                </div>
              </div>
              
              <div class="mt-5"></div>

              <div class="row py-5">
                <h2 class="text-center mb-5">SUPPORT TEAM</h2>
                <div class="mt-5"></div>
                <div class="col-md-2 offset-md-2">
                    <div class="card text-dark bg-white" >
                        <img src="assets/siti.webp" class="card-img-top shadow p-2 bg-danger custom-thumbnail-2" alt="ipmat course">
                        <div class="card-body">
                            <h5 class="card-title text-center">Sitikantha</h5>
                            <p class="card-text text-center">IIM Udaipur</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card text-dark bg-white" >
                        <img src="assets/ram.webp" class="card-img-top shadow p-2 bg-success custom-thumbnail-2" alt="ipmat course">
                        <div class="card-body">
                            <h5 class="card-title text-center">Ram Pavan</h5>
                            <p class="card-text text-center">IIM Udaipur</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card text-dark bg-white" >
                        <img src="assets/sriram.webp" class="card-img-top shadow p-2 bg-warning custom-thumbnail-2" alt="ipmat course">
                        <div class="card-body">
                            <h5 class="card-title text-center">Sriram</h5>
                            <p class="card-text text-center">IIM Udaipur</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card text-dark bg-white" >
                        <img src="assets/sarat.webp" class="card-img-top shadow p-2 bg-primary custom-thumbnail-2" alt="ipmat course">
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