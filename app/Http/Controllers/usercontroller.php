<?php




namespace App\Http\Controllers;
use Illuminate\Http\Request;
use app\models\User;

class usercontroller extends Controller
{
     public function delete_allusers(){
           $data=user::all();
           $data->delete();
         
     }
}
