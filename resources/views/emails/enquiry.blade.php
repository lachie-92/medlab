<?php $enquiry = unserialize($enquiry); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Medlab Registratioin approved</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

Name: {{ $enquiry['name'] }} <br>
Email: {{ $enquiry['email'] }} <br>
Phone: {{ $enquiry['phone'] }} <br>
<br>
Enquiry: <br>
{{ $enquiry['enquiry'] }}

</body>
</html>




