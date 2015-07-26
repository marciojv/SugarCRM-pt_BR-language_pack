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
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_COLON' => ':',
  'LBL_DEFAULT_STATUS' => 'Planejado',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Potencias',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_BLANK' => '-Nenhum-',
  'LBL_MODULE_NAME' => 'Ligações',
  'LBL_MODULE_TITLE' => 'Ligações: Painel Principal',
  'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Ligações',
  'LBL_LIST_FORM_TITLE' => 'Listar Ligações',
  'LBL_NEW_FORM_TITLE' => 'Criar Compromisso',
  'LBL_LIST_CLOSE' => 'Concluir',
  'LBL_LIST_SUBJECT' => 'Assunto',
  'LBL_LIST_CONTACT' => 'Contato',
  'LBL_LIST_RELATED_TO' => 'Referente a',
  'LBL_LIST_RELATED_TO_ID' => 'Referente ao ID',
  'LBL_LIST_DATE' => 'Data de Início',
  'LBL_LIST_TIME' => 'Hora de Início',
  'LBL_LIST_DURATION' => 'Duração',
  'LBL_LIST_DIRECTION' => 'Direção',
  'LBL_SUBJECT' => 'Assunto:',
  'LBL_REMINDER' => 'Aviso:',
  'LBL_CONTACT_NAME' => 'Contato:',
  'LBL_DESCRIPTION_INFORMATION' => 'Informações da Descrição',
  'LBL_DESCRIPTION' => 'Descrição',
  'LBL_STATUS' => 'Status:',
  'LBL_DIRECTION' => 'Direção:',
  'LBL_DATE' => 'Data de Início:',
  'LBL_DURATION' => 'Duração:',
  'LBL_DURATION_HOURS' => 'Duração (horas):',
  'LBL_DURATION_MINUTES' => 'Duração (minutos):',
  'LBL_HOURS_MINUTES' => '(horas/minutos)',
  'LBL_CALL' => 'Ligação:',
  'LBL_DATE_TIME' => 'Data e Hora de Início:',
  'LBL_TIME' => 'Hora de Início:',
  'LNK_NEW_CALL' => 'Nova Ligação',
  'LNK_NEW_MEETING' => 'Criar Reunião',
  'LNK_CALL_LIST' => 'Ligações',
  'LNK_IMPORT_CALLS' => 'Importar Ligações',
  'ERR_DELETE_RECORD' => 'Um número de Registro deve ser especificado para Excluir a conta',
  'NTC_REMOVE_INVITEE' => 'Tem certeza que deseja remover este participante da ligação?',
  'LBL_INVITEE' => 'Participantes',
  'LBL_RELATED_TO' => 'Referente a:',
  'LNK_NEW_APPOINTMENT' => 'Criar Compromisso',
  'LBL_SCHEDULING_FORM_TITLE' => 'Agendamento',
  'LBL_ADD_INVITEE' => 'Adicionar participantes',
  'LBL_NAME' => 'Nome completo',
  'LBL_FIRST_NAME' => 'Nome',
  'LBL_LAST_NAME' => 'Sobrenome',
  'LBL_EMAIL' => 'E-mail',
  'LBL_PHONE' => 'Telefone',
  'LBL_SEND_BUTTON_TITLE' => 'Enviar convites [Alt+I]',
  'LBL_SEND_BUTTON_LABEL' => 'Enviar convites',
  'LBL_DATE_END' => 'Data de conclusão',
  'LBL_TIME_END' => 'Hora de conclusão',
  'LBL_REMINDER_TIME' => 'Hora do aviso',
  'LBL_SEARCH_BUTTON' => 'Pesquisar',
  'LBL_ACTIVITIES_REPORTS' => 'Relatório de Atividades',
  'LBL_ADD_BUTTON' => 'Adicionar',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ligações',
  'LBL_LOG_CALL' => 'Registro de Ligação',
  'LNK_SELECT_ACCOUNT' => 'Selecionar Conta',
  'LNK_NEW_ACCOUNT' => 'Nova Conta',
  'LNK_NEW_OPPORTUNITY' => 'Nova Oportunidade',
  'LBL_DEL' => 'Del',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatos',
  'LBL_USERS_SUBPANEL_TITLE' => 'Usuários',
  'LBL_MEMBER_OF' => 'Membro de',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Anotações ou Anexos',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Atribuído a',
  'LBL_LIST_MY_CALLS' => 'Minhas Ligações',
  'LBL_SELECT_FROM_DROPDOWN' => 'Por favor faça primeiro uma seleção da lista Referente A',
  'LBL_ASSIGNED_TO_NAME' => 'Atribuído a',
  'LBL_ASSIGNED_TO_ID' => 'Atribuído a:',
  'NOTICE_DURATION_TIME' => 'Tempo de duração deve ser maior que 0',
  'LBL_CALL_INFORMATION' => 'Informação da Ligação',
  'LBL_REMOVE' => 'Remover',
);

