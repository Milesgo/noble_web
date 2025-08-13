<html>
<body>
	<a href="<?= 'https://accounts.google.com/o/oauth2/v2/auth?scope=https://www.googleapis.com/auth/androidpublisher&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online' ?>">Login with Google</a>
</body>
</html>