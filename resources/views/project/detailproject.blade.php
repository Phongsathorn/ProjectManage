<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="css/addproject.css">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/app.css">       
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>project</title>
    <style>

        html {
            background-image: url("img/background-body-addproject-3.jpg");
        }

        .body1 {
            background-image: url("img/background-body-addproject-3.jpg");
        }
        .textadd {
            padding-left: 20px;
            padding-right: 20px;
            font-size: 18px;
            color: black;
        }
        .border1 {
            padding-top: 8px;
            border: 1px solid #D9A327;
            margin-left: 30px;
            margin-right: 1285px;
        }

        .border2 {
            padding-top: 30px;
            margin-left: 150px;
            margin-right: 150px;
        }

        .tile {
            /* background-color: #7CE1B5; */
            background-image: url("img/background-body-addproject-2.jpg");
            margin-left: 200px;
            margin-right: 200px;
            
        }

        .step {
            height: 50px;
            width: 50px;
            margin: 0 10px;
            margin-right: 10px;
            background-color: #b150c7;
            border: none;  
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
            float: center;
            
        }

        .font {
            text-align: center;
            font-size: 18px;
            padding-top: 10px;
            color: #fff;
        }

        .btnp {
            background-color: #FFCC66;
        }

        .btnn {
            background-color: #00CCFF;
        }

        .btnnn {
            margin-top: 20px;
            margin-left: 278px;
        }

        input {
            padding: 5px;
            width: 30%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
            border: 1px solid red;
        }

        select {
            padding: 5px;
            width: 30%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }

        select.invalid {
            background-color: #ffdddd;
            border: 1px solid red;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        button {
            
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            padding: 8px 15px;
            border-radius: 20%;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background-color: #bbbbbb;
        }

        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #37b848;
        }

        /* set label */
        label {
            font-size: 20px;
            margin-top: 20px;
        }

        .imgup {
            background-color: #4CAF50;
            width: 100px;
            height: 100px;
        }

    </style>
