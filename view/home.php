<div class="row mb content">
    <div class="box-left">
        <div class="row">
            <div class="banner">
                <!-- Slideshow container -->
                <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="view/images/1001.jpg" style="width:100%">
                <div class="text">Caption Text</div>
                </div>

                <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="view/images/1002.jpg" style="width:100%">
                <div class="text">Caption Two</div>
                </div>

                <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="view/images/1003.jpg" style="width:100%">
                <div class="text">Caption Three</div>
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
                $i=0;
                foreach ($spnew as $sp) {
                    extract($sp);
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    $hinh=$img_path.$img;
                    if(($i==2)||($i==5)||($i==8)){
                        $mr = "";
                    }else{
                        $mr = "mr";
                    }
                    echo '<div class="box-shop '.$mr.'">
                            <div class="row img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a> </div>
                            <p class="price" style="text-align:center">'.$price.'</p>
                            <div style="text-align:center"><a href="'.$linksp.'">'.$name.'</a></div>
                            
                        </div>';
                        $i+=1;
                }
            ?>
            
        </div>
    </div>
    <div class="box-right">
        <?php include "boxright.php"; ?>
        
        
    </div>
</div>