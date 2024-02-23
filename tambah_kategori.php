<h1 class="mt-4">Kategori Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <?php
                    if (isset($_POST['submit'])) {
                        // Periksa apakah nama kategori telah diisi
                        if(!empty($_POST['kategori'])) {
                            // Ambil nilai dari input form
                            $nama_kategori = $_POST['kategori'];
                            
                            // Lakukan query untuk menambah data kategori
                            $query = mysqli_query($koneksi, "INSERT INTO kategori (kategori) VALUES ('$nama_kategori')");

                            if ($query) {
                                echo '<script>alert("Tambah Data Berhasil.");</script>';
                            } else {
                                echo '<script>alert("Tambah Data Gagal.");</script>';
                            }
                        } else {
                            // Tampilkan pesan jika nama kategori kosong
                            echo '<script>alert("Nama Kategori harus diisi.");</script>';
                        }
                    }
                    ?>
                    <div class="row mb-3">
                        <div class="col-md-2">Nama Kategori</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="kategori"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                            <!-- Tombol Reset untuk membersihkan nilai input -->
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <!-- Tombol Kembali untuk kembali ke halaman kategori -->
                            <a href="?page=kategori" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
