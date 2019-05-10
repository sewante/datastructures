<?php
/**
 * Algorithms covered:
 *  - linear search.
 *  - binary search.
 */

function linear_search($key, $list)
    // Search for $key in $list. If found, return its location,
    // otherwise, return -1.
{
    for ($i=0; $i<count($list); ++$i) {
        if (strcmp($key, $list[$i]) == 0) {  // Found.
            return $i;
        }
    }
    
    return -1;  // Key not found.
}

function binary_search($key, $list, $lo, $hi)
    // Pre: $list is sorted.
    // Search for $key in $list. If found, return its location,
    // otherwise, return -1.
{
    $lo = 0;
    $hi = count($list) - 1;
    while ($lo <= $hi) {
        $mid = (int) (($lo + $hi) / 2);
        if (strcmp($key, $list[$mid]) == 0) {  // Found.
            return $mid;
        }
        
        if (strcmp($key, $list[$mid]) < 0) {
            $hi = $mid-1;
        }
        else {
            $lo = $mid+1;
        }
    }
    
    return -1;  // $lo and $hi have crossed, key not found.
}
?>