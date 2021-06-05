<form action="{{ route('pelanggan.store') }}" method="post">
    @csrf
    Nama: <input type="text" name="nama">
    ALAMAT: <input type="text" name="alamat">
    <button> type="submit">Simpan</button>



</form>