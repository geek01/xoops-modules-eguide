<?php
// $Id: main.php,v 1.2 2010/07/18 06:51:54 nobu Exp $
// M�dulo traduzido para o Portugu�s do Brasil (portuguese) por
// Leco (m_ohse@hotmail.com) URL: http://xoopersBR.com

if (defined('_MD_RESERV_FORM')) return;

define("_MD_RESERV_FORM","Agendamento aqui");
define("_MD_RESERVATION","Fazer um agendamento");
define("_MD_NAME","/^Name\\*?\$/");
define('_MD_SDATE_FMT', 'D, j M Y');
define('_MD_STIME_FMT', 'H:i');
// Localization Transrate Weekly date name
//global $ev_week;
//$ev_week = array('Sun'=>'S', 'Mon'=>'M','Tue'=>'T', 'Wed'=>'W','Thu'=>'U','Fri'=>'F', 'Sat'=>'A');
define("_MD_POSTED_FMT", "j M Y H:i");
define("_MD_TIME_FMT", "j M Y H:i");
define("_MD_READMORE","Mais...");
define("_MD_EMAIL","Endere�o de email");
define('_MD_UNAME','Nome de usu�rio');
define("_MD_SUBJECT","Confirmar - {EVENT_DATE} {EVENT_TITLE}");
define("_MD_NOTIFY_EVENT",  "Notifica��o de novos eventos");
define("_MD_NOTIFY_REQUEST","Notifique-me, via email, quando novos eventos forem postados");
define('_MD_REQUIRE_MARK', '<em>*</em>');
define('_MD_LISTITEM_FMT', '[%s]');
define("_MD_ORDER_NOTE1","'"._MD_REQUIRE_MARK."'itens requeridos. ");
define("_MD_ORDER_NOTE2","'[ ]' item que ser� mostrado na lista de participantes.");
define('_MD_ORDER_SEND','Agendamento');
define('_MD_ORDER_CONF','Confirmar');

define("_MD_EVENT_NONE","N�o existe evento agendando");
define("_MD_BACK","Voltar");
define("_MD_RESERVED","Existe apenas um agendamento");
define("_MD_RESERV_NUM","N�mero m�ximo de lugares %d");
define("_MD_RESERV_REG","Atualmente foram reservados lugares %d");
define("_PRINT", "Imprimir");

define("_MD_NOITEM_ERR","Nada informado. Por favor, informe um valor.");
define("_MD_NUMITEM_ERR","Precisa ser um valor num�rico");
define("_MD_MAIL_ERR","Erro no formato do endere�o de email");
define("_MD_SEND_ERR","Falha no envio de email");
define("_MD_DUP_ERR","N�s j� agendamos um lugar com seu endere�o de email");
define('_MD_DATE_ERR','A data est� fora do per�odo de abrang�ncia');
define('_MD_DATEDELETE_ERR','Pare e remova a data pois existe um agendamento');
define("_MD_DUP_REGISTER","A notifica��o via email j� foi registrada");
define("_MD_REGISTERED","A notifica��o via email foi registrada");

define("_MD_RESERV_ACCEPT","Enviada confirma��o por email");
define("_MD_RESERV_STOP","Os agendamentos foram cancelados.");
define("_MD_RESERV_CONF","Ordenamento da informa��o");
define("_MD_RESERV_ADMIN","Lista de agendamentos");
define("_MD_RESERV_REGISTER","Agendamento registrado");

define("_MD_RESERV_ACTIVE"," foi aceito.");
define("_MD_RESERV_REFUSE"," foi recusado.");

define("_AM_MAILGOOD","Sucesso: %s");
define("_AM_SENDMAILNG","Falha: %s");

