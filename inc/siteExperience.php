<section id="experience">
    <div class="experience-header">
        <div class="experience-header-container">
            <div class="experience-header-details">
            <div class="experience-details">
                <h4>
                    Who Made Us Experienced
                </h4>
                <p>
                    Welcome to Addiction Print & Media, where creativity meets innovation. We offer a wide range of services including web design & development, app design & development, digital marketing, social media design and wide range of printing services.
                </p>
                <div class="see-more">
                    <a href="#experience_modal" rel="modal:open">
                        <span>See More</span>
                        <svg width="101" height="47" viewBox="0 0 101 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M77.2869 44.3408L98.425 23.2028M77.2869 2.06584L98.425 23.2039M0.161719 23.2047L98.4242 23.2047" stroke="#000000" stroke-width="4.8"/>
                        </svg>
                    </a>
            </div>
            </div>
            <div class="modal" id="experience_modal" role='dialog'>
            <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"></h5>
                    </div>
                    <div class="modal-body experience-header-details">
                        <div class="experience-wrapper">
                        <?php 
                            $p_qry = $conn->query("SELECT * FROM `client`");
                            while($row = $p_qry->fetch_assoc()):
                        ?>
                            <div class="experience-item">
                                <img src="<?php echo $row['image'] ? $row['image'] : '#' ?>" alt="<?php echo $row['name'] ? $row['name'] : '#' ?>" />
                            </div>
                        <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="experience-header-details">
            <div class="experience-wrapper">
                <?php 
                    $p_qry = $conn->query("SELECT * FROM `client` WHERE `featured` = 1");
                    while($row = $p_qry->fetch_assoc()):
                ?>
                    <div class="experience-item">
                        <img src="<?php echo $row['image'] ? $row['image'] : '#' ?>" alt="<?php echo $row['name'] ? $row['name'] : '#' ?>" />
                    </div>
                <?php endwhile; ?>

            </div>
            </div>
        </div>
    </div>
</section>