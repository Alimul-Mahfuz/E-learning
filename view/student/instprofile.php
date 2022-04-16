
<div class="insdet">
    <div class="insqual">
        <h3 style="font-size: 16pt;"><?php echo $insDet['name']; ?></h3>
        <p><?php echo $insDet['email']; ?></p>
        <p><?php echo $insDet['degree'] . '<br>' . $insDet['instname']; ?></p>
    </div>
    <div class="inspic">
        <?php
        if (!empty($insDet['profileImage'])) {
        ?>
            <img style="height: 300px; width:300px;" src="<?php echo $insDet['profileImage']; ?>" alt=""><?php
         } else {
         echo "Profile picture not availabel";
       }
 ?>
    </div>