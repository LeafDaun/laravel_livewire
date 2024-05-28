<?php

namespace App\Livewire\Jurusan;

use App\Models\Jurusan;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;

class EditJurusan extends Component
{

    #[Title('Jurusan-Edit')]

    #[Rule('required')]
    public $nama_jurusan;

    public $jr;

    public function mount(Jurusan $jr)
    {
        $this->jr = $jr;
        $this->nama_jurusan = $jr->nama_jurusan;
    }

    public function updateJR()
    {
        try {
            
            $validated = $this->validate();
            $this->jr->update($validated);
            session()->flash('success', 'data berhasil di update donk..');
            return $this->redirect('/jurusan', navigate:true);


        } catch (\Throwable $th) {
            session()->flash('error', $th->getMessage());
            return;
        }
    }

    public function render()
    {
        return view('livewire.jurusan.edit-jurusan');
    }
}
