<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Medlab - Registration received</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

<p>
    A new Registration has been placed on the Medlab website.
</p>

<p>
    Please login into the <a href="{{ url('/account/') }}" mc:disable-tracking>Admin page</a> to see more details.
</p>

<p>
    Name: {{ $registration['title'] }} {{ $registration['first_name'] }} {{ $registration['last_name'] }} <br>
    Email: {{ $registration['email'] }}
</p>

</body>
</html>

