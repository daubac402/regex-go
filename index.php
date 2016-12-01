<!DOCTYPE html>
<!-- <html lang="en"> -->
<html lang="ja" ng-app="RegexApp">
<?php
    $child_site = '/regex-go'; // for test
    require_once $_SERVER['DOCUMENT_ROOT'] . $child_site . '/include/IncludeBackends.php';

    $locale = 'ja';
    if(isset($_COOKIE['lang'])) {
        $locale = $_COOKIE['lang'];
    }
    init_language($locale);
?>

    <head>
        <meta charset="utf-8">
        <title>Regex Tester - Javascript </title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Test your Javascript and PCRE regular expressions online.">
        <meta name="keywords" content="regexpal, regex101, regex test,regex tester, regular expression, regex editor,online,regular,expression,tester,regexp,test,regex,validator, PCRE, PHP, Perl, javascript">
        <meta name="author" content="daubac403@gmail.com">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>

        <!--[if (!IE)|(gt IE 8)]><!-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        <!--<![endif]-->
        <!--[if lte IE 8]>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<![endif]-->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
                <script src="/js/html5shiv.js"></script>
                <script src="/js/respond.min.js"></script>
        <![endif]-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="css/de_regex_main.css">
        <script type="text/javascript" src="js/de_regex_main.js"></script>
        <script type="text/javascript" src="js/de_regex_include.js"></script>

        <script src="js/common.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
        <script src="semantic_UI/semantic.min.js"></script>


        <style>
        ins {
            text-decoration: none;
        }
        
        code {
            white-space: pre-wrap;
            word-break: normal;
        }
        
        #social_buttons {
            position: fixed;
            z-index: 100;
            bottom: 0;
            right: 0;
            width: 80px;
            background: rgba(255, 255, 255, .65);
            -webkit-box-shadow: 0px 0px 4px 1px rgba(0, 0, 0, 0.45);
            -moz-box-shadow: 0px 0px 4px 1px rgba(0, 0, 0, 0.45);
            box-shadow: 0px 0px 4px 1px rgba(0, 0, 0, 0.45);
            padding: 15px;
        }
        
        #social_buttons .socialbutton {
            padding: 10px 0;
        }
        </style>
    </head>

    <body>
        <!--Start Container-->
        <div id="main" class="container-fluid sidebar-show" style="overflow:visible;">
            <div class="row">
                <div id="sidebar-left" class="col-xs-2 col-sm-2">
                </div>
                <!--Start Content-->
                <div id="content" class="col-xs-12 col-sm-10" style="min-height:1000px;padding-left:0px; padding-right:0px;">
                    <!-- <script src="js/scripts_jp.js?v=20161125"></script> -->
                    <?php 
                        require_once $_SERVER['DOCUMENT_ROOT'] . $child_site . '/js/scripts.php';
                    ?>
                    <link rel="stylesheet" href="css/regexrf934.css?v=20161125">
                    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>
                    <div style="display:none;">
                        <div class="top">
                            <h1 class="icon regexr-logo"></h1>
                            <h1 class="regexr-text">Regex Pal</h1><span class="version regexr-text">(c) daubac403@gmail.com</span>
                        </div>
                        <div class="lib hidden" id="libview">
                            <div class="content"><b>RegexPal is a tool to <b>learn</b>, <b>build</b>, & <b>test</b> Regular Expressions (RegEx / RegExp).</b>
                                <hr>
                                <ul>
                                    <li>Results update in <b>real-time</b> as you type.</li>
                                    <li><b>Roll over</b> a match or expression for details.</li>
                                    <li><b>Save</b> & <b>share</b> expressions with others.</li>
                                    <li>Explore the <b>Library</b> for help & examples.</li>
                                    <li><b>Undo</b> & <b>Redo</b> with {{getCtrlKey()}}-Z / Y.</li>
                                    <li>Search for & rate <b>Community</b> patterns.</li>
                                </ul>
                            </div>
                            <div id="cheatsheet">
                                <table class="cheatsheet">
                                    <tr>
                                        <th colspan="2" onclick="regexr.libView.show('charclasses')">Character classes</th>
                                    </tr>
                                    <tr>
                                        <td>.</td>
                                        <td>any character except newline</td>
                                    </tr>
                                    <tr>
                                        <td>\w \d \s</td>
                                        <td>word, digit, whitespace</td>
                                    </tr>
                                    <tr>
                                        <td>\W \D \S</td>
                                        <td>not word, digit, whitespace</td>
                                    </tr>
                                    <tr>
                                        <td>[abc]</td>
                                        <td>any of a, b, or c</td>
                                    </tr>
                                    <tr>
                                        <td>[^abc]</td>
                                        <td>not a, b, or c</td>
                                    </tr>
                                    <tr>
                                        <td>[a-g]</td>
                                        <td>character between a & g</td>
                                    </tr>
                                    <tr>
                                        <th colspan="2" onclick="regexr.libView.show('anchors')">Anchors</th>
                                    </tr>
                                    <tr>
                                        <td>^abc$</td>
                                        <td>start / end of the string</td>
                                    </tr>
                                    <tr>
                                        <td>\b</td>
                                        <td>word boundary</td>
                                    </tr>
                                    <tr>
                                        <th colspan="2" onclick="regexr.libView.show('escchars')">Escaped characters</th>
                                    </tr>
                                    <tr>
                                        <td>\. \* \\</td>
                                        <td>escaped special characters</td>
                                    </tr>
                                    <tr>
                                        <td>\t \n \r</td>
                                        <td>tab, linefeed, carriage return</td>
                                    </tr>
                                    <tr>
                                        <td>\u00A9</td>
                                        <td>unicode escaped &copy;</td>
                                    </tr>
                                    <tr>
                                        <th colspan="2" onclick="regexr.libView.show('groups')">Groups & Lookaround</th>
                                    </tr>
                                    <tr>
                                        <td>(abc)</td>
                                        <td>capture group</td>
                                    </tr>
                                    <tr>
                                        <td>\1</td>
                                        <td>backreference to group #1</td>
                                    </tr>
                                    <tr>
                                        <td>(?:abc)</td>
                                        <td>non-capturing group</td>
                                    </tr>
                                    <tr>
                                        <td>(?=abc)</td>
                                        <td>positive lookahead</td>
                                    </tr>
                                    <tr>
                                        <td>(?!abc)</td>
                                        <td>negative lookahead</td>
                                    </tr>
                                    <tr>
                                        <th colspan="2" onclick="regexr.libView.show('quants')">Quantifiers & Alternation</th>
                                    </tr>
                                    <tr>
                                        <td>a* a+ a?</td>
                                        <td>0 or more, 1 or more, 0 or 1</td>
                                    </tr>
                                    <tr>
                                        <td>a{5} a{2,}</td>
                                        <td>exactly five, two or more</td>
                                    </tr>
                                    <tr>
                                        <td>a{1,3}</td>
                                        <td>between one & three</td>
                                    </tr>
                                    <tr>
                                        <td>a+? a{2,}?</td>
                                        <td>match as few as possible</td>
                                    </tr>
                                    <tr>
                                        <td>ab|cd</td>
                                        <td>match ab or cd</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <style>
                    html,
                    body {
                        height: 100%;
                    }
                    
                    #main {
                        height: 100%;
                    }
                    
                    #main .row {
                        height: 100%;
                        width: 100%;
                        margin: 0 auto;
                    }
                    
                    #content {
                        height: 100%;
                        min-height: 10px !important;
                    }
                    
                    .col-sm-5 {
                        height: 100%;
                    }
                    
                    .col-md-4 {
                        height: 100%;
                    }
                    
                    .col-md-8 {
                        height: 100%;
                    }
                    
                    .box {
                        height: 100%;
                    }
                    
                    .box-content {
                        height: 100%;
                    }
                    
                    .pcreflag {
                        display: none;
                    }
                    </style>
                    <script>
                    $(document).ready(function() {
                        $('.flags').on('click', function() {
                            if ($('#engine').val() == 'pcre') {
                                $('.pcreflag').css("display", "block");
                            } else {
                                $('.pcreflag').css("display", "none");
                            }
                        });
                        $('#save').click(function() {
                            $('input[name=expr]').val(regexr.docView.getExpression());
                            $('input[name=text]').val(regexr.docView.getText());
                            $('input[name=subst]').val(regexr.docView.getSubstitution());
                            $('input[name=engine]').val($('#engine').val());
                            /*      if ($('#name').val() != '' && $('#desc').val() != '') {
                                        $.post("save.php",{name: $('#name').val(), desc: $('#desc').val, exp: regexr.docView.getExpression(), text: regexr.docView.getText(), subst: regexr.docView.getSubstitution()})
                                            .done(function () { alert(""
                                    } else {
                                        alert('Please enter a name and description');
                                    }
                            */
                        });
                    });
                    </script>
                    <div class="row secondrow">
                        <div class="col-md-8">
                            <div class="ui floating dropdown labeled search icon button" style="float:right;">
                                <i class="world icon"></i>
                                <span class="text">Language</span>
                                <div class="menu">
                                    <div class="item"><i class="us flag" value="en"></i>English</div>
                                    <div class="item"><i class="jp flag" value="ja"></i>日本語</div>
                                    <div class="item"><i class="vn flag" value="vi"></i>Tiếng Việt</div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-content">
                                    <div class="doc subst-disabled" id="docview">
                                        <div class="">
                                            <h5 class="page-header"><?= __('Regular Expression') ?>
                                            <ul class="buttonbar">
                                                <li class="button flags" data-icon="&#xE267;"><?= __('flags') ?></li>
                                            </ul>
                                        </h5>
                                        </div>
                                        <div class="editor expr">
                                            <div class="results"></div>
                                        </div>
                                        
                                        <div class="" style="padding-top:10px">
                                            <h5 class="page-header"><?= __('Test String') ?></h5></div>
                                        <div class="editor source">
                                            <div class="measure"></div>
                                            <canvas class="canvas" width="1" height="1"></canvas>
                                            <textarea class="default">
                                            </textarea>
                                        </div>
                                        <div class="" style="padding-top:10px">
                                            <div ng-controller="A">
                                                <div ng-controller="B">
                                                    <div ng-controller="C">
                                                        <div ng-controller="D">
                                                            <div ng-controller="E">
                                                                <div class="sidepadded">
                                                                    <div ng-controller="HiliteRegexCtrl">
                                                                        <div ng-controller="MarkerRegexCtrl" ng-init="reTrigger()">
                                                                            <div class="main-outline">
                                                                                <div class="modelarea markerarea" ng-init="mReModel.cls=dbxDirModel.reColor" title="Regular Expression editor" min-lines="4" dbx-model-val="reModel.val" dbx-model-pos="mReModel.pos" dbx-model-init="reModel.init" dbx-dir="dbxDirModel" dbx-trigger-func="reTrigger()" dbx-hilites="hReModel.hilites" dbx-markers="mReModel" dbx-placeholder="My regular expression" show-gutter="true">
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
                                                    <ul style="display:none" class="buttonbar">
                                                        <li class="button help" data-icon="&#xE195;"></li>
                                                    </ul>
                                            </header>
                                            <hr />
                                            <a style="text-decoration:none" class="check" data-flag="i">
                                                <?= __('ignore case') ?> (i)</a>
                                            <br />
                                            <a style="text-decoration:none" class="check" data-flag="g">
                                                <?= __('global') ?> (g)</a>
                                            <br />
                                            <a style="text-decoration:none" class="check" data-flag="m">
                                                <?= __('multiline') ?> (m)</a>
                                            <div class="pcreflag">
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
                        <img class="hidden spinner" src="data:image/gif;base64,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"> <img class="hidden spinner white" src="data:image/gif;base64,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">
                        <div class="not-supported-mobile hidden">
                            <div class="top">
                                <h1 class="icon regexr-logo">&#xE600;</h1>
                                <h1 class="regexr-text">RegexPal</h1><span class="version regexr-text"></span>
                            </div>
                            <div class="content">
                                <p>RegexPal isn't optimized for mobile devices yet. You can still take a look, but it might be a bit quirky.</p><a id="closeOverlay"><b>&gt;</b> Okay!</a>
                            </div>
                        </div>
                        <div class="not-supported hidden">
                            <div class="top">
                                <h1 class="icon regexr-logo">&#xE600;</h1>
                                <h1 class="regexr-text">RegexPal</h1><span class="version regexr-text"></span>
                            </div>
                            <div class="content">
                                <p>RegexPal requires a modern browser. Please update your browser to the latest version and try again.</p>
                                <p class="flash hidden"></p>
                            </div>
                        </div>
                        <script>
                        // injected on build:
                        ! function() {
                            "use strict";
                            var e = function() {
                                    this.init()
                                },
                                i = e.prototype = {};
                            i._ctaAnimation = null, i.docView = null, i.libView = null, i.init = function() {
                                if (dan.isSupported()) {
                                    BrowserHistory.init(), BrowserHistory.on("change", this.handleHistoryChange, this), ZeroClipboard.config({
                                        moviePath: "assets/ZeroClipboard.swf",
                                        debug: !1,
                                        useNoCache: !1,
                                        forceHandCursor: !0
                                    }), List.spinner = dan.el(".spinner");
                                    var e = new DocView(dan.el("#docview"));
                                    this.docView = e;
                                    var i = dan.el("#docview .default");
                                    DocView.DEFAULT_TEXT = (i.textContent || i.innerText).trim().replace("{{ctrl}}", Utils.getCtrlKey().toLowerCase()), e.setText(), dan.defer(e, e.setText), i.style.display = "none";
                                    DocView.DEFAULT_EXPRESSION = "//g";
                                    var t = dan.el("#cheatsheet");
                                    t.style.display = "none", Docs.getItem("cheatsheet").desc = t.innerHTML, e.setExpression(DocView.DEFAULT_EXPRESSION).setSubstitution(DocView.DEFAULT_SUBSTITUTION), e.resetHistory();
                                    var o = new LibView(dan.el("#libview"), Docs.content.library);
                                    this.libView = o, o.docView = e, e.libView = o, ExpressionModel.docView = e, ExpressionModel.saveState(), Settings.trackVisit(), Settings.cleanSaveTokens(), this.navigate()
                                }
                            }, i.handleHistoryChange = function() {
                                this.navigate()
                            }, i.navigate = function() {
                                var e = document.location.toString(),
                                    i = /[\/#\?]([\w\d]+)$/gi.exec(e),
                                    t = null;
                                if (i && (t = i[1]), ExpressionModel.id != dan.idToNumber(t) + "")
                                    if (dan.isIDValid(t)) {
                                        var o = this;
                                        ServerModel.getPatternByID(t).then(function(e) {
                                            ExpressionModel.setLastSave(e);
                                            var i = dan.parsePattern(e.pattern);
                                            o.docView.populateAll(i.ex, i.flags, e.content, e.replace)
                                        }, function() {
                                            BrowserHistory.go()
                                        })
                                    } else BrowserHistory.go()
                            }, i.showVideo = function(e) {
                                var i = null,
                                    t = dan.el(".video");
                                e !== !1 ? (dan.removeClass(t, "hidden"), t.addEventListener("click", this.handleVideoCloseProxy), i = "playVideo", this._ctaAnimation.stop = !0) : (dan.addClass(t, "hidden"), t.removeEventListener("click", this.handleVideoCloseProxy), i = "pauseVideo");
                                var o = dan.el(".video iframe").contentWindow;
                                o.postMessage('{"event":"command","func":"' + i + '","args":""}', "*")
                            }, i.handleVideoClick = function() {
                                this.showVideo(!1)
                            }, window.RegExr = e
                        }(), WebFont.load({
                            google: {
                                families: ["Source Code Pro:400,700", "Cabin:400,700"],
                                fontinactive: function() {
                                    WebFont.load({
                                        custom: {
                                            families: ["Source Code Pro:400,700", "Cabin:400,700"],
                                            urls: ["css/fontFallback.css"]
                                        }
                                    })
                                }
                            },
                            active: function() {
                                window.regexr = new window.RegExr
                            }
                        });
                        </script>
                        <p class="clearfix" />
                    </div>
                    <!--End Content-->
                </div>
            </div>
            <!--End Container-->
    </body>

</html>
