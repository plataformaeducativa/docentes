<?php
class docente{
	static function verprofesores($filtro1){
		if($filtro1=="true"){ $filtro = "tutoresvirtuales='1' and"; }
		$respcont = mysql_query("select * from comp_docente where $filtro periodo20141='1' ORDER BY apellido ASC");
		while($profesor = mysql_fetch_array($respcont)){ ?>
<div class="col-1-3 space">
			    <div class="content fondito">
			        <div class="foto">
			        	<img class="lazy" data-original="<?=docente::verfoto($profesor['id_docente']); ?>" title="<?=$profesor['nombre']." ".$profesor['apellido']; ?>">
			        </div>
			        <div class="detalles">
			            <span class="nombre"><?=$profesor['nombre']." ".$profesor['apellido']; ?></span>
			            <div class="btn1 clr1"><span class="icon-profile"></span><span class="profe" data-id="<?=$profesor['id_docente']; ?>">Ver Detalles</span></div>
			        </div>
			    </div>
			</div>
			<?php
		}
	}
	static function verfoto($id){
		$respcont = mysql_query("select * from comp_docente where id_docente='$id'");
		$foto = mysql_fetch_array($respcont);
		if(!empty($foto['foto'])){return "http://docentes.plataforma.edu.pe/fotos/".$foto['foto'];}
		else {return "http://docentes.plataforma.edu.pe/img/sin-perfil.jpg";}
	}
}