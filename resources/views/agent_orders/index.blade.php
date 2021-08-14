@extends('templates.main')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div id="message">

                </div>
                <h2 class=" text-center text-success">Agent Orders Information</h2>
                <a href="{{route('agents-orders.create')}}"><button class="btn btn-success waves-effect waves-light mb-3"><i class="fas fa-user-plus"></i> Insert</button></a>

                <a href="#"><button class="btn btn-primary mb-3 " ><i class="fas fa-file-excel"> Excel</i></button></a>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Agent Name</th>
                            <th>Product Name</th>
                            <th>Order Code</th>
                            <th>Quantity</th>
                            <th>Package or Not</th>
                            <th>Package Name</th>
                            <th>Package Prices</th>
                            <th>Payment Methods</th>
                            <th>Is Success</th>
                            {{-- <th><i class="fas fa-user-edit"></i></th>
                            <th><i class="fas fa-user-minus"></i></th> --}}
                        </tr>
                    </thead>

                    <tbody class="text-center">
                        @foreach ($orders as $i)
                        <tr>
                            <th>{{$i->id}}</th>
                            <td>{{App\Models\Agent::find($i->agent_id)->name}}</td>
                            <td>{{App\Models\Product::find($i->product_id)->productname}}</td>
                            <td>{{$i->order_code}}</td>
                            <td>{{$i->quantity}}</td>


                            @if ($i->is_package==1)
                                <td><i class="fas fa-check" style="font-size: 35px;"></i></td>
                                <td>{{App\Models\Package::find($i->package_id)->packagename}} {{App\Models\Package::find($i->package_id)->buying_items}}</td>
                                <td>{{App\Models\Package::find($i->package_id)->prices}}</td>
                            @else
                                <td><i class="fas fa-times" style="font-size: 35px;"></i></td>
                                <td><i class="fas fa-times" style="font-size: 35px;"></i></td>
                                <td>{{App\Models\Product::find($i->product_id)->prices}}</td>
                            @endif

                            <td>{{$i->payment_methods}}</td>

                            <td><input type="checkbox" class="toggle-class" checked data-toggle="toggle" data-id="{{$i->id}}" data-size="small" data-width="80" data-height="40" data-on="Confirm" data-off="Cancel" {{$i->is_success==true ? 'checked':''}}></td>

                            {{-- <td><a href="{{route('agents-orders.edit',$i->id)}}"><button class="btn-sm btn-primary waves-effect waves-light"><i class="far fa-edit"></i> Update</button></a></td>

                            <form action="{{ route('agents-orders.destroy',$i->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <td><a href=""><button class="btn-sm btn-danger waves-effect waves-light"><i class="fas fa-trash"></i> Delete</button></a></td>
                            </form> --}}
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
