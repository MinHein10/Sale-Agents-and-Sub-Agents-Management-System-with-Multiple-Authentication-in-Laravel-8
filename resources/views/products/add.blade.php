@extends('templates.main')
@section('content')

<h1>Add Products</h1>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Add Products Page</h4>

                <form action="{{route('product.store')}}" method="POST" class="outer-repeater">
                    @csrf
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">
                            {{-- Product name --}}
                            <div class="form-group">
                                <label for="productname">Product Name :</label>
                                <input type="text" class="form-control" name="productname" id="productname" placeholder="Enter Product Name...">
                            </div>

                            {{-- Product Name --}}

                            {{-- Category Name --}}
                            <div class="form-group">
                                <label for="name">Category Name :</label>
                                <select name="category" id="category" class="form-control">
                                    @foreach($categories as $value)

                                        <option value="{{ $value->id }}">{{ $value->name }}</option>

                                        @endforeach
                                </select>
                            </div>
                            {{-- Category Name --}}

                            <div class="form-group">
                                <label for="instock">In Stock :</label>
                                <input type="text" class="form-control" name="instock" id="instock" placeholder="Enter In Stock...">
                            </div>

                            <div class="form-group">
                                <label for="images">Choose image</label>
                                {{-- <input type="file" class="form-control-file" name="images" id="images"> --}}
                                <input type="file" name="files[]" class="form-control-file" multiple="multiple">
                            </div>



                              <div class="form-group">
                                <label>Details :</label>
                                <textarea class="form-control" name="details" id="details" placeholder="Enter Details for Products"></textarea>
                              </div>

                            <label for="prices">Prices :</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">$</span>
                                </div>
                                <input type="text" class="form-control" name="prices" id="prices" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                  <span class="input-group-text">.00</span>
                                </div>
                              </div>

                             <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


@endsection
