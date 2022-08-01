<hr/>
<ul class="footbar">
    <li class="footbar" style="visibility: <?php
            echo $chapter != 00 ? 'visible' : 'hidden';
        ?>" title="Previous chapter"><a href="../<?php
            echo $chapter < 11 ? '0' : '';
            echo $chapter - 1;
        ?>/index.php">&lt;</a></li>
    <li class="footbar"><a href="../index.php" title="Return to index">index</a></li>
    <li class="footbar" style="visibility: <?php
            echo $chapter != $totalChapters ? 'visible' : 'hidden';
        ?>" title="Next chapter"><a href="../<?php
            echo $chapter < 9 ? '0' : '';
            echo $chapter + 1;
        ?>/index.php">&gt;</a></li>
</ul>
