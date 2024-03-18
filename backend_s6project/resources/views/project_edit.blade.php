@extends('layouts.template')
@section('title', 'Edit project: '. $project['title'])
@section('content')
        @if($project)
        <form method="post" action="/project/update">
        @csrf
        <div class="mb-3">
            <input type="text" name="title" class="form-control" placeholder="Title..." value="{{$project['title']}}">
            <input type="hidden" name="id" value="{{$project['id']}}">
        </div>
        <div class="mb-3">
            <input type='textarea' class="form-control" name="description" placeholder="Leave a project here" value='{{$project['description']}}'/>
        </div>
       <!--  <div class="mb-3">
            <input class="form-control" type="date" name="deadline" value="{{$project['deadline']}}">
        </div> -->
        <button type="submit" class="btn btn-dark">Edit Project</button>
    </form>
        @endif
@endsection
