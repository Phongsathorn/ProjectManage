@extends('layouts.mainhomeMDD')
@section('content')
<!-- app.css -->
        <div class="rowcolumn">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                    <div class="texthe"><i class="fas fa-tags"></i> <b>ติดตาม</b></div>
                    <a href="pursue" class="btnsum"><button type="button" class="btn btn-default" style="color: #D9A32F;background-color: white;" >
                    ดูทั้งหมด (<?php if($sum_follow){echo $sum_follow;}?>)</button></a>
                        <div class="table-responsive">
                        
                        @foreach($item_m0 as $items)
                        <?php $status_m0 = $items->status_m ?>
                            @if(isset($item_m0))
                                <div class="layoutMDD">
                                    <a href="itemdetaliMDD/{{$items->project_m_id}}"><div class="textMDD-h" ><b><?php echo $items->project_m_name;?></b></div></a>
                                    <div class="textMDD" ><b>คำอธิบาย :</b> 
                                        <?php 
                                            $str = $items->des_m_project;
                                            $count = utf8_strlen("$str");
                                            create_str($count,$str,$items);
                                        ?></div>
                                    <div class="textMDD" ><b>ผู้สร้างผลงาน :</b> <?php echo $items->name?></div>
                                    <div class="textMDD" ><b>คำสำคัญ :</b> <?php echo $items->keyword_m_project?></div>
                                    <div class="textMDD" ><b>ประเภท :</b> <?php echo $items->type_name?></div>
                                    <div class="rating">
                                        <?php 
                                            $rate = $items->AvgRate;
                                            echo $rate;
                                            rating_star($rate); 
                                        ?>
                                    </div>
                                </div>
                                
                            @endif
                        @endforeach
                        <br>
                        @foreach($itemA0 as $items)
                            <div class="layoutMDD">
                                <a href="itemdetaliMDD/{{$items->project_m_id}}"><div class="textMDD-h" ><b><?php echo $items->project_m_name;?></b></div></a>
                                <div class="textMDD" ><b>คำอธิบาย :</b>
                                <?php 
                                    $str = $items->des_m_project;
                                    $count = utf8_strlen("$str");
                                    create_str($count,$str,$items);
                                ?></div>
                                <div class="textMDD" ><b>ผู้สร้างผลงาน :</b> <?php echo $items->owner_m_name?></div>
                                <div class="textMDD" ><b>คำสำคัญ :</b> <?php echo $items->keyword_m_project?></div>
                                <div class="textMDD" ><b>ประเภท :</b> <?php echo $items->type_name?></div>
                                <div class="rating">
                                    <?php 
                                        $rate = $items->AvgRate;
                                        rating_star($rate); 
                                    ?>
                                </div>
                            </div>
                        @endforeach
                        </div><hr>
                    </div>
                    <div class="tile-body">
                    <div class="texthe"><i class="fas fa-heartbeat"></i> <b>เพื่อสุขภาพ</b></div>
                    <a href="#" class="btnsum"><button type="button" class="btn btn-default" style="color: #D9A32F;background-color: white;" >ดูทั้งหมด</button></a>
                        <div class="table-responsive">
                            <div class="layoutMDD">
                                <a href="itemdetaliMDD"><div class="textMDD-h" ><b>การสร้างตัวละครซูเปอร์ฮีโร่โดยมีแรงบันดาลใจจากอาวุธในรามเกียรติ์</b></div></a>
                                <div class="textMDD" ><b>คำอธิบาย :</b> Knowledge for Condominium Purchasing Decision Making of Chinese in Chiang Mai Provinc</div>
                                <div class="textMDD" ><b>ผู้สร้างผลงาน :</b> ประทิน ตายอด</div>
                                <div class="textMDD" ><b>คำสำคัญ :</b> รามเกียรติ์,ซุปเปอร์ฮีโร่,อาวุธ SP1348 / 00344</div>
                                <div class="textMDD" ><b>ประเภท :</b> วิจัย</div>
                            </div>
                        </div><hr>
                    </div>
                    <div class="texthe"><i class="fas fa-gamepad"></i> <b>เกม</b></div>
                    <a href="#" class="btnsum"><button type="button" class="btn btn-default" style="color: #D9A32F;background-color: white;" >ดูทั้งหมด</button></a>
                        <div class="table-responsive">
                            <div class="layoutMDD">
                                <a href="itemdetaliMDD"><div class="textMDD-h" ><b>การสร้างตัวละครซูเปอร์ฮีโร่โดยมีแรงบันดาลใจจากอาวุธในรามเกียรติ์</b></div></a>
                                <div class="textMDD" ><b>คำอธิบาย :</b> Knowledge for Condominium Purchasing Decision Making of Chinese in Chiang Mai Provinc</div>
                                <div class="textMDD" ><b>ผู้สร้างผลงาน :</b> ประทิน ตายอด</div>
                                <div class="textMDD" ><b>คำสำคัญ :</b> รามเกียรติ์,ซุปเปอร์ฮีโร่,อาวุธ SP1348 / 00344</div>
                                <div class="textMDD" ><b>ประเภท :</b> วิจัย</div>
                            </div>
                        </div><hr>
                    </div>
                </div>
            </div
        ></div>
