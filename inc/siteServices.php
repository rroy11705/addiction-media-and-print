<div class="our-services-headers">
    <div class="our-services-header">
    <h2>Our Services</h2>
    </div>
</div>

<!-- our-services-wrapper -->
<div class="our-services-wrapper">
    <?php 
    $p_qry = $conn->query("SELECT * FROM `service`");
    while($row = $p_qry->fetch_assoc()):
    ?>
    <a class="our-service-item" href="gallery.php?id=<?php echo $row['name'] ? $row['id'] : 'all' ?>">
        <object data-target="gallery.php?id=<?php echo $row['name'] ? $row['id'] : 'all' ?>" data="<?php echo $row['image'] ? $row['image'] : '#' ?>" type="image/svg+xml" id="<?php echo $row['name'] ? $row['name'] : '#' ?>"></object>
        <p><?php echo $row['name'] ? $row['name'] : '#' ?></p>
    </a>
    <?php endwhile; ?>

</div> 
<div class="see-more">
    <a href="gallery.php?id=0">
    <span>See Our Recent Creatives</span>
    <svg width="101" height="47" viewBox="0 0 101 47" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M77.2869 44.3408L98.425 23.2028M77.2869 2.06584L98.425 23.2039M0.161719 23.2047L98.4242 23.2047" stroke="#FFFFFF" stroke-width="4.8"/>
    </svg>
    </a>
</div>