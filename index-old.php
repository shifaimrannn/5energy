<?php
$pg = 'home';
$title = "Home";
include('header.php');
?>

<div class="main-warpper">
    <section class="top-banner">
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-lg-12">
                    <div class="owl-carousel bannerslider owl-theme">
                        <div class="item">
                            <img src="./assets/images/banner-slider.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="item">
                            <img src="./assets/images/banner-slider-2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="item">
                            <img src="./assets/images/banner-slider-3.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-logo-box">
            <img src="./assets/images/logo.png" alt="" class="img-fluid">
        </div>
    </section>
    <!-- Sidebar  -->
    <header>
        <div class="container-fluid">
            <div class="row row-justify">
                <div class="col-lg-8">
                    <div class="wrapper">
                        <nav>
                            <input type="checkbox" id="show-search">
                            <input type="checkbox" id="show-menu">
                            <div class="content">
                                <ul class="links">
                                    <label for="show-menu" class="menu-icon"><i class="fas fa-times"></i></label>
                                    <li><a href="#about">about</a></li>
                                    <li><a href="#industries">industries</a></li>
                                    <li><a href="#services">services</a></li>
                                    <!-- <li><a href="#projects">projects</a></li>-->
                                </ul>
                            </div>
                            <div class="for-res-navbr">
                                <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
                                <img src="./assets/images/logo.png" alt="" class="img-fluid respo-logo">
                                <a href="#_" class="web-btn">Get in touch</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="about-section" id="about">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div>
                                <h6 class="blue-heading-50">About Us</h6>
                                <h5 class="d-blue-heading-38">Providing Engineering Solutions</h5>
                                <p class="web-pra">We provide engineering solutions, services and energy equipment to
                                    customers in South Asia, the Middle East and Africa.</p>

                                <!-- <h5 class="d-blue-heading-38">Providing Engineering Solutions
                                    to 5 Industries</h5> -->
                                <p class="web-pra">We bring localized experience to provide our clients with technical
                                    and commercial support as per their needs. Strive to work to international
                                    standards.</p>




                                <!-- <div class="about-year-box">
                                     <h4 class="about-text-24">Founded in</h4>
                                     <h3 class="about-text-62">1993</h3>
                                 </div>
                                 <div class="about-year-box">
                                     <h4 class="about-text-24">Years in Industry experience</h4>
                                     <h3 class="about-text-62">30</h3>
                                 </div>
                                 <div class="about-year-box">
                                     <h4 class="about-text-24">Countries we serve</h4>
                                     <h3 class="about-text-62">5</h3>
                                 </div>-->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="./assets/images/about-pic.png" alt="" class="img-fluid">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="who-work">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Who We Work With</h4>
                    <p class="pra">We are business partners for large global organizations, providing them end-to-end
                        support in various countries.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg col-md-4 col-4">
                    <div class="ring-box">
                        <img src="./assets/images/white-ring.png" alt="" class="img-fluid">
                        <h3 class="ring-name">EPC-M</h3>
                    </div>
                </div>
                <div class="col-lg col-md-4 col-4">
                    <div class="ring-box">
                        <img src="./assets/images/white-ring-2.png" alt="" class="img-fluid">
                        <h3 class="ring-name">EQUIPMENT<br>
                            PROVIDERS</h3>
                    </div>
                </div>
                <div class="col-lg col-md-4 col-4">
                    <div class="ring-box">
                        <img src="./assets/images/white-ring-3.png" alt="" class="img-fluid">
                        <h3 class="ring-name">CONSULTING<br>
                            FIRMS</h3>
                    </div>
                </div>
                <div class="col-lg col-md-4 col-4">
                    <div class="ring-box">
                        <img src="./assets/images/white-ring-4.png" alt="" class="img-fluid">
                        <h3 class="ring-name">FINANCIAL<br>
                            ENTITIES</h3>
                    </div>
                </div>
                <div class="col-lg col-md-4 col-4">
                    <div class="ring-box">
                        <img src="./assets/images/white-ring-5.png" alt="" class="img-fluid">
                        <h3 class="ring-name">PROJECT<br>
                            DEVELOPERS</h3>
                    </div>
                </div>
                <div class="col-lg col-md-4 col-4">
                    <div class="ring-box">
                        <img src="./assets/images/white-ring-6.png" alt="" class="img-fluid">
                        <h3 class="ring-name">LOGISTICS <br>
                            FIRMS</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="industries-section" id="industries">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="industries-heading mb-5">INDUSTRIES WE SERVE</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="owl-carousel industy-slider owl-theme">
                                <div class="item">
                                    <div class="card-container">
                                        <img src="./assets/images/indu-slider.png" alt="Avatar" class="image">
                                        <div class="overlay">
                                            <!-- <img src="../assets/images/white-ring.png" alt=""
                                                class="img-fluid industy-ring"> -->
                                            <div class="text">EPC’s & Engineering</div>
                                            <!-- <p class="indus-card-p">Lorem ipsum dolor sit amet, cons ectetuer adipiscing
                                                elit,
                                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                erat
                                                volutpat.</p>
                                            <a href="#_" class="read-more">READ MORE</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card-container">
                                        <img src="./assets/images/indu-slider-2.png" alt="Avatar" class="image">
                                        <div class="overlay">
                                            <!-- <img src="../assets/images/white-ring.png" alt=""
                                                class="img-fluid industy-ring"> -->
                                            <div class="text">Power Plants</div>
                                            <!-- <p class="indus-card-p">Lorem ipsum dolor sit amet, cons ectetuer adipiscing
                                                elit,
                                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                erat
                                                volutpat.</p>
                                            <a href="#_" class="read-more">READ MORE</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card-container">
                                        <img src="./assets/images/indu-slider-3.png" alt="Avatar" class="image">
                                        <div class="overlay">
                                            <!-- <img src="../assets/images/white-ring.png" alt=""
                                                class="img-fluid industy-ring"> -->
                                            <div class="text">Utilities</div>
                                            <!-- <p class="indus-card-p">Lorem ipsum dolor sit amet, cons ectetuer adipiscing
                                                elit,
                                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                erat
                                                volutpat.</p>
                                            <a href="#_" class="read-more">READ MORE</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card-container">
                                        <img src="./assets/images/indu-slider-4.png" alt="Avatar" class="image">
                                        <div class="overlay">
                                            <!-- <img src="../assets/images/white-ring.png" alt=""
                                                class="img-fluid industy-ring"> -->
                                            <div class="text">Oil & Gas</div>
                                            <!-- <p class="indus-card-p">Lorem ipsum dolor sit amet, cons ectetuer adipiscing
                                                elit,
                                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                erat
                                                volutpat.</p>
                                            <a href="#_" class="read-more">READ MORE</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card-container">
                                        <img src="./assets/images/indu-slider-5.png" alt="Avatar" class="image">
                                        <div class="overlay">
                                            <!-- <img src="../assets/images/white-ring.png" alt=""
                                                class="img-fluid industy-ring"> -->
                                            <div class="text">Refineries & Petrochemical</div>
                                            <!-- <p class="indus-card-p">Lorem ipsum dolor sit amet, cons ectetuer adipiscing
                                                elit,
                                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                erat
                                                volutpat.</p>
                                            <a href="#_" class="read-more">READ MORE</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card-container">
                                        <img src="./assets/images/indu-slider-6.png" alt="Avatar" class="image">
                                        <div class="overlay">
                                            <!-- <img src="../assets/images/white-ring.png" alt=""
                                                class="img-fluid industy-ring"> -->
                                            <div class="text">Fertilizers</div>
                                            <!-- <p class="indus-card-p">Lorem ipsum dolor sit amet, cons ectetuer adipiscing
                                                elit,
                                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                erat
                                                volutpat.</p>
                                            <a href="#_" class="read-more">READ MORE</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card-container">
                                        <img src="./assets/images/indu-slider-7.png" alt="Avatar" class="image">
                                        <div class="overlay">
                                            <!-- <img src="../assets/images/white-ring.png" alt=""
                                                class="img-fluid industy-ring"> -->
                                            <div class="text">Pipelines</div>
                                            <!-- <p class="indus-card-p">Lorem ipsum dolor sit amet, cons ectetuer adipiscing
                                                elit,
                                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                erat
                                                volutpat.</p>
                                            <a href="#_" class="read-more">READ MORE</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card-container">
                                        <img src="./assets/images/indu-slider-8.png" alt="Avatar" class="image">
                                        <div class="overlay">
                                            <!-- <img src="../assets/images/white-ring.png" alt=""
                                                class="img-fluid industy-ring"> -->
                                            <div class="text">Industrial</div>
                                            <!-- <p class="indus-card-p">Lorem ipsum dolor sit amet, cons ectetuer adipiscing
                                                elit,
                                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                erat
                                                volutpat.</p>
                                            <a href="#_" class="read-more">READ MORE</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-section" id="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="industries-heading mb-5">OUR SERVICES</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service-nav-section">
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-lg-12">
                    <ul class="nav nav-pills mb-3 service-nav" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Project Services</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link sec-nav" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">HR Management & Admin</button>
                        </li>

                        <!-- <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">HR & Admin</button>
                        </li> -->
                    </ul>
                    <div class="tab-content tabs-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <img src="./assets/images/proposal-engineering.png" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-6">
                                    <h4>Project Services</h4>

                                    <ul>
                                        <li>
                                            <p><img src="./assets/images/sm-arrow.png" alt="" class="img-fluid">
                                            Project Management Support</p>
                                        </li>
                                        <li>
                                            <p><img src="./assets/images/sm-arrow.png" alt="" class="img-fluid">
                                            Technical Studies & Evaluation</p>
                                        </li>
                                        <li>
                                            <p><img src="./assets/images/sm-arrow.png" alt="" class="img-fluid">
                                            Documentation for Proposal & Specifications</p>
                                        </li>
                                        <li>
                                            <p><img src="./assets/images/sm-arrow.png" alt="" class="img-fluid">
                                            Project Design</p>
                                        </li>
                                         <li>
                                            <p><img src="./assets/images/sm-arrow.png" alt="" class="img-fluid">
                                                Commercial Evaluation</p>
                                        </li>
                                        <li>
                                            <p><img src="./assets/images/sm-arrow.png" alt="" class="img-fluid">
                                                Procurement Support</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <img src="./assets/images/project-manpower.png" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-6">
                                    <h4>HR Management & Admin</h4>
                                    <ul>
                                        <li>
                                            <p><img src="./assets/images/sm-arrow.png" alt="" class="img-fluid">
                                                Technical Manpower and Expertise for projects and O&M</p>
                                        </li>
                                        <li>
                                            <p><img src="./assets/images/sm-arrow.png" alt="" class="img-fluid">
                                                In house technical and commercial support
                                            </p>
                                        </li>
                                        <li>
                                            <p><img src="./assets/images/sm-arrow.png" alt="" class="img-fluid">
                                                Local office operations and management</p>
                                        </li>
                                        <li>
                                            <p><img src="./assets/images/sm-arrow.png" alt="" class="img-fluid">
                                            Administrative support</p>
                                        </li>
                                        <!--<li>-->
                                        <!--    <p><img src="../assets/images/sm-arrow.png" alt="" class="img-fluid">-->
                                        <!--    Complete HR-->
                                        <!--and Admin support.</p>-->
                                        <!--</li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <img src="../assets/images/hr-admin.png" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-6">
                                    <h4>Human Resource & Admin</h4>
                                    <p><img src="../assets/images/sm-arrow.png" alt="" class="img-fluid"> Local office
                                        and operations.</p>
                                    <p><img src="../assets/images/sm-arrow.png" alt="" class="img-fluid"> Complete HR
                                        and Admin support.</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<section class="industries-section" id="projects">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h4 class="industries-heading">OUR PROJECTS</h4>
                    <p class="industries-p text-center">Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit,
                        sed diam
                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="owl-carousel project-slider owl-theme">
                                <div class="item">
                                    <div>
                                        <img src="../assets/images/our-project-1.png" alt="" class="img-fluid">
                                        <div class="blue-ring-box">
                                            <img src="../assets/images/blue-ring.png" alt="" class="img-fluid">
                                            <h5>Solar Projects Development</h5>
                                            <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam
                                                nonummy nibh euismod tincidunt.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div>
                                        <img src="../assets/images/our-project-2.png" alt="" class="img-fluid">
                                        <div class="blue-ring-box">
                                            <img src="../assets/images/blue-ring.png" alt="" class="img-fluid">
                                            <h5>VRE Study Consultant (CESI)</h5>
                                            <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam
                                                nonummy nibh euismod tincidunt.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div>
                                        <img src="../assets/images/our-project-3.png" alt="" class="img-fluid">
                                        <div class="blue-ring-box">
                                            <img src="../assets/images/blue-ring.png" alt="" class="img-fluid">
                                            <h5>K-Electric – CCPP</h5>
                                            <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam
                                                nonummy nibh euismod tincidunt.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div>
                                        <img src="../assets/images/our-project-4.png" alt="" class="img-fluid">
                                        <div class="blue-ring-box">
                                            <img src="../assets/images/blue-ring.png" alt="" class="img-fluid">
                                            <h5>Power Projects EPC Support</h5>
                                            <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam
                                                nonummy nibh euismod tincidunt.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div>
                                        <img src="../assets/images/our-project-5.png" alt="" class="img-fluid">
                                        <div class="blue-ring-box">
                                            <img src="../assets/images/blue-ring.png" alt="" class="img-fluid">
                                            <h5>FPCL Coal Power Plant</h5>
                                            <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam
                                                nonummy nibh euismod tincidunt.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->


    <section class="contact-box" id="contact" style="background-color: #fff">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4>CONTACT US</h4>
                            <!--<div class="addres">
                                <p><img src="../assets/images/sm-arrow.png" alt="" class="img-fluid"> Address</p>
                                <p class="ps-3">1-C, Khayaban-e-Saadi, DHA, Karachi, Pakistan</p>
                            </div>
                            <div class="addres">
                                <p><img src="../assets/images/sm-arrow.png" alt="" class="img-fluid"> Phone</p>
                                <a href="#_" class="ps-3">+92-213-1234567-8</a>
                            </div>
                            <div class="addres">
                                <p><img src="../assets/images/sm-arrow.png" alt="" class="img-fluid"> Fax</p>
                                <a href="#_" class="ps-3">+92-213-1234567-8</a>
                            </div>-->
                            <div class="addres">
                                <p><img src="./assets/images/sm-arrow.png" alt="" class="img-fluid"> Email</p>
                                <a href="#_" class="ps-3">hr@5energyglobal.com</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form>
                                <div class="">
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Full Name">
                                </div>
                                <div class="">
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Phone">
                                </div>
                                <div class="">
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Email">
                                </div>
                                <div class="">
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Company">
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Message"></textarea>
                                </div>
                                <button type="submit" class="btn web-btn2 ms-auto">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>





<?php include('site-footer.php') ?>
<?php include('footer.php') ?>