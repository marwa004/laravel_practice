 
@extends('hello')
@section('content')
<body>
  <foreach>
    ($clients as $client)
   {{ $clients->content}}
   </foreach>
</body>
@stop