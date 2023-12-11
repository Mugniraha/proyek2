@extends('user-layout.nav-user')
@section('konten')
        <section id="productspes">
        <div class="kontenr">
            <div class="awal" >
                <div class="container-row rounded p-2">
                    <div class="user-profile">
                        @if($buat_akun->count() > 0)
                            <div class="profile-image">
                                @if($buat_akun[0]->profile)
                                    <img id="profilePicture" src="{{ asset('storage/profiles/' . $buat_akun[0]->profile) }}" alt="Profile Picture">
                                @else
                                    <img id="profilePicture" src="{{ asset('images/profil1.png') }}" alt="Default Profile Picture">
                                @endif
                            </div>
                        @else
                            <div class="profile-image">
                                <img id="profilePicture" src="{{ asset('images/profil1.png') }}" alt="Default Profile Picture">
                            </div>
                        @endif

                        {{-- <div class="edit-icon" onclick="openFileInput()">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z"/></svg>
                        </div>
                        <input type="file" id="fileInput" style="display: none" accept="image/*" onchange="updateProfilePicture(this)"> --}}

                        <div class="user-name">
                            <h4 class="part2 p-2 text-dark rounded">
                                @if(isset($buat_akun[0]) && $buat_akun[0]->username)
                                    {{ $buat_akun[0]->username }}
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
                                @foreach($buat_akun as $user)
                                    {{ $user->nama_lengkap }}
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="content-row">
                            <div class="part1 p-2">
                                Email
                            </div>
                            <div class="part2 bg-light p-2 text-dark rounded">
                                @foreach($buat_akun as $user)
                                    {{ $user->email }}
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="content-row">
                            <div class="part1 p-2">
                                No Telepon
                            </div>
                            <div class="part2 bg-light p-2 text-dark rounded">
                                @foreach($buat_akun as $user)
                                    {{ $user->telpon }}
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1 mb-5">
                        <div class="content-row">
                            <div class="part1 p-2">
                                Alamat
                            </div>
                            <div class="part2 bg-light p-2 text-dark rounded">
                                @foreach($buat_akun as $user)
                                    {{ $user->alamat }}
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="btn-akun">
                            <a href="{{ route('KelolaUserIndex') }}" type="button" class="btn" style="background-color: #4C6687; color: #fcf2c5;"> Ubah</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-konten">
                {{-- Conditionally display the button based on whether the user has created an account --}}
                {{-- @if($userHasCreatedAccount) --}}
                    <a href="{{ route('buatAkun.index') }}" type="button" class="btn btn-primary mb-3" style="background-color: #4C6687; color: #fcf2c5;"> Buat Akun</a>
                {{-- @endif --}}
            </div>

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


