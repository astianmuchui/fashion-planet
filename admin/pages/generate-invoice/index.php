
<?php    
    require './fpdf.php';
    class myPDF extends FPDF{
        function Fetch(){
            require '../config.php';
            if(isset($_GET['AreaID'])){
                $id = $_GET['AreaID'];
            }else{
                header("Location: ../orders");
            }
            $this->SetFont('Helvetica','B',13);
            $query =  "SELECT * FROM orders WHERE id = $id";
            $result = mysqli_query($conn,$query);
            $order = mysqli_fetch_assoc($result);
            mysqli_free_result($result);
            mysqli_close($conn);
        }
        function header(){
            require '../config.php';
            if(isset($_GET['AreaID'])){
                $id = $_GET['AreaID'];
            }else{
                header("Location: ../orders");
            }
            $this->SetFont('Helvetica','B',13);
            $query =  "SELECT * FROM orders WHERE id = $id";
            $result = mysqli_query($conn,$query);
            $order = mysqli_fetch_assoc($result);
            mysqli_free_result($result);
            mysqli_close($conn);
            $this->Image('../../../images/dark_logo.png',10,5);
            $this->SetFont('Helvetica','B',14);
            $this->Cell(276,5,'Invoice',0,0,'C');
            $this->Cell(276,5,"Issued to:",0,0,'C');
            $this->Ln();
            $this->SetFont('Times','',12);
            // $this->Cell(276,10,'Name');
            $this->Ln(20);
        }  
        function footer(){
            $this->SetY(-15);
            $this->SetFont('Arial','',8);
            $this->Cell(75,5,'Thank you For shopping with Us ',0,0,'C');

        }
         function headerTable(){
            $this->SetFont('Helvetica','B',10);
            $this->Cell(40,10,"Product Name",1,0,'C');
            $this->Cell(30,10,"Cost",1,0,'C');
            $this->Cell(30,10,"Date",1,0,'C');
            $this->Cell(30,10,"Quantity",1,0,'C');
            $this->Cell(30,10,"Total price",1,0,'C');
            $this->Ln();
         }
         function viewTable(){
                require '../config.php';
                if(isset($_GET['AreaID'])){
                    $id = $_GET['AreaID'];
                }else{
                    header("Location: ../orders");
                }
                $this->SetFont('Helvetica','B',13);
                $query =  "SELECT * FROM orders WHERE id = $id";
                $result = mysqli_query($conn,$query);
                $order = mysqli_fetch_assoc($result);
                mysqli_free_result($result);
                mysqli_close($conn);

                $this->SetFont('Helvetica','B',10);
                $this->Cell(40,10,$order['product'],1,0,'C');
                $this->Cell(30,10,$order['cost'],1,0,'C');
                $this->Cell(30,10,substr($order['time'],0,16),1,0,'C');
                $this->Cell(30,10,$order['quantity'],1,0,'C');
                $total = $order['quantity']*$order['cost'];
                $this->Cell(30,10,$total." Kshs",1,0,'C');
                
                $this->Ln();

            
         } 
         function body(){
            require '../config.php';
            if(isset($_GET['AreaID'])){
                $id = $_GET['AreaID'];
            }else{
                header("Location: ../orders");
            }
            $this->SetFont('Helvetica','B',13);
            $query =  "SELECT * FROM orders WHERE id = $id";
            $result = mysqli_query($conn,$query);
            $order = mysqli_fetch_assoc($result);
            mysqli_free_result($result);
            mysqli_close($conn);

            $this->SetFont('Helvetica','I',12);

            $this->Ln();
            $this->Cell(35,5,"Delivery To:",0,0,'C');
            $this->Cell(250,5,$order['name'],0,0,'C');
            $this->Ln();

            $this->Cell(35,5,"County: ",0,0,'C');
            $this->Cell(250,5,$order['county'],0,0,'C');
            $this->Ln();
            
            $this->Cell(35,5,"Phone: ",0,0,'C');
            $this->Cell(250,5,$order['phone'],0,0,'C');
            $this->Ln();
            $this->Cell(50,5,"Order number : ",0,0,'C');
            $this->Cell(205,5,$order['id'],0,0,'C');
            
            $this->Ln();

            $this->Ln();
        }
    }
    $pdf = new myPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('L','A5',0);
    $pdf->body();
    $pdf->headerTable();
    
    $pdf->viewTable();
    
    $pdf->Output();
?>
