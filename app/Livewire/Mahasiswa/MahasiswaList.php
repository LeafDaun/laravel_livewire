<?php

namespace App\Livewire\Mahasiswa;

use App\Models\Mahasiswa;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class MahasiswaList extends Component
{
    use WithPagination;

    #[Title('Mahasiswa List')]

    public function delete($id)
    {
        try {
            
            Mahasiswa::query()->findOrFail($id)->delete();

            session()->flash('success', 'data berhasil di hapus..');

        } catch (\Throwable $th) {
            session()->flash('error', $th->getMessage());
            return;
        }
    }

    public function render()
    {
        return view('livewire.mahasiswa.mahasiswa-list', [
            'mahasiswa' => Mahasiswa::latest()->paginate(5),
        ]);
    }
}
