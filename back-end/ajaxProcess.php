<?php

	include('library.php');

	/*if(!isset($_POST['dataAction'])){
		die('API ERROR.');
	}*/

	$dataAction = $_REQUEST['dataAction'];


	if($dataAction == 'seachPrice'){

		$price = $_POST['price'];

		$jsondata = get_include_contents('data/precos.json');	

		$nJsonData = json_decode($jsondata, true);

		$searchArray = array();

		foreach($nJsonData as $index => $v){

			if( $v['valor'] <= $price){
				$searchArray[] = $v;
			}		

		}


		$html = "";

		foreach ($searchArray as $v) {
				

		$html .='	<div class="col-md-12">
			            <div class="well well-sm">
			                <div class="row">
			                    <div class="col-xs-3 col-md-3 text-center">
			                        <img src="'. $v['src'].'" alt="bootsnipp" class="img-rounded img-responsive">
			                    </div>
			                    <div class="col-xs-9 col-md-9 section-box">
			                        <h2>
			                            '.$v['computador'].'<a href="#nolink" target="_blank"><span class="glyphicon glyphicon-new-window">
			                            </span></a>
			                        </h2>
			                        <p><b>R$ '.number_format($v['valor'],2, '.', ',').'</b></p>
			                        <hr>
			                        <div class="row rating-desc">
			                            <div class="col-md-12">
			                                <span class="glyphicon glyphicon-heart"></span><span class="glyphicon glyphicon-heart">
			                                </span><span class="glyphicon glyphicon-heart"></span><span class="glyphicon glyphicon-heart">
			                                </span><span class="glyphicon glyphicon-heart"></span>(36)<span class="separator">|</span>
			                                <span class="glyphicon glyphicon-comment"></span>(100 Comentarios)
			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>';



		}

		die($html);
		
	}

?>