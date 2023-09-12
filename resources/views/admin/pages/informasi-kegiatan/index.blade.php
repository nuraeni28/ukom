@include('admin.partials.header')
@include('admin.partials.navbar')

<div class="content-page">
    <div class="content">
        <div class="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-30">
                            <div class="card-body">
                                @if ($errors->first('message'))
                                    <div class="form-group">
                                        <div class="alert alert-danger" role="alert">
                                            {{ $errors->first('message') }}
                                        </div>
                                    </div>
                                @endif
                                @if (Session::has('message'))
                                    <div class="form-group">
                                        <div class="alert alert-info" role="alert">
                                            {{ Session::get('message') }}
                                        </div>
                                    </div>
                                @endif

                                <div class="container">
                                    <div class="row" style="  display: flex;justify-content: space-between;">
                                        <h4 class="mt-0 header-title">Informasi Kegiatan</h4>
                                        <button type="button" class="btn btn-primary mb-2" data-toggle="modal"
                                            data-target="#exampleModal">
                                            Buat
                                        </button>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Buat Informasi Kegiatan
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('admin.informasi-kegiatan.store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="nama">Nama Kegiatan</label>
                                                        <input type="text" name="nama" class="form-control"
                                                            placeholder="Nama">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="deskripsi">Deskripsi Kegiatan</label>
                                                        <input type="text" name="deskripsi" class="form-control"
                                                            placeholder="Deskripsi">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="dokumentasi" class="label">Dokumentasi</label>
                                                        <input type="file" class="form-control-input"
                                                            name="dokumentasi" />
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <table id="datatable" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Deskripsi</th>
                                            <th>Dokumentasi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($datas as $data)
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td>{{ $data->nama }}</td>
                                                <td>{{ $data->deskripsi }}</td>
                                                <td><img src="{{ asset('Dokumentasi/' . $data->dokumentasi) }}"
                                                        style="max-height: 100px;" alt=""></td>
                                                <td>
                                                    <button class="btn btn-info btn-sm btn-edit" data-toggle="modal"
                                                        data-target="#Edit-{{ $data->id }}">Edit</button>
                                                    <button class="btn btn-danger btn-sm btn-delete" data-toggle="modal"
                                                        data-target="#N{{ $data->id }}">Delete</button>
                                                </td>
                                            </tr>
                                            @php
                                                $no++;
                                            @endphp
                                            <div class="modal fade" id="Edit-{{ $data->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit
                                                                Informasi Kegiatan
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form
                                                            action="{{ route('admin.informasi-kegiatan.edit', $data->id) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PATCH')
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="nama">Nama</label>
                                                                    <input type="text" name="nama"
                                                                        class="form-control"
                                                                        value="{{ $data->nama }}"
                                                                        placeholder="Nama">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="deskripsi">Deskripsi Kegiatan</label>
                                                                    <input type="text" name="deskripsi"
                                                                        value="{{ $data->deskripsi }}"
                                                                        class="form-control" placeholder="Deskripsi">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="dokumentasi"
                                                                        class="label">Dokumentasi</label>
                                                                    <input type="file" class="form-control-input"
                                                                        name="dokumentasi"
                                                                        value="{{ $data->dokumentasi }}" />
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Simpan</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade" id="N{{ $data->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="confirmDeleteModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="confirmDeleteModalLabel">
                                                                Confirmation</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to delete this
                                                                {{ $data->nama }}?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Cancel</button>
                                                            <form id="deleteForm" method="POST"
                                                                action="{{ route('admin.informasi-kegiatan.delete', $data->id) }}">
                                                                @csrf
                                                                @method('Delete')
                                                                <button type="submit"
                                                                    class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.partials.footer')
