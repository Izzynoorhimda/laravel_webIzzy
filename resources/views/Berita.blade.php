     <x-header />
     <!-- SECTION BERITA -->
    <div class="container">
        <div class="row mt-6">
            <div class="col-lg-12 justify-content-center">
                <h2 class="text-center my-2">Berita Terbaru</h2>
            </div>
        </div>
        <!-- TUTUP SECTION BERITA -->

 <!-- SECTION BERITA -->
            <div class="row mt-2 pt-4">
                <div class="col-lg-12">
                    <h2 class="text-center">Berita Terbaru</h2>
                    {{-- berita 1 --}}
                    <div class="row">
                         @foreach ($beritas as @berita)
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    {{-- Gambar Berita --}}
                                    <img width="100%"
                                        src="{{ $item->gambar }}" class="rounded-2"
                                        alt="">
                                </div>
                                <div class="card-body">
                                    {{-- judul berita --}}
                                    <h3>{{ $item->judul }}
                                    </h3>
                                    <a class="btn btn-outline-success"
                                        href="{{ $item->link }}">Baca
                                        selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- berita 2 --}}
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <img width="100%"
                                        src="https://assets.radartasik.id/main/2025/01/SMKn-4-tasikmalaya.webp" class="rounded-2"
                                        alt="">
                                </div>
                                <div class="card-body">
                                    <h3>SMKN 4 Tasikmalaya Terapkan Aturan Ketat Terhadap Kendaraan Bermotor</h3>
                                    <a class="btn btn-outline-success"
                                        href="https://radartasik.id/2025/01/02/smkn-4-tasikmalaya-terapkan-aturan-ketat-terhadap-kendaraan-bermotor/">Baca
                                        selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        {{-- berita 3 --}}
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <img width="100%"
                                        src="https://assets.radartasik.id/main/2023/10/SMKN-4.jpg" class="rounded-2"
                                        alt="">
                                </div>
                                <div class="card-body">
                                    <h3>SMKN4 Tasikmalaya Koneksikan Iduka Dengan Pencari Kerja</h3>
                                    <a class="btn btn-outline-success"
                                        href="https://radartasik.id/2023/10/12/smkn-4-tasikmalaya-koneksikan-iduka-dengan-pencari-kerja/">Baca
                                        selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TUTUP SECTION BERITA -->
            <x-footer />