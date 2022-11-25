@foreach ($data as $item)
    <tr>
        <td>{{ $item['nama_barang'] }}</td>
        <td>{{ $item['stok_barang'] }}</td>
        <td>{{ $item['harga_barang'] }}</td>
        <td><a href="/barang/{{ $item['id'] }}"><button class="btn btn-primary">Update</button></a></td>
    </tr>
@endforeach