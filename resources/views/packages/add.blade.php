@extends('templates.main')

@section('content')
<h1>Add Packages</h1>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Add Packages Page</h4>

                <form action="{{route('package.store')}}" method="POST" class="outer-repeater">
                    @csrf
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">

                            <div class="form-group">
                                <label for="packagesname">Packages Name :</label>
                                <input type="text" class="form-control" name="packagename" id="packagename" placeholder="Enter Packages Name...">
                            </div>


                            <div class="form-group">
                                <label for="product_id">Product Name :</label>
                                <select name="product_id" id="product_id" class="form-control">
                                    @foreach($products as $value)

                                        <option value="{{ $value->id }}">{{ $value->productname }}</option>

                                        @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="buying_items">Buying Items :</label>
                                <input type="text" class="form-control" name="buying_items" id="buying_items" placeholder="Enter Buying Items...">
                            </div>

                            <div class="form-group">
                                <label for="images">Choose image</label>
                                {{-- <input type="file" class="form-control-file" name="images" id="images"> --}}
                                <input type="file" name="files[]" class="form-control-file" multiple="multiple">
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description" id="description" placeholder="Enter Description for Packages"></textarea>
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
