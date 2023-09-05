# Lumen PHP Framework
 
<p>UN comment facades under bottstrap/App.php in line no 24 or 25 for using DB Class </p>

>**DB Connection**
```
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

//Connecting DB Class
use Illuminate\support\Facades\DB; 

class MyController extends Controller { 

        public function dbConnection(){
            $dbName = DB::Connection()->getDatabaseName();
            return $dbName;
        }

} 
```