@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="row p-3">
                    <div class="col-md-4">
                        <img src="{{asset("/img/".$cat->image)}}" class="thumbnail" style="max-width:100%;
                        max-height:100%;">
                    </div>
                    <div class="col-md-8">
                        <h2>{{$cat->name}}</h2>
                        <ul class="list-group">
                            <li class="list-group-item"><strong>Size:</strong> {{$cat->size}}</li>
                            <li class="list-group-item"><strong>Coat:</strong> {{$cat->coat}}</li>
                            <li class="list-group-item"><strong>Color:</strong> {{$cat->color}}</li>
                            <li class="list-group-item"><strong>Temperament:</strong>{{$cat->temperament}}</li>
                            <li class="list-group-item"><strong>Characteristics:</strong> {{$cat->characteristics}}</li>
                            <li class="list-group-item"><strong>Lifespan: </strong>  {{$cat->lifespan}}</li>
                            <li class="list-group-item"><strong>Foods: </strong>  {{$cat->foods}}</li>
                            <li class="list-group-item"><strong>History: </strong>  {{$cat->history}}</li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
@endsection
