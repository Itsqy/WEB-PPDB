<!DOCTYPE html>

<html>

<head>

    <title>Hi</title>

</head>

<body>

    <h1>{{ $title }}</h1>

    <p>{{ $date }}</p>
    @foreach ($formulir as $f)
        <p>{{ $f->full_name }}.</p>
        <p>{{ $f->phone }}</p>
        <p>{{ $f->email }}</p>
        <p>{{ $f->address }}</p>
        <p>{{ $f->nisn }}</p>
        <p>{{ $f->nilai }}</p>
        {{-- <td>
            <img src="{{ url('storage/' . $f->photo) }}" alt=""
                style="max-width: 100px !important; border-radius:5px;">

        </td> --}}
    @endforeach


</body>

</html>
