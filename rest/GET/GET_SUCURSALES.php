<?php
<<<<<<< HEAD
	include_once dirname( __DIR__ ) . 'rest/SQLGLOBAL.php';
=======
	include_once dirname( __DIR__ ) . '/rest/SQLGLOBAL.php';
>>>>>>> 57d407799fa13c6716985ed07eca531662496302

	if($_SERVER['REQUEST_METHOD']=='GET'){
		try{
			$respuesta = SQLGlobal::selectArray('SELECT * FROM sucursales'
		);
			echo json_encode(array(
				'respuesta'=>'200',
				'estado' => 'Se obtuvieron los datos correctamente',
				'data'=>$respuesta,
				'error'=>''
			));
		}catch(PDOException $e){
			echo json_encode(
				array(
					'respuesta'=>'-1',
					'estado' => 'Ocurrio un error, intentelo mas tarde',
					'data'=>'',
					'error'=>$e->getMessage())
			);
		}
	}

?>