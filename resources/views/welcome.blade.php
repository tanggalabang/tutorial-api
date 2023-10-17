<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>

<body>
    @if(session()->has('success'))
    <div style="color:green">
        {{session('success')}}
    </div>
    <br>
    <br>
    @endif
    @if(isset($errors) && $errors->any())
    <div style="color:red">
        @foreach ($errors->all() as $error)
        {{$error}}
        @endforeach
    </div>
    <br>
    <br>
    @endif
    @if (session()->has('failures'))
    <table border="1" cellspacing="0" cellpadding="2">
        <tr>
            <th>Baris</th>
            <th>Attribute</th>
            <th>Error</th>
            <th>Value</th>
        </tr>

        @foreach (session()->get('failures') as $validasi)
        <tr>
            <td>{{ $validasi->row() }}</td>
            <td>{{ $validasi->attribute() }}</td>
            <td>
                @foreach ($validasi->errors() as $error)
                {{$error}}
                @endforeach
            </td>
            <td>{{ $validasi->values()[$validasi->attribute()] }}</td>
        </tr>
        @endforeach
    </table>
    <br>
    <br>
    @endif
    <div>
        <button type="button">Import</button>
        <button type="button">Eksport</button>
    </div>
    <br>
    <br>
    <div>
        <form action="{{route('barang.import')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="">Pilih File</label>
                <input type="file" name="file">
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