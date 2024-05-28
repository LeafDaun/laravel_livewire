<?php

namespace App\Livewire\Mahasiswa;

use Livewire\Component;
use App\Models\Mahasiswa;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;

class MahasiswaEdit extends Component
{

    public $mhs;
    #[Title('Mahasiswa-Edit')]

    #[Rule('required')]
    public $nama;

    #[Rule('required')]
    public $alamat;

    #[Rule('required')]
    public $jurusan_id;

    public function mount(Mahasiswa $mhs)
    {
        $this->mhs = $mhs;
        $this->nama = $mhs->nama;
        $this->alamat = $mhs->alamat;
        $this->jurusan_id = $mhs->jurusan_id;

    }

    public function updateMhs()
    {
        try {
            
            $validated = $this->validate();
            $this->mhs->update($validated);
            session()->flash('success', 'Berhasil di UPDATE..');
            return $this->redirect('/mahasiswa', navigate:true);

        } catch (\Throwable $th) {
           session()->flash('error', $th->getMessage());
           return;
        }

       
    }

    public function render()
    {
        return view('livewire.mahasiswa.mahasiswa-edit');
    }
}
