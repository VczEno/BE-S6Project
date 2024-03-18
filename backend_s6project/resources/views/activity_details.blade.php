<?php 
var_dump($activity)
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        
            
                <div class='p-3 border'>
                    <h1>{{$activity['title']}}</h1>
                    <p>id= {{$activity['id']}}, user_id={{$activity['user_id']}}, Project= {{$activity['project']->title}}</p> <!-- posso avere accesso ai dettagli del progetto a cui appertiene l'attività -->
                    <p>Description: {{$activity['description']}}</p>

                  
                    
                </div>
            
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>