<div class="pricing-header px-3 py-5 pb-md-4 mx-auto text-center">
    <h1 class="h1">Offres</h1>
    <p class="lead h3">Notre entreprise propose plusieurs offres pour s'adapter au mieux à votre demande et à vos attentes en thermes de livre-photo.</p>
    <p class="lead">Nous mettons à disposition une application pour que vous puissiez développer vos créations en tous lieux.</p>
</div>
<div class="container">
    <div class="card-deck mb-3 text-center">
        <?php
            foreach ($offres as $row)
            {
                ?>

                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal"><?= $row->libelle ?></h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mt-1 mb-4">
                                <?php
                                    $description = explode('/', $row->description);
                                    for($i = 0; $i < sizeof($description); $i++)
                                    {
                                        ?>
                                        <li><h5 class="font-weight-normal"><?= $description[$i] ?></h5></li>
                                        <?php
                                    }
                                ?>
                            </ul>
                            <h5 class="mt-4 mb-4 card-title pricing-card-title">
                                <small class="text-muted">A partir de</small>
                                <?= $row->prix ?>
                                <small class="text-muted">HT</small>
                            </h5>
                            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Je découvre</button>
                        </div>
                    </div>
                <?php
            }
        ?>
    </div>
</div>