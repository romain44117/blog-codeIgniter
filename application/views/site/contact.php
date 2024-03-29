<div class="container">
    <div class="row">
        <h1><?= $title ?> </h1>
    </div>
    <div class="row">
        <?= form_open(base_url('site/contact'), ['class' => 'form-horizontal']); ?>
        <div class="form-group">
            <?= form_label("Votre nom&nbsp;:", "name", ['class' => "col-md-2 control-label "]) ?>
            <div class="col-md-10 <?= empty( form_error('name')) ?'':'has-error' ?>">
                <?= form_input(['name' => "name", 'id' => "name", 'class' => 'form-control'], set_value('name')) ?>
                <span class="help-block"><?= form_error('name'); ?></span>
            </div>
        </div>
        <div class="form-group">
            <?= form_label("Votre e-mail&nbsp;:", "email", ['class' => "col-md-2 control-label "]) ?>
            <div class="col-md-10 <?= empty( form_error('email')) ?'':'has-error' ?>">
                <?= form_input(['name' => "email", 'id' => "email", 'type' => 'email', 'class' => 'form-control'], set_value('email')) ?>
                <span class="help-block"><?= form_error('email'); ?></span>
            </div>
        </div>
        <div class="form-group">
            <?= form_label("Titre&nbsp;:", "title", ['class' => "col-md-2 control-label "]) ?>
            <div class="col-md-10 <?= empty( form_error('title')) ?'':'has-error' ?>">
                <?= form_input(['name' => "title", 'id' => "title", 'class' => 'form-control'], set_value('title')) ?>
                <span class="help-block"><?= form_error('title'); ?></span>
            </div>
        </div>
        <div class="form-group">
            <?= form_label("Message&nbsp;:", "message", ['class' => "col-md-2 control-label "]) ?>
            <div class="col-md-10 <?= empty( form_error('message')) ?'':'has-error' ?>">
                <?= form_textarea(['name' => "message", 'id' => "message", 'class' => 'form-control'], set_value('message')) ?>
                <span class="help-block"><?= form_error('message'); ?></span>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <?= form_submit("send", "Envoyer", ['class' => "btn btn-default"]); ?>
            </div>
        </div>
        <?= form_close() ?>
    </div>
</div>