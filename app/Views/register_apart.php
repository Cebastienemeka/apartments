<?= view('pre/toast_view') ?>

<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic 
Product Version: 8.2.3
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../" />
    <title>Sign-up</title>
    <meta charset="utf-8" />
    <meta name="description" content="The best real estate platform, agent, onboarding, register, pay, good houses" />
    <meta name="keywords" content="The best real estate platform, agent, onboarding, register, pay, good houses" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Service Apartment - The Best selling platform in the world" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Service Apartment" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <!-- <link rel="shortcut icon" href="</?= base_url() ?>assetss/media/logos/favicon.ico" /> -->
    <link rel="shortcut icon" href="<?= base_url() ?>assetss/media/logos/rounded_logo_brand.png" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="<?= base_url() ?>assetss/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assetss/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!-- <script src="https://js.paystack.co/v1/inline.js"></script> -->
    <!--end::Global Stylesheets Bundle-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="app-blank">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Authentication - Sign-up -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Logo-->
            <a href="index.html" class="d-block d-lg-none mx-auto py-20">
                <img alt="Logo" src="<?= base_url() ?>assetss/media/logos/default.svg" class="theme-light-show h-25px" />
                <img alt="Logo" src="<?= base_url() ?>assetss/media/logos/default-dark.svg" class="theme-dark-show h-25px" />
            </a>
            <!--end::Logo-->
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
                <!--begin::Wrapper-->
                <div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
                    <!--begin::Header-->
                    <div class="d-flex flex-stack py-2">
                        <!--begin::Back link-->
                        <div class="me-2">
                            <a href="<?= base_url() ?>" class="btn btn-icon bg-light rounded-circle">
                                <i class="ki-duotone ki-black-left fs-2 text-gray-800"></i>
                            </a>
                        </div>
                        <!--end::Back link-->
                        <!--begin::Sign Up link-->
                        <div class="m-0">
                            <span class="text-gray-500 fw-bold fs-5 me-2" data-kt-translate="sign-up-head-desc">Already a member ?</span>
                            <a href="<?= base_url() ?>login" class="link-primary fw-bold fs-5" data-kt-translate="sign-up-head-link">Sign In</a>
                        </div>
                        <!--end::Sign Up link=-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="py-20">
                        <!--begin::Form-->
                        <form class="form w-100" action="<?= base_url('register_apart') ?>" method="post">
                            <!--begin::Heading-->
                            <div class="text-start mb-10">
                                <!--begin::Title-->
                                <h1 class="text-gray-900 mb-3 fs-3x" data-kt-translate="sign-up-title">Create an Account</h1>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <!-- <div class="text-gray-500 fw-semibold fs-6" data-kt-translate="general-desc">Get unlimited access & earn money</div> -->
                                <!--end::Link-->
                            </div>
                            <!--end::Heading-->

                            <!--begin::Error Messages-->
                            <?php if (session()->has('errors')) : ?>
                                <div class="alert alert-danger">
                                    <?php foreach (session('errors') as $error) : ?>
                                        <p><?= $error ?></p>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                            <!--end::Error Messages-->

                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <!--begin::Col-->
                                <div class="col-xl-6">
                                    <input class="form-control form-control-lg form-control-solid" type="text" placeholder="First Name" name="firstname" value="<?= old('firstname') ?>" autocomplete="off" data-kt-translate="sign-up-input-first-name" />
                                    <?php if (isset(session('errors')['firstname'])) : ?>
                                        <div class="text-danger"><?= session('errors')['firstname'] ?></div>
                                    <?php endif; ?>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-6">
                                    <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Last Name" name="lastname" value="<?= old('lastname') ?>" autocomplete="off" data-kt-translate="sign-up-input-last-name" />
                                    <?php if (isset(session('errors')['lastname'])) : ?>
                                        <div class="text-danger"><?= session('errors')['lastname'] ?></div>
                                    <?php endif; ?>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <input class="form-control form-control-lg form-control-solid" type="email" placeholder="Email" name="email" value="<?= old('email') ?>" autocomplete="off" data-kt-translate="sign-up-input-email" />
                                <?php if (isset(session('errors')['email'])) : ?>
                                    <div class="text-danger"><?= session('errors')['email'] ?></div>
                                <?php endif; ?>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <input class="form-control form-control-lg form-control-solid" type="tel" placeholder="Phone Number" name="phone" value="<?= old('phone') ?>" autocomplete="off" data-kt-translate="sign-up-input-phone-number" />
                                <?php if (isset(session('errors')['phone'])) : ?>
                                    <div class="text-danger"><?= session('errors')['phone'] ?></div>
                                <?php endif; ?>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-10" data-kt-password-meter="true">
                                <!--begin::Wrapper-->
                                <div class="mb-1">
                                    <!--begin::Input wrapper-->
                                    <div class="position-relative mb-3">
                                        <input class="form-control form-control-lg form-control-solid" type="password" placeholder="Password" name="password" autocomplete="off" data-kt-translate="sign-up-input-password" />
                                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                            <i class="ki-duotone ki-eye-slash fs-2"></i>
                                            <i class="ki-duotone ki-eye fs-2 d-none"></i>
                                        </span>
                                    </div>
                                    <!--end::Input wrapper-->
                                    <!--begin::Meter-->
                                    <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                    </div>
                                    <!--end::Meter-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Hint-->
                                <div class="text-muted" data-kt-translate="sign-up-hint">Use 8 or more characters with a mix of letters, numbers & symbols.</div>
                                <!--end::Hint-->
                                <?php if (isset(session('errors')['password'])) : ?>
                                    <div class="text-danger"><?= session('errors')['password'] ?></div>
                                <?php endif; ?>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <input class="form-control form-control-lg form-control-solid" type="password" placeholder="Confirm Password" name="confirm-password" autocomplete="off" data-kt-translate="sign-up-input-confirm-password" />
                                <?php if (isset(session('errors')['confirm-password'])) : ?>
                                    <div class="text-danger"><?= session('errors')['confirm-password'] ?></div>
                                <?php endif; ?>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Actions-->
                            <div class="d-flex flex-stack">
                                <!--begin::Submit-->
                                <button id="kt_sign_up_submit" class="btn btn-primary">
                                    <!--begin::Indicator label-->
                                    <span class="indicator-label">Submit</span>
                                    <!--end::Indicator label-->
                                    <!--begin::Indicator progress-->
                                    <!-- <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span> -->
                                    <!--end::Indicator progress-->
                                </button>
                                <!--end::Submit-->
                            </div>
                            <!--end::Actions-->
                        </form>

                        <!--end::Form-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <!-- <div class="m-0">
                        
                        <button class="btn btn-flex btn-link rotate" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
								<img data-kt-element="current-lang-flag" class="w-25px h-25px rounded-circle me-3" src="<?= base_url() ?>assetss/media/flags/united-states.svg" alt="" />
								<span data-kt-element="current-lang-name" class="me-2">English</span>
								<i class="ki-duotone ki-down fs-2 text-muted rotate-180 m-0"></i>
							</button>
                        
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4" data-kt-menu="true" id="kt_auth_lang_menu">
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="English">
                                    <span class="symbol symbol-20px me-4">
											<img data-kt-element="lang-flag" class="rounded-1" src="<?= base_url() ?>assetss/media/flags/united-states.svg" alt="" />
										</span>
                                    <span data-kt-element="lang-name">English</span>
                                </a>
                            </div>
                            
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="Spanish">
                                    <span class="symbol symbol-20px me-4">
											<img data-kt-element="lang-flag" class="rounded-1" src="<?= base_url() ?>assetss/media/flags/spain.svg" alt="" />
										</span>
                                    <span data-kt-element="lang-name">Spanish</span>
                                </a>
                            </div>
                           
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="German">
                                    <span class="symbol symbol-20px me-4">
											<img data-kt-element="lang-flag" class="rounded-1" src="<?= base_url() ?>assetss/media/flags/germany.svg" alt="" />
										</span>
                                    <span data-kt-element="lang-name">German</span>
                                </a>
                            </div>
                            
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="Japanese">
                                    <span class="symbol symbol-20px me-4">
											<img data-kt-element="lang-flag" class="rounded-1" src="<?= base_url() ?>assetss/media/flags/japan.svg" alt="" />
										</span>
                                    <span data-kt-element="lang-name">Japanese</span>
                                </a>
                            </div>
                            
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="French">
                                    <span class="symbol symbol-20px me-4">
											<img data-kt-element="lang-flag" class="rounded-1" src="<?= base_url() ?>assetss/media/flags/france.svg" alt="" />
										</span>
                                    <span data-kt-element="lang-name">French</span>
                                </a>
                            </div>
                            
                        </div>
                       
                    </div> -->
                    <!--end::Footer-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Aside-->
            <!--begin::Body-->
            <div class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat" style="background-image: url(<?= base_url() ?>assetss/media/auth/3.png)"></div>
            <!--begin::Body-->
        </div>
        <!--end::Authentication - Sign-up-->
    </div>
    <!--end::Root-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "<?= base_url() ?>assetss/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="<?= base_url() ?>assetss/plugins/global/plugins.bundle.js"></script>
    <script src="<?= base_url() ?>assetss/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Custom Javascript(used for this page only)-->
    <!-- <script src="<?= base_url() ?>assetss/js/custom/authentication/sign-up/general.js"></script> -->
    <!-- <script src="<?= base_url() ?>assetss/js/custom/authentication/sign-in/i18n.js"></script> -->
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>