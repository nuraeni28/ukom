  @php
      $tanggal = date('Y-m-d');
      $nama_bulan = [
          '01' => 'Januari',
          '02' => 'Februari',
          '03' => 'Maret',
          '04' => 'April',
          '05' => 'Mei',
          '06' => 'Juni',
          '07' => 'Juli',
          '08' => 'Agustus',
          '09' => 'September',
          '10' => 'Oktober',
          '11' => 'November',
          '12' => 'Desember',
      ];
      $tanggal_today = date('d', strtotime($tanggal)) . ' ' . $nama_bulan[date('m', strtotime($tanggal))] . ' ' . date('Y', strtotime($tanggal));
  @endphp

  <body id="top">

      <main>

          <nav class="navbar navbar-expand-lg">
              <div class="container" style="margin:0px;color:black;">
                  <a class="navbar-brand" href="">
                      <img src="{{ asset('assets/images/logo.png') }}" style="height: 50px;width:50px">
                      <span>SIM17</span>
                  </a>

                  <div class="d-lg-none ms-auto me-4">
                      <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                  </div>

                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav ms-lg-5 me-lg-auto">
                          <li class="nav-item">
                              <a class="nav-link click-scroll" href="{{ route('home.index') }}">Home</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link click-scroll" href="{{ route('home.informasi') }}">Informasi</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link click-scroll" href="{{ route('home.video') }}">Video</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link click-scroll" href="{{ route('home.jadwal') }}">Jadwal</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link click-scroll" href="{{ route('home.tentang') }}">Tentang</a>
                          </li>


                          <li class="nav-item dropdown">

                      </ul>


                  </div>
              </div>

              <a style="margin-left: auto;" href="">{{ $tanggal_today }}</a>

          </nav>
