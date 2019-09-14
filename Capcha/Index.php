<html>
<head>
    <title>Capcha valid code</title>
</head>
<body>
<form method="post" action="Process.php">
    <div class="row">
        <img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" />
    </div>
    <div class="code">
        <input type="text" name="captcha_code" size="10" maxlength="6" />
        <a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a>
        <p><input type="submit" name="comfirm">  </p>
</form>
</div>
</body>
</html>
<?php
