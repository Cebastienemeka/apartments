<?= $this->extend('user/user_default') ?>
<?= $this->section('content') ?>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script> -->

<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <!--begin::Sidebar-->

    <!--end::Sidebar-->
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Dashboard</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="<?= base_url() ?>user/profiledash" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Dashboard</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->

                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div id="marqueeContainer" style="width:70%; text-align:center;">
                        <marquee behavior="scroll" scrollamount="4" direction="ltr" style="color:red; font-size:16px;">Please make your payment, so you can start posting properties</marquee>
                    </div>

                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Pay Now!</a>
                        <!-- Modal -->
                        <!-- <div class="modal fade" id="paystackModal" tabindex="-1" aria-labelledby="paystackModalLabel" aria-hidden="true"> -->
                        <div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-labelledby="paystackModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="paystackModalLabel">Pay with Paystack</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Paystack Payment Form -->
                                        <form id="paymentForm" method="POST">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email Address:</label>
                                                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Phone Number:</label>
                                                <input type="tel" id="phone" name="phone" class="form-control" placeholder="Enter your phone number" required pattern="[0-9]{11}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="amount" class="form-label">Amount (NGN):</label>
                                                <input type="number" id="amount" name="amount" class="form-control" readonly placeholder="Enter amount" value="50000" min="50000" step="50000" required>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" onclick="validateAndPay()">Pay Now</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--end::Primary button-->
                    </div>
                    <!--end::Actions-->
                </div>

                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::Navbar-->
                    <div class="card mb-6">
                        <div class="card-body pt-9 pb-0">
                            <!--begin::Details-->
                            <div class="d-flex flex-wrap flex-sm-nowrap">
                                <!--begin: Pic-->
                                <div class="me-7 mb-4">
                                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                        <img src="<?= base_url() ?>assetss/media/avatars/300-1.jpg" alt="image" />
                                        <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                                    </div>
                                </div>
                                <!--end::Pic-->
                                <!--begin::Info-->
                                <div class="flex-grow-1">
                                    <!--begin::Title-->
                                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                        <!--begin::User-->
                                        <div class="d-flex flex-column">
                                            <!--begin::Name-->
                                            <div class="d-flex align-items-center mb-2">
                                                <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">
                                                    <?= isset($user['firstname']) ? ucfirst($user['firstname']) : "No Name" ?>
                                                </a>


                                                <a href="#">
                                                    <i class="ki-duotone ki-verify fs-1 text-primary">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </a>
                                            </div>
                                            <!--end::Name-->
                                            <!--begin::Info-->
                                            <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                                <a class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                                    <i class="ki-duotone ki-profile-circle fs-4 me-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <!-- </i>Developer</a> -->
                                                    </i> <?= isset($user['phone']) ? lcfirst($user['phone']) : "No Email" ?>
                                                    <a class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                                        <i class="ki-duotone ki-geolocation fs-4 me-1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>SF, Bay Area</a>
                                                    <a class="d-flex align-items-center text-gray-500 text-hover-primary mb-2">
                                                        <i class="ki-duotone ki-sms fs-4 me-1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i> <?= isset($user['email']) ? lcfirst($user['email']) : "No Email" ?>
                                                    </a>
                                            </div>

                                        </div>

                                        <!-- <div class="d-flex my-4">
														<a href="#" class="btn btn-sm btn-light me-2" id="kt_user_follow_button">
															<i class="ki-duotone ki-check fs-3 d-none"></i>
															
															<span class="indicator-label">Follow</span>
															
															<span class="indicator-progress">Please wait...
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
															
														</a>
														<a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_offer_a_deal">Hire Me</a>
														
														<div class="me-0">
															<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																<i class="ki-solid ki-dots-horizontal fs-2x"></i>
															</button>
															
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
																
																<div class="menu-item px-3">
																	<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
																</div>
																
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Create Invoice</a>
																</div>
																
																<div class="menu-item px-3">
																	<a href="#" class="menu-link flex-stack px-3">Create Payment
																		<span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
																			<i class="ki-duotone ki-information fs-6">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span></a>
																</div>
																
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Generate Bill</a>
																</div>
																
																
															</div>
															
														</div>
														
													</div> -->
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Stats-->
                                    <div class="d-flex flex-wrap flex-stack">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column flex-grow-1 pe-8">
                                            <!--begin::Stats-->
                                            <div class="d-flex flex-wrap">
                                                <!--begin::Stat-->
                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                    <!--begin::Number-->
                                                    <div class="d-flex align-items-center">
                                                        <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                        <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$">0</div>
                                                    </div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-semibold fs-6 text-gray-500">Earnings</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->
                                                <!--begin::Stat-->
                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                    <!--begin::Number-->
                                                    <div class="d-flex align-items-center">
                                                        <i class="ki-duotone ki-arrow-down fs-3 text-danger me-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                        <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="80">0</div>
                                                    </div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-semibold fs-6 text-gray-500">Projects</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->
                                                <!--begin::Stat-->
                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                    <!--begin::Number-->
                                                    <div class="d-flex align-items-center">
                                                        <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                        <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%">0</div>
                                                    </div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-semibold fs-6 text-gray-500">Success Rate</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Progress-->
                                        <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                                            <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                                <span class="fw-semibold fs-6 text-gray-500">Profile Compleation</span>
                                                <span class="fw-bold fs-6">50%</span>
                                            </div>
                                            <div class="h-5px mx-3 w-100 bg-light mb-3">
                                                <div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <!--end::Progress-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Navs-->
                            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5" href="#">Overview</a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5" href="#">Projects</a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="pages/user-profile/campaigns.html">Campaigns</a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5" href="pages/user-profile/documents.html">Documents</a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5" href="pages/user-profile/followers.html">Followers</a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5" href="pages/user-profile/activity.html">Activity</a>
                                </li>
                                <!--end::Nav item-->
                            </ul>
                            <!--begin::Navs-->
                        </div>
                    </div>
                    <!--end::Navbar-->
                    <!--begin::Toolbar-->

                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://js.paystack.co/v1/inline.js"></script>

    <script>
        function validateAndPay() {
            var email = document.getElementById('email').value;
            var phone = document.getElementById('phone').value;
            var amount = document.getElementById('amount').value * 100; // Convert to kobo

            // Validate phone number length
            if (phone.length !== 11) {
                document.getElementById('phoneError').textContent = "Phone number must be exactly 11 digits";
                return;
            }

            // Validate phone number format (digits only)
            var phoneRegex = /^[0-9]+$/;
            if (!phoneRegex.test(phone)) {
                document.getElementById('phoneError').textContent = "Invalid phone number";
                return;
            }

            var handler = PaystackPop.setup({
                key: 'pk_test_faa8396a1e3ce90b576ce8e6eb25af226eacff34', // Replace with your actual Paystack public key
                email: email,
                amount: amount,
                phone: phone,
                currency: 'NGN',
                ref: '' + Math.floor((Math.random() * 1000000000) + 1), // Unique reference
                metadata: {
                    custom_fields: [{
                        display_name: "Mobile Number",
                        variable_name: "mobile_number",
                        value: phone // Pass the phone number entered by the user
                    }]
                },
                callback: function(response) {
                    alert('Payment complete! Reference: ' + response.reference);
                    // Store payment status in local storage
                    localStorage.setItem('paymentStatus', 'success');
                    // Reload the page
                    location.reload();
                },
                onClose: function() {
                    alert('Transaction was not completed, window closed.');
                }
            });
            handler.openIframe();
        }

        // Check payment status on page load
        window.onload = function() {
            if (localStorage.getItem('paymentStatus') === 'success') {
                // Hide the marquee
                document.getElementById('marqueeContainer').style.display = 'none';
                // Optionally, you can remove the item from local storage if you want this to be a one-time check
                localStorage.removeItem('paymentStatus');
            }
        }
    </script>

    <?= $this->endSection() ?>