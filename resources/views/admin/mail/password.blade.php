<!doctype html>
<html lang="en">
<body>
<div>
    <p>Dear {{$user->name}},</p>
    <p>Please click the following link to reset your password.</p>
    <a href="{{route('password.show',$user->email_verification_token)}}" class="btn btn-primary">Click Here</a>
    <h2>OR Copy the link</h2>
    <P>{{route('password.show',$user->email_verification_token)}}</P>
    <br>
    <p>Thanks!</p>
</div>
</body>
</html>

