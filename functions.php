<?php
function getLang($langId){
	global $connection;
	if(isset($_SESSION['language']) && $_SESSION['language']=="ar"){
		$q=mysqli_query($connection,"SELECT ar_value
									 FROM lang
									 WHERE lang_id = '$langId'
									 AND is_active= 1 ");
	}else{
		$q=mysqli_query($connection,"SELECT en_value
									 FROM lang
									 WHERE lang_id = '$langId'
									 AND is_active= 1 ");
	}

	if(mysqli_num_rows($q)>0){
		$langData = mysqli_fetch_row($q);		 
		echo $langData[0];
	}else{
		echo" ";
	}

	

}


function getBanner($BannerId,$field){
	global $connection;

	if(isset($_SESSION['language']) && $_SESSION['language']=="ar"){
		$q=mysqli_query($connection,"SELECT ar_heading,
										ar_description,
										ar_button_lable,
										ar_cta_link,
										photo
									 FROM banner
									 WHERE banner_id = '$BannerId'
									 AND is_active= 1 ");
	}else{
		$q=mysqli_query($connection,"SELECT ar_heading,
										ar_description,
										ar_button_lable,
										ar_cta_link,
										photo
									 FROM banner
									 WHERE banner_id = '$BannerId'
									 AND is_active= 1 ");
	}
	if(mysqli_num_rows($q)>0){
		$banner_field = mysqli_fetch_row($q);	
		}else{
		echo 'Banner Not Found';
		}
	switch ($field) {
		case 'ar_heading':
			echo $banner_field[0] ;
			break;
				case 'ar_description':
					echo $banner_field[1];
					break;
			            case 'ar_button_lable':
			            	echo $banner_field[2];
			            	break;
				case 'ar_cta_link':
					echo $banner_field[3];
					break;
    	case 'photo':
    		echo $banner_field[4];
    		break;

		

	}

}


function getFeature($featureId,$field){
	GLOBAL $connection;
	$q=mysqli_query($connection,"SELECT 
								feature_title,
								feature_description,
								feature_icon
								FROM features 
								WHERE feature_id = '$featureId'
						");

if(mysqli_num_rows($q)>0){
	$feature_field = mysqli_fetch_row($q);	
	}else{
	echo 'Feature Not Found';
	}

	switch ($field) {
		case 'feature_title':
			echo $feature_field[0];
			break;
				case 'feature_description':
					echo $feature_field[1];
					break;
		case 'feature_icon':
			echo $feature_field[2];
			break;	
	}
}


function getArMonthName($post_month){


    switch ($post_month) {
        case '1':
            $ar_month_name = 'يناير';
            break;
            case '2':
                $ar_month_name = 'فبرابر';
                break;
                case '3':
                    $ar_month_name = 'مارس';
                    break;
                    case '4':
                        $ar_month_name = 'ابريل';
                        break;
                        case '5':
                            $ar_month_name = 'مايو';
                            break;				
                            case '6':
                            $ar_month_name = 'يونيو';
                            break;
                        case '7':
                        $ar_month_name = 'يوليو';
                        break;
                    case '8':
                    $ar_month_name = 'اغسطس';
                    break;
                case '9':
                $ar_month_name = 'سبتمبر';
                break;
            case '10':
            $ar_month_name = 'اكتوبر';
            break;
        case '11':
        $ar_month_name = 'نوفمر';
        break;
    case '12':
    $ar_month_name = 'ديسمبر';
    break;
    }
    return $ar_month_name;

}

?>

