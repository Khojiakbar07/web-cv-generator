<?php

namespace App\Http\Controllers;

use App\Models\Download;
use App\Models\Template;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        if(is_admin()){
            return view('admin.dashboard');
        }
        return view('user.dashboard');
    }

    public function settings(){
        return view('user.settings');
    }

    public function support(){
        return view('user.support');
    }

    public function plan(){
        return view('user.plan');
    }

    public function templates(){
        $templates = Template::where('deleted', '0')->get();
        return view('user.template.index', compact('templates'));
    }

    public function template(Request $request, $slug){
        $template = Template::where('deleted', '0')->where('slug', $slug)->frist();
        return view('user.template.show', compact('template'));
    }

    public function downloads(){
        $downloads = Download::where('deleted', '0')->get();
        return view('user.downloads', compact('downloads'));
    }
}
