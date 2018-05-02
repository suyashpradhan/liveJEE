<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
               rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">

    input {
        background-color: #CCCCCC;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        display: inherit;
        font-size: 12px;
        text-decoration: none;
    }

    #hor-minimalist-b {
        font-size: 14px;
        border-collapse: collapse;
        text-align: left;
    }

    #hor-minimalist-b th {
        font-size: 14px;
        font-weight: normal;
        color: #000;
        padding: 5px 8px;
        border-bottom: 2px solid #000;
    }

    #hor-minimalist-b td {
        border-bottom: 1px solid #000;
        color: #000;
        padding: 4px 8px;
    }

    #hor-minimalist-b tbody tr:hover td {
        color: #666666;
    }
</style>

<?php
$count_p = 0;
$count_c = 0;
$count_m = 0;
$count_ss = 0;
$count_ee = 0;
$count_mm = 0;
$count_b = 0;
$count_e = 0;
$count_f = 0;
$count_fe = 0;
$count_f9 = 0;
$count_ee_t = 0;
$count_mm_t = 0;
$count_ss_t = 0;
$count_e_t = 0;
$count_m_t = 0;
$count_b_t = 0;
$count_p_t = 0;
$count_c_t = 0;
$count_f_t = 0;
$count_fe_t = 0;
$count_f9_t = 0;
$service_tax_ss = 0;
$service_tax_ee = 0;
$service_tax_mm = 0;
$service_tax_p = 0;
$service_tax_c = 0;
$service_tax_m = 0;
$service_tax_b = 0;
$service_tax_e = 0;
$service_tax_f = 0;
$service_tax_fe = 0;
$service_tax_f9 = 0;
$count_ss_d = 0;
$count_mm_d = 0;
$count_ss_d = 0;
$count_e_d = 0;
$count_m_d = 0;
$count_b_d = 0;
$count_p_d = 0;
$count_c_d = 0;
$count_f_d = 0;
$count_f9_d = 0;
$count_fe_d = 0;
$count_ee_f = 0;
$count_mm_f = 0;
$count_ss_f = 0;
$count_e_f = 0;
$count_m_f = 0;
$count_b_f = 0;
$count_p_f = 0;
$count_c_f = 0;
$count_f_f = 0;
$count_f9_f = 0;
$count_fe_f = 0;
error_reporting(0);
session_start();
include("connection.php");
if (isset($_GET['code'])) {
    $sub = $_GET['code'];
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $_SESSION['module'][] = $sub . '-' . $id;
}
$items = count(array_unique($_SESSION['module']));
?>
<div style="overflow-x:auto;overflow-y:auto">
    <table class="table table-sm" id="hor-minimalist-b">
        <thead>
        <tr>
            <th scope="col" style="border-bottom: 1px solid #000">Course_Code</th>
            <th scope="col" style="border-bottom: 1px solid #000">Subject</th>
            <th scope="col" style="border-bottom: 1px solid #000">Topic</th>
            <th scope="col" style="border-bottom: 1px solid #000">Amount</th>
            <th scope="col" style="border-bottom: 1px solid #000">Delete</th>
        </tr>
        </thead>
    </table>
</div>
<?php
if ($items == 0) {
    ?>
    <tr>
        <td colspan="5" align="center" valign="middle" style="padding-top:15px;font-size: 15px;"><h2>
                <span style="font-size: 15px;text-align: center">No Course Selected</span></h2></td>
    </tr>
<?php }

