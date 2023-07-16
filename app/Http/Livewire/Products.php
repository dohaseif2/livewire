<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithFileUploads;
class Products extends Component
{
    use withFileUploads;
    public $name,$details,$image,$price,$users,$productId;
    public function render()
    {
        $this->products = Product::all();
        return view('livewire.products');
    }
    public function resetInput(){
        $this->name ="";
        $this->details="";
        $this->image="";
        $this->price="";
    
    }
    public function store(){
        
        $product =$this->validate([
            'name'=>'required',
            'price'=>'required',
            'details'=>'required',
            
        ]);

        Product::create($product);
        $this->resetInput();
           
        session()->flash('success','Product added succesfuly .');
        $this->emit('userStore');

    }
    public function edit($Id){
       
        $product = Product::where('id',$Id)->first();
        $this->productId =$product->id;
        $this->name=$product->name;
        $this->details=$product->details;
        $this->price=$product->price;

    }
    public function update($productId){
       
        $product =$this->validate([
            'name'=>'required',
            'price'=>'required',
            'details'=>'required',
            
        ]);
       
        if($this->productId){

            $product = Product::find($this->productId);
            $product->update([
                'name'=>$this->name,
                'details'=>$this->details,
                'price'=>$this->price,
            ]);
        }
        session()->flash('success','Product updated successfully . ');   
        

    }
    
    public function delete($ProductId){
         Product::where('id',$productId)->delete();
         
    }
}
