<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;

class BookController extends Controller
{

    private $objUser;
    private $objBook;

    public function __construct()
    {
        $this->objUser=new User();
        $this->objBook=new Book();
    }

    public function index()
    {
        $books=$this->objBook->all();
        return view('dashboard', ['books'=> $books]);
    }

    public function show($id)
{
    echo $id;
}

public function create()
{
    return view('create');
}

public function store(Request $request) 
{
    $this->objBook->create([
        'titulo'=>$request->titulo,
        'subtitulo'=>$request->subtitulo,
        'autor'=>$request->autor, 
        'edição'=>$request->edição,
        'editora'=>$request->editora,
        'ano_da_publicação'=>$request->ano_da_publicação,
        'id_user'=>Auth::id()

    ]);
    return redirect ("/dashboard");
}

}
