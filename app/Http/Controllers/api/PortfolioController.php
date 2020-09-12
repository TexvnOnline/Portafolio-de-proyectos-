<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Image;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    public function eliminarimagen($id){
        $image = Image::find($id);
        $archivo = substr($image->url,1);
        $eliminar = File::delete($archivo);
        $image->delete();
        return "eliminado id:".$id. ' '.$eliminar;
        
    }
}
