<?= $this->extend('default_view') ?>
<?= $this->section('content') ?>

<div class="container-fluid header bg-white p-0">
    <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
        <div class="col-md-6 p-5 mt-lg-5">
            <h1 class="display-5 animated fadeIn mb-4">About Us</h1>
            <nav aria-label="breadcrumb animated fadeIn">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                    <li class="breadcrumb-item text-body active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 animated fadeIn">
            <img class="img-fluid" src="<?= base_url() ?>assets/img/header.jpg" alt="">
        </div>
    </div>
</div>

<!-- </?= view('pre/search_bar') ?> -->
<!-- Header End -->
<br>
<br>
<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    <img class="img-fluid w-100" src="<?= base_url() ?>assets/img/about.jpg">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <!-- <h1 class="mb-4">#1 Place To Find The Perfect Apartment</h1> -->
                <h1 class="mb-4">About Service Apartment</h1>
                <p class="mb-4">
                    <!-- Discover your ideal home with Service Apartment, 
                    where exceptional options meet unparalleled amenities, comfort, and convenience, 
                    perfectly tailored to suit your unique lifestyle and preferences. 
                    Experience the best in apartment living. -->
                    Our service apartment platform facilitates a seamless experience for both agents and clients alike. Agents have the capability to create comprehensive profiles and showcase their available apartments with detailed listings, complete with high-quality images and thorough descriptions. This feature empowers agents to effectively market their properties and attract potential tenants or buyers. <br>

Clients benefit from an intuitive browsing interface that allows them to effortlessly explore a diverse range of apartment options. They can quickly book their preferred apartment with a simple click, streamlining the booking process for maximum convenience. <br>

Our platform ensures secure transactions through a robust payment system, giving clients peace of mind when completing their transactions online. The user-friendly design caters to both agents and clients, offering efficient management tools for agents to oversee their listings and interactions, while providing a straightforward booking process for clients. <br>

In essence, our platform enhances the efficiency of listing and booking apartments, delivering a seamless and enjoyable experience for all users involved in the rental or purchase process.
                    
                </p>
                <!-- <p><i class="fa fa-check text-primary me-3"></i>Discover Luxury Living with Service Apartment</p>
                <p><i class="fa fa-check text-primary me-3"></i>Perfectly Tailored to Your Unique Lifestyle</p>
                <p><i class="fa fa-check text-primary me-3"></i>Unmatched Comfort and Convenience Awaits You</p> -->
                <!-- <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a> -->
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<?= view('pre/houses') ?>

<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Team Members</h1>
            <!-- <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p> -->
            <p>We are work effortlessly to make our clients get the best serviced apartment close to your nearest location. </p>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid" src="<?= base_url() ?>assets/img/team-1.jpg" alt="">
                        <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4 mt-3">
                        <h5 class="fw-bold mb-0">Full Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid" src="<?= base_url() ?>assets/img/team-2.jpg" alt="">
                        <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4 mt-3">
                        <h5 class="fw-bold mb-0">Full Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid" src="<?= base_url() ?>assets/img/team-3.jpg" alt="">
                        <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4 mt-3">
                        <h5 class="fw-bold mb-0">Full Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid" src="<?= base_url() ?>assets/img/gabriel.jpg" alt="">
                        <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4 mt-3">
                        <h5 class="fw-bold mb-0">Gabriel Benjamin</h5>
                        <small>Co-founder</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<?= view('customer_service') ?>




<?= $this->endSection() ?>