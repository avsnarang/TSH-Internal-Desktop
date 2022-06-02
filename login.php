<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="overflow.css">
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<meta name="google-signin-client_id" content="584175274872-hlf4ccq2q15ki7ua6h2sanijnind4lj9.apps.googleusercontent.com">
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<meta charset="UTF-8">
	<title>Login Page</title>
</head>
<body>
<div class="bg-img">
	<div class="content">
		<header>Login with</header>
		<div class="g-signin2" data-onsuccess="onSignIn"></div>
		<script>
			function onSignIn(googleUser) {
				var profile = googleUser.getBasicProfile();
				var email, user_dep;
				console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
				console.log('Name: ' + profile.getName());
				email = profile.getEmail(); // This is null if the 'email' scope is not present.
				user_dep = profile.getDepartment();
				console.log (user_dep);
				if (email === "admin@tsh.edu.in") {
					window.location="homepage.html";
				}
				else {
					window.location="wrong.html";
				}
			}
		</script>
	</div>
</div>
</body>
</html>