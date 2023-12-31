<x-app>
    @slot('title')
    LSP | About
    @endslot
    @slot('content')
    @slot('page')
        About
    @endslot
    <section>
        <div class="container">
            <x-alert />
            <div class="row">
                <div class="col card px-3 py-3">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-lg-3">
                            <div class="mb-3 ms-5">
                                <img src="{{ asset('img/foto.jpeg') }}" alt="" style="width: 120px;">
                            </div>
                        </div>
        
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <label class="form-label">Aplikasi ini dibuat oleh : </label><br>
                            <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3">                        
                                <label class="form-label">Nama </label><br>
                                <label class="form-label">Prodi </label><br>
                                <label class="form-label">Nim </label><br>
                                <label class="form-label">Tanggal</label>                        
                            </div>
                            <div class="col-sm-5 col-md-5 col-lg-5">
                                <label class="form-label">: Nadzar Arka Dani</label><br>
                                <label class="form-label">: Manejemen Informatika</label><br>
                                <label class="form-label">: 2131730104</label><br>
                                <label class="form-label">: 14 November 2023 </label>                        
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endslot
    @slot('script')
    <script>
    </script>
    @endslot
</x-app>