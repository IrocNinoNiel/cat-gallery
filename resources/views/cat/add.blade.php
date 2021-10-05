@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            {{ __('Add Cat Record') }}
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('cat.store')}}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group">
                            <label for="image">Enter Cat Photo</label>
                            <input type="file" name="image" class="form-control @error('image') border-danger @enderror">
                        </div>

                        <div class="form-group">
                            <label for="name">Enter Cat Name</label>
                            <input type="text" class="form-control @error('name') border-danger @enderror" id="name" placeholder="Cat Name" name="name">
                        </div>

                        <div class="form-group">
                            <label for="size">Enter Cat Size</label>
                            <input type="text" class="form-control @error('size') border-danger @enderror" id="size" placeholder="Cat Size" name="size">
                        </div>

                        <div class="form-group">
                            <label for="coat">Enter Cat Coat</label>
                            <input type="text" class="form-control @error('coat') border-danger @enderror" name="coat" placeholder="Cat Coat">
                        </div>

                        <div class="form-group">
                            <label for="color">Enter Cat Color</label>
                            <input type="text" class="form-control @error('color') border-danger @enderror" id="color" placeholder="Cat Color" name="color">
                        </div>

                        <div class="form-group">
                            <label for="temperament">Enter Cat temperament</label>
                            <textarea class="form-control @error('temperament') border-danger @enderror" id="temperament" rows="3" placeholder="Cat temperament" name="temperament"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="characteristics">Enter Cat characteristics</label>
                            <textarea class="form-control @error('characteristics') border-danger @enderror" id="characteristics" rows="3" placeholder="Cat characteristics" name="characteristics"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="lifespan">Enter Cat lifespan</label>
                            <input type="text" class="form-control @error('lifespan') border-danger @enderror" id="lifespan" placeholder="Cat lifespan" name="lifespan">
                        </div>

                        <div class="form-group">
                            <label for="foods">Enter Cat foods</label>
                            <input type="text" class="form-control @error('foods') border-danger @enderror" id="foods" placeholder="Cat foods" name="foods">
                        </div>

                        <div class="form-group">
                            <label for="history">Enter Cat history</label>
                            <textarea class="form-control @error('history') border-danger @enderror" id="history" rows="5" placeholder="Cat History" name="history"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" name="submit" value="submit">Add Cat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
