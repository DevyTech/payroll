<section class="section">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Employee Salary</h5>

                    <!-- Default Accordion -->
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <?php
                        for ($i = 1; $i <= 3; $i++) {
                        ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="<?php echo "heading" . $i; ?>">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo "collapse" . $i; ?>" aria-expanded="true" aria-controls="<?php echo "collapse" . $i; ?>">
                                        Accordion Item #1
                                    </button>
                                </h2>
                                <div id="<?php echo "collapse" . $i; ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo "heading" . $i; ?>" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div><!-- End Default Accordion Example -->

                </div>
            </div>

        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Aproved Salary</h5>

                    <!-- Default Accordion -->
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <?php
                        for ($i = 4; $i <= 6; $i++) {
                        ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="<?php echo "heading" . $i; ?>">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo "collapse" . $i; ?>" aria-expanded="true" aria-controls="<?php echo "collapse" . $i; ?>">
                                        Accordion Item #1
                                    </button>
                                </h2>
                                <div id="<?php echo "collapse" . $i; ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo "heading" . $i; ?>" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div><!-- End Default Accordion Example -->

                </div>
            </div>

        </div>
    </div>
</section>