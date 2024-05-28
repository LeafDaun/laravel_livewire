<?php

namespace App\Livewire\Mahasiswa;

use App\Models\Mahasiswa;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

class MahasiswaCreate extends Component
{
    #[Title('Mahasiswa-Create')]

    #[Rule('required')]
    public $nama;

    #[Rule('required')]
    public $alamat;

    #[Rule('required')]
    public $jurusan_id;

    public function create()
    {
        try {
            
            $validated = $this->validate();
            Mahasiswa::create([
                'nama' => $this->nama,
                'alamat' => $this->alamat,
                'jurusan_id' => $this->jurusan_id,
            ]);
    
            session()->flash('success','berhasil ditambahkan..');  
            $this->reset();

        } catch (\Throwable $th) {
           session()->flash('error', $th->getMessage());
            return ;
        }
       


    }

    public function render()
    {
        return view('livewire.mahasiswa.mahasiswa-create');
    }
}
