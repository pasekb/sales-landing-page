<!-- Modal -->
<div class="modal fade" id="menu_motor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="myTable" class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Nama Motor</th>
                            <th>Harga</th>
                            <th>Jenis</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($daftar as $o)
                        <tr data-motor="{{ $o->nama_unit }}"
                            data-harga_motor="Rp {{ number_format($o->harga, 0,'.', '.') }}"
                            data-angka_motor="{{ $o->harga }}" class="pilih">
                            <td>{{ $no++ }}</td>
                            <td>{{ $o->nama_unit }}</td>
                            <td>{{ number_format($o->harga, 0) }}</td>
                            <td>{{ $o->jenis_unit }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>