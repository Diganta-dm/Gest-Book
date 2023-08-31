<?php if (!defined('TL_ROOT'))
    die('You can not access this file directly!');

/* 
 * @package   [GestBook Bundle]
 * @author    Diganta Mondal
 * @license   GNU/LGPL
 */

/**
 * Table tl_gestbook
 */

$GLOBALS['TL_DCA']['tl_gestbook'] = array(

    // Config
    'config' => array(
        'dataContainer' => 'Table',
        'enableVersioning' => false,
        'sql' => array(
            'keys' => array(
                'id' => 'primary'
            )
        )
    ),

    // List
    'list' => array(
        'sorting' => array(
            'mode' => 1,
            'fields' => array('id'),
            'panelLayout' => 'search,limit',
            'disableGrouping' => true,
        ),
        'label' => array(
            'fields' => array('gestbook_header'),
            'format' => '%s'
        ),
        'global_operations' => array(
            'all' => array(
                'label' => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href' => 'act=select',
                'class' => 'header_edit_all',
                'attributes' => 'onclick="Backend.getScrollOffset();" accesskey="e"'
            )
        ),
        'operations' => array(
            'edit' => array(
                'label' => &$GLOBALS['TL_LANG']['tl_gestbook']['edit'],
                'href' => 'act=edit',
                'icon' => 'edit.gif'
            ),
            'copy' => array(
                'label'               => &$GLOBALS['TL_LANG']['tl_vlog']['copy'],
                'href'                => 'act=paste&amp;mode=copy',
                'icon'                => 'copy.gif'
            ),
            'cut' => array(
                'label' => &$GLOBALS['TL_LANG']['tl_gestbook']['cut'],
                'href' => 'act=paste&amp;mode=cut',
                'icon' => 'cut.gif'
            ),
            'delete' => array(
                'label' => &$GLOBALS['TL_LANG']['tl_gestbook']['delete'],
                'href' => 'act=delete',
                'icon' => 'delete.gif',
                'attributes' => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
            ),
            'show' => array(
                'label' => &$GLOBALS['TL_LANG']['tl_gestbook']['show'],
                'href' => 'act=show',
                'icon' => 'show.gif'
            )
        )
    ),

    // Palettes
    'palettes' => array(
        'default' => '{Gest_Book_Details},gestbook_header,description,published;'
    ),

    // Fields
    'fields' => array(
        'id' => array(

            'primary' => true,
            'sql' => "int(16) NOT NULL DEFAULT NULL auto_increment"
        ),
        'tstamp' => array(
            'sql' => "int(16) NOT NULL DEFAULT 0"
        ),

        'gestbook_header' => array(
            'label' => &$GLOBALS['TL_LANG']['tl_gestbook']['gestbook_header'],
            'exclude' => true,
            'inputType' => 'text',
            'eval' => array('mandatory' => true, 'maxlength' => 255),
            'sql' => "varchar(100) NOT NULL DEFAULT ''"
        ),
        'description' => array(
            'label' => &$GLOBALS['TL_LANG']['tl_gestbook']['description'],
            'exclude' => true,
            'inputType' => 'textarea',
            'eval' => array('mandatory' => false, 'rte' => 'tinyMCE', 'helpwizard' => true),
            'sql' => "TEXT NULL"
        ),
        'published' => array(
            'label' => &$GLOBALS['TL_LANG']['tl_gestbook']['published'],
            'exclude' => true,
            'filter' => true,
            'flag' => 2,
            'inputType' => 'checkbox',
            'eval' => array('doNotCopy' => true),
            'sql' => "INT(1) NOT NULL DEFAULT 1"
        )
    )
);