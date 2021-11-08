<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white antialiased' ); ?>>

<?php do_action( 'silva_salinas_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'silva_salinas_header' ); ?>
	

	<header class="page-header">
		<div>
			<div class="flex flex-row justify-between items-center container mx-auto">
				<div class="">
					<div class="logo"><a href="https://silvasalinas.com" rel="home"> <svg viewBox="0 0 392 64" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Silva Salinas, a law firm in Essex County, Massachusetts" class=""><title>Silva Salinas</title> <desc>A law firm in Essex County, Massachusetts</desc> <g class="wordmark" transform="translate(102.412 11.387)"> <path d="M0 25.342h6.88c.05 2.478 2.427 4.508 5.596 4.508 3.067 0 5.097-1.585 5.097-4.012 0-1.88-1.386-3.216-4.293-4.11l-4.156-1.17C1.65 18.58.312 14.072.312 11.005.312 4.913 5.561.859 12.094.859c6.435 0 11.387 3.902 11.387 10.396h-6.9c0-2.424-1.681-4.293-4.651-4.293-2.673 0-4.703 1.631-4.703 3.902 0 .84.246 2.623 3.813 3.614l3.809 1.062c5.151 1.44 9.666 4.16 9.666 9.95 0 6.783-5.791 10.35-12.226 10.35C5.003 35.832 0 31.383 0 25.342zM27.93 4.304c0-2.177 1.88-3.86 4.109-3.86 2.228 0 4.105 1.683 4.105 3.86a3.996 3.996 0 0 1-4.105 3.903c-2.228.008-4.11-1.725-4.11-3.903zm.878 8.02h6.486v23.071h-6.486V12.324z"></path> <path d="M40.577561 2.13162821e-14L47.0595122 2.13162821e-14 47.0595122 35.395122 40.577561 35.395122z"></path> <path d="M74.7590244 12.3239024L65.0029268 35.395122 59.2117073 35.395122 49.4556098 12.3239024 56.48 12.3239024 62.1229268 27.075122 67.6682927 12.3239024z"></path> <path d="M100.062 12.324v23.071h-6.474v-2.872c-1.63 2.275-4.85 3.317-7.414 3.317-5.944 0-11.337-4.605-11.337-12.031 0-7.427 5.374-12.028 11.337-12.028 2.673 0 5.79.988 7.414 3.318v-2.775h6.474zm-6.68 11.485a5.99 5.99 0 1 0-5.99 5.99 5.963 5.963 0 0 0 5.99-5.99z"></path> <path d="M123.566829 2.32585366L127.676098 2.32585366 113.627317 35.84 109.475122 35.84z"></path> <path d="M132.367 25.342h6.88c.05 2.478 2.427 4.508 5.596 4.508 3.067 0 5.097-1.585 5.097-4.012 0-1.88-1.386-3.216-4.293-4.11l-4.16-1.17c-7.473-1.978-8.812-6.486-8.812-9.553 0-6.092 5.249-10.146 11.782-10.146 6.435 0 11.387 3.902 11.387 10.396h-6.892c0-2.424-1.686-4.293-4.655-4.293-2.674 0-4.703 1.631-4.703 3.902 0 .84.25 2.623 3.813 3.614l3.813 1.062c5.147 1.436 9.65 4.156 9.65 9.947 0 6.782-5.791 10.35-12.226 10.35-7.278-.005-12.277-4.454-12.277-10.495zm52.815-13.018v23.071h-6.485v-2.872c-1.636 2.275-4.851 3.317-7.415 3.317-5.94 0-11.317-4.605-11.317-12.031 0-7.427 5.397-12.028 11.317-12.028 2.673 0 5.791.988 7.415 3.318v-2.775h6.485zm-6.684 11.485a5.99 5.99 0 1 0-5.99 5.99 5.963 5.963 0 0 0 5.99-5.99z"></path> <path d="M190.462439 2.13162821e-14L196.948293 2.13162821e-14 196.948293 35.395122 190.462439 35.395122z"></path> <path d="M201.296 4.304c0-2.177 1.88-3.86 4.109-3.86 2.228 0 4.086 1.683 4.086 3.86a3.996 3.996 0 0 1-4.11 3.903c-2.212.008-4.085-1.725-4.085-3.903zm.893 8.02h6.482v23.071h-6.49l.008-23.071zm34.283 10.396v12.675h-6.486v-11.98c0-3.665-2.177-5.3-4.406-5.3-2.341 0-5.198 1.241-5.198 5.464V35.41h-6.485V12.324h6.485v3.863c.988-3.122 4.652-4.456 6.931-4.456 6.037 0 9.206 4.058 9.16 10.989zm28.913-10.396v23.071H258.9v-2.872c-1.636 2.275-4.851 3.317-7.415 3.317-5.94 0-11.337-4.605-11.337-12.031 0-7.427 5.397-12.028 11.337-12.028 2.673 0 5.791.988 7.415 3.318v-2.775h6.485zm-6.684 11.485a5.99 5.99 0 1 0-5.99 5.99 5.963 5.963 0 0 0 5.99-5.99zm10.704 4.16h6.088c0 1.334 1.14 2.77 3.414 2.77 1.881 0 3.317-.78 3.317-2.126 0-.992-.78-1.487-2.524-1.952l-3.068-.741c-5.94-1.584-6.732-4.901-6.732-7.329 0-3.563 3.712-6.88 9.058-6.88 4.207 0 9.16 2.08 9.108 7.524h-6.189c0-1.534-1.284-2.376-2.821-2.376-1.538 0-2.674.741-2.674 1.931 0 1.089.992 1.635 2.28 1.979l3.804 1.014c5.542 1.487 6.244 4.953 6.244 6.834 0 4.85-4.948 7.227-9.701 7.227-4.851-.012-9.557-2.779-9.604-7.875z"></path> </g> <path class="glyph" d="M31.984 6.373l32.61 16.304V0H.877v19.489l53.034 26.536a25.655 25.655 0 0 1-4.394 5.015L.878 26.7v5.156c0 17.593 14.262 31.855 31.856 31.855 17.593 0 31.855-14.262 31.855-31.855v-1.952L17.557 6.373h14.427zm26.236 0v5.994L46.228 6.373H58.22zm-25.486 50.97c-11.972-.015-22.325-8.348-24.898-20.04l35.477 17.74a25.366 25.366 0 0 1-10.58 2.3zm24.035-17.03L7.25 15.55V8.34L58.146 33.79a25.292 25.292 0 0 1-1.377 6.521z"></path> </svg> </a></div>
				</div>
				<div class="block md:hidden relative" x-data="{ isOpen: false }">
						<button
							@click="isOpen = !isOpen"
							type="button"
							class="block lg:hidden px-2 text-gray-500"
						>
							<svg
							class="h-6 w-6 fill-current"
							xmlns="http://www.w3.org/2000/svg"
							viewBox="0 0 24 24"
							>
							<path
								x-show="isOpen"
								fill-rule="evenodd"
								clip-rule="evenodd"
								d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"
							/>
							<path
								x-show="!isOpen"
								fill-rule="evenodd"
								d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
							/>
							</svg>
						</button>
						<div class="flex flex-col space-y-6 space-x-0 md:space-y-0 md:space-x-6 justify-between w-80 absolute top-8 right-0 p-10 rounded-lg shadow-lg bg-white z-10" x-cloak x-show="isOpen">
							<div class="links"><a href="/team/">Team</a></div>
							<div class="links"><a href="/services/">Services</a></div>
							<div class="links"><a href="/results/">Results</a></div>
							<div class="links"><a href="mailto:info@silvasalinas.com">info@silvasalinas.com</a></div>
						</div>
				</div>
				<div class="hidden md:flex flex-row space-x-6 justify-between w-64">
					<div class="links"><a href="/team/">Team</a></div>
					<div class="links"><a href="/services/">Services</a></div>
					<div class="links"><a href="/results/">Results</a></div>
				</div>
			</div>
		</div>
	</header>

	<div id="content" class="site-content flex-grow">


		<?php do_action( 'silva_salinas_content_start' ); ?>

		<main>
