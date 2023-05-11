<?php
//váriaveis do html e o diretório
$dir = "diretorio";
$file1 = $_FILES['imagem'];
$file2 = $_FILES['pdf'];

//novos nomes para os arquivos
$newName1 = "teste_imagem.jpg";
$newName2 = "teste_pdf.pdf";

if (move_uploaded_file($file1["tmp_name"], "$dir/".$newName1)) {
//arquivo 1 enviado 
} if 
    (move_uploaded_file($file2["tmp_name"], "$dir/".$newName2)){
       //novas váriaveis para o PDF 
         $imgSrc = "$dir/".$newName1;
         $pdfLink = "$dir/".$newName2;
    //    mostrar escrito o nome dos arquivos
         echo "Arquivos enviados com sucesso! <br>
         <a href =$pdfLink >PDF</a> <br>
         <img src=$imgSrc height= 500px weight= 500px>";
//arquivo 2 enviado
    } else {
        echo "Error arquivos não enviados!";
    }?>