foreach (array_unique($_SESSION['module']) as $sess) {
    $id1 = $sess;
    if (isset($sess)) {
        $code = explode('-', $id1);
        if ($code[1] < 9) {
            if ($code[0] == 'p') {
                $count_p++;
                $subject = 'Physics';
            }
            if ($code[0] == 'c') {
                $count_c++;
                $subject = 'Chemistry';
            }
            if ($code[0] == 'm') {
                $count_m++;
                $subject = 'Maths';
            }
            if ($code[0] == 'b') {
                $count_b++;
                $subject = 'Biology';
            }
            if ($code[0] == 'e') {
                $count_e++;
                $subject = 'English';
            }
            if ($code[0] == 'ss') {
                $count_ss++;
                $subject = 'Science';
            }
            if ($code[0] == 'mm') {
                $count_mm++;
                $subject = 'Maths';
            }
            if ($code[0] == 'ee') {
                $count_ee++;
                $subject = 'English';
            }
        } else {
        }

        if ($code[0] == 'p') {
            $subject = 'Physics';
        } else if ($code[0] == 'c') {
            $subject = 'Chemistry';
        } else if ($code[0] == 'm') {
            $subject = 'Maths';
        } else if ($code[0] == 'b') {
            $subject = 'Biology';
        } else if ($code[0] == 'e') {
            $subject = 'English';
        } else if ($code[0] == 'mm') {
            $subject = 'Maths';
        } else if ($code[0] == 'ss') {
            $subject = 'Science';
        } else if ($code[0] == 'ee') {
            $subject = 'English';
        } else {
        }
        if ($code[1] == '12' || $code[1] == '11') {
            $count_f = $count_f + 4;
        } else if ($code[1] == '9' || $code[1] == '10') {
            $count_f9 = $count_f9 + 2;
        } else {
        }

        if ($code[0] == 'ee' || $code[0] == 'ss' or $code[0] == 'mm') {
            if ($code[1] == '9') {
                $module_no = '11';
            } else if ($code[1] == '10') {
                $module_no = '12';
            } else {
                $module_no = $code[1];
            }
            $r1 = mysql_query("select * from module_detail_9_10 where subject='$subject' and module_no='$module_no'");
            $r2 = mysql_fetch_array($r1);
        } else {
            $r1 = mysql_query("select * from module_detail where subject='$subject' and module_no='$code[1]'");
            $r2 = mysql_fetch_array($r1);
        }
        ?>
        <tr valign="top" align="center" height="40">
            <td height="26"><?php echo ucfirst($code[0]) . '-' . $code[1]; ?></td>
            <td><?php echo $r2[1]; ?></td>
            <td><?php echo $r2[3]; ?></td>
            <td>
                <?php
                if (($subject == 'Physics' || $subject == 'Chemistry' || $subject == 'Biology' || $subject == 'Maths') && ($code[1] == '11' || $code[1] == '12')) {
                    echo "14599";
                } else if ($subject == 'English' && ($code[1] == '12' || $code[1] == '11')) {
                    echo "14599";
                } else if ($code[1] == '9' || $code[1] == '10') {
                    echo "7500";
                } else if ($code[1] == '9' || $code[1] == '10') {
                    echo "5500";
                } else if ($code[0] == 'mm' || $code[0] == 'ee' || $code[0] == 'ss') {
                    echo "3750";
                } else if ($subject == 'Physics' || $subject == 'Chemistry' || $subject == 'Biology' || $subject == 'Maths') {
                    echo "3500";
                } else if ($subject == 'English') {
                    echo "3500";
                } else {
                }
                ?>
            </td>
            <?php
            if ($code[0] == 'mm' || $code[0] == 'ee' || $code[0] == 'ss') { ?>
                <td><img src="image/delete.png" id="<?php echo 'delete' . $r2[0]; ?>"
                         name="<?php echo 'delete' . $r2[0]; ?>"
                         onClick="window.parent.delete_mod_9_10('<?php echo $code[1]; ?>','<?php echo $code[0]; ?>');"
                         style="cursor:pointer"></td>
                <?php
            } else { ?>
                <td><img src="image/delete.png" id="<?php echo 'delete' . $r2[0]; ?>"
                         name="<?php echo 'delete' . $r2[0]; ?>"
                         onClick="window.parent.delete_mod('<?php echo $code[1]; ?>','<?php echo $code[0]; ?>');"
                         style="cursor:pointer"></td>
            <?php } ?>
        </tr>
        <?php
    }
}
$total_subject = $count_fe + $count_f;
$total_subject_9_10 = $count_f9;

if ($total_subject == 8) {
    // $total_sub_d=1000;
} else if ($total_subject_9_10 == '4') {
    // $total_sub_d=1000;
} else if ($total_subject_9_10 == '6') {
    //  $total_sub_d=1500;
} else if ($total_subject == 12) {
    // $total_sub_d=1500;
} else if ($total_subject == 16) {
    // $total_sub_d=2000;
} else if ($total_subject == 20) {
    //  $total_sub_d=2500;
} else if ($total_subject == 25) {
    //  $total_sub_d=3000;
} else if ($total_subject == 30) {
    // $total_sub_d=3500;
} else {
}

if ($count_fe >= 1) {
    $count_fe_t = $count_fe * 3500;
    $count_fe_d = $count_fe_t * (9 / 100);
    $count_f1 = $count_fe_t - $count_fe_d;
    $service_tax_fe = $count_f1 * (14.5 / 100);
    $count_f_fe = $count_f1 + $service_tax_fe;
} else {
}

