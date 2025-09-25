<?php include 'templates/head.php'; ?>

<?php include 'templates/navbar.php'; ?>




<h1>About</h1>



<div class="cvSection cvAbout">
    <div class="two-collumn">
        <div class="two-collumn-left">
            
            <p class="aboutText"><span id="aboutText">Hey there! I'm Guilherme, 24 year-old UI/UX Designer based in Porto, Portugal</span>Massa faucibus commodo sem vitae eget in dui eu. Magna sit sem ligula ut ut imperdiet tortor. Consectetur amet blandit tincidunt adipiscing vel sagittis rhoncus auctor. Velit non sed orci varius tincidunt in sed etiam. Quis pellentesque tincidunt maecenas porta viverra interdum turpis mattis. Dictum tristique faucibus donec sapien morbi. Hendrerit maecenas </p>
            <div class="aboutBottomInfo">
                <div class="aboutContact">
                    <span>Contacts</span>
                    <p>guilherme_vm@live.com.pt</p>
                </div>
                <div class="socialsIconsContainer">
                    <a target="_blank" class="socialsImg" href="https://www.linkedin.com/in/guilherme-vila-maior-b0b937182/"><img src="assets/img/icons/linkedIn.svg"  alt=""></a>
                    <a target="_blank" class="socialsImg" href="https://www.youtube.com/@GuilhermeVilaMaior"><img src="assets/img/icons/youtube.svg" alt=""></a>

                </div>
            </div>
        </div>
        <img class="two-collumn-right" src="assets/img/about.jpg" alt="">
    </div>


    <div class="four-collumn aboutSkills">
    <div class="four-collumn-collumn collumnA">
            <h2>Software</h2>
            <ul>
                <li>Figma</li>
                <li>Adobe After Effects</li>
                <li>Adobe Illustrator</li>
                <li>Adobe InDesign</li>
                <li>Adobe Lightroom</li>
                <li>Adobe Photoshop </li>
                <li>Adobe Premiere Pro</li>
                <li>Final Cut Pro</li>
            </ul>
        </div>

        <div class="four-collumn-collumn collumnB">
            <h2>Focus Areas</h2>
            <ul>
                <li>Human-Computer Interaction</li>
                <li>User Interface Design</li>
                <li>User Experience Design</li>
                <li>User Research</li>
                <li>Design Thinking</li>
                <li>Logo Design</li>
                <li>Front-End Development</li>
            </ul>
        </div>


        <div class="four-collumn-collumn collumnC">
            <h2>Front-End</h2>
            <ul>
                <li>HTML & CSS</li>
                <li>JavaScript (jQuery)</li>
                <li>PHP</li>
            </ul>
        </div>
    </div>
</div>





<div class="cvSection cvWork">
    <h2 class="stickyTitle aboutSticky">Work Experience</h2>
    <div class="cvContainer">

        <?php
        $currentUrl = $_SERVER['REQUEST_URI'];
        $jsonString = file_get_contents('json/cv/cvWork.json');
        $cvWork = json_decode($jsonString, true);

        foreach ($cvWork as $card) : ?>
            <?php
            $cvTitle = $card["title"];
            $cvSubtitle = $card["subtitle"];
            $cvDescription = $card["description1"];
            $cvDate = $card["date"];
            ?>
            <?php include 'templates/cvCard.php'; ?>
        <?php endforeach; ?>
    </div>
</div>

<div class="cvSection cvFreelance">
    <h2 class="stickyTitle aboutSticky">Freelance</h2>
    <div class="cvContainer">

        <?php
        $currentUrl = $_SERVER['REQUEST_URI'];
        $jsonString = file_get_contents('json/cv/cvFreelance.json');
        $cvFreelance = json_decode($jsonString, true);

        foreach ($cvFreelance as $card) : ?>
            <?php
            $cvTitle = $card["title"];
            $cvSubtitle = $card["subtitle"];
            $cvDescription = $card["description1"];
            $cvDate = $card["date"];
            ?>
            <?php include 'templates/cvCard.php'; ?>
        <?php endforeach; ?>
    </div>
</div>

<div class="cvSection cvAcademic">
    <h2 class="stickyTitle aboutSticky">Academic Course</h2>
    <div class="cvContainer">

        <?php
        $currentUrl = $_SERVER['REQUEST_URI'];
        $jsonString = file_get_contents('json/cv/cvAcademic.json');
        $cvAcademic = json_decode($jsonString, true);

        foreach ($cvAcademic as $card) : ?>
            <?php
            $cvTitle = $card["title"];
            $cvSubtitle = $card["subtitle"];
            $cvDescription = $card["description1"];
            $cvDescription2 = $card["description2"];
            $cvDate = $card["date"];
            ?>
            <?php include 'templates/cvCard.php'; ?>
        <?php endforeach; ?>
    </div>
</div>


<div class="cvSection cvPapers">
    <h2 class="stickyTitle aboutSticky">Papers</h2>
    <div class="cvContainer">

        <?php
        $currentUrl = $_SERVER['REQUEST_URI'];
        $jsonString = file_get_contents('json/cv/cvPapers.json');
        $cvPapers = json_decode($jsonString, true);

        foreach ($cvPapers as $card) : ?>
            <?php
            $cvTitle = $card["title"];
            $cvSubtitle = $card["subtitle"];
            $cvDescription = $card["description1"];
            $cvDescription2 = $card["description2"];
            $cvDate = $card["date"];
            ?>
            <?php include 'templates/cvCard.php'; ?>
        <?php endforeach; ?>
    </div>
</div>


<div class="cvSection cvLanguages">
    <h2 class="stickyTitle aboutSticky">Languages</h2>
    <div class="cvContainer">

        <?php
        $currentUrl = $_SERVER['REQUEST_URI'];
        $jsonString = file_get_contents('json/cv/cvLanguages.json');
        $cvLanguages = json_decode($jsonString, true);

        foreach ($cvLanguages as $card) : ?>
            <?php
            $cvTitle = $card["title"];
            $cvSubtitle = $card["subtitle"];
            $cvDescription = $card["description1"];
            $cvDescription2 = $card["description2"];
            $cvDate = $card["date"];
            ?>
            <?php include 'templates/cvCard.php'; ?>
        <?php endforeach; ?>
    </div>
</div>



<div class="cvSection cvOthers">
    <h2 class="stickyTitle aboutSticky">Others</h2>
    <div class="cvContainer">

        <?php
        $currentUrl = $_SERVER['REQUEST_URI'];
        $jsonString = file_get_contents('json/cv/cvOthers.json');
        $cvOthers = json_decode($jsonString, true);

        foreach ($cvOthers as $card) : ?>
            <?php
            $cvTitle = $card["title"];
            $cvSubtitle = $card["subtitle"];
            $cvDescription = $card["description1"];
            $cvDescription2 = $card["description2"];
            $cvDate = $card["date"];
            ?>
            <?php include 'templates/cvCard.php'; ?>
        <?php endforeach; ?>


    </div>
</div>



<?php include 'templates/footer.php'; ?>