@extends('templates.main')


@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h2 class=" text-center text-success">Packages</h2>
                <a href="{{route('insert.packages')}}"><button class="btn btn-success waves-effect waves-light mb-3"><i class="fas fa-user-plus"></i> Insert</button></a>

                {{-- <a href="{{route('excel') }}"><button class="btn btn-primary mb-3 " ><i class="fas fa-file-excel">   Export Into Excel</i></button></a> --}}

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Product Name</th>
                            <th>Package Name</th>
                            <th>Buying Item</th>
                            <th>Description</th>
                            <th>Prices</th>
                            <th><i class="fas fa-user-edit"></i></th>
                            <th><i class="fas fa-user-minus"></i></th>
                        </tr>
                    </thead>

                    <tbody class="text-center">
                        @foreach ($packages as $i)
                        <tr>
                            <td>{{$i->id}}</td>
                            <td>{{App\Models\Product::find($i->product_id)->productname}}</td>
                            <td>{{$i->packagename}}</td>
                            <td>{{$i->buying_items}}</td>
                            <td>{{$i->description}}</td>
                            <td>{{$i->prices}}</td>

                            <td><a href="#"><button class="btn btn-primary"><i class="far fa-edit"></i> Update</button></a></td>
                            {{-- <td><a href=""><button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button></a></td> --}}
                            <form action="{{ route('package.destroy',$i->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <td><a href=""><button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button></a></td>
                            </form>
                          </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$packages->links('pagination::bootstrap-4')}}
            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->

@endsection
