<?php

namespace App\Http\Controllers;

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


}
