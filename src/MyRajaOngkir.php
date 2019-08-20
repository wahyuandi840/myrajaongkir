<?php

namespace MyRajaOngkir;

use MyRajaOngkir\App\Provinsi;
use MyRajaOngkir\App\Kota;
use MyRajaOngkir\App\Kecamatan;
use MyRajaOngkir\App\Cost;

class MyRajaOngkir {

	/* Singleton */
	protected static function GetInstance(){
		if( self::$obj == null ){
			self::$obj = new MyRajaOngkir;
		}

		return self::$obj;
	}
	protected static $obj = null;
	/* End Singleton */

	public static function __callStatic($name, $arguments){
		self::GetInstance()->__call($name, $arguments);
	}

	public function Provinsi(){
		return new Provinsi;
	}

	public function Kota(){
		return new Kota;
	}
	
	public function Kecamatan(){
		return new Kecamatan;
	}

	public function Cost($attributes){
		return new Cost($attributes);
	}

}
