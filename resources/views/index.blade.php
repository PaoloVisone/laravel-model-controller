<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
</head>
<body>  
    
        @foreach ($movies as $movie)

        <div class="card">
            <div class="card-body">
                <h2>{{ $movie['title'] }}</h2>
                <h3>{{ $movie['original_title'] }}</h3>
                <p>Data: {{ $movie['date'] }}</p>
                <p>Nazionalità: {{ $movie['nationality'] }}</p>
                <p>Voto: {{ $movie['vote'] }}</p>            
            </div>
        </div>
            
        
            
        @endforeach
    
</body>
</html>