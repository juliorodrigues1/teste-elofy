<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function login(LoginRequest $request)
    {
        try {
        $email = $request->email;
        $senha = $request->password;
            $usuario = User::where('email', $email)->where('password', $senha)->first();
           if (is_null($usuario)) {
                return response()->json(['message' => 'Usuário não encontrado'], 404);
            }
            if ($usuario) {
                return response()->json(['message' => 'Login realizado com sucesso'], 200);
            } else {
                return response()->json(['message' => 'Usuário não encontrado'], 204);
            }
        }catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
