<div class="btn-group" role="group">
    <div class="mx-1">
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default" >
            <i class="bi bi-trash-fill"></i> Hapus
        </button>
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Konfirmasi</h4>
                    </div>
                <div class="modal-body">
                    <p>Yakin Menghapus Data Ini</p>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('kategori.destroy', $model->id) }}" method="POST">
                        @csrf @method('DELETE')
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-danger  delete-notification">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="mx-1">
        <a href="{{ route('kategori.edit', $model->id) }}" class="btn btn-success">
            <i class="bi bi-pencil-square"></i> Edit
        </a>
    </div>
</div>