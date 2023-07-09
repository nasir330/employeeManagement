<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Dear {{ $user->employees->firstName. ' '.$user->employees->lastName }},

    <p>
        You have been invited to complete your profile on our system application. Please use the following login details
        to access your account to complete your profile:
    </p>

    <p style="padding:10px; border:0.5px solid gray; background-color:lightgray; font-size:14px; width:30%;">
        Email: {{ $user->email }} <br>
        Password: {{ $password }}
    </p>

    <p>
        <button style="width:25%; padding:10px; background-color:#222; border-radius:5px 5px 5px 5px;"><a
                style="text-transform:uppercase; color:#fff; font-size:15px;"
                href="{{route('login')}}">Go-to Page</a></button>
    </p>
    <p>
        <strong>We recommend that you change your password after your first login.</strong>
    </p>
    <p>
        Best regards, <br>
        <em>Author</em> <br>
        <strong>Employee Manage System</strong>
    </p>
</body>

</html>