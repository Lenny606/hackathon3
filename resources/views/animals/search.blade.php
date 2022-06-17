<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Animal</title>
</head>
<body>

    <h1>Results</h1>
   
    {{-- <h1>{{$result->name}}</h1> --}}
    {{-- 
{{-- 
    <form action="{{ route('search') }}" method="get">

        <input
            type="text"
            name="search"
            value="{{ $result }}"
        >

        <button>Search</button> --}}

        {{-- this is really hidden from the outside --}}

    {{-- </form> --}}

    <ul>
        @foreach ($result as $animal)
            <li>
                <a href="{{route('animal.detail', $animal->id)}}"> 
                     {{ $animal->name }}
                    ({{ $animal->age }})
                    ({{ $animal->weight }})
                </a>
            </li>
        @endforeach
    </ul> 

</body>
</html>