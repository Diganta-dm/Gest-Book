<?php if (!defined('TL_ROOT'))
    die('You can not access this file directly!');

/* 
 * @package   [GestBook Bundle]
 * @author    Diganta Mondal
 * @license   GNU/LGPL
 */

/**
 * Table tl_gestbook_comment
 */

$GLOBALS['TL_DCA']['tl_gestbook_comment'] = array(

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
                'label' => &$GLOBALS['TL_LANG']['tl_gestbook_comment']['edit'],
                'href' => 'act=edit',
                'icon' => 'edit.gif'
            ),
            'copy' => array(
                'label' => &$GLOBALS['TL_LANG']['tl_gestbook_comment']['copy'],
                'href' => 'act=paste&amp;mode=copy',
                'icon' => 'copy.gif'
            ),
            'cut' => array(
                'label' => &$GLOBALS['TL_LANG']['tl_gestbook_comment']['cut'],
                'href' => 'act=paste&amp;mode=cut',
                'icon' => 'cut.gif'
            ),
            'delete' => array(
                'label' => &$GLOBALS['TL_LANG']['tl_gestbook_comment']['delete'],
                'href' => 'act=delete',
                'icon' => 'delete.gif',
                'attributes' => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
            ),
            'show' => array(
                'label' => &$GLOBALS['TL_LANG']['tl_gestbook_comment']['show'],
                'href' => 'act=show',
                'icon' => 'show.gif'
            )
        )
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

        'pid' => array(
            'label' => &$GLOBALS['TL_LANG']['tl_gestbook_comment']['gestbook_header'],
            'exclude' => true,
            'inputType' => 'text',
            'eval' => array('mandatory' => false),
            'sql' => "int(10) NOT NULL DEFAULT 0"
        ),
        'comment' => array(
            'label' => &$GLOBALS['TL_LANG']['tl_gestbook_comment']['description'],
            'exclude' => true,
            'inputType' => 'textarea',
            'eval' => array('mandatory' => false),
            'sql' => "varchar(255) NOT NULL DEFAULT ''"
        )
    )
);