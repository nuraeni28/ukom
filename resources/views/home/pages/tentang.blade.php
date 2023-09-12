@include('home.partials.header')
@include('home.partials.navbar')


<section class="timeline-section section-padding">
    <div class="row">

        <div class="col-lg-8 col-12 mx-auto">
            <h1 class="text-center" style="font-weight: bold;color:#13547a">SMAN 17 MAKASSAR</h1>

            <h6 class="text-center" style="color: black;margin-top:20px;font-weight:normal">Jl. Sunu. No. 11, 90211,
                Suwangga, Tallo,
                Makassar</h6>

            <h5 class="text-center" style="font-weight: bold;color:#13547a;margin-top:40px">Visi</h5>
            <div class="d-flex" style="margin-top:20px">
                <div>
                    <p style="color: black;font-size:14px">Semenjak didirikan pada tahun 1993, SMAN 17 Makassar selalu
                        memiliki
                        pandangan
                        untuk : <br><br>
                        <strong>”Mewujudkan peserta didik yang unggul dalam prestasi, berkarakter, berwawasan
                            lingkungan,
                            berjiwa
                            kewirausahaan serta budaya saing global berlandaskan IMTAQ dan IPTEK”</strong>
                        <br><br> Para Siswa/i belajar dengan penuh semangat dan motivasi untuk dengan mengandalkan Ilmu
                        Pengetahuan
                        dan
                        Teknologi. Selain itu, dalam kegiatan sehari-harinya Siswa/i menerapkan budaya 5S (Salam, Sapa,
                        Senyum,
                        Sopan dan Santun) kepada Bapak/Ibu guru, sesama siswa, staff, tamu sekolah dan warga sekolah
                        lainnya
                        sebagai pencerminan dari Siswa yang berkarakter berlandaskan Ilmu, Iman dan Taqwa.
                    </p>
                </div>
                <img src="assets/images/jubel1.jpg" alt="Gambar"
                    style="width: 500px; height: auto; margin-left: 20px;">
            </div>

            <h5 class="text-center" style="font-weight: bold;color:#13547a;margin-top:40px">Misi</h5>
            <div class="d-flex" style="margin-top:20px">
                <img src="assets/images/jubel2.webp" alt="Gambar" style="width: 500px; height: auto; ">
                <div>
                    <p style="color: black;font-size:14px; margin-left: 20px;">Untuk mewujudkan seluruh visi SMA NEGERI
                        17 MAKASSAR maka
                        berikut adalah misi yang harus dilaksanakan :

                        <br> <strong>1. Menciptakan lingkungan pembelajaran yang kondusif dalam upaya meningkatkan mutu
                            pembelajaran,</strong>
                        <br><strong>2. Mendorong dan membantu setiap peserta didik untuk mengenali potensi dirinya
                            sehingga
                            dapat
                            dikembangkan secara optimal,</strong>
                        <br><strong>3. Menumbuhkembangkan semangat keunggulan dan budaya belajar yang tinggi kepada
                            seluruh
                            warga sekolah,</strong>

                        <br><strong>4. Menumbuhkembangkan karakter warga sekolah yang relegius, disiplin, jujur,
                            bertanggungjawab,
                            kreatif, dan inovatif,</strong>
                        <br><strong> 5. Meningkatkan komitmen dan loyalitas seluruh pendidik dan tenaga kependidikan
                            terhadap
                            tugas pokok dan fungsinya,</strong>

                        <br><strong>6. Meningkatkan apresiasi terhadap seni dan budaya bangsa,</strong>
                        <br> <strong>7. Melaksanakan pembelajaran yang berbasis lingkungan,</strong>
                        <br><strong>8. Menumbuhkan budaya hidup bersih dan sehat,</strong>
                        <br> <strong>9. Menumbuhkembangkan semangat mencintai, mengelolah, dan memelihara lingkungan
                            oleh
                            seluruh warga sekolah,</strong>

                        <br> <strong>10. Menumbuhkembangkan jiwa kewirausahaan pada seluruh warga sekolah,</strong>
                        <br> <strong>11. Menerapkan Teknologi Informasi dan komunikasi dalam pembelajaran dan
                            pengelolaan
                            sekolah,</strong>
                        <br> <strong>12. Menerapkan sistem menajemen mutu.</strong>
                    </p>
                </div>

            </div>
        </div>
    </div>

    </div>
</section>
<section class="explore-section section-padding" id="section_2">

    <div class="row" style="display:flex ;justify-content: center; align-items: center;">

        <div class="col-12 text-center">
            <h2 class="mb-4">Informasi Biaya Masuk Sekolah</h1>
        </div>
        {{-- <div class="row" style="display:flex ;justify-content: center; align-items: center;"> --}}
        <table class="table table-bordered" style="width: 800px">
            <thead>

                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Biaya</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> 1 </td>
                    <td>Formulir Pendaftaran</td>
                    <td> Rp300.000</td>
                </tr>
                <tr>
                    <td> 2 </td>
                    <td> Uang Pangkal</td>
                    <td> Rp10.0000</td>
                </tr>
                <tr>
                    <td> 3</td>
                    <td> Uang SPP</td>
                    <td> Rp300.0000</td>
                </tr>

            </tbody>
        </table>
    </div>
    </div>


    </main>

    @include('home.partials.footer')
