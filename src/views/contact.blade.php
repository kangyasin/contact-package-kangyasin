<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact US</title>
</head>
<body>
    <h1>Contact Form</h1>
    <form action="{{route('contact')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="your name please">
        <input type="email" name="email" placeholder="your valid email">
        <textarea name="message" id="" cols="30" rows="10" placeholder="your message"></textarea>
        <input type="submit" value="submit message">

    </form>
</body>
</html>
