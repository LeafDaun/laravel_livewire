<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <h1>Edit</h1>

    
   @if(session('success'))
   <div class="alert alert-success">{{ session('success') }}</div>
@elseif(session('error'))
   <div class="alert alert-danger">{{ session('error') }}</div>
@endif
<div class="row">
   <div class="col-6">
   <form wire:submit.prevent="updateMhs">
       <div class="mb-3">
           <label class="form-label">Nama</label>
           <input wire:model="nama" type="text" class="form-control" >
           @error('nama')
           <p class="text-danger">{{ $message }}</p>
           @enderror
       </div>

       <div class="mb-3">
           <label class="form-label">Alamat</label>
           <input wire:model="alamat" type="text" class="form-control" >
           @error('alamat')
           <p class="text-danger">{{ $message }}</p>
           @enderror
       </div>

       <div class="mb-3">
           <label class="form-label">Jurusan ID</label>
           
           <select  class="form-select" wire:model="jurusan_id">
               @foreach (\App\Models\Jurusan::all() as $jurusan)
                   <option value="{{ $jurusan->id }}">{{ $jurusan->nama_jurusan }}</option>
               @endforeach
           </select>
           @error('jurusan_id')
               <p class="text-danger">{{ $message }}</p>
           @enderror
       </div>

       <button type="submit" class="btn btn-primary">Simpan</button>
   </div>
</form>
</div>
</div>
