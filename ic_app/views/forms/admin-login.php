<div class="admin-login col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <h1>CMC Analytics</h1>
    <h2>Intranet communications</h2>
    <?php echo form_open('/index.php/admin/login') ?>
        <!-- email -->
        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control" required>
            <!-- password -->
            <label for="password">Contraseña</label>
            <input type="password" name="password" class="form-control" required>
            <input type="submit" value="Ingresar" class="btn btn-success submit">
        </div>
    <?php echo form_close(); ?>
</div>


<form></form>