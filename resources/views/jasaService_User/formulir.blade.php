@extends('user-layout.nav-user')
@section('konten')
        <section id="productspes">
        <div class="container w-50 shadow p-3">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Formulir</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('formOrder.store') }}" method="POST">
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Nama Jasa</label>
                        <!-- Dalam formulir HTML -->
                        <input type="text" class="form-control" id="formGroupExampleInput" name="namaJasa" placeholder="" value="">
                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                    </div>
                    <div class="mb-3">
                        <label for="">Kategori Jasa</label>
                        <select class="form-select" name="kategoriJasa" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="Reparasi">Reparasi</option>
                            <option value="Pembuatan">Pembuatan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Masalah</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsiJasa" placeholder="" rows="3"></textarea>
                    </div>
                    {{-- <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Lokasi</label>
                        <textarea type="text" class="form-control" id="formGroupExampleInput2" name="alamat" placeholder="" value=""></textarea>
                    </div> --}}
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Lokasi</label>
                        <input type="text" class="form-control" id="locationInput" name="alamat" placeholder="Type your location">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Tanggal Pengerjaan</label>
                        <input type="date" class="form-control" id="formGroupExampleInput2" name="tanggal" placeholder="" value="">
                    </div>
            </div>
                    <div class="modal-footer d-block">
                        <button type="submit" class="btn btn-success d-block w-100 mt-2">Simpan</button>
                        <a href="{{ route('serviceBaruIndex') }}" type="button" class="btn btn-warning d-block w-100">Batal</a>
                    </div>
                </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </section>

    <script>
        function initAutocomplete() {
            var input = document.getElementById('locationInput');
            var autocomplete = new google.maps.places.Autocomplete(input);
        }
        google.maps.event.addDomListener(window, 'load', initAutocomplete);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places" defer></script>
    @endsection
