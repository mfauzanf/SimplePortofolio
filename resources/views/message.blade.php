<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Telp</th>
                <th>Pesan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->message}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>