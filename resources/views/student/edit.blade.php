<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($students as $student )

    <form action="/update/{{ $student->id }}" method="post">
        @csrf
        <label for="name">name:</label> <input type="text" value="{{ $student->name }}" name='name'>
        <label for="address">address</label> <input type="text" value="{{ $student->address }}" name='address'>
        <label for="age">age:</label> <input type="number" value="{{ $student->age }}" name='age'>
        <label for="phone_number">phone number:</label> <input type="text" value="{{ $student->phone_number }}r"
            name='phone_number'>
        <button type="submit">Submit</button>
    </form>
    @endforeach

</body>

</html>