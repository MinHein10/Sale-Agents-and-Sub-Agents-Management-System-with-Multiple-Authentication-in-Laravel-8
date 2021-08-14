@extends('templates.main')
@section('content')



<div class="row">
    <div class="col-xl-6">

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div>
                                    <p class="text-muted font-weight-medium mt-1 mb-2">Total Agent</p>
                                    <h4>{{$agentdata}}</h4>
                                </div>
                            </div>

                            <div class="col-4">
                                <div>
                                    <div id="radial-chart-1"></div>
                                </div>
                            </div>
                        </div>

                        <p class="mb-0">
                            <span class="badge badge-soft-success mr-2"> 0.8%
                                <i class="mdi mdi-arrow-up"></i>
                            </span> From previous period
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div>
                                    <p class="text-muted font-weight-medium mt-1 mb-2">Total Admin</p>
                                    <h4>{{$admindata}}</h4>
                                </div>
                            </div>

                            <div class="col-4">
                                <div>
                                    <div id="radial-chart-2"></div>
                                </div>
                            </div>
                        </div>

                        <p class="mb-0"><span class="badge badge-soft-success mr-2"> 0.6% <i class="mdi mdi-arrow-up"></i> </span> From previous period</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">Agent Information</h4>
                {{-- <p class="card-title-desc">For basic styling—light padding and only horizontal dividers—add the base class <code>.table</code> to any
                    <code>&lt;table&gt;</code>.
                </p> --}}

                <div class="table-responsive">
                    <table class="table mb-0">

                        <thead class="text-dark">
                            <tr>
                                <th>#</th>
                                <th>Agent Name</th>
                                <th>Region</th>
                                <th>Township</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($adminall as $i)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$i->name}}</td>
                                <td>{{$i->region}}</td>
                                <td>{{$i->township}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">Agent from Yangon Region</h4>
                <h4 class="card-title">Total Agent : {{$count1}}</h4>

                <div class="table-responsive">
                    <table class="table mb-0">

                        <thead class="text-dark">
                            <tr>
                                <th>#</th>
                                <th>Agent Name</th>
                                <th>Township</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($region1 as $i)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$i->name}}</td>
                                <td>{{$i->township}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">Agent from Shan Mandalay Region</h4>
                <h4 class="card-title">Total Agent : {{$count2}}</h4>

                <div class="table-responsive">
                    <table class="table mb-0">

                        <thead class="text-dark">
                            <tr>
                                <th>#</th>
                                <th>Agent Name</th>
                                <th>Township</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($region2 as $i)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$i->name}}</td>
                                <td>{{$i->township}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

</div>
<!-- end row -->

@endsection