if ($count_f >= 1) {
    $count_f_t = $count_f * 3500;
    if ($count_f == '4') {
        $count_f_d = '1250';
    } else if ($count_f == '8') {
        $count_f_d = '5050';
    } else if ($count_f == '12') {
        $count_f_d = '9500';
    } else if ($count_f == '16') {
        $count_f_d = '16050';
    } else {
    }
    $count_f1 = $count_f_t - $count_f_d;
    $service_tax_f = $count_f1 * (14.5 / 100);
    $count_f_f = $count_f1 + $service_tax_f;
} else {
}

if ($count_f9 >= 1) {
    $count_f9_t = $count_f9 * 3750;
    $count_f9_d = $count_f9_t * (5 / 100);
    $count_f1 = $count_f9_t - $count_f9_d;
    $service_tax_f9 = $count_f1 * (14.5 / 100);
    $count_f9_f = $count_f1 + $service_tax_f9;
} else {
}

if ($count_p == 1) {
    $count_p_t = 3500;
    $service_tax_p = 3500 * (14.5 / 100);
    $count_p_f = $count_p_t + $service_tax_p;
    $count_p_d = 0;
} else if ($count_p == 2) {
    $count_p_t = 7000;
    $count_p_d = 0;
    $count_f1 = $count_p_t - $count_p_d;
    $service_tax_p = $count_f1 * (14.5 / 100);
    $count_p_f = $count_f1 + $service_tax_p;
} else if ($count_p == 3) {
    $count_p_t = 10500;
    $count_p_d = 0;
    $count_f1 = $count_p_t - $count_p_d;
    $service_tax_p = $count_f1 * (14.5 / 100);
    $count_p_f = $count_f1 + $service_tax_p;
} else if ($count_p >= 4) {
    $count_p_t = $count_p * 3500;
    $count_p_d = 1250;
    $count_f1 = $count_p_t - $count_p_d;
    $service_tax_p = $count_f1 * (14.5 / 100);
    $count_p_f = $count_f1 + $service_tax_p;
} else {
}

if ($count_c == 1) {
    $count_c_t = 3500;
    $service_tax_c = 3500 * (14.5 / 100);
    $count_c_f = $count_c_t + $service_tax_c;
    $count_c_d = 0;
} else if ($count_c == 2) {
    $count_c_t = 7000;
    $count_c_d = 0;
    $count_f1 = $count_c_t - $count_c_d;
    $service_tax_c = $count_f1 * (14.5 / 100);
    $count_c_f = $count_f1 + $service_tax_c;
} else if ($count_c == 3) {
    $count_c_t = 10500;
    $count_c_d = 0;
    $count_f1 = $count_c_t - $count_c_d;
    $service_tax_c = $count_f1 * (14.5 / 100);
    $count_c_f = $count_f1 + $service_tax_c;
} else if ($count_c >= 4) {
    $count_c_t = $count_c * 3500;
    $count_c_d = 1250;
    $count_f1 = $count_c_t - $count_c_d;
    $service_tax_c = $count_f1 * (14.5 / 100);
    $count_c_f = $count_f1 + $service_tax_c;
} else {
}


if ($count_m == 1) {
    $count_m_t = 3500;
    $service_tax_m = 3500 * (14.5 / 100);
    $count_m_f = $count_m_t + $service_tax_m;
    $count_m_d = 0;
} else if ($count_m == 2) {
    $count_m_t = 7000;
    $count_m_d = 0;
    $count_f1 = $count_m_t - $count_m_d;
    $service_tax_m = $count_f1 * (14.5 / 100);
    $count_m_f = $count_f1 + $service_tax_m;
} else if ($count_m == 3) {
    $count_m_t = 10500;
    $count_m_d = 0;
    $count_f1 = $count_m_t - $count_m_d;
    $service_tax_m = $count_f1 * (14.5 / 100);
    $count_m_f = $count_f1 + $service_tax_m;
} else if ($count_m >= 4) {
    $count_m_t = $count_m * 3500;
    $count_m_d = 1250;
    $count_f1 = $count_m_t - $count_m_d;
    $service_tax_m = $count_f1 * (14.5 / 100);
    $count_m_f = $count_f1 + $service_tax_m;
} else {
}

