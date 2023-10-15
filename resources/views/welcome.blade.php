<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>

<body>
    <div>
        <button type="button">Import</button>
        <button type="button">Eksport</button>
    </div>
    <br>
    <br>
    <div>
        <form action="">
            <div>
                <label for="">Pilih File</label>
                <input type="file">
            </div>
            <button type="submit">Import</button>
        </form>
    </div>
    <br>
    <br>
    <div>
        <table border="1" cellspacing="0" cellpadding="2">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Merk</th>
                    <th>Kode</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barangs as $item)
                <tr>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->harga}}</td>
                    <td>{{$item->stok}}</td>
                    <td>{{$item->merk}}</td>
                    <td>{{$item->kode}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>