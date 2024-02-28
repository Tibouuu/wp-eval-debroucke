<?php
/**
 * This file is part of the AmphiBee package.
 * (c) AmphiBee <contact@amhibee.fr>
 */


namespace Hotel;

use Geniem\ACF\ConditionalLogicGroup;
use Geniem\ACF\Exception;
use Geniem\ACF\Field\Number;
use Geniem\ACF\Field\Select;
use Geniem\ACF\Field\Text;
use Geniem\ACF\Group;
use Geniem\ACF\RuleGroup;

class ACF
{
    /**
     * @throws Exception
     */
    public function register(): void
    {
        $field_group = new Group("Informations supplémentaires");
        $field_group
            ->set_key('codifier_fields')
            ->register();

        $rule_group = new RuleGroup();
        $rule_group->add_rule( 'post_type', '==', PostType::SLUG );

        $field_group->add_rule_group( $rule_group );
        
        $text_field = new Select("Prix de la nuit", 'price', 'price');
        $field_group->add_field($text_field);

        $area_field = new Select("Nombre de couchages", 'capacity', 'capacity');
        $area_field->set_choices([
            'none' => 'Choisir nombre de couchage',
            '1' => '1 couchage',
            '2' => '2 couchages',
            '3' => '3 couchages',
            '4' => '4 couchages',
            '5' => '5 couchages',
        ]);
        $field_group->add_field($area_field);
    }
}
