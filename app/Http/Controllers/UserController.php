<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {
    /* Display a listing of the resource. */
    public function index() {}

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
                    'message' => 'Lo sentimos, usuario o contraseña incorrecta',
                    'css' => 'danger'
                ]);
    }

    /* Show the form for creating a new resource. */
    public function create() {}

    private function validateForm(Request $request, $id = null){
        $request->validate(
            [
                'name'=>'required|min:3|max:30',
                'email' => 'required',
                'password' => 'required',
                'position'=>'min:5|max:25',
                'description' => 'max:220',
                'profile_img' => 'image',
            ],
            [
                'name.required' => 'Por favor, ingrese su nombre',
                'name.min' => 'Su nombre debe tener mínimo 2 caracteres',
                'name.max' => 'Su nombre debe tener máximo 25 caracteres',

                'email.required' => 'Por favor, ingrese un correo electrónico',

                'password.required' => 'Por favor, ingrese una contraseña',

                'position.min' => 'Posición: mínimo 2 caracteres',
                'position.max' => 'Posición: máximo 25 caracteres',

                'description.max' => 'La descripción debe tener máximo 220 caracteres',

                'profile_img.image' => 'Por favor, ingrese un archivo del tipo imagen',
            ]
        );
    }

    // Se crea una función para la subida de imagenes que retorna un string (nombre de la imagen)
    private function uploadImg(Request $request):string {
        /*
            Si no enviaron una archivo de imagen "store"
                Nombre de la imagen por default.
        */

        $profile_img = 'noDisponible.jpg';

        /*
            Si no enviaron una archivo de imagen "upload"
                Nombre de la imagen por default.
        */
        if ($request -> has('imgActual')) {
            $profile_img = request() -> imgActual;
        }

        /*
            Si enviaron una imagen
            - Se debe subir en /imgs/profile_img
        */

        if ($request->file('profile_img')) {
            // Traemos el archivo
            $file = $request->file('profile_img');

            // Renombrado:
            $time = time();
            $extension = $file->getClientOriginalExtension();

            $profile_img = $time .'.'.$extension;

            // Copiar el archivo imagen
            $file->move(public_path('imgs/profile_img/'), $profile_img);
        }

        return $profile_img;
    }

    /* Store a newly created resource in storage. */
    public function store (Request $request) {
        $this->validateForm($request);

        $name = request()->name;
        $email = request()->email;
        $position = request()->position;
        $description = request()->description;
        $password = request()->password;
        $role = 1;

        try {
            $user = new User;

            $user -> name = $name;
            $user -> email = $email;

            // Subimos img
            $user -> profile_img = $this->uploadImg($request);

            $user -> position = $position;
            $user -> description = $description;
            $user -> password = $password;

            /*
                Para los roles:
                    - 0: admin
                    - 1: user
            */
            $user -> role = $role;

            $user -> save();

            // Almacenar el ID del usuario en la sesión
            session(['user_id' => $user->id]);

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

    /* Show the form for editing the specified resource. */
    public function edit($id) {
        $user = User::find($id);
        $users = User::all();

        return view('userEdit', [
            'user' => $user
        ]);
    }

    /* Update the specified resource in storage. */
    public function update(Request $request, Dashboard $dashboard) {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