define("_MD_RESERV_NOTFOUND","N�o existem agendamentos ou todos j� foram cancelados.");
define("_MD_RESERV_CANCEL","Voc� tem certeza que deseja cancelar?");
define("_MD_RESERV_CANCELED","O agendamento do evento foi cancelado");
define("_MD_RESERV_NOCANCEL","O agendamento n�o pode ser cancelado ap�s o finaliza��o do tempo");
define("_MD_RESERV_NOTIFY","%s\n\nOrdena��o do email: %s\nEvento agendando: %s\n  %s\n");
define("_MD_RESERV_FULL","Os agendamentos foram cancelados porque o evento agora est� totalmente reservado.");
define('_MD_RESERV_TOMATCH',' %d is too match (%d esquerda)');
define('_MD_RESERV_CLOSE','Agendamento finalizado');
define('_MD_RESERV_NEEDLOGIN','Voc� precisa estar <a href="'.XOOPS_URL.'/user.php">logado</a>, quando desejar efetuar algum agendamento');
define('_MD_RESERV_PLUGIN_FAIL','N�o existem condi��es para registrar o agendamento');
define("_MD_CANCEL_FAIL","Flaha no cancelamento");
define("_MD_NODATA","N�o existem dados");
define("_MD_NOEVENT","N�o existem eventos listados");
define("_MD_SHOW_PREV","Eventos anteriores");
define("_MD_SHOW_NEXT","Eventos futuros");

define("_MD_POSTERC","Quem postou");
define('_MD_POSTDATE','Registrado');
define('_MD_STARTTIME','Evento iniciado');
define('_MD_CLOSEDATE','Agendamento finalizado');
define('_MD_CLOSEBEFORE','Finalizar antes do tempo');
define('_MD_CLOSEBEFORE_DESC','Antes do in�cio (Exemplo: 3 dias, 2 horas, 50 minutos)');
define('_MD_TIME_UNIT','dias,horas,minutos');
define('_MD_TIME_REG','d(ia)?s?,h(ora)?,minuto');
define('_MD_CALENDAR','Ir ao calend�rio');
define('_MD_CAL','Calend�rio');
define('_MD_CAL_MONDAY_FIRST', 'Verdadeiro');
define("_MD_REFER","%d acessos");
define("_MD_RESERV_LIST","Lista de participantes");

define('_MD_NEED_UPGRADE','� necess�rio para proceder a atualiza��o do m�dulo');

//%%%%%%	File Name receiept.php 	%%%%%
define("_MD_RESERV_EDIT","Editar agendamentos");
define("_MD_OPERATION","Opera��o");
define("_MD_STATUS","Situa��o");
define("_MD_RESERV_RETURN","Retorna � lista");
define("_MD_RESERV_REC","Agendamentos gravados");
define("_MD_RVID","ID do agendamento");
define("_MD_ORDER_COUNT","Contagem");
define("_MD_PRINT_DATE","Data da impress�o");
define("_MD_SAVECHANGE","Salvar mudan�as");
define("_MD_RESERV_DEL","Excluir agendamento");
define("_MD_DETAIL","Detalhe");
define("_MD_RESERV_MSG_H","Enviar mensagem para o agendamento");
define("_MD_ACTIVATE","Aprovado");
define("_MD_REFUSE","Recusado");
define("_MD_EXPORT_OUT","Formato excel");
define('_MD_EXPORT_CHARSET', 'UTF-8');
define("_MD_INFO_MAIL","Enviado email");
define("_MD_SUMMARY","Sum�rio");
define("_MD_SUM_ITEM","Resumo do item");
define("_MD_SUM","Soma");

