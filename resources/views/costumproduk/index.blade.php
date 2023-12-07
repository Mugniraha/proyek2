@extends('user-layout.nav-produk')
@section('konten')
        <section id="productscos">
        <div class="container">
            <div class="row">
                <div class="cardcos">
                    <div class="card-left">
                        <img class="card-img-left" src="images/warung2.jpg" alt="Card image cap">
                    </div>
                    <div class="card-center">
                        <h6>Deskripsi Produk</h6>
                        <p>Dengan kekuatan baja ringan yang tak tertandingi, 
                            tangga lipat ini adalah teman sejati Anda dalam menjelajahi ketinggian. 
                            Didesain untuk kepraktisan dan keamanan, keindahan konstruksi ini terletak 
                            pada kemudahannya dalam melipat serta membuka dengan gesit.</p><hr>
                        <p>Dimensi Produk :</p>
                        <p>Warna :</p>
                        <p>Bahan Rangka :</p>
                        <p>Bahan Lainnya :</p>
                        <div class="price">
                            <h3>Tangga Lipat</h3>
                            <h3><i>RP.</i> 200.000</h3>
                        </div>
                        <div class="btn">
                            <button class="btnord"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#204d6f" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>Order</button>
                        </div>
                    </div>
                    <div class="card-right">
                        <form action="" method="GET">
                            <div class="input1">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Bahan</label>
                                    <select class="form-select" id="pilihan" name="pilihan">
                                        <option value="" selected>Pilih Salah Satu Bahan</option>
                                        <option value="nilai1">Opsi 1</option>
                                        <option value="nilai2">Opsi 2</option>
                                        <option value="nilai3">Opsi 3</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Warna</label>
                                    <select class="form-select" id="pilihan" name="pilihan" value="none">
                                        <option value="" selected>Pilih Salah Satu Warna</option>
                                        <option value="nilai1">Opsi 1</option>
                                        <option value="nilai2">Opsi 2</option>
                                        <option value="nilai3">Opsi 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="size">
                                <div class="mb-4">
                                    <label for="formGroupExampleInput2" class="form-label">Panjang</label>
                                    <input type="number" class="form-control" id="formGroupExampleInput2" name="telpon" placeholder="" value="">
                                </div>
                                <div class="mb-4">
                                    <label for="formGroupExampleInput2" class="form-label">Lebar</label>
                                    <input type="number" class="form-control" id="formGroupExampleInput2" name="telpon" placeholder="" value="">
                                </div>
                                <div class="mb-4">
                                    <label for="formGroupExampleInput2" class="form-label">Tinggi</label>
                                    <input type="number" class="form-control" id="formGroupExampleInput2" name="telpon" placeholder="" value="">
                                </div>
                            </div>
                            <div class="input2">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Jumlah Pesanan</label>
                                    <input type="number" class="form-control" id="formGroupExampleInput2" name="telpon" placeholder="" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Metode Pengiriman</label>
                                    <select class="form-select" id="pilihan" name="pengiriman" value="none">
                                        <option value="" selected>Pilih Metode Pengiriman</option>
                                        <option value="nilai1">Opsi 1</option>
                                        <option value="nilai2">Opsi 2</option>
                                        <option value="nilai3">Opsi 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input3">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Keterangan Tambahan</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="6" placeholder="Masukkan deskripsi"></textarea>
                                </div>
                                <div class="btnform">
                                    <button type="submit" class="btnwishlist"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                                        <!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path fill="#204d6f" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                        Wishlist</button>
                                    <a class="btnpesan" href="{{ route('costumproduk.payment') }}">
                                        <button type="submit" class="btnpesancld">Pesan Sekarang</button>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </section>