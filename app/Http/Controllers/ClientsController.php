<?php

namespace App\Http\Controllers;

use App\Client;
use Dompdf\Adapter\PDFLib;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
class ClientsController extends Controller
{
   public function add(){
        $client = Client::paginate(4);
  
    return view('Client.add')->with("clients",$client);
}
  /* public function getAll(){
    $client = Client::all();

    return view('Client.liste')->with("clients",$client);
   }*/


    public function edit( Client $client){
       
       
        $clients = Client::all();
    // //$clients = Client::paginate(2);
  
    return view('client.edit', compact('client'));

   }
     public function update(Client $client){
    
    $data = request()->validate([
             'nom'=>'required|min:2',
             'prenom'=>'required|min:6',
             'adresse' =>'required|min:10',
             'tel'=>'required|min:9',
             'email'=>'required|min:10',
    ]);

        $client->update($data);
        return redirect('/client/add');
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


    public function downloadPDF (){
        $client = Client::all();

      //  $Client= $this->$cl->get();
    // load view for pdf file
         $pdf = PDF::loadView('pdf.view', ['Clients' => $client]);

         return $pdf->download('view.pdf');

}       




    public function viewPDF()
{
    $client = Client::all();
  //  $Client= $this->$client->get();

    $pdf = PDF::loadView('pdf.view', ['Clients' => $client]);

    return $pdf->stream();
}



 








}