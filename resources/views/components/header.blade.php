<div>
    <h1>Hola soy el nuevo componente header</h1>
    <h3>Soy la primer variable {{ $name }}</h3>
    <ul>
        @foreach ($fruits as $fruit)
            <li>{{ $fruit }}</li>
        @endforeach
    </ul>
</div>
