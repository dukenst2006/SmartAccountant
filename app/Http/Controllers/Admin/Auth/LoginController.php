<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Repositories\UserRepository;
use Illuminate\Foundation\Auth\{
    ThrottlesLogins,
    AuthenticatesUsers
};

class LoginController extends Controller
{


    use AuthenticatesUsers;

    public $maxAttempts = 5;
    public $decayMinutes = 3;
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function username()
    {
        return 'email';
    }

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }


    public function login(Request $request)
    {
        $this->validator($request);

        //check if the user has too many login attempts.
        if ($this->hasTooManyLoginAttempts($request)) {
            //Fire the lockout event.
            $this->fireLockoutEvent($request);

            //redirect the user back after lockout.
            return $this->sendLockoutResponse($request);
        }

        //attempt login.
        if (Auth::guard('admin')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            //Authenticated
            return redirect()
                ->intended(route('admin.home'))
                ->with('status', 'You are Logged in as Admin!');
        }

        //keep track of login attempts from the user.
        $this->incrementLoginAttempts($request);

        //Authentication failed
        return $this->loginFailed();
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()
            ->route('admin.login')
            ->with('status', 'Admin has been logged out!');
    }

    private function validator(Request $request)
    {
        $rules = [
            'email' => 'required|email|exists:admins|min:5',
            'password' => 'required|string|min:4',
        ];

        $messages = [
            'email.exists' => 'هذه البيانات غير مطابقة',
        ];

        $request->validate($rules, $messages);
    }

    private function loginFailed()
    {
        return redirect()
            ->back()
            ->withInput()
            ->with('error', 'فشل تسجيل الدخول فضلا حاول مرة اخري');
    }

    protected function authenticated(Request $request, $user)
    {
        $this->notifiyUserIfProductExpiry($user);
        $this->notifiyUserIfProductFinished($user);
    }

    private function notifiyUserIfProductExpiry($user)
    {
        $expiryProducts = Product::where('MarketplaceOwnerID', $this->userRepository->getMyOwner())->whereBetween('ExpiryDate', [now(), now()->addDays(5)])->get();
        foreach ($expiryProducts as $product) {
            $user->notify(new \App\Notifications\Admin\ProductHasExpired(
                    $this->userRepository->getMyOwner(),
                    $product
                ));
        }
    }

    private function notifiyUserIfProductFinished($user)
    {
        $products = Product::where('MarketplaceOwnerID', $this->userRepository->getMyOwner())->where('Quantity', '<=' ,10)->get();
        foreach ($products as $product) {
            $user->notify(new \App\Notifications\Admin\ProductQuantityFinished(
                    $this->userRepository->getMyOwner(),
                    $product
                ));
        }
    }
}
