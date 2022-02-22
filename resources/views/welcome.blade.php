

@extends('master')
@section('topbar')
{{-- <div id="myModal" class="modal fade">
    <div class="modal-dialog col-lg-6">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Book Appointment</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form>
                   <div class="form-group">
 <img src="assets/img/banner.jpg" class="img-fluid" alt="">
</div>
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Enter Phone Number">
                    </div>

                    <button type="submit" class="btn btn-primary">Book</button>
                </form>
            </div>
        </div>
    </div>
</div> --}}
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> Monday - Saturday,Open 24 Hrs.
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Call us now +91 9405484847
      </div>
    </div>
  </div>
  @endsection('topbar')
  <!-- ======= Hero Section ======= -->
    @section('content')

  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/gallery/lab3.jpg)">
          <div class="container">
            <h2>Welcome to <span>Samruddhi Dental Skin Hair And Advanced Laser Center </span></h2>
            <p>Samruddhi  Dental Specialist Skin Hair And Advanced Laser Center in Aurangabad-maharashtra is One of the Best leading businesses in the Dentists.Also known for Dentists, Skin Care Clinics, Dental Hospitals, Hair Treatment Clinics, Trichologist Doctors, Hair Loss Doctors, X Ray Centres, Paedodontist Doctors and much more.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/gallery/lab2.jpg)">
        <!--   <div class="container">
            <h2>Location and Overview:</h2>
            <p>Established in the year 2015, Samruddhi Dental Skin Hair And Advanced Laser Center in Aurangabad, Aurangabad-maharashtra is a top player in the category Dentists in the Aurangabad-maharashtra. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Aurangabad-maharashtra. Over the course of its journey, this business has established a firm foothold in itâ€™s industry. The belief that customer satisfaction is as important as their products and services, have helped this establishment garner a vast base of customers, which continues to grow by the day. This business employs individuals that are dedicated towards their respective roles and put in a lot of effort to achieve the common vision and larger goals of the company. In the near future, this business aims to expand its line of products and services and cater to a larger client base. In Aurangabad-maharashtra, this establishment occupies a prominent location in Aurangabad. It is an effortless task in commuting to this establishment as there are various modes of transport readily available. It is at , Besides Naik College Opposite Mahavir Super Shoppe, which makes it easy for first-time visitors in locating this establishment. It is known to provide top service in the following categories: Dentists, Skin Care Clinics, Dental Hospitals, Hair Treatment Clinics, Trichologist Doctors, Hair Loss Doctors, X Ray Centres, Paedodontist Doctors.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div> -->
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/gallery/lab1.jpg)">
          <!-- <div class="container">
            <h2>Products and Services offered:</h2>
            <p>Samruddhi Dental Skin Hair And Advanced Laser Center in Aurangabad has a wide range of products and / or services to cater to the varied requirements of their customers. The staff at this establishment are courteous and prompt at providing any assistance. They readily answer any queries or questions that you may have. Pay for the product or service with ease by using any of the available modes of payment, such as Cash, Cheque, NEFT, RTGS. This establishment is functional from 00:00 - 23:59.
            </p>
            <p>
            Please scroll to the top for the address and contact details of Samruddhi Dental Skin Hair And Advanced Laser Center at Aurangabad, Aurangabad-maharashtra.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div> -->
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fas fa-tooth"></i></div>
              <h4 class="title"><a href="">Advance Dentistry</a></h4>
              <p class="description">Advance Dental Info </p>
            </div>
          </div>


          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fas fa-heartbeat"></i></div>
              <h4 class="title"><a href="">Cosmetology</a></h4>
              <p class="description"> Cosmetology Info</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fas fa-thermometer"></i></div>
              <h4 class="title"><a href="">Trichology</a></h4>
              <p class="description">Trichology info</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="fas fa-dna"></i></div>
              <h4 class="title"><a href="">Radiology</a></h4>
              <p class="description">Radiology Info</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Cta Section ======= -->
    <!--<section id="cta" class="cta">-->
    <!--  <div class="container" data-aos="zoom-in">-->

    <!--    <div class="text-center">-->
    <!--      <h3>In an emergency? Need help now?</h3>-->
    <!--      <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>-->
    <!--      <a class="cta-btn scrollto" href="#appointment">Make an Make an Appointment</a>-->
    <!--    </div>-->

    <!--  </div>-->
    <!--</section>-->
    <!-- End Cta Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <p>Samruddhi Dental Skin Hair And Advanced Laser Center in Aurangabad-maharashtra is one of the leading businesses in the Dentists. Also known for Dentists, Skin Care Clinics, Dental Hospitals, Hair Treatment Clinics, Trichologist Doctors, Hair Loss Doctors, X Ray Centres, Paedodontist Doctors and much more. Find Address, Contact Number, Reviews & Ratings, Photos, Maps of Samruddhi Dental Skin Hair And Advanced Laser Center, Aurangabad-maharashtra.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/img/banner.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Samruddhi Dental Skin Hair And Advanced Laser Center.</h3>
            <p class="font-italic">
                The Samruddhi Dental , Skin, Hair and Advanced Laser Center offers comprehensive dental care including Oral Medicine & Radiology, Orthodontics, Oral surgery, Periodontics, Prosthodontics, Endodontics, Paedodontics & Laser dentistry services to both adults and children. The team of experienced Consultants, Specialists, trained staffs and Technicians adopts a multi-disciplinary approach to provide personalised, high quality dental care based international treatment protocols with high end technology equipment’s.
            </p>
            <p class="font-italic"> We have some of the best specialists they bring years of experience and offer evidence based treatment to ensure the best care for you.</p>
            <p class="font-italic">The spectrum of services offered includes accurate diagnosis and surgical / non-surgical management of conditions like Dental Implants and Oral & Maxillofacial Surgical Procedures like Management Of Cyst and Tumours, Impacted Teeth, Preprosthetic Surgery and Endodontic Surgery.</p>
            <ul>
              <li><i class="bi bi-check-circle"></i> This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Aurangabad-maharashtra.</li>
              <li><i class="bi bi-check-circle"></i> The belief that customer satisfaction is as important as their products and services, have helped this establishment garner a vast base of customers, which continues to grow by the day.</li>
              <li><i class="bi bi-check-circle"></i> It is known to provide top service in the following categories: Dentists, Skin Care Clinics, Dental Hospitals, Hair Treatment Clinics, Trichologist Doctors, Hair Loss Doctors, X Ray Centres, Paedodontist Doctors.</li>
            </ul>
            <p>
             In Aurangabad-maharashtra, this establishment occupies a prominent location in Aurangabad. It is an effortless task in commuting to this establishment as there are various modes of transport readily available. It is at , Besides Naik College Opposite Mahavir Super Shoppe, which makes it easy for first-time visitors in locating this establishment.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>

              <p><strong>Doctors</strong> consequuntur quae qui deca rode</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Departments</strong> adipisci atque cum quia aut numquam delectus</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Research Lab</strong> aut commodi quaerat. Aliquam ratione</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Awards</strong> rerum asperiores dolor molestiae doloribu</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <!--<section id="features" class="features">-->
    <!--  <div class="container" data-aos="fade-up">-->

    <!--    <div class="row">-->
    <!--      <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">-->
    <!--        <div class="icon-box mt-5 mt-lg-0">-->
    <!--          <i class="bx bx-receipt"></i>-->
    <!--          <h4>Est labore ad</h4>-->
    <!--          <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>-->
    <!--        </div>-->
    <!--        <div class="icon-box mt-5">-->
    <!--          <i class="bx bx-cube-alt"></i>-->
    <!--          <h4>Harum esse qui</h4>-->
    <!--          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>-->
    <!--        </div>-->
    <!--        <div class="icon-box mt-5">-->
    <!--          <i class="bx bx-images"></i>-->
    <!--          <h4>Aut occaecati</h4>-->
    <!--          <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>-->
    <!--        </div>-->
    <!--        <div class="icon-box mt-5">-->
    <!--          <i class="bx bx-shield"></i>-->
    <!--          <h4>Beatae veritatis</h4>-->
    <!--          <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets/img/demo.jpg");' data-aos="zoom-in"></div>-->
    <!--    </div>-->

    <!--  </div>-->
    <!--</section>-->
    <!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Our Service Keeps you Smile.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-tooth"></i></div>
            <h4 class="title"><a href=""> Cosmetic Dentistry & Laser Dentistry</a></h4>
            <p class="description">Cosmetic Dentistry:-
