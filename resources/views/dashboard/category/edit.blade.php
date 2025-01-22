@extends('dashboard.master')

@section('content')
     <h4>Categorías</h4>
    @include('dashboard.fragment._errors-form')

   <form action="{{ route('category.update', $category->id) }}" method="post">
        @method('PATCH')
        @include('dashboard.category._form', [ 'task'=>'edit' ])
   </form>
@endsection