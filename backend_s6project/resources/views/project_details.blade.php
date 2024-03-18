@extends('layouts.template')
@section('title', $project['title'])
@section('content')
            
                
                <div class="card text-center mx-5">
                <div class="card-header d-flex justify-content-between">
                <span>Creation date: <span class='fw-bold'>{{substr($project['created_at'], 0, -9 )}}</span></span>
                <span>Deadline: <span class='fw-bold'>{{$project['deadline']}}</span></span>
                
                </div>
  <div class="card-body text-start">
    <h4 class="card-title display-6">Description</h4>
    <p class="card-text ">{{$project['description']}}</p>
    <hr>
    <div class='d-flex justify-content-between align-items-center'>
    <h4 class="card-title display-6">Activities</h4>
    <a type="button" class="btn btn-outline-success" href="/activity/create?project_id={{$project['id']}}"><i class="bi bi-plus"></i></a>
    </div>
    
    @if($project['activities'])
                    <ul>
                        @foreach($project['activities'] as $a)
                            <li class='mb-4'>
                                <h4>{{$a['title']}}</h4>
                                {{$a['description']}}
                            </li>
                        @endforeach
                    </ul>
                    @endif
  </div>
  <div class="card-footer text-center">
                                
                                <a type="button" class="btn btn-outline-warning mx-3 px-4" href="/project/{{$project->id}}/edit"><i class="bi bi-pencil-square"></i></a>
                                <a type="button" class="btn btn-outline-danger mx-3 px-4" href="/project/{{$project->id}}/destroy"><i class="bi bi-trash3-fill"></i></a>
                        
                            </div>
</div>
                  
                   
                    
                

@endsection
            
        
   