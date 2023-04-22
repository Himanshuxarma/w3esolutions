<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W3esolutions</title>
</head>
<body>
<h2>Hey, It's me {{ $enquiryReply->full_name }}</h2> 

<br>

    

<strong>User Emails: </strong><br>

<strong>full_name: </strong>{{ $enquiryReply->full_name }} <br>

<strong>Email: </strong>{{ $enquiryReply->email }} <br>

<strong>Phone: </strong>{{ $enquiryReply->phone }} <br>

<strong>Subject: </strong>{{ $enquiryReply->subject }} <br>

<strong>Message: </strong>{{ $enquiryReply->message }} <br><br>

<strong>Reply: </strong>{{ $enquiryReply->reply }} <br><br>

  

Thank you
    
</body>
</html>