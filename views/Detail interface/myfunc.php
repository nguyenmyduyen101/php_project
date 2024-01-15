<?php 
    function showcart($cart){
        $tong=0;
        $kq="";
        $stt=1;
        foreach($cart as $sp){
            $ttien=$sp[3]*$sp[4];
            $tong+=$ttien;
            $kq.='<tr>
                    <td>'.$stt.'</td>
                    <td><img src="'.$sp[1].'" width="100px"></td>
                    <td>'.$sp[2].'</td>
                    <td>'.$sp[3].'</td>
                    <td>'.$sp[4].'</td>
                    <td>'.$ttien.'</td>
                    <td stype="text-align:center"><a herf="#">Xóa</td>
                    </td>
                </tr>';
            $stt++;
        }
        $kq.='<tr>
                <td colspan="5">Tổng đơn hàng</td>
                <td style="background-color:#CCC;">'.$tong.'</td>
                <td></td>
            </tr>';
        return $kq;

    }
?>