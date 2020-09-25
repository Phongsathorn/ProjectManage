<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AutocompleteController extends Controller
{
    
    // function index()
    // {
    //  return view('beforesearchBD');
    // }
    
    function dropdown (Request $request)
    {
        $keyword = $request->input('search');
        $data = DB::select("SELECT * FROM projects
        WHERE projects.project_name LIKE '%$keyword%'");
        
        return response()->json($data);
        //print_r($data);
    }
    


    function dropdownsearch (Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('projects')
                ->where('project_name', 'LIKE', "%{$query}%")
                ->get();
        $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
        foreach($data as $row)
        {
            $output .= '
            <li><a href="#">'.$row->project_name.'</a></li>
            ';
        }
        $output .= '</ul>';
        //echo $output;
        //print_r($data);
        }
    }
    function easysearch(Request $request)
    {   


        session_start();
        $keyword = $request->input('search');
        //$_SESSION['search'] = $request->input('search');
        //echo $keyword;

        // if($request->get('query'))
        // {
        // $query = $request->get('query');
        // $data = DB::table('projects')
        //     ->where('project_name', 'LIKE', "%{$keyword}%")
        //     ->get();
        // $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
        // foreach($data as $row)
        // {
        //     $output .= '
        //     <li><a href="#">'.$row->project_name.'</a></li>
        //     ';
        // }
        // $output .= '</ul>';
        //echo $output;
        // print_r($data);
        // }


        //photos
        $chkid = (isset($_SESSION['usersid'])) ? $_SESSION['usersid'] : '';
        $chkidadmin = (isset($_SESSION['adminid'])) ? $_SESSION['adminid'] : '';
        $imgaccount = DB::select("SELECT * FROM users WHERE U_id='$chkid'");
        $adminaccount = DB::select("SELECT * FROM admin_company WHERE admin_id='$chkidadmin'");
        
        $easysearch = DB::select("SELECT * FROM projects,type_project
        WHERE projects.type_id=type_project.type_id AND projects.project_name LIKE '%$keyword%' 
        OR  projects.type_id=type_project.type_id  AND projects.keyword_project LIKE '%$keyword%'");

        
        // print_r($output) ;
        return view('beforesearchBD', compact('easysearch','imgaccount','adminaccount'));

    }

    function detailsearch(Request $request)
    {
        
        
        $keyword = $request->input('detailsearch');
        $typeproject = $request->input('type_project');
        $genreproject = $request->input('genre_project');
        $categoryproject = $request->input('category_project');
        

        $detailsearch = DB::select("SELECT * FROM projects,type_project,genre_project,branch_project,category_project
        WHERE projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
        AND projects.branch_id=branch_project.branch_id AND projects.category_id=category_project.category_id
        AND projects.type_id=$typeproject AND projects.genre_id=$genreproject AND projects.category_id=2 AND projects.branch_id=1
        AND projects.project_name LIKE '%$keyword%' 
        
        OR  projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
        AND projects.branch_id=branch_project.branch_id AND projects.category_id=category_project.category_id
        AND projects.type_id=$typeproject AND projects.genre_id=$genreproject AND projects.category_id=2 AND projects.branch_id=1
        AND projects.project_name LIKE '%$keyword%'");
        //print_r($detailsearch);
        return view('beforesearchAV', compact('detailsearch'));
        
    }

    function detailview(Request $request)
    {
        $chk_type = DB::select("SELECT * FROM type_project");
        $chk_genre = DB::select("SELECT * FROM genre_project");
        $chk_category = DB::select("SELECT * FROM category_project");
        $chk_branch = DB::select("SELECT * FROM branch_project");
        //print_r($chk_type);
        return view('searchAV', compact('chk_type','chk_genre','chk_category','chk_branch'));
    }
}
