<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Storage;
use DB;
class C_user extends Controller
{
    public function index()
    {
        $user = DB::table('user')->get();
        $role = DB::table('role')->get();

        $data = array(
            'menu' => 'user',
            'user' => $user,
            'role' => $role,
            'submenu' => '',
        );

        return view('/user/view_user',$data); 
    }

    public function insert_user()
    {
        // $nama = Auth::user()->name;
        $user = DB::table('user')->get();
        $role = DB::table('role')->get();

        $data = array(
            'menu' => 'user',
            // 'nama' => $nama,
            'user' => $user,
            'role' => $role,
            'submenu' => '',
        );

        return view('/user/tambah_user',$data); 
    }

    public function tambah_user(Request $post)
    {  
        DB::table('user')->insert([
            'id_user' => $post->id_user,
            'nama_skpd' => $post->nama_skpd,
            'username' => $post->username,
            'password' => $post->password,
            'kepala_skpd' => $post->kepala_skpd,
            'NIP_kepala' => $post->NIP_kepala,
            'id_role' => $post->id_role,
            

        ]);

        return redirect('/user');
    }

    public function edit_user($id_user) 
    {
        // $nama = Auth::user()->name;
        $user = DB::table('user')->where('id_user', $id_user)->get();
        $role = DB::table('role')->get();
    
        $data = array(
            'menu' => 'user',
            // 'nama' => $nama,
            'user' => $user,
            'role' => $role,
            'submenu' => ''          
        );
        return view('user/edit_user',$data);
    }

    public function update_user(Request $post)
    {
        
        if($post->PASSWORD){
            DB::table('user')->where('id_user', $post->id_user)->update([
                'id_user' => $post->id_user,
                'nama_skpd' => $post->nama_skpd,
                'username' => $post->username,
                'password' => $post->password,
                'kepala_skpd' => $post->kepala_skpd,
                'NIP_kepala' => $post->NIP_kepala,
                'id_role' => $post->id_role,
                
            ]);
            $user = User::find($post->id_user);

            $user->password = $post->PASSWORD;

            $user->save();
        }else{
            DB::table('user')->where('id_user', $post->id_user)->update([
                'id_user' => $post->id_user,
                'nama_skpd' => $post->nama_skpd,
                'username' => $post->username,
                'password' => $post->password,
                'kepala_skpd' => $post->kepala_skpd,
                'NIP_kepala' => $post->NIP_kepala,
                'id_role' => $post->id_role,
            ]);
        }
              
        //kembali ke halaman data anggota
        return redirect('/user');
    }

    public function hapus($id_user)
    {
    	DB::table('user')->where('id_user',$id_user)->delete();
	    return redirect('/user');
    }

}
