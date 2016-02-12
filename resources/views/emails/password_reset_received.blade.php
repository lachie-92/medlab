<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Medlab - Account assword reset received</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    <p>An Account Holder has successfully reset his/her account password: </p>
    <p>{{ "Account Login Email: " . $user->email}}</p>
    <p>{{ "Account Type: " . $user->group }}</p>
    <p>{{ "Customer Name:" . $user->customer->name }}</p>
</body>
</html>




