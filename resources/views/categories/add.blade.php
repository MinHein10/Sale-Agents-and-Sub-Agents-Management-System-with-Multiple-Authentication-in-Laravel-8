@extends('templates.main')
@section('content')

<h1>Add Categories</h1>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Add Categories Page</h4>

                <form action="{{route('category.store')}}" method="POST" class="outer-repeater">
                    @csrf
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">
                            {{-- Category Name --}}
                            <div class="form-group">
                                <label for="name">Category Name :</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Category Name...">
                            </div>
                            {{-- Category Name --}}
                            
                            {{-- Description--}}
                            <div class="form-group">
                                <label for="description">Description :</label>
                                <input type="text" class="form-control" name="description" id="description" placeholder="Enter Description...">
                            </div>
                            {{-- Description--}}
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
    
@endsection