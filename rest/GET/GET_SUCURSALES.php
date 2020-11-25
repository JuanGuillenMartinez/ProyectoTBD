<?php
<<<<<<< HEAD
	include_once '/var/www/httpdocs/rest/SQLGlobal.php';
=======
	require '/rest/SQLGlobal.php';
>>>>>>> d4e20cb0e08ddca92069422f73ffcd3f3aaf0a7a

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