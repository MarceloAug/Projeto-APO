<?php
namespace App\Repositories;
use App\Pousada;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class ImageRepository
{
    public function saveImagePousada($image, $id, $nome)
    {
        $pousada = Pousada::find($id);

        $name = $id.\kebab_case($nome);
        $extension = $image->extension();
        $nameFile = "{$name}.{$extension}";
        $upload = $image->storeAs('imagens',$nameFile);

        $pousada->imagem = $nameFile;
        $pousada->save();
    }
}