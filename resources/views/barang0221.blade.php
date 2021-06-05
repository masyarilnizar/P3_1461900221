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

<p>Cari Data Barang :</p>
	<form action="/barang0221/caribarang" method="GET">
		<input type="text" name="cari" placeholder="Cari Pelanggan .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>

<body>
    <div style="overflow-x: auto">
          <table>
              <thead>
                  <tr>
                      <th>ID Barang</th>
                      <th>Nama Barang</th> 
                      <th>Harga</th>
                  </tr>
              </thead>
              <tbody>
                
                @foreach ($barang as $Barang)
                  <tr>
                      <td>{{ $Barang->id }}</td>
                      <td>{{ $Barang->nama }}</td>
                      <td>{{ $Barang->harga }}</td>
                  </tr>
                @endforeach
              </tbody>
          </table>

    </div>
</body>