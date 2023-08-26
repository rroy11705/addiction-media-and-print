<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<?php require_once('inc/header.php') ?>
<?php 
    $service = 0;
    if(isset($_GET['id'])) {
        $service = $_GET['id'];
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
                <a href="index.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="43" height="19" viewBox="0 0 43 19" fill="none">
                        <path d="M42.1875 9.45508H0.882739" stroke="white" stroke-width="1.34512"/>
                        <path d="M9.76977 18.3357L0.884357 9.45028M9.76977 0.565349L0.884358 9.45076" stroke="white" stroke-width="1.34512"/>
                    </svg>
                    <span>Back to Main Page</span>
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
                $client_query = 
                    "SELECT
                        s.id AS service_id,
                        s.name As service_name,
                        c.id AS client_id,
                        c.name AS client_name,
                        p.attachment AS attachment
                    FROM
                        (SELECT
                            p.client as client_id,
                            p.service as service_id,
                            p.id,
                            p.attachment,
                            ROW_NUMBER() OVER(PARTITION BY p.client ORDER BY p.id) AS row_num
                        FROM
                            project p
                        ) As p
                    LEFT JOIN client as c 
                    ON c.id = p.client_id OR c.id = NULL AND p.row_num = 1
                    INNER JOIN service s ON p.service_id = s.id AND p.row_num = 1";
                $client_query_end = "ORDER BY case when p.client_id = 0 then 1 else 0 end, client_name ASC";

                if(isset($_GET['id']) && $_GET['id'] > 0)
                    $qry = $conn->query($client_query . " WHERE service_id = '{$_GET['id']}' " . $client_query_end);
                else
                    $qry = $conn->query($client_query . " " . $client_query_end);
        
                while($row = $qry->fetch_assoc()):
            ?>
                <a class="item" href="gallery-details.php?<?php echo $_GET['id'] ? 'service=' . $_GET['id'] : 'service=0' ?>&<?php echo $row['client_id'] ? 'client=' . $row['client_id'] : 'client=0' ?>">
                    <img src="<?php echo $row['attachment'] ? $row['attachment'] : '#' ?>" alt="<?php echo $row['client_name'] ? $row['client_name'] : '#' ?>" />
                    <div class="overlay"><?php echo $row['client_name'] ? $row['client_name'] : 'Others' ?></div>
                </a>
            <?php endwhile; ?>
        </div>
    </section>
    <?php require_once('inc/footer.php') ?>
</body>
</html>