@extends('layouts.mainhomeBD')

@section('content')
<br><br>
<div class="containersearch ">
    <h1 class="text-heder-search">ค้นหาเเบบละเอียด</h1>
        <form action="/AVsearch"  class="text-sum" method='GET'>
            <label for="search" class="search-text text-left-search" >ต้องการสืบค้น:</label>
            <center><input class=" form-control" name="detailsearch" id="detailsearch" type="text" aria-label="Search" placeholder="ค้นหา"></center>
           
            <div class="checkbox check-top">
                <input type="checkbox" value=""><label class="checkbox-left">ขึ้นต้น</label>
                <input type="checkbox" value=""><label class="checkbox-left">คำสำคัญ</label>
                
            </div>
            
            <!-- <label>ประเภท</label> -->
            <select name="genre_project" class="select-tbbb" id="genre_project" oninput="this.className = ''">
                <option value="" disabled selected>เลือกประเภท</option>
                @foreach($chk_genre as $genre)
                    <option value="{{$genre->genre_id}}">{{$genre->genre_name}}</option>
                @endforeach
            </select>
            <!-- <label>หมวดหมู่</label> -->
            <select name="category_project" class="select-tbbbb" id="category_project" oninput="this.className = ''">
                <option value="" disabled selected>เลือกหมวดหมู่</option>
                @foreach($chk_category as $category)
                    <option value="{{$category->category_id}}">{{$category->category_name}}</option>
                @endforeach
            </select>
            <!-- <label>ชนิดเอกสาร</label> -->
            <select name="type_project" class="select-tbb" id="type_project" oninput="this.className = ''">
                <option value="" disabled selected>เลือกชนิดเอกสาร</option>
                @foreach($chk_type as $type)
                    <option value="{{$type->type_id}}">{{$type->type_name}}</option>
                @endforeach
            </select>
            <!-- <label>ปีที่จัดทำเอกสาร</label> -->
            <select id="inputState" class="form-control input-group-sizee input-group-toppp">
                <option selected>สาขา</option>
                <option>...</option>
            </select>
            <!-- <label>สาขา</label> -->
            <select id="inputState" class="form-control input-group-size input-group-topppp">
                <option selected>ปีที่จัดทำเอกสาร</option>
                <option>...</option>
            </select>
            <div class="input-group-sizeee input-group-sizeee-left">
                
                <input type="text" class="form-control form-control--sizeee-left" placeholder="ผู้จัดทำ">
                
                <input type="text" class="form-control form-control--sizeee-left" placeholder="ที่ปรึกษา">
            </div>
            <center><button class="btn btn-primary btn-layout-s" type="submit" >ค้นหา</button></center>
            
            <script class="text/javascript">
            $('#type_project').change(function(){
                if($(this).val()!=""){
                    var type_project=$(this).val();
                    var _token=$('input[name="_token"]').val();
                    $.ajax({
                        url:"{{route('AVsearch')}}",
                        method:'GET',
                        data:{type_project:type_project,_token:_token}
                    })
                }
            });
            $('#genre_project').change(function(){
                if($(this).val()!=""){
                    var genre_project=$(this).val();
                    var _token=$('input[name="_token"]').val();
                    $.ajax({
                        url:"{{route('AVsearch')}}",
                        method:'GET',
                        data:{genre_project:genre_project,_token:_token}
                    })
                }
            });
            $('#category_project').change(function(){
                if($(this).val()!=""){
                    var category_project=$(this).val();
                    var _token=$('input[name="_token"]').val();
                    $.ajax({
                        url:"{{route('AVsearch')}}",
                        method:'GET',
                        data:{category_project:category_project,_token:_token}
                    })
                }
            });
            </script>
        </form>

</div>



@endsection