<head>
    <meta name="viewport" content="width+device-width,
    initial-scale=1">
    <title>Data Buku</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
        thead {
        background-color: #f2f2f2;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nh-child(even){background-color: #f2f2f2}
        .tambah{
        padding: 8px 16px ;
        text-decoration: none;
        }
    </style>
</head>

<p>Cari Data Pelanggan :</p>
	<form action="/home0221/carihome" method="GET">
		<input type="text" name="cari" placeholder="Cari Pelanggan .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>

<body>
    <div style="overflow-x: auto">
          <table>
              <thead>
                  <tr>
                      <th>No</th>
                      <th>id pelanggan</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Barang</th>
                      <th>Harga</th>
                      <th>Action</th>


                      
                  </tr>
              </thead>
              <tbody>
                
                @foreach ($home as $Home)
                  <tr>
                      <td>{{ $Home->id_pl }}</td>
                      <td>{{ $Home->id_pelanggan }}</td>
                      <td>{{ $Home->nama_pl }}</td>
                      <td>{{ $Home->alamat }}</td>
                      <td>{{ $Home->nama_br }}</td>
                      <td>{{ $Home->harga }}</td>
                      <td><a href="#">Edit</a> | 
                      <a href="#">Hapus</a></td>
                      
                  </tr>
                @endforeach
              </tbody>
          </table>

    </div>
</body>