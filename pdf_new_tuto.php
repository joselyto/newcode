<?php
function fetch_data()
{
    $output ='';
    $conn = mysqli_connect("localhost", "root","","pnlcd");
    $sql = "SELECT * FROM zone_sante";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result){
        $output .= '<tr>
                            <td>'.$row["id_zs"].'</td>
                            <td>'.$row["id_dps"].'</td>
                            <td>'.$row["libelle"].'</td>
                    </tr>
                        ';
    }
    return $output;
}
if(isset($_POST["generate_pdf"]))
{
    require_once('TCPDF-main/tcpdf.php');
    $obj_pdf=new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $obj_pdf->SetCreator(PDF_CREATOR);
    $obj_pdf->SetTitle("MINISTERE DE LA SANTE PUBLIQUE");
    $obj_pdf->setHeaderData('','', PDF_HEADER_TITLE, PDF_HEADER_STRING);
    $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
    $obj_pdf->setFooterFont(Array('helvetica'));
    

}


?>