<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W3esolutions</title>
</head>
<body>
<h2>Hey, It's me {{ $careers->name }}</h2> 

<br>

    

<strong>User Emails: </strong><br>

<strong>full_name: </strong>{{ $careers->name }} <br>

<strong>Email: </strong>{{ $careers->email }} <br>

<strong>Phone: </strong>{{ $careers->phone }} <br>

<!-- <strong>Subject: </strong>{{ $careers->subject }} <br>

<strong>Message: </strong>{{ $careers->message }} <br><br> -->

<strong>Reply: </strong>{{ $careers->reply }} <br><br>

  

Thank you
    
</body>
</html>