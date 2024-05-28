<div>
    <h1>Create</h1>

   @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
     @elseif(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
   @endif
    <div class="row">
        <div class="col-6">
        <form wire:submit.prevent="create">
            <div class="mb-3">
                <label class="form-label">Nama Jurusan</label>
                <input wire:model="nama_jurusan" type="text" class="form-control" >
                @error('nama')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
    </div>
</div>

