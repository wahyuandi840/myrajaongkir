# rajaongkir API PHP

API ini digunakan  untuk type akun starter dan pro 

**Penggunaan**

Download package dengan composer
```
composer require wahyuandi840/myrajaongkir
```
atau
```
{
	"require": {
		"wahyuandi840/myrajaongkir" : "dev-master"
	}
}
```

Modifikasi file Api.php di vendor/wahyuandi840/myrajaongkir/src/App/Api.php baris ke 11
```php
protected $apiKey = 'isi_api_key_anda_disini';
```

Load package dengan autoload
```php
include 'vendor/autoload.php';
```

Ambil data provinsi
```php
$data = MyRajaOngkir\MyRajaOngkir::Provinsi()->all();
```

Ambil data provinsi berdasarkan id provinsi
```php
$data = MyRajaOngkir\MyRajaOngkir::Provinsi()->find($id);
```

Ambil data provinsi berdasarkan nama provinsi
```php
$data = MyRajaOngkir\MyRajaOngkir::Provinsi()->search('province', $name = "ja")->get();
```

Ambil data kota
```php
$data = MyRajaOngkir\MyRajaOngkir::Kota()->all();
```

Ambil data kota berdasarkan id kota
```php
$data = MyRajaOngkir\MyRajaOngkir::Kota()->find($id);
```

Ambil data kota berdasarkan nama kota
```php
$data = MyRajaOngkir\MyRajaOngkir::Kota()->search('city_name', $name = "banyu")->get();
```

Ambil data kota berdasarkan provinsi
```php
$data = MyRajaOngkir\MyRajaOngkir::Kota()->byProvinsi($provinsi_id)->get();
```

Ambil data kota berdasarkan nama kota di suatu provinsi
```php
$data = MyRajaOngkir\MyRajaOngkir::Kota()->byProvinsi($provinsi_id)->search('city_name', $name)->get();
```
Ambil data Kecamatan
```php
$data = MyRajaOngkir\MyRajaOngkir::Kecamatan()->all();
```
Ambil data Kecamatan berdasarkan nama kecamatan
```php
$data = MyRajaOngkir\MyRajaOngkir::Kecamatan()->search('subdistrict_name', $name = "kranggan")->get();;
```
Ambil data kecataman berdasarkan id kota
```php
$data = MyRajaOngkir\MyRajaOngkir::Kecamatan()->byCity($city_id)->get();
```

Ambil Biaya Pengiriman untuk starter
```php
$data = MyRajaOngkir\MyRajaOngkir::Cost([
	'origin' 		=> 501, // id kota asal
	'destination' 	=> 114, // id kota tujuan
	'weight' 		=> 1700, // berat satuan gram
	'courier' 		=> 'jne', // kode kurir pengantar ( jne / tiki / pos )
])->get();
```
Ambil Biaya Pengiriman untuk pro
```php
$data = MyRajaOngkir\MyRajaOngkir::Cost([
    	'origin' 	        => $origin, // id kota asal
        'originType'            => 'city',
        'destination'           => $destination, // id kota tujuan
        'destinationType'       => 'subdistrict',
    	'weight' 		=> $weight, // berat satuan gram
    	'courier' 		=> $courier, // kode kurir pengantar ( jne / tiki / pos )
    ])->get();
```

Kunjungi [rajaongkir](http://rajaongkir.com/)

Documentasi akun [starter](http://rajaongkir.com/dokumentasi/starter)
Documentasi akun [pro](http://rajaongkir.com/dokumentasi/pro)
