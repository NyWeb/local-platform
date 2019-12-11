<?php

$data = json_decode(file_get_contents("data/text.json"), 1);

?><!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Set charset, IE compatibility, scale and turn off highlight -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="msapplication-tap-highlight" content="no" />

        <title>Local Platform for Local Governments | Made Tech</title>

        <!-- Add to homescreen for Chrome on Android -->
        <meta name="mobile-web-app-capable" content="yes" />
        <meta name="application-name" content="[NAME]" />
        <meta name="theme-color" content="[COLOR]">

        <!-- Add to homescreen for Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <meta name="apple-mobile-web-app-title" content="[NAME]" />
        <meta name="apple-mobile-web-app-status-bar-style" content="[COLOR]" />

        <!--  Load css files -->
        <link rel="stylesheet" href="/assets/css.css?version=<?=rand()?>" />

        <!-- Load the mww app -->
        <script src="https://www.mww.se/assets/js/mww.js"></script>
        <script src="https://www.mww.se/assets/js/config.js"></script>
        <script src="https://www.mww.se/assets/js/dom.js?version=<?=rand()?>"></script>
        <script src="/assets/js.js"></script>

        <link rel="icon" href="/assets/images/favicon.ico" />
    </head>

    <body>
        <div id="header">
            <div class="container thin show fixed high">
                <div class="centerer">
                    <div class="logo-holder">
                        <img src="/assets/images/logo.png" />
                    </div>
                </div>
            </div>
        </div>

        <div id="introduction">
            <div class="container screen dark darkened">
                <div class="centerer">
                    <h1><?=$data['introduction']['title']?></h1>
                    <div class="third-holder">
                        <?php
                            foreach($data['introduction']['third-box'] as $box):
                                ?>
                                    <div class="third-box">
                                        <span class="icon <?=$box['icon']?>"></span>
                                        <h3><?=$box['title']?></h3>
                                        <p><?=$box['content']?></p>
                                        <a class="button mww" data-attach="click" data-type="scroll" data-scroll="<?=$box['url']?>"><?=$box['cta']?></a>
                                    </div>
                                <?php
                            endforeach;
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div id="concept">
            <div class="tracker mww" data-type="visible" data-target=".concept" data-at="fixed"></div>

            <div class="container concept screen light green">
                <div class="graphic microservice-1 wide middle-left">
                    <span><?=$data['concept']['graphic']['microservice'][0]?></span>
                </div>
                <div class="graphic microservice-2 wide middle">
                    <span><?=$data['concept']['graphic']['microservice'][1]?></span>
                </div>
                <div class="graphic microservice-3 wide middle-right">
                    <span><?=$data['concept']['graphic']['microservice'][2]?></span>
                </div>

                <div class="mww clipper screen green" data-type="scrollimator" data-scroll="#concept" data-element=".concept" data-property='[{"property": "right", "range": [0, 50], "start": 0, "end": 100}]'>
                    <div class="mww" data-type="scrollimator" data-scroll="#concept" data-element=".concept" data-property='[{"property": "left", "range": [0, 50], "start": 0, "end": 100}]'>
                        <div class="graphic monolith-1 middle-left">
                            <span><?=$data['concept']['graphic']['monolith'][0]?></span>
                        </div>

                        <div class="graphic monolith-2 middle">
                            <span><?=$data['concept']['graphic']['monolith'][1]?></span>
                        </div>

                        <div class="graphic monolith-3 middle-right">
                            <span><?=$data['concept']['graphic']['monolith'][2]?></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container screen dark none">
                <div class="centerer">
                    <h2><?=$data['concept']['title']?></h2>
                    <ul class="checklist">
                        <?php
                            foreach($data['concept']['checklist'] as $checklist):
                                ?>
                                    <li><?=$checklist?></li>
                                <?php
                            endforeach;
                        ?>
                    </ul>
                </div>
            </div>

            <div class="tracker mww" data-type="visible" data-target=".concept" data-visible="non-fixed"></div>
        </div>

        <div id="architecture">
            <div class="container screen">
                <div class="graphic building-1 wrap antenna left"></div>
                <div class="graphic signal left"></div>
                <div class="graphic building-2 wrap antenna middle-left"></div>
                <div class="graphic signal middle-left"></div>
                <div class="graphic building-3 wrap antenna left-right"></div>
                <div class="graphic signal left-right huge"></div>
                <div class="graphic building-4 wide wrap antenna dish right"></div>
                <div class="centerer">
                    <div class="half-page right">
                        <?=$data['architecture']['description']?>
                    </div>
                </div>
            </div>

            <div class="container green dark">
                <div class="centerer">
                    <div class="third-holder">
                        <?php
                            foreach($data['architecture']['third-box'] as $i=>$box):
                                ?>
                                    <div class="third-box">
                                        <span class="icon <?=$box['icon']?>"></span>
                                        <h3><?=$box['title']?></h3>
                                        <input type="checkbox" class="more" id="more-architecture-<?=$i?>" />
                                        <label for="more-architecture-<?=$i?>"></label>
                                        <p class="more"><?=$box['content']?></p>
                                    </div>
                                <?php
                            endforeach;
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div id="vision">
            <div class="container narrow">
                <div class="centerer">
                    <h2><?=$data['vision']['title']?></h2>
                    <p><?=$data['vision']['content']?></p>
                </div>
            </div>

            <div class="container">
                <h2><?=$data['vision']['legacy']['title']?></h2>
                <div class="third-holder">
                    <div class="third-box">
                        <span class="icon mww" data-type="count" data-end="<?=$data['vision']['local-legacy']['count']?>"></span>
                        <h3><?=$data['vision']['local-legacy']['title']?></h3>
                        <p></p>
                        <input type="checkbox" class="more" id="more-local-legacy" />
                        <label for="more-local-legacy"></label>
                        <p class="more"><?=$data['vision']['local-legacy']['content']?></p>
                    </div>

                    <div class="third-box">
                        <p><?=$data['vision']['legacy']['content']?></p>
                    </div>

                    <div class="third-box">
                        <span class="icon mww" data-type="count" data-end="<?=$data['vision']['national-legacy']['count']?>"></span>
                        <h3><?=$data['vision']['national-legacy']['title']?></h3>
                        <p></p>
                        <input type="checkbox" class="more" id="more-national-legacy" />
                        <label for="more-national-legacy"></label>
                        <p class="more"><?=$data['vision']['national-legacy']['content']?></p>
                    </div>
                </div>
            </div>
        </div>

        <div id="transform">
            <div class="tracker mww" data-type="visible" data-target=".transform" data-at="fixed"></div>

            <div class="container transform screen">
                <h2><?=$data['transform']['title']?></h2>
                <div class="graphic microservice-1 wide middle-left">

                </div>
                <div class="graphic microservice-1 wide middle-left copy mww" data-type="scrollimator" data-scroll="#transform" data-element=".transform" data-property='[{"range": [0, 10],"property": "margin-bottom","start": 0,"end": 100, "unit": "px"}, {"range": [5, 45],"property": "left","start": 25,"end": 75},{"range": [40, 50],"property": "margin-bottom","start": 100,"end": 0, "unit": "px"},{"range": [45, 50],"property": "opacity", "start": 0.1, "end": 1, "unit": ""},{"range": [0, 45],"property": "opacity", "start": 0.1, "end": 0.1, "unit": ""}]'>
                </div>
            </div>

            <div class="container screen">
                <div class="centerer">
                    <ul class="checklist">
                        <?php
                            foreach($data['transform']['checklist'] as $checklist):
                                ?>
                                    <li><?=$checklist?></li>
                                <?php
                            endforeach;
                        ?>
                    </ul>
                </div>
            </div>

            <div class="tracker mww" data-type="visible" data-target=".transform" data-visible="non-fixed"></div>
        </div>

        <div id="approach">
            <div class="tracker mww" data-type="visible" data-target=".approach" data-at="fixed"></div>

            <div class="container approach screen green dark fill">
                <div class="centerer">
                    <h2><?=$data['approach']['title']?></h2>
                </div>
                <div class="half-page">
                    <div class="graphic layer-1 middle-left wide mww" data-type="scrollimator" data-scroll="#approach" data-element=".approach" data-property='[{"range": [0, 5], "property": "bottom", "start": 110, "end": 20}]'></div>
                    <div class="graphic layer-2 middle-left wide mww" data-type="scrollimator" data-scroll="#approach" data-element=".approach" data-property='[{"range": [5, 10], "property": "bottom", "start": 110, "end": 20}]'></div>
                    <div class="graphic layer-3 middle-left wide mww" data-type="scrollimator" data-scroll="#approach" data-element=".approach" data-property='[{"range": [10, 15], "property": "bottom", "start": 110, "end": 20}]'></div>
                    <div class="graphic layer-4 middle-left wide mww" data-type="scrollimator" data-scroll="#approach" data-element=".approach" data-property='[{"range": [15, 20], "property": "bottom", "start": 110, "end": 20}]'></div>
                </div>

                <div class="half-page content">
                    <p><?=$data['approach']['description']?></p>
                    <?php
                        foreach($data['approach']['content'] as $title=>$content):
                            ?>
                                <h3><?=$title?></h3>
                                <p><?=$content?></p>
                            <?php
                        endforeach;
                    ?>
                </div>
            </div>

            <div class="container screen green dark">
                <div class="centerer">
                    <ul class="checklist">
                        <?php
                            foreach($data['approach']['checklist'] as $checklist):
                                ?>
                                    <li><?=$checklist?></li>
                                <?php
                            endforeach;
                        ?>
                    </ul>
                </div>
            </div>

            <div class="tracker mww" data-type="visible" data-target=".approach" data-visible="non-fixed"></div>
        </div>

        <div id="adaptor">
            <div class="tracker mww" data-type="visible" data-target=".adaptor" data-at="fixed"></div>

            <div class="container adaptor screen">
                <div class="graphic adaptor-1 middle-left wide"></div>
                <div class="graphic adaptor-2 middle wide"></div>
                <div class="graphic adaptor-3 middle-right wide"></div>
            </div>

            <div class="container screen">
                <ul class="checklist">
                    <?php
                        foreach($data['adaptor']['checklist'] as $checklist):
                            ?>
                                <li><?=$checklist?></li>
                            <?php
                        endforeach;
                    ?>
                </ul>
            </div>

            <div class="tracker mww" data-type="visible" data-target=".adaptor" data-visible="non-fixed"></div>
        </div>

        <div id="modern">
            <div class="container">
                <div class="centerer">
                    <div class="third-holder">
                        <?php
                            foreach($data['modern']['third-box'] as $box):
                                ?>
                                    <div class="third-box">
                                        <span class="icon <?=$box['icon']?>"></span>
                                        <h3><?=$box['title']?></h3>
                                    </div>
                                <?php
                            endforeach;
                        ?>
                    </div>
                </div>
            </div>

            <div class="container narrow">
                <div class="centerer">
                    <h2><?=$data['modern']['title']?></h2>
                    <p><?=$data['modern']['content']?></p>
                </div>
            </div>
        </div>

        <div id="storage">
            <div class="container">
                <div class="centerer">
                    <h2><?=$data['storage']['title']?></h2>
                    <div class="third-holder">
                        <?php
                            foreach($data['storage']['third-box'] as $box):
                                ?>
                                    <div class="third-box">
                                        <h3><?=$box['title']?></h3>
                                    </div>
                                <?php
                            endforeach;
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div id="self">
            <div class="tracker mww" data-type="visible" data-target=".self" data-at="fixed"></div>

            <div class="container self screen">
                <div class="graphic cloud-1"></div>
                <div class="graphic sun-1"></div>
                <div class="graphic person-1"><div class="stack"></div></div>
                <div class="graphic person-2"><div class="stack"></div></div>
                <div class="graphic person-3"><div class="stack"></div></div>
                <div class="graphic person-4"><div class="stack"></div></div>
                <div class="graphic person-5"><div class="stack"></div></div>
                <div class="graphic house-1"></div>
                <div class="graphic machine-1">
                    <div class="gallery mww" data-type="gallery">
                        <?php
                            foreach($data['self']['queue'] as $queue):
                                ?>
                                    <div class="target"><?=$queue?></div>
                                <?php
                            endforeach;
                        ?>
                    </div>
                </div>
            </div>

            <div class="container screen">

            </div>

            <div class="tracker mww" data-type="visible" data-target=".self" data-visible="non-fixed"></div>
        </div>

        <div id="story">
            <div class="container narrow">
                <div class="centerer">
                    <h2><?=$data['story']['title']?></h2>
                    <p><?=$data['story']['description']?></p>
                </div>
            </div>

            <div class="tracker mww" data-type="visible" data-target=".story" data-visible="fixed"></div>

            <div class="container story screen">
                <div class="graphic person-1"></div>
                <div class="graphic person-2"></div>
                <div class="graphic person-3"></div>
                <div class="graphic person-4"></div>
                <div class="graphic person-5"></div>
                <div class="graphic proxy-1"></div>
                <div class="graphic madetech-house-1"></div>
                <div class="graphic adaptor-1"></div>
                <div class="graphic monolith-1">
                    <div class="graphic madetech-house-2"></div>
                </div>
            </div>

            <div class="container screen narrow">
                <div class="centerer">
                    <p><?=$data['story']['content']?></p>
                </div>
            </div>

            <div class="tracker mww" data-type="visible" data-target=".story" data-visible="non-fixed"></div>
        </div>

        <div id="why">
            <div class="container green dark">
                <div class="centerer">
                    <h2><?=$data['why']['title']?></h2>
                    <ul class="checklist">
                        <?php
                            foreach($data['why']['checklist'] as $checklist):
                                ?>
                                    <li><?=$checklist?></li>
                                <?php
                            endforeach;
                        ?>
                    </ul>
                </div>
            </div>
        </div>

        <div id="features">
            <div class="container screen">
                <div class="mountain-1"></div>
            </div>

            <div class="container green dark">
                <div class="centerer">
                    <div class="third-holder">
                        <?php
                            foreach($data['features']['third-box'] as $box):
                                ?>
                                    <div class="third-box">
                                        <span class="icon <?=$box['icon']?>"></span>
                                        <h3><?=$box['title']?></h3>
                                        <input type="checkbox" class="more" id="more-opensource" />
                                        <label for="more-opensource"></label>
                                        <p class="more"><?=$box['content']?></p>
                                    </div>
                                <?php
                            endforeach;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>