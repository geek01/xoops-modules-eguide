<?php
# user/admin common use resources
#
// Módulo traduzido para o Português do Brasil (portuguese) por
// Leco (m_ohse@hotmail.com) URL: http://xoopersBR.com

define('_MD_ORDER_DATE', 'Ordenação da data');
define('_MD_CSV_OUT', 'Formato CSV');
define('_MD_EXTENT_DATE', 'Data aberta');
define('_MD_RESERV_PERSONS', 'Número máximo de pessoas');
define('_MD_INFO_REQUEST', 'Notificar usuários registrados');
define('_MD_INFO_COUNT', 'Contagem %d');

global $expire_set, $edit_style, $ev_stats, $ev_extents, $rv_stats;

$expire_set = [
    ''        => '-- Texto usado --',
    '+0'      => 'Mesmo dia',
    '+3600'   => 'Uma hora',
    '+86400'  => 'Próximo dia',
    '+172800' => '2 dias',
    '+259200' => '3 dias',
    '+604800' => 'Uma semana'
];

$edit_style = [
    0 => 'Somente tags XOOPS',
    1 => 'Fazer tag de nova linha &lt;br>',
    2 => 'Desabilitar tags HTML'
];

$ev_stats = [
    0 => 'Mostrar',
    1 => 'Aguardando',
    4 => 'Deletado'
];

$rv_stats = [
    0 => 'Aguardando',
    1 => 'Agendando',
    2 => 'Recusado'
];

$ev_extents = [
    'none'    => 'Periodicidade',
    'daily'   => 'Diariamente',
    'weekly'  => 'Semanalmente',
    'monthly' => 'Mensalmente'
];
