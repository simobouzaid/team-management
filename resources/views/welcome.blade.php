@php 
use App\Models\task_user;
$user = task_user::all();

foreach($user as $u){

echo ''.$u->data_User()->name;


}

@endphp