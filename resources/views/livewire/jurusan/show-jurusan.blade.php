<div>
    

    <div class="row">
        <div class="col-12">
            <a wire:navigate class="btn btn-primary float-end" href="/jurusan/create">Tambah Data</a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <table class="table mt-3">
        <tr>
            <th>No</th><th>Nama Jurusan</th><th>Aksi</th>
        </tr>

        @foreach($jurusan as $jr)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $jr->nama_jurusan }}</td>

                <td>
                    <a wire:navigate href="/jurusan/{{ $jr->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                   <button wire:click="delete({{ $jr->id }})" wire:confirm="yakin dihapus?" class="btn btn-danger btn-sm">Hapus</button>
                
                </td>
            </tr>
        @endforeach
    </table>

    {{ $jurusan->links('pagination::bootstrap-5') }}


</div>
