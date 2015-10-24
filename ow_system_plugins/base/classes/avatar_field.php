<?php

/**
 * EXHIBIT A. Common Public Attribution License Version 1.0
 * The contents of this file are subject to the Common Public Attribution License Version 1.0 (the “License”);
 * you may not use this file except in compliance with the License. You may obtain a copy of the License at
 * http://www.oxwall.org/license. The License is based on the Mozilla Public License Version 1.1
 * but Sections 14 and 15 have been added to cover use of software over a computer network and provide for
 * limited attribution for the Original Developer. In addition, Exhibit A has been modified to be consistent
 * with Exhibit B. Software distributed under the License is distributed on an “AS IS” basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License for the specific language
 * governing rights and limitations under the License. The Original Code is Oxwall software.
 * The Initial Developer of the Original Code is Oxwall Foundation (http://www.oxwall.org/foundation).
 * All portions of the code written by Oxwall Foundation are Copyright (c) 2011. All Rights Reserved.

 * EXHIBIT B. Attribution Information
 * Attribution Copyright Notice: Copyright 2011 Oxwall Foundation. All rights reserved.
 * Attribution Phrase (not exceeding 10 words): Powered by Oxwall community software
 * Attribution URL: http://www.oxwall.org/
 * Graphic Image as provided in the Covered Code.
 * Display of Attribution Information is required in Larger Works which are defined in the CPAL as a work
 * which combines Covered Code or portions thereof with code not governed by the terms of the CPAL.
 */

/**
 * Avatar field form element.
 *
 * @author Egor Bulgakov <egor.bulgakov@gmail.com>
 * @package ow.ow_system_plugins.base.bol
 * @since 1.7.2
 */
class BASE_CLASS_AvatarField extends FormElement
{
    /**
     * @param string $name
     */
    public function __construct( $name )
    {
        parent::__construct($name);

        $this->addAttribute('type', 'file');
    }

    /**
     * @see FormElement::renderInput()
     *
     * @param array $params
     * @return string
     */
    public function renderInput( $params = null )
    {
        parent::renderInput($params);

        $deleteLabel = OW::getLanguage()->text('base', 'delete');

        $markup = '<div class="ow_avatar_field">';
        $markup .= UTIL_HtmlTag::generateTag('input', $this->attributes);
        $markup .= '<div class="ow_avatar_field_preview" style="display: none;"><img src="" alt="" /><span title="'.$deleteLabel.'"></span></div>';
        $markup .= '<input type="hidden" name="" value="" class="ow_avatar_field_value" />';
        $markup .= '</div>';

        return $markup;
    }

    public function getElementJs()
    {
        $params = array(
            'ajaxResponder' => OW::getRouter()->urlFor('BASE_CTRL_Avatar', 'ajaxResponder')
        );
        $jsString = "var formElement = new OwAvatarField(" . json_encode($this->getId()) . ", " . json_encode($this->getName()) . ", ".json_encode($params).");";

        /** @var $value OW_Validator  */
        foreach ( $this->validators as $value )
        {
            $jsString .= "formElement.addValidator(" . $value->getJsValidator() . ");";
        }

        $jsString .= "
			formElement.getValue = function(){

                var value = $(this.input).closest('.ow_avatar_field').find('.ow_avatar_field_value').val();

		        return value;
			};

			formElement.resetValue = function(){
                $(this.input).closest('.ow_avatar_field').find('.ow_avatar_field_value').val('');
            };

			formElement.setValue = function(value){
			    $(this.input).closest('.ow_avatar_field').find('.ow_avatar_field_value').val(value);
			};
		";

        return $jsString;
    }
}