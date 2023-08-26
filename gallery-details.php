<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<?php require_once('inc/header.php') ?>
<?php 
    $service = 0;
    if(isset($_GET['service'])) {
        $service = $_GET['service'];
    }
    $client = NULL;
    if(isset($_GET['client'])) {
        $client = $_GET['client'];
    }
?>
<body>
    <!-- Header
    ================================================== -->
    <header id="gallery">
        <?php 
            $u_qry = $conn->query("SELECT * FROM users where id = 1");
            foreach($u_qry->fetch_array() as $k => $v){
                if(!is_numeric($k)){
                $user[$k] = $v;
                }
            }
            $c_qry = $conn->query("SELECT * FROM contacts");
            while($row = $c_qry->fetch_assoc()){
                $contact[$row['meta_field']] = $row['meta_value'];
            }
            ?>
        
        <?php require_once('inc/siteNavigation.php') ?>

        <div class="banner">
            <div class="see-more">
                <a href="<?php echo "gallery.php?id=" . $_GET['service'] ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="43" height="19" viewBox="0 0 43 19" fill="none">
                        <path d="M42.1875 9.45508H0.882739" stroke="white" stroke-width="1.34512"/>
                        <path d="M9.76977 18.3357L0.884357 9.45028M9.76977 0.565349L0.884358 9.45076" stroke="white" stroke-width="1.34512"/>
                    </svg>
                    <span>Back</span>
                </a>
            </div>
            <h2>GALLERY</h2>
        </div>
    </header> 
    <section class="gallery-utils">
        <div></div>
        <div class="filter-container">
            <div>
                <h4>Filter By:</h4>
            </div>
            <div class="custom-select" style="width:200px;">
                <select>
                    <option value="0">All Services</option>
                    <?php 
                        $p_qry = $conn->query("SELECT * FROM `service`");
                        while($row = $p_qry->fetch_assoc()):
                        ?>
                        <option value="<?php echo $row['id'] ?>" <?php echo isset($service) ? $service == $row['id'] ? 'selected' : '' : '' ?>>
                            <a href="gallery.php?id=<?php echo $row['id'] ?>">
                                <?php echo $row['name'] ?>
                            </a>
                        </option>
                    <?php endwhile; ?>
                </select>
            </div>
        </div>
    </section>
    <script>
        var x, i, j, l, ll, selElmnt, a, b, c;
        /* Look for any elements with the class "custom-select": */
        x = document.getElementsByClassName("custom-select");
        l = x.length;
        for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        /* For each element, create a new DIV that will act as the selected item: */
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /* For each element, create a new DIV that will contain the option list: */
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < ll; j++) {
            /* For each option in the original select element,
            create a new DIV that will act as an option item: */
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.setAttribute("value", selElmnt.options[j].getAttribute("value"));
            c.addEventListener("click", function(e) {
                /* When an item is clicked, update the original select box,
                and the selected item: */
                var y, i, k, s, h, sl, yl;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                sl = s.length;
                h = this.parentNode.previousSibling;
                for (i = 0; i < sl; i++) {
                    if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        yl = y.length;
                        for (k = 0; k < yl; k++) {
                        y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        console.log();
                        window.location.href = `gallery.php?id=${this.getAttribute("value")}`
                        break;
                    }
                }
                h.click();
            });
            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function(e) {
            /* When the select box is clicked, close any other select boxes,
            and open/close the current select box: */
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
        }

        function closeAllSelect(elmnt) {
        /* A function that will close all select boxes in the document,
        except the current select box: */
        var x, y, i, xl, yl, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
            arrNo.push(i)
            } else {
            y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
            x[i].classList.add("select-hide");
            }
        }
        }

        /* If the user clicks anywhere outside the select box,
        then close all select boxes: */
        document.addEventListener("click", closeAllSelect);
    </script>
    <!-- Header End -->

    <section id="gallery-content">
        <div class="content-wrapper zoom-gallery">
            <?php 
                if(isset($_GET['service']) && $_GET['client'] > 0) {
                    if (isset($_GET['service']) && $_GET['service'] > 0)
                        $qry = $conn->query("SELECT * from project WHERE `service` = '{$_GET['service']}' AND `client` = '{$_GET['client']}';");
                    else
                        $qry = $conn->query("SELECT * from project WHERE `client` = '{$_GET['client']}';");
                }
                else {
                    if (isset($_GET['service']) && $_GET['service'] > 0) 
                        $qry = $conn->query("SELECT * from project WHERE `service` = '{$_GET['service']}' AND `client` = '{$_GET['client']}';");
                    else
                        $qry = $conn->query("SELECT * from project WHERE `client` = '0';");
                }
        
                while($row = $qry->fetch_assoc()):
            ?>
                <a class="item" href="<?php echo $row['attachment'] ? $row['attachment'] : '#' ?>">
                    <img src="<?php echo $row['attachment'] ? $row['attachment'] : '#' ?>" alt="<?php echo $row['name'] ? $row['name'] : '#' ?>" />
                </a>
            <?php endwhile; ?>
        </div>
    </section>
    <?php require_once('inc/footer.php') ?>
    <script>
        $(document).ready(function() {
            $('.zoom-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                closeOnContentClick: false,
                closeBtnInside: false,
                mainClass: 'mfp-with-zoom mfp-img-mobile',
                image: {
                    verticalFit: true,
                    titleSrc: function(item) {
                        return item.el.attr('title');
                    }
                },
                gallery: {
                    enabled: true
                },
                zoom: {
                    enabled: true,
                    duration: 300, // don't foget to change the duration also in CSS
                    opener: function(element) {
                        return element.find('img');
                    }
                }

            });
        });
    </script>
</body>
</html>