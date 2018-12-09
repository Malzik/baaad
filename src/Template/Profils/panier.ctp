<?php
    foreach ($commandes as $row)
    {
    ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-secondary mb-3" style="max-width: 100%; margin-top: 2rem">
                        <div class="card-header">
                            <b>N°<?= $row->id ?></b>
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-2"><img src="<?= $this->Url->image($row->image) ?>" /></div>
                                <div class="col-sm-8">
                                    <h5>
                                        <b><?= $row->title ?></b>
                                    </h5>
                                    <?= $row->description ?>
                                </div>
                                <div class="col-sm-2 text-center"><b><span class="align-middle h5"><?= $row->price ?> €</span></b></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
?>
<script>
    $('.close').on('click',function() {
        bootbox.confirm({
            message: "Voulez-vous vraiment supprimer votre commande du panier ?",
            buttons: {
                confirm: {
                    label: '<i class="fa fa-check"></i> Oui'
                },
                cancel: {
                    label: '<i class="fa fa-times"></i> Non'
                }
            },
            callback: function (result) {
                if(result)
                    $('.card').remove();
            }
        })
    });
</script>