It involves change in your overall smile to achieve positive attitude for makes you more confident.
In this procedure we design your smile considering tooth size, shape, colour, position , lip position, colour, gum colour<span id="dots">...</span><span id="more">
Laser Dentistry:-
Smile designing ,Veneers, composite, jewds whitening, orthotlt ,Dpigmentation, Botox.
Its a painless, bloodless procedure. No anesthesia, fast healing ,less surgery time, no post operation medications, invosive procedure.
Loser tlt includes- Root canal , Depigmentation, of gums, crown lengthening, frenectomy, Apthouswcer, tooth sensitivity, TMJ biostimulation burning mouth syndrome, hemostasis, operculectomy OSMF
</span></p>
<a style="color: #87CEEB" id="myBtn" onclick="mFunction()" class="btn-get-started scrollto">Read More</a>
<script>
    function mFunction() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("myBtn");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
      }
    }
    </script>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-pills"></i></div>
            <h4 class="title"><a href="">  Orthodontics</a></h4>
            <p class="description">Orthodontics treatment is nothing but braces placement.
Braces are applied in order to connect crowding, gap in between teeth, Malanged teeth & strengthen them with the help of moral or ceramic brakets according to requirement of the patient.
</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-hospital-user"></i></div>
            <h4 class="title"><a href=""> Lmplantology & Oral surgery</a></h4>
            <p class="description">Lmplantology:-
