@foreach($database as $row)
                <tr>
                    <td>{!! $row->id !!}</td>
                    <td>{!! $row->nama_barang !!}</td>
                    <td>{!! $row->satuan !!}</td>
                    <td><a href="javascipt:void(0)" class="btn btn-info btn-sm" onclick="edit(<?= $row->id ?>)">Edit</a> <a href="javascript:void(0)" class="btn btn-danger btn-sm" onclick="hapus(<?= $row->id ?>)">Delete</a></td>
                </tr>
@endforeach