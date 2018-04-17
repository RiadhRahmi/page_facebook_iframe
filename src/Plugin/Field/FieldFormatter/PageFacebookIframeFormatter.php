<?php

namespace Drupal\page_facebook_iframe\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * Plugin implementation of the 'youtube_link' formatter.
 *
 * @FieldFormatter(
 *   id = "page_facebook_iframe",
 *   label = @Translation("Page Facebook Iframe Formatter"),
 *   field_types = {
 *     "link"
 *
 *   }
 * )
 */
class PageFacebookIframeFormatter extends FormatterBase
{

    /**
     * Builds a renderable array for a field value.
     *
     * @param \Drupal\Core\Field\FieldItemListInterface $items
     *   The field values to be rendered.
     * @param string $langcode
     *   The language that should be used to render the field.
     *
     * @return array
     *   A renderable array for $items, as an array of child elements keyed by
     *   consecutive numeric indexes starting from 0.
     */
    public function viewElements(FieldItemListInterface $items, $langcode)
    {
        $elements = array();

        foreach ($items as $delta => $item) {
            $url = $item->getUrl();
            $elements[$delta] = array(
                '#theme' => 'page_facebook_iframe',
                '#url' => $url,
            );
        }

        return $elements;
    }
}