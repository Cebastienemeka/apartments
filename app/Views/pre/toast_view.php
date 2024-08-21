<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/fontawesome/css/all.min.css">
<?php
$session = \Config\Services::session();

?>
<div id="toast_flashdata" class="<?php
									if ($session->getFlashdata(SUCCESS)) {
										echo 'success';
									} elseif ($session->getFlashdata(INFO)) {
										echo 'info';
									} elseif ($session->getFlashdata(WARNING)) {
										echo 'warning';
									} elseif ($session->getFlashdata(ERROR)) {
										echo 'error';
									}
									?>" onclick="close_toast_flashdata()">
	<div id="img_flashdata">
		<i class="fa <?php
						if ($session->getFlashdata(SUCCESS)) {
							echo 'fa-check-double';
						} elseif ($session->getFlashdata(INFO)) {
							echo 'fa-info-circle';
						} elseif ($session->getFlashdata(WARNING)) {
							echo 'fa-exclamation-triangle';
						} elseif ($session->getFlashdata(ERROR)) {
							echo 'fa-times';
						}
						?>"></i>
	</div>
	<div id="desc_flashdata"> <?php
								if ($session->getFlashdata(SUCCESS)) {
									echo $session->getFlashdata(SUCCESS);
								} elseif ($session->getFlashdata(INFO)) {
									echo $session->getFlashdata(INFO);
								} elseif ($session->getFlashdata(WARNING)) {
									echo $session->getFlashdata(WARNING);
								} elseif ($session->getFlashdata(ERROR)) {
									echo $session->getFlashdata(ERROR);
								} else {
									echo "";
								} ?></div>
</div>
<style>
	#toast_flashdata {
		display: flex;
		opacity: 0;
		visibility: hidden;
		width: 350px;
		background-color: #343434;
		color: white;
		position: fixed;
		top: 0;
		left: 50%;
		transform: translateX(-50%);
		z-index: 99999999999;
	}

	#toast_flashdata #img_flashdata {
		width: 50px;
		height: auto;
		padding: 16px 0;
		display: flex;
		justify-content: center;
		align-items: center;
		box-sizing: border-box;
		background-color: #111;
		color: #fff;
		word-break: break-word;

	}

	#toast_flashdata #desc_flashdata {
		color: #fff;
		padding: 16px;
		white-space: pre-wrap;
		overflow-wrap: break-word;
	}

	@keyframes fadein {
		from {
			opacity: 0;
			top: 0
		}

		to {
			top: 40px;
			visibility: visible;
			opacity: 1;
		}
	}

	@keyframes stay {
		from {
			top: 40px;
			opacity: 1;
			visibility: visible;

		}

		to {
			top: 40px;
			visibility: visible;

			opacity: 1;
		}
	}

	@keyframes fadeout {
		from {
			top: 40px;
			visibility: visible;
			opacity: 1;
		}

		to {
			top: 0px;
			opacity: 0;
		}
	}


	.blshow {
		animation: fadein 0.5s, stay 5.5 1s 0.5s, fadeout 0.5s 5.5s;
	}

	.success {
		background-color: #00c651 !important;
	}

	.success #img_flashdata {
		background-color: #008543 !important;
	}

	.info {
		background-color: #0077c6 !important;
	}

	.info #img_flashdata {
		background-color: #004b85 !important;
	}

	.warning {
		background-color: #ff8800 !important;
	}

	.warning #img_flashdata {
		background-color: #ff6701 !important;
	}

	.error {
		background-color: #cc0000 !important;
	}

	.error #img_flashdata {
		background-color: #8f081f !important;
	}
</style>

<script>
	let toast_flashdata_is_up = false;
	var x = document.getElementById("toast_flashdata");
	console.log('<?= $session->getFlashdata(ERROR) ?>')

	function launch_toast_flashdata() {
		x.classList.add("blshow");
		toast_flashdata_is_up = true;
		// setTimeout(function () {
		//     close_toast_flashdata()
		// }, 6000);
	}

	function close_toast_flashdata() {
		console.log("Close Flash Data");
		if (toast_flashdata_is_up) {
			x.className = x.className.replace("blshow", "");
			toast_flashdata_is_up = false;
		}
	}

	<?php if ($session->getFlashdata(SUCCESS) || $session->getFlashdata(INFO) || $session->getFlashdata(WARNING) || $session->getFlashdata(ERROR)) { ?>
		setTimeout(function() {
			launch_toast_flashdata()
		}, 800)
	<?php } ?>
</script>

<?php
unset($_SESSION[SUCCESS]);
unset($_SESSION[ERROR]);
unset($_SESSION[INFO]);
unset($_SESSION[WARNING]);
?>