Dental implants is permanent replacement of one or more missing tooth
It saves you neighbouring tooth from damage & it looks very natural.
Oral surgery:-
It includes minor & major surgical procedure like.
Extraction
Disimpaction
Cancerous & precancerous tlt
OSMF tlt</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-dna"></i></div>
            <h4 class="title"><a href=""> Conservative & Endodontics</a></h4>
            <p class="description">Conservative includes-  Tooth filling it may be Amalgum (silver), cement or composite in order to save tooth from further decay.
Endodontics includes- We deliver painless loser root canal tlt.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-wheelchair"></i></div>
            <h4 class="title"><a href=""> Prosthodontics</a></h4>
            <p class="description">1 Dental crown & bridge-
It is nothing but cap or covering on your healthy tooth to restore its size, shape & structure.
2 Denture
It is replacement of all missing teeth helps to achieve proper speech, esthetic, diet.
It is removal appliances.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-notes-medical"></i></div>
            <h4 class="title"><a href=""> Periodontology & Pedodontics</a></h4>
            <p class="description">Periodontology:-
It deals with your routine teeth cleaning & polishing so as to improve
Your gum health & reduce problems of bad breathe
Pedodontics:-
It is a separate branch<span id="dot">...</span><span id="mor">  dedicated to   kids oral health.
TLT includes-
RCT
Fluorides
Habit breaking appliance
Sealents
Avanced Dentistry
OPG</span></p>
<a style="color: #87CEEB" id="myBt" onclick="myFunction()" class="btn-get-started scrollto">Read More</a>



<script>
function myFunction() {
    var dots = document.getElementById("dot");
    var moreText = document.getElementById("mor");
    var btnText = document.getElementById("myBt");

    if (dots.style.display == "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less";
      moreText.style.display = "inline";
    }
  }
  </script>
          </div>

          <!-- <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">-->
          <!--  <div class="icon"><i class="fas fa-notes-medical"></i></div>-->
          <!--  <h4 class="title"><a href=""> Endodontics ( Root canal treatment)</a></h4>-->
          <!--  <p class="description">Endodontics ( Root canal treatment) info</p>-->
          <!--</div>-->
          <!-- <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">-->
          <!--  <div class="icon"><i class="fas fa-notes-medical"></i></div>-->
          <!--  <h4 class="title"><a href="">Prosthodontics ( crown & bridges )</a></h4>-->
          <!--  <p class="description">Prosthodontics ( crown & bridges ) info</p>-->
          <!--</div>-->
          <!--<div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">-->
          <!--  <div class="icon"><i class="fas fa-notes-medical"></i></div>-->
          <!--  <h4 class="title"><a href="">Periodontics & Paedodontics</a></h4>-->
          <!--  <p class="description">Periodontics & Paedodontics info</p>-->
          <!--</div>-->
        </div>


      </div>
    </section><!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Make an Appointment</h2>
          <p>Fill Below Form For Booking Appointment</p>
          <h3>Monday To Saturday : 11am to 03pm & 05pm to 09pm || For Sunday : 11am to 03pm</h3>
        </div>

        <form action="/make_appointment" method="post"  class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          @csrf
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="date" name="appointment_date" class="form-control datepicker" id="date" placeholder="Appointment Date" required>
            </div>
             <div class="col-md-4 form-group mt-3">
              <select name="appointment_time" id="doctor" class="form-select">
                <option value="">Select Time</option>
                <option value="Doctor 1">9 am</option>
                <option value="Doctor 2">9.20 am</option>
              </select>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="services" id="department" class="form-select">
                <option value="">Select Service</option>
                <option value="Department 1">Department 1</option>
                <option value="Department 2">Department 2</option>
                <option value="Department 3">Department 3</option>
              </select>
            </div>

          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Make an Appointment</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Emergency Services</h2>
          <p>Cardiology
