<!-- position:50 -->
<div class="indexmodule">

    <?php
        // this module is really just a pointer to a portion
        // of the other khan academy module that means we have
        // to hardcode the directoy thing here - expect it to break
        // if/when we rename the other module
        $kadir = preg_replace("/en-khan_health/", "en-kaos", $dir);
        $kahdir = "$kadir/science/health-and-medicine";
    ?>

    <form action="<?php echo $kadir ?>/search.html">
      <div>
        <input name="terms">
        <input type="submit" value="Search">
      </div>
    </form>

    <a href="<?php echo $kahdir ?>/index.html"><img src="<?php echo $dir ?>/khanhealthlogo.png" alt="Khan Academy Health"></a>

    <h2><a href="<?php echo $kahdir ?>/index.html">Khan Academy Health &amp; Medicine</a></h2>

    <p>Nearly 200 videos on health topics, covering the workings of major body
       systems and the diseases that affect them. All Khan Academy content is
       available for free at <a href="http://www.khanacademy.org/">www.khanacademy.org</a>.
    </p>

    <ul class="double">
    <li class="listhead">Anatomy</li>
    <li><a href="<?php echo $kahdir ?>/human-anatomy-and-physiology/index.html">Human anatomy and pysiology</a></li>
    <li><a href="<?php echo $kahdir ?>/circulatory-system/index.html">Advanced circulatory system physiology</a></li>
    <li><a href="<?php echo $kahdir ?>/respiratory-system/index.html">Advanced respiratory system physiology</a></li>
    <li><a href="<?php echo $kahdir ?>/hematologic%20system/index.html">Advanced hematologic system physiology</a></li>
    <li><a href="<?php echo $kahdir ?>/endocrine%20system/index.html">Advanced endocrine system physiology</a></li>
    <li><a href="<?php echo $kahdir ?>/nervous-system-and-sensory-infor/index.html">Advanced nervous system physiology</a></li>
    <li><a href="<?php echo $kahdir ?>/executive%20systems%20of%20the%20brain/index.html">Executive systems of the brain</a></li>
    <li class="listhead">Disease</li>
    <li><a href="<?php echo $kahdir ?>/circulatory-system-diseases/index.html">Circulatory system diseases</a></li>
    <li><a href="<?php echo $kahdir ?>/respiratory-system-diseases/index.html">Respiratory system diseases</a></li>
    <li><a href="<?php echo $kahdir ?>/hematologic%20system%20diseases/index.html">Hematologic system diseases</a></li>
    <li><a href="<?php echo $kahdir ?>/new-topic-2014-09-24T18:34:46.573Z/index.html">Endocrine system diseases</a></li>
    <li class="listhead">Other</li>
    <li><a href="<?php echo $kahdir ?>/current-issues-in-health-and-medicine/index.html">Current events in health and medicine</a></li>
    <li><a href="<?php echo $kahdir ?>/lab-values/index.html">Lab values and concentrations</a></li>
    </ul>

    <p class="smallblurb">
        These materials do not provide medical advice and are for informational purposes only.
        This content is not intended to be a substitute for professional medical advice, diagnosis or
        treatment. Always seek the advice of a qualified health provider with any questions you may
        have regarding a medical condition. Never disregard professional medical advice or delay in
        seeking it because of something you have read here.
    </p>

</div>
