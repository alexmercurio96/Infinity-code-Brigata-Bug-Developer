<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;




class CreateAnnouncementForm extends Component
{
    public $title;
    public $body;
    public $price;
    public $category;
    

public function announcementStore(){
    $this->validate();
    $category= Category::find($this->category);
    $announcement=$category->announcements()->create([
        'title'=>$this->title,
        'body'=>$this->body,
        'price'=>$this->price,

    ]);

    Auth::user()->announcements()->save($announcement);
    
    session()->flash('message','annuncio inserito con successo');
        $this->reset();
}


public function updated($propertyName){

$this->validateOnly($propertyName);
}

protected $rules =[
    'title'=> 'required|min:4',
    'category'=> 'required',
    'body'=> 'required|max:2000',
    'price'=> 'required|decimal:0,2',



];

protected $messages=[
    'title.required'=>'Il titolo è obbligatorio',
    'title.min'=>'Il titolo deve essere minimo di 4 caratteri',
    'body.max'=>'Il testo deve essere massimo di 2000 caratteri',
    'price.decimal'=>'Il prezzo deve contenere un numero',
    'price.decimal'=>'Il prezzo deve contenere un numero con al massimo 2 numeri decimali',
    'body.required'=>'Il testo è obbligatorio',
    'price.required'=>'Il prezzo è obbligatorio',
];




    public function render()
    {
        
        return view('livewire.create-announcement-form');
    }
}
