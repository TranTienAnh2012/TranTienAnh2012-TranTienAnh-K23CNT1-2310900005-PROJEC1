<div>
    <h1> #Lad4 This is header component </h1>
    <h2> #Lad4 Welcome to, {{$name}}</h2>
    <h3> lad4 Fruits are: </h3>
    <ul>
        @foreach ($fruits as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
</div>