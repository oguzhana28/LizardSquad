<!DOCTYPE html>
<html lang="en">
<head>
    <title>about</title>
</head>
<body>

       @foreach($tasks as $task)
       
       <li>{{ $task->body }}</li>
       
        @endforeach
         
     
    
</body>
</html>