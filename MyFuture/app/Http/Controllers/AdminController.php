<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemCreateRequest;
use App\Http\Requests\ItemUpdateRequest;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Storage;

class AdminController extends Controller
{
    // Leer Registros (Read)
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    // Proceso de Creación de un Registro
    public function store(ItemCreateRequest $request)
    {
        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->userName = $request->userName;
        $users->lastName = $request->lastName;
        $users->birthday = $request->birthday;
        $users->genre = $request->genre;
        $users->password = $request->password;
        $users->avatar = $request->file('avatar')->store('/');
        $users->save();
        return redirect('admin/users')->with('message', 'Guardado Satisfactoriamente !');
    }

    // Crear un Registro (Create)
    public function crear()
    {
        $users = User::all();
        return view('admin.users.crear', compact('users'));
    }



    // Leer un Registro específico (Leer)
    public function show($id)
    {
        //
    }

    //  Actualizar un registro (Update)
    public function actualizar($id)
    {
        $users = User::find($id);
        return view('admin/users.actualizar', ['users' => $users]);
    }

    // Proceso de Actualización de un Registro (Update)
    public function update(ItemUpdateRequest $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->userName = $request->userName;
        $users->lastName = $request->lastName;
        $users->birthday = $request->birthday;
        $users->genre = $request->genre;
        if ($request->hasFile('avatar')) {
            $users->avatar = $request->file('avatar')->store('/');
        }
        $users->save();
        Session::flash('message', 'Editado Satisfactoriamente !');
        return Redirect::to('admin/users');
    }

    // Eliminar un Registro
    public function eliminar($id)
    {
        $users = User::find($id);

        // Elimino la imagen de la carpeta 'uploads'
        $imagen = explode(",", $users->avatar);
        Storage::delete($imagen);

        User::destroy($id);
        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('admin/users');
    }
}
