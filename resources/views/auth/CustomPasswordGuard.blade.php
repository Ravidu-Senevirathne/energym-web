namespace App\Auth;

use Illuminate\Auth\SessionGuard;
use Illuminate\Contracts\Auth\UserProvider;

class CustomPasswordGuard extends SessionGuard
{
    public function attempt(array $credentials = [], $remember = false)
    {
        // Attempt authentication with bcrypt-hashed password
        $attempt = parent::attempt($credentials, $remember);

        // If bcrypt attempt fails and password is plaintext, try plaintext authentication
        if (!$attempt && !$this->isBcryptHashed($credentials['password'])) {
            $user = $this->provider->retrieveByCredentials($credentials);

            if ($user && $this->provider->validateCredentials($user, $credentials)) {
                $this->login($user, $remember);
                return true;
            }
        }

        return $attempt;
    }

    protected function isBcryptHashed($password)
    {
        return preg_match('/^\$2[aby]?\$[0-9]{2}\$.{53}$/', $password);
    }
}
