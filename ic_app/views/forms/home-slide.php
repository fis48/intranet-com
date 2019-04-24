<div class="container-fluid col-lg-8 col-md-8 col-sm-8 col-xs-12">
    <h1 class="seciont-title">
        <i class="fa fa-newspaper"></i>
        <?php echo $formTitle ?>
    </h1>
    <?php if (isset($slide)): ?>
		<?php echo form_open_multipart('/index.php/admin/updateslide/'.$slide->id) ?>
            <input type="hidden" name="id" value="<?php echo $slide->id ?>">
	<?php else: ?>
		<?php echo form_open_multipart('/admin/addslide') ?>
    <?php endif ?>
        <!-- section -->
        <div class="form-group no-padd col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <label for="section">Sección</label>
            <select name="section" class="form-control" required>
                <option value="">Seleccione sección</option>
                <?php if (isset($slide)): ?>
                    <option value="home"
                        <?php if($slide->section == "home"){echo "selected";} ?>>
                        Inicio
                    </option>
                    <option value="projects"
                        <?php if($slide->section == "projects"){echo "selected";} ?>
                        >Los proyectos
                    </option>
                    <option value="who"
                        <?php if($slide->section == "who"){echo "selected";} ?>>
                        ¿Quién es quién?
                    </option>
                    <option value="glossary"
                    <?php if($slide->section == "glossary"){echo "selected";} ?>>
                        Glosario
                    </option>
                    <option value="questions"
                    <?php if($slide->section == "questions"){echo "selected";} ?>>
                        Preguntas
                    </option>
                    <option value="interact"
                    <?php if($slide->section == "interact"){echo "selected";} ?>>
                        Comentarios
                    </option>
                    <option value="news"
                    <?php if($slide->section == "news"){echo "selected";} ?>>
                        Boletines
                    </option>
                    <option value="events"
                        <?php if($slide->section == "events"){echo "selected";} ?>>
                        Eventos
                    </option>
                <?php else: ?>
                    <option value="home">Inicio</option>
                    <option value="projects">Los proyectos</option>
                    <option value="who">¿Quién es quién?</option>
                    <option value="glossary">Glosario</option>
                    <option value="questions">Preguntas</option>
                    <option value="interact">Comentarios</option>
                    <option value="news">Boletines</option>
                    <option value="events">Eventos</option>
                <?php endif ?>
            </select>
        </div>
        <!-- title -->
        <div class="form-group no-padd col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <label for="title">Título</label>
            <input name="title" type="text" class="form-control"
            <?php if (isset($slide)): ?>
            	value="<?php echo $slide->title ?>"
            <?php endif ?>
            required>
        </div>
        <!-- texto imagen -->
        <div class="form-group no-padd col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <label for="description">Texto de imagen</label>
            <textarea name="description" type="text" class="form-control"
            	><?php if(isset($slide)){echo $slide->description;} ?></textarea>
        </div>
        <!-- image -->
        <div class="form-group no-padd col-lg-12 col-md-12 col-sm-12 col-xs-12">
        	<?php if (isset($slide)): ?>
        		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padd">
        			<p>Imagen actual</p>
    	    		<img src="<?php echo '/home_slide/'.$slide->image ?>" class="img-fluid img-thumbnail">
	        	</div>
        	<?php endif ?>
        	<div class="clear-1"></div>
            <label for="image">Imagen</label>
            <div class="clear-1"></div>
            <input name="image" type="file"
            <?php if (!isset($slide)): ?>
            	required
            <?php endif ?>>
        </div>
        <input type="submit" value="Guardar" class="submit btn-success btn">
	<?php echo form_close() ?>
</div>