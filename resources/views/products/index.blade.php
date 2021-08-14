@extends('templates.main')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h2 class=" text-center text-success">Products</h2>
                <a href="{{route('insert.products')}}"><button class="btn btn-success waves-effect waves-light mb-3"><i class="fas fa-user-plus"></i> Insert</button></a>

                {{-- <a href="{{route('excel') }}"><button class="btn btn-primary mb-3 " ><i class="fas fa-file-excel">   Export Into Excel</i></button></a> --}}

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Product Name</th>
                            <th>Category Name</th>
                            <th>Images</th>
                            <th>Details</th>
                            <th>Prices</th>
                            <th><i class="fas fa-user-edit"></i></th>
                            <th><i class="fas fa-user-minus"></i></th>
                        </tr>
                    </thead>

                    <tbody class="text-center">
                        @foreach ($data as $i)
                        <tr>
                            <td>{{$i->id}}</td>
                            <td>{{$i->productname}}</td>
                            <td>{{App\Models\Category::find($i->category_id)->name}}</td>
                            {{-- <td>{{$i->images}}</td> --}}


                            <td>
                                {{$i->images}}
                            </td>



                            <td>{{$i->description}}</td>
                            <td>{{$i->prices}}</td>

                            <td><a href="#"><button class="btn btn-primary"><i class="far fa-edit"></i> Update</button></a></td>
                            {{-- <td><a href=""><button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button></a></td> --}}
                            <form action="{{ route('product.destroy',$i->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <td><a href=""><button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button></a></td>
                            </form>
                          </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$data->links('pagination::bootstrap-4')}}
            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection
