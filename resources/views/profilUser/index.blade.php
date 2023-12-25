@extends('user-layout.nav-user')
@section('konten')
    <section id="productspes">
        <div class="kontenr">
            <div class="awal">
                <div class="container-row rounded p-2">
                    <div class="user-profile">
                        @if(session('user'))
                            <div class="profile-image">
                                @if(session('user')->profile)
                                    <img id="profilePicture" src="{{ asset('storage/profiles/' . session('user')->profile) }}" alt="Profile Picture">
                                @else
                                    <img id="profilePicture" src="{{ asset('images/profil1.png') }}" alt="Default Profile Picture">
                                @endif
                            </div>
                        @else
                            <div class="profile-image">
                                <img id="profilePicture" src="{{ asset('images/profil1.png') }}" alt="Default Profile Picture">
                            </div>
                        @endif

                        <div class="user-name">
                            <h4 class="part2 p-2 text-dark rounded">
                                @if(session('user') && session('user')->username)
                                    {{ session('user')->username }}
                                @else
                                    USERNAME
                                @endif
                            </h4>
                        </div>

                        <hr class="underline">
                    </div>
                    <div class="row">
                        <div class="content-row">
                            <div class="part1 p-2">
                                Nama Lengkap
                            </div>
                            <div class="part2 bg-light p-2 text-dark rounded">
                                @if(session('user'))
                                    {{ session('user')->name }}
                                @else
                                    Belum diisi
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="content-row">
                            <div class="part1 p-2">
                                Email
                            </div>
                            <div class="part2 bg-light p-2 text-dark rounded">
                                {{-- {{ session('user')->email ?? 'Belum diisi' }} --}}
                                @if(session('user'))
                                    {{ session('user')->email }}
                                @else
                                    Belum diisi
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="content-row">
                            <div class="part1 p-2">
                                No Telepon
                            </div>
                            <div class="part2 bg-light p-2 text-dark rounded">
                                {{-- {{ session('user')->telp ?? 'Belum diisi' }} --}}
                                @if(session('user'))
                                    {{ session('user')->telp }}
                                @else
                                    Belum diisi
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1 mb-5">
                        <div class="content-row">
                            <div class="part1 p-2">
                                Alamat
                            </div>
                            <div class="part2 bg-light p-2 text-dark rounded">
                                {{-- {{ session('user')->alamat ?? 'Belum diisi' }} --}}
                                {{-- @if(session('user'))
                                    {{ session('user')->alamat }}
                                @else
                                    Belum diisi
                                @endif --}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="btn-akun">
                            <a href="{{ route('KelolaUserIndex') }}" type="button" class="btn" style="background-color: #4C6687; color: #fcf2c5;"> Edit</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="top-konten">
                <a href="{{ route('buatAkun.index') }}" type="button" class="btn btn-primary mb-3" style="background-color: #4C6687; color: #fcf2c5;"> Buat Akun</a>
            </div> --}}

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

            <script>
                function openFileInput() {
                    // Trigger click event on the file input
                    document.getElementById('fileInput').click();
                }

                function updateProfilePicture(input) {
                    // Check if a file is selected
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            // Update the profile picture with the selected image
                            document.getElementById('profilePicture').src = e.target.result;
                        };

                        // Read the selected file as a data URL
                        reader.readAsDataURL(input.files[0]);
                    }
                }
            </script>
        </div>
    </section>
@endsection
