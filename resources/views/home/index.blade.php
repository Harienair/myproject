@extends('layouts.app')

@section('title','home page')

@section('content')
    <h1>hello hari</h1>
    @for($i= 0; $i< 10; $i++)
            <div>
                <h1>value is {{$i}}</h1>
            </div>
        @endfor
 
        <div>
            @php $done=false @endphp
            @while(!$done)
                <div>i am not done</div>
            @php
            if(random_int(0,1) === 1) $done=true
            @endphp
            @endwhile
        </div>
   
@endsection