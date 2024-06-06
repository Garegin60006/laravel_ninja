@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza Listss
        </div>
        @if($age && $name)
        {{ $age }} - {{ $name }}
        @endif
        @for($i = 0; $i < count($pizzas); $i++) {{ $pizzas[$i]['type'] }} @endfor <br><br><br>

            @foreach($pizzas as $pizza)
            <div>
                @if($loop->first)
                <p>this is first element</p>
                @elseif($loop->last)
                <p>this is last element</p>
                @endif
                {{ $loop->index }} {{ $pizza['type'] }} - {{ $pizza['base'] }} - {{ $pizza['price'] }}
            </div>
            @endforeach

    </div>
</div>
@endsection