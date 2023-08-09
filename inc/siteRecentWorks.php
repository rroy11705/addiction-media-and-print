<section id="recent-works" style="padding-top: 60px; margin-top: -60px;">
    <div class="recent-works-headers">
        <div class="recent-works-header">
        <h2>Recent Works</h2>
        </div>
    </div>
    <div id="video-carousel" class="splide" aria-label="Beautiful Images">
        <div class="splide__track">
            <ul class="splide__list">
                <?php
					$qry = $conn->query("SELECT * FROM `recent_work`");
					while($row= $qry->fetch_assoc()):
					?>
					<li class="splide__slide">
                        <?php if($row['attachment'] != '') { ?>
                            <a href="<?php echo validate_image($row['attachment']) ?>" title="<?php echo $row['name'] ?>" class="video">
                                <img src="<?php echo validate_image($row['thumbnail']) ?>" alt="<?php echo validate_image($row['name']) ?>" />
                            </a>
                        <?php } else { ?>
                            <a href="<?php echo validate_image($row['thumbnail']) ?>"  title="<?php echo $row['name'] ?>"  class="image">
                                <img src="<?php echo validate_image($row['thumbnail']) ?>" alt="<?php echo validate_image($row['name']) ?>"  />
                            </a>
                        <?php } ?>
                    </li>	
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
    <div id="awards" class="recent-works-headers" style="padding-top: 60px; margin-top: -60px;">
        <div class="recent-works-header">
            <h2>Awards</h2>
        </div>
    </div>
    <div class="awards-wrapper" style="display: flex; flex-direction: row; gap: 20px; padding: 24px 0;">
        <div style="width: 100px;height: 100px;border-radius:50%;background:#808080"></div>
        <div style="width: 100px;height: 100px;border-radius:50%;background:#808080"></div>
        <div style="width: 100px;height: 100px;border-radius:50%;background:#808080"></div>
    </div>
</section>