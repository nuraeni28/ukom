@include('admin.partials.header')
@include('admin.partials.navbar')



<!-- Start right Content here -->

<div class="content-page">
    <!-- Start content -->
    <div class="content">

        <div class="page-content-wrapper ">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group float-right">
                                <a href="{{route('logout.index')}}">Logout &nbsp;</a>
                               
                                <ol class="breadcrumb hide-phone p-0 m-0">

                                    <li class="breadcrumb-item active">{{ $tanggal_today }}</li>

                                </ol>

                            </div>
                            <h4 class="page-title">Dashboard</h4>

                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="text-center">
                                    <div class="m-l-10">
                                        <h5 class="mt-0" style="font-size: 12px;">Jumlah
                                            Informasi
                                            Kegiatan</h5>
                                        <p class="mb-0 text-muted">{{ $informasi }}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="text-center">
                                    <div class="m-l-10">
                                        <h5 class="mt-0" style="font-size: 12px;">Jumlah
                                            Jadwal
                                            Kegiatan</h5>
                                        <p class="mb-0 text-muted">{{ $jadwal }}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>


    </div> <!-- Page content Wrapper -->

    <footer class="footer">
        © 2023 SMAN 17 MAKASSAR
    </footer>
</div> <!-- content -->
@include('admin.partials.footer')
