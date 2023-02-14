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
                        <label class="mt-2" for="nama">Outlet</label>
                        <select type="text" name="outlet_id" id="outlet_id" value="{{ old('outlet_id')}}" class="form-control @error('outlet_id') is-invalid @enderror">
                            <option selected>Pilih...</option>
                            @foreach($outlet as $outlet)
                            <option value="{{$outlet->id}}">{{$outlet->nama}}</option>
                            @endforeach
                            @error('outlet_id')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </select>
                    </div>

                        <div class="form-group">
                            <label class="mb-2" for="nama">Jenis paket</label>
                            <br>
                            <select name="jenis_paket" id="jenis_paket" value="{{ old('jenis_paket')}}" class="form-control">
                                <option value="kiloan"> kiloan</option>
                                <option value="satuan"> satuan</option>
                            </select>
                        </div>
                    
                        <div class="form-group">
                            <label class="mb-2" for="nama">Cucian</label>
                            <br>
                            <select name="cucian" id="cucian" value="{{ old('cucian')}}" class="form-control">
                                <option value="baju"> Baju</option>
                                <option value="celana"> Celana</option>
                                <option value="selimut"> Selimut</option>
                                <option value="bedcover"> BedCover</option>
                            </select>
                        </div>

                    <div class="form-group">
                        <label for="nama">Nama paket</label>
                        <input type="text" class="form-control" name="nama_paket" id="nama_paket">
                    </div>

                    <div class="form-group">
                        <label for="nama">Harga</label>
                        <input type="number" class="form-control" name="harga" id="harga">
                    </div>
                    
                    <div class="modal-footer justify-content-between">
                        <button type="submit" class="btn btn-success btn-flat">Simpan</button>
                    </div>
                </form>

            </div>
        </div>

    </div>

</div>