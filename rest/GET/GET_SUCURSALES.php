<?php
<<<<<<< HEAD
	require '/invment.herokuapp.com/rest/SQLGlobal.php';
=======
	require 'https://invment.herokuapp.com/rest/SQLGlobal.php';
>>>>>>> b238574fffd272ca710966af5d2ddd3d86d3077d

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