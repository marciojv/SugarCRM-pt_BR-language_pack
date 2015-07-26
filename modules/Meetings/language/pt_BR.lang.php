<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

  
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Enterprise Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/products/sugar-enterprise-eula.html
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2011 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/

$mod_strings = array (
  'LBL_COLON' => ':',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Potenciais',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_REMOVE' => 'rem',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'ERR_DELETE_RECORD' => 'Um número de Registro deve ser especificado para Excluir a reunião.',
  'LBL_ACCEPT_THIS' => 'Aceitar?',
  'LBL_ADD_BUTTON' => 'Adicionar',
  'LBL_ADD_INVITEE' => 'Adicionar convidados',
  'LBL_CONTACT_NAME' => 'Contato:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatos',
  'LBL_CREATED_BY' => 'Criado por',
  'LBL_DATE_END' => 'Data de Fim',
  'LBL_DATE_TIME' => 'Data e Hora de Início:',
  'LBL_DATE' => 'Data de Início:',
  'LBL_DEFAULT_STATUS' => 'Planeada',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Reuniões',
  'LBL_DEL' => 'Excluir',
  'LBL_DESCRIPTION_INFORMATION' => 'Informações da Descrição',
  'LBL_DESCRIPTION' => 'Descrição:',
  'LBL_DURATION_HOURS' => 'Duração (horas):',
  'LBL_DURATION_MINUTES' => 'Duração (minutos):',
  'LBL_DURATION' => 'Duração:',
  'LBL_EMAIL' => 'E-mail',
  'LBL_FIRST_NAME' => 'Nome',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Anotações ou Anexos',
  'LBL_HOURS_MINS' => '(horas/minutos)',
  'LBL_INVITEE' => 'Convidados',
  'LBL_LAST_NAME' => 'Sobrenome',
  'LBL_ASSIGNED_TO_NAME' => 'Atribuído a:',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuário',
  'LBL_LIST_CLOSE' => 'Concluir',
  'LBL_LIST_CONTACT' => 'Contato',
  'LBL_LIST_DATE_MODIFIED' => 'Data da modificação',
  'LBL_LIST_DATE' => 'Data de Início',
  'LBL_LIST_DIRECTION' => 'Direção',
  'LBL_LIST_DUE_DATE' => 'Data Limite',
  'LBL_LIST_FORM_TITLE' => 'Listar Reuniões',
  'LBL_LIST_MY_MEETINGS' => 'Minhas Reuniões',
  'LBL_LIST_RELATED_TO' => 'Referente a',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_LIST_SUBJECT' => 'Assunto',
  'LBL_LIST_TIME' => 'Hora de Início',
  'LBL_LOCATION' => 'Local:',
  'LBL_MEETING' => 'Reunião:',
  'LBL_MODIFIED_BY' => 'Modificado por',
  'LBL_MODULE_NAME' => 'Reuniões',
  'LBL_MODULE_TITLE' => 'Reuniões: Painel Principal',
  'LBL_NAME' => 'Nome',
  'LBL_NEW_FORM_TITLE' => 'Criar Novo Compromisso',
  'LBL_PHONE' => 'Telefone do Escritório',
  'LBL_REMINDER_TIME' => 'Hora do Aviso',
  'LBL_REMINDER' => 'Aviso:',
  'LBL_SCHEDULING_FORM_TITLE' => 'Agendamento',
  'LBL_SEARCH_BUTTON' => 'Pesquisar',
  'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Reuniões',
  'LBL_SEND_BUTTON_LABEL' => 'Enviar convites',
  'LBL_SEND_BUTTON_TITLE' => 'Enviar convites [Alt+I]',
  'LBL_STATUS' => 'Status:',
  'LBL_SUBJECT' => 'Assunto:',
  'LBL_TIME' => 'Hora de Início:',
  'LBL_USERS_SUBPANEL_TITLE' => 'Usuários',
  'LBL_ACTIVITIES_REPORTS' => 'Relatório de Atividades',
  'LNK_MEETING_LIST' => 'Reuniões',
  'LNK_NEW_APPOINTMENT' => 'Criar Compromisso',
  'LNK_NEW_MEETING' => 'Nova Reunião',
  'LNK_IMPORT_MEETINGS' => 'Importar Reuniões',
  'NTC_REMOVE_INVITEE' => 'Tem certeza que deseja remover este convidado da Reunião?',
  'LBL_CREATED_USER' => 'Usuário Criado',
  'LBL_MODIFIED_USER' => 'Usuário Modificado',
  'NOTICE_DURATION_TIME' => 'Tempo de duração deve ser maior que 0',
  'LBL_MEETING_INFORMATION' => 'Informação da Reunião',
);

