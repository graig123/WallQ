<?php header("Content-type: text/css"); ?>

body {
    	overflow-x:hidden;
	background-color: white;
}

.module1 {
	position: absolute; 
	top: 0; 
	left: 0; 
	right: 0; 
	bottom: 0;
	z-index: -2;
	height: 2vw;
}

.headerpic {
    background-image: url("../images/Logo.png");
	background-repeat: no-repeat;
	background-color:#efeae2; 
	height: 91px;
	width: 100%;
	position: absolute; 
	top: 0; 
	left: 0; 
	right: 0; 
	bottom: 0;
	z-index: -1;
	}

.triangle-topright {
	width: 0;
	height: 0;
	border-top: 10vw solid white;
	border-left: 102vw solid transparent;
	position: absolute; 
	top: 0; 
	
	right: 0; 
	bottom: 0;

}

.triangle-topleft {
	width: 0;
	height: 0;

<? php header("Content-type: text/css");
require_once "../queque.php";
$q = $GLOBALS['godvar'];
print_r($q);
if ($q[1] > 3) {
	echo 'border-top: 21px solid #db75a4;';
} else {
	echo 'border-top: 21px solid orange;';
}
?>	
	
	border-left: 210px solid transparent;
	position: absolute; 
	top:0px; 
	left: -28px; 
	bottom: 0;

}

.agents {
	font-family:calibri;
	color: #702172;
	font-size: 2vw;
	transform: rotate(5deg); 
	padding: 0;
	text-align: left; 
	text-align: bottom;
	direction: rtl;
	position: absolute; 
	top: -3vw; 
	right: 0; 
	left: 0;
	bottom: 0;
	}

.pagents {
	margin-bottom: 5px;
	margin-top: 5px;
	margin-right: 10px; 
	margin-left: 0px;
	}

.wachtrijbox {
		height: 18.2vw;
		width: 100%;
		margin:0px;
                background: linear-gradient(#efeae2, #efeaf6);
		background-color:#efeae2;
		position: absolute; 
		top: 0; 
		right: 0; 
		left: 0;
		bottom: 0;
		margin-bottom: 0px;
		margin-top: 90px;
		margin-right: 0px; 
		margin-left: 0px;		
        z-index: -1;
}

#pwachtrij-text1 {
		font-family:calibri;
		color: #702172;
		font-size: 7.5vw;
		text-align: center;
				
}

#pwachtrij-waarde1 {
		font-family:calibri;
		color: #702172;
		font-size: 7.5vw;
		text-align: left;
				
}

#pwachtrij-text2 {
		font-family:calibri;
		color: #702172;
		font-size: 7.5vw;
		text-align: center;
				
}

#pwachtrij-waarde2 {
		font-family:calibri;
		color: #702172;
		font-size: 7.5vw;
		text-align: left;
				
}


.pwachtrij-text-alarm {
		font-family:calibri;
		color: orange;
		font-size: 7.5vw;
		text-align: center;
				
}

.pwachtrij-waarde-alarm {
		font-family:calibri;
                color: orange;
		font-size: 7.5vw;
		text-align: center;
				
}



.line {
		height: 0.4vw;
		width: 95%;
		margin:0px;
		background-color: #db75a4;
		position: absolute; 
		top: 0; 
		right: 0; 
		left: 2vw;
		bottom: 0;
		margin-bottom: 0px;
		margin-top: 17.5vw;
		margin-right: 0px; 
		margin-left: 0px;		
		border-top-left-radius: 10px;
                border-top-right-radius: 10px;
}

.tabelbox {
		height: 6.2vw;
		width: 95%;
		margin:0px;
		
		position: absolute; 
		top: 0; 
		right: 0; 
		left: 2vw;
		bottom: 0;
		margin-bottom: 0px;
		margin-top: 17.8vw;
		margin-right: 0px; 
		margin-left: 0px;
                border-bottom-left-radius: 3px;
                border-bottom-right-radius: 3px;
                background: linear-gradient(#702190, #702172);
}

.ptabel { 
		font-family:calibri;
		font-size: 1.7vw;
		font-weight: 900;
		color: white;
		border-width: 0px;
		text-align: center;
    		border: 0px;
		padding-left: 20px;
	
		
}