</head>
<body class="body1">
        <div class="border2">
            <div class="tile">
                <script language="JavaScript">
                    function showPreview(ele)
                    {
                            $('#showimage').attr('src', ele.value); // for IE
                            if (ele.files && ele.files[0]) {
                                var reader = new FileReader();
                                
                                reader.onload = function (e) {
                                    $('#showimage').attr('src', e.target.result);
                                }

                                reader.readAsDataURL(ele.files[0]);
                            }
                    }
                </script>
                <center><h1><div class="containeradd textadd" >เเก้ไขรายละเอียดผลงาน</div></h1></center>
                    <form id="addprojectfrom" action="adddataproject" method="POST" enctype="multipart/form-data">
                    @csrf    
                        <center>
                            <label for="text" class="">โลโก้ผลงาน</label><br>
                            <div class="col-md-4">
                                <img id="showimage" style="background:#9d9d9d;width:170px;height:180px;">
                            </div>

                            <label for="text" class="">ภาพโชว์ผลงาน</label><br>
                            <div class="col-md-4">
                                <img id="showimage" style="background:#9d9d9d;width:170px;height:180px;">
                            </div>

                            <label for="text" class="">ภาพ ถ้ามี</label><span class="text-muted">(.PNG)</span><br>
                                <input type="file" name="fileimgToUpload" id="fileimgToUpload" class="" OnChange="showPreview(this)"><br>

                            <label for="text" class="">อัพโหลดไฟล์เอกสารตัวเต็ม </label><span class="text-muted">(.PDF)</span><br>
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                        </center>

                        <center><label for="text" class="">เกี่ยวกับผลงาน</label><br></center>
                        <center style="margin-top:10px;margin-left:-40px;">ชื่อเรื่อง: <input type="text" class="" name="project_name" id="project_name" oninput="this.className = ''"><br></center>
                        <center style="margin-top:10px;margin-left:-40px;">ชื่อเรื่องภาษาอังกฤษ: <input type="text" class="" name="project_name" id="project_name" oninput="this.className = ''"><br></center>
                        <center style="margin-top:10px;margin-left:-40px;">คำสำคัญ: <input type="text" class="" name="project_name" id="project_name" oninput="this.className = ''"><br></center>
                        <center style="margin-top:10px;margin-left:-71px;">คำอธิบายย่อ: <input type="text" class="input-tb" name="des_project" id="des_project" oninput="this.className = ''"><br></center>
                        <center style="margin-top:10px;margin-left:-63px;">ชนิดเอกสาร: <select name="type_project" class="select-tbb" id="" oninput="this.className = ''">
                                    <option value="" disabled selected>เลือกชนิดเอกสาร</option>
                                    <option value="วิจัย">วิจัย</option>
                                    <option value="โครงงาน">โครงงาน</option>
                                    <option value="วิทยานิพนธ์">วิทยานิพนธ์</option>
                                    <option value="หนังสือ">หนังสือ</option>
                                </select><br></center>
                        <center style="margin-top:10px;margin-left:-40px;">ประเภท: <select name="genre_project" class="select-tbbb" id="" oninput="this.className = ''">
                                    <option value="" disabled selected>เลือกประเภท</option>
                                    <option value="เว็บ">เว็บ</option>
                                    <option value="เว็บเเอพพลิเคชัน">เว็บเเอพพลิเคชัน</option>
                                    <option value="เเอพพลิเคชัน">เเอพพลิเคชัน</option>
                                    <option value="ไอโอที(IoT)">ไอโอที(IoT)</option>
                                    <option value="ปัญญาประดิษฐ์(Ai)">ปัญญาประดิษฐ์(Ai)</option>
                                </select><br></center>
                        <center style="margin-top:10px;margin-left:-50px;">หมวดหมู่: <select name="category_project" class="select-tbbbb" id="" oninput="this.className = ''">
                                    <option value="" disabled selected>เลือกหมวดหมู่</option>
                                    <option value="การศึกษา">การศึกษา</option>
                                    <option value="ติดตาม">ติดตาม</option>
                                    <option value="ดูเเลสุขภาพ">ดูเเลสุขภาพ</option>
                                    <option value="เกษตร">เกษตร</option>
                                </select><br></center>
                        <center style="margin-top:10px;margin-left:-30px;">สาขา: <select name="branch_project" class="select-tbbbbb" id="" oninput="this.className = ''">
                                    <option value="" disabled selected>เลือกสาขา</option>
                                    <option value="สาขาวิชาวิศวกรรมคอมพิวเตอร์">สาขาวิชาวิศวกรรมคอมพิวเตอร์</option>
                                    <option value="สาขาวิชาวิศวกรรมซอฟต์แวร์">สาขาวิชาวิศวกรรมซอฟต์แวร์</option>
                                    <option value="สาขาวิทยาการคอมพิวเตอร์">สาขาวิทยาการคอมพิวเตอร์</option>
                                    <option value="สาขาวิชาคอมพิวเตอร์ธุรกิจ">สาขาวิชาคอมพิวเตอร์ธุรกิจ</option>
                                    <option value="สาขาวิชาเทคโนโลยีสารสนเทศ">สาขาวิชาเทคโนโลยีสารสนเทศ</option>
                                    <option value="สาขาวิชาภูมิสารสนเทศศาสตร์">สาขาวิชาภูมิสารสนเทศศาสตร์</option>
                                    <option value="สาขาวิชาเทคโนโลยีคอมพิวเตอร์กราฟิกและมัลติมีเดีย">สาขาวิชาเทคโนโลยีคอมพิวเตอร์กราฟิกและมัลติมีเดีย</option>
                                </select><br></center>
                                <center><label for="text" class="">ข้อมูลติดต่อ</label><br></center>
                        <center style="margin-top:10px;margin-left:-63px;">Facebook: <input type="text" class="input-tbb" name="facebook" id="facebook" oninput="this.className = ''"><br></center>
                        <center style="margin-top:10px;margin-left:-35px;">Email: <input type="email" class="input-tbbb" name="email" id="email" oninput="this.className = ''"><br></center>
                        <center style="margin-top:10px;margin-left:-55px;">เบอร์โทร: <input type="phone" class="input-tbbbb" name="phone" id="phone" oninput="this.className = ''"><br></center>

                        <div style="overflow:10px;">
                            <div style="float:center;">
                                <a href="homeBD"><button type="button" class="btnp btnnn">ย้อนกลับ</button></a>
                            </div>
                            <div style="float:left; margin-left: 380px; margin-top: -41px;">
                                <button type="button" id="nextBtn" class="btnn" >เเก้ไข</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
                           
        
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
        <!-- The javascript plugin to display page loading on top-->
        <script src="js/plugins/pace.min.js"></script>
        <!-- Page specific javascripts-->
        <script type="text/javascript" src="js/plugins/chart.js"></script>
</body>
</html>