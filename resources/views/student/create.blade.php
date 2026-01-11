<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/store" method="post">
        @csrf
       <label for="name">name:</label> <input type="text" placeholder="enter your name" name='name'>
       <label for="address">address</label> <input type="text" placeholder="enter your address" name='address'>
       <label for="age">age:</label> <input type="number" placeholder="enter your age" name='age'>
       <label for="phone_number">phone number:</label> <input type="text" placeholder="enter your phone number" name='phone_number'>
        <button type="submit">Submit</button>
    </form>
</body>
</html>