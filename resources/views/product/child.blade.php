@extends('.app')

@section('title', 'page child')

@section('search')
    @parent
    <h3>number: {{ $number }}</h3>
    <p>Hello {!! $name !!}</p>
@endsection