Gynecology
Medicine
Diabetology




</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                  <h4>Cardiology</h4>
                  <p>Dr.Prashant Udgire</p>
                  <span><p>Cardiologist</p></span>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                  <h4>Gynecology</h4>
                  <p>Dr. Kunal Jadhav</p>
                  <span><p>Gynaecologist</p></span>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                  <h4>Diabetology</h4>
                  <p>Dr. Prashant Chaudhary</p>
                  <span><p>Diabetologist</p></span>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-8">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <h3>Cardiology</h3>
                <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                <img src="assets/img/demo.jpg" alt="" class="img-fluid">
                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
              </div>
              <div class="tab-pane" id="tab-2">
                <h3>Gynecology</h3>
                <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
              </div>

              <div class="tab-pane" id="tab-4">
                <h3>Diabetology</h3>
                <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Patients Review About Samruddhi Dental Clinic</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                 Dr. Samruddhi Chaudhary is a very knowledgeable and good doctor. The equipment's at the clinic are very advanced and the hygiene is well maintained. I would highly recommend all of you to visit her whenever in need.

                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/default.png" class="testimonial-img" alt="">
                <h3>Rishi Jain</h3>
                <h4>Patient</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Dr Samruddhi Chowdhary is a renowned doctor. Clinic setup is advance with high end technology. Nice counseling to each and every patient with a good treatment.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/default.png" class="testimonial-img" alt="">
                <h3>Sanjay Jabade</h3>
                <h4>Patient</h4>
              </div>
            </div><!-- End testimonial item -->

           <!-- End testimonial item -->


            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
               Samrudddhi Clinic deserve 5 ðŸŒŸ  .... Very nice experience dear really u r inspiration for all...ur clinic is one of the best dental clinic in Aurangabad... I will advice everyone who hv dental problems visit atleast one time.... With lots of loveðŸ’“Wishing u every success n goodlck in life all the best dear... and thank you for giving us such a wonderful treatment....
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/default.png" class="testimonial-img" alt="">
                <h3>Smita Kedar</h3>
                <h4>Patient</h4>
              </div>
            </div><!-- End testimonial item -->
            <!--0-->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                It's been a great experience..I can say after RCT for 3 teeths & white cement filling for 2 teeths they have efficiently managed. They are maintaining good cleanliness & hygiene which is most important during Corona days.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/abhishekpatil.png" class="testimonial-img" alt="">
                <h3>Abhishek patil</h3>
                <h4>Patient</h4>
              </div>
            </div>
            <!--1-->
             <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Unbelievable experience ! Proper treatment with proper guidance ! Such hospital I never seen ever ! Mind blowing painless treatment in minimum prices comparing to other hospital ! You will  not give smile you will laugh naturally ! Samruddhi dental clinic returns your lost smile & fill happiness in our life because without teeth we canâ€™t express happiness properly !.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/default.png" class="testimonial-img" alt="">
                <h3>Akshay Deshmukh
