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
                        <label for="id_outlet">No</label>
                        <input type="integer" class="form-control" name="id_outlet" id="id_outlet">
                    </div>

                    <div class="form-group">
                        <label for="nama_paket"> Nama Paket</label>
                        <input type="text" class="form-control" name="nama_paket" id="nama_paket">
                    </div>

                    <div class="my-1">
                        <label class="mb-2" for="jenis">Paket</label>
                        <br>
                        <select name="jenis" id="jenis" value="{{ old('jenis')}}" class="form-control">
                            <option selected>Pilih...</option>
                            <option value="Cuci kering"> Cuci kering</option>
                            <option value="Cuci basah"> Cuci basah</option>
                            <option value="Cuci setrika"> Cuci setrika</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="harga">harga</label>
                        <input type="integer" class="form-control" name="harga" id="harga">
                    </div>
                    
                    <div class="modal-footer justify-content-between">
                        <button type="submit" class="btn btn-success btn-flat">Simpan</button>
                    </div>
                </form>

            </div>
        </div>

    </div>

</div>