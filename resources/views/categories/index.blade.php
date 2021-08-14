@extends('templates.main')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h2 class=" text-center text-success">Categories</h2>
                <a href="{{route('insert.categories')}}"><button class="btn btn-success waves-effect waves-light mb-3"><i class="fas fa-user-plus"></i> Insert</button></a>

                {{-- <a href="{{route('excel') }}"><button class="btn btn-primary mb-3 " ><i class="fas fa-file-excel">   Export Into Excel</i></button></a> --}}

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Categories Name</th>
                            <th>Description</th>
                            <th><i class="fas fa-user-edit"></i></th>
                            <th><i class="fas fa-user-minus"></i></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($data as $i)
                        <tr>
                            <th>{{$loop->iteration}}</th>
                            <th>{{$i->name}}</th>
                            <td>{{$i->description}}</td>
                            <td><a href="{{route('category.edit',$i->id)}}"><button class="btn btn-primary"><i class="far fa-edit"></i> Update</button></a></td>
                            {{-- <td><a href=""><button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button></a></td> --}}
                            <form action="{{ route('category.destroy',$i->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <td><a href=""><button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button></a></td>
                            </form>
                          </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection
