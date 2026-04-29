<?php

namespace App\Traits;

trait Translatable
{
    /**
     * Get the translated version of a field.
     *
     * @param string $field
     * @return mixed
     */
    public function translate($field, $value = null)
    {
        $locale = app()->getLocale();
        $fieldEn = $field . '_en';

        // Check if English translation exists and locale is English
        if ($locale === 'en' && !empty($this->attributes[$fieldEn])) {
            return $this->attributes[$fieldEn];
        }

        // Return original value or fallback to attributes array to avoid recursion
        return $value ?? ($this->attributes[$field] ?? null);
    }
}
