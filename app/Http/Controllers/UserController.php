<?php
    namespace App\Http\Controllers; 

    use App\Models\User;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;

    class  UserController extends Controller{

        public function createUser(Request $request)
        {   
            $this->validate($request, ['name' => 'required|max:256', 'description|max:256|min:15' => 'required', 'idade' => 'required']);
            $user = User::create($request->all());
            return response()->json($user,201);
        }

        public function viewUser(Request $request, $id)
        {
            $user = User::find($id);
            $result = !is_null($user) ? response()->json($user,201) : $this->response->error('User not found.', 404);
            
            return $result;
        }

        public function viewUsers(){
            $user = User::all();
            return response()->json($user);
        }

        public function updateUser(Request $request, $id)
        {
            $user = User::find($id);
            if(!is_null($user)){
                $user->name = $request->input('name');
                $user->description = $request->input('description');
                $user->idade = $request->input('idade');
                $user->save();

                return response()->json($user,201);
            }else {
                return $this->response->error('User not existing.', 404);
            }
            
        }

        public function deleteUser(Request $request, $id)
        {
            $user = User::find($id);
            $result = !is_null($user) ? $user->delete() : $this->response->error('User not found.', 404);

            return response()->json($user,201);
        }
    }
