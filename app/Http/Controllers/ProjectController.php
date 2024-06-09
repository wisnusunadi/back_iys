<?php

namespace App\Http\Controllers;

use App\Models\MusicList;
use App\Models\ProjectList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use File;

class ProjectController extends Controller
{

    public function get_undangan($value){
        $getProject = ProjectList::where('link',$value);
        if($getProject->count() > 0){
            return 'ada';
        }else{
            return 'kosong';
        }
        return 'kososng';
    
    }

    public function music_delete($id){
        DB::beginTransaction();
        try {
        //code...
        $data = MusicList::find($id);
        $data->delete();

        DB::commit();
        return response()->json([
            'error' => false,
            'message' => 'ok',
            'data' => ''
           ],200);
      } catch (\Throwable $th) {
        //throw $th;
        DB::rollBack();
        return response()->json([
            'error' => true,
            'message' => 'Musik digunakan',
            'data' => ''
           ],500);
      }
    }


    public function project_list_delete($id){
        DB::beginTransaction();
        try {
        //code...
        $data = ProjectList::find($id);
        $data->delete();

        DB::commit();
        return response()->json([
            'error' => false,
            'message' => 'ok',
            'data' => ''
           ],200);
      } catch (\Throwable $th) {
        //throw $th;
        DB::rollBack();
        return response()->json([
            'error' => true,
            'message' => 'nok',
            'data' => ''
           ],500);
      }
    }

