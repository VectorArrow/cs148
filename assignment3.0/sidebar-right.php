<section class='sidebar right-sidebar' >
        <h3>Quick links</h3>
        <ul>
	<li><a href='join.php'>Join Page</a></li>
        <?php for($number=1; $number <= 6; $number++):
                $num = $number;
                if ($number<10) $num = '0' . $num; ?>
                <li><a href='display.php?number=q<?php echo $num ?>'>Question <?php echo $num; ?></a></li>
         <?php endfor; ?>
        </ul>
</section>

