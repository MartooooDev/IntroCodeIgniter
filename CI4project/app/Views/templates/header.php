<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Igniter tutorial</title>
</head>
<body>
    <h1><?= esc($title) ?> </h1>
    <!-- esc() é uma função global do code igniter p/ previnir ataques XSS -->


<!-- Sim, o header só tem abertura de html, não fechamento. O fechamento vai estar no footer.php -->