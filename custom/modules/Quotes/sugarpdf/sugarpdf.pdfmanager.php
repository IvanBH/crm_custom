<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/Sugarpdf/sugarpdf/sugarpdf.smarty.php');
require_once('include/Sugarpdf/Sugarpdf.php');


class QuotesSugarpdfPdfmanager extends SugarpdfPdfmanager{

    function process(){
        $this->preDisplay();
        $this->display();

    }

    public function Header() {
        global $locale;

        $this->SetMargins(PDF_MARGIN_LEFT, 23, PDF_MARGIN_RIGHT);
        $this->setHeaderMargin(PDF_MARGIN_HEADER);
      
        $header = '<p>&nbsp;</p><img src="custom/themes/default/images/logo.png" alt="png" width="500px" height="88px" border="0" />';
       
      $this->SetFont(PDF_FONT_NAME_MAIN, 'B', 8);
      $this->writeHTML($header, true, false, true, false, '');
    }

    public function Footer(){
      $footer = '<table width="100%" >
      <tr>
      <td align="right"><img src="custom/themes/default/images/cert.png" alt="png" width="135px" height="135px" border="0" /></td>
      </tr>
      </table> ';

      $this->SetFont(PDF_FONT_NAME_MAIN, '', 8);
      $this->SetTextColor(0,0,0);
      $this->writeHTML($footer, true, false, true, false, '');
  }

    function preDisplay(){
        global $sugar_config, $app_list_strings;

        //$this->templateLocation = "cache/modules/PdfManager/tpls";
        parent::predisplay();

        // $this->_initSmartyInstance();
        $this->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
        $this->setPrintHeader(true);
        $this->setPrintFooter(true);
        $this->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $this->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
        $this->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP-10, PDF_MARGIN_RIGHT);
        $this->SetHeaderMargin(PDF_MARGIN_HEADER);
        $this->SetFooterMargin(25);//SetFooterMargin(PDF_MARGIN_FOOTER);
        $this->SetFont(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN);
        $this->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        //Adds a predisplay page

        $id = $this->bean->id;
        $totales = 0;
        $linea = array();
        $lineas = array();
        $envio = 0;
        $envioA = 0;

        $query="SELECT p.quantity,p.description  as description,pc.desc_producto_c as nota, p.discount_price, p.total_amount ,q.total as totalC, discount_amount as descuento, envio_linea_c as envio
        from products p
        inner join products_cstm pc on p.id=pc.id_c
        inner join quotes q on p.quote_id=q.id
        where q.id='{$id}' AND p.deleted=0";

        $conn = $GLOBALS['db']->getConnection();
        $productosStmt = $conn->executeQuery($query);
        $productos = $productosStmt->fetchAll();
       // _ppl($productos);
        foreach($productos as $producto){
          
          $desc = $producto['descuento']; 
          $precio = $producto['envio'];
          $precioU = ($precio - ($precio * ($desc / 100)));
         //money_format('%.2n', $number)
          $envio = number_format($producto['envio'],2);
          $linea['cantidad'] =  $producto['quantity'];
          $linea['clave']= $producto['nota'];
          $linea['precio_unitario'] = number_format($precio,2);
          $total = $producto['total_amount'];
          $linea['total'] = number_format($total,2);
          $totales = $totales + $total;
         // _ppl($totales);
          array_push($lineas,$linea);
        }

        //$totalC = $totales + $iva;
        $nombreMesIngles = date('F');

        // Array asociativo de nombres de meses en español
        $mesesEnEspañol = array(
            'January' => 'Enero',
            'February' => 'Febrero',
            'March' => 'Marzo',
            'April' => 'Abril',
            'May' => 'Mayo',
            'June' => 'Junio',
            'July' => 'Julio',
            'August' => 'Agosto',
            'September' => 'Septiembre',
            'October' => 'Octubre',
            'November' => 'Noviembre',
            'December' => 'Diciembre'
        );

        // Obtener el nombre del mes en español
        $mes = $mesesEnEspañol[$nombreMesIngles];
        $fecha = date('d').' '.$mes.' '.date('Y');
        //$totales = $totales + $envio;

        $this->ss->assign('fecha', $fecha);
        $this->ss->assign('lineas', $lineas);      
        $this->ss->assign('totales', number_format($totales,2));         

    }

}//class
