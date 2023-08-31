<?php

namespace Diganta\GestbookBundle\Model;

use \Contao\Model;

/*
 * Class GestBookCommentModel
 *
 * @author Diganta Mondal
 */

class GestBookCommentModel extends Model
{
    /**
     * Table name
     * @var string
     */
    protected static $strTable = 'tl_gestbook_comment';
    /**
    * Author: Diganta Mondal
    * 
    * @param 
    * 
    * @return @Model Object
    **/


}

class_alias(GestBookCommentModel::class, 'GestBookCommentModel');