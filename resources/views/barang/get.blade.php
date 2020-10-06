@foreach ($database as $row)
    <tr>
        <td>{!! $row->id; !!}</td>
        <td>{!! $row->nama_barang; !!}</td>
        <td>{!! $row->satuan; !!}</td>
        <td><a href="javascript:void(0)" class="btn btn-info btn-sm">Edit</a>  <a href="javascript:void(0)" class="btn btn-danger btn-sm" onclick="destroy(<?= $row->id ?>)">Delete</a></td>
    </tr>
@endforeach