<?php
/**
 * Symfony/var-dumper wrapper providing 'Darcula' theme.
 *
 * @package   Peraleks\darcula-symfony-var-dumper
 * @copyright 2017 Aleksey Perevoshchikov <aleksey.perevoshchikov.n@gmail.com>
 * @license   https://github.com/peraleks/darcula-symfony-var-dumper/blob/master/LICENSE.md MIT
 * @link      https://github.com/peraleks/darcula-symfony-var-dumper
 */

namespace Peraleks\VarDumper;

use Symfony\Component\VarDumper\Dumper\HtmlDumper;

/**
 * Class DarculaHtmlDumper
 *
 * Переопределяет стили для Symfony\Component\VarDumper\Dumper\HtmlDumper.
 * Пердоставляет стили для обёртки.
 */
class DarculaHtmlDumper extends HtmlDumper
{
    /**
     * Стили для обёртки.
     */
    const STYLE  = [
        'main' =>  'background-color: #232525;
                    display: inline-block;
                    box-sizing: border-box;
                    min-width: 100%;
                    padding: 5px;
                    margin: 5px 0 0 0;
                    border-top: 1px solid #666;
                    font-size: 13px;
                    font-family: Consolas, Menlo, Monaco, monospace;',

        'int'  =>  'color: #efef81; 
                    display: inline-block;
                    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
                    padding: 0 0.5em;',

        'file' =>  'color: #999;
                    display: inline-block;
                    text-shadow: 2px 2px 7px rgba(0, 0, 0, 0.9), 0 0 2px rgb(0, 0, 0);',
    ];

    /**
     * Переопределение стандартных стилей HtmlDumper
     */
    protected $styles = [
        'num'       => 'color:#68ace0',
        'const'     => 'font-weight:bold',
        'str'       => 'color:#8fdf8e',
        'note'      => 'color:#dfdfa4',
        'ref'       => 'color:#999',
        'public'    => 'color:#fc9a48',
        'protected' => 'color:#fc9a48',
        'private'   => 'color:#fc9a48',
        'meta'      => 'color:#7e65ff',
        'key'       => 'color:#c18ddd',
        'index'     => 'color:#c18ddd',
        'cchr'      => 'color:#999',
        'default'   => 'background-color:#232525;
                        color:#888; line-height:1.2em;
                        font-size:14px;
                        font-family: Consolas, Menlo, Monaco, monospace;
                        word-wrap: break-word;
                        white-space: pre-wrap;
                        position:relative;
                        z-index:0;
                        word-break: normal;
                        margin: 0 0 1em;'
    ]; 

}