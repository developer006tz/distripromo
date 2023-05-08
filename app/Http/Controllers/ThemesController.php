<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use App\Models\Site_theme;
use App\Models\Site_theme_header;
use App\Models\Site_theme_content;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ThemesController extends Controller
{


    public function store(Request $request)
    {

        $this->authorize('store', Site_theme::class);

        $version = $request->input('version');
        $theme = Site_theme::find(1);
        if(!$theme){
            $theme = new Site_theme();
            $theme->id = 1;
        }
        $theme->version = $version;
        $theme->save();

        //return response if it is success or error
        if($theme->id){
            return response()->json([
                'success' => true,
                'message' => 'Theme version updated successfully'
            ]);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Theme version update error'
            ]);
        }
    }

}
