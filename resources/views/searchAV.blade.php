@extends('layouts.mainhomeBD')

@section('content')
<br><br>
<div class="containersearch">
    <h1>ค้นหาเเบบละเอียด</h1>
    <form action="/action_page.php">
        <label for="search">ต้องการสือบค้น:</label>
        <input class="app-search__input app-search search-left" type="search" placeholder="ค้นหาวิจัย โครงงาน วิทยานิพน">
        
        <div class="checkbox">
            <label><input type="checkbox" value="">Option 1</label>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" value="">Option 2</label>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" value="">Option 2</label>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" value="">Option 2</label>
        </div>
        <label>ประเภท</label>
        <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>...</option>
        </select>
        <label>หมวดหมู่</label>
        <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>...</option>
        </select>
        <label>ชนิดเอกสาร</label>
        <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>...</option>
        </select>
        <label>ปีที่จัดทำเอกสาร</label>
        <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>...</option>
        </select>
        <label>สาขา</label>
        <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>...</option>
        </select>
        <label>ผู้จัดทำ</label>
        <input type="text">
        <label>>ที่ปรึกษา</label>
        <input type="text">
        <button class="btn " type="submit">ค้นหา</i></button>
       
    </form>
</div>



@endsection