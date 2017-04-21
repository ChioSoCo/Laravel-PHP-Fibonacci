<?php namespace App\Functions;

use Litipk\BigNumbers\Decimal;

class Fibonacci {

	private static $cache = [];

	/**
	 * Recursive method that calculates a Fibonacci Value.
	 *
	 * @param  int  $id
	 * @return int
	 */
    public static function fibonacciCalculation( $number ) {

		if ( array_key_exists ( $number, static::$cache ) ) {
			return static::$cache[$number];
		}
		else {

			if ( $number > 1 ) {
				$first = Decimal::create( static::fibonacciCalculation( $number - 1 ) , null );
				$second = Decimal::create( static::fibonacciCalculation( $number - 2 ) , null );
				$result = $first->add($second);
				static::$cache[$number] = $result;
				return $result;
			}

			return Decimal::create( $number , null);
		}

    }

    /**
	 * Returns all the detail of a Finonacci Value
	 * use fibonacciCalculation
	 *
	 * @param  int  $id
	 * @return Object
	 */
    public static function fibonacciObject( $number ){

    	$return = [];

    	$aux = null;

    	for ( $i = 0 ; $i <= $number; $i++ ) {
    		$aux["n"] = $i;
    		$aux["value"] = (string)self::fibonacciCalculation( $i );  
    		array_push( $return , $aux );
    	}

    	return $return;
    }

}

