<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        img {
            max-width: 200px;
            height: auto;
            display: block;
            margin: 10px 0;
        }
    </style>
</head>
<body>

    <h1>EVENT DETAILS</h1>
    <a href="{{ route('dashboard.index') }}">Back to Dashboard List</a>
    <br />
    Event: {{ $activity->event }} <br />
    Tanggal Event: {{ $activity->tanggalevent }} <br />
    Deskripsi: {{ $activity->deskripsi }} <br />
    Foto: <img src="{{ asset('storage/' . $activity->foto) }}" alt="Dashboard Image">

</body>
</html>