if ($count_b == 1) {
    $count_b_t = 3500;
    $service_tax_b = 3500 * (14.5 / 100);
    $count_b_f = $count_b_t + $service_tax_b;
    $count_b_d = 0;
} else if ($count_b == 2) {
    $count_b_t = 7000;
    $count_b_d = 0;
    $count_f1 = $count_b_t - $count_b_d;
    $service_tax_b = $count_f1 * (14.5 / 100);
    $count_b_f = $count_f1 + $service_tax_b;
} else if ($count_b == 3) {
    $count_b_t = 10500;
    $count_b_d = 0;
    $count_f1 = $count_b_t - $count_b_d;
    $service_tax_b = $count_f1 * (14.5 / 100);
    $count_b_f = $count_f1 + $service_tax_b;
} else if ($count_b >= 4) {
    $count_b_t = $count_b * 3500;
    $count_b_d = 1250;
    $count_f1 = $count_b_t - $count_b_d;
    $service_tax_b = $count_f1 * (14.5 / 100);
    $count_b_f = $count_f1 + $service_tax_b;
} else {
}

if ($count_e == 1) {
    $count_e_t = 3500;
    $service_tax_e = 3500 * (14.5 / 100);
    $count_e_f = $count_e_t + $service_tax_e;
    $count_e_d = 0;
} else if ($count_e == 2) {
    $count_e_t = 7000;
    $count_e_d = 0;
    $count_f1 = $count_e_t - $count_e_d;
    $service_tax_e = $count_f1 * (14.5 / 100);
    $count_e_f = $count_f1 + $service_tax_e;
} else if ($count_e == 3) {
    $count_e_t = 10500;
    $count_e_d = 0;
    $count_f1 = $count_e_t - $count_e_d;
    $service_tax_e = $count_f1 * (14.5 / 100);
    $count_e_f = $count_f1 + $service_tax_e;
} else if ($count_e >= 4) {
    $count_e_t = $count_e * 3500;
    $count_e_d = 1250;
    $count_f1 = $count_e_t - $count_e_d;
    $service_tax_e = $count_f1 * (14.5 / 100);
    $count_e_f = $count_f1 + $service_tax_e;
} else {
}

if ($count_ee == 1) {
    $count_ee_t = 3750;
    $service_tax_ee = 3750 * (14.5 / 100);
    $count_ee_f = $count_ee_t + $service_tax_ee;
    $count_ee_d = 0;
} else if ($count_ee == 2) {
    $count_ee_t = 7500;
    $count_ee_d = $count_ee_t * (5 / 100);
    $count_f1 = $count_ee_t - $count_ee_d;
    $service_tax_ee = $count_f1 * (14.5 / 100);
    $count_ee_f = $count_f1 + $service_tax_ee;
} else if ($count_ee == 3) {
    $count_ee_t = 11250;
    $count_ee_d = $count_ee_t * (10 / 100);
    $count_f1 = $count_ee_t - $count_ee_d;
    $service_tax_ee = $count_f1 * (14.5 / 100);
    $count_ee_f = $count_f1 + $service_tax_ee;
} else if ($count_ee >= 4) {
    $count_ee_t = $count_ee * 3750;
    $count_ee_d = $count_ee_t * (15 / 100);
    $count_f1 = $count_ee_t - $count_ee_d;
    $service_tax_ee = $count_f1 * (14.5 / 100);
    $count_ee_f = $count_f1 + $service_tax_ee;
} else {
}

if ($count_mm == 1) {
    $count_mm_t = 3750;
    $service_tax_mm = 3750 * (14.5 / 100);
    $count_mm_f = $count_mm_t + $service_tax_mm;
    $count_mm_d = 0;
} else if ($count_mm == 2) {
    $count_mm_t = 7500;
    $count_mm_d = $count_mm_t * (5 / 100);
    $count_f1 = $count_mm_t - $count_mm_d;
    $service_tax_mm = $count_f1 * (14.5 / 100);
    $count_mm_f = $count_f1 + $service_tax_mm;
} else if ($count_mm == 3) {
    $count_mm_t = 11250;
    $count_mm_d = $count_mm_t * (10 / 100);
    $count_f1 = $count_mm_t - $count_mm_d;
    $service_tax_mm = $count_f1 * (14.5 / 100);
    $count_mm_f = $count_f1 + $service_tax_mm;
} else if ($count_mm >= 4) {
    $count_mm_t = $count_mm * 3750;
    $count_mm_d = $count_mm_t * (15 / 100);
    $count_f1 = $count_mm_t - $count_mm_d;
    $service_tax_mm = $count_f1 * (14.5 / 100);
    $count_mm_f = $count_f1 + $service_tax_mm;
} else {
}

