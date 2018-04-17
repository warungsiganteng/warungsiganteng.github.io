<?php
error_reporting(0);
require 'XlRequest.php';

function service($str) {
	
	switch ((int) $str) {
		
		case 1: return 8110577; // XTRA KUOTA 30 GB
		break;
		
		case 2: return 8211231; // XL IZI GO 10 GB
		break;
		
		case 3: return 8210882; // XL COMBO XTRA 3 GB 19K
		break;

		case 4: return 8210883; // XL COMBO XTRA 5 GB 29K
		break;

		case 5: return 8210441; // XL COMBO XTRA 12 GB 29K
		break;

		case 6: return 8210885; // XL COMBO XTRA 17 GB 79.9K
		break;

		case 7: return 8210886; // XL COMBO XTRA 25 GB 99.9K
		break;
		
		default:
		
	}
}

if (isset($_POST['msisdn']) && isset($_POST['passwd']) && isset($_POST['reg']))
{
	$msisdn = $_POST['msisdn'];
	$passwd = $_POST['passwd'];
	$idService = service($_POST['reg']);
	
	if( !empty($_POST['manual']) )
	{
		$idService = $_POST['manual'];
	}
	try
	{
		$request = new XlRequest();
		$login = $request->login($msisdn,$passwd);
		
		if ($login !== false) {
			$fil = fopen('count_file.txt', r);
		    $dat = fread($fil, filesize('count_file.txt')); 
		    $dat+1;
		    fclose($fil);
		    $fil = fopen('count_file.txt', w);
		    fwrite($fil, $dat+1);
		    fclose($fil);
		    $register = $request->register($idService);
		    if (!isset($register->responseCode)) {
				
				echo $register->purchase_confimation->package_purchased_confirmation_thankyou_text;
		    }
			else
			{
				echo $register->message;
			}
		}
		else {
			
			echo "Login failed try againt";
			return;
		}
			
	}
	catch(Exception $e) {}
		
} else {
	   echo "Access Denied";
}
?>