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
        $_SESSION['beforsearch'] = 1;
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
        OR projects.type_id=type_project.type_id AND projects.keyword_project1 LIKE '%$keyword%'
        OR projects.type_id=type_project.type_id AND projects.keyword_project2 LIKE '%$keyword%' 
        OR projects.type_id=type_project.type_id AND projects.keyword_project3 LIKE '%$keyword%'
        OR projects.type_id=type_project.type_id AND projects.keyword_project4 LIKE '%$keyword%'");

        foreach ($easysearch as $key_s) {
            $key_similar1 = $key_s->keyword_project1;
            $key_similar2 = $key_s->keyword_project2;
            $key_similar3 = $key_s->keyword_project3;
            $key_similar4 = $key_s->keyword_project4;
            
            $similar = DB::select("SELECT * FROM projects,type_project 
            WHERE projects.type_id=type_project.type_id AND projects.keyword_project1 LIKE '%$key_similar1%' 
            OR projects.type_id=type_project.type_id AND projects.keyword_project2 LIKE '%$key_similar2%' 
            OR projects.type_id=type_project.type_id AND projects.keyword_project3 LIKE '%$key_similar3%' 
            OR projects.type_id=type_project.type_id AND projects.keyword_project4 LIKE '%$key_similar4%'
             ");
            // print_r($key_similar1);
            // print_r($key_similar2);
            // print_r($key_similar3);
            // print_r($key_similar4);
            
            //view star
            // $svg0 = DB::select("SELECT AVG(rate_index) AS AvgRate FROM rating_p WHERE project_id='$ite0'"); 
            // $svgrate0 = $svg0[0];
            // compact('svgrate0');
            // foreach($svgrate0 as $svgrate0){
            //     $svgrate0 = round($svgrate0,$percision=1);
            // }
            // print_r($output) ;
            return view('beforesearchBD', compact('easysearch','imgaccount','adminaccount','similar'));
            // print_r($similar);
        }
        
        

        

        

    }

    function detailsearch(Request $request)
    {
        session_start();
        $_SESSION['beforsearch'] = 1;
        $keyword = $request->input('detailsearch');
        $genreproject = $request->input('genre_project');
        $categoryproject = $request->input('category_project');
        $typeproject = $request->input('type_project');
        $branch_project = $request->input('branch_project');

        // if(isset($genreproject)!=='' & isset($categoryproject)!=='' & isset($typeproject)!=='' & isset($branch_project)!==''){
        //     echo 'ตวย';
        // }

        // if(empty($genreproject)){
        //     // print_r ("genre:NULL");
        //     $typeproject = "AND projects.genre_id=$typeproject";
        //     $categoryproject = "AND projects.category_id=$categoryproject";
        //     $branch_project = "AND projects.branch_id=$branch_project";        }
        // if(empty($categoryproject)){
        //     // print_r ("cate:NULL");
        //     $genreproject = "AND projects.genre_id=$genreproject";
        //     $typeproject = "AND projects.type_id=$typeproject";
        //     $branch_project = "AND projects.branch_id=$branch_project";
        // }
        // if(empty($typeproject)){
        //     // print_r ("type:NULL");
        //     $genreproject = "AND projects.genre_id=$genreproject";
        //     $categoryproject = "AND projects.category_id=$categoryproject";
        //     $branch_project = "AND projects.branch_id=$branch_project"; 
        // }
        // if(empty($branch_project)){
        //     // print_r ("branch:NULL");
        //     $genreproject = "AND projects.genre_id=$genreproject";
        //     $categoryproject = "AND projects.category_id=$categoryproject";
        //     $typeproject = "AND projects.type_id=$typeproject";
        // }
        // else{
        //     // print_r ($keyword);
        // }        
        if(empty($typeproject)){
            $detailsearch = DB::select("SELECT * FROM projects,type_project,genre_project,branch_project,category_project
                WHERE projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.branch_id=branch_project.branch_id AND projects.category_id=category_project.category_id
                AND projects.genre_id=$genreproject AND projects.category_id=$categoryproject AND projects.branch_id=$branch_project
                AND projects.project_name LIKE '%$keyword%' 
                
                OR  projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.branch_id=branch_project.branch_id AND projects.category_id=category_project.category_id
                AND projects.genre_id=$genreproject AND projects.category_id=$categoryproject AND projects.branch_id=$branch_project
                AND projects.keyword_project1 LIKE '%$keyword%'
                
                OR  projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.branch_id=branch_project.branch_id AND projects.category_id=category_project.category_id
                AND projects.genre_id=$genreproject AND projects.category_id=$categoryproject AND projects.branch_id=$branch_project
                AND projects.keyword_project2 LIKE '%$keyword%'
                
                OR  projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.branch_id=branch_project.branch_id AND projects.category_id=category_project.category_id
                AND projects.genre_id=$genreproject AND projects.category_id=$categoryproject AND projects.branch_id=$branch_project
                AND projects.keyword_project3 LIKE '%$keyword%'
                
                OR  projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.branch_id=branch_project.branch_id AND projects.category_id=category_project.category_id
                AND projects.genre_id=$genreproject AND projects.category_id=$categoryproject AND projects.branch_id=$branch_project
                AND projects.keyword_project4 LIKE '%$keyword%'");
        }

        if(empty($genreproject)){
            $detailsearch = DB::select("SELECT * FROM projects,type_project,genre_project,branch_project,category_project
                WHERE projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.branch_id=branch_project.branch_id AND projects.category_id=category_project.category_id
                AND projects.type_id=$typeproject AND projects.category_id=$categoryproject AND projects.branch_id=$branch_project
                AND projects.project_name LIKE '%$keyword%' 
                
                OR  projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.branch_id=branch_project.branch_id AND projects.category_id=category_project.category_id
                AND projects.type_id=$typeproject AND projects.category_id=$categoryproject AND projects.branch_id=$branch_project
                AND projects.keyword_project1 LIKE '%$keyword%'
                
                OR  projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.branch_id=branch_project.branch_id AND projects.category_id=category_project.category_id
                AND projects.type_id=$typeproject AND projects.category_id=$categoryproject AND projects.branch_id=$branch_project
                AND projects.keyword_project2 LIKE '%$keyword%'
                
                OR  projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.branch_id=branch_project.branch_id AND projects.category_id=category_project.category_id
                AND projects.type_id=$typeproject AND projects.category_id=$categoryproject AND projects.branch_id=$branch_project
                AND projects.keyword_project3 LIKE '%$keyword%'
                
                OR  projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.branch_id=branch_project.branch_id AND projects.category_id=category_project.category_id
                AND projects.type_id=$typeproject AND projects.category_id=$categoryproject AND projects.branch_id=$branch_project
                AND projects.keyword_project4 LIKE '%$keyword%'");
        }

        if(empty($categoryproject)){
            $detailsearch = DB::select("SELECT * FROM projects,type_project,genre_project,branch_project,category_project
                WHERE projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.branch_id=branch_project.branch_id AND projects.category_id=category_project.category_id
                AND projects.genre_id=$genreproject AND projects.type_id=$typeproject AND projects.branch_id=$branch_project
                AND projects.project_name LIKE '%$keyword%' 
                
                OR  projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.branch_id=branch_project.branch_id AND projects.category_id=category_project.category_id
                AND projects.genre_id=$genreproject AND projects.type_id=$typeproject AND projects.branch_id=$branch_project
                AND projects.keyword_project1 LIKE '%$keyword%'
                
                OR  projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.branch_id=branch_project.branch_id AND projects.category_id=category_project.category_id
                AND projects.genre_id=$genreproject AND projects.type_id=$typeproject AND projects.branch_id=$branch_project
                AND projects.keyword_project2 LIKE '%$keyword%'
                
                OR  projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.branch_id=branch_project.branch_id AND projects.category_id=category_project.category_id
                AND projects.genre_id=$genreproject AND projects.type_id=$typeproject AND projects.branch_id=$branch_project
                AND projects.keyword_project3 LIKE '%$keyword%'
                
                OR  projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.branch_id=branch_project.branch_id AND projects.category_id=category_project.category_id
                AND projects.genre_id=$genreproject AND projects.type_id=$typeproject AND projects.branch_id=$branch_project
                AND projects.keyword_project4 LIKE '%$keyword%'");
        }
        if(empty($branch_project)){
            $detailsearch = DB::select("SELECT * FROM projects,type_project,genre_project,branch_project,category_project
                WHERE projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.branch_id=branch_project.branch_id AND projects.category_id=category_project.category_id
                AND projects.genre_id=$genreproject AND projects.category_id=$categoryproject AND projects.type_id=$typeproject
                AND projects.project_name LIKE '%$keyword%' 
                
                OR  projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.branch_id=branch_project.branch_id AND projects.category_id=category_project.category_id
                AND projects.genre_id=$genreproject AND projects.category_id=$categoryproject AND projects.type_id=$typeproject
                AND projects.keyword_project1 LIKE '%$keyword%'
                
                OR  projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.branch_id=branch_project.branch_id AND projects.category_id=category_project.category_id
                AND projects.genre_id=$genreproject AND projects.category_id=$categoryproject AND projects.type_id=$typeproject
                AND projects.keyword_project2 LIKE '%$keyword%'
                
                OR  projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.branch_id=branch_project.branch_id AND projects.category_id=category_project.category_id
                AND projects.genre_id=$genreproject AND projects.category_id=$categoryproject AND projects.type_id=$typeproject
                AND projects.keyword_project3 LIKE '%$keyword%'
                
                OR  projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.branch_id=branch_project.branch_id AND projects.category_id=category_project.category_id
                AND projects.genre_id=$genreproject AND projects.category_id=$categoryproject AND projects.type_id=$typeproject
                AND projects.keyword_project4 LIKE '%$keyword%'");
        }
        else{
            $detailsearch = DB::select("SELECT * FROM projects,type_project,genre_project,branch_project,category_project
                WHERE projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.branch_id=branch_project.branch_id AND projects.category_id=category_project.category_id 
                AND projects.genre_id=$genreproject AND projects.category_id=$categoryproject 
                AND projects.type_id=$typeproject AND projects.branch_id=$branch_project           
                AND projects.project_name LIKE '%$keyword%' 
                
                OR  projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.branch_id=branch_project.branch_id AND projects.category_id=category_project.category_id  
                AND projects.genre_id=$genreproject AND projects.category_id=$categoryproject 
                AND projects.type_id=$typeproject AND projects.branch_id=$branch_project                 
                AND projects.keyword_project1 LIKE '%$keyword%'
                
                OR  projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.branch_id=branch_project.branch_id AND projects.category_id=category_project.category_id 
                AND projects.genre_id=$genreproject AND projects.category_id=$categoryproject 
                AND projects.type_id=$typeproject AND projects.branch_id=$branch_project                  
                AND projects.keyword_project2 LIKE '%$keyword%'
                
                OR  projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.branch_id=branch_project.branch_id AND projects.category_id=category_project.category_id  
                AND projects.genre_id=$genreproject AND projects.category_id=$categoryproject 
                AND projects.type_id=$typeproject AND projects.branch_id=$branch_project                 
                AND projects.keyword_project3 LIKE '%$keyword%'
                
                OR  projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.branch_id=branch_project.branch_id AND projects.category_id=category_project.category_id    
                AND projects.genre_id=$genreproject AND projects.category_id=$categoryproject 
                AND projects.type_id=$typeproject AND projects.branch_id=$branch_project               
                AND projects.keyword_project4 LIKE '%$keyword%'");

            foreach ($detailsearch as $key_s) {
                $key_similar1 = $key_s->keyword_project1;
                $key_similar2 = $key_s->keyword_project2;
                $key_similar3 = $key_s->keyword_project3;
                $key_similar4 = $key_s->keyword_project4;
                
                $similar = DB::select("SELECT * FROM projects,type_project 
                WHERE projects.type_id=type_project.type_id AND projects.keyword_project1 LIKE '%$key_similar1%' 
                OR projects.type_id=type_project.type_id AND projects.keyword_project2 LIKE '%$key_similar2%' 
                OR projects.type_id=type_project.type_id AND projects.keyword_project3 LIKE '%$key_similar3%' 
                OR projects.type_id=type_project.type_id AND projects.keyword_project4 LIKE '%$key_similar4%' ");
                // print_r($key_similar1);
                // print_r($key_similar2);
                // print_r($key_similar3);
                // print_r($key_similar4);
                
                //view star
                // $svg0 = DB::select("SELECT AVG(rate_index) AS AvgRate FROM rating_p WHERE project_id='$ite0'"); 
                // $svgrate0 = $svg0[0];
                // compact('svgrate0');
                // foreach($svgrate0 as $svgrate0){
                //     $svgrate0 = round($svgrate0,$percision=1);
                // }
            }
            //photos
            $chkid = (isset($_SESSION['usersid'])) ? $_SESSION['usersid'] : '';
            $chkidadmin = (isset($_SESSION['adminid'])) ? $_SESSION['adminid'] : '';
            $imgaccount = DB::select("SELECT * FROM users WHERE U_id='$chkid'");
            $adminaccount = DB::select("SELECT * FROM admin_company WHERE admin_id='$chkidadmin'");
        }
        
        
        //print_r($detailsearch);
        return view('beforesearchAV', compact('detailsearch','similar','imgaccount','adminaccount'));
        
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
