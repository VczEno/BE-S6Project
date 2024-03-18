@extends('layouts.template')
@section('title', 'Project List') <!-- provare a inserire nome utente loggato -->
@section('content')
        @if($project)
            @foreach($project as $p) 
                    <div class="card m-5" >
                        <div class="row g-0">
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title display-5">{{$p['title']}}</h5>
                                    <p class="card-text"><span class='fw-semibold text-decoration-underline'>Description:</span> {{$p['description']}}</p>
                                    
                                    <p><span class='fw-semibold text-decoration-underline'>Creation date:</span> {{substr($p['created_at'], 0, -9 )}}</p>
                                    <p><span class='fw-semibold text-decoration-underline'>Deadline:</span> {{$p['deadline']}}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="card-body">
                                <div class='d-flex justify-content-between align-items-center'>
                                    <h5 class="card-title ">Activities</h5>
                                    <a type="button" class="btn btn-outline-success" href="/activity/create?project_id={{$p['id']}}"><i class="bi bi-plus"></i></a>
                                </div>
                                    
                                    @if($p['activities'])
                                        <ul>
                                            @foreach($p['activities'] as $a)
                                                <li>
                                                    {{$a['title']}}
                                                    <!-- <a type="button" class="btn btn-outline-info" href="/activity/{{$a->id}}">Info</a>
                                                    <a type="button" class="btn btn-outline-warning" href="/activity/{{$a->id}}/edit">Edit</a>
                                                    <a type="button" class="btn btn-outline-danger" href="/activity/{{$a->id}}/destroy">Delete</a> -->
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                
                                <a type="button" class="btn btn-outline-dark mx-3 px-4" href="/project/{{$p->id}}"><i class="bi bi-eye-fill"></i></a>
                                <a type="button" class="btn btn-outline-warning mx-3 px-4" href="/project/{{$p->id}}/edit"><i class="bi bi-pencil-square"></i></a>
                                <a type="button" class="btn btn-outline-danger mx-3 px-4" href="/project/{{$p->id}}/destroy"><i class="bi bi-trash3-fill"></i></a>
                        
                            </div>
                        </div>
                    </div>

                   
            @endforeach
        @endif
@endsection
    
   