<?php
	require_once ('PHPMailer/PHPMailerAutoload.php');
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPAuth= true;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = '465';
        $mail->isHTML();
	$mail->Username = 'claudiu-stefan.maxim@student.tuiasi.ro';
	$mail->Password = 'Parapanta.49';
	$mail->SetFrom('MP3 Player');
	$mail->Subject = ('MP3 Player Alert');
	$mail->AddAddress('claudiu.maximus99@gmail.com');
?>