</h3>
                <h4>Patient</h4>
              </div>
            </div>
            <!--2-->
             <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                One of the best experiences anyone who has doubts or is afraid because of prior bad dental service that anyone can have. Dr. Samruddhi and her entire staff is amazing. They make sure that you are relaxed. They explain everything and is genuinely interested in how they can help you get over your fears, and they do their best to please the client. I would recommend them to anyone. They have such high standards and are very professional.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/default.png" class="testimonial-img" alt="">
                <h3>Amit Pawar</h3>
                <h4>Patient</h4>
              </div>
            </div>
            <!--3-->
             <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
               One of the best Doctor in town. Dr. Samruddhi and her entire staff is really wonderful. They have new equipments. They make sure that you are relaxed. Dr  explains everything in detail and she helps you to understand the procedure. I would really recommend them to everyone. They have such high standards and are very professional. Doctor is so friendly and helpful. For me it was really a painless treatment.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/default.png" class="testimonial-img" alt="">
                <h3>Kalyani Dixit</h3>
                <h4>Patient</h4>
              </div>
            </div>
             <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                 This is very advance technology clinic in aurangabad , always prefer for metal Free crown..... Thank You !!!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/default.png" class="testimonial-img" alt="">
                <h3>dinesh phade</h3>
                <h4>Patient</h4>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                It's been a great experience..I can say after RCT for 3 teeths & white cement filling for 2 teeths they have efficiently managed. They are maintaining good cleanliness & hygiene which is most important during Corona days.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/abhishekpatil.png" class="testimonial-img" alt="">
                <h3>Abhishek patil</h3>
                <h4>Patient</h4>
              </div>
            </div>
              <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Excellent treatment, one of the best clinic in Aurangabad.

                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/default.png" class="testimonial-img" alt="">
                <h3>Darshana Nilesh Lunawat</h3>
                <h4>Patient</h4>
              </div>
            </div><!-- End testimonial item -->


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Doctors</h2>
          <p>Higly Educated and Experienced Doctors </p>
        </div>

        <div class="row justify-content-md-center">

            {{-- <div class="col-lg-2 col-md-3 d-flex align-items-stretch">

            </div> --}}


            <div class="col-lg-2 col-md-2 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="400">
                  <div class="member-img">
                    <img src="assets/img/doctors/doctor.jpg" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Dr. Samrudhi Chaudhary Shinde</h4>
                    <span>Dentist, Cosmetologist, Oral Radiologis</span>
                  </div>
                </div>
              </div>



            <div class="col col-lg-2 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="200">
                <div class="member-img">
                  <img src="assets/img/doctors/doctor.jpg" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Dr. Ajay Anil Shinde
                    </h4>
                  <span>Cosmetologist</span>
                </div>
              </div>
            </div>

             <div class="col col-lg-2 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="300">
                <div class="member-img">
                  <img src="assets/img/doctors/doctor.jpg" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Dr. Akshay Pathak
                    </h4>
                  <span>Oral Surgeon</span>
                </div>
              </div>
            </div>

            <div class="col col-lg-2 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="400">
                <div class="member-img">
                  <img src="assets/img/doctors/doctor.jpg" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Dr. Pawan Raktade
                     </h4>
                  <span>Endodontist</span>
                </div>
              </div>
            </div>
             {{-- <div class="col-lg-2 col-md-3 d-flex align-items-stretch">

            </div>
    <div class="col-lg-2 col-md-3 d-flex align-items-stretch">

            </div> --}}

          </div>



        <div class="row justify-content-md-center">

            {{-- <div class="col-lg-2 col-md-3 d-flex align-items-stretch">

            </div> --}}


            <div class="col-lg-2 col-md-2 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="400">
                  <div class="member-img">
                    <img src="assets/img/doctors/kunal.jpeg" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Dr. Kunal Jadhav</h4>
                    <span>Gynaecologist</span>
                  </div>
                </div>
              </div>



            <div class="col col-lg-2 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="200">
                <div class="member-img">
                  <img src="assets/img/doctors/prashant.jpeg" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Dr. Prashant Udgire</h4>
                  <span>Cardiologist</span>
                </div>
              </div>
            </div>

             <div class="col col-lg-2 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="300">
                <div class="member-img">
                  <img src="assets/img/doctors/doctor.jpg" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Dr. Prashant Chaudhary</h4>
                  <span>Diabetologist</span>
                </div>
              </div>
            </div>

            <div class="col col-lg-2 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="400">
                <div class="member-img">
                  <img src="assets/img/doctors/doctor.jpg" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Dr. Shweta Chaudhary</h4>
                  <span>Medicine</span>
                </div>
              </div>
            </div>
             {{-- <div class="col-lg-2 col-md-3 d-flex align-items-stretch">

            </div>
    <div class="col-lg-2 col-md-3 d-flex align-items-stretch">

            </div> --}}

          </div>

        </div>
    </section><!-- End Doctors Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="gallery-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/lab1.jpg"><img src="assets/img/gallery/lab1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/lab2.jpg"><img src="assets/img/gallery/lab2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/lab3.jpg"><img src="assets/img/gallery/lab3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/lab4.jpg"><img src="assets/img/gallery/lab4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/lab5.jpg"><img src="assets/img/gallery/lab5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/lab6.jpg"><img src="assets/img/gallery/lab6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-7.jpg"><img src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-8.jpg"><img src="assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Pricing Section ======= -->
  <!--   <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Blog</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box" data-aos="fade-up" data-aos-delay="100">

              <h4></h4>
           <p>dfdsfdfdsdgsdfggsdgddsgsdgsdgdgssdgsddfdsfdfdsdgsdfggsdgddsgsdgsdgdgssdgsddfdsfdfdsdgsdfggsdgddsgsdgsdgdgssdgsddfdsfdfdsdgsdfggsdgddsgsdgsdgdgssdgsddfdsfdfdsdgsdfggsdgddsgsdgsdgdgssdgsddfdsfdfdsdgsdfggsdgddsgsdgsdgdgssdgsddfdsfdfdsdgsdfggsdgddsgsdgsdgdgssdgsddfdsfdfdsdgsdfggsdgddsgsdgsdgdgssdgsddfdsfdfdsdgsdfggsdgddsgsdgsdgdgssdgsddfdsfdfdsdgsdfggsdgddsgsdgsdgdgssdgsddfdsfdfdsdgsdfggsdgddsgsdgsdgdgssdgsddfdsfdfdsdgsdfggsdgddsgsdgsdgdgssdgsddfdsfdfdsdgsdfggsdgddsgsdgsdgdgssdgsddfdsfdfdsdgsdfggsdgddsgsdgsdgdgssdgsddfdsfdfdsdgsdfggsdgddsgsdgsdgdgssdgsddfdsfdfdsdgsdfggsdgddsgsdgsdgdgssdgsddfdsfdfdsdgsdfggsdgddsgsdgsdgdgssdgsddfdsfdfdsdgsdfggsdgddsgsdgsdgdgssdgsddfdsfdfdsdgsdfggsdgddsgsdgsdgdgssdgsddfdsfdfdsdgsdfggsdgddsgsdgsdgdgssdgsddfdsfdfdsdgsdfggsdgddsgsdgsdgdgssdgsddfdsfdfdsdgsdfggsdgddsgsdgsdgdgssdgsddfdsfdfdsdgsdfggsdgddsgsdgsdgdgssdgsddfdsfdfdsdgsdfggsdgddsgsdgsdgdgssdgsd</p>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Read More..</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="fade-up" data-aos-delay="200">
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="300">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>


        </div>

      </div>
    </section> --><!-- End Pricing Section -->


    <!-- ======= Frequently Asked Questioins Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questioins( FAQ's )</h2>
         <!--  <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">1. What are the various mode of payment accepted here ?
 <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                You can make payment Via Cash, Cheque, NEFT, RTGS.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">2. Which is the nearest landmark ?
<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
               You can easily locate the establishment as it is in close proximity to Besides Naik College Opposite Mahavir Super Shoppe
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">3. What are its hours of operation ?
<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                The establishment is functional on  </p>
<ul>
<li>Monday:- Open 24 Hrs</li>
<li>Tuesday:- Open 24 Hrs</li>
<li>Wednesday:- Open 24 Hrs</li>
<li>Thursday:- Open 24 Hrs</li>
<li>Friday:- Open 24 Hrs</li>
<li>Saturday:- Open 24 Hrs</li>
<li>Sunday:- Open 24 Hrs</li>
</ul>

            </div>
          </li>



        </ul>

      </div>
    </section><!-- End Frequently Asked Questioins Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
         <!--  <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d962768.6234850703!2d75.31545898366619!3d19.50659632635501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdba2c07f5c5937%3A0x78f1566997e9c086!2sSamruddhi%20Dental%20skin%20hair%20and%20advanced%20laser%20center!5e0!3m2!1sen!2sin!4v1616702152458!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" frameborder="0" ></iframe>

      </div>

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>CIDCO N5, BESIDE NAIK COLLEGE, Town Center, Connaught Place </p>
                  <!--<p> Besides Naik College Opposite Mahavir Super Shoppe, </p>-->
                  <p>Aurangabad, Aurangabad-Maharashtra - 431001.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>samrudhichaudhary@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>

                  <p>+91 9405484847<br>+91 9823499994<br></p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection
