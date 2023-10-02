<div class="row mb content">
    <div class="box-left">
    <div class="row mb">
        <?php
            extract($onesp);
        ?>
        <div class="box-title"><?=$name?></div>
        <div class="row box-content" style="text-align:center">
            <?php
                extract($onesp);
                $img=$img_path.$img;
                echo '<div class="row mb spct"><img src="'.$img.'"></div>';
                echo $mota;
            ?>     
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?= $id ?>});
            });
    </script>
    <div class="row mb" id="binhluan">
        <div class="box-title">BÌNH LUẬN</div>
        <div class="row box-content">
                        
        </div>
    </div>

    <div class="row mb">
        <div class="box-title">SẢN PHẨM CÙNG LOẠI</div>
        <div class="row box-content">
            <?php   
                foreach ($sp_cung_loai as $sp_cung_loai) {
                    extract($sp_cung_loai);
                    $linksp="index.php?act=sanphamct&&idsp=".$id;
                    echo '<li><a href="'.$linksp.'">'.$name.'</a></li> ';
                }
            ?>            
    </div>
    </div>        
        
</div>   
        <div class="box-right">
            <?php include "boxright.php"; ?>     
        </div>
</div>