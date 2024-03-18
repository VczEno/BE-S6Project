@extends('layouts.template')
@section('title', 'Add a New Project')
@section('content')
            
       
        <form method="post" action="/project">
        @csrf
        <div class="mb-3">
            <input type="text" name="title" class="form-control" placeholder="Title...">
            <input type="hidden" name="user_id" value='15' >
        </div>
        <div class="mb-3">
            <input type='textarea' class="form-control" name="description" placeholder="Leave a project here"/>
        </div>
       <div class="mb-3">
            <input class="form-control" type="date" name="deadline" >
        </div> 
        <button type="submit" class="btn btn-dark">Add Project</button>
    </form>
    
@endsection