<?php

namespace App\Livewire\Jurusan;

use App\Models\Jurusan;
use Livewire\Attributes\Title;
use Livewire\Component;

class ShowJurusan extends Component
{
    #[Title('Show-Jurusan')]

    public function render()
    {
        return view('livewire.jurusan.show-jurusan', [
            'jurusan' => Jurusan::latest()->paginate(5)
        ]);
    }

    public function delete($id)
    {
        try {
            
            Jurusan::query()->findOrFail($id)->delete();

            session()->flash('success', 'data berhasil di hapus..');

        } catch (\Throwable $th) {
            session()->flash('error', $th->getMessage());
            return;
        }
    }
}
