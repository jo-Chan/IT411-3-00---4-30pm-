<!doctype html>
    <head>
        <title>Laravel</title>
    </head>
            <body>

                <h1> NEW PAGE </h1>
          
                <a href="{{route('about')}}"> About </a>
                <br>
                <a href="{{route('contacts')}}"> Contacts </a>

                <br><br>
                @foreach ($names as $name)
                <a href="{{route('shoutout', array('text'=>$name))}}">{{$name}} </a>
                <br/>
                @endforeach
         </body>
</html>
