@include('templates/mainheader');

@include('templates/pageheader')
@include('templates/leftsidebar');
 <!-- Start right Content here -->
 <div class="main-content">
    <div class="page-content">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">Admin Dashboard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Admin Dashboard</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

    @section('content')
        @show

<!-- End Page-content -->
@include('templates/pagefooter');
@include('templates/rightsidebar');

@include('templates/mainfooter');
