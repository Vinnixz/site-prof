<?php
// Caminho para a imagem original
$imagemOriginal = 'marvelous.jpg';

// Largura e altura desejadas da imagem redimensionada
$novaLargura = 1000;
$novaAltura = 520;

// Obtém as dimensões da imagem original
list($larguraOriginal, $alturaOriginal) = getimagesize($imagemOriginal);

// Cria uma imagem em branco com as dimensões desejadas
$novaImagem = imagecreatetruecolor($novaLargura, $novaAltura);

// Carrega a imagem original
$imagem = imagecreatefromjpeg($imagemOriginal);

// Redimensiona a imagem original para a nova largura e altura
imagecopyresized($novaImagem, $imagem, 0, 0, 0, 0, $novaLargura, $novaAltura, $larguraOriginal, $alturaOriginal);

// Salva a nova imagem redimensionada em um arquivo
imagejpeg($novaImagem, 'imagem_redimensionada.jpg');

// Libera a memória
imagedestroy($novaImagem);

?>