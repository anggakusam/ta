<?php  
 function fetch_data()  
 {  
      $output = '';  
			include "../koneksi.php";
      $sql = "SELECT * from kunjungan_umum WHERE no_reg = ".$_GET['no_reg']." ";
			$query = mysqli_query($con, $sql);
			$nomer = 1;
			if ($query) {
			
				while ($data = mysqli_fetch_array($query)) {   
      $output .= "<tr>
									<td>". $nomer ."</td>
									<td>". $data['tgl_kunjungan'] ."</td>
									<td>". $data['nama'] ."</td>
									<td>". $data['keluhan'] ."</td>
									<td>". $data['terapi'] ."</td>
									<td>". $data['keterangan'] ."</td>
								</tr>  
            ";  
      }  
      return $output;  
 }  
 if(isset($_POST["kunjungan_umum"]))  
 {  
      require_once('/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Generate HTML Table Data To PDF From MySQL Database Using TCPDF In PHP");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 11);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  
      <h4 align="center">Generate HTML Table Data To PDF From MySQL Database Using TCPDF In PHP</h4><br /> 
      <table border="1" cellspacing="0" cellpadding="3">  
							<tr>
										<th width="30%">No</th>
										<th style="border:1px solid#000;">Tanggal Kunjungan</th>
										<th style="border:1px solid#000;">Nama</th>
										<th style="border:1px solid#000;">keluhan</th>
										<th style="border:1px solid#000;">Terapi</th>
										<th style="border:1px solid#000;">Keterangan</th>
						</tr>
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('file.pdf', 'I');  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>SoftAOX | Generate HTML Table Data To PDF From MySQL Database Using TCPDF In PHP</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />            
      </head>  
      <body>  
           <br />
           <div class="container">  
                <h4 align="center"> Generate HTML Table Data To PDF From MySQL Database Using TCPDF In PHP</h4><br />  
                <div class="table-responsive">  
                	<div class="col-md-12" align="right">
                     <form method="post">  
                          <input type="submit" name="generate_pdf" class="btn btn-success" value="Generate PDF" />  
                     </form>  
                     </div>
                     <br/>
                     <br/>
                     <table class="table table-bordered">  
										 <tr>
														<th width="30%">No</th>
														<th style="border:1px solid#000;">Tanggal Kunjungan</th>
														<th style="border:1px solid#000;">Nama</th>
														<th style="border:1px solid#000;">keluhan</th>
														<th style="border:1px solid#000;">Terapi</th>
														<th style="border:1px solid#000;">Keterangan</th>
										</tr> 
                     <?php  
                     echo fetch_data();  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
</html>  