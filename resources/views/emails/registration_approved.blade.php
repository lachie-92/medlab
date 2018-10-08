<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Medlab Registratioin approved</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    Hello, {{ $registration['first_name'] }} {{ $registration['last_name'] }} <br>
    <br>
    Your registration has been approved. Please click on the following link to login. <br>
    <a href="{{ url('/account/') }}" mc:disable-tracking>Login to your account</a>
</body>
</html>




