<?php if (!empty($apartment)) : ?>
    <?php foreach ($apartment as $apartments) : ?>
        <div class="col-lg-4 col-md-6 property-item-wrapper" data-type="<?= strtolower($apartments['type']) ?>">
            <div class="property-item rounded overflow-hidden">
                <div class="position-relative overflow-hidden">
                    <?php if (!empty($apartments['image'])) : ?>
                        <a href=""><img class="img-fluid" src="<?= base_url('assets/img/' . $apartments['image']) ?>" alt="invalid image"></a>
                    <?php else : ?>
                        <p>No image available</p>
                    <?php endif; ?>
                    <?php if (!empty($apartments['type'])) : ?>
                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"><?= $apartments['type'] ?></div>
                    <?php else : ?>
                        <p>No type available</p>
                    <?php endif; ?>
                    <?php if (!empty($apartments['status'])) : ?>
                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3" style="font-weight: bold;"><?= $apartments['status'] ?></div>
                    <?php else : ?>
                        <p>No status available</p>
                    <?php endif; ?>
                </div>
                <div class="p-4 pb-0">
                    <?php if (!empty($apartments['price'])) : ?>
                        <h5 class="text-primary mb-3">&#8358;<?= number_format($apartments['price'], 2, '.', ',') ?></h5>
                    <?php endif; ?>
                    <?php if (!empty($apartments['description'])) : ?>
                        <a class="d-block h5 mb-2" href=""><?= $apartments['description'] ?></a>
                    <?php endif; ?>
                    <?php if (!empty($apartments['location'])) : ?>
                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i><?= $apartments['location'] ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php else : ?>
    <p>No apartments found</p>
<?php endif; ?>
