<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Persona;
use App\Models\Productos;

class PdfController extends Controller
{
    public function exportarPdfPersonas(){ 
        $personas = Persona::all();
        $pdf = Pdf::loadView('pdf.pdf-personas',['personas'=>$personas]);
        return $pdf ->stream();
        





    }
    public function exportarPdfProductos(){ 
        $Productos = Productos::all();
        $pdf = Pdf::loadView('pdf.pdf-producto',['productos'=>$Productos]);
        return $pdf ->stream();
        





    }
}    
