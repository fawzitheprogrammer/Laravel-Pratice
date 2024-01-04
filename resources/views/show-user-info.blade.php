<html>
    <head>
 
     <style>
        ol li {
    background: #cce5ff;
    color: darkblue;
    margin: 5px;
  }
     </style>
    </head>

    <body>
        @if ($username=='Fawzi Gharib' && $password == '1234')
        <h1>This is an ordered list </h1>
        <ol >
            <li>
                Username : {{$username}}
            </li>
            <li>
                Username : {{$password}}
            </li>
        </ol>
        @else
            <h1>
                Username or password is incorrect.
            </h1>
        @endif
    </body>
</html>