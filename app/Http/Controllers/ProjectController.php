<?php

namespace App\Http\Controllers;

use App\Models\ProjectList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    
    public function project_list_detail($id){
    
    
    $obj = array();
    try {
        //code...
        $data = ProjectList::find($id);
        $obj['namaKlien'] = 'namaKU';
        // $obj = json_decode($data->isi);
    
        return response()->json($obj);    
    } catch (\Throwable $th) {
        //throw $th;
        return response()->json($obj);   
    }
 
    
    }
   
    public function project_list(){
            $obj = array();
            $data = ProjectList::all();
            foreach($data as $d){
                $obj[] = array(
                    'id' => $d->id,
                    'name' => $d->nama_client,
                    'acara' => $d->jenis,
                    'template' => $d->template,
                    'status' =>'finished',
                    'email' => $d->email,
                );
            }
            return response()->json($obj);
    }

    public function project_store(Request $request){
        DB::beginTransaction();
        try {
            $fotoWanita = '';
            $fotoPria = '';
            $gambarUtama = '';
            $gambarCover = '';
             if ($request->fotoPria) {
                    $image = $request->fotoPria;
                    $name = base64_encode(Str::random(32)).'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/project');
                    $image->move($destinationPath, $name);
                    $fotoPria = $name;
               }
             if ($request->fotoWanita) {
                    $image = $request->fotoWanita;
                    $name = base64_encode(Str::random(32)).'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/project');
                    $image->move($destinationPath, $name);
                    $fotoWanita = $name;
               }
             if ($request->gambarUtama) {
                    $image = $request->gambarUtama;
                    $name = base64_encode(Str::random(32)).'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/project');
                    $image->move($destinationPath, $name);
                    $gambarUtama = $name;
               }
             if ($request->gambarCover) {
                    $image = $request->gambarCover;
                    $name = base64_encode(Str::random(32)).'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/project');
                    $image->move($destinationPath, $name);
                    $gambarCover = $name;
               }
             
               $formData = array(
                "namaKlien" => $request->namaKlien,
                "emailKlien" => $request->emailKlien,
                "acara" => $request->acara,
                "template" => $request->template,
                "namaPasangan" => $request->namaPasangan,
                "musik" => $request->musik,
                "namaPria" => $request->namaPria,
                "kataPengantar" => $request->kataPengantar,
                "pesan" => $request->pesan,
                "namaLengkapPria" => $request->namaLengkapPria,
                "ayahPria" => $request->ayahPria,
                "ibuPria" => $request->ibuPria,
                "namaWanita" => $request->namaWanita,
                "namaLengkapWanita" => $request->namaLengkapWanita,
                "ayahWanita" => $request->ayahWanita,
                "ibuWanita" => $request->ibuWanita,
                "alamatResepsi" => $request->alamatResepsi,
                "tglResepsi" => $request->tglResepsi,
                "waktuResepsi" => $request->waktuResepsi,
                'fotoWanita'=> $fotoWanita,
                'fotoPria'=> $fotoPria,
                'gambarUtama'=> $gambarUtama,
                'gambarCover'=> $gambarCover
               );


               ProjectList::create([
                'nama_client' => $request->namaKlien,
                'email' => $request->emailKlien,
                'isi' => json_encode($formData),
                'link' => strtolower(str_replace(' ', '-', $request->namaPasangan)),
                'template' => $request->template,
                'jenis' =>  $request->acara
               ]);

               DB::commit();
               return response()->json([
                'error' => false,
                'message' => 'ok',
                'data' => ''
               ],201);
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return response()->json([
                'error' => true,
                'message' => 'ok',
                'data' => $th->getMessage()
               ],500);
        }


    }


    
}