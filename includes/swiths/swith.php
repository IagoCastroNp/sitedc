<?php

ob_start();
session_start();
$acao = mysql_real_escape_string($_POST['acao']);
switch($acao){
	case 'modoPagamento':

	break;
	/*case 'send_contato':
		if($_SESSION['useracess']['sendmail'] && $_SESSION['useracess']['sendmail'] > time()):
				
			$timeAtual = time();
			$timeFalta = $_SESSION['useracess']['sendmail'];
			$tempoFalta = ($timeFalta - $timeAtual) / 60;
			$tentenovamente = ($tempoFalta > 1 ? round($tempoFalta).' minutos' : ($tempoFalta < 1 ? substr($tempoFalta,2,2).' segundos' : round($tempoFalta).' miniuto'));
			
			echo 'errspam';
			
		else:
			$f['nome'] 		= mysql_real_escape_string(strip_tags(trim($_POST['nome'])));
			$f['email'] 	= mysql_real_escape_string(strip_tags(trim($_POST['email'])));
			$f['telefone'] 	= mysql_real_escape_string(strip_tags(trim($_POST['fone'])));
			$f['mensagem'] 	= mysql_real_escape_string(strip_tags(trim($_POST['msg'])));
			$f['mensagem']	= str_replace('\r\n','</p><p>',$f['mensagem']);	
			$f['mensagem']	= str_replace('<p></p>','',$f['mensagem']);
			
			if(in_array('',$f)){
				echo 'errdados';
			}elseif(!isMail($f['email'])){
				echo 'erremail';
			}else{
				$assunto	= 'Olá '.$f['nome'].', recebemos sua mensagem de contato!';
				$mMensagem	= $f['mensagem'];
				$mRefe	 	= 'Recebemos sua mensagem de contato através de nosso site';
				$mTitulo 	= 'Email de Contato';
				//prepara o envio
				$mensagem = geraEmail(SITENAME,'Contato',BASE,$f,$mTitulo,$mRefe,$mMensagem);
				//enviando o email para o cliente
				$email_cliente = sendMail($assunto,$mensagem,MAILUSER,'Atendimento '.SITENAME,$f['email'],$f['nome'],MAILUSER,SITENAME);
				//envio para o host
				$assunto = 'Nova mensagem de '.$f['nome'];
				$mensagem = '<p>'.$f['mensagem'].'</p><hr/><p>Nome: '.$f['nome'].'<br>Email: '.$f['email'].'<br>Telefone: '.$f['telefone'].'<br>Enviada em: '.date('d/m/Y H:i').'</p>';
				$email_emp = sendMail($assunto,$mensagem,MAILUSER,'Contato '.SITENAME,MAILUSER,SITENAME,$f['email'],$f['nome']);
				if(($email_cliente == true) && ($email_emp == true)):
					echo $f['nome'];
				else:
					echo 'errhostmail';
				endif;
				
				$_SESSION['useracess']['sendmail'] = time() + 60*5;	
				
			}
		endif;
	break;*/
	default:
		header('Location: '.BASE.'/404');
	break;
}
ob_end_flush();