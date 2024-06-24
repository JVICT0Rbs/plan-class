<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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
        $books= $this->objBook->where('id_user', Auth::id())->simplePaginate(5);
        return view('dashboard')->with("books", $books);
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

public function edit($id)
{
    $book = $this->objBook->find($id);
    return view('edit', compact('book'));
}

public function update(Request $request, $id)
{
    $this->objBook->where(['id'=>$id])->update([
        'titulo'=>$request->titulo,
        'subtitulo'=>$request->subtitulo,
        'autor'=>$request->autor, 
        'edição'=>$request->edição,
        'editora'=>$request->editora,
        'ano_da_publicação'=>$request->ano_da_publicação,
  
    ]);
    return redirect('dashboard');
}

public function destroy($id)
{
    $this->objBook->destroy($id);
    return redirect('dashboard');
}

public function logout(request $request) {
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
}

}
