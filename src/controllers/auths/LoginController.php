<?php
namespace GFL\Elearning\controllers\auths;

use GFL\Elearning\controllers\ApiController;
use Illuminate\Http\Request;
use GFL\Elearning\requests\AuthRequests\LoginRequest;
use JWTAuth;

class LoginController extends ApiController
{
    public function login(LoginRequest $request)
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

}
