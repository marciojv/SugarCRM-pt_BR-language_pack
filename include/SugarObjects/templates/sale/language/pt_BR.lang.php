<?php

/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Enterprise Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/products/sugar-enterprise-eula.html
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among ot her things: 1) sublicense, resell, rent, lease, redistribute, assign
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


if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


	
$mod_strings = array (
  'LBL_LEADS_SUBPANEL_TITLE' => 'Potenciais',
  'LBL_MODULE_NAME' => 'Venda',
  'LBL_MODULE_TITLE' => 'Venda: Painel Principal',
  'LBL_SEARCH_FORM_TITLE' => 'Pesquisa de Venda',
  'LBL_VIEW_FORM_TITLE' => 'Ver Venda',
  'LBL_LIST_FORM_TITLE' => 'Lista de Venda',
  'LBL_SALE_NAME' => 'Nome da Venda:',
  'LBL_SALE' => 'Venda:',
  'LBL_NAME' => 'Nome da Venda',
  'LBL_LIST_SALE_NAME' => 'Nome',
  'LBL_LIST_ACCOUNT_NAME' => 'Nome da Conta',
  'LBL_LIST_AMOUNT' => 'Valor',
  'LBL_LIST_DATE_CLOSED' => 'Fechar',
  'LBL_LIST_SALE_STAGE' => 'Fase da Venda',
  'LBL_ACCOUNT_ID' => 'ID Conta',
  'LBL_CURRENCY_ID' => 'ID Moeda',
  'LBL_TEAM_ID' => 'ID Equipe',
  'UPDATE' => 'Venda - Atualização de Moeda',
  'UPDATE_DOLLARAMOUNTS' => 'Atualizar Valores em U.S. Dollar',
  'UPDATE_VERIFY' => 'Verificar Valores',
  'UPDATE_VERIFY_TXT' => 'Verifica se os valores de vendas são números decimais válidos com apenas caracteres numéricos (0-9) e decimais (.)',
  'UPDATE_FIX' => 'Corrigir Valores',
  'UPDATE_FIX_TXT' => 'Tenta corrigir quaisquer valores inválidos criando um decimal válido a partir do valor atual. Qualquer valor alterado é registrado no campo amount_backup da base de dados. Se executar esta tarefa e encontrar erros, não volte a executá-la sem restaurar a partir do backup, pois pode substituir o backup com novos dados inválidos.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Atualiza os valores em U.S. Dollar para vendas baseados nas taxas de câmbio atuais. Este valor é utilizado para calcular Gráficos e Listas de Valores de Moeda.',
  'UPDATE_CREATE_CURRENCY' => 'Criando Nova Moeda:',
  'UPDATE_VERIFY_FAIL' => 'Falha na Verificação de Registro:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Valor Atual:',
  'UPDATE_VERIFY_FIX' => 'Correção atual diária',
  'UPDATE_INCLUDE_CLOSE' => 'Incluir Registros Fechados',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Novo Valor:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Nova Moeda:',
  'UPDATE_DONE' => 'Concluído',
  'UPDATE_BUG_COUNT' => 'Bugs Encontrados Alvo de Tentativa de Resolução:',
  'UPDATE_BUGFOUND_COUNT' => 'Bugs Encontrados:',
  'UPDATE_COUNT' => 'Registros Atualizados:',
  'UPDATE_RESTORE_COUNT' => 'Valores de Registro Restaurados:',
  'UPDATE_RESTORE' => 'Restaurar Valores',
  'UPDATE_RESTORE_TXT' => 'Restaura valores a partir dos backups criados durante a correção.',
  'UPDATE_FAIL' => 'Não foi possível atualizar -',
  'UPDATE_NULL_VALUE' => 'Valor é NULO definindo-o para 0 -',
  'UPDATE_MERGE' => 'Mesclar Moedas',
  'UPDATE_MERGE_TXT' => 'Mesclar múltiplas moedas numa única moeda. Se houver múltiplos Registros para a mesma moeda, irá fundi-los num só. Isto irá mesclar igualmente as moedas para todos os outros módulos.',
  'LBL_ACCOUNT_NAME' => 'Nome da Conta:',
  'LBL_AMOUNT' => 'Valor:',
  'LBL_AMOUNT_USDOLLAR' => 'Valor em USD:',
  'LBL_CURRENCY' => 'Moeda:',
  'LBL_DATE_CLOSED' => 'Data de Fechamento Esperada:',
  'LBL_TYPE' => 'Tipo:',
  'LBL_CAMPAIGN' => 'Campanha:',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projetos',
  'LBL_NEXT_STEP' => 'Próximo Passo:',
  'LBL_LEAD_SOURCE' => 'Origem do Potencial:',
  'LBL_SALES_STAGE' => 'Fase da Venda:',
  'LBL_PROBABILITY' => 'Probabilidade (%):',
  'LBL_DESCRIPTION' => 'Descrição:',
  'LBL_DUPLICATE' => 'Venda Possivelmente Duplicada',
  'MSG_DUPLICATE' => 'O Registro de Venda que está prestes a criar pode ser um duplicado de um Registro de venda já existente. Os Registros de Venda contendo nomes semelhantes estão listados abaixo. <br>Clique em Salvar para continuar a criar esta nova Venda, ou clique em Cancelar para voltar ao módulo sem criar a venda.',
  'LBL_NEW_FORM_TITLE' => 'Criar Venda',
  'LNK_NEW_SALE' => 'Criar Venda',
  'LNK_SALE_LIST' => 'Venda',
  'ERR_DELETE_RECORD' => 'Um número de Registro deve ser especificado para Excluir a venda.',
  'LBL_TOP_SALES' => 'A Minha Maior Venda em Aberto',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Tem certeza que pretende remover este contato da venda?',
  'SALE_REMOVE_PROJECT_CONFIRM' => 'Tem certeza que pretende remover esta venda do projeto?',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Venda',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Histórico',
  'LBL_RAW_AMOUNT' => 'Valor Bruto',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatos',
  'LBL_ASSIGNED_TO_NAME' => 'Atribuído a:',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuário',
  'LBL_MY_CLOSED_SALES' => 'Minhas Vendas Fechadas',
  'LBL_TOTAL_SALES' => 'Vendas Totais',
  'LBL_CLOSED_WON_SALES' => 'Vendas Fechadas Ganhas',
  'LBL_ASSIGNED_TO_ID' => 'Atribuído a',
  'LBL_CREATED_ID' => 'ID Criado por',
  'LBL_MODIFIED_ID' => 'ID Modificado por',
  'LBL_MODIFIED_NAME' => 'Nome de Usuário Modificado por',
  'LBL_SALE_INFORMATION' => 'Informação de Venda',
  'LBL_CURRENCY_NAME' => 'Nome da Moeda',
  'LBL_CURRENCY_SYMBOL' => 'Símbolo da Moeda',
);

