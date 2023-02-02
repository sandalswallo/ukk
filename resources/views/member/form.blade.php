<div class="modal fade show" id="modalForm" style="display: none; padding-right: 17px;" aria-modal="true" role="dialog"
data-backdrop="static" data -keyboard="false">    
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Large Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    
                    {{-- add nama --}}
                    <div class="form-grup">
                        <label for="nama">Nama Member</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>

                    {{-- add alamat --}}
                    <div class="form-grup">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat">
                    </div>

                    {{-- add tlp --}}
                    <div class="form-grup">
                        <label for="telepon">Tlp</label>
                        <input type="integer" class="form-control" name="telepon" id="telepon">
                    </div>

                     {{-- Add Jenis Kelamin --}}
                     <div class="my-1">
                        <label class="mb-2" for="jenis_kelamin">Jenis Kelamin</label>
                        <br>
                        <select name="jenis_kelamin" id="jenis_kelamin" value="{{ old('jenis_kelamin')}}" class="form-control">
                            <option selected>Pilih...</option>
                            <option value="Laki-laki"> Laki-Laki</option>
                            <option value="Perempuan"> Perempuan</option>
                        </select>
                    </div>
                </div>

                    <button type="submit" class="btn btn-success">Simpan</button>
                 </form>
            </div>
           
        </div>

    </div>

</div>