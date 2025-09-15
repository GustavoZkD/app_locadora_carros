<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'imagem'];

    public static function rules($id = null)
    {
        return [
            'nome' => 'required|unique:marcas,nome,' . $id . '|min:3|max:100',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
    }

    public static function feedbacks()
    {
        return [
            'required' => 'O campo :attribute é obrigatório.',
            'nome.unique' => 'Já existe uma marca com esse nome.',
            'nome.min' => 'O campo nome deve ter pelo menos 3 caracteres.',
            'nome.max' => 'O campo nome deve ter no máximo 100 caracteres.',
            'imagem.mimes' => 'A imagem deve ser um arquivo do tipo: jpeg, png, jpg, gif, svg.',
        ];
    }
}

