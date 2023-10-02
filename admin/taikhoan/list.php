<div>
            <div  class="row frmtitle mb10" >
                <h3>DANH SÁCH TÀI KHOẢN</h3>
            </div>
            <div  class=" frmcontent">
                <div class="row mb10 frmdsloai">
                    <table border="1">
                        <tr>
                            <th></th>
                            <th>MÃ TK</th>
                            <th>TÊN ĐĂNG NHẬP</th>
                            <th>MẬT KHẨU</th>
                            <th>EMAIL</th>
                            <th>ĐỊA CHỈ</th>
                            <th>SỐ ĐIỆN THOẠI</th>
                            <th>VAI TRÒ</th>
                            <th>ACTION</th>
                        </tr>

                        <?php
                            foreach ($listtaikhoan as $taikhoan){
                                extract($taikhoan);
                                $suatk = "index.php?act=suatk&id=".$id;
                                $xoatk = "index.php?act=xoatk&id=".$id;
                                
                                echo '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$id.'</td>
                                        <td>'.$user.'</td>
                                        <td>'.$pass.'</td>
                                        <td>'.$email.'</td>
                                        <td>'.$address.'</td>
                                        <td>'.$tel.'</td>
                                        <td>'.$role.'</td>
                                        <td>
                                            <a href="'.$suatk.'"><input type="button" value="Sửa"></a> 
                                            <a href="'.$xoatk.'"><input type="button" value="Xóa"></a>
                                        </td>
                                    </tr>';
                            }
                        ?>
                        
        

                    </table>
                </div>
                <div class="row mb10">
                   
                    <a href="index.php?act=addtk"><input type="button" value="Nhập thêm"></a>
                </div>
            </div>
        </div>