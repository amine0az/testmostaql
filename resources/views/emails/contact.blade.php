<html>
    <head>
        <title>New message from {{$request->name}}</title>
    </head>
    <body>
        <strong>You have new message from the contact form</strong><br>
        name : <b>{{$request->name}}</b><br>
        email : <b>{{$request->email}}</b><br>
        phone: <b>{{$request->phone}}</b><br>
        Country: <b>{{$request->countries}}</b><br>
        <b>Message:</b> 
        <hr>
        <p>{{$request->message}}</p>
    </body>
</html>

