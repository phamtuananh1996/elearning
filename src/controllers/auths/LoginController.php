<?php
namespace GFL\Elearning\controllers\auths;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JWTAuth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $token = null;
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return $this->response('Đăng nhập thất bại', 500);
            }
        } catch (JWTAuthException $e) {
            return $this->response('Đăng nhập thất bại', 500);
        }
        $user = JWTAuth::toUser($token);
        $data = ['user' => $user, 'token' => $token];
        return $this->response($data);
    }

    public function response($data,$status=200)
    {
      return response()->json($data);
    }

}
