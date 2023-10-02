<div class="row mb content">
    <div class="box-left mr">
    <div class="row mb">
       
        <div class="box-title">SẢN PHẨM <strong><?=$tendm?></strong></div>
        <div class="row box-content">
            <?php
                $i=0;
                foreach ($dssp as $sp) {
                    extract($sp);
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    $hinh=$img_path.$img;
                    if(($i==2)||($i==5)||($i==8)||($i==11)){
                        $mr = "";
                    }else{
                        $mr = "mr";
                    }
                    echo '<div class="box-shop '.$mr.'">
                            <div class="row img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a> </div>
                            <p>'.$price.'</p>
                            <a href="'.$linksp.'">'.$name.'</a>
                        </div>';
                        $i+=1;
                }
            ?>     
        </div>
    </div>

 
        
</div>   
        <div class="box-right">
            <?php include "boxright.php"; ?>     
        </div>
</div>