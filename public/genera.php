<?php

// Include the main TCPDF library (search for installation path).
//require_once('tcpdf_include.php');

require_once(__DIR__ . '/../vendor/tecnickcom/tcpdf/examples/tcpdf_include.php');
require('');


// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

	/* PARAMETROS QUE RECIBE DEL FORMULARIO */

	private $oficio;
	private $asunto;
	private $corresponde;
	private $cargo;
	private $dependencia;
	private $lema;
	private $contenido;
    private $firma;
    private $entidad;
	
	public function __construct($oficio, $asunto, $corresponde, $cargo, $dependencia, $lema, $contenido, $firma, $entidad ) {
        parent::__construct();
        $this->oficio = $oficio;
        $this->asunto = $asunto;
		$this->corresponde = $corresponde;
        $this->cargo = $cargo;
		$this->dependencia = $dependencia;
		$this->lema = $lema;
        $this->contenido = $contenido;
        $this->firma = $firma;
        $this->entidad = $entidad;
    }
	
	//Page header
	public function Header() {
		// get the current page break margin
		$bMargin = $this->getBreakMargin();
		// get current auto-page-break mode
		$auto_page_break = $this->AutoPageBreak;
		// disable auto-page-break
		$this->setAutoPageBreak(false, 0);
		// set bacground image
		//$img_file = K_PATH_IMAGES.'aguilaC.jpg';
        $img_file = K_PATH_IMAGES.'';
		$this->Image($img_file, null, 0, 210, 297, '', '', '', false, 300, 'C', false, false, 0);
		$this->Cell(0, 15, '', 0, false, 'E', 0, '', 0, false, 'M', 'M');
		// restore auto-page-break status
		$this->setAutoPageBreak($auto_page_break, $bMargin);
		// set the starting point for the page content
		$this->setPageMark();
	}

	public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-8);
		// $this->setX(150);
        // Set font
        $this->SetFont('helvetica', 'I', 11);
		$this->setTextColor(255, 255, 255);
        // Page number
        $this->Cell(0, 10, 'Pagina '.$this->getAliasNumPage().' de '.$this->getAliasNbPages(), 0, false, 'R', 0, '', 0, false, 'T', 'M');
    }
	public function generarPDF(){
		$this->setCreator(PDF_CREATOR);
		$this->setAuthor('Abisinia BB');
		$this->setTitle('Constancia');



		$this->setHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
		$this->setFooterData(array(0,64,0), array(0,64,128));


		$this->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$this->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

		// set default monospaced font
		$this->setDefaultMonospacedFont(PDF_FONT_MONOSPACED);

		// set margins
		$this->setMargins(25, 32, 25, 0);
		$this->setHeaderMargin(PDF_MARGIN_HEADER);
		$this->setFooterMargin(PDF_MARGIN_FOOTER);

		// set auto page breaks
		$this->setAutoPageBreak(TRUE, 35);

		// set image scale factor
		$this->setImageScale(PDF_IMAGE_SCALE_RATIO);

		$imageFile = './images/numAzul.png';
		// set some language-dependent strings (optional)
		if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
			require_once(dirname(__FILE__).'/lang/eng.php');
			$this->setLanguageArray($l);
		}

		// body formato general
		$this->setFont('times', '', 12);

		$this->AddPage();
		$this->setFormDefaultProp(array('lineWidth'=>1, 'borderStyle'=>'solid', 'fillColor'=>array(255, 255, 200), 'strokeColor'=>array(255, 128, 128)));

		// formato para el cuadro que contiene los datos del oficio
		$this->SetFillColor(255, 255, 255);
		$this->setDrawColor(106,28,50);
		$this->SetFont('times', 'B', 10);
		$txt = 'No. Oficio. ' .strtoupper($this->oficio);
							// CUADRO DE DATOS DEL OFICIO
	
		$this->MultiCell(75, 25, "\n".'Agencia Digital del Estado de Baja California'."\n".$txt."\n". 'Asunto: '. $this->asunto, 1, 'R', 1, 2, '120' ,'15', true);
		$this->Ln(2);
		$this->SetFont('times', '', 10);
		$html = '<div style="font-size:14px; font-style: italic;">
					<label>'.$this->lema.'</label><br/>
				</div>';
		$this->writeHTML($html, true, false, true, false, '');
	
		/* 					SE OBTIENE LA FECHA CON FORMATO EN ESPAÑOL PARA EL MES */
		$day = date('d');
		$mes = date('m');
		$year = date('Y');
		$meses = [
			'01' => 'Enero', '02' => 'Febrero', '03' => 'Marzo', '04' => 'Abril',
			'05' => 'Mayo', '06' => 'Junio', '07' => 'Julio', '08' => 'Agosto',
			'09' => 'Septiembre', '10' => 'Octubre', '11' => 'Noviembre', '12' => 'Diciembre'
		];
		$mesNombre = $meses[$mes];

		/* 					FECHAAAA */
		$html = '<div style="font-size:14px; font-weight:bold; text-align:right;">
					<h3>Tijuana B.C a '.$day. ' de '. $mesNombre . ' de '. $year .'</h3>
				</div>';
		$this->writeHTML($html, true, false, true, false, '');

		/* 					DATOS DE A QUIEN VA DIRIGIDO */
		$html = '<div style="font-size:12px; font-weight:bold; line-height: 1.5;">
					<label>'.strtoupper($this->corresponde).'</label><br/>
					<label>'.strtoupper($this->cargo).'</label><br/>
					<label>'.strtoupper($this->dependencia).'</label><br/>
					<label >P R E S E N T E.-</label>
				</div>';
		$this->writeHTML($html, true, false, true, false, '');

		/* 					CONTENIDO DEL OFICIO */

		// padding del contenido
		// $this->setCellPaddings(1, 1, 1, 1);

		// margin del contenido
		$this->setCellMargins(1, 1, 1, 1);

		$html = '<div style="text-align: justify; font-size:15px;">
					<div>'.$this->contenido.'</div>
				</div>';
		$this->writeHTML($html, true, false, true, false, '');

		/* 					FIRMA DE GABRIEL PALOMBO */
		$html = '<div style="font-size:12px; font-weight:bold; text-align: center; display: grid; justify-content: center; align-items:center;">
					<label>ATENTAMENTE</label><br/><br/>
					<img src="./images/firma.png" style="width:100px; height:100px; text-align: center"><br/>
					<label>'.strtoupper($this->firma).'</label><br/>
					<label>'.strtoupper($this->entidad).'</label>
				</div>';
		$this->writeHTML($html, true, false, true, false, '');

		// remove default header
		$this->setPrintHeader(false);

		// ---------------------------------------------------------

		//Close and output PDF document
		$this->Output('Constancia.pdf', 'I');

	}//llave de generarPDF();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Recibir datos del formulario
	$oficio  = $_POST['oficio'];
	$asunto = $_POST['asunto'];
	$corresponde = $_POST['corresponde'];
	$cargo = $_POST['cargo'];
	$dependencia = $_POST['dependencia'];
	$lema = $_POST['lema'];
	$contenido = $_POST['contenido'];
    $firma = $_POST['firma'];
    $entidad = $_POST['entidad'];

	// Crear una instancia de la clase MiPDF con los datos recibidos
	$pdf = new MYPDF($oficio, $asunto, $corresponde, $cargo, $dependencia, $lema, $contenido, $firma, $entidad);

	// Generar el PDF
	$pdf->generarPDF();
}

?>