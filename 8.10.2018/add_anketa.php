<?php
/*
=====================================================
 DataLife Engine - by SoftNews Media Group 
-----------------------------------------------------
 http://dle-news.ru/
-----------------------------------------------------
 Copyright (c) 2004,2012 SoftNews Media Group
=====================================================
 ������ ��� ������� ���������� �������
=====================================================
 ����: add_anketa.php
-----------------------------------------------------
 ����������: ������
=====================================================
*/

if( ! defined( 'DATALIFEENGINE' ) ) {
	die( "Hacking attempt!" );
}

$tpl->load_template('add_anketa.tpl');

if($_POST['send']) {

	$message = '';

	foreach ($_POST as $key => $value) {
		if($key != 'send') {
			if($key == 'photo') $message .= '����: ' . $value . '<br>';
			if($key == 'lastname') $message .= '�������: ' . ($value) . '<br>';
			if($key == 'firstname') $message .= '��`�: ' . ($value) . '<br>';
			if($key == 'middlename') $message .= '��-�������: ' . ($value) . '<br>';
			if($key == 'date_dd') $date_dd = $value;
			if($key == 'date_dm') $date_dm = $value;
			if($key == 'date_dy') {
				$message .= '���� ����������: ' . $date_dd . '.' . $date_dm . '.' . $value . '<br>';
			}
			if($key == 'educ') {
				if($value == 'pso') $value_educ = "��������� ����� (1-4 ��.)";
				if($value == 'hsnd') $value_educ = "������� ������� �����";
				if($value == 'hsd') $value_educ = "������� ����� (11 ��.)";
				if($value == 'vs') $value_educ = "��������������, �������, ����";
				if($value == 'suc') $value_educ = "ϳ�������� ����� ���� 11 ��.";
				if($value == 'ud') $value_educ = "���� �����";
				if($value == 'sglc') $value_educ = "ϳ����������� �����";
				if($value == 'md') $value_educ = "������";
				if($value == 'sdlc') $value_educ = "�������� ����";
				if($value == 'dd') $value_educ = "������ ����";
				$message .= '�����: ' . $value_educ . '<br>';
			}
			if($key == 'bcity') $message .= '��������� �����: ' . ($value) . '<br>';
			if($key == 'bdistr') $message .= '�������: ' . ($value) . '<br>';
			if($key == 'breg') $message .= '�����: ' . ($value) . '<br>';
			if($key == 'bcountry') $message .= '�����: ' . ($value) . '<br>';
			if($key == 'address') $message .= '�����: ' . ($value) . '<br>';
			if($key == 'city') $message .= '��������� �����: ' . ($value) . '<br>';
			if($key == 'district') $message .= '�������: ' . ($value) . '<br>';
			if($key == 'region') $message .= '�����: ' . ($value) . '<br>';
			if($key == 'zip') $message .= '�������� ������: ' . ($value) . '<br>';
			if($key == 'mailingcountry') $message .= '�����: ' . ($value) . '<br>';
			if($key == 'email') $message .= '���������� ������: ' . ($value) . '<br>';
			if($key == 'phone') $message .= '�������: ' . ($value) . '<br>';
			if($key == 'phone2') $message .= '����� �������: ' . ($value) . '<br>';
			if($key == 'beligible') {
				if($value == 'Yes') $value_beligible = "���";
				if($value == 'No') $value_beligible = "ͳ";
				$message .= '�� �� ���������� � �� ���� � ��� �� ����� ������ ���������: ' . $value_beligible . '<br>';
			}
			if($key == 'gender') {
				if($value == 'Male') $value_gender = "�������";
				if($value == 'Female') $value_gender = "Ƴ����";
				$message .= '�����: ' . $value_gender . '<br>';
			}
			if($key == 'married') {
				if($value == 'U') $value_married = "���������� / �����������";
				if($value == 'M') $value_married = "�������� / ���������";
				if($value == 'W') $value_married = "����� / ������";
				if($value == 'S') $value_married = "��������� / ����������";
				$message .= '������: ' . $value_married . '<br>';
				$married = $value_married;
			}
			if($married == '�������� / ���������') {
				//-----------------------------
				if($key == 'ap_photo') $message .= '����: ' . $value . '<br>';
				if($key == 'ap_lastname') $message .= '<br>�������: ' . ($value) . '<br>';
				if($key == 'ap_firstname') $message .= '��`�: ' . ($value) . '<br>';
				if($key == 'ap_middlename') $message .= '��-�������: ' . ($value) . '<br>';
				if($key == 'ap_date_dd') $date_dd = $value;
				if($key == 'ap_date_dm') $date_dm = $value;
				if($key == 'ap_date_dy') {
					$message .= '���� ����������: ' . $date_dd . '.' . $date_dm . '.' . $value . '<br>';
				}
				if($key == 'ap_educ') {
					if($value == 'pso') $value_educ = "��������� ����� (1-4 ��.)";
					if($value == 'hsnd') $value_educ = "������� ������� �����";
					if($value == 'hsd') $value_educ = "������� ����� (11 ��.)";
					if($value == 'vs') $value_educ = "��������������, �������, ����";
					if($value == 'suc') $value_educ = "ϳ�������� ����� ���� 11 ��.";
					if($value == 'ud') $value_educ = "���� �����";
					if($value == 'sglc') $value_educ = "ϳ����������� �����";
					if($value == 'md') $value_educ = "������";
					if($value == 'sdlc') $value_educ = "�������� ����";
					if($value == 'dd') $value_educ = "������ ����";
					$message .= '�����: ' . $value_educ . '<br>';
				}
				if($key == 'ap_bcity') $message .= '��������� �����: ' . ($value) . '<br>';
				if($key == 'ap_bdistr') $message .= '�������: ' . ($value) . '<br>';
				if($key == 'ap_breg') $message .= '�����: ' . ($value) . '<br>';
				if($key == 'ap_bcountry') $message .= '�����: ' . ($value) . '<br>';
				if($key == 'ap_address') $message .= '�����: ' . ($value) . '<br>';
				if($key == 'ap_city') $message .= '��������� �����: ' . ($value) . '<br>';
				if($key == 'ap_district') $message .= '�������: ' . ($value) . '<br>';
				if($key == 'ap_region') $message .= '�����: ' . ($value) . '<br>';
				if($key == 'ap_zip') $message .= '�������� ������: ' . ($value) . '<br>';
				if($key == 'ap_mailingcountry') $message .= '�����: ' . ($value) . '<br>';
				if($key == 'ap_email') $message .= '���������� ������: ' . ($value) . '<br>';
				if($key == 'ap_phone') $message .= '�������: ' . ($value) . '<br>';
				if($key == 'ap_phone2') $message .= '����� �������: ' . ($value) . '<br>';
				if($key == 'ap_beligible') {
					if($value == 'Yes') $value_beligible = "���";
					if($value == 'No') $value_beligible = "ͳ";
					$message .= '�� �� ���������� � �� ���� � ��� �� ����� ������ ���������: ' . $value_beligible . '<br>';
				}
				if($key == 'ap_gender') {
					if($value == 'Male') $value_gender = "�������";
					if($value == 'Female') $value_gender = "Ƴ����";
					$message .= '�����: ' . $value_gender . '<br>';
				}
			}
			if($key == 'child_num') {
				if($child_count > 0) $message .= '<br>';
				$message .= 'ʳ������ ����: ' . htmlspecialchars($value) . '<br>';
				if($child_count > 0) $message .= '<br><hr><hr><br><b>ĳ��:</b><br>';
				$child_count = $value;
			}
			for ($i=1; $i <= $child_count; $i++) {
				$child_numb = 'child' . $i . '_';
				if($key == $child_numb . 'ch_photo') $message .= '����: ' . $value . '<br>';
				if($key == $child_numb . 'lastname') $message .= '<br>�������: ' . ($value) . '<br>';
				if($key == $child_numb . 'firstname') $message .= '��`�: ' . ($value) . '<br>';
				if($key == $child_numb . 'middlename') $message .= '��-�������: ' . ($value) . '<br>';
				if($key == $child_numb . 'date_dd') $date_dd = $value;
				if($key == $child_numb . 'date_dm') $date_dm = $value;
				if($key == $child_numb . 'date_dy') {
					$message .= '���� ����������: ' . $date_dd . '.' . $date_dm . '.' . $value . '<br>';
				}
				if($key == $child_numb . 'gender') {
					if($value == 'Male') $value_gender = "�������";
					if($value == 'Female') $value_gender = "Ƴ����";
					$message .= '�����: ' . $value_gender . '<br>';
				}
				if($key == $child_numb . 'beligible') {
					if($value == 'Yes') $value_beligible = "���";
					if($value == 'No') $value_beligible = "ͳ";
					$message .= '�� �� ���������� � �� ���� � ��� �� ����� ������ ���������: ' . $value_beligible . '<br>';
				}
				if($key == $child_numb . 'educ') {
					if($value == 'pso') $value_educ = "��������� ����� (1-4 ��.)";
					if($value == 'hsnd') $value_educ = "������� ������� �����";
					if($value == 'hsd') $value_educ = "������� ����� (11 ��.)";
					if($value == 'vs') $value_educ = "��������������, �������, ����";
					if($value == 'suc') $value_educ = "ϳ�������� ����� ���� 11 ��.";
					if($value == 'ud') $value_educ = "���� �����";
					if($value == 'sglc') $value_educ = "ϳ����������� �����";
					if($value == 'md') $value_educ = "������";
					if($value == 'sdlc') $value_educ = "�������� ����";
					if($value == 'dd') $value_educ = "������ ����";
					$message .= '�����: ' . $value_educ . '<br>';
				}
				if($key == $child_numb . 'bcity') $message .= '��������� �����: ' . ($value) . '<br>';
				if($key == $child_numb . 'bdistr') $message .= '�������: ' . ($value) . '<br>';
				if($key == $child_numb . 'breg') $message .= '�����: ' . ($value) . '<br>';
				if($key == $child_numb . 'bcountry') $message .= '�����: ' . ($value) . '<br>';
				if($key == $child_numb . 'address') $message .= '�����: ' . ($value) . '<br>';
				if($key == $child_numb . 'city') $message .= '��������� �����: ' . ($value) . '<br>';
				if($key == $child_numb . 'district') $message .= '�������: ' . ($value) . '<br>';
				if($key == $child_numb . 'region') $message .= '�����: ' . ($value) . '<br>';
				if($key == $child_numb . 'zip') $message .= '�������� ������: ' . ($value) . '<br>';
				if($key == $child_numb . 'mailingcountry') $message .= '�����: ' . ($value) . '<br>';
			}
		}
	}

    $from_email = 'mail@perekhid.te.ua';
    $recipient_email = 'm.perekhid@gmail.com,legranchio@gmail.com';
    $subject = '������';

    $file_tmp_name    = $_FILES['photo']['tmp_name'];
    $file_name        = $_FILES['photo']['name'];
    $file_size        = $_FILES['photo']['size'];
    $file_type        = $_FILES['photo']['type'];
    $file_error       = $_FILES['photo']['error'];
	
	$ap_file_tmp_name    = $_FILES['ap_photo']['tmp_name'];
    $ap_file_name        = $_FILES['ap_photo']['name'];
    $ap_file_size        = $_FILES['ap_photo']['size'];
    $ap_file_type        = $_FILES['ap_photo']['type'];
    $ap_file_error       = $_FILES['ap_photo']['error'];
	
	$child1_file_tmp_name    = $_FILES['child1_photo']['tmp_name'];
    $child1_file_name        = $_FILES['child1_photo']['name'];
    $child1_file_size        = $_FILES['child1_photo']['size'];
    $child1_file_type        = $_FILES['child1_photo']['type'];
    $child1_file_error       = $_FILES['child1_photo']['error'];
	
	$child2_file_tmp_name    = $_FILES['child2_photo']['tmp_name'];
    $child2_file_name        = $_FILES['child2_photo']['name'];
    $child2_file_size        = $_FILES['child2_photo']['size'];
    $child2_file_type        = $_FILES['child2_photo']['type'];
    $child2_file_error       = $_FILES['child2_photo']['error'];
	
	$child3_file_tmp_name    = $_FILES['child3_photo']['tmp_name'];
    $child3_file_name        = $_FILES['child3_photo']['name'];
    $child3_file_size        = $_FILES['child3_photo']['size'];
    $child3_file_type        = $_FILES['child3_photo']['type'];
    $child3_file_error       = $_FILES['child3_photo']['error'];

    if($file_error > 0) die('upload error');

    $handle = fopen($file_tmp_name, "r");
    $content = fread($handle, $file_size);
    fclose($handle);
    $encoded_content = chunk_split(base64_encode($content));
	
	$ap_handle = fopen($ap_file_tmp_name, "r");
    $ap_content = fread($ap_handle, $ap_file_size);
    fclose($ap_handle);
    $ap_encoded_content = chunk_split(base64_encode($ap_content));
	
	$child1_handle = fopen($child1_file_tmp_name, "r");
    $child1_content = fread($child1_handle, $child1_file_size);
    fclose($child1_handle);
    $child1_encoded_content = chunk_split(base64_encode($child1_content));
	
	$child2_handle = fopen($child2_file_tmp_name, "r");
    $child2_content = fread($child2_handle, $child2_file_size);
    fclose($child1_handle);
    $child2_encoded_content = chunk_split(base64_encode($child2_content));
	
	$child3_handle = fopen($child3_file_tmp_name, "r");
    $child3_content = fread($child3_handle, $child3_file_size);
    fclose($child3_handle);
    $child3_encoded_content = chunk_split(base64_encode($child3_content));

    $boundary = md5("sanwebe");
    //header
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "From:".$from_email."\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n";
	
        
    //html text 
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/html; charset=windows-1251\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
	
    $body .= chunk_split(base64_encode($message));
	 //$body .=chunk_split(base64_encode(iconv( "windows-1251","utf8",  $message)));
        
    //attachment
    $body .= "--$boundary\r\n";
    $body .="Content-Type: $file_type; name=\"$file_name\"\r\n";
    $body .="Content-Disposition: attachment; filename=\"$file_name\"\r\n";
    $body .="Content-Transfer-Encoding: base64\r\n";
    $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
    $body .= $encoded_content;
	
	//attachment ap_photo
    $body .= "--$boundary\r\n";
    $body .="Content-Type: $ap_file_type; name=\"$ap_file_name\"\r\n";
    $body .="Content-Disposition: attachment; filename=\"$ap_file_name\"\r\n";
    $body .="Content-Transfer-Encoding: base64\r\n";
    $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
    $body .= $ap_encoded_content;
	
	//attachment child1_photo
    $body .= "--$boundary\r\n";
    $body .="Content-Type: $child1_file_type; name=\"$child1_file_name\"\r\n";
    $body .="Content-Disposition: attachment; filename=\"$child1_file_name\"\r\n";
    $body .="Content-Transfer-Encoding: base64\r\n";
    $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
    $body .= $child1_encoded_content;
	
	//attachment child2_photo
    $body .= "--$boundary\r\n";
    $body .="Content-Type: $child2_file_type; name=\"$child2_file_name\"\r\n";
    $body .="Content-Disposition: attachment; filename=\"$child2_file_name\"\r\n";
    $body .="Content-Transfer-Encoding: base64\r\n";
    $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
    $body .= $child2_encoded_content;
	
	//attachment child3_photo
    $body .= "--$boundary\r\n";
    $body .="Content-Type: $child3_file_type; name=\"$child3_file_name\"\r\n";
    $body .="Content-Disposition: attachment; filename=\"$child3_file_name\"\r\n";
    $body .="Content-Transfer-Encoding: base64\r\n";
    $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
    $body .= $child3_encoded_content;

    if(mail($recipient_email, $subject, $body, $headers)) {
		$tpl->set( '{form_title}', '<center><h1>������ ����������</h1></center>' );
		$tpl->set( '{form_ba}', '' );
    }

} else {

	if(!$_POST['step2']) {
		$form_cont = "�, ������� ������ ������� ����� ��������, �� �������� ���� ������ ����� ���������� ����� �� ����������� (� ����: ���, �����������, �������, ����������, ���������, ���������, ������������, ��������) ��� ������������ ����� �� �������� (��� - ����������-�����������) �������� ��� ��������� �����������, ���������� ��� ����� � ������ ������� ����� � �����, ������������� ������� ������ ���� ������ ������������ ������.
<br><br>
		��� ����� ���� ����� �� �������� ��� ������������ ����� ����� ������, �� ����������� ������������-������������� ��� ��������� ������������� ������� ����� ��� ���������� �����, � ����� �� ����� �������������� ���������� ������, �������� � ����� ���� �����������, �������� �� �������� ������ ������ ���� ������ ������������ ������ �� 01.06.2010 �. � 2297-VI.
		<br><br>
		������� ���� �����, � ����������, �� ���� �� ���� ������������� �� ������� �� ����������� ��� ������������ �����, �������� ��� ��������� ������, �� �������� ���������, � ����� �����'������ ������������� �� ���������� ������������� ������ � ���� ������� ������������ �����.";
		$form_cont .= '<form action="" method="post">';
		$form_cont .= '<br><input type="submit" name="step2" value="���" />';
		$form_cont .= '</form>';
		$tpl->set( '{form_title}', '<h1>������ ��� ����� � ������� Green Card</h1><hr>' );
		$tpl->set( '{form_ba}', $form_cont );

	} else {

		$form_cont = "���� � ��� ���� ���� ��� ��������� ������� ����� ������� ���� 600 � 600 ������ � �������䳿 �� �������� ���� �� ������� ���� ��� ���� ����, ��� � ��� � �������� ����������, ������ ��������: ��������������� �� ��� ��� ��� ����� ��������� ������� (���� ���� ����, �������, ���� �1); ������� �� ���� �� ����� �� ���� �� ����� �� 50 �� ��� ���������� ����� �� ��� ������� �����������. ���� �������� ������ � ��� �� ���� �� ���������� ������� ����, � ���� ���������� ��������� �� ��� ���� ��������� ������� ������.<br>";
		$form_cont .= "<br>P���� ���� (600 ������ �� 600 ������) �� �� ���������.<br>";
		$form_cont .= '<img src="/rule_face1.jpg" width="300" alt="" />';
		$form_cont .= "<br><br>������� 1:<hr>";
		$form_cont .= '<form action="" style="text-align: center;" method="post" enctype="multipart/form-data">';
		$form_cont .= '<label for="photo">��������� ����:</label><input type="file" name="photo" /><br><br>';
		$form_cont .= '<label for="lastname">�������:</label><input type="text" name="lastname" /><br><br>';
		$form_cont .= '<label for="firstname">��`�:</label><input type="text" name="firstname" /><br><br>';
		$form_cont .= '<label for="middlename">��-�������:</label><input type="text" name="middlename" /><br><br>';
		$form_cont .= '<label for="date_dd">���� ����������:</label><select name="date_dd">
			<option label="01" value="01">01</option>
			<option label="02" value="02">02</option>
			<option label="03" value="03">03</option>
			<option label="04" value="04">04</option>
			<option label="05" value="05">05</option>
			<option label="06" value="06">06</option>
			<option label="07" value="07">07</option>
			<option label="08" value="08">08</option>
			<option label="09" value="09">09</option>
			<option label="10" value="10">10</option>
			<option label="11" value="11">11</option>
			<option label="12" value="12">12</option>
			<option label="13" value="13">13</option>
			<option label="14" value="14">14</option>
			<option label="15" value="15">15</option>
			<option label="16" value="16">16</option>
			<option label="17" value="17">17</option>
			<option label="18" value="18">18</option>
			<option label="19" value="19">19</option>
			<option label="20" value="20">20</option>
			<option label="21" value="21">21</option>
			<option label="22" value="22" selected="selected">22</option>
			<option label="23" value="23">23</option>
			<option label="24" value="24">24</option>
			<option label="25" value="25">25</option>
			<option label="26" value="26">26</option>
			<option label="27" value="27">27</option>
			<option label="28" value="28">28</option>
			<option label="29" value="29">29</option>
			<option label="30" value="30">30</option>
			<option label="31" value="31">31</option>
		</select>';
		$form_cont .= '<select name="date_dm">
			<option label="01" value="01">01</option>
			<option label="02" value="02">02</option>
			<option label="03" value="03">03</option>
			<option label="04" value="04">04</option>
			<option label="05" value="05">05</option>
			<option label="06" value="06">06</option>
			<option label="07" value="07">07</option>
			<option label="08" value="08">08</option>
			<option label="09" value="09">09</option>
			<option label="10" value="10" selected="selected">10</option>
			<option label="11" value="11">11</option>
			<option label="12" value="12">12</option>
		</select>';
		$form_cont .= '<select name="date_dy">
			<option label="2020" value="2020">2020</option>
			<option label="2019" value="2019">2019</option>
			<option label="2018" value="2018">2018</option>
			<option label="2017" value="2017">2017</option>
			<option label="2016" value="2016">2016</option>
			<option label="2015" value="2015">2015</option>
			<option label="2014" value="2014">2014</option>
			<option label="2013" value="2013">2013</option>
			<option label="2012" value="2012">2012</option>
			<option label="2011" value="2011">2011</option>
			<option label="2010" value="2010">2010</option>
			<option label="2009" value="2009">2009</option>
			<option label="2008" value="2008">2008</option>
			<option label="2007" value="2007">2007</option>
			<option label="2006" value="2006">2006</option>
			<option label="2005" value="2005">2005</option>
			<option label="2004" value="2004">2004</option>
			<option label="2003" value="2003">2003</option>
			<option label="2002" value="2002">2002</option>
			<option label="2001" value="2001">2001</option>
			<option label="2000" value="2000">2000</option>
			<option label="1999" value="1999">1999</option>
			<option label="1998" value="1998">1998</option>
			<option label="1997" value="1997">1997</option>
			<option label="1996" value="1996">1996</option>
			<option label="1995" value="1995">1995</option>
			<option label="1994" value="1994">1994</option>
			<option label="1993" value="1993">1993</option>
			<option label="1992" value="1992">1992</option>
			<option label="1991" value="1991">1991</option>
			<option label="1990" value="1990">1990</option>
			<option label="1989" value="1989">1989</option>
			<option label="1988" value="1988">1988</option>
			<option label="1987" value="1987">1987</option>
			<option label="1986" value="1986">1986</option>
			<option label="1985" value="1985">1985</option>
			<option label="1984" value="1984">1984</option>
			<option label="1983" value="1983">1983</option>
			<option label="1982" value="1982">1982</option>
			<option label="1981" value="1981">1981</option>
			<option label="1980" value="1980">1980</option>
			<option label="1979" value="1979">1979</option>
			<option label="1978" value="1978">1978</option>
			<option label="1977" value="1977">1977</option>
			<option label="1976" value="1976">1976</option>
			<option label="1975" value="1975">1975</option>
			<option label="1974" value="1974">1974</option>
			<option label="1973" value="1973">1973</option>
			<option label="1972" value="1972">1972</option>
			<option label="1971" value="1971">1971</option>
			<option label="1970" value="1970">1970</option>
			<option label="1969" value="1969">1969</option>
			<option label="1968" value="1968">1968</option>
			<option label="1967" value="1967">1967</option>
			<option label="1966" value="1966">1966</option>
			<option label="1965" value="1965">1965</option>
			<option label="1964" value="1964">1964</option>
			<option label="1963" value="1963">1963</option>
			<option label="1962" value="1962">1962</option>
			<option label="1961" value="1961">1961</option>
			<option label="1960" value="1960">1960</option>
			<option label="1959" value="1959">1959</option>
			<option label="1958" value="1958">1958</option>
			<option label="1957" value="1957">1957</option>
			<option label="1956" value="1956">1956</option>
			<option label="1955" value="1955">1955</option>
			<option label="1954" value="1954">1954</option>
			<option label="1953" value="1953">1953</option>
			<option label="1952" value="1952">1952</option>
			<option label="1951" value="1951">1951</option>
			<option label="1950" value="1950">1950</option>
			<option label="1949" value="1949">1949</option>
			<option label="1948" value="1948">1948</option>
			<option label="1947" value="1947">1947</option>
			<option label="1946" value="1946">1946</option>
			<option label="1945" value="1945">1945</option>
			<option label="1944" value="1944">1944</option>
			<option label="1943" value="1943">1943</option>
			<option label="1942" value="1942">1942</option>
			<option label="1941" value="1941">1941</option>
			<option label="1940" value="1940">1940</option>
			<option label="1939" value="1939">1939</option>
			<option label="1938" value="1938">1938</option>
			<option label="1937" value="1937">1937</option>
			<option label="1936" value="1936">1936</option>
			<option label="1935" value="1935">1935</option>
			<option label="1934" value="1934">1934</option>
			<option label="1933" value="1933">1933</option>
			<option label="1932" value="1932">1932</option>
			<option label="1931" value="1931">1931</option>
			<option label="1930" value="1930">1930</option>
			<option label="1929" value="1929">1929</option>
			<option label="1928" value="1928">1928</option>
			<option label="1927" value="1927">1927</option>
			<option label="1926" value="1926">1926</option>
			<option label="1925" value="1925">1925</option>
			<option label="1924" value="1924">1924</option>
			<option label="1923" value="1923">1923</option>
			<option label="1922" value="1922">1922</option>
			<option label="1921" value="1921">1921</option>
			<option label="1920" value="1920">1920</option>
			<option label="1919" value="1919">1919</option>
			<option label="1918" value="1918">1918</option>
			<option label="1917" value="1917">1917</option>
			<option label="1916" value="1916">1916</option>
			<option label="1915" value="1915">1915</option>
			<option label="1914" value="1914">1914</option>
			<option label="1913" value="1913">1913</option>
			<option label="1912" value="1912">1912</option>
			<option label="1911" value="1911">1911</option>
			<option label="1910" value="1910">1910</option>
			<option label="1909" value="1909">1909</option>
			<option label="1908" value="1908">1908</option>
			<option label="1907" value="1907">1907</option>
			<option label="1906" value="1906">1906</option>
			<option label="1905" value="1905">1905</option>
			<option label="1904" value="1904">1904</option>
			<option label="1903" value="1903">1903</option>
			<option label="1902" value="1902">1902</option>
			<option label="1901" value="1901">1901</option>
			<option label="1900" value="1900">1900</option>
		</select><br><br>';
		$form_cont .= '<label for="educ">�����:</label><select name="educ">
			<option value="pso">��������� ����� (1-4 ��.)</option>
			<option value="hsnd">������� ������� �����</option>
			<option value="hsd">������� ����� (11 ��.)</option>
			<option value="vs">��������������, �������, ����</option>
			<option value="suc">ϳ�������� ����� ���� 11 ��.</option>
			<option value="ud">���� �����</option>
			<option value="sglc">ϳ����������� �����</option>
			<option value="md">������</option>
			<option value="sdlc">�������� ����</option>
			<option value="dd">������ ����</option>
		</select><br>';
		$form_cont .= "<br><br><b>̳��� ����������:</b><hr><br><br>";
		$form_cont .= '<label for="bcity">��������� �����:</label><input type="text" name="bcity" /><br><br>';
		$form_cont .= '<label for="bdistr">�������:</label><input type="text" name="bdistr" /><br><br>';
		$form_cont .= '<label for="breg">�����:</label><input type="text" name="breg" /><br><br>';
		$form_cont .= '<label for="bcountry">�����:</label><input type="text" name="bcountry" /><br><br>';
		$form_cont .= "<br><br><b>̳��� ����������:</b><hr><br><br>";
		$form_cont .= '<label for="address">�����:</label><input type="text" name="address" /><br><br>';
		$form_cont .= '<label for="city">��������� �����:</label><input type="text" name="city" /><br><br>';
		$form_cont .= '<label for="district">�������:</label><input type="text" name="district" /><br><br>';
		$form_cont .= '<label for="region">�����:</label><input type="text" name="region" /><br><br>';
		$form_cont .= '<label for="zip">�������� ������:</label><input type="text" name="zip" /><br><br>';
		$form_cont .= '<label for="mailingcountry">�����:</label><input type="text" name="mailingcountry" /><br><br>';
		$form_cont .= "<br><br><b>�������� ���:</b><hr><br><br>";
		$form_cont .= '<label for="email">���������� ������:</label><input type="text" name="email" /><br><br>';
		$form_cont .= '<label for="phone">�������:</label><input type="text" name="phone" /><br><br>';
		$form_cont .= '<label for="phone2">����� �������:</label><input type="text" name="phone2" /><br><br>';
		$form_cont .= '<label for="beligible">�� �� ���������� � �� ���� � ���<br>�� ����� ������ ���������:</label><select name="beligible">
			<option value="Yes">���</option>
			<option value="No">ͳ</option>
		</select><br><br>';
		$form_cont .= '<label for="gender">�����:</label><select name="gender">
			<option value="Male">�������</option>
			<option value="Female">Ƴ����</option>
		</select><br><br>';
		$form_cont .= '<label for="married">������:</label><select name="married" id="married">
			<option value="U">���������� / �����������</option>
			<option value="M">�������� / ���������</option>
			<option value="W">����� / ������</option>
			<option value="S">��������� / ����������</option>
		</select><br><br>';
		$form_cont .= '<div id="aplikant2" style="display: none; text-align: left;"><br><br><b>������� 2:</b><hr><label for="ap_photo">��������� ����:</label><input type="file" name="ap_photo" /><br><br><label for="ap_lastname">�������:</label><input type="text" name="ap_lastname" /><br><br><label for="ap_firstname">��`�:</label><input type="text" name="ap_firstname" /><br><br><label for="ap_middlename">��-�������:</label><input type="text" name="ap_middlename" /><br><br><label for="ap_date_dd">���� ����������:</label><select name="ap_date_dd"><option label="01" value="01">01</option><option label="02" value="02">02</option><option label="03" value="03">03</option><option label="04" value="04">04</option><option label="05" value="05">05</option><option label="06" value="06">06</option><option label="07" value="07">07</option><option label="08" value="08">08</option><option label="09" value="09">09</option><option label="10" value="10">10</option><option label="11" value="11">11</option><option label="12" value="12">12</option><option label="13" value="13">13</option><option label="14" value="14">14</option><option label="15" value="15">15</option><option label="16" value="16">16</option><option label="17" value="17">17</option><option label="18" value="18">18</option><option label="19" value="19">19</option><option label="20" value="20">20</option><option label="21" value="21">21</option><option label="22" value="22" selected="selected">22</option><option label="23" value="23">23</option><option label="24" value="24">24</option><option label="25" value="25">25</option><option label="26" value="26">26</option><option label="27" value="27">27</option><option label="28" value="28">28</option><option label="29" value="29">29</option><option label="30" value="30">30</option><option label="31" value="31">31</option></select><select name="ap_date_dm"><option label="01" value="01">01</option><option label="02" value="02">02</option><option label="03" value="03">03</option><option label="04" value="04">04</option><option label="05" value="05">05</option><option label="06" value="06">06</option><option label="07" value="07">07</option><option label="08" value="08">08</option><option label="09" value="09">09</option><option label="10" value="10" selected="selected">10</option><option label="11" value="11">11</option><option label="12" value="12">12</option></select><select name="ap_date_dy"><option label="2000" value="2000">2000</option><option label="1999" value="1999">1999</option><option label="1998" value="1998">1998</option><option label="1997" value="1997">1997</option><option label="1996" value="1996">1996</option><option label="1995" value="1995">1995</option><option label="1994" value="1994">1994</option><option label="1993" value="1993">1993</option><option label="1992" value="1992">1992</option><option label="1991" value="1991">1991</option><option label="1990" value="1990">1990</option><option label="1989" value="1989">1989</option><option label="1988" value="1988">1988</option><option label="1987" value="1987">1987</option><option label="1986" value="1986">1986</option><option label="1985" value="1985">1985</option><option label="1984" value="1984">1984</option><option label="1983" value="1983">1983</option><option label="1982" value="1982">1982</option><option label="1981" value="1981">1981</option><option label="1980" value="1980">1980</option><option label="1979" value="1979">1979</option><option label="1978" value="1978">1978</option><option label="1977" value="1977">1977</option><option label="1976" value="1976">1976</option><option label="1975" value="1975">1975</option><option label="1974" value="1974">1974</option><option label="1973" value="1973">1973</option><option label="1972" value="1972">1972</option><option label="1971" value="1971">1971</option><option label="1970" value="1970">1970</option><option label="1969" value="1969">1969</option><option label="1968" value="1968">1968</option><option label="1967" value="1967">1967</option><option label="1966" value="1966">1966</option><option label="1965" value="1965">1965</option><option label="1964" value="1964">1964</option><option label="1963" value="1963">1963</option><option label="1962" value="1962">1962</option><option label="1961" value="1961">1961</option><option label="1960" value="1960">1960</option><option label="1959" value="1959">1959</option><option label="1958" value="1958">1958</option><option label="1957" value="1957">1957</option><option label="1956" value="1956">1956</option><option label="1955" value="1955">1955</option><option label="1954" value="1954">1954</option><option label="1953" value="1953">1953</option><option label="1952" value="1952">1952</option><option label="1951" value="1951">1951</option><option label="1950" value="1950">1950</option><option label="1949" value="1949">1949</option><option label="1948" value="1948">1948</option><option label="1947" value="1947">1947</option><option label="1946" value="1946">1946</option><option label="1945" value="1945">1945</option><option label="1944" value="1944">1944</option><option label="1943" value="1943">1943</option><option label="1942" value="1942">1942</option><option label="1941" value="1941">1941</option><option label="1940" value="1940">1940</option><option label="1939" value="1939">1939</option><option label="1938" value="1938">1938</option><option label="1937" value="1937">1937</option><option label="1936" value="1936">1936</option><option label="1935" value="1935">1935</option><option label="1934" value="1934">1934</option><option label="1933" value="1933">1933</option><option label="1932" value="1932">1932</option><option label="1931" value="1931">1931</option><option label="1930" value="1930">1930</option><option label="1929" value="1929">1929</option><option label="1928" value="1928">1928</option><option label="1927" value="1927">1927</option><option label="1926" value="1926">1926</option><option label="1925" value="1925">1925</option><option label="1924" value="1924">1924</option><option label="1923" value="1923">1923</option><option label="1922" value="1922">1922</option><option label="1921" value="1921">1921</option><option label="1920" value="1920">1920</option><option label="1919" value="1919">1919</option><option label="1918" value="1918">1918</option><option label="1917" value="1917">1917</option><option label="1916" value="1916">1916</option><option label="1915" value="1915">1915</option><option label="1914" value="1914">1914</option><option label="1913" value="1913">1913</option><option label="1912" value="1912">1912</option><option label="1911" value="1911">1911</option><option label="1910" value="1910">1910</option><option label="1909" value="1909">1909</option><option label="1908" value="1908">1908</option><option label="1907" value="1907">1907</option><option label="1906" value="1906">1906</option><option label="1905" value="1905">1905</option><option label="1904" value="1904">1904</option><option label="1903" value="1903">1903</option><option label="1902" value="1902">1902</option><option label="1901" value="1901">1901</option><option label="1900" value="1900">1900</option></select><br><br><label for="ap_educ">�����:</label><select name="ap_educ"><option value="pso">��������� ����� (1-4 ��.)</option><option value="hsnd">������� ������� �����</option><option value="hsd">������� ����� (11 ��.)</option><option value="vs">��������������, �������, ����</option><option value="suc">ϳ�������� ����� ���� 11 ��.</option><option value="ud">���� �����</option><option value="sglc">ϳ����������� �����</option><option value="md">������</option><option value="sdlc">�������� ����</option><option value="dd">������ ����</option></select><br><br><br><b>̳��� ����������:</b><hr><br><br><label for="ap_bcity">��������� �����:</label><input type="text" name="ap_bcity" /><br><br><label for="ap_bdistr">�������:</label><input type="text" name="ap_bdistr" /><br><br><label for="ap_breg">�����:</label><input type="text" name="ap_breg" /><br><br><label for="ap_bcountry">�����:</label><input type="text" name="ap_bcountry" /><br><br><br><br><b>̳��� ����������:</b><hr><br><br><label for="ap_address">�����:</label><input type="text" name="ap_address" /><br><br><label for="ap_city">��������� �����:</label><input type="text" name="ap_city" /><br><br><label for="ap_district">�������:</label><input type="text" name="ap_district" /><br><br><label for="ap_region">�����:</label><input type="text" name="ap_region" /><br><br><label for="ap_zip">�������� ������:</label><input type="text" name="ap_zip" /><br><br><label for="ap_mailingcountry">�����:</label><input type="text" name="ap_mailingcountry" /><br><br><br><br><b>�������� ���:</b><hr><br><br><label for="ap_email">���������� ������:</label><input type="text" name="ap_email" /><br><br><label for="ap_phone">�������:</label><input type="text" name="ap_phone" /><br><br><label for="ap_phone2">����� �������:</label><input type="text" name="ap_phone2" /><br><br><label for="ap_beligible">�� �� ���������� � �� ���� � ���<br>�� ����� ������ ���������:</label><select name="ap_beligible"><option value="Yes">���</option><option value="No">ͳ</option></select><br><br><label for="ap_gender">�����:</label><select name="ap_gender"><option value="Male">�������</option><option value="Female">Ƴ����</option></select><br><br><br></div>';
		$form_cont .= '<label for="child_num">ʳ������ ����:</label><select name="child_num" id="childCount">
			<option value="0" selected="">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>

		</select><br><br>';
		$form_cont .= '<div id="childs" style="display: none; text-align: right;"></div>';
		$form_cont .= '<br><input type="submit" name="send" value="³��������" />';
		$form_cont .= '</form>';
		$form_cont .= "<script>
$( '#childCount' ).change(function() {
	var childCount = document.getElementById('childCount').value;
	var divChild = document.getElementById('childs');
	divChild.innerHTML = '';
	if (childCount > 0) divChild.style.display='block'; else divChild.style.display='none';
	for (i=1; i <= childCount; i++) {
		var child = 'child' + i;
		divChild.innerHTML += '<br><hr><br>';
		divChild.innerHTML += '<h2>������ ' + i + '</h2><br><br><label for=\"' + child + '_photo\">��������� ����:</label><input type=\"file\" name=\"' + child + '_photo\" /><br><br><label for=\"' + child + '_lastname\">�������:</label><input type=\"text\" name=\"' + child + '_lastname\" /><br><br><label for=\"' + child + '_firstname\">��`�:</label><input type=\"text\" name=\"' + child + '_firstname\" /><br><br><label for=\"' + child + '_middlename\">��-�������:</label><input type=\"text\" name=\"' + child + '_middlename\" /><br><br><label for=\"' + child + '_date_dd\">���� ����������:</label><select name=\"' + child + '_date_dd\"><option label=\"01\" value=\"01\">01</option><option label=\"02\" value=\"02\">02</option><option label=\"03\" value=\"03\">03</option><option label=\"04\" value=\"04\">04</option><option label=\"05\" value=\"05\">05</option><option label=\"06\" value=\"06\">06</option><option label=\"07\" value=\"07\">07</option><option label=\"08\" value=\"08\">08</option><option label=\"09\" value=\"09\">09</option><option label=\"10\" value=\"10\">10</option><option label=\"11\" value=\"11\">11</option><option label=\"12\" value=\"12\">12</option><option label=\"13\" value=\"13\">13</option><option label=\"14\" value=\"14\">14</option><option label=\"15\" value=\"15\">15</option><option label=\"16\" value=\"16\">16</option><option label=\"17\" value=\"17\">17</option><option label=\"18\" value=\"18\">18</option><option label=\"19\" value=\"19\">19</option><option label=\"20\" value=\"20\">20</option><option label=\"21\" value=\"21\">21</option><option label=\"22\" value=\"22\" selected=\"selected\">22</option><option label=\"23\" value=\"23\">23</option><option label=\"24\" value=\"24\">24</option><option label=\"25\" value=\"25\">25</option><option label=\"26\" value=\"26\">26</option><option label=\"27\" value=\"27\">27</option><option label=\"28\" value=\"28\">28</option><option label=\"29\" value=\"29\">29</option><option label=\"30\" value=\"30\">30</option><option label=\"31\" value=\"31\">31</option></select><select name=\"' + child + '_date_dm\"><option label=\"01\" value=\"01\">01</option><option label=\"02\" value=\"02\">02</option><option label=\"03\" value=\"03\">03</option><option label=\"04\" value=\"04\">04</option><option label=\"05\" value=\"05\">05</option><option label=\"06\" value=\"06\">06</option><option label=\"07\" value=\"07\">07</option><option label=\"08\" value=\"08\">08</option><option label=\"09\" value=\"09\">09</option><option label=\"10\" value=\"10\" selected=\"selected\">10</option><option label=\"11\" value=\"11\">11</option><option label=\"12\" value=\"12\">12</option></select><select name=\"' + child + '_date_dy\"><option label=\"2000\" value=\"2000\">2000</option><option label=\"1999\" value=\"1999\">1999</option><option label=\"1998\" value=\"1998\">1998</option><option label=\"1997\" value=\"1997\">1997</option><option label=\"1996\" value=\"1996\">1996</option><option label=\"1995\" value=\"1995\">1995</option><option label=\"1994\" value=\"1994\">1994</option><option label=\"1993\" value=\"1993\">1993</option><option label=\"1992\" value=\"1992\">1992</option><option label=\"1991\" value=\"1991\">1991</option><option label=\"1990\" value=\"1990\">1990</option><option label=\"1989\" value=\"1989\">1989</option><option label=\"1988\" value=\"1988\">1988</option><option label=\"1987\" value=\"1987\">1987</option><option label=\"1986\" value=\"1986\">1986</option><option label=\"1985\" value=\"1985\">1985</option><option label=\"1984\" value=\"1984\">1984</option><option label=\"1983\" value=\"1983\">1983</option><option label=\"1982\" value=\"1982\">1982</option><option label=\"1981\" value=\"1981\">1981</option><option label=\"1980\" value=\"1980\">1980</option><option label=\"1979\" value=\"1979\">1979</option><option label=\"1978\" value=\"1978\">1978</option><option label=\"1977\" value=\"1977\">1977</option><option label=\"1976\" value=\"1976\">1976</option><option label=\"1975\" value=\"1975\">1975</option><option label=\"1974\" value=\"1974\">1974</option><option label=\"1973\" value=\"1973\">1973</option><option label=\"1972\" value=\"1972\">1972</option><option label=\"1971\" value=\"1971\">1971</option><option label=\"1970\" value=\"1970\">1970</option><option label=\"1969\" value=\"1969\">1969</option><option label=\"1968\" value=\"1968\">1968</option><option label=\"1967\" value=\"1967\">1967</option><option label=\"1966\" value=\"1966\">1966</option><option label=\"1965\" value=\"1965\">1965</option><option label=\"1964\" value=\"1964\">1964</option><option label=\"1963\" value=\"1963\">1963</option><option label=\"1962\" value=\"1962\">1962</option><option label=\"1961\" value=\"1961\">1961</option><option label=\"1960\" value=\"1960\">1960</option><option label=\"1959\" value=\"1959\">1959</option><option label=\"1958\" value=\"1958\">1958</option><option label=\"1957\" value=\"1957\">1957</option><option label=\"1956\" value=\"1956\">1956</option><option label=\"1955\" value=\"1955\">1955</option><option label=\"1954\" value=\"1954\">1954</option><option label=\"1953\" value=\"1953\">1953</option><option label=\"1952\" value=\"1952\">1952</option><option label=\"1951\" value=\"1951\">1951</option><option label=\"1950\" value=\"1950\">1950</option><option label=\"1949\" value=\"1949\">1949</option><option label=\"1948\" value=\"1948\">1948</option><option label=\"1947\" value=\"1947\">1947</option><option label=\"1946\" value=\"1946\">1946</option><option label=\"1945\" value=\"1945\">1945</option><option label=\"1944\" value=\"1944\">1944</option><option label=\"1943\" value=\"1943\">1943</option><option label=\"1942\" value=\"1942\">1942</option><option label=\"1941\" value=\"1941\">1941</option><option label=\"1940\" value=\"1940\">1940</option><option label=\"1939\" value=\"1939\">1939</option><option label=\"1938\" value=\"1938\">1938</option><option label=\"1937\" value=\"1937\">1937</option><option label=\"1936\" value=\"1936\">1936</option><option label=\"1935\" value=\"1935\">1935</option><option label=\"1934\" value=\"1934\">1934</option><option label=\"1933\" value=\"1933\">1933</option><option label=\"1932\" value=\"1932\">1932</option><option label=\"1931\" value=\"1931\">1931</option><option label=\"1930\" value=\"1930\">1930</option><option label=\"1929\" value=\"1929\">1929</option><option label=\"1928\" value=\"1928\">1928</option><option label=\"1927\" value=\"1927\">1927</option><option label=\"1926\" value=\"1926\">1926</option><option label=\"1925\" value=\"1925\">1925</option><option label=\"1924\" value=\"1924\">1924</option><option label=\"1923\" value=\"1923\">1923</option><option label=\"1922\" value=\"1922\">1922</option><option label=\"1921\" value=\"1921\">1921</option><option label=\"1920\" value=\"1920\">1920</option><option label=\"1919\" value=\"1919\">1919</option><option label=\"1918\" value=\"1918\">1918</option><option label=\"1917\" value=\"1917\">1917</option><option label=\"1916\" value=\"1916\">1916</option><option label=\"1915\" value=\"1915\">1915</option><option label=\"1914\" value=\"1914\">1914</option><option label=\"1913\" value=\"1913\">1913</option><option label=\"1912\" value=\"1912\">1912</option><option label=\"1911\" value=\"1911\">1911</option><option label=\"1910\" value=\"1910\">1910</option><option label=\"1909\" value=\"1909\">1909</option><option label=\"1908\" value=\"1908\">1908</option><option label=\"1907\" value=\"1907\">1907</option><option label=\"1906\" value=\"1906\">1906</option><option label=\"1905\" value=\"1905\">1905</option><option label=\"1904\" value=\"1904\">1904</option><option label=\"1903\" value=\"1903\">1903</option><option label=\"1902\" value=\"1902\">1902</option><option label=\"1901\" value=\"1901\">1901</option><option label=\"1900\" value=\"1900\">1900</option></select><br><br><label for=\"' + child + '_gender\">�����:</label><select name=\"' + child + '_gender\"><option value=\"Male\">�������</option><option value=\"Female\">Ƴ����</option></select><br><br><label for=\"' + child + '_beligible\">�� �� ���������� � �� ���� � ���<br>�� ����� ������ ���������:</label><select name=\"' + child + '_beligible\"><option value=\"Yes\">���</option><option value=\"No\">ͳ</option></select><br><br><label for=\"' + child + '_educ\">�����:</label><select name=\"' + child + '_educ\"><option value=\"pso\">��������� ����� (1-4 ��.)</option><option value=\"hsnd\">������� ������� �����</option><option value=\"hsd\">������� ����� (11 ��.)</option><option value=\"vs\">��������������, �������, ����</option><option value=\"suc\">ϳ�������� ����� ���� 11 ��.</option><option value=\"ud\">���� �����</option><option value=\"sglc\">ϳ����������� �����</option><option value=\"md\">������</option><option value=\"sdlc\">�������� ����</option><option value=\"dd\">������ ����</option></select><br><br><br><b>̳��� ����������:</b><hr><br><br><label for=\"' + child + '_bcity\">��������� �����:</label><input type=\"text\" name=\"' + child + '_bcity\" /><br><br><label for=\"' + child + '_bdistr\">�������:</label><input type=\"text\" name=\"' + child + '_bdistr\" /><br><br><label for=\"' + child + '_breg\">�����:</label><input type=\"text\" name=\"' + child + '_breg\" /><br><br><label for=\"' + child + '_bcountry\">�����:</label><input type=\"text\" name=\"' + child + '_bcountry\" /><br><br><br><br><b>̳��� ����������:</b><hr><br><br><label for=\"' + child + '_address\">�����:</label><input type=\"text\" name=\"' + child + '_address\" /><br><br><label for=\"' + child + '_city\">��������� �����:</label><input type=\"text\" name=\"' + child + '_city\" /><br><br><label for=\"' + child + '_district\">�������:</label><input type=\"text\" name=\"' + child + '_district\" /><br><br><label for=\"' + child + '_region\">�����:</label><input type=\"text\" name=\"' + child + '_region\" /><br><br><label for=\"' + child + '_zip\">�������� ������:</label><input type=\"text\" name=\"' + child + '_zip\" /><br><br><label for=\"' + child + '_mailingcountry\">�����:</label><input type=\"text\" name=\"' + child + '_mailingcountry\" /><br><br>';
	}
	divChild.innerHTML += '<hr><br>';
});
$( '#married' ).change(function() {
	var married = document.getElementById('married').value;
	if(married == 'M') document.getElementById('aplikant2').style.display='block'; else document.getElementById('aplikant2').style.display='none';
});
		</script>";
		$tpl->set( '{form_title}', '<h1>������</h1><hr>' );
		$tpl->set( '{form_ba}', $form_cont );

	}

}

$tpl->compile('content');
$tpl->clear();

?>