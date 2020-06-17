<?php

namespace App\Http\Controllers;

use JWTAuth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Http\Requests\RegistrationFormRequest;

class ApiController extends Controller
{
 /**
     * @var bool
     */
    public $loginAfterSignUp = true;

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
public function login(Request $request)
    {
        $input = $request->only('email', 'password');
        $token = null;
        $user=null;
        if (!$token = JWTAuth::attempt($input)) {
            return response()->json([
                'success' => false,
                'message' => 'Email ou Mot de passe est invalide',
            ], 401);
        }
        $user = JWTAuth::setToken($token)->toUser();

        return response()->json([
            'success' => true,
            'token' => $token,
            'data' =>  $user
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function logout(Request $request)
    {

        $this->validate($request, [
            'token' => 'required'
        ]);

        try {
            JWTAuth::invalidate($request->token);

            return response()->json([
                'success' => true,
                'message' => 'Deconnexion avec succée'
            ]);
        } catch (JWTException $exception) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, the user cannot be logged out'
            ], 500);
        }
    }

    /**
     * @param RegistrationFormRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(RegistrationFormRequest $request)
    {
        
        $user = new User();
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->user_type = $request->user_type;
        $user->nom_société = $request->nom_société;
        $user->tel = $request->tel;
        $user->tel_whatsapp = $request->tel_whatsapp;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        if ($this->loginAfterSignUp) {
            return $this->login($request);
        }

        return response()->json([
            'success'   =>  true,
            'data'      =>  $user
        ], 200);
    }

    public function updateUser(Request $request,$id)
    {
        $user=User::find($id);
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->user_type = $request->user_type;
        $user->nom_société = $request->nom_société;
        $user->tel = $request->tel;
        $user->tel_whatsapp = $request->tel_whatsapp;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->titre_civilité = $request->titre_civilité;
        $user->save();


        return response()->json([
            'success'   =>  true,
            'data'      =>  $user
        ], 200);
    }

    }

