<div class="container">
    <h1>Formulario en CodeIgniter</h1>
    <p>Algún texto de prueba, ñandú</p>
    <div class="form-group">
    <?php $atributos=array('role'=>'form','class'=>'form-group','id'=>'miformulario','name'=>'form');
    echo form_open_multipart(null,$atributos);//utulizar siempre null, recomendado
    ?>
    Campo oculto: <?php echo form_hidden('username','johndoe')?>
    <hr/>
    Campos ocultos:
    <?php
    $datos=array
    (
        'nombre'=>'leo',
        'email'=>'leofilth@hotmail.com',
        'url'=>'www.ejemplo.com'
    );
    echo form_hidden($datos);
    ?>
    <hr/>
    <label class="control-label">Campo input text: </label><?php
    $js='onClick-"algunaFuncion()"';
    $datos=array
    (
        'name'=>'username',
        'id'=>'username',
        'value'=>'leonardo',
        'maxlength'=>'100',
        'class'=>'form-control'
    );
    echo form_input($datos,'',$js);
    ?>
    <label class="control-label">Campo input password text: </label><?php
    //$js='onClick-"algunaFuncion()"';
    $datos=array
    (
        'name'=>'pass',
        'type'=>'password',
        'id'=>'pass',
        'maxlength'=>'100',
        'class'=>'form-control'
    );
    echo form_input($datos);
    ?>
    <label class="control-label">Campo File </label><?php
    //$js='onClick-"algunaFuncion()"';
    $datos=array
    (
        'name'=>'archivo',
        'id'=>'file',
        'type'=>'file',
        //'class'=>'form-control'
    );
    echo form_input($datos);
    ?>
    <label class="control-label">Text Area </label><?php
    //$js='onClick-"algunaFuncion()"';
    $datos=array
    (
        'name'=>'textarea',
        'id'=>'textarea',
        'type'=>'textarea',
        'class'=>'form-control'
    );
    echo form_textarea($datos);
    ?>
    <label class="form-group">Campo de tipo Select:</label>
    <select class="form-control" name="paises">
        <option value="chile">Chile</option>
        <option value="venezuela">Venezuela</option>
        <option value="ecuador">Ecuador</option>
        <option value="peru">Perú</option>
    </select>
        <hr/>
    <?php
    $datos=array
    (
        'name'=>'boton',
        'id'=>'boton',
        'type'=>'submit',
        'class'=>'form-control btn-xs',
        'value'=>'Enviar Mensaje'
    );
    echo form_submit($datos);
    ?>
    <?php
    echo form_close();
    ?>
</div>
</div>
