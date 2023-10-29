<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /* Display a listing of the resource. */
    public function index() {
        return view('login');
    }

    /* user validated */
    public function validation() {
        $email = request()->email;
        $user = User::where('email', $email)->first();

        $password = request()->password;

        if ($user && Hash::check($password, $user->password)) {
            // Almacenar el ID del usuario en la sesión
            session(['user_id' => $user->id]);

            return redirect('/dashboard');
        }

        return redirect('/login')
                ->with ([
                    'message' => 'Lo sentimos, usuario no registrado 👎🏻',
                    'css' => 'danger'
                ]);
    }

    /* Show the form for creating a new resource. */
    public function create() {
        //
    }

    /* Store a newly created resource in storage. */
    public function store () {
        $name = request()->name;
        $email = request()->email;
        $password = request()->password;

        try {
            $user = new User;

            $user -> name = $name;
            $user -> email = $email;
            $user -> password = $password;

            $user -> save();

            return redirect('/dashboard')
                ->with ([
                    'message' => 'Bienvenido '.$name.' 👍🏻',
                    'css' => 'success'
                ]);
        } catch (\Throwable $th) {
            return redirect('/login')
                ->with ([
                    'message' => 'Lo sentimos, usuario no registrado 👎🏻',
                    'css' => 'danger'
                ]);
        }
    }

    /* Display the specified resource. */
    public function show(Dashboard $dashboard) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }


    // Se crea una función para la subida de imagenes que retorna un string (nombre de la imagen)
    private function uploadImg(Request $request):string {
        /*
            Si no enviaron una archivo de imagen "store"
                Nombre de la imagen por default.
        */

        $profile_img = 'noDisponible.png';

        /*
            Si no enviaron una archivo de imagen "upload"
                Nombre de la imagen por default.
        */
        if ($request -> has('imgActual')) {
            $profile_img = request() -> imgActual;
        }

        /*
             Si enviaron una imagen
                - Se debe subir en /imgs/productos
        */

        if ($request->file('profile_img')) {
            // Traemos el archivo
            $file = $request->file('profile_img');

            // Renombrado:
            $time = time();
            $extension = $file->getClientOriginalExtension();

            $profile_img = $time .'.'.$extension;

            // Copiar el archivo imagen
            $file->move(public_path('imgs/productos/'), $profile_img);
        }

        return $profile_img;
    }

    /* Update the specified resource in storage. */
    public function update(Request $request, Dashboard $dashboard) {
        // Subimos img
        // $user -> prdImagen = $this->uploadImg($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
