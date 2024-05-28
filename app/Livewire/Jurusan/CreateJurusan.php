<?php

namespace App\Livewire\Jurusan;

use App\Models\Jurusan;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;

class CreateJurusan extends Component
{

    #[Title('Jurusan-Create')]

    #[Rule('required')]
    public $nama_jurusan;


    public function create()
    {
        try {
            
            $validated = $this->validate();
            Jurusan::create([
                'nama_jurusan' => $this->nama_jurusan,
                
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
        return view('livewire.jurusan.create-jurusan');
    }
}
