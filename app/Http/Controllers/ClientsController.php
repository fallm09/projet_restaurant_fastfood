<?php

namespace App\Http\Controllers;

use App\Client;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientsController extends Controller
{
   public function add(){
        $client = Client::paginate(2);
  
    return view('Client.add')->with("clients",$client);
}
  /* public function getAll(){
    $client = Client::all();

    return view('Client.liste')->with("clients",$client);
   }*/



   /*public function update($id){
     
    $clients =client::find($id);
    return 



    return $this->getAll();


   }*/

    public function edit(Request  $request ,$id){
        Client::updateOrCreate(
            [
                'id'=>$id
            ],
            [
                'nom'=>$request->nom,
            ]
            );
       
    // $clients = Client::find($id);
    // //$clients = Client::paginate(2);
  
    return view('Client.add')->with("clients",$id);




   }


   public function persist (Request  $request) {
       
       $client=DB::table("clients")->insert(array(
        'nom'=>$request->nom,
        'prenom'=>$request->prenom,
        'adresse'=>$request->adresse,
        'tel'=>$request->telephone,
        'email'=>$request->email,
        'fidele' =>0,
        ));
       // $client->save();
        return redirect('/client/add')->with('success' , 'Data saved');
   }


    public function searchPost(Request $request) {

            
         $search = $request->get('seachPersonne');
  
          $val="%".$search."%";
             
          $clients = DB::table('clients')->where('nom',"like",$val)->get();

            foreach($clients as $cl) {
                        echo "<option>";
                                echo "<p>";
                                    echo "".$cl->id."";
                                echo "</p>";
                        echo "</option>";
          }
        }




        public function index()
    {

        if(request('search') != null){
            $clients ['data'] = DB::table('clients')->where('nom',"like",'%'.request ('search').'%')->get();
            if($clients ['data']){
                $clients ['success'] = "ok";
            }else
            $clients ['error'] = "erreur";
            

            return response()->json($clients);
        }
    }



    public function delete ($id){
        $clients = Client::find($id);
        
        $clients->delete();
  

        return redirect('/client/add')->with('success' , 'Data delete');

}

}