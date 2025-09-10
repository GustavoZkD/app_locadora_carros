<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'imagem'];

    public function rules(){
        return [
            'nome' => 'required|unique:marcas,nome,'.$this->id.'|min:3|max:100',
            'imagem' => 'required'
        ];
    }

    public function feedbacks(){
        return [
            'required' => 'O campo :attribute é obrigatório.',
            'nome.unique' => 'Já existe uma marca com esse nome.',
            'nome.min' => 'O campo nome deve ter pelo menos 3 caracteres.',
            'nome.max' => 'O campo nome deve ter no máximo 100 caracteres.',
        ];
    }
}
