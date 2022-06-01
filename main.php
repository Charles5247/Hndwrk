<?php
$title = '<title> Founder </title>';

$header = '

<div class="container d-flex align-items-center intro-h2">


<ul>
    <li><h3 class=" intro-h3"><span>Explore</span> More Than 10K+ Jobs</h3></li>
    <li id="search-tag">
    <i class="bu bi-search"></i>
    <input type="search" placeholder="Job title, Keyword, or company">
    <a href="" class="btn-get-started">Find a Job</a>
    </li>
    <li>
    
    </li>


</ul>
</div><br>

<div class="custom-shape-divider-bottom-1651620123">
  <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
  </svg>
</div>'
?>

<!DOCTYPE html>
<html lang="en">

<?php
require './Meta.php'
?>

<style>
    .intro-h2{
        width:fit-content;
        height: fit-content;
        margin: 10px auto 15px auto;
    }
    .intro-h2 ul{
        display: block;
        list-style: none;
        justify-content: space-between;

    }

    .intro-h2 ul #search-tag{
        background-color: rgba(244, 245, 247, 0.973);

    }

    .intro-h3 {
        width: max-content;
        margin: 0 auto;
        color: #fff;
        font-size: 40px;
        font-weight: 700;
    }


    .intro-h3 span {
        color: #1bbd36;
    }

    

    .intro-h2 ul li input[type="search"] {
        position: relative;
        bottom: 0;
        border: 0;
        background: none;
        font-size: 16px;
        padding: 0 20px;
        background: #fff;
        color: #fff;
        transition: 0.3s;
        border-radius: 0 4px 4px 0;
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    }

    .custom-shape-divider-bottom-1651620123 {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50%;
        height: 30%;
        overflow: hidden;
        line-height: 0;
        transform: rotate(180deg);
    }

    .custom-shape-divider-bottom-1651620123 svg {
        position: relative;
        display: block;
        width: calc(100% + 1px);
        height: 305px;

    }

    .custom-shape-divider-bottom-1651620123 .shape-fill {
        fill: #FFFFFF;

    }

    
</style>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <?php
        require './Nav-bar.php'
        ?>
    </header>
    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->

        <?php require './header-tag.php' ?>

        <!-- End Breadcrumbs -->

        <!-- ======= About Us Section ======= -->
        <?php
        require './Founder.php'
        ?>
        <!-- End About Us Section -->

        <!-- ======= Our Team Section ======= -->
        <?php
        require './team.php'
        ?>
        <!-- End Our Team Section -->

        <!-- ======= Our Skills Section ======= -->
        <section id="skills" class="skills">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Our <strong>Skills</strong></h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis
                        commodi quidem hic quas.</p>
                </div>

                <div class="row skills-content">

                    <div class="col-lg-6" data-aos="fade-up">

                        <div class="progress">
                            <span class="skill">HTML <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">CSS <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">JavaScript <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                        <div class="progress">
                            <span class="skill">PHP <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">WordPress/CMS <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Photoshop <i class="val">55%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- End Our Skills Section -->

        <!-- ======= Our Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Clients</h2>
                </div>

                <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Our Clients Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php
    require './footer.php'
    ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <?php
    require './Sripts.php'
    ?>

    <!-- Template Main JS File -->
    <?php
    require './Sripts.php'
    ?>

</body>

</html>