    public function project_list_update(Request $request,$id){
        
        DB::beginTransaction();
        try {
            $data = ProjectList::find($id);
            $pastData = json_decode($data->isi);
            //code...
            $fotoWanita =  $request->fotoWanita;
            $fotoPria = $request->fotoPria;
            $gambarUtama = $request->gambarUtama;
            $gambarCover = $request->gambarCover;
            $fotoGallery = $pastData->gallery;

            if ($request->file('gallery')) {
                foreach ($pastData->gallery as $past) {
                    File::delete(public_path('project/'.$past));
                }
                $fotoGallery = array();
                foreach ($request->file('gallery') as $file) {
                    $image = $file;
                    $name = base64_encode(Str::random(32)).'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/project');
                    $image->move($destinationPath, $name);
                    $fotoGallery[] = $name;
                }
                

            }

            if ($request->file('fotoPria')) {
                    File::delete(public_path('project/'.$pastData->fotoPria));
                    $image = $request->fotoPria;
                    $name = base64_encode(Str::random(32)).'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/project');
                    $image->move($destinationPath, $name);
                    $fotoPria = $name;
               }
             if ($request->file('fotoWanita')) {
                    File::delete(public_path('project/'.$pastData->fotoWanita));
                    $image = $request->fotoWanita;
                    $name = base64_encode(Str::random(32)).'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/project');
                    $image->move($destinationPath, $name);
                    $fotoWanita = $name;
               }
             if ($request->file('gambarUtama')) {
                    File::delete(public_path('project/'.$pastData->gambarUtama));
                    $image = $request->gambarUtama;
                    $name = base64_encode(Str::random(32)).'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/project');
                    $image->move($destinationPath, $name);
                    $gambarUtama = $name;
               }
             if ($request->file('gambarCover')) {
                    File::delete(public_path('project/'.$pastData->gambarCover));
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
                'gambarCover'=> $gambarCover,
                'gallery'=> $fotoGallery
               );



            $data->nama_client = $request->namaKlien;
            $data->email = $request->emailKlien;
            $data->isi = json_encode($formData);
            $data->link = strtolower(str_replace(' ', '-', $request->namaPasangan));
            $data->template = $request->template;
            $data->jenis = $request->acara;
            $data->music_list_id = $request->musik;
            $data->save();




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
                'message' => 'nok',
                'data' => $th->getMessage()
               ],500);
        }

    }

    public function project_list_detail($id){


    $obj = array();
    try {
        //code...
        $gambarUtamaView = "";
        $gambarCoverView = "";
        $fotoPriaView = "";
        $fotoWanitaView = "";
        $galleryView = array();




        $Music = MusicList::all();
        foreach($Music as $d){
            $musicList[] = array(
                'id' => $d->id,
                'file' => $d->nama,
                'judul' => $d->nama_original,
                'kategori' => $d->kategori,
            );
        }

        $data = ProjectList::find($id);
        $obj = json_decode($data->isi);

        
        if(count($obj->gallery) > 0){
        foreach ($obj->gallery as $g) {
            $galleryView[] = asset('project/'.$g);
        }
        }



        $get_gambarUtama = public_path('project/'.$obj->gambarUtama);
        $get_gambarCover = public_path('project/'.$obj->gambarCover);
        $get_fotoPria = public_path('project/'.$obj->fotoPria);
        $get_fotoWanita = public_path('project/'.$obj->fotoWanita);

        if (file_exists($get_gambarUtama)&& file_exists($get_gambarCover) &&
        file_exists($get_fotoPria)&& file_exists($get_fotoWanita)) {
            $gambarUtamaView = asset('project/'.$obj->gambarUtama);
            $gambarCoverView = asset('project/'.$obj->gambarCover);
            $fotoPriaView = asset('project/'.$obj->fotoPria);
            $fotoWanitaView = asset('project/'.$obj->fotoWanita);
        }

        $obj->fotoPriaView = $fotoPriaView;
        $obj->fotoWanitaView = $fotoWanitaView;
        $obj->gambarUtamaView = $gambarUtamaView;
        $obj->gambarCoverView = $gambarCoverView;
        $obj->musicList = $musicList;
        $obj->galleryView = $galleryView;
        return response()->json([
                'data' => $obj,
                'message' => 'Berhasil',
            ],200);



        } catch (\Throwable $th) {
        //throw $th;
        return response()->json([
            'data' => $obj,
            'message' => 'Kesalahan Server',
        ],500);
    }


    }

    public function music_store(Request $request){
        DB::beginTransaction();
        try {
            //code...
            if ($request->file('files')[0]) {
                $music = $request->file('files')[0];
                $name = base64_encode(Str::random(32)).'.'.$music->getClientOriginalExtension();
                $destinationPath = public_path('/project');
                $music->move($destinationPath, $name);
                $music = $music->getClientOriginalName();
                
                MusicList::create([
                    'nama' => $name,
                    'nama_original' => $music,
                    'kategori' => 'semua',
                ]);
            }
            DB::commit();
            return response()->json([
                'data' => [],
                'message' => 'Berhasil',
            ],200);
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return response()->json([
                'data' => array(),
                'message' => 'Kesalahan Server',
            ],500);
        }
    }
    public function music_detail($id){
        try {
            //code...
   
        $data = MusicList::find($id);
        $name = $data->nama;
        $filePath = public_path('project/' . $name);
        if(file_exists($filePath)){
            $fileStream = fopen($filePath, 'r');
            return response()->stream(function () use ($fileStream) {
                fpassthru($fileStream);
            }, 200, [
                'Content-Type' => mime_content_type($filePath),
                'Content-Disposition' => 'inline; filename="' . $name . '"',
            ]);
        }else{
            return response()->json([
                'data' => array(),
                'message' => 'Kesalahan Server',
            ],500);
        }
    } catch (\Throwable $th) {
        //throw $th;   
        return response()->json([
                'data' => array(),
                'message' => 'Kesalahan Server',
            ],500);
    }
    }
    public function music_list(){
        try {
            //code...
              //code...
              $obj = array();
              $data = MusicList::all();
              foreach($data as $d){
                  $obj[] = array(
                      'id' => $d->id,
                      'file' => $d->nama,
                      'judul' => $d->nama_original,
                      'kategori' => $d->kategori,
                  );
              }
              return response()->json([
                  'data' => $obj,
                  'message' => 'Berhasil',
              ],200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'data' => $obj,
                'message' => 'Kesalahan Server',
            ],500);
        }
    }
    public function project_list(){
        try {
            //code...
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
            return response()->json([
                'data' => $obj,
                'message' => 'Berhasil',
            ],200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'data' => $obj,
                'message' => 'Kesalahan Server',
            ],500);
        }


    }

    public function project_store(Request $request){
      
      //  DB::beginTransaction();
        try {
            $fotoWanita = '';
            $fotoPria = '';
            $gambarUtama = '';
            $gambarCover = '';
            $fotoGallery = array();
             if ($request->gallery) {
                foreach ($request->file('gallery') as $file) {
                    $image = $file;
                    $name = base64_encode(Str::random(32)).'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/project');
                    $image->move($destinationPath, $name);
                    $fotoGallery[] = $name;
                }
             }

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
                'gambarCover'=> $gambarCover,
                'gallery'=> $fotoGallery
               );


               ProjectList::create([
                'nama_client' => $request->namaKlien,
                'email' => $request->emailKlien,
                'isi' => json_encode($formData),
                'link' => strtolower(str_replace(' ', '-', $request->namaPasangan)),
                'template' => $request->template,
                'jenis' =>  $request->acara,
                'music_list_id' =>  $request->musik
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
                'message' => 'nok',
                'data' => $th->getMessage()
               ],500);
        }


    }



}
