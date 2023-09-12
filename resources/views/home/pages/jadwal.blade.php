@include('home.partials.header')
@include('home.partials.navbar')


<section class="explore-section section-padding" id="section_2">
    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <h2 class="mb-4">Jadwal Kegiatan SMAN 17 Makassar</h1>
            </div>

        </div>
    </div>
    <section class="timeline-section section-padding">
        <div class="row" style="display:flex ;justify-content: center; align-items: center;">
            <table class="table table-bordered" style="width: 800px">
                <thead>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($datas as $data)
                        <tr>
                            <th>No</th>
                            <th>Nama Kegiatan</th>
                            <th>Tanggal Kegiatan</th>
                        </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->tanggal }}</td>
                    </tr>
                    @php
                        $no++;
                    @endphp
                    @endforeach
                </tbody>
            </table>




        </div>

        </div>
    </section>


    </main>


    </main>

    @include('home.partials.footer')
