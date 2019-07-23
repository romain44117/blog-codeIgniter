<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Suppression de l'article</h4>
            </div>
            <div class="modal-body" id="deleteModalContent">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">
                    <?= heading($title); ?>
                    <p>
                        <small>
                            <?= $this->article->author ?>
                            <?php if ($this->auth_user->is_connected) : ?>
                                -
                                <?= $this->article_status->label[$this->article->status]; ?>
                            <?php endif; ?>
                        </small>
                    </p>
                    <hr/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?= nl2br(htmlentities($this->article->content)); ?>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <ul class="nav flex-column nav-pills">
                <li><?= anchor('blog/index', "Liste articles") ?></li>
                <?php if ($this->auth_user->is_connected) : ?>
                    <li>
                        <?= anchor(['blog', 'edition', $this->article->id], "Modifier article") ?>
                    </li>
                    <li>
                        <?= anchor(['blog', 'suppression', $this->article->id], "Supprimer", ['id' => 'menu_delete_article']) ?>
                    </li>
                    <li><?= anchor('blog/edition', "Nouvel article") ?></li>
                    <li><?= anchor(['blog', 'publication', $this->article->id], "Publier") ?></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>