<!DOCTYPE html>
<html lang="ja" ng-app="RegexApp">
<?php
    $child_site = '';
    require_once $_SERVER['DOCUMENT_ROOT'] . $child_site . '/include/IncludeBackends.php';

    $locale = 'ja';
    if(isset($_COOKIE['lang'])) {
        $locale = $_COOKIE['lang'];
    }
    init_language($locale);
?>

    <head>
        <meta charset="UTF-8">
        <title>RegexGO - Regex Tester - Javascript</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Test your Javascript Regular Expressions online.">
        <meta name="keywords" content="RegexGo, regex101, regex test,regex tester, regular expression, regex editor,online,regular,expression,tester,regexp,test,regex,validator, PCRE, PHP, Perl, javascript, 正規表現, Biểu Thức Chính Quy, 繰り返し, 欲張り, 文字クラス, 選択, テスト, アンカー, キャプチャ, 後方参照">
        <meta name="author" content="daubac403@gmail.com">
        <meta property="fb:app_id" content="1153989981317449" />
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
        <!--[if (!IE)|(gt IE 8)]><!-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        <!--<![endif]-->
        <!--[if lte IE 8]>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <![endif]-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
        <script><?php require_once $_SERVER['DOCUMENT_ROOT'] . $child_site . '/js/scripts.min.php'; ?></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/de_regex_main.css?v=20161208">
        <script type="text/javascript" src="js/de_regex_main.js"></script>
        <script type="text/javascript" src="js/de_regex_include.js"></script>
        <script src="js/common.js?v=20161207"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
        <script src="semantic_UI/semantic.min.js"></script>
        <link rel="stylesheet" href="css/regex_go_main.css?v=20161208">
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <script async>window.twttr=function(a,b,c){var d,e=a.getElementsByTagName(b)[0],f=window.twttr||{};return a.getElementById(c)?f:(d=a.createElement(b),d.id=c,d.src="https://platform.twitter.com/widgets.js",e.parentNode.insertBefore(d,e),f._e=[],f.ready=function(a){f._e.push(a)},f)}(document,"script","twitter-wjs");</script>
        <script src="//scdn.line-apps.com/n/line_it/thirdparty/loader.min.js" async="async" defer="defer"></script>
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
    </head>

    <body>
        <script>!function(a,b,c,d,e,f,g){a.GoogleAnalyticsObject=e,a[e]=a[e]||function(){(a[e].q=a[e].q||[]).push(arguments)},a[e].l=1*new Date,f=b.createElement(c),g=b.getElementsByTagName(c)[0],f.async=1,f.src=d,g.parentNode.insertBefore(f,g)}(window,document,"script","https://www.google-analytics.com/analytics.js","ga"),ga("create","UA-19534192-7","auto"),ga("send","pageview");</script>
        <div id="fb-root"></div>
        <script>!function(a,b,c){var d,e=a.getElementsByTagName(b)[0];a.getElementById(c)||(d=a.createElement(b),d.id=c,d.src="//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1153989981317449",e.parentNode.insertBefore(d,e))}(document,"script","facebook-jssdk");</script>
        <div id="main" class="container-fluid sidebar-show" style="overflow:visible;">
            <div class="row">
                <div id="sidebar-left" class="col-xs-2 col-sm-2" style="max-width:350px;">
                    <div>
                        <p>With <a href="http://www.adsoptimal.com/?ss=ref49985"><img src="//cdn.adsoptimal.com/assets/logo.png" border="0" width="100"></a></p>
                        <a href="http://www.adsoptimal.com/?ss=ref49985"><img src="//s3-us-west-1.amazonaws.com/mobile-monetizer-production-assets/flat-banner.jpg" style="max-width:100%"></a>
                    </div>
                </div>
                <div id="content" class="col-xs-12 col-sm-10" style="min-height:1000px;padding:0">
                    <!-- <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->
                    <!-- <ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-8395820335361202" data-ad-slot="9223283374"></ins> -->
                    <!-- <script>$(document).ready(function(){(adsbygoogle=window.adsbygoogle||[]).push({})});</script> -->
                    <div style="display:none;">
                        <div class="lib hidden" id="libview">
                            <div class="content"></div>
                            <div id="cheatsheet"></div>
                        </div>
                    </div>
                    <div class="top">
                        <h1 class="regexr-text">RegexGo</a></h1><span class="version regexr-text">.pe.hu</span>
                    </div>
                    <div class="row secondrow">
                        <div class="col-md-8" style="min-height:730px">
                            <div style="float:right;text-align:right;width:72%">
                                <div class="ui floating dropdown labeled icon button" style="line-height:12px">
                                    <i class="world icon"></i>
                                    <span class="text">Language</span>
                                    <div class="menu">
                                        <div class="item"><i class="us flag" value="en"></i>English</div>
                                        <div class="item"><i class="jp flag" value="ja"></i>日本語</div>
                                        <div class="item"><i class="vn flag" value="vi"></i>Tiếng Việt</div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="fb-like" data-href="http://regexgo.pe.hu/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
                                <div class="sns_container"><a class="twitter-share-button" href="http://regexgo.pe.hu/">Tweet</a></div>
                                <div class="sns_container"><div class="line-it-button" style="display:none" data-type="share-a" data-lang="<?= ($locale=='ja')?'ja':'en' ?>" ></div></div>
                                <div class="sns_container"><div class="g-plusone" data-size="medium" data-href="http://regexgo.pe.hu/"></div></div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="box">
                                <div class="box-content">
                                    <div class="doc subst-disabled" id="docview">
                                        <div>
                                            <h5 class="page-header"><?= __('Regular Expression') ?>
                                            <ul class="buttonbar">
                                                <li class="button flags regex_flg" data-icon="&#xf024;"><?= __('flags') ?></li>
                                            </ul>
                                        </h5>
                                        </div>
                                        <div class="editor expr" style="line-height:16px">
                                            <div class="results"></div>
                                        </div>
                                        <div style="padding-top:10px">
                                            <h5 class="page-header"><?= __('Test String') ?></h5></div>
                                        <div class="editor source">
                                            <div class="measure"></div>
                                            <canvas class="canvas" width="1" height="1"></canvas>
                                            <textarea class="default"></textarea>
                                        </div>
                                        <div style="padding-top:10px">
                                            <div ng-controller="A">
                                                <div ng-controller="B">
                                                    <div ng-controller="C">
                                                        <div ng-controller="D">
                                                            <div ng-controller="E">
                                                                <div class="sidepadded">
                                                                    <div ng-controller="HiliteRegexCtrl">
                                                                        <div ng-controller="MarkerRegexCtrl" ng-init="reTrigger()">
                                                                            <div class="main-outline">
                                                                                <div class="modelarea markerarea" ng-init="mReModel.cls=dbxDirModel.reColor" title="Regular Expression editor" min-lines="4" dbx-model-val="reModel.val" dbx-model-pos="mReModel.pos" dbx-model-init="reModel.init" dbx-dir="dbxDirModel" dbx-trigger-func="reTrigger()" dbx-hilites="hReModel.hilites" dbx-markers="mReModel" dbx-placeholder="^My (regular)*[expression]+$" show-gutter="true">
                                                                                </div>
                                                                                <div>
                                                                                    <div class="sa-message clearfix;">
                                                                                        <span class="center-align error">
                                                                                        <span ng-show="nfaModel.error.msg">{{nfaModel.error.msg}}</span>
                                                                                        <span ng-hide="nfaModel.error.msg">&nbsp;</span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="nfadiagram nfamarkerdiagram" style="min-height:200px" ng-hide="isTextMode" title="Regular expression visualization" dbx-nfa="nfaModel.val" dbx-dir="dbxDirModel" dbx-markers="mReModel">
                                                                                </div>
                                                                                <div class="nfatextdiagram" style="min-height:207px" ng-show="isTextMode" title="Regular expression textualization" dbx-nfa="nfaModel.val">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title subst" style="padding-top:10px"></div>
                                        <div class="editor subst"></div>
                                        <div class="editor substres"></div>
                                        <div class="menu flags">
                                            <header>
                                                <?= __('Expression Flags') ?>
                                                    <ul style="" class="buttonbar"><li class="button help" data-icon="&#xf129;"></li></ul>
                                            </header>
                                            <hr>
                                            <a class="check" data-flag="i"> <?= __('ignore case') ?> (i)</a><br>
                                            <a class="check" data-flag="g"> <?= __('global') ?> (g)</a><br>
                                            <a class="check" data-flag="m"> <?= __('multiline') ?> (m)</a><div class="pcreflag">
                                                <a style="text-decoration:none" class="check" data-flag="x">extended (x)</a>
                                                <br /><a style="text-decoration:none" class="check" data-flag="X">extra (X)</a>
                                                <br /><a style="text-decoration:none" class="check" data-flag="s">single line (s)</a>
                                                <br /><a style="text-decoration:none" class="check" data-flag="u">unicode (u)</a>
                                                <br /><a style="text-decoration:none" class="check" data-flag="U">Ungreedy (U)</a>
                                                <br /><a style="text-decoration:none" class="check" data-flag="A">Anchored (A)</a>
                                                <br /><a style="text-decoration:none" class="check" data-flag="J">dup subpattern names(J)</a>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content"><b><?= __('RegexGo is a tool to learn, build, & test Regular Expressions (by Javascript)') ?></b>
                                <hr>
                                <ul>
                                    <li><?= __('Results update in <b>real-time</b> as you type') ?></li>
                                    <li><?= __('<b>Roll over</b> a match or expression for details') ?></li>
                                    <li><?= __('<b>Undo</b> & <b>Redo</b> with Ctrl-Z / Y') ?></li>
                                </ul>
                            </div>
                            <div id="cheatsheet">
                                <table class="cheatsheet">
                                    <tr>
                                        <th colspan="2" class="button" data-icon="&#xf03a;"><?= __('Character classes') ?></th>
                                    </tr>
                                    <tr>
                                        <td>.</td>
                                        <td><?= __('any character except newline') ?></td>
                                    </tr>
                                    <tr>
                                        <td>\w \d \s</td>
                                        <td><?= __('word, digit, whitespace') ?></td>
                                    </tr>
                                    <tr>
                                        <td>\W \D \S</td>
                                        <td><?= __('not word, digit, whitespace') ?></td>
                                    </tr>
                                    <tr>
                                        <td>[abc]</td>
                                        <td><?= __('any of a, b, or c') ?></td>
                                    </tr>
                                    <tr>
                                        <td>[^abc]</td>
                                        <td><?= __('not a, b, or c') ?></td>
                                    </tr>
                                    <tr>
                                        <td>[A-g]</td>
                                        <td><?= __('character between A & g (A, B, .., Z, a, b, .., g)') ?></td>
                                    </tr>
                                    <tr>
                                        <th colspan="2" class="button" data-icon="&#xf03a;"><?= __('Anchors') ?></th>
                                    </tr>
                                    <tr>
                                        <td>^abc$</td>
                                        <td><?= __('start / end of the string') ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>\b</b>hello<b>\b</b></td>
                                        <td><?= __('word boundary') ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>\B</b>hello<b>\B</b></td>
                                        <td><?= __('not word boundary') ?></td>
                                    </tr>
                                    <tr>
                                        <th colspan="2" class="button" data-icon="&#xf03a;"><?= __('Escaped characters') ?></th>
                                    </tr>
                                    <tr>
                                        <td>\. \* \\</td>
                                        <td><?= __('escaped . * \ ') ?></td>
                                    </tr>
                                    <tr>
                                        <td>\t \n \r</td>
                                        <td><?= __('tab, linefeed, carriage return') ?></td>
                                    </tr>
                                    <tr>
                                        <td>\f \v</td>
                                        <td><?= __('form feed') ?><?= __(', ') ?><?= __('vertical tab') ?></td>
                                    </tr>
                                    <tr>
                                        <td>\u00A9</td>
                                        <td><?= __('unicode escaped') ?></td>
                                    </tr>
                                    <tr>
                                        <td>\cA</td>
                                        <td><?= __('control character escape') ?> (Ctrl+A)</td>
                                    </tr>
                                    <tr>
                                        <td>\234</td>
                                        <td><?= __('octal escape') ?></td>
                                    </tr>
                                    <tr>
                                        <td>\xEE</td>
                                        <td><?= __('hexadecimal escape') ?></td>
                                    </tr>
                                    <tr>
                                        <th colspan="2" class="button" data-icon="&#xf03a;"><?= __('Groups & Lookaround') ?></th>
                                    </tr>
                                    <tr>
                                        <td>(abc)</td>
                                        <td><?= __('capture group') ?></td>
                                    </tr>
                                    <tr>
                                        <td>\1</td>
                                        <td><?= __('backreference to group #1') ?></td>
                                    </tr>
                                    <tr>
                                        <td>(?:abc)</td>
                                        <td><?= __('non-capturing group') ?></td>
                                    </tr>
                                    <tr>
                                        <td>(?=abc)</td>
                                        <td><?= __('positive lookahead') ?></td>
                                    </tr>
                                    <tr>
                                        <td>(?!abc)</td>
                                        <td><?= __('negative lookahead') ?></td>
                                    </tr>
                                    <tr>
                                        <td>(?<=abc)</td>
                                        <td><?= __('positive lookbehind') ?> <?= __('(not supported in Javascript)') ?></td>
                                    </tr>
                                    <tr>
                                        <td>(?&lt;!abc)</td>
                                        <td><?= __('negative lookbehind') ?> <?= __('(not supported in Javascript)') ?></td>
                                    </tr>
                                    <tr>
                                        <td>(?>abc)</td>
                                        <td><?= __('atomic group') ?> <?= __('(not supported in Javascript)') ?></td>
                                    </tr>
                                    <tr>
                                        <th colspan="2" class="button" data-icon="&#xf03a;"><?= __('Quantifiers & Alternation') ?></th>
                                    </tr>
                                    <tr>
                                        <td>a*</td>
                                        <td><?= __('match 0 or more times') ?> <?= __('(greedy)') ?></td>
                                    </tr>
                                    <tr>
                                        <td>a+</td>
                                        <td><?= __('match 1 or more times') ?> <?= __('(greedy)') ?></td>
                                    </tr>
                                    <tr>
                                        <td>a?</td>
                                        <td><?= __('match 0 or 1 time only') ?> <?= __('(greedy)') ?></td>
                                    </tr>
                                    <tr>
                                        <td>a*&#63;</td>
                                        <td><?= __('match 0 or more times') ?> <?= __('(lazy)') ?></td>
                                    </tr>
                                    <tr>
                                        <td>a+&#63;</td>
                                        <td><?= __('match 1 or more times') ?> <?= __('(lazy)') ?></td>
                                    </tr>
                                    <tr>
                                        <td>a&#63;&#63;</td>
                                        <td><?= __('match 0 or 1 time only') ?> <?= __('(lazy)') ?></td>
                                    </tr>
                                    <tr>
                                        <td>a{5}</td>
                                        <td><?= __('match exactly five times') ?></td>
                                    </tr>
                                    <tr>
                                        <td>a{2,}</td>
                                        <td><?= __('match two or more times') ?></td>
                                    </tr>
                                    <tr>
                                        <td>a{1,3}</td>
                                        <td><?= __('match between one and three times') ?></td>
                                    </tr>
                                    <tr>
                                        <td>ab|cd</td>
                                        <td><?= __('match ab or cd') ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="fb-comments" data-href="http://regexgo.pe.hu/" data-width="100%" data-numposts="5"></div>
                            <a href="http://info.flagcounter.com/jUZf"><img src="http://s10.flagcounter.com/count2/jUZf/bg_FFFFFF/txt_000000/border_CCCCCC/columns_3/maxflags_12/viewers_0/labels_0/pageviews_1/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
                        </div>
                        </div>
                        <div class="not-supported hidden">
                            <div class="top">
                                <h1 class="icon regexr-logo">&#xE600;</h1>
                                <h1 class="regexr-text">RegexGo</h1><span class="version regexr-text"></span>
                            </div>
                            <div class="content">
                                <p>RegexGo requires a modern browser. Please update your browser to the latest version and try again.</p>
                                <p class="flash hidden"></p>
                            </div>
                        </div>
                        <script src="js/inject_on_build.js"></script>
                        <p class="clearfix" />
                    </div>
                </div>
            </div>
    </body>

</html>
