namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import User Model
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registerSave(Request $request)  
    {  
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:auths,email', // "auths" table use kar raha ho
            'password' => 'required|confirmed'
        ]);

        // Create user in the database
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']), // Hash password
        ]);

        if ($user) {
            return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
        }

        return back()->with('error', 'Something went wrong. Try again.');
    }
}
