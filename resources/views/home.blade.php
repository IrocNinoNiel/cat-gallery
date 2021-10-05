@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            {{ __('Dashboard') }}
                        </div>
                        @auth
                            @if(Auth::user()->user_type == 'admin')
                                <div class="col text-right">
                                    <a href="{{ route('cat.add') }}" class="btn btn-primary">Add Records</a>
                                </div>
                                <div class="col text-right">
                                    <a href="{{ route('registeradmin.index') }}" class="btn btn-warning">Add New Admin</a>
                                </div>
                                
                            @endif
                        @endauth
                    </div>
                </div>

                <div class="card-body">
                    @include('inc.message')
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1" onchange="location = this.value;">
                            <option value="/home">Select Cat Species</option>
                            @foreach($cats as $cat)
                                <option value="/show/{{$cat->id}}">{{$cat->name}}
                            @endforeach
                        </select>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
