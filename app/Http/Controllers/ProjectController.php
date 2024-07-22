<?php

namespace App\Http\Controllers;

use App\Models\GuestMessage;
use App\Models\MusicList;
use App\Models\ProjectList;
use App\Models\TemplateList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use File;
use Illuminate\Support\Carbon;

class ProjectController extends Controller
{

    public function get_undangan($value, $nama = '')
    {

        $getProject = ProjectList::where('link', $value);
        if ($getProject->count() > 0) {
            $getdata = ProjectList::find($getProject->first()->id);
            $project_id = $getProject->first()->id;
            $data = json_decode($getdata->isi);

            if ($getdata->jenis == 'wedding') {
                // $pasangan = explode(" ", $data->namaPasangan);
                // $data->pasangan = $pasangan;
                $data->tglAkadId = Carbon::parse($data->tglAkad)->isoFormat('dddd, Do MMMM YYYY');
                $data->tglResepsiId = $data->tglResepsi != '' ? Carbon::parse($data->tglResepsi)->isoFormat('dddd, Do MMMM YYYY') : '';
                $data->bgmusik = MusicList::find($data->musik)->nama;
                $jenis = 'Wedding Invitation';

                $data->dayOfWeek =  Carbon::parse($data->tglAkad)->isoFormat('dddd');
                $data->dayOfMonth =  Carbon::parse($data->tglAkad)->isoFormat('Do');
                $data->month =  Carbon::parse($data->tglAkad)->isoFormat('MMMM');
                $data->year =  Carbon::parse($data->tglAkad)->isoFormat('YYYY');
                $data->tglMulai = $data->tglAkad;
            } elseif ($getdata->jenis == 'engagement') {

                $data->dayOfWeek =  Carbon::parse($data->tglLamaran)->isoFormat('dddd');
                $data->dayOfMonth =  Carbon::parse($data->tglLamaran)->isoFormat('Do');
                $data->month =  Carbon::parse($data->tglLamaran)->isoFormat('MMMM');
                $data->year =  Carbon::parse($data->tglLamaran)->isoFormat('YYYY');
                $data->tglMulai = $data->tglLamaran;
                $data->tglLamaranId = Carbon::parse($data->tglLamaran)->isoFormat('dddd, Do MMMM YYYY');
                $data->bgmusik = MusicList::find($data->musik)->nama;
                $jenis = 'Engagement Invitation';
            }



            switch ($getdata->template) {
                case "1":
                    return view('wedding-1', ['data' => $data, 'jenis' => $jenis, 'project_id' => $project_id, 'nama' => $nama]);
                    break;
                case "2":
                    return view('wedding-2', ['data' => $data, 'jenis' => $jenis, 'project_id' => $project_id, 'nama' => $nama]);
                    break;
                case "3":
                    return view('wedding-3', ['data' => $data, 'jenis' => $jenis, 'project_id' => $project_id, 'nama' => $nama]);
                    break;
                case "4":
                    return view('wedding-4', ['data' => $data, 'jenis' => $jenis, 'project_id' => $project_id, 'nama' => $nama]);
                    break;
                case "5":
                    return view('wedding-5', ['data' => $data, 'jenis' => $jenis, 'project_id' => $project_id, 'nama' => $nama]);
                    break;
                case "6":
                    return view('wedding-6', ['data' => $data, 'jenis' => $jenis, 'project_id' => $project_id, 'nama' => $nama]);
                    break;
                case "7":
                    return view('wedding-7', ['data' => $data, 'jenis' => $jenis, 'project_id' => $project_id, 'nama' => $nama]);
                    break;
                case "8":
                    return view('wedding-8', ['data' => $data, 'jenis' => $jenis, 'project_id' => $project_id, 'nama' => $nama]);
                    break;
                case "9":
                    return view('wedding-9', ['data' => $data, 'jenis' => $jenis, 'project_id' => $project_id, 'nama' => $nama]);
                    break;
                case "10":
                    return view('wedding-10', ['data' => $data, 'jenis' => $jenis, 'project_id' => $project_id, 'nama' => $nama]);
                    break;
                default:
                    return 'kosong';
            }
        } else {
            return 'kosong';
        }
        return 'kososng';
    }

