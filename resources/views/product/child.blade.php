@extends('.app')

@section('title', 'page child')

@section('search')
    @parent
    <h3>This is search page</h3>
@endsection
