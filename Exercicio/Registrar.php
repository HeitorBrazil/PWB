<html>
    <h1>REGISTRAR ALUNO</h1>
    <hr>
    <form action="" method="post">
        <p>
            Prontuário: <br>
            <input type="text" name="pront"><br>
        </p>
        <p>
            Nome: <br>
            <input type="text" name="nome"><br>
        </p>
        <p>
            Nota Prova: <br>
            <input type="number" name="prova"><br>
        </p>
        <p>
            Nota Trabalho: <br>
            <input type="number" name="trab"><br>
        </p>

        <p>
            <input type="submit" value="Registrar">
        </p>
    </form>
</html>

<?php
    if(isset($_POST['pront']) && isset($_POST['nome']) && isset($_POST['prova']) && isset($_POST['trab']) != "") {
        $pront = $_POST['pront'];
        $nome = $_POST['nome'];
        $prova = $_POST['prova'];
        $trab = $_POST['trab'];

        $arq = fopen("alunos.txt", "a");
        $media = ($prova + $trabalho) / 2;
        $status = ($media >= 6) ? "Aprovado" : "Reprovado";

        fwrite($arq, "Prontuario: ".$pront."\nNome: ".$nome."\nNota Prova: ".$prova."\nNota Trabalho: ".$trab."\nMedia: ".$media."\nStatus: ".$status."\n\n");
    }
?>
