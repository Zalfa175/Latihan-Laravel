<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $nama }}</title>
</head>
<body>
    Ini adalah halaman login di folder admin - {{ $nama }}

    {{-- If --}}

    @if($lampu == 1)
        <h2>Lampu Menyala</h2>
    @else
        <h2>Lampu Mati</h2>
    @endif

    {{-- env --}}
    {{ $kelas }}
    {{-- supaya tag html juga dirender --}}
    {!! $kelas !!}

    {{-- switch (mirip if) --}}
    @switch($nilai)
        @case('A')
            <h3>Memuaskan</h3>
        @break

        @case('B')
            <h3>Baik</h3>
        @break
        
        @case('C')
            <h3>Cukup</h3>
        @break
        
        @default
            <h3>Kurang</h3>
        @break
    @endswitch

    {{-- for --}}
    <ul>
        @for($i = 1; $i <= $limit; $i++)
            <li>{{ $i }}</li>
        @endfor
    </ul>

    {{-- foreach --}}
    <ul>
        @foreach($hobbies as $hobi)
            <li>{{ $hobi }}</li>
        @endforeach
    </ul>
</body>
</html>