if ($count_ss == 1) {
    $count_ss_t = 3750;
    $service_tax_ss = 3750 * (14.5 / 100);
    $count_ss_f = $count_ss_t + $service_tax_ss;
    $count_ss_d = 0;
} else if ($count_ss == 2) {
    $count_ss_t = 7500;
    $count_ss_d = $count_ss_t * (5 / 100);
    $count_f1 = $count_mm_t - $count_ss_d;
    $service_tax_mm = $count_f1 * (14.5 / 100);
    $count_ss_f = $count_f1 + $service_tax_ss;
} else if ($count_ss == 3) {
    $count_ss_t = 11250;
    $count_ss_d = $count_ss_t * (10 / 100);
    $count_f1 = $count_ss_t - $count_ss_d;
    $service_tax_ss = $count_f1 * (14.5 / 100);
    $count_ss_f = $count_f1 + $service_tax_ss;
} else if ($count_ss >= 4) {
    $count_ss_t = $count_ss * 3750;
    $count_ss_d = $count_ss_t * (15 / 100);
    $count_f1 = $count_ss_t - $count_ss_d;
    $service_tax_ss = $count_f1 * (14.5 / 100);
    $count_ss_f = $count_f1 + $service_tax_ss;
} else {
}
$total = $count_e_t + $count_m_t + $count_b_t + $count_p_t + $count_c_t + $count_f_t + $count_f9_t + $count_mm_t + $count_ee_t + $count_ss_t + $count_fe_t;
//$service_tax=$service_tax_p+$service_tax_c+$service_tax_m+$service_tax_b+$service_tax_e+$service_tax_f+$service_tax_fe-$service_total_d;
//echo $service_tax;
$dis = $count_e_d + $count_m_d + $count_b_d + $count_p_d + $count_c_d + $count_f_d + $count_fe_d + $total_sub_d + $count_f9_d + $count_mm_d + $count_ee_d + $count_ss_d;
$net_total = $total - $dis;
$service_tax = $net_total * (14.5 / 100);
$fees = $net_total + $service_tax;
//$fees=$count_e_f+$count_m_f+$count_b_f+$count_p_f+$count_c_f+$count_f_f+$count_f_fe-$total_sub_d-$service_total_d;
$_SESSION['fees'] = round($fees);
$items = count(array_unique($_SESSION['module']));
// echo $items;
if ($total != 0) {
//echo '$'.$total.'$'.$dis.'$'.$fees.'$'.$items;
} else {
    $total = 0;
    $dis = 0;
    $fees = 0;
}
?>
</table><br/><br/>
<div style="overflow-x:auto;overflow-y:auto">
    <table id="hor-minimalist-b" align="right" rules="cols" style="color:#888888;font-size:12px" class="table table-sm">
        <thead>
        <tr>
            <th scope="col">&nbsp;</th>
            <th scope="col">Amount</th>
        </tr>
        </thead>
        <tr>
            <td>Total Amount:-</td>
            <td><label id="amount"> <?php echo $total; ?></label></td>
        </tr>
        <tr>
            <td>Discount:-</td>
            <td><label id="discount"> <?php echo $dis; ?></label></td>
        </tr>
        <tr>
            <td>Service Tax</td>
            <td><?php echo round($service_tax); ?> </td>
        </tr>
        <tr>
            <td>Net Amount:-</td>
            <td><label id="net"> <?php echo round($fees); ?></label></td>
        </tr>
    </table>
</div>
<br/><br/> <br/><br/><br/><br/> <br/><br/>
<table align="right" width="100%">
    <tr align="right">
        <td align="right" colspan="2">
            <label style="color:#003333; font-size:16px;"><span style="color: red">* </span>Fees exclusive of Courier
                charges
                for the international students</label>
        </td>
    </tr>
    <tr align="right">
        <td align="right" width="95%">
            <input type="button" id="paynow" value="Select More Batch" onclick="exit_popup();"
                   style="background-color: #FDCC09;border: 1px solid #FDCC09;font-size: 16px;border-radius: 5px;width: auto;color: #fff;cursor: pointer"/>
        </td>
        <td align=" right" width="5%">
            <a href="registration_form.php" id="register" class="pop" style="text-decoration:none;"><input
                        type="button" id="paynow" value="Pay Now"
                        style="background-color: #231F20;border: 1px solid #231F20;font-size: 16px;border-radius: 5px;width: auto;color: #fff;cursor: pointer"/></a>
        </td>
    </tr>
</table>
<script language="javascript">
    function exit_popup() {
        window.parent.$.fancybox.close();
    }
</script>