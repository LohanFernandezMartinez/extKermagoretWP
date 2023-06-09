<?php

class Veep_Diff
{

    /**
     * Compare "veep_settings" with "veep_settings_last_index" to determine
     * whether the user needs to rebuild the pages
     * @since 3.0.9
     */
    function is_regeneration_needed() {
        $s1 = VEEP()->helper->load_settings();
        $s2 = VEEP()->helper->load_settings( true );

        // The facet count is different
        if ( count( $s1['facets'] ) !== count( $s2['facets'] ) ) {
            return true;
        }

        // Compare settings
        $to_check = [ 'thousands_separator', 'decimal_separator', 'wc_enable_variations', 'wc_index_all' ];

        foreach ( $to_check as $name ) {
            $attr1 = $this->get_attr( $name, $s1['settings'] );
            $attr2 = $this->get_attr( $name, $s2['settings'] );
            if ( $attr1 !== $attr2 ) {
                return true;
            }
        }

        $f1 = $s1['facets'];
        $f2 = $s2['facets'];

        // Sort the facets alphabetically
        usort( $f1, function( $a, $b ) {
            return strcmp( $a['name'], $b['name'] );
        });

        usort( $f2, function( $a, $b ) {
            return strcmp( $a['name'], $b['name'] );
        });

        // Compare facet properties
        $to_check = [ 'name', 'type', 'source', 'source_other', 'parent_term', 'hierarchical', 'modifier_type', 'modifier_values' ];

        foreach ( $f1 as $index => $facet ) {
            foreach ( $to_check as $attr ) {
                $attr1 = $this->get_attr( $attr, $facet );
                $attr2 = $this->get_attr( $attr, $f2[ $index ] );
                if ( $attr1 !== $attr2 ) {
                    return true;
                }
            }
        }

        return false;
    }


    /**
     * Get an array element
     * @since 3.0.9
     */
    function get_attr( $name, $collection ) {
        if ( isset( $collection[ $name ] ) ) {
            return $collection[ $name ];
        }

        return false;
    }
}
