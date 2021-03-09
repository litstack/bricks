<?php

use Ignite\Crud\Models\ListItem;

if (! function_exists('hasActiveChild')) {
    /**
     * Check's if list item has child with active route.
     *
     * @param  ListItem $item
     * @param  string   $fieldId
     * @param  string   $value
     * @return mixed
     */
    function hasActiveChild(ListItem $item, $fieldId = 'route')
    {
        foreach ($item->children as $child) {
            if (! $child->{$fieldId}) {
                continue;
            }
            if (! $child->{$fieldId}->isActive() && ! hasActiveChild($child, $fieldId)) {
                continue;
            }

            return true;
        }

        return false;
    }
}

if (! function_exists('isActive')) {
    /**
     * Check's if list item has child with active route.
     *
     * @param  ListItem $item
     * @param  string   $fieldId
     * @param  string   $value
     * @return mixed
     */
    function isActive(ListItem $item)
    {
        return $item->route?->isActive();
    }
}
