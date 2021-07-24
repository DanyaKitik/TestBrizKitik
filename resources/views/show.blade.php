@extends('layout')
@section('content')
    @csrf
    <div class="container, show">
        @forelse($users as $user)
            <div class="row" style="border: solid black 2px; padding: 5px">
                <div class="col-2" style="text-align: center"><button  type="button" class="btn btn-primary update" id="{{$user->id}}" data-bs-toggle="modal" data-bs-target="#update">Update</button></div>
                <div class="col-3">
                    <div style="text-align: center">
                        <div><span style="float: left">{{$user->id}}</span>  {{$user->name}} {{$user->lastname}}</div>
                    </div>
                </div>
                <div class="col-3">
                    <div style="text-align: center">
                        <div>{{$user->phone_number->number}}</div>
                    </div>
                </div>
                <div class="col-2"><small id="usernameHelp" class="form-text text-muted">{{$user->updated_at->diffForHumans()}}</small></div>
                <div class="col-2" style="text-align: center"><button  type="button" class="btn btn-danger delete" id="{{$user->id}}">Delete</button></div>
            </div>
            <br>
        @empty
            <p>No Ads.</p>
        @endforelse
    </div>
@endsection

@section('paginate')
    <div style="text-align: center">
        <a href="{{$users->previousPageUrl()}}" class="btn btn-primary">Previous</a>
        <a href="{{$users->nextPageUrl()}}" class="btn btn-primary">Next</a>
    </div>
@endsection
