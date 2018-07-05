<html>
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>تماس با ما</title>
		</head>
		<body style="font-family:tahoma; font-size:12px">
		<?php
		@$ip= $_SERVER['REMOTE_ADDR'];

		@$Name = addslashes($_POST['Name']);

		@$EMail = addslashes($_POST['E-Mail']);

		@$Title = addslashes($_POST['Title']);

		@$Message = addslashes($_POST['Message']);

		if (strlen($Name) == 0 )

		{

		die("لطفا نام و نام خانوادگی خود را وارد نمایید");

		}

		if (! preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $EMail))

		{

		die("آدرس پست الکترونیک شما معتبر نمی باشد لطفا آن را بررسی نموده و دوباره امتحان کنید");

		}

		if (strlen($EMail) == 0 )

		{

		die("لطفا آدرس پست الکترونیک خود را وارد نمایید");

		}

		if(strlen($Message)==0)

		{

		die("لطفا متن پیام را وارد نمایید");

		}

		$header = "From: $EMail\n"

		. "Reply-To: $EMail\n";
		$header .= "Content-Type: text/html; charset=UTF-8\n";
		$subject = '=?UTF-8?B?'.base64_encode($Title).'?=';
		$email_to = "elhamsoltani1373@gmail.com";
		$message = "آی پی مخاطب: $ip"."<br />"

		. "نام و نام خانوادگی: $Name"."<br>"

		. "پست الکترونیک: $EMail"."<br>"

		. "موضوع پیام: $Title"."<br>"

		. "متن پیام: $Message"."<br>";

		@mail($email_to, $subject ,$message ,$header ) ;

		echo("☺☺ .با تشکر ، پیام شما با موفقیت ارسال گردید");

		?>
		</body>
</html>
