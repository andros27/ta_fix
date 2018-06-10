<!DOCTYPE html>
<html>
<head>
    <title>Supplier PDF</title>
    <link rel="stylesheet" href="{{ asset('public/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 align="center">DAFTAR SUPPLIER</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No Telp</th>
                        <th>Alamat Kantor</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($supplier as $data)
                    <tr>
                        <td>{{ ++$no }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->no_telp }}</td>
                        <td>{{ $data->alamat_kantor }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>