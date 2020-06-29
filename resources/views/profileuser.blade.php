<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <title>Profile</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        html{
            background-color: #fff;
        }
        body{
            background-color: #fff;
        }

        .layout-header{
            margin-top: 30px;
        }

        .layout-imgup{
            margin-left: 100px;
        }

        .layout-content{
            margin-left: 550px;
        }

        .layout-input{
            
        }

        .front{
            font-size: 17px;
        }

    </style>
</head>
<body>

        @if ($message = Session::get('successupdate'))
            <script>
            swal({
                title: "อัพเดทข้อมูลเรียบร้อย",
                icon: "success",
                button: "ตกลง",
            });
            </script>
        @endif

        <script language="JavaScript">
            function showPreview(ele)
            {
                    $('#showimg').attr('src', ele.value); // for IE
                    if (ele.files && ele.files[0]) {
                        var reader = new FileReader();
                        
                        reader.onload = function (e) {
                            $('#showimg').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(ele.files[0]);
                    }
            }
        </script>
    	<div class="col-sm-9 layout-content">
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <center style="margin-left:-650px;margin-top:40px;"><div class="col-sm-10"><h1>โปรไฟล์</h1></div></center>
                  <form class="form" action="profile" method="post" id="registrationForm" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3 layout-imgup"><!--left col-->
                                <div class="text-center">
                                    <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" id="showimg" name="showimg" class="avatar img-circle img-thumbnail" alt="imgupload">
                                    <h6>อัพโหลดรูปภาพของคุณ...</h6>
                                    <input type="file" class="text-center center-block file-upload" name="img" OnChange="showPreview(this)">
                                </div></hr><br>
                            </div><!--/col-3-->
                        </div>
                    </div>
                    <div class="form-group">
                          <div class="col-xs-6" style="margin-top:10px;">
                              <label for="name"><h5>ชื่อ-สุกล</h5></label>
                              <input type="text" class="form-control front layoutprovince-size" name="name" id="name" placeholder="ชื่อ-สุกล" 
                              value="{{ Auth::user()->name }}">
                          </div>
                      </div>
                      <div class="form-group ">
                          <div class="col-xs-6 layout">
                              <label for="gender"><h5>เพศ</h5></label>
                              <select name="gender" id="gender" class="layoutprovince-size form-control front"placeholder="enter phone">
                                <option value="" disabled selected>เลือกเพศ</option>
                                <option value="ชาย" <?php if(Auth::user()->gender =="ชาย"){ echo 'selected' ; } ?>>ชาย</option>
                                <option value="หญิง" <?php if(Auth::user()->gender =="หญิง"){ echo  'selected' ; } ?>>หญิง</option>
                                </select>
                          </div>
                      </div>
          
                      <div class="form-group ">
                          <div class="col-xs-6 ">
                             <label for="province"><h5>จังหวัด</h5></label>
                             <select name="province" id="province" class="layoutprovince-size form-control front">
                                <option value="" disabled selected >เลือกจังหวัด</option>
                                <option value="กรุงเทพมหานคร" <?php if(Auth::user()->province=="กรุงเทพมหานคร"){ echo 'selected' ; } ?>>กรุงเทพมหานคร</option>
                                <option value="กระบี่" <?php if(Auth::user()->province=="กรุงเทพมหานคร"){ echo 'selected' ; } ?>>กระบี่ </option>
                                <option value="กาญจนบุรี" <?php if(Auth::user()->province=="กระบี่"){ echo 'selected' ; } ?>>กาญจนบุรี </option>
                                <option value="กาฬสินธุ์" <?php if(Auth::user()->province=="กาญจนบุรี"){ echo 'selected' ; } ?>>กาฬสินธุ์ </option>
                                <option value="กำแพงเพชร" <?php if(Auth::user()->province=="กำแพงเพชร"){ echo 'selected' ; } ?>>กำแพงเพชร </option>
                                <option value="ขอนแก่น" <?php if(Auth::user()->province=="ขอนแก่น"){ echo 'selected' ; } ?>>ขอนแก่น</option>
                                <option value="ชัยนาท" <?php if(Auth::user()->province=="ชัยนาท"){ echo 'selected' ; } ?>>ชัยนาท </option>
                                <option value="ชัยภูมิ" <?php if(Auth::user()->province=="ชัยภูมิ"){ echo 'selected' ; } ?>>ชัยภูมิ </option>
                                <option value="ชุมพร" <?php if(Auth::user()->province=="ชุมพร"){ echo 'selected' ; } ?>>ชุมพร </option>
                                <option value="ชลบุรี" <?php if(Auth::user()->province=="ชลบุรี"){ echo 'selected' ; } ?>>ชลบุรี </option>
                                <option value="เชียงใหม่" <?php if(Auth::user()->province=="เชียงใหม่"){ echo 'selected' ; } ?>>เชียงใหม่ </option>
                                <option value="เชียงราย" <?php if(Auth::user()->province=="เชียงราย"){ echo 'selected' ; } ?>>เชียงราย </option>
                                <option value="ตรัง" <?php if(Auth::user()->province=="ตรัง"){ echo 'selected' ; } ?>>ตรัง </option>
                                <option value="ตราด" <?php if(Auth::user()->province=="ตราด"){ echo 'selected' ; } ?>>ตราด </option>
                                <option value="ตาก" <?php if(Auth::user()->province=="ตาก"){ echo 'selected' ; } ?>>ตาก </option>
                                <option value="นครนายก" <?php if(Auth::user()->province=="นครนายก"){ echo 'selected' ; } ?>>นครนายก </option>
                                <option value="นครปฐม" <?php if(Auth::user()->province=="นครปฐม"){ echo 'selected' ; } ?>>นครปฐม </option>
                                <option value="นครพนม" <?php if(Auth::user()->province=="นครพนม"){ echo 'selected' ; } ?>>นครพนม </option>
                                <option value="นครราชสีมา" <?php if(Auth::user()->province=="นครราชสีมา"){ echo 'selected' ; } ?>>นครราชสีมา </option>
                                <option value="นครศรีธรรมราช" <?php if(Auth::user()->province=="นครศรีธรรมราช"){ echo 'selected' ; } ?>>นครศรีธรรมราช </option>
                                <option value="นครสวรรค์" <?php if(Auth::user()->province=="นครสวรรค์"){ echo 'selected' ; } ?>>นครสวรรค์ </option>
                                <option value="นราธิวาส" <?php if(Auth::user()->province=="นราธิวาส"){ echo 'selected' ; } ?>>นราธิวาส </option>
                                <option value="น่าน" <?php if(Auth::user()->province=="น่าน"){ echo 'selected' ; } ?>>น่าน </option>
                                <option value="นนทบุรี" <?php if(Auth::user()->province=="นนทบุรี"){ echo 'selected' ; } ?>>นนทบุรี </option>
                                <option value="บึงกาฬ" <?php if(Auth::user()->province=="บึงกาฬ"){ echo 'selected' ; } ?>>บึงกาฬ</option>
                                <option value="บุรีรัมย์" <?php if(Auth::user()->province=="บุรีรัมย์"){ echo 'selected' ; } ?>>บุรีรัมย์</option>
                                <option value="ประจวบคีรีขันธ์" <?php if(Auth::user()->province=="ประจวบคีรีขันธ์"){ echo 'selected' ; } ?>>ประจวบคีรีขันธ์ </option>
                                <option value="ปทุมธานี" <?php if(Auth::user()->province=="ปทุมธานี"){ echo 'selected' ; } ?>>ปทุมธานี </option>
                                <option value="ปราจีนบุรี" <?php if(Auth::user()->province=="ปราจีนบุรี"){ echo 'selected' ; } ?>>ปราจีนบุรี </option>
                                <option value="ปัตตานี" <?php if(Auth::user()->province=="ปัตตานี"){ echo 'selected' ; } ?>>ปัตตานี </option>
                                <option value="พะเยา" <?php if(Auth::user()->province=="พะเยา"){ echo 'selected' ; } ?>>พะเยา </option>
                                <option value="พระนครศรีอยุธยา" <?php if(Auth::user()->province=="พระนครศรีอยุธยา"){ echo 'selected' ; } ?>>พระนครศรีอยุธยา </option>
                                <option value="พังงา" <?php if(Auth::user()->province=="พังงา"){ echo 'selected' ; } ?>>พังงา </option>
                                <option value="พิจิตร" <?php if(Auth::user()->province=="พิจิตร"){ echo 'selected' ; } ?>>พิจิตร </option>
                                <option value="พิษณุโลก" <?php if(Auth::user()->province=="พิษณุโลก"){ echo 'selected' ; } ?>>พิษณุโลก </option>
                                <option value="เพชรบุรี" <?php if(Auth::user()->province=="เพชรบุรี"){ echo 'selected' ; } ?>>เพชรบุรี </option>
                                <option value="เพชรบูรณ์" <?php if(Auth::user()->province=="เพชรบูรณ์"){ echo 'selected' ; } ?>>เพชรบูรณ์ </option>
                                <option value="แพร่" <?php if(Auth::user()->province=="แพร่"){ echo 'selected' ; } ?>>แพร่ </option>
                                <option value="พัทลุง" <?php if(Auth::user()->province=="พัทลุง"){ echo 'selected' ; } ?>>พัทลุง </option>
                                <option value="ภูเก็ต" <?php if(Auth::user()->province=="ภูเก็ต"){ echo 'selected' ; } ?>>ภูเก็ต </option>
                                <option value="มหาสารคาม" <?php if(Auth::user()->province=="มหาสารคาม"){ echo 'selected' ; } ?>>มหาสารคาม </option>
                                <option value="มุกดาหาร" <?php if(Auth::user()->province=="มุกดาหาร"){ echo 'selected' ; } ?>>มุกดาหาร </option>
                                <option value="แม่ฮ่องสอน" <?php if(Auth::user()->province=="แม่ฮ่องสอน"){ echo 'selected' ; } ?>>แม่ฮ่องสอน </option>
                                <option value="ยโสธร" <?php if(Auth::user()->province=="ยโสธร"){ echo 'selected' ; } ?>>ยโสธร </option>
                                <option value="ยะลา" <?php if(Auth::user()->province=="ยะลา"){ echo 'selected' ; } ?>>ยะลา </option>
                                <option value="ร้อยเอ็ด" <?php if(Auth::user()->province=="ร้อยเอ็ด"){ echo 'selected' ; } ?>>ร้อยเอ็ด </option>
                                <option value="ระนอง" <?php if(Auth::user()->province=="ระนอง"){ echo 'selected' ; } ?>>ระนอง </option>
                                <option value="ระยอง" <?php if(Auth::user()->province=="ระยอง"){ echo 'selected' ; } ?>>ระยอง </option>
                                <option value="ราชบุรี" <?php if(Auth::user()->province=="ราชบุรี"){ echo 'selected' ; } ?>>ราชบุรี</option>
                                <option value="ลพบุรี" <?php if(Auth::user()->province=="ลพบุรี"){ echo 'selected' ; } ?>>ลพบุรี </option>
                                <option value="ลำปาง" <?php if(Auth::user()->province=="ลำปาง"){ echo 'selected' ; } ?>>ลำปาง </option>
                                <option value="ลำพูน" <?php if(Auth::user()->province=="ลำพูน"){ echo 'selected' ; } ?>>ลำพูน </option>
                                <option value="เลย" <?php if(Auth::user()->province=="เลย"){ echo 'selected' ; } ?>>เลย </option>
                                <option value="ศรีสะเกษ" <?php if(Auth::user()->province=="ศรีสะเกษ"){ echo 'selected' ; } ?>>ศรีสะเกษ</option>
                                <option value="สกลนคร" <?php if(Auth::user()->province=="สกลนคร"){ echo 'selected' ; } ?>>สกลนคร</option>
                                <option value="สงขลา" <?php if(Auth::user()->province=="สงขลา"){ echo 'selected' ; } ?>>สงขลา </option>
                                <option value="สมุทรสาคร" <?php if(Auth::user()->province=="สมุทรสาคร"){ echo 'selected' ; } ?>>สมุทรสาคร </option>
                                <option value="สมุทรปราการ" <?php if(Auth::user()->province=="สมุทรปราการ"){ echo 'selected' ; } ?>>สมุทรปราการ </option>
                                <option value="สมุทรสงคราม" <?php if(Auth::user()->province=="สมุทรสงคราม"){ echo 'selected' ; } ?>>สมุทรสงคราม </option>
                                <option value="สระแก้ว" <?php if(Auth::user()->province=="สระแก้ว"){ echo 'selected' ; } ?>>สระแก้ว </option>
                                <option value="สระบุรี" <?php if(Auth::user()->province=="สระบุรี"){ echo 'selected' ; } ?>>สระบุรี </option>
                                <option value="สิงห์บุรี" <?php if(Auth::user()->province=="สิงห์บุรี"){ echo 'selected' ; } ?>>สิงห์บุรี </option>
                                <option value="สุโขทัย" <?php if(Auth::user()->province=="สุโขทัย"){ echo 'selected' ; } ?>>สุโขทัย </option>
                                <option value="สุพรรณบุรี" <?php if(Auth::user()->province=="สุพรรณบุรี"){ echo 'selected' ; } ?>>สุพรรณบุรี </option>
                                <option value="สุราษฎร์ธานี" <?php if(Auth::user()->province=="สุราษฎร์ธานี"){ echo 'selected' ; } ?>>สุราษฎร์ธานี </option>
                                <option value="สุรินทร์" <?php if(Auth::user()->province=="สุรินทร์"){ echo 'selected' ; } ?>>สุรินทร์ </option>
                                <option value="สตูล" <?php if(Auth::user()->province=="สตูล"){ echo 'selected' ; } ?>>สตูล </option>
                                <option value="หนองคาย" <?php if(Auth::user()->province=="หนองคาย"){ echo 'selected' ; } ?>>หนองคาย </option>
                                <option value="หนองบัวลำภู" <?php if(Auth::user()->province=="หนองบัวลำภู"){ echo 'selected' ; } ?>>หนองบัวลำภู </option>
                                <option value="อำนาจเจริญ" <?php if(Auth::user()->province=="อำนาจเจริญ"){ echo 'selected' ; } ?>>อำนาจเจริญ </option>
                                <option value="อุดรธานี" <?php if(Auth::user()->province=="อุดรธานี"){ echo 'selected' ; } ?>>อุดรธานี </option>
                                <option value="อุตรดิตถ์" <?php if(Auth::user()->province=="อุตรดิตถ์"){ echo 'selected' ; } ?>>อุตรดิตถ์ </option>
                                <option value="อุทัยธานี" <?php if(Auth::user()->province=="อุทัยธานี"){ echo 'selected' ; } ?>>อุทัยธานี </option>
                                <option value="อุบลราชธานี" <?php if(Auth::user()->province=="อุบลราชธานี"){ echo 'selected' ; } ?>>อุบลราชธานี</option>
                                <option value="อ่างทอง" <?php if(Auth::user()->province=="อ่างทอง"){ echo 'selected' ; } ?>>อ่างทอง </option>
                            </select>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h5>อีเมล</h5></label>
                              <input type="email" class="form-control layoutprovince-size front" name="email" id="email" placeholder="you@email.com" title="enter your email."
                              value="<?php echo Auth::user()->email; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="username"><h5>ชื่อผู้ใช้</h5></label>
                              <input type="text" class="form-control layoutprovince-size front" name="username" id="username" placeholder="you@email.com" title="enter your email."
                              value="<?php echo Auth::user()->username; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <a href="homeBD"><button  class="btn btn-lg" type="button"  >กลับ</button></a>
                               	<!-- <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button> -->
                            </div>
                      </div>
              	</form>
              
              <hr>
              
             
             </div><!--/tab-pane-->
             
              	</form>
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
</body>
</html>





                                                      