<?php
/**
 *
 * Profile Flair. An extension for the phpBB Forum Software package.
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2018 [ver 1.0.3] (https://github.com/phpBBTraducoes)
 * @copyright (c) 2017, Steve Guidetti, https://github.com/stevotvr
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'EXCEPTION_OUT_OF_BOUNDS'		=> 'O campo `%s` recebeu um valor fora de seu alcance.',
	'EXCEPTION_INVALID_COLOR'		=> 'O campo `%s` recebeu um valor de cor inválido. Uma cor válida é uma string hexadecimal de 6 caracteres (0-9, A-F).',
	'EXCEPTION_TOO_LONG'			=> 'O campo `%s` recebeu um valor maior do que o comprimento máximo.',
	'EXCEPTION_NAME_REQUIRED'		=> 'Você deve inserir um nome para o item flair.',
	'EXCEPTION_CAT_NAME_REQUIRED'	=> 'Você deve inserir um nome para a categoria.',

	'EXCEPTION_FIELD_FLAIR_COLOR'		=> 'Cor do Flair',
	'EXCEPTION_FIELD_FLAIR_ICON_COLOR'	=> 'Cor do ícone Flair',
	'EXCEPTION_FIELD_FLAIR_FONT_COLOR'	=> 'Cor da fonte Flair',
));
