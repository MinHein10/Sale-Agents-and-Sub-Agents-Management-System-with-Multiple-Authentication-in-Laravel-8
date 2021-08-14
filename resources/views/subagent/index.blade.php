@extends('templates.main')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h2 class=" text-center text-success">Sub Agent Information</h2>
                <a href="{{route('managesubagent.create')}}"><button class="btn btn-success waves-effect waves-light mb-3"><i class="fas fa-user-plus"></i> Insert</button></a>

                <a href="{{route('subagent.excel') }}"><button class="btn btn-primary mb-3 " ><i class="fas fa-file-excel"> Excel</i></button></a>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Main Agent</th>
                            <th>Region</th>
                            <th>Township</th>
                            <th>Ph No</th>
                            <th>Email</th>
                            <th><i class="fas fa-user-edit"></i></th>
                            <th><i class="fas fa-user-minus"></i></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($subagent as $i)
                        <tr>
                            <th>{{$loop->iteration}}</th>
                            <th>{{$i->name}}</th>
                            <th>{{App\Models\Agent::find($i->agent_id)->name}}</th>

                            <td>{{$i->region}}</td>
                            <td>{{$i->township}}</td>
                            <td>{{$i->phno}}</td>
                            <td>{{$i->email}}</td>
                            <td><a href="{{route('managesubagent.edit',$i->id)}}"><button class="btn-sm btn-primary waves-effect waves-light"><i class="far fa-edit"></i> Update</button></a></td>

                            <form action="{{ route('managesubagent.destroy',$i->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <td><a href=""><button class="btn-sm btn-danger waves-effect waves-light"><i class="fas fa-trash"></i> Delete</button></a></td>
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
