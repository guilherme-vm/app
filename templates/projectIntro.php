<div class="project-header">





    <h1> <?php
            $page = basename($_SERVER['PHP_SELF'], '.php');
            if ($page === 's4ng') {
                echo "Skills For A Next Generation";
            } else if ($page === 'anglophonetravellersinportugal') {
                echo "Anglophone Travellers In Portugal";
            } else if ($page === 'skytales') {
                echo "Sky Tales";
            } else if ($page === 'bull&stein') {
                echo "BULL & STEIN";
            } else if ($page === 'smartagecare') {
                echo "SmartAgeCare";
            } else if ($page === 'breakstars') {
                echo "BREAKstarS";
            } else if ($page === 'platypus') {
                echo "Platypus Creating Solutions";
            }else if ($page === 'coro') {
                echo "Coro Mozart de Viseu";
            } else if ($page === 'janedoe') {
                echo "Jane Doe's Mission <span class='h1Sub'>A Serious-Critical Digital Game for Web Designers and Developers to Train Web Accessibility for Screen Readers</span>";
            } else if ($page === 'index') {
                echo "Guilherme Vila Maior";
            } else {
                // Default: convert filename like "my-page" to "My Page"
                echo ucwords(str_replace('-', ' ', $page));
            }
            ?></h1>

    <span><?= htmlspecialchars($entry['introDate']) ?></span>
</div>
<div class="project-overview">
    <div class="introBlock">
        <div class="introSection">
            <h2><?= htmlspecialchars($entry['type']) ?></h2>
            <p><?= strip_tags($entry['typeDescription'], '<br>') ?></p>

        </div>


        <?php if (!empty($entry['coauthor'])): ?>
            <div class="introSection">
                <h2>Co-Author</h2>
                <?php if (!empty($entry['coauthor']) && is_array($entry['coauthor'])): ?>
                    <div>
                        <ul>
                            <?php foreach ($entry['coauthor'] as $name): ?>
                                <li><?= $name ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>



        <?php if (!empty($entry['designTools'])): ?>
            <div class="introSection">
                <h2>Design Tools</h2>
                <?php if (!empty($entry['designTools']) && is_array($entry['designTools'])): ?>
                    <div>
                        <ul>
                            <?php foreach ($entry['designTools'] as $name): ?>
                                <li><?= $name ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>



        <?php if (!empty($entry['developTools'])): ?>
            <div class="introSection">
                <h2>Development Tools</h2>
                <ul>
                    <?php foreach ($entry['developTools'] as $name): ?>
                        <li><?= htmlspecialchars($name) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

    </div>

    <img class="introImage" src="<?= htmlspecialchars($entry['img']) ?>" alt="<?= htmlspecialchars($entry['thumbnailAlt']) ?>">
 
</div>
</div>
<div class="project-content">
    <div class="sideMenuContainer">
        <?php include '../templates/sidemenu.php'; ?>
    </div> 