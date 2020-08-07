<?

include("../config/config.php");

foreach(regById('cursos_clases', $pow_post['claseID']) as $class);
$clases = listReg("cursos_clases", "where cursoID='".$class['cursoID']."'", '', 'titulo,asc');

?>

<? foreach($clases as $clase){ ?>

    <? if(yala($_SESSION['user_learn'], $clase['Id'])){ ?>
        <li class="active"><a href="cursos/class/<?=$clase['Id']?>/"><?=$clase['titulo']?></a></li>
        <? $vista = "ok"; ?>
    <? } else { ?>
        <? if($vista=="ok"): ?>
            <li class="active"><a href="cursos/class/<?=$clase['Id']?>/"><?=$clase['titulo']?></a></li>
            <? $vista = "none"; ?>
        <? else : ?>
            <li><?=$clase['titulo']?></li>
        <? endif; ?>
    <? } ?>

<? } ?>