//%%%%%%	File Name admin.php 	%%%%%
define("_MD_EDITARTICLE","Editar o evento");
define("_MD_NEWTITLE","Novo evento");
define("_MD_NEWSUB","Novo evento - {EVENT_DATE} {EVENT_TITLE}");
define("_MD_TITLE","T�tulo");
define("_MD_EVENT_DATE","Data do evento");
define("_MD_EVENT_EXPIRE","Mostrar finaliza��o");
define('_MD_EVENT_EXTENT','Repetir abertura');
define('_MD_EVENT_CATEGORY','Categoria');
define('_MD_EDIT_EXTENT','Editar data aberta');
define('_MD_EXTENT_REPEAT','Repeti��es');
define('_MD_ADD_EXTENT','Adicionar data da abertura');
define('_MD_ADD_EXTENT_DESC','Data de abertura adicional no "YYYY-MM-DD HH:MM" formato (Registros m�ltiplos separados em nova linha)');
define("_MD_INTROTEXT","Texto introdut�rio");
define("_MD_EXTEXT","Descri��o");
define("_MD_EVENT_STYLE","Estilo de sa�da");
define('_MD_RESERV_SETTING','Agendamento');
define("_MD_RESERV_DESC","Permitir continua��o dos agendamentos");
define('_MD_RESERV_STOPFULL','Parar agendamentos quando o limite for alcan�ado');
define("_MD_RESERV_AUTO","Aceitar automaticamente agendamentos (N�o � necess�ria a aprova��o)");
define('_MD_RESERV_NOTIFYPOSTER','Agendamento notificado por email');
define('_MD_RESERV_UNIT','');
define('_MD_RESERV_ITEM','Itens adicionais');
define('_MD_RESERV_LAB','Nome do item');
define('_MD_RESERV_LABREQ','Por favor, informe o nome do item');
define('_MD_RESERV_REQ','Requerido');
define('_MD_RESERV_ADD','Adicionar');
define('_MD_RESERV_OPTREQ','Necess�rio op��o argumento');
define('_MD_RESERV_ITEM_DESC','<a href="language/english/help.html#form" target="help">Sobre o formato dos itens adicionais</a>');
define('_MD_RESERV_LABEL_DESC','Utilize o nome do item "%s" caso m�ltiplos agendamnto pessoal.');
define('_MD_OPTION_VARS','Vari�veis Opcionais');
define('_MD_OPTION_OTHERS','Outros');
define('_MD_RESERV_REDIRECT','URL de redirecionamento ap�s o agendamento');
define('_MD_RESERV_REDIRECT_DESC','Configurar o n�mero de segundos para aguardar (Exemplo: "4;http://..."). vari�veis: {X_EID}, {X_SUB}, {X_RVID}');
define('_MD_APPROVE','Mostrar aprova��o');
define('_MD_PREVIEW','Vizualiza��o');
define('_MD_SAVE','Salvar');
define('_MD_UPDATE','Atualizar');
define('_MD_DBUPDATED','Banco de dados atualizado');
define('_MD_DBDELETED','Evento exclu�do');

define('_MD_EVENT_DEL_DESC','Excluir este evento');
define('_MD_EVENT_DEL_ADMIN','Excluir todos os dados, inlusive os agendamentos.');

define('_MD_TIMEC','Hora');
// Localization Transrate Month name
//global $ev_month;
//$ev_month = array(1=>"Jan", 2=>"Feb", 3=>"Mar", 4=>"Apr",
//                  5=>"May", 6=>"Jun", 6=>"Jul", 8=>"Aug",
//                  9=>"Sep", 10=>"Oct", 11=>"Nov", 12=>"Dec");

define('_MD_RESERV_DEFAULT_ITEM',"Nome*,tamanho=40\nEndere�o\n");
define('_MD_RESERV_DEFAULT_MEMBER',"");

// notification message
define('_MD_APPROVE_REQ','Por favor, confirme o evento aprove-o.');
//%%%%%%	File Name sendinfo.php 	%%%%%
define("_MD_INFO_TITLE","Enviar informa��o por email");
define("_MD_INFO_CONDITION","Enviar para");
define("_MD_INFO_NODATA","N�o existem dados");
define("_MD_INFO_SELF","Auto enviar (%s)");
define("_MD_INFO_DEFAULT","-mensagens-\n\n\nEvento agendando\n    {EVENT_URL}\n");
define("_MD_INFO_MAILOK","Email enviado");
define("_MD_INFO_MAILNG","Falha no envio do email");
define("_MD_UPDATE_SUBJECT","Evento atualizado");
define("_MD_UPDATE_DEFAULT","Padr�o");

//%%%%%%	File Name print.php 	%%%%%

define("_MD_URLFOREVENT","URL deste evento:");
// %s represents your site name
define("_MD_THISCOMESFROM","Mais informa��es de eventos em %s");

//%%%%%%	File Name mylist.php 	%%%%%
define('_MD_MYLIST','Agendamento de eventos');
define('_MD_CANCEL','Cancelar');
define('_MD_CANCEL_SUBJ','Cancelar - {EVENT_DATE} {EVENT_TITLE}');
?>
