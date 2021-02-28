<!-- Modal -->
@foreach($unit as $o)
<div class="modal fade" id="{{ $o->unit_id }}" tabindex="-1" role="dialog" aria-labelledby="menu_motor" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Menu Motor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <h1>{{ $o->nama_motor }}</h1>
            <p>{{ $o->warna }}</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-modal" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endforeach