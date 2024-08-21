<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
	<base href="../../" />
	<title>Dashboard</title>
	<meta charset="utf-8" />
	<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
	<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template by KeenThemes" />
	<meta property="og:url" content="https://keenthemes.com/metronic" />
	<meta property="og:site_name" content="Metronic by Keenthemes" />
	<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
	<link rel="shortcut icon" href="<?= base_url() ?>assetss/media/logos/rounded_logo_brand.png" />
	<!--begin::Fonts(mandatory for all pages)-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Vendor Stylesheets(used for this page only)-->
	<link href="<?= base_url() ?>assetss/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
	<link href="<?= base_url() ?>assetss/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assetss/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
	<script>
		// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
	</script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
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
	<!--begin::App-->
	<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
		<!--begin::Page-->
		<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
			<!--begin::Header-->
			


			<?= view('user/head') ?>
			<?= $this->renderSection('content') ?>
			<?= view('user/leftsidebar') ?>
			<?= view('pre/toast_view') ?>
			<?= view('user/foot') ?>
			<!--end::Modal - Invite Friend-->
			<!--end::Modals-->
			<!--begin::Javascript-->
			<script>
				var hostUrl = "<?= base_url() ?>assetss/";
			</script>
			<!--begin::Global Javascript Bundle(mandatory for all pages)-->
			<script src="<?= base_url() ?>assetss/plugins/global/plugins.bundle.js"></script>
			<script src="<?= base_url() ?>assetss/js/scripts.bundle.js"></script>
			<!--end::Global Javascript Bundle-->
			<!--begin::Vendors Javascript(used for this page only)-->
			<script src="<?= base_url() ?>assetss/plugins/custom/datatables/datatables.bundle.js"></script>
			<!--end::Vendors Javascript-->
			<!--begin::Custom Javascript(used for this page only)-->
			<script src="<?= base_url() ?>assetss/js/custom/pages/user-profile/general.js"></script>
			<script src="<?= base_url() ?>assetss/js/widgets.bundle.js"></script>
			<script src="<?= base_url() ?>assetss/js/custom/widgets.js"></script>
			<script src="<?= base_url() ?>assetss/js/custom/apps/chat/chat.js"></script>
			<script src="<?= base_url() ?>assetss/js/custom/utilities/modals/upgrade-plan.js"></script>
			<script src="<?= base_url() ?>assetss/js/custom/utilities/modals/create-app.js"></script>
			<script src="<?= base_url() ?>assetss/js/custom/utilities/modals/offer-a-deal/type.js"></script>
			<script src="<?= base_url() ?>assetss/js/custom/utilities/modals/offer-a-deal/details.js"></script>
			<script src="<?= base_url() ?>assetss/js/custom/utilities/modals/offer-a-deal/finance.js"></script>
			<script src="<?= base_url() ?>assetss/js/custom/utilities/modals/offer-a-deal/complete.js"></script>
			<script src="<?= base_url() ?>assetss/js/custom/utilities/modals/offer-a-deal/main.js"></script>
			<script src="<?= base_url() ?>assetss/js/custom/utilities/modals/create-campaign.js"></script>
			<script src="<?= base_url() ?>assetss/js/custom/utilities/modals/users-search.js"></script>
			<!--end::Custom Javascript-->
			<!--end::Javascript-->
</body>
<!--end::Body-->

</html>