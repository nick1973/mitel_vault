<?php
// Creating the new document...
$phpWord = new \PhpOffice\PhpWord\PhpWord();

/* Note: any element you append to a document must reside inside of a Section. */

// Adding an empty Section to the document...
$section = $phpWord->addSection();
// Adding Text element to the Section having font styled by default...
$section->addText(
htmlspecialchars(
'AX Record'
),
        array('name' => 'Tahoma', 'size' => 18)
);

$section->addTextBreak(1);
//$section->addText(htmlspecialchars('Fancy table'));

$styleTable = array('borderSize' => 6, 'borderColor' => '006699', 'cellMargin' => 80);
$styleFirstRow = array('borderBottomSize' => 18, 'borderBottomColor' => '0000FF', 'bgColor' => '66BBFF');
$styleCell = array('valign' => 'center');
$styleCellBTLR = array('valign' => 'center', 'textDirection' => \PhpOffice\PhpWord\Style\Cell::TEXT_DIR_BTLR);
$fontStyle = array('bold' => true, 'align' => 'center');
$phpWord->addTableStyle('Fancy Table', $styleTable, $styleFirstRow);
$table = $section->addTable('Fancy Table');
$table->addRow(900);
$table->addCell(2000, $styleCell)->addText(htmlspecialchars('Product'), $fontStyle);
$table->addCell(2000, $styleCell)->addText(htmlspecialchars('Qty'), $fontStyle);
$table->addCell(2000, $styleCell)->addText(htmlspecialchars('Cost'), $fontStyle);
$table->addCell(2000, $styleCell)->addText(htmlspecialchars('Subtotal'), $fontStyle);
//$table->addCell(500, $styleCellBTLR)->addText(htmlspecialchars('Row 5'), $fontStyle);
//for ($i = 1; $i <= 8; $i++) {
    foreach($cart as $row)
        {
    $table->addRow();
    $table->addCell(2000)->addText(htmlspecialchars("{$row->name}"));
    $table->addCell(2000)->addText(htmlspecialchars("{$row->qty}"));
    $table->addCell(2000)->addText(htmlspecialchars("{$row->price}"));
    $table->addCell(2000)->addText(htmlspecialchars("{$row->subtotal}"));

    //$table->addCell(500)->addText(htmlspecialchars($text));
        }
//}


    $tableStyle = array(
            'borderColor' => '006699',
            'borderSize' => 6,
            'cellMargin' => 50
    );
    $firstRowStyle = array('bgColor' => '66BBFF');
    $phpWord->addTableStyle('myTable', $tableStyle, $firstRowStyle);
    $table = $section->addTable('myTable');



// Adding Text element with font customized using named font style...
//$fontStyleName = 'oneUserDefinedStyle';
//$phpWord->addFontStyle(
//$fontStyleName,
//array('name' => 'Tahoma', 'size' => 10, 'color' => '1B2232', 'bold' => true)
//);
//$section->addText(
//htmlspecialchars(
//'"The greatest accomplishment is not in never falling, '
//. 'but in rising again after you fall." '
//. '(Vince Lombardi)'
//),
//$fontStyleName
//);

// Adding Text element with font customized using explicitly created font style object...
//$fontStyle = new \PhpOffice\PhpWord\Style\Font();
//$fontStyle->setBold(true);
//$fontStyle->setName('Tahoma');
//$fontStyle->setSize(13);
//$myTextElement = $section->addText(
//htmlspecialchars('Qty '. $row->qty)

//);
//$myTextElement->setFontStyle($fontStyle);

// Saving the document as OOXML file...
//$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
//$objWriter->save('helloWorld22.docx');
//return response()->download($pathToFile);

// Saving the document as ODF file...
//$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'ODText');
//$objWriter->save('helloWorld.odt');

// Saving the document as HTML file...
//$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'HTML');
//$objWriter->save('helloWorld.html');

$file = 'HelloWorld.docx';
header("Content-Description: File Transfer");
header('Content-Disposition: attachment; filename="' . $file . '"');
header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Transfer-Encoding: binary');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Expires: 0');
$xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$xmlWriter->save("php://output");