@stop
     
<?php
    function utf8_strlen($str){ 
        $c = strlen($str);
        $l = 0;
        for ($i = 0; $i < $c; ++$i)
        {
            if ((ord($str[$i]) & 0xC0) != 0x80)
            {
                ++$l;
            }
        }
        return $l;
    } 

    function create_str($count,$str,$items) {
        if($count>20) {
            $strcount = substr($str,0,-10);
            $strcount1 = substr($strcount,0,-8);
            $strcut = $strcount1."...";
            echo $strcut;
        }elseif($count>30){
            $strcount = substr($str,0,-10);
            $strcount1 = substr($strcount,0,-8);
            $strcount2 = substr($strcount1,0,-10);
            $strcount3 = substr($strcount2,0,-8);
            $strcut = $strcount3."...";
            echo $strcut;
        }else {
            echo $items->project_m_name;
        }  
    }

    function check_rating($rating) {
        for($i=0;$i<floor($rating);$i++){
            echo '<i class="fas fa-star" style="color: #ffb712;"></i>';
        }
        for($i=0;$i < 5-floor($rating);$i++) {
            echo '<i class="far fa-star" style="color: #ffb712;"></i>';
        }
    }

    function rating_star($svgid){
        if(isset($svgid)?$svgid:''){
            if($svgid < 2 & $svgid> 0){
                echo'<div class="rating">';
                    check_rating($svgid);
                    if(isset($svgid)?$svgid:''){
                        echo'<span class=""> ('.(round($svgid, $precision = 1)).')</span>';
                    }
                echo'</div>';
            }
            
            elseif($svgid >= 2 & $svgid < 3) {
                echo'<div class="rating">';
                    check_rating($svgid);
                    if(isset($svgid)?$svgid:''){
                        echo'<span class=""> ('.(round($svgid, $precision = 1)).')</span>';
                    }
                echo '</div>';
            }
            
            elseif($svgid >= 3 & $svgid < 4) {
                echo'<div class="rating">';
                    check_rating($svgid);
                    if(isset($svgid)?$svgid:''){
                        echo'<span class=""> ('.(round($svgid, $precision = 1)).')</span>';
                    }
                echo '</div>';
            }
            
            elseif($svgid >= 4 & $svgid < 5){
                echo'<div class="rating">';
                    check_rating($svgid);
                    if(isset($svgid)?$svgid:''){
                        echo'<span class=""> ('.(round($svgid, $precision = 1)).')</span>';
                    } 
                echo'</div>';}
            
            elseif($svgid >= 5){
                echo'<div class="rating">';
                    check_rating($svgid);
                    if(isset($svgid)?$svgid:''){
                        echo'<span class=""> ('.(round($svgid, $precision = 1)).')</span>';
                    }
                echo'</div>';
                }
            else{
                echo'<div class="rating">';
                    check_rating($svgid);
                    if(isset($svgid)?$svgid:''){
                        echo'<span class=""> ('.(round($svgid, $precision = 1)).')</span>';
                    }
                echo '</div>';}
        
            }
        else{
            echo'<div class="rating">';
                check_rating(0);  echo'<span class="">(0)</span>';
            echo'</div>';
        }    
    }
?>
        
      

        
