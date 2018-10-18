@extends ('layouts.master')

@section('title', 'Registration')

@section('sidebar')
 @parent
   <p>append to left sidebar</p>
 @endsection

 @section('content')
    <p>This is my body content.</p>
@endsection