    public function music_delete($id)
    {
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
            ], 200);
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return response()->json([
                'error' => true,
                'message' => 'Musik digunakan',
                'data' => ''
            ], 500);
        }
    }


    public function guest_message_list($id)
    {
        $data = GuestMessage::where('project_id', $id)->get();
        return response()->json($data);
    }
    public function guest_message(Request $request)
    {
        try {
            //code...
            DB::beginTransaction();
            if ($request->nama == '' || $request->message == '' || $request->project_id == '') {
                DB::rollBack();
                return response()->json([
                    'error' => true,
                    'message' => 'Data tidak boleh kosong',
                    'data' => ''
                ], 500);
            }

            GuestMessage::create([
                'nama' => $request->nama,
                'message' => $request->message,
                'project_id' => $request->project_id
            ]);

            DB::commit();
            return response()->json([
                'error' => false,
                'message' => 'ok',
                'data' => ''
            ], 200);
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return response()->json([
                'error' => true,
                'message' => 'Musik digunakan',
                'data' => ''
            ], 500);
        }
    }

    public function project_list_delete($id)
    {
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
            ], 200);
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return response()->json([
                'error' => true,
                'message' => 'nok',
                'data' => ''
            ], 500);
        }
    }

    public function project_list_update(Request $request, $id)
    {

        DB::beginTransaction();
        try {
            $data = ProjectList::find($id);
            $pastData = json_decode($data->isi);

            if ($request->acara == 'wedding') {

                //code...
                $fotoWanita =  isset($request->fotoWanita) ? $request->fotoWanita : '';
                $fotoPria = isset($request->fotoPria) ? $request->fotoPria : '';
                $gambarUtama = $request->gambarUtama;
                $gambarCover = $request->gambarCover;
                $fotoGallery = isset($request->gallery) ? $pastData->gallery : array();

                if ($request->file('gallery')) {
                    if (count($pastData->gallery) > 0) {
                        foreach ($pastData->gallery as $past) {
                            File::delete(public_path('project/' . $past));
                        }
                    }

                    $fotoGallery = array();
                    foreach ($request->file('gallery') as $file) {
                        $image = $file;
                        $name = base64_encode(Str::random(32)) . '.' . $image->getClientOriginalExtension();
                        $destinationPath = public_path('/project');
                        $image->move($destinationPath, $name);
                        $fotoGallery[] = $name;
                    }
                }

                if ($request->file('fotoPria')) {
                    if ($pastData->fotoPria != '') {
                        File::delete(public_path('project/' . $pastData->fotoPria));
                    }
                    $image = $request->fotoPria;
                    $name = base64_encode(Str::random(32)) . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/project');
                    $image->move($destinationPath, $name);
                    $fotoPria = $name;
                }
                if ($request->file('fotoWanita')) {
                    if ($pastData->fotoWanita != '') {
                        File::delete(public_path('project/' . $pastData->fotoPria));
                    }
                    $image = $request->fotoWanita;
                    $name = base64_encode(Str::random(32)) . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/project');
                    $image->move($destinationPath, $name);
                    $fotoWanita = $name;
                }
                if ($request->file('gambarUtama')) {
                    File::delete(public_path('project/' . $pastData->gambarUtama));
                    $image = $request->gambarUtama;
                    $name = base64_encode(Str::random(32)) . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/project');
                    $image->move($destinationPath, $name);
                    $gambarUtama = $name;
                }
                if ($request->file('gambarCover')) {
                    File::delete(public_path('project/' . $pastData->gambarCover));
                    $image = $request->gambarCover;
                    $name = base64_encode(Str::random(32)) . '.' . $image->getClientOriginalExtension();
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
                    "namaLengkapPria" => $request->namaLengkapPria,
                    "ayahPria" => $request->ayahPria,
                    "ibuPria" => $request->ibuPria,
                    "namaWanita" => $request->namaWanita,
                    "namaLengkapWanita" => $request->namaLengkapWanita,
                    "ayahWanita" => $request->ayahWanita,
                    "ibuWanita" => $request->ibuWanita,
                    "alamatAkad" => $request->alamatAkad,
                    "tglAkad" => $request->tglAkad,
                    "waktuAkad" => $request->waktuAkad,
                    "alamatResepsi" => isset($request->alamatResepsi) ? $request->alamatResepsi : '',
                    "tglResepsi" =>  isset($request->tglResepsi) ? $request->tglResepsi : '',
                    "waktuResepsi" => isset($request->waktuResepsi) ? $request->waktuResepsi : '',
                    'fotoWanita' => $fotoWanita,
                    'fotoPria' => $fotoPria,
                    'gambarUtama' => $gambarUtama,
                    'gambarCover' => $gambarCover,
                    'gallery' => $fotoGallery,
                    'noRek' =>  isset($request->noRek) ? $request->noRek : '',
                    'ketRek' => isset($request->ketRek) ? $request->ketRek : '',
                );



                $data->nama_client = $request->namaKlien;
                $data->email = $request->emailKlien;
                $data->isi = json_encode($formData);
                $data->link = strtolower(str_replace(' ', '', $request->namaPria . '-' . $request->namaWanita . '-' . $id));
                $data->template = $request->template;
                $data->jenis = $request->acara;
                $data->music_list_id = $request->musik;
                $data->save();
            } else if ($request->acara == 'engagement') {

                //code...
                $fotoWanita =  isset($request->fotoWanita) ? $request->fotoWanita : '';
                $fotoPria = isset($request->fotoPria) ? $request->fotoPria : '';
                $gambarUtama = $request->gambarUtama;
                $gambarCover = $request->gambarCover;

                if ($request->file('fotoPria')) {
                    if ($pastData->fotoPria != '') {
                        File::delete(public_path('project/' . $pastData->fotoPria));
                    }
                    $image = $request->fotoPria;
                    $name = base64_encode(Str::random(32)) . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/project');
                    $image->move($destinationPath, $name);
                    $fotoPria = $name;
                }
                if ($request->file('fotoWanita')) {
                    if ($pastData->fotoWanita != '') {
                        File::delete(public_path('project/' . $pastData->fotoWanita));
                    }

                    $image = $request->fotoWanita;
                    $name = base64_encode(Str::random(32)) . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/project');
                    $image->move($destinationPath, $name);
                    $fotoWanita = $name;
                }
                if ($request->file('gambarUtama')) {
                    File::delete(public_path('project/' . $pastData->gambarUtama));
                    $image = $request->gambarUtama;
                    $name = base64_encode(Str::random(32)) . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/project');
                    $image->move($destinationPath, $name);
                    $gambarUtama = $name;
                }
                if ($request->file('gambarCover')) {
                    File::delete(public_path('project/' . $pastData->gambarCover));
                    $image = $request->gambarCover;
                    $name = base64_encode(Str::random(32)) . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/project');
                    $image->move($destinationPath, $name);
                    $gambarCover = $name;
                }

                $formData = array(
                    "namaKlien" => $request->namaKlien,
                    "emailKlien" => $request->emailKlien,
                    "acara" => $request->acara,
                    "template" => $request->template,
                    "musik" => $request->musik,
                    "namaPria" => $request->namaPria,
                    "kataPengantar" => $request->kataPengantar,
                    "namaLengkapPria" => $request->namaLengkapPria,
                    "ayahPria" => $request->ayahPria,
                    "ibuPria" => $request->ibuPria,
                    "namaWanita" => $request->namaWanita,
                    "namaLengkapWanita" => $request->namaLengkapWanita,
                    "ayahWanita" => $request->ayahWanita,
                    "ibuWanita" => $request->ibuWanita,
                    "alamatLamaran" => $request->alamatLamaran,
                    "tglLamaran" => $request->tglLamaran,
                    "waktuLamaran" => $request->waktuLamaran,
                    'fotoWanita' => $fotoWanita,
                    'fotoPria' => $fotoPria,
                    'gambarUtama' => $gambarUtama,
                    'gambarCover' => $gambarCover,
                    'noRek' =>  isset($request->noRek) ? $request->noRek : '',
                    'ketRek' => isset($request->ketRek) ? $request->ketRek : '',
                );



                $data->nama_client = $request->namaKlien;
                $data->email = $request->emailKlien;
                $data->isi = json_encode($formData);
                $data->link = strtolower(str_replace(' ', '', $request->namaPria . '-' . $request->namaWanita . '-' . $id));
                $data->template = $request->template;
                $data->jenis = $request->acara;
                $data->music_list_id = $request->musik;
                $data->save();
            }



            DB::commit();
            return response()->json([
                'error' => false,
                'message' => 'ok',
                'data' => ''
            ], 201);
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return response()->json([
                'error' => true,
                'message' => 'nok',
                'data' => $th->getMessage()
            ], 500);
        }
    }

    public function project_list_detail($id)
    {


        $obj = array();
        try {
            //code...
            $gambarUtamaView = "";
            $gambarCoverView = "";
            $fotoPriaView = "";
            $fotoWanitaView = "";
            $galleryView = array();
            $checkedfotoPria = false;
            $checkedfotoWanita = false;
            $checkedGallery = false;
            $checkedResepsi = false;




            $Music = MusicList::all();
            foreach ($Music as $d) {
                $musicList[] = array(
                    'id' => $d->id,
                    'file' => $d->nama,
                    'judul' => $d->nama_original,
                    'kategori' => $d->kategori,
                );
            }

            $data = ProjectList::find($id);
            $obj = json_decode($data->isi);

            if ($data->jenis == 'engagement') {

                if ($obj->fotoPria != "") {
                    $fotoPriaView = asset('project/' . $obj->fotoPria);
                    $checkedfotoPria = true;
                }
                if ($obj->fotoWanita != "") {
                    $fotoWanitaView = asset('project/' . $obj->fotoWanita);
                    $checkedfotoWanita = true;
                }
                if ($obj->gambarUtama != "") {
                    $gambarUtamaView = asset('project/' . $obj->gambarUtama);
                }
                if ($obj->gambarCover != "") {
                    $gambarCoverView = asset('project/' . $obj->gambarCover);
                }


                $obj->checkedfotoPria = $checkedfotoPria;
                $obj->checkedSumbangan = $obj->noRek != '' ? true : false;
                $obj->checkedfotoWanita = $checkedfotoWanita;
                $obj->gambarUtamaView = $gambarUtamaView;
                $obj->gambarCoverView = $gambarCoverView;
                $obj->fotoPriaView = $fotoPriaView;
                $obj->musicList = $musicList;
                $obj->fotoWanitaView = $fotoWanitaView;
            } elseif ($data->jenis == 'wedding') {
                if (count($obj->gallery) > 0) {
                    foreach ($obj->gallery as $g) {
                        $galleryView[] = asset('project/' . $g);
                    }
                    $checkedGallery = true;
                }

                if ($obj->fotoPria != "") {
                    $fotoPriaView = asset('project/' . $obj->fotoPria);
                    $checkedfotoPria = true;
                }
                if ($obj->fotoWanita != "") {
                    $fotoWanitaView = asset('project/' . $obj->fotoWanita);
                    $checkedfotoWanita = true;
                }
                if ($obj->gambarUtama != "") {
                    $gambarUtamaView = asset('project/' . $obj->gambarUtama);
                }
                if ($obj->gambarCover != "") {
                    $gambarCoverView = asset('project/' . $obj->gambarCover);
                }

                $obj->checkedResepsi = $obj->alamatResepsi != '' ? true : false;
                $obj->checkedSumbangan = $obj->noRek != '' ? true : false;
                $obj->checkedfotoPria = $checkedfotoPria;
                $obj->checkedfotoWanita = $checkedfotoWanita;
                $obj->checkedGallery = $checkedGallery;
                $obj->fotoPriaView = $fotoPriaView;
                $obj->fotoWanitaView = $fotoWanitaView;
                $obj->gambarUtamaView = $gambarUtamaView;
                $obj->gambarCoverView = $gambarCoverView;
                $obj->musicList = $musicList;
                $obj->galleryView = $galleryView;
            }

            return response()->json([
                'data' => $obj,
                'message' => 'Berhasil',
            ], 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'data' => $obj,
                'message' => 'Kesalahan Server' . $obj,
            ], 500);
        }
    }

    public function music_store(Request $request)
    {
        DB::beginTransaction();
        try {
            //code...
            if ($request->file('files')[0]) {
                $music = $request->file('files')[0];
                $name = base64_encode(Str::random(32)) . '.' . $music->getClientOriginalExtension();
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
            ], 200);
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return response()->json([
                'data' => array(),
                'message' => 'Kesalahan Server',
            ], 500);
        }
    }
    public function music_detail($id)
    {
        try {
            //code...

            $data = MusicList::find($id);
            $name = $data->nama;
            $filePath = public_path('project/' . $name);
            if (file_exists($filePath)) {
                $fileStream = fopen($filePath, 'r');
                return response()->stream(function () use ($fileStream) {
                    fpassthru($fileStream);
                }, 200, [
                    'Content-Type' => mime_content_type($filePath),
                    'Content-Disposition' => 'inline; filename="' . $name . '"',
                ]);
            } else {
                return response()->json([
                    'data' => array(),
                    'message' => 'Kesalahan Server',
                ], 500);
            }
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'data' => array(),
                'message' => 'Kesalahan Server',
            ], 500);
        }
    }
    public function template_list($jenis)
    {
        try {

            $obj = array();
            $data = TemplateList::all();
            foreach ($data as $d) {
                $obj[] = array(
                    'id' => $d->id,
                    'nama' => $d->nama,
                    'preview' => $d->preview,
                    'preview_img' =>  asset('/template_web/preview/' . $d->preview)
                );
            }
            return response()->json([
                'data' => $obj,
                'message' => 'Berhasil',
            ], 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'data' => $obj,
                'message' => 'Kesalahan Server',
            ], 500);
        }
    }
    public function music_list()
    {
        try {
            //code...
            //code...
            $obj = array();
            $data = MusicList::all();
            foreach ($data as $d) {
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
            ], 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'data' => $obj,
                'message' => 'Kesalahan Server',
            ], 500);
        }
    }
    public function project_list()
    {
        try {
            //code...
            $obj = array();
            $data = ProjectList::all();
            foreach ($data as $d) {
                $obj[] = array(
                    'id' => $d->id,
                    'name' => $d->nama_client,
                    'acara' => $d->jenis,
                    'template' => $d->TemplateList->nama,
                    'status' => 'finished',
                    'email' => $d->email,
                    'link' => $d->link,
                );
            }
            return response()->json([
                'data' => $obj,
                'message' => 'Berhasil',
            ], 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'data' => $obj,
                'message' => 'Kesalahan Server' . $obj,
            ], 500);
        }
    }

    public function project_store(Request $request)
    {

        //  DB::beginTransaction();
        try {
            if ($request->acara == 'engagement') {

                $fotoWanita = '';
                $fotoPria = '';
                $gambarUtama = '';
                $gambarCover = '';

                if ($request->fotoPria) {
                    $image = $request->fotoPria;
                    $name = base64_encode(Str::random(32)) . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/project');
                    $image->move($destinationPath, $name);
                    $fotoPria = $name;
                }
                if ($request->fotoWanita) {
                    $image = $request->fotoWanita;
                    $name = base64_encode(Str::random(32)) . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/project');
                    $image->move($destinationPath, $name);
                    $fotoWanita = $name;
                }
                if ($request->gambarUtama) {
                    $image = $request->gambarUtama;
                    $name = base64_encode(Str::random(32)) . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/project');
                    $image->move($destinationPath, $name);
                    $gambarUtama = $name;
                }
                if ($request->gambarCover) {
                    $image = $request->gambarCover;
                    $name = base64_encode(Str::random(32)) . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/project');
                    $image->move($destinationPath, $name);
                    $gambarCover = $name;
                }

                $formData = array(
                    "namaKlien" => $request->namaKlien,
                    "emailKlien" => $request->emailKlien,
                    "acara" => $request->acara,
                    "template" => $request->template,
                    "musik" => $request->musik,
                    "namaPria" => $request->namaPria,
                    "kataPengantar" => $request->kataPengantar,
                    "namaLengkapPria" => $request->namaLengkapPria,
                    "ayahPria" => $request->ayahPria,
                    "ibuPria" => $request->ibuPria,
                    "namaWanita" => $request->namaWanita,
                    "namaLengkapWanita" => $request->namaLengkapWanita,
                    "ayahWanita" => $request->ayahWanita,
                    "ibuWanita" => $request->ibuWanita,
                    "alamatLamaran" => $request->alamatLamaran,
                    "tglLamaran" => $request->tglLamaran,
                    "waktuLamaran" => $request->waktuLamaran,
                    'fotoWanita' => $fotoWanita,
                    'fotoPria' => $fotoPria,
                    'gambarUtama' => $gambarUtama,
                    'gambarCover' => $gambarCover,
                    'noRek' =>  isset($request->noRek) ? $request->noRek : '',
                    'ketRek' => isset($request->ketRek) ? $request->ketRek : '',
                );

                $p =  ProjectList::create([
                    'nama_client' => $request->namaKlien,
                    'email' => $request->emailKlien,
                    'isi' => json_encode($formData),
                    'template' => $request->template,
                    'jenis' =>  $request->acara,
                    'music_list_id' =>  $request->musik
                ]);

                $getP = ProjectList::find($p->id);
                $getP->link =  strtolower(str_replace(' ', '', $request->namaPria . '-' . $request->namaWanita . '-' . $p->id));
                $getP->save();
            } else if ($request->acara == 'wedding') {
                //  dd($request->all());
                $fotoWanita = '';
                $fotoPria = '';
                $gambarUtama = '';
                $gambarCover = '';
                $fotoGallery = array();
                if ($request->gallery) {
                    foreach ($request->file('gallery') as $file) {
                        $image = $file;
                        $name = base64_encode(Str::random(32)) . '.' . $image->getClientOriginalExtension();
                        $destinationPath = public_path('/project');
                        $image->move($destinationPath, $name);
                        $fotoGallery[] = $name;
                    }
                }

                if ($request->fotoPria) {
                    $image = $request->fotoPria;
                    $name = base64_encode(Str::random(32)) . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/project');
                    $image->move($destinationPath, $name);
                    $fotoPria = $name;
                }
                if ($request->fotoWanita) {
                    $image = $request->fotoWanita;
                    $name = base64_encode(Str::random(32)) . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/project');
                    $image->move($destinationPath, $name);
                    $fotoWanita = $name;
                }
                if ($request->gambarUtama) {
                    $image = $request->gambarUtama;
                    $name = base64_encode(Str::random(32)) . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/project');
                    $image->move($destinationPath, $name);
                    $gambarUtama = $name;
                }
                if ($request->gambarCover) {
                    $image = $request->gambarCover;
                    $name = base64_encode(Str::random(32)) . '.' . $image->getClientOriginalExtension();
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
                    "namaLengkapPria" => $request->namaLengkapPria,
                    "ayahPria" => $request->ayahPria,
                    "ibuPria" => $request->ibuPria,
                    "namaWanita" => $request->namaWanita,
                    "namaLengkapWanita" => $request->namaLengkapWanita,
                    "ayahWanita" => $request->ayahWanita,
                    "ibuWanita" => $request->ibuWanita,
                    "alamatAkad" => $request->alamatAkad,
                    "tglAkad" => $request->tglAkad,
                    "waktuAkad" => $request->waktuAkad,
                    "alamatResepsi" => isset($request->alamatResepsi) ? $request->alamatResepsi : '',
                    "tglResepsi" =>  isset($request->tglResepsi) ? $request->tglResepsi : '',
                    "waktuResepsi" => isset($request->waktuResepsi) ? $request->waktuResepsi : '',
                    'fotoWanita' => $fotoWanita,
                    'fotoPria' => $fotoPria,
                    'gambarUtama' => $gambarUtama,
                    'gambarCover' => $gambarCover,
                    'gallery' => $fotoGallery,
                    'noRek' =>  isset($request->noRek) ? $request->noRek : '',
                    'ketRek' => isset($request->ketRek) ? $request->ketRek : '',
                );



                $p =  ProjectList::create([
                    'nama_client' => $request->namaKlien,
                    'email' => $request->emailKlien,
                    'isi' => json_encode($formData),
                    'template' => $request->template,
                    'jenis' =>  $request->acara,
                    'music_list_id' =>  $request->musik
                ]);

                $getP = ProjectList::find($p->id);
                $getP->link =  strtolower(str_replace(' ', '', $request->namaPria . '-' . $request->namaWanita . '-' . $p->id));
                $getP->save();
            }

            DB::commit();
            return response()->json([
                'error' => false,
                'message' => 'ok',
                'data' => ''
            ], 201);
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return response()->json([
                'error' => true,
                'message' => 'nok',
                'data' => $th->getMessage()
            ], 500);
        }
    }
}
