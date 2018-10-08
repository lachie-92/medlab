<?php $errorMessages = unserialize($errorMessages); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Medlab - CommWeb Receipt Error</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

<p>
    A CommWeb Receipt with error has been received.
</p>

<p>
    @foreach ($errorMessages as $key => $message)
        {{ $key }} : {{ $message }} <br>
    @endforeach
</p>


</body>
</html>




