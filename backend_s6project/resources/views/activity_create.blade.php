@extends('layouts.template')
@section('title', 'Add a new Activity')
@section('content')
            

       
        <form method="post" action="/activity">
        @csrf
        <div class="mb-3">
            <input type="text" name="title" class="form-control" placeholder="Title...">
            <input type="hidden" name="project_id" value='{{$project_id}}' >
        </div>
        <div class="mb-3">
            <input type='textarea' class="form-control" name="description" placeholder="Leave a project here"/>
        </div>
       
        <button type="submit" class="btn btn-outline-dark">Add Activity</button>
    </form>
    
@endsection