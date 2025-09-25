<div class="cvRow">
    <div class="cvContent">
        <h3><?php echo $cvTitle; ?></h3> 
        <p class="cvSubtitle"><?php echo $cvSubtitle; ?></p>
    </div>



    <?php


    if (!empty($cvDescription2)) {
        echo "<div class='descriptionBlock'>";
    } else {
    }


    // First Description Block
    if (!empty($cvDescription)) {


        if (is_array($cvDescription)) {
            echo "<ul class='cvDescription'>";
            foreach ($cvDescription as $line) {
                echo "<li>$line</li>";
            } 
            echo "</ul>";
        } else {
            echo "<p class='cvDescription'>$cvDescription</p>";
        }
    }

    // Second Description Block
    if (!empty($cvDescription2)) {
        if (is_array($cvDescription2)) {
            echo "<ul  class='cvDescription2'>";
            foreach ($cvDescription2 as $line) {
                echo "<li>$line</li>";
            }
            echo "</ul>";
        } else {
            echo "<p class='cvDescription2'>$cvDescription2</p>";
        }
    }

    if (!empty($cvDescription2)) {
        echo "</div>";
    } else {
    }
    ?>

    <p class="cvDate"><?php echo $cvDate; ?></p>

</div>