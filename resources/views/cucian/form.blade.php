<div class="modal fade " id="modalForm" style="display: none; padding-right: 17px;" aria-modal="true" role="dialog" 
data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog-centered modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Large Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                
                <form action="" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="nama">Cucian</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                    
                    <div class="modal-footer justify-content-between">
                        <button type="submit" class="btn btn-success btn-flat">Simpan</button>
                    </div>
                </form>

            </div>
        </div>

    </div>

</div>