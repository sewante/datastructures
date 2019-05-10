<?php
/**
 * Algorithms covered:
 *  - Bubble sort.
 *  - Merge sort.
 *  - Quick sort.
 *  - Selection sort.
 *  - Insertion sort.
 */

/* Utility functions. */
function swap(&$array, $m, $n)
    // Swaps the elements of $array at positions $m and $n.
{
    $temp = $array[$m];
    $array[$m] = $array[$n];
    $array[$n] = $temp;
}

function merge_ordered($left, $right)
    // Takes two ordered lists and makes them one.
{
    $list = array();
    $i = 0;
    $j = 0;
    while ($i<count($left) && $j<count($right)) {
        if (strcasecmp($left[$i], $right[$j]) < 1) {
            array_push($list, $left[$i]);
            ++$i;
        }
        else {
            array_push($list, $right[$j]);
            ++$j;
        }
    }
    
    while ($i < count($left)) {
        array_push($list, $left[$i]);
        ++$i;
    }
    
    while ($j < count($right)) {
        array_push($list, $right[$j]);
        ++$j;
    }
    
    return $list;
}
/* End Utilities */

/* Sorting algorithms */
/* Bubble sort */
function bubble_sort(&$list)
   // Pre: $list != NULL.
   // Post: $list has been sorted into values of ascending order.
{
    for ($i=0; $i<count($list); ++$i) {
        for ($j=0; $j<count($list); ++$j) {
            if (strcasecmp($list[$i], $list[$j]) < 0) {
                swap($list, $i, $j);
            }
        }
    }
}

/* Merge sort */
function merge_sort($list)
    // Pre: $list != null.
    // Post: $list has been sorted into values of ascending order.
{
    if (count($list) == 1) {  // Already sorted.
        return $list;
    }
    
    // Split the array into two
    $mid = (int) (count($list) / 2);
    $left = array_slice($list, 0, $mid);
    $right = array_slice($list, $mid);
    
    return merge_ordered(merge_sort($left), merge_sort($right));
}

/* Insertion sort */
function insertion_sort(&$list)
{
    $unsorted = 1;
    while ($unsorted < count($list)) {
        $hold = $list[$unsorted];
        $i = $unsorted-1;
        
        while ($i>=0 && (strcasecmp($hold, $list[$i]) < 1)) {
            $list[$i+1] = $list[$i];
            $i -= 1;
        }
        
        $list[$i+1] = $hold;
        $unsorted += 1;
    }
}

/* Quick sort */
function quick_sort($list)
{
    if( count( $list ) < 2 ) {
        return $list;
    }
    $left = $right = array( );
    reset( $list );
    $pivot_key  = key( $list );
    $pivot  = array_shift( $list );
    foreach( $list as $k => $v ) {
        if( $v < $pivot )
            $left[$k] = $v;
        else
            $right[$k] = $v;
    }
    return array_merge(quick_sort($left), array($pivot_key => $pivot), quick_sort($right));
}

function selection_sort(&$list)
{
    /* $list[0] to $list[n-1] is the array to sort */
    $n = count($list);
    
    /* advance the position through the entire array */
    /*   (could do j < n-1 because single element is also min element) */
    for ($j = 0; $j < $n-1; $j++) {
        /* find the min element in the unsorted $list[j .. n-1] */
        
        /* assume the min is the first element */
        $iMin = $j;
        /* test against elements after j to find the smallest */
        for ($i = $j+1; $i < $n; $i++) {
            /* if this element is less, then it is the new minimum */
            if (strcasecmp($list[$i], $list[$iMin]) < 0) {
                /* found new minimum; remember its index */
                $iMin = $i;
            }
        }
        
        if($iMin != $j) 
        {
            swap($list, $j, $iMin);
        }
    }
}
/* End Sorting algorithms */
?>
