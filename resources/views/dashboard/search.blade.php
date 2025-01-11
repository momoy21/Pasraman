<h1>EVENT DETAILS</h1>
<a href="{{ route('activity.index') }}">Back to Dashboard List</a>
<br />
Event: {{ $activity->event }} <br />
Tanggal Event: {{ $activity->tanggalevent }} <br />
Deskripsi: {{ $activity->deskripsi }} <br />
Foto: <img src="{{ asset($activity->foto) }}" alt="Activity Image">
