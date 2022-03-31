<!DOCTYPE html>
<html style="width: 100%; height: 100%;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('forms/lampiris/electricity_natural_gas_du/assets/formviewer.css') }}">
    <script src="{{ asset('forms/lampiris/electricity_natural_gas_du/assets/formviewer.js') }}" type="text/javascript"></script>
    <script src="{{ asset('forms/lampiris/electricity_natural_gas_du/assets/formvuapi.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        (function() {
            "use strict";

            /**
             * Shorthand helper function to getElementById
             * @param id
             * @returns {Element}
             */
            var d = function(id) {
                return document.getElementById(id);
            };

            var ClassHelper = (function() {
                return {
                    addClass: function(ele, name) {
                        var classes = ele.className.length !== 0 ? ele.className.split(" ") : [];
                        var index = classes.indexOf(name);
                        if (index === -1) {
                            classes.push(name);
                            ele.className = classes.join(" ");
                        }
                    },

                    removeClass: function(ele, name) {
                        var classes = ele.className.length !== 0 ? ele.className.split(" ") : [];
                        var index = classes.indexOf(name);
                        if (index !== -1) {
                            classes.splice(index, 1);
                        }
                        ele.className = classes.join(" ");
                    }
                };
            })();

            var Button = {};

            FormViewer.on('ready', function(data) {
                // Grab buttons
                Button.zoomIn = d('btnZoomIn');
                Button.zoomOut = d('btnZoomOut');

                if (Button.zoomIn) {
                    Button.zoomIn.onclick = function(e) {
                        FormViewer.zoomIn();
                        e.preventDefault();
                    };
                }
                if (Button.zoomOut) {
                    Button.zoomOut.onclick = function(e) {
                        FormViewer.zoomOut();
                        e.preventDefault();
                    };
                }

                document.title = data.title ? data.title : data.fileName;
                var pageLabels = data.pageLabels;
                var btnPage = d('btnPage');
                if (btnPage != null) {
                    btnPage.innerHTML = pageLabels.length ? pageLabels[data.page - 1] : data.page;
                    btnPage.title = data.page + " of " + data.pagecount;

                    FormViewer.on('pagechange', function(data) {
                        d('btnPage').innerHTML = pageLabels.length ? pageLabels[data.page - 1] : data.page;
                        d('btnPage').title = data.page + " of " + data.pagecount;
                    });
                }

                if (idrform.app) {
                    idrform.app.execFunc = idrform.app.execMenuItem;
                    idrform.app.execMenuItem = function(str) {
                        switch (str.toUpperCase()) {
                            case "FIRSTPAGE":
                                idrform.app.activeDocs[0].pageNum = 0;
                                FormViewer.goToPage(1);
                                break;
                            case "LASTPAGE":
                                idrform.app.activeDocs[0].pageNum = FormViewer.config.pagecount - 1;
                                FormViewer.goToPage(FormViewer.config.pagecount);
                                break;
                            case "NEXTPAGE":
                                idrform.app.activeDocs[0].pageNum++;
                                FormViewer.next();
                                break;
                            case "PREVPAGE":
                                idrform.app.activeDocs[0].pageNum--;
                                FormViewer.prev();
                                break;
                            default:
                                idrform.app.execFunc(str);
                                break;
                        }
                    }
                }

                document.onkeydown = function(e) {
                    if (e.target instanceof HTMLInputElement) {
                        return;
                    }
                    switch (e.keyCode) {
                        case 33: // Page Up
                            FormViewer.prev();
                            e.preventDefault();
                            break;
                        case 34: // Page Down
                            FormViewer.next();
                            e.preventDefault();
                            break;
                        case 37: // Left Arrow
                            data.isR2L ? FormViewer.next() : FormViewer.prev();
                            e.preventDefault();
                            break;
                        case 39: // Right Arrow
                            data.isR2L ? FormViewer.prev() : FormViewer.next();
                            e.preventDefault();
                            break;
                        case 36: // Home
                            FormViewer.goToPage(1);
                            e.preventDefault();
                            break;
                        case 35: // End
                            FormViewer.goToPage(data.pagecount);
                            e.preventDefault();
                            break;
                    }
                };
            });

            window.addEventListener("beforeprint", function(event) {
                FormViewer.setZoom(FormViewer.ZOOM_AUTO);
            });

        })();
    </script>
    <style type="text/css">
        input[type=text] {
            letter-spacing: 10.1px !important;
            padding-left: 5px !important;
        }

        .btn {
            border: 0 none;
            height: 30px;
            padding: 0;
            width: 30px;
            background-color: transparent;
            display: inline-block;
            margin: 7px 5px 0;
            vertical-align: top;
            cursor: pointer;
            color: #fff;
        }

        .btn:hover {
            background-color: #0e1319;
            color: #eddbd9;
            border-radius: 5px;
        }

        .page {
            box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.3);
        }

        #formviewer {
            bottom: 0;
            left: 0;
            right: 0;
            position: absolute;
            top: 40px;
            background: #191f2f none repeat scroll 0 0;
        }

        body {
            padding: 0px;
            margin: 0px;
            background-color: #191f2f;
        }

        #FDFXFA_Menu {
            text-align: center;
            width: 100%;
            z-index: 9999;
            color: white;
            background-color: #707784;
            position: fixed;
            font-size: 32px;
            margin: 0px;
            opacity: 0.8;
            top: 0px;
            min-width: 300px;
            min-height: 40px;
        }

        #FDFXFA_Menu a {
            cursor: pointer;
            border-radius: 5px;
            padding: 5px;
            font-family: IDRSymbols;
            margin: 5px 10px 5px 10px;
        }

        #FDFXFA_PageLabel {
            padding-left: 5px;
            font-size: 20px
        }

        #FDFXFA_PageCount {
            padding-right: 5px;
            font-size: 20px
        }

        #FDFXFA_Menu a:hover {
            background-color: #0e1319;
            color: #eddbd9;
        }

        #FDFXFA_PageLabel {
            min-width: 20px;
            display: inline-block;
        }

        #FDFXFA_Processing {
            width: 100%;
            height: 100%;
            z-index: 10000;
            position: fixed;
            background-color: black;
            opacity: 0.8;
            color: white;
            top: 0px;
            text-align: center;
            font-size: 300px;
            font-family: IDRSymbols;
        }

        #FDFXFA_Processing span {
            top: 50%;
            left: 50%;
            margin: -50px 0 0 -50px
        }

        #FDFXFA_FormType,
        #FDFXFA_Form,
        #FDFXFA_PDFName,
        #FDFXFA_FormSubmitURL {
            display: none;
        }

        @font-face {
            font-family: 'IDRSymbols';
            src: url(data:application/x-font-woff;charset=utf-8;base64,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) format('woff');
            font-weight: normal;
            font-style: normal;
        }

        @media print {

            #FDFXFA_Menu,
            #FDFXFA_Menu a,
            #FDFXFA_Menu label,
            #FDFXFA_Menu button {
                display: none
            }

            #formviewer {
                overflow: visible
            }

            div.page {
                box-shadow: none;
            }
        }
    </style>
</head>

<body style="margin: 0;" onload='idrform.init()'>
    <script type="text/javascript" src="{{ asset('forms/lampiris/electricity_natural_gas_du/js/formvuacroform.js') }}"></script>
    <script type="text/javascript" src="{{ asset('forms/lampiris/electricity_natural_gas_du/EmbeddedScript.js') }}"></script>
    <div id='FDFXFA_Processing'>&#xF010;</div>
    <div id='FDFXFA_FormType'>AcroForm</div>
    <div id='FDFXFA_PDFName'>Contract_TIP-TOP.pdf</div>
    <div id='FDFXFA_Menu'><a title='Submit Form' onclick="FormViewer.handleFormSubmission('', 'formdata')">&#xF018;</a><a title='Go To FirstPage' onclick="idrform.app.execMenuItem('FirstPage')">&#xF01C;</a><a title='Go To PrevPage' onclick="idrform.app.execMenuItem('PrevPage')">&#xF01D;</a><label id='FDFXFA_PageLabel'><span id="btnPage">1</span></label><label id='FDFXFA_PageCount'>/ <span>3</span></label><a title='Go To NextPage' onclick="idrform.app.execMenuItem('NextPage')">&#xF01E;</a><a title='Go To LastPage' onclick="idrform.app.execMenuItem('LastPage')">&#xF01F;</a><a title='Save As Editable PDF' onclick="idrform.app.execMenuItem('SaveAs')">&#xF01A;</a><button id="btnZoomOut" title="Zoom Out" class="btn"><i class="fa fa-minus fa-lg" aria-hidden="true"></i></button><button id="btnZoomIn" title="Zoom In" class="btn"><i class="fa fa-plus fa-lg" aria-hidden="true"></i></button></div>
    <div id="formviewer">
        <div></div>
        <div id="overlay"></div>
        <form class="forms-sample" action="{{ route('electricity_natural_gas.store') }}" method="POST">
            @csrf()
            <div id="contentContainer">
                <div id="page1" style="width: 931px; height: 1286px; margin-top:20px;" class="page">
                    <div class="page-inner" style="width: 931px; height: 1286px;">

                        <div id="p1" class="pageArea" style="overflow: hidden; position: relative; width: 931px; height: 1286px; margin-top:auto; margin-left:auto; margin-right:auto; background-color: white;">
                            <script type="text/javascript">
                                //global variables that can be used by ALL the functions on this page.
                                var is64;
                                var inputs;
                                var states = ['On.png', 'Off.png', 'DownOn.png', 'DownOff.png', 'RollOn.png', 'RollOff.png'];
                                var states64 = ['imageOn', 'imageOff', 'imageDownOn', 'imageDownOff', 'imageRollOn', 'imageRollOff'];

                                function setImage(input, state) {
                                    if (inputs[input].getAttribute('images').charAt(state) === '1') {
                                        document.getElementById(inputs[input].getAttribute('id') + "_img").src = getSrc(input, state);
                                    }
                                }

                                function getSrc(input, state) {
                                    var src;
                                    if (is64) {
                                        src = inputs[input].getAttribute(states64[state]);
                                    } else {
                                        src = inputs[input].getAttribute('imageName') + states[state];
                                    }
                                    return src;
                                }

                                function replaceChecks(isBase64) {

                                    is64 = isBase64;
                                    //get all the input fields on the page
                                    inputs = document.getElementsByTagName('input');

                                    //cycle trough the input fields
                                    for (var i = 0; i < inputs.length; i++) {
                                        if (inputs[i].hasAttribute('images'))

                                            //check if the input is a checkbox
                                            if (inputs[i].getAttribute('class') !== 'idr-hidden' && inputs[i].getAttribute('data-imageAdded') !== 'true' &&
                                                (inputs[i].getAttribute('type') === 'checkbox' || inputs[i].getAttribute('type') === 'radio')) {

                                                //create a new image
                                                var img = document.createElement('img');

                                                //check if the checkbox is checked
                                                if (inputs[i].checked) {
                                                    if (inputs[i].getAttribute('images').charAt(0) === '1')
                                                        img.src = getSrc(i, 0);
                                                } else {
                                                    if (inputs[i].getAttribute('images').charAt(1) === '1')
                                                        img.src = getSrc(i, 1);
                                                }

                                                //set image ID
                                                img.id = inputs[i].getAttribute('id') + "_img";

                                                //set action associations
                                                img.onclick = new Function('checkClick(' + i + ')');
                                                img.onmousedown = new Function('checkDown(' + i + ')');
                                                img.onmouseover = new Function('checkOver(' + i + ')');
                                                img.onmouseup = new Function('checkRelease(' + i + ')');
                                                img.onmouseout = new Function('checkRelease(' + i + ')');

                                                img.style.position = "absolute";
                                                var style = window.getComputedStyle(inputs[i]);
                                                img.style.top = style.top;
                                                img.style.left = style.left;
                                                img.style.width = style.width;
                                                img.style.height = style.height;
                                                img.style.zIndex = style.zIndex;

                                                //place image in front of the checkbox
                                                inputs[i].parentNode.insertBefore(img, inputs[i]);
                                                inputs[i].setAttribute('data-imageAdded', 'true');

                                                //hide the checkbox
                                                inputs[i].style.display = 'none';
                                            }
                                    }
                                }

                                //change the checkbox status and the replacement image
                                function checkClick(i) {
                                    if (!inputs[i].hasAttribute('images')) return;
                                    if (inputs[i].checked) {
                                        inputs[i].checked = '';
                                        setImage(i, 1);
                                    } else {
                                        inputs[i].checked = 'checked';

                                        setImage(i, 0);

                                        if (inputs[i].getAttribute('name') !== null) {
                                            for (var index = 0; index < inputs.length; index++) {
                                                if (index !== i && inputs[index].getAttribute('name') === inputs[i].getAttribute('name')) {
                                                    inputs[index].checked = '';
                                                    setImage(index, 1);
                                                }
                                            }
                                        }
                                    }
                                }

                                function checkRelease(i) {
                                    if (!inputs[i].hasAttribute('images')) return;
                                    if (inputs[i].checked) {
                                        setImage(i, 0);
                                    } else {
                                        setImage(i, 1);
                                    }
                                }

                                function checkDown(i) {
                                    if (!inputs[i].hasAttribute('images')) return;
                                    if (inputs[i].checked) {
                                        setImage(i, 2);
                                    } else {
                                        setImage(i, 3);
                                    }
                                }

                                function checkOver(i) {
                                    if (!inputs[i].hasAttribute('images')) return;
                                    if (inputs[i].checked) {
                                        setImage(i, 4);
                                    } else {
                                        setImage(i, 5);
                                    }
                                }
                            </script>


                            <!-- Begin shared CSS values -->
                            <style class="shared-css" type="text/css">
                                .t {
                                    transform-origin: bottom left;
                                    z-index: 2;
                                    position: absolute;
                                    white-space: pre;
                                    overflow: visible;
                                    line-height: 1.5;
                                }

                                .text-container {
                                    white-space: pre;
                                }

                                @supports (-webkit-touch-callout: none) {
                                    .text-container {
                                        white-space: normal;
                                    }
                                }
                            </style>
                            <!-- End shared CSS values -->


                            <!-- Begin inline CSS -->
                            <style type="text/css">
                                #t1_1 {
                                    left: 815px;
                                    bottom: 13px;
                                    letter-spacing: 0.21px;
                                }

                                #t2_1 {
                                    left: 43px;
                                    bottom: 1191px;
                                    letter-spacing: 0.18px;
                                }

                                #t3_1 {
                                    left: 43px;
                                    bottom: 1180px;
                                    letter-spacing: 0.19px;
                                }

                                #t4_1 {
                                    left: 43px;
                                    bottom: 1122px;
                                    letter-spacing: -0.01px;
                                }

                                #t5_1 {
                                    left: 108px;
                                    bottom: 1122px;
                                    letter-spacing: -0.01px;
                                }

                                #t6_1 {
                                    left: 152px;
                                    bottom: 1122px;
                                    letter-spacing: -0.01px;
                                }

                                #t7_1 {
                                    left: 195px;
                                    bottom: 1122px;
                                    letter-spacing: -0.01px;
                                }

                                #t8_1 {
                                    left: 238px;
                                    bottom: 1122px;
                                    letter-spacing: -0.01px;
                                }

                                #t9_1 {
                                    left: 43px;
                                    bottom: 1102px;
                                    letter-spacing: -0.01px;
                                }

                                #ta_1 {
                                    left: 85px;
                                    bottom: 1102px;
                                    letter-spacing: -0.01px;
                                }

                                #tb_1 {
                                    left: 125px;
                                    bottom: 1102px;
                                    letter-spacing: -0.01px;
                                }

                                #tc_1 {
                                    left: 43px;
                                    bottom: 1082px;
                                    letter-spacing: -0.01px;
                                }

                                #td_1 {
                                    left: 43px;
                                    bottom: 1062px;
                                    letter-spacing: -0.01px;
                                }

                                #te_1 {
                                    left: 218px;
                                    bottom: 1062px;
                                }

                                #tf_1 {
                                    left: 265px;
                                    bottom: 1062px;
                                }

                                #tg_1 {
                                    left: 346px;
                                    bottom: 1062px;
                                    letter-spacing: -0.03px;
                                }

                                #th_1 {
                                    left: 617px;
                                    bottom: 1062px;
                                    letter-spacing: -0.03px;
                                }

                                #ti_1 {
                                    left: 43px;
                                    bottom: 1042px;
                                    letter-spacing: -0.01px;
                                }

                                #tj_1 {
                                    left: 43px;
                                    bottom: 1019px;
                                    letter-spacing: -0.01px;
                                }

                                #tk_1 {
                                    left: 256px;
                                    bottom: 1019px;
                                }

                                #tl_1 {
                                    left: 343px;
                                    bottom: 1019px;
                                }

                                #tm_1 {
                                    left: 429px;
                                    bottom: 1019px;
                                }

                                #tn_1 {
                                    left: 516px;
                                    bottom: 1022px;
                                    letter-spacing: -0.17px;
                                }

                                #to_1 {
                                    left: 651px;
                                    bottom: 1026px;
                                    letter-spacing: 0.19px;
                                }

                                #tp_1 {
                                    left: 651px;
                                    bottom: 1017px;
                                    letter-spacing: 0.19px;
                                }

                                #tq_1 {
                                    left: 43px;
                                    bottom: 991px;
                                    letter-spacing: -0.01px;
                                }

                                #tr_1 {
                                    left: 43px;
                                    bottom: 971px;
                                    letter-spacing: -0.01px;
                                }

                                #ts_1 {
                                    left: 699px;
                                    bottom: 971px;
                                    letter-spacing: -0.01px;
                                }

                                #tt_1 {
                                    left: 798px;
                                    bottom: 971px;
                                    letter-spacing: -0.01px;
                                }

                                #tu_1 {
                                    left: 43px;
                                    bottom: 951px;
                                    letter-spacing: -0.01px;
                                }

                                #tv_1 {
                                    left: 197px;
                                    bottom: 951px;
                                    letter-spacing: -0.01px;
                                }

                                #tw_1 {
                                    left: 43px;
                                    bottom: 931px;
                                    letter-spacing: -0.01px;
                                }

                                #tx_1 {
                                    left: 167px;
                                    bottom: 933px;
                                    letter-spacing: 0.08px;
                                }

                                #ty_1 {
                                    left: 43px;
                                    bottom: 911px;
                                    letter-spacing: -0.01px;
                                }

                                #tz_1 {
                                    left: 699px;
                                    bottom: 911px;
                                }

                                #t10_1 {
                                    left: 802px;
                                    bottom: 911px;
                                    letter-spacing: -0.01px;
                                }

                                #t11_1 {
                                    left: 43px;
                                    bottom: 891px;
                                    letter-spacing: -0.01px;
                                }

                                #t12_1 {
                                    left: 197px;
                                    bottom: 891px;
                                    letter-spacing: -0.01px;
                                }

                                #t13_1 {
                                    left: 48px;
                                    bottom: 1146px;
                                    letter-spacing: -0.14px;
                                }

                                #t14_1 {
                                    left: 141px;
                                    bottom: 1149px;
                                    letter-spacing: -0.17px;
                                }

                                #t15_1 {
                                    left: 48px;
                                    bottom: 859px;
                                    letter-spacing: -0.12px;
                                }

                                #t16_1 {
                                    left: 63px;
                                    bottom: 836px;
                                }

                                #t17_1 {
                                    left: 136px;
                                    bottom: 836px;
                                    letter-spacing: -0.01px;
                                }

                                #t18_1 {
                                    left: 219px;
                                    bottom: 836px;
                                    letter-spacing: -0.01px;
                                }

                                #t19_1 {
                                    left: 63px;
                                    bottom: 816px;
                                    letter-spacing: -0.01px;
                                }

                                #t1a_1 {
                                    left: 136px;
                                    bottom: 816px;
                                    letter-spacing: -0.01px;
                                }

                                #t1b_1 {
                                    left: 219px;
                                    bottom: 816px;
                                    letter-spacing: -0.01px;
                                }

                                #t1c_1 {
                                    left: 43px;
                                    bottom: 795px;
                                    letter-spacing: -0.17px;
                                }

                                #t1d_1 {
                                    left: 189px;
                                    bottom: 795px;
                                    letter-spacing: -0.1px;
                                }

                                #t1e_1 {
                                    left: 240px;
                                    bottom: 795px;
                                    letter-spacing: -0.16px;
                                }

                                #t1f_1 {
                                    left: 319px;
                                    bottom: 795px;
                                    letter-spacing: -0.21px;
                                    word-spacing: 0.1px;
                                }

                                #t1g_1 {
                                    left: 43px;
                                    bottom: 774px;
                                    letter-spacing: -0.01px;
                                }

                                #t1h_1 {
                                    left: 124px;
                                    bottom: 775px;
                                }

                                #t1i_1 {
                                    left: 140px;
                                    bottom: 775px;
                                }

                                #t1j_1 {
                                    left: 43px;
                                    bottom: 753px;
                                    letter-spacing: -0.01px;
                                }

                                #t1k_1 {
                                    left: 314px;
                                    bottom: 753px;
                                    letter-spacing: -0.01px;
                                }

                                #t1l_1 {
                                    left: 221px;
                                    bottom: 732px;
                                    letter-spacing: -0.01px;
                                }

                                #t1m_1 {
                                    left: 439px;
                                    bottom: 728px;
                                }

                                #t1n_1 {
                                    left: 221px;
                                    bottom: 710px;
                                    letter-spacing: -0.01px;
                                }

                                #t1o_1 {
                                    left: 439px;
                                    bottom: 706px;
                                }

                                #t1p_1 {
                                    left: 221px;
                                    bottom: 689px;
                                    letter-spacing: -0.01px;
                                }

                                #t1q_1 {
                                    left: 439px;
                                    bottom: 685px;
                                }

                                #t1r_1 {
                                    left: 221px;
                                    bottom: 668px;
                                    letter-spacing: -0.01px;
                                }

                                #t1s_1 {
                                    left: 439px;
                                    bottom: 663px;
                                }

                                #t1t_1 {
                                    left: 43px;
                                    bottom: 648px;
                                    letter-spacing: -0.01px;
                                }

                                #t1u_1 {
                                    left: 212px;
                                    bottom: 655px;
                                }

                                #t1v_1 {
                                    left: 215px;
                                    bottom: 648px;
                                }

                                #t1w_1 {
                                    left: 421px;
                                    bottom: 648px;
                                    letter-spacing: -0.01px;
                                }

                                #t1x_1 {
                                    left: 43px;
                                    bottom: 628px;
                                    letter-spacing: -0.01px;
                                }

                                #t1y_1 {
                                    left: 236px;
                                    bottom: 628px;
                                }

                                #t1z_1 {
                                    left: 288px;
                                    bottom: 628px;
                                    letter-spacing: -0.01px;
                                }

                                #t20_1 {
                                    left: 43px;
                                    bottom: 608px;
                                    letter-spacing: -0.01px;
                                }

                                #t21_1 {
                                    left: 236px;
                                    bottom: 608px;
                                }

                                #t22_1 {
                                    left: 288px;
                                    bottom: 608px;
                                    letter-spacing: -0.01px;
                                }

                                #t23_1 {
                                    left: 43px;
                                    bottom: 588px;
                                    letter-spacing: -0.01px;
                                }

                                #t24_1 {
                                    left: 43px;
                                    bottom: 568px;
                                    letter-spacing: -0.01px;
                                }

                                #t25_1 {
                                    left: 263px;
                                    bottom: 576px;
                                }

                                #t26_1 {
                                    left: 48px;
                                    bottom: 449px;
                                    letter-spacing: -0.12px;
                                }

                                #t27_1 {
                                    left: 43px;
                                    bottom: 426px;
                                    letter-spacing: -0.14px;
                                }

                                #t28_1 {
                                    left: 280px;
                                    bottom: 426px;
                                    letter-spacing: -0.14px;
                                }

                                #t29_1 {
                                    left: 377px;
                                    bottom: 426px;
                                    letter-spacing: -0.14px;
                                }

                                #t2a_1 {
                                    left: 436px;
                                    bottom: 428px;
                                    letter-spacing: 0.09px;
                                }

                                #t2b_1 {
                                    left: 43px;
                                    bottom: 411px;
                                    letter-spacing: -0.14px;
                                }

                                #t2c_1 {
                                    left: 280px;
                                    bottom: 411px;
                                    letter-spacing: -0.14px;
                                }

                                #t2d_1 {
                                    left: 377px;
                                    bottom: 411px;
                                    letter-spacing: -0.14px;
                                }

                                #t2e_1 {
                                    left: 490px;
                                    bottom: 411px;
                                    letter-spacing: -0.14px;
                                }

                                #t2f_1 {
                                    left: 43px;
                                    bottom: 396px;
                                    letter-spacing: -0.14px;
                                }

                                #t2g_1 {
                                    left: 280px;
                                    bottom: 396px;
                                    letter-spacing: -0.14px;
                                }

                                #t2h_1 {
                                    left: 405px;
                                    bottom: 396px;
                                    letter-spacing: -0.14px;
                                }

                                #t2i_1 {
                                    left: 483px;
                                    bottom: 398px;
                                    letter-spacing: 0.1px;
                                }

                                #t2j_1 {
                                    left: 601px;
                                    bottom: 396px;
                                    letter-spacing: -0.14px;
                                }

                                #t2k_1 {
                                    left: 680px;
                                    bottom: 398px;
                                    letter-spacing: 0.1px;
                                }

                                #t2l_1 {
                                    left: 48px;
                                    bottom: 367px;
                                    letter-spacing: -0.12px;
                                }

                                #t2m_1 {
                                    left: 143px;
                                    bottom: 369px;
                                    letter-spacing: 0.08px;
                                }

                                #t2n_1 {
                                    left: 43px;
                                    bottom: 351px;
                                    letter-spacing: 0.04px;
                                    word-spacing: 0.03px;
                                }

                                #t2o_1 {
                                    left: 43px;
                                    bottom: 331px;
                                    letter-spacing: -0.03px;
                                }

                                #t2p_1 {
                                    left: 116px;
                                    bottom: 332px;
                                    letter-spacing: -0.06px;
                                }

                                #t2q_1 {
                                    left: 43px;
                                    bottom: 317px;
                                    letter-spacing: -0.03px;
                                }

                                #t2r_1 {
                                    left: 175px;
                                    bottom: 318px;
                                    letter-spacing: -0.18px;
                                }

                                #t2s_1 {
                                    left: 43px;
                                    bottom: 307px;
                                    letter-spacing: -0.17px;
                                }

                                #t2t_1 {
                                    left: 43px;
                                    bottom: 286px;
                                    letter-spacing: -0.14px;
                                }

                                #t2u_1 {
                                    left: 162px;
                                    bottom: 286px;
                                }

                                #t2v_1 {
                                    left: 236px;
                                    bottom: 286px;
                                }

                                #t2w_1 {
                                    left: 309px;
                                    bottom: 286px;
                                }

                                #t2x_1 {
                                    left: 43px;
                                    bottom: 266px;
                                    letter-spacing: -0.12px;
                                }

                                #t2y_1 {
                                    left: 43px;
                                    bottom: 246px;
                                    letter-spacing: -0.16px;
                                }

                                #t2z_1 {
                                    left: 43px;
                                    bottom: 226px;
                                    letter-spacing: -0.12px;
                                }

                                #t30_1 {
                                    left: 43px;
                                    bottom: 211px;
                                    letter-spacing: -0.18px;
                                }

                                #t31_1 {
                                    left: 43px;
                                    bottom: 202px;
                                    letter-spacing: -0.16px;
                                }

                                #t32_1 {
                                    left: 481px;
                                    bottom: 367px;
                                    letter-spacing: -0.14px;
                                }

                                #t33_1 {
                                    left: 477px;
                                    bottom: 350px;
                                    letter-spacing: -0.03px;
                                }

                                #t34_1 {
                                    left: 477px;
                                    bottom: 331px;
                                    letter-spacing: -0.04px;
                                }

                                #t35_1 {
                                    left: 477px;
                                    bottom: 311px;
                                    letter-spacing: -0.03px;
                                }

                                #t36_1 {
                                    left: 722px;
                                    bottom: 311px;
                                    letter-spacing: -0.04px;
                                }

                                #t37_1 {
                                    left: 477px;
                                    bottom: 297px;
                                    letter-spacing: -0.19px;
                                    word-spacing: -0.12px;
                                }

                                #t38_1 {
                                    left: 477px;
                                    bottom: 289px;
                                    letter-spacing: -0.19px;
                                    word-spacing: -0.11px;
                                }

                                #t39_1 {
                                    left: 477px;
                                    bottom: 281px;
                                    letter-spacing: -0.2px;
                                    word-spacing: -0.18px;
                                }

                                #t3a_1 {
                                    left: 477px;
                                    bottom: 274px;
                                    letter-spacing: -0.19px;
                                    word-spacing: 0.11px;
                                }

                                #t3b_1 {
                                    left: 477px;
                                    bottom: 266px;
                                    letter-spacing: -0.2px;
                                }

                                #t3c_1 {
                                    left: 327px;
                                    bottom: 203px;
                                    letter-spacing: -0.33px;
                                }

                                #t3d_1 {
                                    left: 482px;
                                    bottom: 203px;
                                    letter-spacing: -0.31px;
                                }

                                #t3e_1 {
                                    left: 482px;
                                    bottom: 194px;
                                    letter-spacing: -0.33px;
                                }

                                #t3f_1 {
                                    left: 482px;
                                    bottom: 185px;
                                    letter-spacing: -0.33px;
                                }

                                #t3g_1 {
                                    left: 703px;
                                    bottom: 203px;
                                    letter-spacing: -0.32px;
                                }

                                #t3h_1 {
                                    left: 481px;
                                    bottom: 859px;
                                    letter-spacing: -0.13px;
                                }

                                #t3i_1 {
                                    left: 496px;
                                    bottom: 836px;
                                }

                                #t3j_1 {
                                    left: 600px;
                                    bottom: 836px;
                                    letter-spacing: -0.01px;
                                }

                                #t3k_1 {
                                    left: 496px;
                                    bottom: 816px;
                                    letter-spacing: -0.01px;
                                }

                                #t3l_1 {
                                    left: 570px;
                                    bottom: 816px;
                                    letter-spacing: -0.01px;
                                }

                                #t3m_1 {
                                    left: 652px;
                                    bottom: 816px;
                                    letter-spacing: -0.01px;
                                }

                                #t3n_1 {
                                    left: 477px;
                                    bottom: 794px;
                                    letter-spacing: -0.01px;
                                }

                                #t3o_1 {
                                    left: 544px;
                                    bottom: 795px;
                                }

                                #t3p_1 {
                                    left: 560px;
                                    bottom: 795px;
                                }

                                #t3q_1 {
                                    left: 476px;
                                    bottom: 773px;
                                    letter-spacing: -0.01px;
                                }

                                #t3r_1 {
                                    left: 476px;
                                    bottom: 752px;
                                    letter-spacing: -0.01px;
                                }

                                #t3s_1 {
                                    left: 751px;
                                    bottom: 747px;
                                }

                                #t3t_1 {
                                    left: 476px;
                                    bottom: 732px;
                                    letter-spacing: -0.01px;
                                }

                                #t3u_1 {
                                    left: 645px;
                                    bottom: 739px;
                                }

                                #t3v_1 {
                                    left: 651px;
                                    bottom: 732px;
                                }

                                #t3w_1 {
                                    left: 855px;
                                    bottom: 732px;
                                    letter-spacing: -0.01px;
                                }

                                #t3x_1 {
                                    left: 477px;
                                    bottom: 712px;
                                    letter-spacing: -0.01px;
                                }

                                #t3y_1 {
                                    left: 664px;
                                    bottom: 712px;
                                }

                                #t3z_1 {
                                    left: 716px;
                                    bottom: 712px;
                                    letter-spacing: -0.01px;
                                }

                                #t40_1 {
                                    left: 476px;
                                    bottom: 692px;
                                    letter-spacing: -0.01px;
                                }

                                #t41_1 {
                                    left: 664px;
                                    bottom: 692px;
                                }

                                #t42_1 {
                                    left: 716px;
                                    bottom: 692px;
                                    letter-spacing: -0.01px;
                                }

                                #t43_1 {
                                    left: 476px;
                                    bottom: 672px;
                                    letter-spacing: -0.01px;
                                }

                                #t44_1 {
                                    left: 476px;
                                    bottom: 652px;
                                    letter-spacing: -0.01px;
                                }

                                #t45_1 {
                                    left: 689px;
                                    bottom: 660px;
                                }

                                #t46_1 {
                                    left: 482px;
                                    bottom: 631px;
                                    letter-spacing: 0.09px;
                                }

                                #t47_1 {
                                    left: 43px;
                                    bottom: 68px;
                                    letter-spacing: -0.01px;
                                }

                                #t48_1 {
                                    left: 43px;
                                    bottom: 44px;
                                    letter-spacing: -0.01px;
                                }

                                #t49_1 {
                                    left: 43px;
                                    bottom: 24px;
                                    letter-spacing: -0.01px;
                                }

                                #t4a_1 {
                                    left: 481px;
                                    bottom: 252px;
                                    letter-spacing: -0.07px;
                                    word-spacing: 0.86px;
                                }

                                #t4b_1 {
                                    left: 481px;
                                    bottom: 244px;
                                    letter-spacing: -0.06px;
                                    word-spacing: -0.29px;
                                }

                                #t4c_1 {
                                    left: 481px;
                                    bottom: 237px;
                                    letter-spacing: -0.07px;
                                    word-spacing: 1.18px;
                                }

                                #t4d_1 {
                                    left: 481px;
                                    bottom: 229px;
                                    letter-spacing: -0.06px;
                                }

                                #t4e_1 {
                                    left: 905.6px;
                                    bottom: 29.7px;
                                    letter-spacing: -0.21px;
                                }

                                #t4f_1 {
                                    left: 43px;
                                    bottom: 1238px;
                                    letter-spacing: 0.16px;
                                    word-spacing: 0.01px;
                                }

                                #t4g_1 {
                                    left: 43px;
                                    bottom: 1214px;
                                    letter-spacing: 0.08px;
                                    word-spacing: 0.09px;
                                }

                                #t4h_1 {
                                    left: 477px;
                                    bottom: 596px;
                                }

                                #t4i_1 {
                                    left: 486px;
                                    bottom: 595px;
                                    letter-spacing: -0.17px;
                                }

                                #t4j_1 {
                                    left: 477px;
                                    bottom: 585px;
                                    letter-spacing: -0.17px;
                                }

                                #t4k_1 {
                                    left: 477px;
                                    bottom: 578px;
                                }

                                #t4l_1 {
                                    left: 486px;
                                    bottom: 576px;
                                    letter-spacing: -0.17px;
                                }

                                #t4m_1 {
                                    left: 477px;
                                    bottom: 567px;
                                    letter-spacing: -0.17px;
                                }

                                #t4n_1 {
                                    left: 43px;
                                    bottom: 542px;
                                    letter-spacing: -0.01px;
                                }

                                #t4o_1 {
                                    left: 380px;
                                    bottom: 542px;
                                    letter-spacing: -0.05px;
                                }

                                #t4p_1 {
                                    left: 414px;
                                    bottom: 542px;
                                    letter-spacing: -0.01px;
                                }

                                #t4q_1 {
                                    left: 450px;
                                    bottom: 542px;
                                    letter-spacing: -0.01px;
                                }

                                #t4r_1 {
                                    left: 43px;
                                    bottom: 525px;
                                    letter-spacing: -0.01px;
                                }

                                #t4s_1 {
                                    left: 189px;
                                    bottom: 525px;
                                    letter-spacing: -0.05px;
                                }

                                #t4t_1 {
                                    left: 226px;
                                    bottom: 525px;
                                    letter-spacing: -0.01px;
                                }

                                #t4u_1 {
                                    left: 253px;
                                    bottom: 525px;
                                    letter-spacing: -0.03px;
                                }

                                #t4v_1 {
                                    left: 310px;
                                    bottom: 525px;
                                    letter-spacing: -0.05px;
                                }

                                #t4w_1 {
                                    left: 346px;
                                    bottom: 525px;
                                    letter-spacing: -0.01px;
                                }

                                #t4x_1 {
                                    left: 373px;
                                    bottom: 525px;
                                    letter-spacing: -0.02px;
                                }

                                #t4y_1 {
                                    left: 534px;
                                    bottom: 525px;
                                    letter-spacing: -0.05px;
                                }

                                #t4z_1 {
                                    left: 573px;
                                    bottom: 525px;
                                    letter-spacing: -0.01px;
                                }

                                #t50_1 {
                                    left: 602px;
                                    bottom: 525px;
                                    letter-spacing: -0.01px;
                                }

                                #t51_1 {
                                    left: 823px;
                                    bottom: 525px;
                                    letter-spacing: -0.05px;
                                }

                                #t52_1 {
                                    left: 860px;
                                    bottom: 525px;
                                    letter-spacing: -0.01px;
                                }

                                #t53_1 {
                                    left: 43px;
                                    bottom: 509px;
                                    letter-spacing: -0.01px;
                                }

                                #t54_1 {
                                    left: 154px;
                                    bottom: 509px;
                                    letter-spacing: -0.05px;
                                }

                                #t55_1 {
                                    left: 191px;
                                    bottom: 509px;
                                    letter-spacing: -0.01px;
                                }

                                #t56_1 {
                                    left: 218px;
                                    bottom: 509px;
                                }

                                #t57_1 {
                                    left: 223px;
                                    bottom: 509px;
                                    letter-spacing: -0.02px;
                                    word-spacing: 0.01px;
                                }

                                #t58_1 {
                                    left: 418px;
                                    bottom: 509px;
                                    letter-spacing: -0.05px;
                                }

                                #t59_1 {
                                    left: 457px;
                                    bottom: 509px;
                                    letter-spacing: -0.01px;
                                }

                                #t5a_1 {
                                    left: 486px;
                                    bottom: 509px;
                                    letter-spacing: -0.02px;
                                }

                                #t5b_1 {
                                    left: 639px;
                                    bottom: 509px;
                                    letter-spacing: -0.05px;
                                }

                                #t5c_1 {
                                    left: 675px;
                                    bottom: 509px;
                                    letter-spacing: -0.01px;
                                }

                                #t5d_1 {
                                    left: 43px;
                                    bottom: 492px;
                                    letter-spacing: -0.02px;
                                    word-spacing: -0.01px;
                                }

                                #t5e_1 {
                                    left: 832px;
                                    bottom: 492px;
                                    letter-spacing: -0.05px;
                                }

                                #t5f_1 {
                                    left: 869px;
                                    bottom: 492px;
                                    letter-spacing: 0.01px;
                                }

                                #t5g_1 {
                                    left: 43px;
                                    bottom: 477px;
                                    letter-spacing: -0.01px;
                                }

                                #t5h_1 {
                                    left: 340px;
                                    bottom: 477px;
                                    letter-spacing: -0.05px;
                                }

                                #t5i_1 {
                                    left: 379px;
                                    bottom: 477px;
                                    letter-spacing: -0.01px;
                                }

                                #t5j_1 {
                                    left: 406px;
                                    bottom: 477px;
                                    letter-spacing: 0.1px;
                                }

                                #t5k_1 {
                                    left: 43px;
                                    bottom: 87px;
                                    letter-spacing: 0.09px;
                                    word-spacing: 3.26px;
                                }

                                .s1_1 {
                                    font-size: 8px;
                                    font-family: OpenSans_83;
                                    color: #00682D;
                                }

                                .s2_1 {
                                    font-size: 13px;
                                    font-family: OpenSans_83;
                                    color: #00682D;
                                }

                                .s3_1 {
                                    font-size: 13px;
                                    font-family: OpenSans-Bold_8a;
                                    color: #00682D;
                                }

                                .s4_1 {
                                    font-size: 9px;
                                    font-family: OpenSans_83;
                                    color: #00682D;
                                }

                                .s5_1 {
                                    font-size: 14px;
                                    font-family: OpenSans-Bold_8a;
                                    color: #FFF;
                                }

                                .s6_1 {
                                    font-size: 8px;
                                    font-family: OpenSans-Bold_8a;
                                    color: #FFF;
                                }

                                .s7_1 {
                                    font-size: 14px;
                                    font-family: NeoSansStd-Regular_85;
                                    color: #00682D;
                                }

                                .s8_1 {
                                    font-size: 15px;
                                    font-family: OpenSans_83;
                                    color: #00682D;
                                }

                                .s9_1 {
                                    font-size: 5px;
                                    font-family: OpenSans_83;
                                    color: #00682D;
                                }

                                .sa_1 {
                                    font-size: 9px;
                                    font-family: OpenSans-Bold_8a;
                                    color: #FFF;
                                }

                                .sb_1 {
                                    font-size: 9px;
                                    font-family: NeoSansStd-Regular_85;
                                    color: #00682D;
                                }

                                .sc_1 {
                                    font-size: 10px;
                                    font-family: OpenSans_83;
                                    color: #00682D;
                                }

                                .sd_1 {
                                    font-size: 7px;
                                    font-family: OpenSans_83;
                                    color: #00682D;
                                }

                                .se_1 {
                                    font-size: 10px;
                                    font-family: OpenSans_82;
                                    color: #00682D;
                                }

                                .sf_1 {
                                    font-size: 11px;
                                    font-family: OpenSans_83;
                                    color: #00682D;
                                }

                                .sg_1 {
                                    font-size: 11px;
                                    font-family: NeoSansStd-Regular_85;
                                    color: #00682D;
                                }

                                .sh_1 {
                                    font-size: 8px;
                                    font-family: OpenSans_82;
                                    color: #00682D;
                                }

                                .si_1 {
                                    font-size: 7px;
                                    font-family: OpenSans_82;
                                    color: #00682D;
                                }

                                .sj_1 {
                                    font-size: 7px;
                                    font-family: OpenSans-Bold_8a;
                                    color: #FFF;
                                }

                                .sk_1 {
                                    font-size: 21px;
                                    font-family: NettoOT-Black_87;
                                    color: #00682D;
                                }

                                .sl_1 {
                                    font-size: 9px;
                                    font-family: OpenSans-Bold_8a;
                                    color: #00682D;
                                }

                                .t.v0_1 {
                                    transform: scaleX(0.9);
                                }

                                .t.v1_1 {
                                    transform: scaleX(0.96);
                                }

                                .t.v2_1 {
                                    transform: scaleX(0.8);
                                }

                                .t.v3_1 {
                                    transform: scaleX(0.89);
                                }

                                .t.v4_1 {
                                    transform: scaleX(0.87);
                                }

                                .t.v5_1 {
                                    transform: scaleX(1.12);
                                }

                                .t.v6_1 {
                                    transform: scaleX(0.94);
                                }

                                .t.v7_1 {
                                    transform: scaleX(0.82);
                                }

                                .t.v8_1 {
                                    transform: scaleX(0.969);
                                }

                                .t.v9_1 {
                                    transform: scaleX(0.799);
                                }

                                .t.v10_1 {
                                    transform: scaleX(0.95);
                                }

                                .t.v11_1 {
                                    transform: scaleX(0.7);
                                }

                                .t.v12_1 {
                                    transform: scaleX(0.989);
                                }

                                .t.v13_1 {
                                    transform: scaleX(1.199);
                                }

                                .t.v14_1 {
                                    transform: scaleX(1.14);
                                }

                                .t.m0_1 {
                                    transform: matrix(0, -1, 1, 0, 0, 0);
                                }

                                #form1_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 260px;
                                    top: 148px;
                                    width: 12px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form2_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 127px;
                                    top: 148px;
                                    width: 14px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form3_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 173px;
                                    top: 148px;
                                    width: 12px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form4_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 216px;
                                    top: 148px;
                                    width: 14px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form5_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 69px;
                                    top: 167px;
                                    width: 14px;
                                    height: 14px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 10px Arial, Helvetica, sans-serif;
                                }

                                #form6_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 109px;
                                    top: 168px;
                                    width: 12px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form7_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 180px;
                                    top: 165px;
                                    width: 709px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form8_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 180px;
                                    top: 185px;
                                    width: 709px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form9_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 180px;
                                    top: 205px;
                                    width: 34px;
                                    height: 12px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 10px 'Courier New', Courier, monospace;
                                }

                                #form10_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 229px;
                                    top: 205px;
                                    width: 34px;
                                    height: 12px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 10px 'Courier New', Courier, monospace;
                                }

                                #form11_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 277px;
                                    top: 205px;
                                    width: 67px;
                                    height: 12px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 10px 'Courier New', Courier, monospace;
                                }

                                #form12_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 373px;
                                    top: 205px;
                                    width: 242px;
                                    height: 12px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 10px 'Courier New', Courier, monospace;
                                }

                                #form13_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 646px;
                                    top: 205px;
                                    width: 242px;
                                    height: 12px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 10px 'Courier New', Courier, monospace;
                                }

                                #form14_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 180px;
                                    top: 225px;
                                    width: 709px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form15_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 180px;
                                    top: 248px;
                                    width: 67px;
                                    height: 12px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 10px 'Courier New', Courier, monospace;
                                }

                                #form16_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 268px;
                                    top: 248px;
                                    width: 67px;
                                    height: 12px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 10px 'Courier New', Courier, monospace;
                                }

                                #form17_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 353px;
                                    top: 248px;
                                    width: 67px;
                                    height: 12px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 10px 'Courier New', Courier, monospace;
                                }

                                #form18_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 440px;
                                    top: 248px;
                                    width: 67px;
                                    height: 12px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 10px 'Courier New', Courier, monospace;
                                }

                                #form19_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 805px;
                                    top: 248px;
                                    width: 34px;
                                    height: 12px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 10px 'Courier New', Courier, monospace;
                                }

                                #form20_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 118px;
                                    top: 295px;
                                    width: 570px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form21_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 737px;
                                    top: 295px;
                                    width: 51px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form22_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 828px;
                                    top: 295px;
                                    width: 51px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form23_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 118px;
                                    top: 315px;
                                    width: 67px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form24_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 263px;
                                    top: 316px;
                                    width: 605px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form25_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 118px;
                                    top: 355px;
                                    width: 570px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form26_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 737px;
                                    top: 355px;
                                    width: 51px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form27_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 828px;
                                    top: 355px;
                                    width: 51px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form28_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 119px;
                                    top: 374px;
                                    width: 67px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form29_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 254px;
                                    top: 374px;
                                    width: 605px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form30_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 44px;
                                    top: 433px;
                                    width: 12px;
                                    height: 14px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 10px Arial, Helvetica, sans-serif;
                                }

                                #form31_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 118px;
                                    top: 433px;
                                    width: 12px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form32_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 477px;
                                    top: 433px;
                                    width: 14px;
                                    height: 14px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 10px Arial, Helvetica, sans-serif;
                                }

                                #form33_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 581px;
                                    top: 433px;
                                    width: 14px;
                                    height: 14px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 10px Arial, Helvetica, sans-serif;
                                }

                                #form34_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 43px;
                                    top: 452px;
                                    width: 14px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form35_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 116px;
                                    top: 452px;
                                    width: 14px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form36_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 199px;
                                    top: 452px;
                                    width: 14px;
                                    height: 14px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 10px Arial, Helvetica, sans-serif;
                                }

                                #form37_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 477px;
                                    top: 452px;
                                    width: 12px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form38_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 550px;
                                    top: 452px;
                                    width: 12px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form39_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 633px;
                                    top: 452px;
                                    width: 12px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form40_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 171px;
                                    top: 472px;
                                    width: 12px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form41_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 223px;
                                    top: 472px;
                                    width: 14px;
                                    height: 14px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 10px Arial, Helvetica, sans-serif;
                                }

                                #form42_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 304px;
                                    top: 472px;
                                    width: 14px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form43_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 539px;
                                    top: 472px;
                                    width: 310px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form44_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 121px;
                                    top: 492px;
                                    width: 309px;
                                    height: 15px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form45_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 627px;
                                    top: 494px;
                                    width: 173px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form46_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 627px;
                                    top: 515px;
                                    width: 119px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form47_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 759px;
                                    top: 515px;
                                    width: 15px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form48_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 44px;
                                    top: 535px;
                                    width: 173px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form49_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 315px;
                                    top: 535px;
                                    width: 119px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form50_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 448px;
                                    top: 535px;
                                    width: 15px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form51_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 747px;
                                    top: 535px;
                                    width: 103px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form52_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 44px;
                                    top: 556px;
                                    width: 173px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form53_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 315px;
                                    top: 556px;
                                    width: 119px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form54_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 448px;
                                    top: 556px;
                                    width: 15px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form55_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 44px;
                                    top: 578px;
                                    width: 173px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form56_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 315px;
                                    top: 578px;
                                    width: 119px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form57_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 448px;
                                    top: 578px;
                                    width: 15px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form58_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 645px;
                                    top: 556px;
                                    width: 12px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form59_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 645px;
                                    top: 576px;
                                    width: 12px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form60_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 697px;
                                    top: 556px;
                                    width: 12px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form61_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 697px;
                                    top: 576px;
                                    width: 12px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form62_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 44px;
                                    top: 599px;
                                    width: 173px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form63_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 315px;
                                    top: 599px;
                                    width: 119px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form64_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 448px;
                                    top: 599px;
                                    width: 15px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form65_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 593px;
                                    top: 594px;
                                    width: 277px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form66_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 315px;
                                    top: 619px;
                                    width: 103px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form67_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 717px;
                                    top: 614px;
                                    width: 34px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form68_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 759px;
                                    top: 614px;
                                    width: 32px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form69_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 801px;
                                    top: 614px;
                                    width: 69px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form70_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 216px;
                                    top: 640px;
                                    width: 14px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form71_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 216px;
                                    top: 660px;
                                    width: 14px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form72_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 268px;
                                    top: 640px;
                                    width: 14px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form73_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 268px;
                                    top: 660px;
                                    width: 14px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form74_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 477px;
                                    top: 649px;
                                    width: 390px;
                                    height: 19px;
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 15px Arial, Helvetica, sans-serif;
                                }

                                #form75_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 167px;
                                    top: 679px;
                                    width: 277px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form76_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 292px;
                                    top: 698px;
                                    width: 32px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form77_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 333px;
                                    top: 698px;
                                    width: 34px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form78_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 376px;
                                    top: 698px;
                                    width: 67px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form79_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 364px;
                                    top: 724px;
                                    width: 12px;
                                    height: 14px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 10px Arial, Helvetica, sans-serif;
                                }

                                #form80_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 399px;
                                    top: 724px;
                                    width: 12px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form81_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 171px;
                                    top: 741px;
                                    width: 12px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form82_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 208px;
                                    top: 741px;
                                    width: 14px;
                                    height: 14px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 10px Arial, Helvetica, sans-serif;
                                }

                                #form83_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 292px;
                                    top: 743px;
                                    width: 14px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form84_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 329px;
                                    top: 741px;
                                    width: 12px;
                                    height: 14px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 10px Arial, Helvetica, sans-serif;
                                }

                                #form85_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 518px;
                                    top: 741px;
                                    width: 14px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form86_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 555px;
                                    top: 743px;
                                    width: 14px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form87_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 138px;
                                    top: 758px;
                                    width: 12px;
                                    height: 14px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 10px Arial, Helvetica, sans-serif;
                                }

                                #form88_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 174px;
                                    top: 758px;
                                    width: 12px;
                                    height: 14px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 10px Arial, Helvetica, sans-serif;
                                }

                                #form89_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 402px;
                                    top: 758px;
                                    width: 12px;
                                    height: 14px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 10px Arial, Helvetica, sans-serif;
                                }

                                #form90_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 439px;
                                    top: 758px;
                                    width: 14px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form91_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 622px;
                                    top: 758px;
                                    width: 14px;
                                    height: 14px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 10px Arial, Helvetica, sans-serif;
                                }

                                #form92_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 659px;
                                    top: 758px;
                                    width: 12px;
                                    height: 14px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 10px Arial, Helvetica, sans-serif;
                                }

                                #form93_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 805px;
                                    top: 741px;
                                    width: 12px;
                                    height: 14px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 10px Arial, Helvetica, sans-serif;
                                }

                                #form94_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 842px;
                                    top: 741px;
                                    width: 12px;
                                    height: 14px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 10px Arial, Helvetica, sans-serif;
                                }

                                #form95_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 814px;
                                    top: 775px;
                                    width: 14px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form96_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 853px;
                                    top: 775px;
                                    width: 12px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form97_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 323px;
                                    top: 792px;
                                    width: 14px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form98_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 359px;
                                    top: 792px;
                                    width: 14px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form99_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 261px;
                                    top: 842px;
                                    width: 14px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form100_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 261px;
                                    top: 857px;
                                    width: 14px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form101_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 261px;
                                    top: 873px;
                                    width: 14px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form102_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 359px;
                                    top: 842px;
                                    width: 14px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form103_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 359px;
                                    top: 857px;
                                    width: 14px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form104_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 472px;
                                    top: 857px;
                                    width: 14px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form105_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 384px;
                                    top: 873px;
                                    width: 14px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form106_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 199px;
                                    top: 938px;
                                    width: 258px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form107_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 512px;
                                    top: 938px;
                                    width: 379px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form108_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 512px;
                                    top: 958px;
                                    width: 206px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form109_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 747px;
                                    top: 958px;
                                    width: 34px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form110_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 785px;
                                    top: 958px;
                                    width: 34px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form111_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 824px;
                                    top: 958px;
                                    width: 67px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form112_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 93px;
                                    top: 983px;
                                    width: 67px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form113_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 167px;
                                    top: 983px;
                                    width: 67px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form114_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 240px;
                                    top: 983px;
                                    width: 69px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form115_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 313px;
                                    top: 983px;
                                    width: 69px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form116_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 93px;
                                    top: 1002px;
                                    width: 138px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form117_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 93px;
                                    top: 1022px;
                                    width: 32px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form118_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 133px;
                                    top: 1022px;
                                    width: 34px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form119_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 174px;
                                    top: 1022px;
                                    width: 67px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form120_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 93px;
                                    top: 1042px;
                                    width: 223px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form121_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 324px;
                                    top: 1085px;
                                    width: 132px;
                                    height: 41px;
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 33px Arial, Helvetica, sans-serif;
                                }

                                #form122_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 700px;
                                    top: 1096px;
                                    width: 190px;
                                    height: 31px;
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 24px Arial, Helvetica, sans-serif;
                                }

                                #form123_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 129px;
                                    top: 1219px;
                                    width: 188px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form124_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 330px;
                                    top: 1221px;
                                    width: 559px;
                                    height: 32px;
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 25px Arial, Helvetica, sans-serif;
                                }

                                #form125_1 {
                                    z-index: 2;
                                    padding: 0px;
                                    position: absolute;
                                    left: 164px;
                                    top: 1239px;
                                    width: 154px;
                                    height: 14px;
                                    color: rgb(0, 0, 0);
                                    text-align: left;
                                    background: transparent;
                                    border: none;
                                    font: normal 12px 'Courier New', Courier, monospace;
                                }

                                #form126_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 295px;
                                    top: 520px;
                                    width: 12px;
                                    height: 14px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 10px Arial, Helvetica, sans-serif;
                                }

                                #form127_1 {
                                    z-index: 2;
                                    border-style: none;
                                    padding: 0px;
                                    position: absolute;
                                    left: 582px;
                                    top: 873px;
                                    width: 12px;
                                    height: 12px;
                                    text-align: left;
                                    background: transparent;
                                    font: normal 9px Arial, Helvetica, sans-serif;
                                }

                                #form31_1 {
                                    z-index: 3;
                                }

                                #form126_1 {
                                    z-index: 2;
                                }
                            </style>
                            <!-- End inline CSS -->

                            <!-- Begin embedded font definitions -->
                            <style id="fonts1" type="text/css">
                                @font-face {
                                    font-family: NeoSansStd-Regular_85;
                                    src: url("{{ asset('forms/lampiris/electricity_natural_gas_du/') }}/fonts/NeoSansStd-Regular_85.woff") format("woff");
                                }

                                @font-face {
                                    font-family: NettoOT-Black_87;
                                    src: url("{{ asset('forms/lampiris/electricity_natural_gas_du/') }}/fonts/NettoOT-Black_87.woff") format("woff");
                                }

                                @font-face {
                                    font-family: OpenSans-Bold_8a;
                                    src: url("{{ asset('forms/lampiris/electricity_natural_gas_du/') }}/fonts/OpenSans-Bold_8a.woff") format("woff");
                                }

                                @font-face {
                                    font-family: OpenSans_82;
                                    src: url("{{ asset('forms/lampiris/electricity_natural_gas_du/') }}/fonts/OpenSans_82.woff") format("woff");
                                }

                                @font-face {
                                    font-family: OpenSans_83;
                                    src: url("{{ asset('forms/lampiris/electricity_natural_gas_du/') }}/fonts/OpenSans_83.woff") format("woff");
                                }
                            </style>
                            <!-- End embedded font definitions -->

                            <!-- Begin page background -->
                            <div id="pg1Overlay" style="width:100%; height:100%; position:absolute; z-index:1; background-color:rgba(0,0,0,0); -webkit-user-select: none;"></div>
                            <div id="pg1" style="-webkit-user-select: none;background: url({{ asset('forms/lampiris/electricity_natural_gas_du/') }}/1/1.svg);"><img width="931" height="1286" data="{{ asset('forms/lampiris/electricity_natural_gas_du/') }}/1/1.svg" type="image/svg+xml" id="pdf1" style="width:931px; height:1286px; -moz-transform:scale(1); z-index: 0;"></object></div>
                            <!-- End page background -->


                            <!-- Begin text definitions (Positioned/styled in CSS) -->
                            <div class="text-container"><span id="t1_1" class="t s1_1">Lampiris exemplaar </span>
                                <span id="t2_1" class="t s1_1">Lampiris-contract voor de levering van groene elektriciteit en/of aardgas, afgesloten voor de duur van één jaar, twee jaar of drie jaar, dat elk jaar </span>
                                <span id="t3_1" class="t s1_1">stilzwijgend wordt verlengd tenzij er 30 dagen vóór het verstrijken van de lopende contractuele periode een opzegging wordt ontvangen. </span>
                                <span id="t4_1" class="t s2_1">Taal </span><span id="t5_1" class="t s2_1">FR </span><span id="t6_1" class="t s2_1">NL </span><span id="t7_1" class="t s2_1">DE </span><span id="t8_1" class="t s2_1">EN </span>
                                <span id="t9_1" class="t v0_1 s2_1">Mw. </span><span id="ta_1" class="t v0_1 s2_1">Dhr. </span><span id="tb_1" class="t v0_1 s2_1">Naam (*) </span>
                                <span id="tc_1" class="t s2_1">Voornaam </span>
                                <span id="td_1" class="t s2_1">Geboortedatum (*) </span><span id="te_1" class="t s2_1">/ </span><span id="tf_1" class="t s2_1">/ </span><span id="tg_1" class="t s2_1">Tel. </span><span id="th_1" class="t v0_1 s2_1">GSM </span>
                                <span id="ti_1" class="t s2_1">E-mail </span>
                                <span id="tj_1" class="t v1_1 s2_1">Bankrekeningnummer </span><span id="tk_1" class="t s2_1">- </span><span id="tl_1" class="t s2_1">- </span><span id="tm_1" class="t s2_1">- </span><span id="tn_1" class="t v2_1 s1_1">(voor eventuele terugbetalingen) </span>
                                <span id="to_1" class="t v3_1 s1_1">Aantal personen gedomicilieerd </span>
                                <span id="tp_1" class="t v3_1 s1_1">op het leveringspunt </span>
                                <span id="tq_1" class="t s3_1">LEVERINGSADRES </span>
                                <span id="tr_1" class="t s2_1">Adres (*) </span><span id="ts_1" class="t v4_1 s2_1">Nr. (*) </span><span id="tt_1" class="t v5_1 s2_1">Bus </span>
                                <span id="tu_1" class="t v6_1 s2_1">Postcode (*) </span><span id="tv_1" class="t s2_1">Plaats (*) </span>
                                <span id="tw_1" class="t s3_1">FACTURATIEADRES </span><span id="tx_1" class="t s4_1">(indien verschillend van het leveringsadres) </span>
                                <span id="ty_1" class="t s2_1">Adres (*) </span><span id="tz_1" class="t s2_1">Nr. (*) </span><span id="t10_1" class="t s2_1">Bus </span>
                                <span id="t11_1" class="t v6_1 s2_1">Postcode (*) </span><span id="t12_1" class="t s2_1">Plaats (*) </span>
                                <span id="t13_1" class="t s5_1">Uw gegevens </span><span id="t14_1" class="t s6_1">(de velden met een (*) zijn verplicht) </span>
                                <span id="t15_1" class="t s5_1">Mijn levering van groene elektriciteit door Lampiris </span>
                                <span id="t16_1" class="t s2_1">tip </span><span id="t17_1" class="t s2_1">TOP </span><span id="t18_1" class="t s2_1">Solar </span>
                                <span id="t19_1" class="t s2_1">1 jaar </span><span id="t1a_1" class="t s2_1">2 jaar </span><span id="t1b_1" class="t s2_1">3 jaar </span>
                                <span id="t1c_1" class="t s7_1">Metertype: </span><span id="t1d_1" class="t s7_1">dag </span><span id="t1e_1" class="t v7_1 s7_1">dag/nacht </span><span id="t1f_1" class="t s7_1">exclusief nacht </span>
                                <span id="t1g_1" class="t s2_1">EAN-code </span>
                                <span id="t1j_1" class="t s3_1">Meternummer </span><span id="t1k_1" class="t s3_1">Meterstand </span>
                                <span id="t1l_1" class="t v2_1 s2_1">Enkelvoudig </span>
                                <span id="t1m_1" class="t s8_1">, </span>
                                <span id="t1n_1" class="t v2_1 s2_1">Tweevoudig Dag </span>
                                <span id="t1o_1" class="t s8_1">, </span>
                                <span id="t1p_1" class="t v2_1 s2_1">Tweevoudig Nacht </span>
                                <span id="t1q_1" class="t s8_1">, </span>
                                <span id="t1r_1" class="t v2_1 s2_1">Excl. nacht </span>
                                <span id="t1s_1" class="t s8_1">, </span>
                                <span id="t1t_1" class="t s2_1">Wat is uw jaarlijkse verbruik </span>
                                <span id="t1u_1" class="t s9_1">1 </span>
                                <span id="t1v_1" class="t s2_1">? </span><span id="t1w_1" class="t s2_1">kWh </span>
                                <span id="t1x_1" class="t s2_1">Verhuist u? </span><span id="t1y_1" class="t s2_1">Ja </span><span id="t1z_1" class="t s2_1">Neen </span>
                                <span id="t20_1" class="t s2_1">Is de meter geopend? </span><span id="t21_1" class="t s2_1">Ja </span><span id="t22_1" class="t s2_1">Neen </span>
                                <span id="t23_1" class="t s2_1">Huidige leverancier </span>
                                <span id="t24_1" class="t s2_1">Gewenste begindatum voor levering </span>
                                <span id="t25_1" class="t s9_1">2 </span>
                                <span id="t26_1" class="t s5_1">Facturatie, periodiciteit, betaling </span>
                                <span id="t27_1" class="t s2_1">Ik wil mijn facturen ontvangen: </span><span id="t28_1" class="t s2_1">via de post </span><span id="t29_1" class="t s2_1">via e-mail </span><span id="t2a_1" class="t s1_1">(vul uw e-mailadres in bij ‘Uw gegevens’) </span>
                                <span id="t2b_1" class="t s2_1">Ik wil mijn facturen ontvangen: </span><span id="t2c_1" class="t s2_1">maandelijks </span><span id="t2d_1" class="t v0_1 s2_1">tweemaandelijks </span><span id="t2e_1" class="t s2_1">driemaandelijks </span>
                                <span id="t2f_1" class="t s2_1">Ik wil mijn facturen betalen via: </span><span id="t2g_1" class="t v8_1 s2_1">overschrijving </span><span id="t2h_1" class="t s2_1">domiciliëring </span><span id="t2i_1" class="t s1_1">(enkel de voorschotten) </span><span id="t2j_1" class="t s2_1">domiciliëring </span><span id="t2k_1" class="t s1_1">(voorschotten en afrekening) </span>
                                <span id="t2l_1" class="t s5_1">Domiciliëring </span><span id="t2m_1" class="t sa_1">(In te vullen in geval van domiciliëring) </span>
                                <span id="t2n_1" class="t sb_1">Alleen de eerste voorschotfactuur en de afrekening worden u per post bezorgd </span>
                                <span id="t2o_1" class="t v9_1 sc_1">Ik, ondergetekende </span><span id="t2p_1" class="t v9_1 sd_1">(naam van de rekeninghouder) </span>
                                <span id="t2q_1" class="t v10_1 se_1" data-mappings='[[11,"fi"]]'>verzoek de ﬁrma Lampiris nv, </span><span id="t2r_1" class="t v10_1 s1_1">Rue Saint-Laurent, 54, 4000 Luik, met ondernemingsnummer BE0859.655.570, </span>
                                <span id="t2s_1" class="t v10_1 s1_1">om vanaf heden en tot uitdrukkelijke herroeping alle facturen te innen van de rekening: </span>
                                <span id="t2t_1" class="t sf_1">IBAN </span><span id="t2u_1" class="t sg_1">- </span><span id="t2v_1" class="t sg_1">- </span><span id="t2w_1" class="t sg_1">- </span>
                                <span id="t2x_1" class="t sf_1">BIC </span>
                                <span id="t2y_1" class="t sf_1">Datum </span>
                                <span id="t2z_1" class="t sf_1">Plaats </span>
                                <span id="t30_1" class="t v10_1 s1_1">Ingevolge de nieuwe Europese normen zijn deze nummers beschikbaar bij uw </span>
                                <span id="t31_1" class="t v10_1 sh_1" data-mappings='[[0,"fi"]]'>ﬁnanciële instelling of op uw rekeninguittreksels. </span>
                                <span id="t32_1" class="t s5_1">Handtekening van de klant </span>
                                <span id="t33_1" class="t v10_1 sc_1">Dit contract is niet geldig zonder de handtekening van de klant. </span>
                                <span id="t34_1" class="t v10_1 sc_1">Naam </span>
                                <span id="t35_1" class="t v10_1 sc_1">Stad </span><span id="t36_1" class="t v11_1 sc_1">Datum </span>
                                <span id="t37_1" class="t sd_1">Ik erken uitdrukkelijk voor de afsluiting van dit contract een kopie te hebben ontvangen van de bijzondere en de algemene voorwaarden </span>
                                <span id="t38_1" class="t sd_1">in bijlage van het contract er kennis van te hebben genomen en ze te hebben begrepen en aanvaard. De persoonlijke gegevens die in dit </span>
                                <span id="t39_1" class="t si_1" data-mappings='[[110,"ff"]]'>contract zijn vermeld, zullen worden verwerkt door Lampiris nv overeenkomstig de toepasselijke wetgeving betreﬀende de bescherming </span>
                                <span id="t3a_1" class="t sd_1">van persoonsgegevens en ons Privacybeleid beschikbaar via de volgende link: www.lampiris.be/nl/privacybeleid. U heeft altijd het recht </span>
                                <span id="t3b_1" class="t sd_1">om uw toestemming te beheren, te raadplegen en uw gegevens te wijzigen in uw klantenzone </span>
                                <span id="t3c_1" class="t v12_1 s1_1">Handtekening van de klant </span><span id="t3d_1" class="t v12_1 s1_1">Lampiris NV, </span>
                                <span id="t3e_1" class="t v12_1 s1_1">Marc Bensadoun, </span>
                                <span id="t3f_1" class="t v12_1 s1_1">Gedelegeerd bestuurder </span>
                                <span id="t3g_1" class="t v12_1 s1_1">Handtekening van de klant, voor akkoord </span>
                                <span id="t3h_1" class="t s5_1">Mijn levering van aardgas door Lampiris </span>
                                <span id="t3i_1" class="t s2_1">tip </span><span id="t3j_1" class="t s2_1">TOP </span>
                                <span id="t3k_1" class="t s2_1">1 jaar </span><span id="t3l_1" class="t s2_1">2 jaar </span><span id="t3m_1" class="t s2_1">3 jaar </span>
                                <span id="t3n_1" class="t s2_1">EAN-code </span>
                                <span id="t3q_1" class="t s3_1">Meternummer </span>
                                <span id="t3r_1" class="t s3_1">Meterstand </span>
                                <span id="t3s_1" class="t s8_1">, </span>
                                <span id="t3t_1" class="t s2_1">Wat is uw jaarlijkse verbruik </span>
                                <span id="t3u_1" class="t s9_1">1 </span>
                                <span id="t3v_1" class="t s2_1">? </span><span id="t3w_1" class="t s2_1">kWh </span>
                                <span id="t3x_1" class="t s2_1">Verhuist u? </span><span id="t3y_1" class="t s2_1">Ja </span><span id="t3z_1" class="t s2_1">Neen </span>
                                <span id="t40_1" class="t v8_1 s2_1">Is de meter geopend? </span><span id="t41_1" class="t s2_1">Ja </span><span id="t42_1" class="t s2_1">Neen </span>
                                <span id="t43_1" class="t v10_1 s2_1">Huidige leverancier </span>
                                <span id="t44_1" class="t v8_1 s2_1">Gewenste begindatum voor levering </span>
                                <span id="t45_1" class="t s9_1">2 </span>
                                <span id="t46_1" class="t s4_1">Eventuele opmerkingen: </span>
                                <span id="t47_1" class="t s2_1">Kader voorbehouden aan Lampiris </span>
                                <span id="t48_1" class="t s2_1">Ref. agent: </span>
                                <span id="t49_1" class="t s2_1">Tariefcode: </span>
                                <span id="t4a_1" class="t v0_1 sj_1">De consument heeft het recht om het contract te herroepen binnen de 14 kalenderdagen na ontvangst van de bevestiging door </span>
                                <span id="t4b_1" class="t v0_1 sj_1">Lampiris van het contract zonder betaling van een boete en zonder opgave van redenen. Gedurende het contract heeft de consument </span>
                                <span id="t4c_1" class="t v0_1 sj_1">op ieder moment het recht om van leverancier te veranderen. Hiervoor moet de consument enkel een andere leverancier van </span>
                                <span id="t4d_1" class="t v0_1 sj_1">elektriciteit en/of gas kiezen, die de nodige formaliteiten zal vervullen. De verbruikte energie moet steeds worden betaald. </span>
                                <span id="t4e_1" class="t m0_1 s1_1">01072019 </span>
                                <span id="t4f_1" class="t sk_1">Contract voor de levering van groene elektriciteit </span>
                                <span id="t4g_1" class="t sk_1">en/of aardgas voor particulieren </span>
                                <span id="t4h_1" class="t s1_1">1 </span>
                                <span id="t4i_1" class="t s1_1">Als u ons uw jaarlijkse verbruik niet meedeelt, dan zullen uw voorschotfacturen worden opgesteld op basis </span>
                                <span id="t4j_1" class="t s1_1">van een schatting. </span>
                                <span id="t4k_1" class="t s1_1">2 </span>
                                <span id="t4l_1" class="t s1_1">Indien technisch mogelijk. De dienstverlening kan van start gaan tijdens de herroepingstermijn van de klant </span>
                                <span id="t4m_1" class="t s1_1">op voorwaarde dat deze hier uitdrukkelijk heeft om verzocht. </span>
                                <span id="t4n_1" class="t sl_1">Ik ontvang graag promotieaanbiedingen van de groep Lampiris: </span><span id="t4o_1" class="t s4_1">Ja </span><span id="t4p_1" class="t s4_1">Neen </span><span id="t4q_1" class="t sl_1">Enkel voor de volgende producten: </span>
                                <span id="t4r_1" class="t s4_1">Groene stroom en aardgas </span><span id="t4s_1" class="t s4_1">Ja </span><span id="t4t_1" class="t s4_1">Neen </span><span id="t4u_1" class="t s4_1">- Isolatie </span><span id="t4v_1" class="t s4_1">Ja </span><span id="t4w_1" class="t s4_1">Neen </span><span id="t4x_1" class="t s4_1">- installatie van verwarmingsketel </span><span id="t4y_1" class="t s4_1">Ja </span><span id="t4z_1" class="t s4_1">Neen </span><span id="t50_1" class="t s4_1">-Laadoplossingen voor elektrische voertuigen </span><span id="t51_1" class="t s4_1">Ja </span><span id="t52_1" class="t s4_1">Neen </span>
                                <span id="t53_1" class="t v13_1 s4_1">zonnepanelen </span><span id="t54_1" class="t s4_1">Ja </span><span id="t55_1" class="t s4_1">Neen </span><span id="t56_1" class="t s4_1">- </span><span id="t57_1" class="t v0_1 s4_1">Bijstand &amp; verzekering voor elektriciteit en gas </span><span id="t58_1" class="t s4_1">Ja </span><span id="t59_1" class="t s4_1">Neen </span><span id="t5a_1" class="t s4_1">- Kortingen bij onze partners </span><span id="t5b_1" class="t s4_1">Ja </span><span id="t5c_1" class="t s4_1">Neen </span>
                                <span id="t5d_1" class="t v14_1 s4_1">Ik schrijf me in op de nieuwsbrief van de groep Lampiris met onder andere informatie over de groep Lampiris, de energiemarkt, nuttige tips en wedstrijden: </span><span id="t5e_1" class="t s4_1">Ja </span><span id="t5f_1" class="t s4_1">Neen </span>
                                <span id="t5g_1" class="t s4_1">Ik geef Lampiris de toestemming om mijn klantenzone te creëren: </span><span id="t5h_1" class="t s4_1">Ja </span><span id="t5i_1" class="t s4_1">Neen </span><span id="t5j_1" class="t s1_1">U heeft altijd het recht om uw toestemming te beheren, te raadplegen en uw gegevens te wijzigen via de klantenzone. </span>
                                <span id="t5k_1" class="t s4_1">Lampiris SA/NV - Rue Saint-Laurent, 54 - 4000 Liège/Luik - Tel: 078 790 790 - www.lampiris.be - RPM Liège- TVA/BTW: BE 0859 655 570 - BNP Paribas Fortis BE38 0015 0942 4272 </span>
                            </div>
                            <!-- End text definitions -->


                            <!-- Begin Form Data -->
                            <input id="form1_1" type="checkbox" name="fr" tabindex="1" data-objref="312 0 R" title="Vos coordonn&eacute;es (les champs marqu&eacute;s de (*) sont obligatoires" data-field-name="Vos coordonnées les champs marqués de  sont obligatoires" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/312 0 R" images="110100" />
                            <input id="form2_1" type="checkbox" name="nl" tabindex="2" data-objref="313 0 R" title="NL" data-field-name="NL" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/313 0 R" images="110100" />
                            <input id="form3_1" type="checkbox" name="de" tabindex="3" data-objref="314 0 R" title="DE" data-field-name="DE" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/314 0 R" images="110100" />
                            <input id="form4_1" type="checkbox" name="en" tabindex="4" data-objref="315 0 R" title="EN" data-field-name="EN" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/315 0 R" images="110100" />
                            <input id="form5_1" type="radio" name="gender" tabindex="5" data-objref="316 0 R" title="M" data-field-name="M" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/316 0 R" images="110100" />
                            <input id="form6_1" type="radio" name="gender" tabindex="6" data-objref="318 0 R" title="Nom" data-field-name="Nom" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/318 0 R" images="110100" />
                            <input id="form7_1" type="text" name="name" tabindex="7" maxlength="41" value="" data-objref="319 0 R" title="undefined" data-field-name="nom" />
                            <input id="form8_1" type="text" name="f_name" tabindex="8" maxlength="41" value="" data-objref="320 0 R" title="undefined" data-field-name="prenom" />
                            <input id="form9_1" type="text" name="date_of_birth" tabindex="9" maxlength="2" value="" data-objref="321 0 R" title="Date de naissance" data-field-name="Date de naissance" />
                            <input id="form10_1" type="text" tabindex="10" maxlength="2" value="" data-objref="322 0 R" title="undefined" data-field-name="mois" />
                            <input id="form11_1" type="text" tabindex="11" maxlength="4" value="" data-objref="323 0 R" title="undefined" data-field-name="annee" />
                            <input id="form12_1" type="text" name="tel" tabindex="12" maxlength="14" value="" data-objref="324 0 R" title="T&eacute;l" data-field-name="Tél" />
                            <input id="form13_1" type="text" name="phone" tabindex="13" maxlength="14" value="" data-objref="325 0 R" title="GSM" data-field-name="GSM" />
                            <input id="form14_1" type="text" name="email" tabindex="14" maxlength="41" value="" data-objref="326 0 R" title="undefined" data-field-name="e-mail" />
                            <input id="form15_1" type="text" name="bank_acc_num1" tabindex="15" maxlength="4" value="" data-objref="327 0 R" title="N° compte bancaire" data-field-name="N compte bancaire 1" />
                            <input id="form16_1" type="text" name="bank_acc_num2" tabindex="16" maxlength="4" value="" data-objref="328 0 R" title="undefined" data-field-name="N compte bancaire 2" />
                            <input id="form17_1" type="text" name="bank_acc_num3" tabindex="17" maxlength="4" value="" data-objref="329 0 R" title="undefined" data-field-name="N compte bancaire 3" />
                            <input id="form18_1" type="text" name="bank_acc_num4" tabindex="18" maxlength="4" value="" data-objref="330 0 R" title="undefined" data-field-name="N compte bancaire 4" />
                            <input id="form19_1" type="text" name="num_person_domi_delivery" tabindex="19" maxlength="2" value="" data-objref="331 0 R" title="Nbre de personnes domicili&eacute;es &agrave; l&#39;adresse" data-field-name="Nbre de personnes domiciliées à ladresse" />
                            <input id="form20_1" type="text" name="address" tabindex="20" maxlength="33" value="" data-objref="332 0 R" title="Adresse" data-field-name="Adresse" />
                            <input id="form21_1" type="text" name="no" tabindex="21" maxlength="3" value="" data-objref="333 0 R" title="N" data-field-name="N" />
                            <input id="form22_1" type="text" name="bus" tabindex="22" maxlength="3" value="" data-objref="334 0 R" title="Bo&icirc;te" data-field-name="Boîte" />
                            <input id="form23_1" type="text" name="postal_code" tabindex="23" maxlength="4" value="" data-objref="335 0 R" title="Code postal" data-field-name="Code postal" />
                            <input id="form24_1" type="text" name="place" tabindex="24" maxlength="35" value="" data-objref="336 0 R" title="Localit&eacute;" data-field-name="Localité" />
                            <input id="form25_1" type="text" name="billing_address" tabindex="25" maxlength="33" value="" data-objref="337 0 R" title="Adresse" data-field-name="Adresse_2" />
                            <input id="form26_1" type="text" name="billing_no" tabindex="26" maxlength="3" value="" data-objref="338 0 R" title="N" data-field-name="N_2" />
                            <input id="form27_1" type="text" name="billing_bus" tabindex="27" maxlength="3" value="" data-objref="339 0 R" title="Bo&icirc;te" data-field-name="Boîte_2" />
                            <input id="form28_1" type="text" name="billing_postal_code" tabindex="28" maxlength="4" value="" data-objref="340 0 R" title="Code postal" data-field-name="Code postal_2" />
                            <input id="form29_1" type="text" name="billing_place" tabindex="29" maxlength="35" value="" data-objref="341 0 R" title="Localit&eacute;" data-field-name="Localité_2" />
                            <input id="form30_1" type="checkbox" name="gree_tip" tabindex="30" data-objref="342 0 R" title="tip" data-field-name="tip" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/342 0 R" images="110100" />
                            <input id="form31_1" type="checkbox" name="gree_top" tabindex="31" data-objref="343 0 R" title="TOP" data-field-name="TOP" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/343 0 R" images="110100" />
                            <input id="form32_1" type="checkbox" name="gas_tip" tabindex="32" data-objref="344 0 R" title="tip" data-field-name="tip_2" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/344 0 R" images="110100" />
                            <input id="form33_1" type="checkbox" name="gas_top" tabindex="33" data-objref="345 0 R" title="TOP" data-field-name="TOP_2" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/345 0 R" images="110100" />
                            <input id="form34_1" type="checkbox" name="gree_1year" tabindex="34" data-objref="346 0 R" title="1 an" data-field-name="1 an" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/346 0 R" images="110100" />
                            <input id="form35_1" type="checkbox" name="gree_2year" tabindex="35" data-objref="347 0 R" title="2 ans" data-field-name="2 ans" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/347 0 R" images="110100" />
                            <input id="form36_1" type="checkbox" name="gree_3year" tabindex="36" data-objref="348 0 R" title="3 ans" data-field-name="3 ans" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/348 0 R" images="110100" />
                            <input id="form37_1" type="checkbox" name="gas_1year" tabindex="37" data-objref="349 0 R" title="1 an" data-field-name="1 an_2" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/349 0 R" images="110100" />
                            <input id="form38_1" type="checkbox" name="gas_2year" tabindex="38" data-objref="350 0 R" title="2 ans" data-field-name="2 ans_2" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/350 0 R" images="110100" />
                            <input id="form39_1" type="checkbox" name="gas_3year" tabindex="39" data-objref="351 0 R" title="3 ans" data-field-name="3 ans_2" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/351 0 R" images="110100" />
                            <input id="form40_1" type="radio" name="meter_type" tabindex="40" data-objref="352 0 R" title="jour" data-field-name="jour" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/352 0 R" images="110100" />
                            <input id="form41_1" type="radio" name="meter_type" tabindex="41" data-objref="353 0 R" title="jour/nuit" data-field-name="journuit" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/353 0 R" images="110100" />
                            <input id="form42_1" type="radio" name="meter_type" tabindex="42" data-objref="354 0 R" title="exclusif nuit" data-field-name="exclusif nuit" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/354 0 R" images="110100" />
                            <input id="form43_1" type="text" name="gas_ean_code" tabindex="43" maxlength="18" value="" data-objref="355 0 R" title="undefined" data-field-name="ean_gaz" />
                            <input id="form44_1" type="text" name="ean_code" tabindex="44" maxlength="18" value="" data-objref="356 0 R" title="Num&eacute;ro du compteur" data-field-name="Numéro du compteur" />
                            <input id="form45_1" type="text" name="gas_meter_number" tabindex="45" maxlength="10" value="" data-objref="357 0 R" title="Num&eacute;ro du compteur" data-field-name="Numéro du compteur_2" />
                            <input id="form46_1" type="text" name="gas_meter_reading1" tabindex="46" maxlength="7" value="" data-objref="358 0 R" title="Index compteur" data-field-name="Index compteur" />
                            <input id="form47_1" type="text" name="gas_meter_reading2" tabindex="47" maxlength="1" value="" data-objref="359 0 R" title="undefined" data-field-name="index compteur 2" />
                            <input id="form48_1" type="text" name="single_meter_num" tabindex="48" maxlength="10" value="" data-objref="360 0 R" title="undefined" data-field-name="N-mono" />
                            <input id="form49_1" type="text" name="single_meter_reading" tabindex="49" maxlength="7" value="" data-objref="361 0 R" title="Mono-horaire" data-field-name="Monohoraire" />
                            <input id="form50_1" type="text" name="single_meter_reading" tabindex="50" maxlength="1" value="" data-objref="362 0 R" title="undefined" data-field-name="monohoraire2" />
                            <input id="form51_1" type="text" name="gas_annual_consumption" tabindex="51" maxlength="6" value="" data-objref="363 0 R" title="Quelle est votre consommation annuelle1" data-field-name="Quelle est votre consommation annuelle1" />
                            <input id="form52_1" type="text" name="Double_meter_num" tabindex="52" maxlength="10" value="" data-objref="364 0 R" title="undefined" data-field-name="N-bi-jour" />
                            <input id="form53_1" type="text" name="Double_meter_reading" tabindex="53" maxlength="7" value="" data-objref="365 0 R" title="Bi-horaire Jour" data-field-name="Bihoraire Jour" />
                            <input id="form54_1" type="text" name="Double_meter_reading" tabindex="54" maxlength="7" value="" data-objref="366 0 R" title="Bi-horaire Jour" data-field-name="Bihoraire Jour" />
                            <input id="form55_1" type="text" name="meter_double_night_num" tabindex="55" maxlength="10" value="" data-objref="367 0 R" title="undefined" data-field-name="N-bi-nuit" />
                            <input id="form56_1" type="text" name="meter_double_night_reading" tabindex="56" maxlength="7" value="" data-objref="368 0 R" title="Bi-horaire Nuit" data-field-name="Bihoraire Nuit" />
                            <input id="form57_1" type="text" name="meter_double_night_reading" tabindex="57" maxlength="1" value="" data-objref="369 0 R" title="undefined" data-field-name="Bihoraire Nuit 2" />
                            <input id="form58_1" type="radio" name="gas_you_moving" tabindex="58" data-objref="370 0 R" title="Oui" data-field-name="Oui" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/370 0 R" images="110100" />
                            <input id="form59_1" type="radio" name="gas_meter_open" tabindex="59" data-objref="371 0 R" title="Oui" data-field-name="Oui_2" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/371 0 R" images="110100" />
                            <input id="form60_1" type="radio" name="gas_you_moving" tabindex="60" data-objref="372 0 R" title="Non" data-field-name="Non" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/372 0 R" images="110100" />
                            <input id="form61_1" type="radio" name="gas_meter_open" tabindex="61" data-objref="373 0 R" title="Non" data-field-name="Non_2" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/373 0 R" images="110100" />
                            <input id="form62_1" type="text" name="meter_excl_night_num" tabindex="62" maxlength="10" value="" data-objref="374 0 R" title="undefined" data-field-name="N-excl-nuit" />
                            <input id="form63_1" type="text" name="meter_excl_night_reading" tabindex="63" maxlength="7" value="" data-objref="375 0 R" title="Excl. nuit" data-field-name="Excl nuit" />
                            <input id="form64_1" type="text" name="meter_excl_night_reading" tabindex="64" maxlength="1" value="" data-objref="376 0 R" title="undefined" data-field-name="Excl nuit 2" />
                            <input id="form65_1" type="text" name="gas_current_supplier" tabindex="65" maxlength="16" value="" data-objref="377 0 R" title="Fournisseur actuel" data-field-name="Fournisseur actuel" />
                            <input id="form66_1" type="text" name="annual_consumption" tabindex="66" maxlength="6" value="" data-objref="378 0 R" title="Quelle est votre consommation annuelle1" data-field-name="Quelle est votre consommation annuelle1_2" />
                            <input id="form67_1" type="text" name="gas_start_day_delivery" tabindex="67" maxlength="2" value="" data-objref="379 0 R" title="Date de d&eacute;but de fourniture souhait&eacute;e2" data-field-name="Date de début de fourniture souhaitée2" />
                            <input id="form68_1" type="text" name="gas_start_month_delivery" tabindex="68" maxlength="2" value="" data-objref="380 0 R" title="Date de d&eacute;but de fourniture souhait&eacute;e2" data-field-name="Date de début de fourniture souhaitée2" />
                            <input id="form69_1" type="text" name="gas_start_year_delivery" tabindex="69" maxlength="4" value="" data-objref="381 0 R" title="undefined" data-field-name="Date de début de fourniture souhaitée3" />
                            <input id="form70_1" type="radio" name="you_moving" tabindex="70" data-objref="382 0 R" title="Oui" data-field-name="Oui_3" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/382 0 R" images="110100" />
                            <input id="form71_1" type="radio" name="you_moving" tabindex="71" data-objref="383 0 R" title="Oui" data-field-name="Oui_4" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/383 0 R" images="110100" />
                            <input id="form72_1" type="radio" name="meter_open" tabindex="72" data-objref="384 0 R" title="Non" data-field-name="Non_3" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/384 0 R" images="110100" />
                            <input id="form73_1" type="radio" name="meter_open" tabindex="73" data-objref="385 0 R" title="Non" data-field-name="Non_4" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/385 0 R" images="110100" />
                            <input id="form74_1" type="text" name="any_comments" tabindex="74" value="" data-objref="386 0 R" title="Remarques &eacute;ventuelles :" data-field-name="Remarques éventuelles" />
                            <input id="form75_1" type="text" name="current_supplier" tabindex="75" maxlength="16" value="" data-objref="387 0 R" title="Fournisseur actuel" data-field-name="Fournisseur actuel_2" />
                            <input id="form76_1" type="text" name="start_day_delivery" tabindex="76" maxlength="2" value="" data-objref="388 0 R" title="Date de d&eacute;but de fourniture souhait&eacute;e2" data-field-name="Date de début de fourniture souhaitée_1" />
                            <input id="form77_1" type="text" name="start_month_delivery" tabindex="77" maxlength="2" value="" data-objref="389 0 R" title="Date de d&eacute;but de fourniture souhait&eacute;e2" data-field-name="Date de début de fourniture souhaitée_2" />
                            <input id="form78_1" type="text" name="start_year_delivery" tabindex="78" maxlength="4" value="" data-objref="390 0 R" title="Date de d&eacute;but de fourniture souhait&eacute;e2" data-field-name="Date de début de fourniture souhaitée_3" />
                            <input id="form79_1" type="radio" name="receive_promotional_offer" tabindex="79" data-objref="391 0 R" title="Oui" data-field-name="Oui_5" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/391 0 R" images="110100" />
                            <input id="form80_1" type="radio" name="receive_promotional_offer" tabindex="80" data-objref="392 0 R" title="Non" data-field-name="Non_5" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/392 0 R" images="110100" />
                            <input id="form81_1" type="radio" name="electricity_gas" tabindex="81" data-objref="393 0 R" title="Oui" data-field-name="Oui_6" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/393 0 R" images="110100" />
                            <input id="form82_1" type="radio" name="electricity_gas" tabindex="82" data-objref="394 0 R" title="Non" data-field-name="Non_6" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/394 0 R" images="110100" />
                            <input id="form83_1" type="radio" name="insulation" tabindex="83" data-objref="395 0 R" title="Oui" data-field-name="Oui_7" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/395 0 R" images="110100" />
                            <input id="form84_1" type="radio" name="insulation" tabindex="84" data-objref="396 0 R" title="Non" data-field-name="Non_7" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/396 0 R" images="110100" />
                            <input id="form85_1" type="radio" name="boiler_installation" tabindex="85" data-objref="397 0 R" title="Oui" data-field-name="Oui_8" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/397 0 R" images="110100" />
                            <input id="form86_1" type="radio" name="boiler_installation" tabindex="86" data-objref="398 0 R" title="Non" data-field-name="Non_8" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/398 0 R" images="110100" />
                            <input id="form87_1" type="radio" name="solar_panels" tabindex="87" data-objref="399 0 R" title="Oui" data-field-name="Oui_9" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/399 0 R" images="110100" />
                            <input id="form88_1" type="radio" name="solar_panels" tabindex="88" data-objref="400 0 R" title="Non" data-field-name="Non_9" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/400 0 R" images="110100" />
                            <input id="form89_1" type="radio" name="insurance_for_electricity" tabindex="89" data-objref="401 0 R" title="Oui" data-field-name="Oui_10" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/401 0 R" images="110100" />
                            <input id="form90_1" type="radio" name="insurance_for_electricity" tabindex="90" data-objref="402 0 R" title="Non" data-field-name="Non_10" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/402 0 R" images="110100" />
                            <input id="form91_1" type="radio" name="discounts_partners" tabindex="91" data-objref="403 0 R" title="Oui" data-field-name="Oui_11" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/403 0 R" images="110100" />
                            <input id="form92_1" type="radio" name="discounts_partners" tabindex="92" data-objref="404 0 R" title="Non" data-field-name="Non_11" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/404 0 R" images="110100" />
                            <input id="form93_1" type="radio" name="solutions_lectric" tabindex="93" data-objref="405 0 R" title="Oui" data-field-name="Oui_12" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/405 0 R" images="110100" />
                            <input id="form94_1" type="radio" name="solutions_lectric" tabindex="94" data-objref="406 0 R" title="Non" data-field-name="Non_12" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/406 0 R" images="110100" />
                            <input id="form95_1" type="radio" name="subscribe" tabindex="95" data-objref="407 0 R" title="Oui" data-field-name="Oui_13" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/407 0 R" images="110100" />
                            <input id="form96_1" type="radio" name="subscribe" tabindex="96" data-objref="408 0 R" title="Non" data-field-name="Non_13" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/408 0 R" images="110100" />
                            <input id="form97_1" type="radio" name="customer_zone" tabindex="97" data-objref="409 0 R" title="Oui" data-field-name="Oui_14" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/409 0 R" images="110100" />
                            <input id="form98_1" type="radio" name="customer_zone" tabindex="98" data-objref="410 0 R" title="Non  -  Vous avez toujours le droit de g&eacute;rer vos consentements, de consulter et de rectifier vos donn&eacute;es via votre espace client" data-field-name="Non_15" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/410 0 R" images="110100" />
                            <input id="form99_1" type="radio" name="receive_invoices_through" tabindex="99" data-objref="412 0 R" title="par courrier" data-field-name="par courrier" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/412 0 R" images="110100" />
                            <input id="form100_1" type="radio" name="receive_invoices_by" tabindex="100" data-objref="413 0 R" title="tous les mois" data-field-name="tous les mois" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/413 0 R" images="110100" />
                            <input id="form101_1" type="radio" name="pay_invoices_via" tabindex="101" data-objref="414 0 R" title="par virement bancaire" data-field-name="par virement bancaire" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/414 0 R" images="110100" />
                            <input id="form102_1" type="radio" name="receive_invoices_through" tabindex="102" data-objref="415 0 R" title="par e-mail (veuillez compl&eacute;ter votre adresse e-mail dans &quot;Vos Coordonn&eacute;es" data-field-name="par email veuillez compléter votre adresse email dans Vos Coordonnées" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/415 0 R" images="110100" />
                            <input id="form103_1" type="radio" name="receive_invoices_by" tabindex="103" data-objref="416 0 R" title="tous les 2 mois" data-field-name="tous les 2 mois" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/416 0 R" images="110100" />
                            <input id="form104_1" type="radio" name="receive_invoices_by" tabindex="104" data-objref="417 0 R" title="tous les 3 mois" data-field-name="tous les 3 mois" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/417 0 R" images="110100" />
                            <input id="form105_1" type="radio" name="pay_invoices_via" tabindex="105" data-objref="418 0 R" title="par domiciliation (veuillez compl&eacute;ter le talon ci-dessous" data-field-name="par domiciliation veuillez compléter le talon cidessous" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/418 0 R" images="110100" />
                            <input id="form106_1" type="text" name="undersigned" tabindex="106" maxlength="15" value="" data-objref="419 0 R" title="Je soussign&eacute;(e) (nom du titulaire du compte" data-field-name="Je soussignée nom du titulaire du compte" />
                            <input id="form107_1" type="text" name="cus_name" tabindex="107" maxlength="22" value="" data-objref="420 0 R" title="Nom" data-field-name="Nom_2" />
                            <input id="form108_1" type="text" name="city" tabindex="108" maxlength="12" value="" data-objref="421 0 R" title="Ville" data-field-name="Ville" />
                            <input id="form109_1" type="text" name="cus_date_day" tabindex="109" maxlength="2" value="" data-objref="422 0 R" title="Date" data-field-name="Date_signature_1" />
                            <input id="form110_1" type="text" name="cus_date_month" tabindex="110" maxlength="2" value="" data-objref="423 0 R" title="Date" data-field-name="Date_signature_2" />
                            <input id="form111_1" type="text" name="cus_date_year" tabindex="111" maxlength="4" value="" data-objref="424 0 R" title="Date" data-field-name="Date_signature_3" />
                            <input id="form112_1" type="text" name="iban1" tabindex="112" maxlength="4" value="" data-objref="425 0 R" title="IBAN" data-field-name="IBAN" />
                            <input id="form113_1" type="text" name="iban2" tabindex="113" maxlength="4" value="" data-objref="426 0 R" title="IBAN" data-field-name="IBAN" />
                            <input id="form114_1" type="text" name="iban3" tabindex="114" maxlength="4" value="" data-objref="427 0 R" title="IBAN" data-field-name="IBAN" />
                            <input id="form115_1" type="text" name="iban4" tabindex="115" maxlength="4" value="" data-objref="428 0 R" title="IBAN" data-field-name="IBAN" />
                            <input id="form116_1" type="text" name="bic" tabindex="116" maxlength="8" value="" data-objref="429 0 R" title="BIC" data-field-name="BIC" />
                            <input id="form117_1" type="text" name="date_day" tabindex="117" maxlength="2" value="" data-objref="430 0 R" title="Date" data-field-name="Date_21" />
                            <input id="form118_1" type="text" name="date_month" tabindex="118" maxlength="2" value="" data-objref="431 0 R" title="Date" data-field-name="Date_22" />
                            <input id="form119_1" type="text" name="date_year" tabindex="119" maxlength="4" value="" data-objref="432 0 R" title="Date" data-field-name="Date_23" />
                            <input id="form120_1" type="text" name="cus_place" tabindex="120" maxlength="13" value="" data-objref="433 0 R" title="Lieu" data-field-name="Lieu" />
                            <input id="form121_1" type="text" name="signature" tabindex="121" value="" data-objref="434 0 R" title="Signature du client" data-field-name="Signature du client" />
                            <input id="form122_1" type="text" tabindex="122" value="" data-objref="435 0 R" title="Signature du client, pour accord" data-field-name="Signature du client pour accord" />
                            <input id="form123_1" type="text" name="ref_agent" tabindex="123" maxlength="11" value="" data-objref="436 0 R" title="R&eacute;f. agent" data-field-name="Réf agent" />
                            <input id="form124_1" type="text" tabindex="124" value="" data-objref="437 0 R" title="Exemplaire Lampiris" data-field-name="Exemplaire Lampiris" />
                            <input id="form125_1" type="text" name="rate_code" tabindex="125" maxlength="9" value="" data-objref="438 0 R" title="Code Tarification" data-field-name="Code Tarification" />
                            <input id="form126_1" type="checkbox" tabindex="126" data-objref="439 0 R" title="TOP" data-field-name="TOP" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/439 0 R" images="110100" />
                            <input id="form127_1" type="radio" name="pay_invoices_via" tabindex="127" data-objref="440 0 R" title="par domiciliation 2" data-field-name="par domiciliation 2" value="On" imageName="{{ asset('forms/lampiris/electricity_natural_gas_du/1/form/') }}/440 0 R" images="110100" />

                            <!-- End Form Data -->

                            <!-- call to setup Radio and Checkboxes as images, without this call images dont work for them -->
                            <script type="text/javascript">
                                replaceChecks(false);
                            </script>

                        </div>

                    </div>
                </div>
                <div id="page2" style="width: 931px; height: 1286px; margin-top:20px;" class="page">
                    <div class="page-inner" style="width: 931px; height: 1286px;">

                        <div id="p2" class="pageArea" style="overflow: hidden; position: relative; width: 931px; height: 1286px; margin-top:auto; margin-left:auto; margin-right:auto; background-color: white;">

                            <!-- Begin shared CSS values -->
                            <style class="shared-css" type="text/css">
                                .t {
                                    transform-origin: bottom left;
                                    z-index: 2;
                                    position: absolute;
                                    white-space: pre;
                                    overflow: visible;
                                    line-height: 1.5;
                                }

                                .text-container {
                                    white-space: pre;
                                }

                                @supports (-webkit-touch-callout: none) {
                                    .text-container {
                                        white-space: normal;
                                    }
                                }
                            </style>
                            <!-- End shared CSS values -->


                            <!-- Begin inline CSS -->
                            <style type="text/css">
                                #t1_2 {
                                    left: 31px;
                                    bottom: 1248px;
                                    letter-spacing: -0.15px;
                                }

                                #t2_2 {
                                    left: 31px;
                                    bottom: 1237px;
                                    letter-spacing: -0.15px;
                                }

                                #t3_2 {
                                    left: 31px;
                                    bottom: 1217px;
                                    letter-spacing: -0.41px;
                                }

                                #t4_2 {
                                    left: 31px;
                                    bottom: 1197px;
                                    letter-spacing: -0.41px;
                                }

                                #t5_2 {
                                    left: 31px;
                                    bottom: 1184px;
                                    letter-spacing: -0.15px;
                                }

                                #t6_2 {
                                    left: 31px;
                                    bottom: 1170px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 1.69px;
                                }

                                #t7_2 {
                                    left: 112px;
                                    bottom: 1170px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.69px;
                                }

                                #t8_2 {
                                    left: 253px;
                                    bottom: 1170px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.69px;
                                }

                                #t9_2 {
                                    left: 330px;
                                    bottom: 1170px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.69px;
                                }

                                #ta_2 {
                                    left: 31px;
                                    bottom: 1159px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.07px;
                                }

                                #tb_2 {
                                    left: 31px;
                                    bottom: 1148px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.13px;
                                }

                                #tc_2 {
                                    left: 391px;
                                    bottom: 1148px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 1.13px;
                                }

                                #td_2 {
                                    left: 31px;
                                    bottom: 1138px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.6px;
                                }

                                #te_2 {
                                    left: 229px;
                                    bottom: 1138px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.6px;
                                }

                                #tf_2 {
                                    left: 31px;
                                    bottom: 1127px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.78px;
                                }

                                #tg_2 {
                                    left: 323px;
                                    bottom: 1127px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.78px;
                                }

                                #th_2 {
                                    left: 440px;
                                    bottom: 1127px;
                                    letter-spacing: -0.16px;
                                }

                                #ti_2 {
                                    left: 31px;
                                    bottom: 1116px;
                                    letter-spacing: -0.14px;
                                    word-spacing: 0.28px;
                                }

                                #tj_2 {
                                    left: 133px;
                                    bottom: 1116px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.27px;
                                }

                                #tk_2 {
                                    left: 184px;
                                    bottom: 1116px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.27px;
                                }

                                #tl_2 {
                                    left: 31px;
                                    bottom: 1106px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.99px;
                                }

                                #tm_2 {
                                    left: 31px;
                                    bottom: 1095px;
                                    letter-spacing: -0.16px;
                                }

                                #tn_2 {
                                    left: 54px;
                                    bottom: 1095px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.83px;
                                }

                                #to_2 {
                                    left: 120px;
                                    bottom: 1095px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.83px;
                                }

                                #tp_2 {
                                    left: 31px;
                                    bottom: 1084px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.31px;
                                }

                                #tq_2 {
                                    left: 31px;
                                    bottom: 1073px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.45px;
                                }

                                #tr_2 {
                                    left: 262px;
                                    bottom: 1073px;
                                    letter-spacing: -0.17px;
                                    word-spacing: 0.45px;
                                }

                                #ts_2 {
                                    left: 298px;
                                    bottom: 1073px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.45px;
                                }

                                #tt_2 {
                                    left: 31px;
                                    bottom: 1063px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.17px;
                                }

                                #tu_2 {
                                    left: 331px;
                                    bottom: 1063px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.16px;
                                }

                                #tv_2 {
                                    left: 31px;
                                    bottom: 1052px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 1.1px;
                                }

                                #tw_2 {
                                    left: 113px;
                                    bottom: 1052px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 1.1px;
                                }

                                #tx_2 {
                                    left: 31px;
                                    bottom: 1041px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.81px;
                                }

                                #ty_2 {
                                    left: 31px;
                                    bottom: 1031px;
                                    letter-spacing: -0.15px;
                                }

                                #tz_2 {
                                    left: 95px;
                                    bottom: 1031px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.2px;
                                }

                                #t10_2 {
                                    left: 172px;
                                    bottom: 1031px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.2px;
                                }

                                #t11_2 {
                                    left: 31px;
                                    bottom: 1020px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.71px;
                                }

                                #t12_2 {
                                    left: 31px;
                                    bottom: 1009px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.75px;
                                }

                                #t13_2 {
                                    left: 174px;
                                    bottom: 1009px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.75px;
                                }

                                #t14_2 {
                                    left: 31px;
                                    bottom: 999px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.82px;
                                }

                                #t15_2 {
                                    left: 31px;
                                    bottom: 988px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.51px;
                                }

                                #t16_2 {
                                    left: 31px;
                                    bottom: 977px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.93px;
                                }

                                #t17_2 {
                                    left: 31px;
                                    bottom: 966px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.8px;
                                }

                                #t18_2 {
                                    left: 31px;
                                    bottom: 956px;
                                    letter-spacing: -0.15px;
                                    word-spacing: -0.33px;
                                }

                                #t19_2 {
                                    left: 31px;
                                    bottom: 945px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.01px;
                                }

                                #t1a_2 {
                                    left: 31px;
                                    bottom: 934px;
                                    letter-spacing: -0.14px;
                                }

                                #t1b_2 {
                                    left: 95px;
                                    bottom: 934px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.37px;
                                }

                                #t1c_2 {
                                    left: 193px;
                                    bottom: 934px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.37px;
                                }

                                #t1d_2 {
                                    left: 31px;
                                    bottom: 924px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.38px;
                                }

                                #t1e_2 {
                                    left: 31px;
                                    bottom: 913px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.45px;
                                }

                                #t1f_2 {
                                    left: 31px;
                                    bottom: 902px;
                                    letter-spacing: -0.15px;
                                    word-spacing: -0.25px;
                                }

                                #t1g_2 {
                                    left: 31px;
                                    bottom: 892px;
                                    letter-spacing: -0.15px;
                                    word-spacing: -0.55px;
                                }

                                #t1h_2 {
                                    left: 159px;
                                    bottom: 892px;
                                    letter-spacing: -0.15px;
                                    word-spacing: -0.55px;
                                }

                                #t1i_2 {
                                    left: 375px;
                                    bottom: 892px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.55px;
                                }

                                #t1j_2 {
                                    left: 31px;
                                    bottom: 881px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.43px;
                                }

                                #t1k_2 {
                                    left: 31px;
                                    bottom: 870px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.55px;
                                }

                                #t1l_2 {
                                    left: 31px;
                                    bottom: 859px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.94px;
                                }

                                #t1m_2 {
                                    left: 31px;
                                    bottom: 849px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.64px;
                                }

                                #t1n_2 {
                                    left: 31px;
                                    bottom: 838px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.64px;
                                }

                                #t1o_2 {
                                    left: 337px;
                                    bottom: 838px;
                                    letter-spacing: -0.17px;
                                    word-spacing: 0.64px;
                                }

                                #t1p_2 {
                                    left: 399px;
                                    bottom: 838px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.64px;
                                }

                                #t1q_2 {
                                    left: 31px;
                                    bottom: 827px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.75px;
                                }

                                #t1r_2 {
                                    left: 31px;
                                    bottom: 817px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.11px;
                                }

                                #t1s_2 {
                                    left: 31px;
                                    bottom: 806px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.23px;
                                }

                                #t1t_2 {
                                    left: 31px;
                                    bottom: 795px;
                                    letter-spacing: -0.14px;
                                }

                                #t1u_2 {
                                    left: 66px;
                                    bottom: 795px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.36px;
                                }

                                #t1v_2 {
                                    left: 120px;
                                    bottom: 795px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.36px;
                                }

                                #t1w_2 {
                                    left: 31px;
                                    bottom: 785px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.35px;
                                }

                                #t1x_2 {
                                    left: 457px;
                                    bottom: 785px;
                                }

                                #t1y_2 {
                                    left: 31px;
                                    bottom: 774px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.2px;
                                }

                                #t1z_2 {
                                    left: 194px;
                                    bottom: 774px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.2px;
                                }

                                #t20_2 {
                                    left: 286px;
                                    bottom: 774px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.2px;
                                }

                                #t21_2 {
                                    left: 31px;
                                    bottom: 763px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.17px;
                                }

                                #t22_2 {
                                    left: 31px;
                                    bottom: 752px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.47px;
                                }

                                #t23_2 {
                                    left: 298px;
                                    bottom: 752px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.47px;
                                }

                                #t24_2 {
                                    left: 377px;
                                    bottom: 752px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.47px;
                                }

                                #t25_2 {
                                    left: 31px;
                                    bottom: 742px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 1.49px;
                                }

                                #t26_2 {
                                    left: 298px;
                                    bottom: 742px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 1.49px;
                                }

                                #t27_2 {
                                    left: 336px;
                                    bottom: 742px;
                                    letter-spacing: -0.15px;
                                }

                                #t28_2 {
                                    left: 393px;
                                    bottom: 742px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.48px;
                                }

                                #t29_2 {
                                    left: 31px;
                                    bottom: 731px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.44px;
                                }

                                #t2a_2 {
                                    left: 362px;
                                    bottom: 731px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.44px;
                                }

                                #t2b_2 {
                                    left: 31px;
                                    bottom: 720px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.9px;
                                }

                                #t2c_2 {
                                    left: 31px;
                                    bottom: 710px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.3px;
                                }

                                #t2d_2 {
                                    left: 31px;
                                    bottom: 699px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.62px;
                                }

                                #t2e_2 {
                                    left: 332px;
                                    bottom: 699px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.62px;
                                }

                                #t2f_2 {
                                    left: 399px;
                                    bottom: 699px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.62px;
                                }

                                #t2g_2 {
                                    left: 31px;
                                    bottom: 688px;
                                    letter-spacing: -0.16px;
                                }

                                #t2h_2 {
                                    left: 31px;
                                    bottom: 674px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.25px;
                                }

                                #t2i_2 {
                                    left: 31px;
                                    bottom: 664px;
                                    letter-spacing: -0.16px;
                                }

                                #t2j_2 {
                                    left: 31px;
                                    bottom: 643px;
                                    letter-spacing: -0.43px;
                                }

                                #t2k_2 {
                                    left: 31px;
                                    bottom: 630px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.12px;
                                }

                                #t2l_2 {
                                    left: 31px;
                                    bottom: 619px;
                                    letter-spacing: -0.15px;
                                }

                                #t2m_2 {
                                    left: 31px;
                                    bottom: 599px;
                                    letter-spacing: -0.41px;
                                }

                                #t2n_2 {
                                    left: 31px;
                                    bottom: 585px;
                                    letter-spacing: -0.15px;
                                }

                                #t2o_2 {
                                    left: 45px;
                                    bottom: 585px;
                                    letter-spacing: -0.15px;
                                }

                                #t2p_2 {
                                    left: 31px;
                                    bottom: 575px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.06px;
                                }

                                #t2q_2 {
                                    left: 31px;
                                    bottom: 564px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.37px;
                                }

                                #t2r_2 {
                                    left: 31px;
                                    bottom: 553px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.35px;
                                }

                                #t2s_2 {
                                    left: 31px;
                                    bottom: 543px;
                                    letter-spacing: -0.15px;
                                }

                                #t2t_2 {
                                    left: 31px;
                                    bottom: 528px;
                                    letter-spacing: -0.15px;
                                }

                                #t2u_2 {
                                    left: 47px;
                                    bottom: 528px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.8px;
                                }

                                #t2v_2 {
                                    left: 31px;
                                    bottom: 518px;
                                    letter-spacing: -0.16px;
                                }

                                #t2w_2 {
                                    left: 31px;
                                    bottom: 504px;
                                    letter-spacing: -0.15px;
                                }

                                #t2x_2 {
                                    left: 46px;
                                    bottom: 504px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.55px;
                                }

                                #t2y_2 {
                                    left: 31px;
                                    bottom: 493px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.58px;
                                }

                                #t2z_2 {
                                    left: 31px;
                                    bottom: 482px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.75px;
                                }

                                #t30_2 {
                                    left: 31px;
                                    bottom: 472px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.72px;
                                }

                                #t31_2 {
                                    left: 31px;
                                    bottom: 461px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.45px;
                                }

                                #t32_2 {
                                    left: 31px;
                                    bottom: 450px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.61px;
                                }

                                #t33_2 {
                                    left: 31px;
                                    bottom: 439px;
                                    letter-spacing: -0.15px;
                                }

                                #t34_2 {
                                    left: 31px;
                                    bottom: 425px;
                                    letter-spacing: -0.17px;
                                }

                                #t35_2 {
                                    left: 46px;
                                    bottom: 425px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.06px;
                                }

                                #t36_2 {
                                    left: 31px;
                                    bottom: 415px;
                                    letter-spacing: -0.15px;
                                }

                                #t37_2 {
                                    left: 31px;
                                    bottom: 401px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.09px;
                                }

                                #t38_2 {
                                    left: 31px;
                                    bottom: 390px;
                                    letter-spacing: -0.16px;
                                }

                                #t39_2 {
                                    left: 31px;
                                    bottom: 376px;
                                    letter-spacing: -0.15px;
                                    word-spacing: -0.34px;
                                }

                                #t3a_2 {
                                    left: 31px;
                                    bottom: 365px;
                                    letter-spacing: -0.15px;
                                }

                                #t3b_2 {
                                    left: 31px;
                                    bottom: 351px;
                                    letter-spacing: -0.15px;
                                }

                                #t3c_2 {
                                    left: 31px;
                                    bottom: 337px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.6px;
                                }

                                #t3d_2 {
                                    left: 31px;
                                    bottom: 326px;
                                    letter-spacing: -0.15px;
                                    word-spacing: -0.17px;
                                }

                                #t3e_2 {
                                    left: 31px;
                                    bottom: 316px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.28px;
                                }

                                #t3f_2 {
                                    left: 31px;
                                    bottom: 305px;
                                    letter-spacing: -0.16px;
                                }

                                #t3g_2 {
                                    left: 31px;
                                    bottom: 291px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.26px;
                                }

                                #t3h_2 {
                                    left: 31px;
                                    bottom: 280px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.71px;
                                }

                                #t3i_2 {
                                    left: 31px;
                                    bottom: 269px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.58px;
                                }

                                #t3j_2 {
                                    left: 31px;
                                    bottom: 259px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.98px;
                                }

                                #t3k_2 {
                                    left: 31px;
                                    bottom: 248px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.31px;
                                }

                                #t3l_2 {
                                    left: 31px;
                                    bottom: 237px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.02px;
                                }

                                #t3m_2 {
                                    left: 31px;
                                    bottom: 227px;
                                    letter-spacing: -0.15px;
                                }

                                #t3n_2 {
                                    left: 31px;
                                    bottom: 212px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.95px;
                                }

                                #t3o_2 {
                                    left: 31px;
                                    bottom: 202px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.07px;
                                }

                                #t3p_2 {
                                    left: 449px;
                                    bottom: 202px;
                                    letter-spacing: -0.17px;
                                }

                                #t3q_2 {
                                    left: 31px;
                                    bottom: 191px;
                                    letter-spacing: -0.15px;
                                }

                                #t3r_2 {
                                    left: 31px;
                                    bottom: 177px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.4px;
                                }

                                #t3s_2 {
                                    left: 31px;
                                    bottom: 166px;
                                    letter-spacing: -0.15px;
                                    word-spacing: -0.02px;
                                }

                                #t3t_2 {
                                    left: 31px;
                                    bottom: 156px;
                                    letter-spacing: -0.15px;
                                    word-spacing: -0.02px;
                                }

                                #t3u_2 {
                                    left: 31px;
                                    bottom: 145px;
                                    letter-spacing: -0.16px;
                                }

                                #t3v_2 {
                                    left: 31px;
                                    bottom: 131px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.61px;
                                }

                                #t3w_2 {
                                    left: 31px;
                                    bottom: 120px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.09px;
                                }

                                #t3x_2 {
                                    left: 31px;
                                    bottom: 109px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.07px;
                                }

                                #t3y_2 {
                                    left: 31px;
                                    bottom: 99px;
                                    letter-spacing: -0.15px;
                                }

                                #t3z_2 {
                                    left: 31px;
                                    bottom: 85px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.16px;
                                }

                                #t40_2 {
                                    left: 31px;
                                    bottom: 74px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.17px;
                                }

                                #t41_2 {
                                    left: 31px;
                                    bottom: 54px;
                                    letter-spacing: -0.42px;
                                }

                                #t42_2 {
                                    left: 31px;
                                    bottom: 40px;
                                    letter-spacing: -0.15px;
                                }

                                #t43_2 {
                                    left: 43px;
                                    bottom: 40px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.06px;
                                }

                                #t44_2 {
                                    left: 31px;
                                    bottom: 29px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.48px;
                                }

                                #t45_2 {
                                    left: 31px;
                                    bottom: 19px;
                                    letter-spacing: -0.15px;
                                }

                                #t46_2 {
                                    left: 468px;
                                    bottom: 1248px;
                                    letter-spacing: -0.15px;
                                }

                                #t47_2 {
                                    left: 483px;
                                    bottom: 1248px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.73px;
                                }

                                #t48_2 {
                                    left: 468px;
                                    bottom: 1237px;
                                    letter-spacing: -0.15px;
                                }

                                #t49_2 {
                                    left: 468px;
                                    bottom: 1221px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.59px;
                                }

                                #t4a_2 {
                                    left: 468px;
                                    bottom: 1210px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.22px;
                                }

                                #t4b_2 {
                                    left: 468px;
                                    bottom: 1199px;
                                    letter-spacing: -0.16px;
                                }

                                #t4c_2 {
                                    left: 468px;
                                    bottom: 1183px;
                                    letter-spacing: -0.16px;
                                }

                                #t4d_2 {
                                    left: 477px;
                                    bottom: 1166px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.56px;
                                }

                                #t4e_2 {
                                    left: 477px;
                                    bottom: 1155px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.01px;
                                }

                                #t4f_2 {
                                    left: 477px;
                                    bottom: 1145px;
                                    letter-spacing: -0.14px;
                                }

                                #t4g_2 {
                                    left: 477px;
                                    bottom: 1128px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.61px;
                                }

                                #t4h_2 {
                                    left: 477px;
                                    bottom: 1117px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.11px;
                                }

                                #t4i_2 {
                                    left: 477px;
                                    bottom: 1106px;
                                    letter-spacing: -0.15px;
                                }

                                #t4j_2 {
                                    left: 468px;
                                    bottom: 1090px;
                                    letter-spacing: -0.15px;
                                }

                                #t4k_2 {
                                    left: 477px;
                                    bottom: 1073px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.63px;
                                }

                                #t4l_2 {
                                    left: 477px;
                                    bottom: 1062px;
                                    letter-spacing: -0.15px;
                                }

                                #t4m_2 {
                                    left: 477px;
                                    bottom: 1046px;
                                    letter-spacing: -0.16px;
                                }

                                #t4n_2 {
                                    left: 477px;
                                    bottom: 1029px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.27px;
                                }

                                #t4o_2 {
                                    left: 477px;
                                    bottom: 1018px;
                                    letter-spacing: -0.15px;
                                }

                                #t4p_2 {
                                    left: 468px;
                                    bottom: 1002px;
                                    letter-spacing: -0.15px;
                                }

                                #t4q_2 {
                                    left: 482px;
                                    bottom: 1002px;
                                    letter-spacing: -0.15px;
                                    word-spacing: -0.27px;
                                }

                                #t4r_2 {
                                    left: 468px;
                                    bottom: 991px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.31px;
                                }

                                #t4s_2 {
                                    left: 468px;
                                    bottom: 980px;
                                    letter-spacing: -0.16px;
                                }

                                #t4t_2 {
                                    left: 468px;
                                    bottom: 964px;
                                    letter-spacing: -0.15px;
                                }

                                #t4u_2 {
                                    left: 484px;
                                    bottom: 964px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.4px;
                                }

                                #t4v_2 {
                                    left: 468px;
                                    bottom: 953px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.6px;
                                }

                                #t4w_2 {
                                    left: 468px;
                                    bottom: 942px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.12px;
                                }

                                #t4x_2 {
                                    left: 468px;
                                    bottom: 932px;
                                    letter-spacing: -0.15px;
                                }

                                #t4y_2 {
                                    left: 468px;
                                    bottom: 915px;
                                    letter-spacing: -0.15px;
                                }

                                #t4z_2 {
                                    left: 485px;
                                    bottom: 915px;
                                    letter-spacing: -0.14px;
                                    word-spacing: 2.13px;
                                }

                                #t50_2 {
                                    left: 468px;
                                    bottom: 904px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.54px;
                                }

                                #t51_2 {
                                    left: 468px;
                                    bottom: 894px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.1px;
                                }

                                #t52_2 {
                                    left: 468px;
                                    bottom: 883px;
                                    letter-spacing: -0.16px;
                                }

                                #t53_2 {
                                    left: 468px;
                                    bottom: 866px;
                                    letter-spacing: -0.15px;
                                }

                                #t54_2 {
                                    left: 485px;
                                    bottom: 866px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.2px;
                                }

                                #t55_2 {
                                    left: 468px;
                                    bottom: 856px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.12px;
                                }

                                #t56_2 {
                                    left: 468px;
                                    bottom: 845px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.17px;
                                }

                                #t57_2 {
                                    left: 468px;
                                    bottom: 834px;
                                    letter-spacing: -0.15px;
                                }

                                #t58_2 {
                                    left: 468px;
                                    bottom: 817px;
                                    letter-spacing: -0.15px;
                                }

                                #t59_2 {
                                    left: 485px;
                                    bottom: 817px;
                                    letter-spacing: -0.14px;
                                    word-spacing: 1.94px;
                                }

                                #t5a_2 {
                                    left: 468px;
                                    bottom: 807px;
                                    letter-spacing: -0.15px;
                                }

                                #t5b_2 {
                                    left: 468px;
                                    bottom: 790px;
                                    letter-spacing: -0.15px;
                                }

                                #t5c_2 {
                                    left: 484px;
                                    bottom: 790px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.16px;
                                }

                                #t5d_2 {
                                    left: 468px;
                                    bottom: 779px;
                                    letter-spacing: -0.14px;
                                    word-spacing: 4.79px;
                                }

                                #t5e_2 {
                                    left: 468px;
                                    bottom: 769px;
                                    letter-spacing: -0.15px;
                                }

                                #t5f_2 {
                                    left: 468px;
                                    bottom: 746px;
                                    letter-spacing: -0.41px;
                                }

                                #t5g_2 {
                                    left: 468px;
                                    bottom: 730px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.77px;
                                }

                                #t5h_2 {
                                    left: 468px;
                                    bottom: 719px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.11px;
                                }

                                #t5i_2 {
                                    left: 468px;
                                    bottom: 709px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.92px;
                                }

                                #t5j_2 {
                                    left: 468px;
                                    bottom: 698px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.21px;
                                }

                                #t5k_2 {
                                    left: 468px;
                                    bottom: 687px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.28px;
                                }

                                #t5l_2 {
                                    left: 468px;
                                    bottom: 676px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.05px;
                                }

                                #t5m_2 {
                                    left: 468px;
                                    bottom: 666px;
                                    letter-spacing: -0.15px;
                                    word-spacing: -0.39px;
                                }

                                #t5n_2 {
                                    left: 468px;
                                    bottom: 655px;
                                    letter-spacing: -0.17px;
                                }

                                #t5o_2 {
                                    left: 468px;
                                    bottom: 632px;
                                    letter-spacing: -0.39px;
                                }

                                #t5p_2 {
                                    left: 468px;
                                    bottom: 616px;
                                    letter-spacing: -0.15px;
                                }

                                #t5q_2 {
                                    left: 483px;
                                    bottom: 616px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.32px;
                                }

                                #t5r_2 {
                                    left: 468px;
                                    bottom: 605px;
                                    letter-spacing: -0.15px;
                                }

                                #t5s_2 {
                                    left: 468px;
                                    bottom: 589px;
                                    letter-spacing: -0.15px;
                                }

                                #t5t_2 {
                                    left: 485px;
                                    bottom: 589px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.67px;
                                }

                                #t5u_2 {
                                    left: 468px;
                                    bottom: 578px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.36px;
                                }

                                #t5v_2 {
                                    left: 468px;
                                    bottom: 567px;
                                    letter-spacing: -0.15px;
                                }

                                #t5w_2 {
                                    left: 468px;
                                    bottom: 551px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.08px;
                                }

                                #t5x_2 {
                                    left: 468px;
                                    bottom: 540px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.84px;
                                }

                                #t5y_2 {
                                    left: 468px;
                                    bottom: 529px;
                                    letter-spacing: -0.15px;
                                }

                                #t5z_2 {
                                    left: 468px;
                                    bottom: 513px;
                                    letter-spacing: -0.15px;
                                    word-spacing: -0.19px;
                                }

                                #t60_2 {
                                    left: 468px;
                                    bottom: 502px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.34px;
                                }

                                #t61_2 {
                                    left: 468px;
                                    bottom: 491px;
                                    letter-spacing: -0.15px;
                                }

                                #t62_2 {
                                    left: 468px;
                                    bottom: 475px;
                                    letter-spacing: -0.15px;
                                    word-spacing: -0.03px;
                                }

                                #t63_2 {
                                    left: 468px;
                                    bottom: 464px;
                                    letter-spacing: -0.16px;
                                }

                                #t64_2 {
                                    left: 468px;
                                    bottom: 447px;
                                    letter-spacing: -0.15px;
                                }

                                #t65_2 {
                                    left: 483px;
                                    bottom: 447px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.01px;
                                }

                                #t66_2 {
                                    left: 468px;
                                    bottom: 437px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.19px;
                                }

                                #t67_2 {
                                    left: 468px;
                                    bottom: 426px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.43px;
                                }

                                #t68_2 {
                                    left: 468px;
                                    bottom: 415px;
                                    letter-spacing: -0.15px;
                                }

                                #t69_2 {
                                    left: 468px;
                                    bottom: 399px;
                                    letter-spacing: -0.15px;
                                }

                                #t6a_2 {
                                    left: 483px;
                                    bottom: 399px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.06px;
                                }

                                #t6b_2 {
                                    left: 468px;
                                    bottom: 388px;
                                    letter-spacing: -0.15px;
                                }

                                #t6c_2 {
                                    left: 468px;
                                    bottom: 371px;
                                    letter-spacing: -0.15px;
                                }

                                #t6d_2 {
                                    left: 483px;
                                    bottom: 371px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.75px;
                                }

                                #t6e_2 {
                                    left: 468px;
                                    bottom: 360px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.64px;
                                }

                                #t6f_2 {
                                    left: 468px;
                                    bottom: 350px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.83px;
                                }

                                #t6g_2 {
                                    left: 468px;
                                    bottom: 339px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.33px;
                                }

                                #t6h_2 {
                                    left: 468px;
                                    bottom: 328px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.34px;
                                }

                                #t6i_2 {
                                    left: 468px;
                                    bottom: 318px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.68px;
                                }

                                #t6j_2 {
                                    left: 468px;
                                    bottom: 307px;
                                    letter-spacing: -0.14px;
                                }

                                #t6k_2 {
                                    left: 468px;
                                    bottom: 284px;
                                    letter-spacing: -0.41px;
                                }

                                #t6l_2 {
                                    left: 468px;
                                    bottom: 268px;
                                    letter-spacing: -0.15px;
                                }

                                #t6m_2 {
                                    left: 483px;
                                    bottom: 268px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.25px;
                                }

                                #t6n_2 {
                                    left: 468px;
                                    bottom: 257px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.25px;
                                }

                                #t6o_2 {
                                    left: 468px;
                                    bottom: 247px;
                                    letter-spacing: -0.15px;
                                }

                                #t6p_2 {
                                    left: 468px;
                                    bottom: 230px;
                                    letter-spacing: -0.15px;
                                }

                                #t6q_2 {
                                    left: 483px;
                                    bottom: 230px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.17px;
                                }

                                #t6r_2 {
                                    left: 468px;
                                    bottom: 219px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.04px;
                                }

                                #t6s_2 {
                                    left: 468px;
                                    bottom: 209px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.86px;
                                }

                                #t6t_2 {
                                    left: 468px;
                                    bottom: 198px;
                                    letter-spacing: -0.16px;
                                }

                                #t6u_2 {
                                    left: 468px;
                                    bottom: 181px;
                                    letter-spacing: -0.15px;
                                }

                                #t6v_2 {
                                    left: 483px;
                                    bottom: 181px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.8px;
                                }

                                #t6w_2 {
                                    left: 468px;
                                    bottom: 171px;
                                    letter-spacing: -0.15px;
                                }

                                #t6x_2 {
                                    left: 468px;
                                    bottom: 154px;
                                    letter-spacing: -0.15px;
                                }

                                #t6y_2 {
                                    left: 485px;
                                    bottom: 154px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.8px;
                                }

                                #t6z_2 {
                                    left: 468px;
                                    bottom: 143px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 3.19px;
                                }

                                #t70_2 {
                                    left: 468px;
                                    bottom: 133px;
                                    letter-spacing: -0.15px;
                                    word-spacing: -0.15px;
                                }

                                #t71_2 {
                                    left: 468px;
                                    bottom: 122px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.02px;
                                }

                                #t72_2 {
                                    left: 468px;
                                    bottom: 111px;
                                    letter-spacing: -0.16px;
                                }

                                #t73_2 {
                                    left: 468px;
                                    bottom: 95px;
                                    letter-spacing: -0.15px;
                                }

                                #t74_2 {
                                    left: 486px;
                                    bottom: 95px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.98px;
                                }

                                #t75_2 {
                                    left: 468px;
                                    bottom: 84px;
                                    letter-spacing: -0.16px;
                                }

                                #t76_2 {
                                    left: 468px;
                                    bottom: 67px;
                                    letter-spacing: -0.15px;
                                }

                                #t77_2 {
                                    left: 483px;
                                    bottom: 67px;
                                    letter-spacing: -0.15px;
                                    word-spacing: -0.09px;
                                }

                                #t78_2 {
                                    left: 468px;
                                    bottom: 56px;
                                    letter-spacing: -0.15px;
                                }

                                #t79_2 {
                                    left: 468px;
                                    bottom: 40px;
                                    letter-spacing: -0.15px;
                                }

                                #t7a_2 {
                                    left: 481px;
                                    bottom: 40px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.14px;
                                }

                                #t7b_2 {
                                    left: 468px;
                                    bottom: 29px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.81px;
                                }

                                #t7c_2 {
                                    left: 468px;
                                    bottom: 18px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.58px;
                                }

                                #t7d_2 {
                                    left: 468px;
                                    bottom: 8px;
                                    letter-spacing: -0.15px;
                                }

                                #t7e_2 {
                                    left: 31px;
                                    bottom: 1260px;
                                    letter-spacing: -0.46px;
                                }

                                .s1_2 {
                                    font-size: 9px;
                                    font-family: OpenSans_83;
                                    color: #00682D;
                                }

                                .s2_2 {
                                    font-size: 11px;
                                    font-family: OpenSans-Bold_k;
                                    color: #00682D;
                                }

                                .s3_2 {
                                    font-size: 9px;
                                    font-family: OpenSans-Semibold_l;
                                    color: #00682D;
                                }

                                .s4_2 {
                                    font-size: 9px;
                                    font-family: OpenSans_82;
                                    color: #00682D;
                                }

                                .t.v0_2 {
                                    transform: scaleX(0.96);
                                }
                            </style>
                            <!-- End inline CSS -->

                            <!-- Begin embedded font definitions -->
                            <style id="fonts2" type="text/css">
                                @font-face {
                                    font-family: OpenSans-Bold_k;
                                    src: url("{{ asset('forms/lampiris/electricity_natural_gas_du/') }}/fonts/OpenSans-Bold_k.woff") format("woff");
                                }

                                @font-face {
                                    font-family: OpenSans-Semibold_l;
                                    src: url("{{ asset('forms/lampiris/electricity_natural_gas_du/') }}/fonts/OpenSans-Semibold_l.woff") format("woff");
                                }

                                @font-face {
                                    font-family: OpenSans_82;
                                    src: url("{{ asset('forms/lampiris/electricity_natural_gas_du/') }}/fonts/OpenSans_82.woff") format("woff");
                                }

                                @font-face {
                                    font-family: OpenSans_83;
                                    src: url("{{ asset('forms/lampiris/electricity_natural_gas_du/') }}/fonts/OpenSans_83.woff") format("woff");
                                }
                            </style>
                            <!-- End embedded font definitions -->

                            <!-- Begin page background -->
                            <div id="pg2Overlay" style="width:100%; height:100%; position:absolute; z-index:1; background-color:rgba(0,0,0,0); -webkit-user-select: none;"></div>
                            <div id="pg2" style="-webkit-user-select: none;"><object width="931" height="1286" data="{{ asset('forms/lampiris/electricity_natural_gas_du/') }}2/2.svg" type="image/svg+xml" id="pdf2" style="width:931px; height:1286px; -moz-transform:scale(1); z-index: 0;"></object></div>
                            <!-- End page background -->


                            <!-- Begin text definitions (Positioned/styled in CSS) -->
                            <div class="text-container"><span id="t1_2" class="t s1_2">Algemene verkoopvoorwaarden toepasbaar op alle contracten voor de levering van groene elektriciteit </span>
                                <span id="t2_2" class="t s1_2">en/of aardgas voor particulieren vanaf 27/03/2019. </span>
                                <span id="t3_2" class="t s2_2" data-mappings='[[14,"fi"]]'>Artikel 1 - Deﬁnities en toepassingsgebied </span>
                                <span id="t4_2" class="t s2_2" data-mappings='[[6,"fi"]]'>1.1 Deﬁnities </span>
                                <span id="t5_2" class="t s1_2">In de Algemene voorwaarden of in de Overeenkomst dient te worden verstaan onder: </span>
                                <span id="t6_2" class="t s3_2">1. Leveringsadres: </span><span id="t7_2" class="t s1_2">het adres van het leveringspunt. </span><span id="t8_2" class="t s3_2">2. Leveringspunt: </span><span id="t9_2" class="t s1_2">de fysieke plaats van het punt </span>
                                <span id="ta_2" class="t s1_2">waar de aansluiting op het distributienet zich bevindt zoals omschreven in het Technisch reglement en </span>
                                <span id="tb_2" class="t s4_2" data-mappings='[[34,"fi"]]'>de Leveringsovereenkomst, geïdentiﬁceerd aan de hand van een uniek EAN-nummer. </span><span id="tc_2" class="t s3_2">3. Afsluiting van </span>
                                <span id="td_2" class="t s3_2">een overeenkomst bij een andere leverancier: </span><span id="te_2" class="t s1_2">schrapping van Lampiris als leverancier van aardgas en/ </span>
                                <span id="tf_2" class="t s1_2">of elektriciteit voor een bepaald leveringspunt in het toegangsregister. </span><span id="tg_2" class="t s3_2">4. Algemene voorwaarden: </span><span id="th_2" class="t s1_2">deze </span>
                                <span id="ti_2" class="t s1_2">Algemene voorwaarden. </span><span id="tj_2" class="t s3_2">5. Lampiris: </span><span id="tk_2" class="t s1_2">Lampiris nv ingeschreven in de Kruispuntbank van Ondernemingen </span>
                                <span id="tl_2" class="t s4_2">onder het nummer 0859.655.570 en heeft haar maatschappelijke zetel te rue Saint-Laurent 54 4000 </span>
                                <span id="tm_2" class="t s1_2">Luik. </span><span id="tn_2" class="t s3_2">6. Consument: </span><span id="to_2" class="t s1_2">iedere natuurlijke persoon die handelt uit doeleinden buiten het kader van een </span>
                                <span id="tp_2" class="t s4_2" data-mappings='[[101,"fi"]]'>commerciële, industriële of ambachtelijke activiteit of een vrij beroep (in overeenstemming met de deﬁnitie </span>
                                <span id="tq_2" class="t s1_2">van ‘consument’ in het Wetboek van economisch recht). </span><span id="tr_2" class="t s3_2">7. Klant: </span><span id="ts_2" class="t s1_2">elke natuurlijke persoon die elektriciteit </span>
                                <span id="tt_2" class="t s4_2">of aardgas afneemt van Lampiris, voor niet-professionele doeleinden. </span><span id="tu_2" class="t s3_2">8. Residentiële consument of </span>
                                <span id="tv_2" class="t s3_2">Residentiële klant: </span><span id="tw_2" class="t s4_2">elke fysieke persoon die elektriciteit en/of aardgas verbruikt voor niet-professionele </span>
                                <span id="tx_2" class="t s1_2">doeleinden, om te voorzien in zijn behoeften of die van de personen die op hetzelfde adres zijn </span>
                                <span id="ty_2" class="t s1_2">gedomicilieerd. </span><span id="tz_2" class="t s3_2">9. Overeenkomst: </span><span id="t10_2" class="t s1_2">de volledige overeenkomst tussen Lampiris en een Klant. Deze bestaat </span>
                                <span id="t11_2" class="t s1_2">uit de Overeenkomst voor de levering van gas en/of elektriciteit ondertekend door de Klant. In geval </span>
                                <span id="t12_2" class="t s1_2">van Verkoop op afstand bevat dit </span><span id="t13_2" class="t s1_2">de ondertekende bevestiging van het afsluiten van de Overeenkomst </span>
                                <span id="t14_2" class="t s1_2">verzonden door Lampiris aan de Klant, alsook de huidige Algemene voorwaarden, eventuele bijzondere </span>
                                <span id="t15_2" class="t s1_2">voorwaarden, eventuele bijlagen, en de Tariefkaart, geldend op het ogenblik van de ondertekening </span>
                                <span id="t16_2" class="t s1_2">van de Overeenkomst, deze zijn eveneens beschikbaar op de website www.lampiris.be. alsook de </span>
                                <span id="t17_2" class="t s1_2">eventuele bijzondere voorwaarden en bepalingen voor aanbiedingen en promoties, die kunnen worden </span>
                                <span id="t18_2" class="t s1_2">geraadpleegd op de website van LAMPIRIS (www.lampiris.be). Voor wat betreft het Waalse en het Brusselse </span>
                                <span id="t19_2" class="t s1_2">Hoofdstedelijke Gewest, de bijlage openbare dienstverplichtingen energie maakt ook deel uit van de </span>
                                <span id="t1a_2" class="t s1_2">Overeenkomst. </span><span id="t1b_2" class="t s3_2">10. Verkoop of afstand: </span><span id="t1c_2" class="t s1_2">elke verkoop die resulteert in een overeenkomst afgesloten tussen </span>
                                <span id="t1d_2" class="t s1_2">Lampiris en een Klant, binnen het kader van een georganiseerd systeem voor verkoop of dienstverlening </span>
                                <span id="t1e_2" class="t s1_2">op afstand, buiten de gelijktijdige fysieke aanwezigheid van de onderneming en de Klant, waarbij uitsluitend </span>
                                <span id="t1f_2" class="t s1_2">één of meerdere communicatietechnieken op afstand worden aangewend tot en met het moment waarop </span>
                                <span id="t1g_2" class="t s1_2">de Overeenkomst is afgesloten. </span><span id="t1h_2" class="t s3_2">11. Buiten de onderneming gesloten overeenkomst: </span><span id="t1i_2" class="t s1_2">een overeenkomst (i) </span>
                                <span id="t1j_2" class="t s1_2">gesloten op het Leveringsadres van de Klant of op salons, beurzen en tentoonstellingen, of (ii) waarvoor een </span>
                                <span id="t1k_2" class="t s1_2">aanbod werd gedaan onder dezelfde omstandigheden, of (iii) onmiddellijk gesloten nadat de consument </span>
                                <span id="t1l_2" class="t s1_2">persoonlijk en individueel is aangesproken op een plaats die niet de gebruikelijke activiteitenlocatie van </span>
                                <span id="t1m_2" class="t s4_2" data-mappings='[[103,"ff"]]'>Lampiris is, of (iv) gesloten tijdens een excursie die door Lampiris is georganiseerd met als doel of eﬀect </span>
                                <span id="t1n_2" class="t s1_2">de promotie en de verkoop van goederen of diensten aan de consument. </span><span id="t1o_2" class="t s3_2">12. Installatie: </span><span id="t1p_2" class="t s1_2">het geheel van </span>
                                <span id="t1q_2" class="t s4_2">leidingen, kabels en toebehoren, schakel- en verdeelinrichtingen, elektrische toestellen, transformatoren </span>
                                <span id="t1r_2" class="t s1_2">en motoren dat al dan niet is aangesloten op het Leveringsadres voor het gebruik van energie, te rekenen </span>
                                <span id="t1s_2" class="t s4_2">vanaf de Meetinrichting of een daarmee door de Netbeheerder en de Klant gelijk te stellen plaats van </span>
                                <span id="t1t_2" class="t s1_2">afname. </span><span id="t1u_2" class="t s3_2">13. Levering: </span><span id="t1v_2" class="t s1_2">de levering op het net van de met de Klant overeengekomen hoeveelheid elektriciteit </span>
                                <span id="t1w_2" class="t s1_2">en/of aardgas door Lampiris, met uitsluiting van het transport en de distributie die onder de verantwoor</span><span id="t1x_2" class="t s4_2">- </span>
                                <span id="t1y_2" class="t s4_2">delijkheid van de Netbeheerders vallen. </span><span id="t1z_2" class="t s3_2">14. Meetinrichtingen: </span><span id="t20_2" class="t s1_2">het geheel van toestellen bestemd voor de </span>
                                <span id="t21_2" class="t s1_2">meting van de hoeveelheid elektriciteit of aardgas die wordt afgenomen op het Leveringspunt, met onder </span>
                                <span id="t22_2" class="t s1_2">meer de meters, meetapparaten en telecommunicatietoestellen. </span><span id="t23_2" class="t s3_2">15. Netbeheerder: </span><span id="t24_2" class="t s1_2">de beheerder(s) van </span>
                                <span id="t25_2" class="t s4_2">het distributie- en/of transportnet voor elektriciteit en aardgas. </span><span id="t26_2" class="t s3_2">16. Dag: </span><span id="t27_2" class="t s1_2">kalenderdag. </span><span id="t28_2" class="t s3_2">17. Werkdagen: </span>
                                <span id="t29_2" class="t s1_2">alle dagen met uitzondering van zaterdag, zondag en wettelijke feestdagen. </span><span id="t2a_2" class="t s3_2">18. Persoonsgegevens: </span>
                                <span id="t2b_2" class="t s4_2" data-mappings='[[70,"ff"]]'>alle persoonsgegevens in de zin van de Verordening (EU) 2016/679 betreﬀende de bescherming van </span>
                                <span id="t2c_2" class="t s4_2" data-mappings='[[79,"ff"]]'>natuurlijke personen in verband met de verwerking van persoonsgegevens en betreﬀende het vrije </span>
                                <span id="t2d_2" class="t s1_2">verkeer van die gegevens (algemene verordening gegevensbescherming) </span><span id="t2e_2" class="t s3_2">19. Tariefkaart: </span><span id="t2f_2" class="t s1_2">het geheel van </span>
                                <span id="t2g_2" class="t s1_2">tariefvoorwaarden die van toepassing zijn op de Levering aan de Klant. </span>
                                <span id="t2h_2" class="t s4_2" data-mappings='[[31,"fi"]]'>De begrippen die niet zijn gedeﬁnieerd in deze Leveringsovereenkomst hebben de betekenis die werd </span>
                                <span id="t2i_2" class="t s1_2">vastgelegd in de toepasselijke reglementering. </span>
                                <span id="t2j_2" class="t s2_2">1.2 Toepassingsgebied van de Algemene voorwaarden </span>
                                <span id="t2k_2" class="t s1_2">Deze Algemene voorwaarden zijn van toepassing voor de Leveringspunten op Belgisch grondgebied, voor </span>
                                <span id="t2l_2" class="t s1_2">de levering van elektriciteit en aardgas en/of aanverwante producten of diensten aan Consumenten. </span>
                                <span id="t2m_2" class="t s2_2">Artikel 2 – Afsluiting en uitvoering van de Overeenkomst </span>
                                <span id="t2n_2" class="t s3_2">2.1 </span><span id="t2o_2" class="t s1_2">De toepassing van deze Algemene voorwaarden is een doorslaggevende bepaling voor de instemming </span>
                                <span id="t2p_2" class="t s1_2">van Lampiris. Door te ondertekenen, accepteert de Klant het geheel van de Overeenkomst en dus ook het </span>
                                <span id="t2q_2" class="t s1_2">geheel van de Algemene voorwaarden eventuele Bijzondere voorwaarden en de Tariefkaart, erkent hij er </span>
                                <span id="t2r_2" class="t s1_2">perfect kennis van te hebben genomen en af te zien van de toepassing van enig ander contradictoir bericht, </span>
                                <span id="t2s_2" class="t s1_2">akkoord of document. </span>
                                <span id="t2t_2" class="t s3_2">2.2 </span><span id="t2u_2" class="t s1_2">De Overeenkomst wordt gesloten op de dag dat Lampiris een bevestiging van de Overeenkomst </span>
                                <span id="t2v_2" class="t s1_2">verstuurt aan de Klant. </span>
                                <span id="t2w_2" class="t s3_2">2.3 </span><span id="t2x_2" class="t s1_2">In geval van een Verkoop op afstand of een Overeenkomst gesloten buiten de onderneming hebben </span>
                                <span id="t2y_2" class="t s4_2">zowel de Consument als Lampiris het recht om hier binnen de veertien (14) werkdagen vanaf de sluiting </span>
                                <span id="t2z_2" class="t s1_2">van de Overeenkomst afstand van te doen, onverminderd de openbare dienstverplichtingen waartoe </span>
                                <span id="t30_2" class="t s1_2">Lampiris gehouden is. Om zijn herroepingsrecht uit te oefenen, dient de Klant Lampiris op de hoogte te </span>
                                <span id="t31_2" class="t s4_2" data-mappings='[[62,"fi"]]'>brengen van zijn beslissing, en dit bij voorkeur via het speciﬁeke herroepingsformulier dat beschikbaar is </span>
                                <span id="t32_2" class="t s1_2">op de website van Lampiris. Hij kan zijn beslissing niettemin ook op een andere manier kenbaar maken, </span>
                                <span id="t33_2" class="t s1_2">op voorwaarde dat hieruit ondubbelzinnig blijkt dat hij heeft besloten om de Overeenkomst te herroepen. </span>
                                <span id="t34_2" class="t s3_2">2.4 </span><span id="t35_2" class="t s4_2">Niettegenstaande artikel 2.2 en zonder afbreuk te doen aan de geldende reglementering, wordt de </span>
                                <span id="t36_2" class="t s1_2">Overeenkomst afgesloten onder twee ontbindende voorwaarden, met name: </span>
                                <span id="t37_2" class="t s4_2" data-mappings='[[63,"ff"]]'>I) dat Lampiris de noodzakelijke technische schikkingen kan treﬀen voor de verandering van gas- of elektri- </span>
                                <span id="t38_2" class="t s1_2">citeitsleverancier; </span>
                                <span id="t39_2" class="t s4_2" data-mappings='[[60,"fi"]]'>II) dat de Overeenkomst door Lampiris wordt aanvaard na veriﬁcatie van alle hieronder opgesomde nuttige </span>
                                <span id="t3a_2" class="t s1_2">elementen: </span>
                                <span id="t3b_2" class="t s4_2">- Het bestaan van een openstaand onbetaald saldo bij Lampiris voor het Leveringspunt. </span>
                                <span id="t3c_2" class="t s4_2">- De correcte en volledige overdracht van alle gegevens die nodig zijn voor de levering, zoals de gegevens van </span>
                                <span id="t3d_2" class="t s4_2">de Klant en de EAN-code van het Leveringspunt, alsook de verstrekking door de Klant van alle documenten </span>
                                <span id="t3e_2" class="t s1_2">die nodig zijn voor de opstelling van de Overeenkomst, zoals een kopie van de identiteitskaart of informatie </span>
                                <span id="t3f_2" class="t s1_2">over de gezinssamenstelling bij twijfel over het adres of het verwachte volume van de levering. </span>
                                <span id="t3g_2" class="t s4_2">- Wanneer er ernstige redenen zijn om te twijfelen aan de kredietwaardigheid van de Klant en/of de Klant </span>
                                <span id="t3h_2" class="t s1_2">niet aantoont dat hij zijn legitieme schulden bij de vorige energieleveranciers heeft betaald (met bijvoorbeeld </span>
                                <span id="t3i_2" class="t s1_2">een bewijs van tijdige betaling voor de laatste drie facturen bij zijn vorige leverancier), heeft Lampiris het </span>
                                <span id="t3j_2" class="t s1_2">recht om de Klant te vragen een bankwaarborg voor te leggen of een storting uit te voeren ten belope </span>
                                <span id="t3k_2" class="t s1_2">van een bedrag gelijk aan drie (3) keer het geschatte maandverbruik (het bedrag van de maandelijkse </span>
                                <span id="t3l_2" class="t s1_2">voorschotten) aan Lampiris binnen een termijn van dertig (30) dagen na het verzoek. De waarborg kan </span>
                                <span id="t3m_2" class="t s1_2">door de Klant teruggevraagd worden mits voldaan werd aan de voorwaarden bepaald in artikel 9. </span>
                                <span id="t3n_2" class="t s4_2">- Lampiris heeft ook het recht om een overeenkomst niet te aanvaarden als de Tariefkaart niet van </span>
                                <span id="t3o_2" class="t s1_2">toepassing is voor de betrokken Klant en/of het gebied waar het Leveringsadres zich bevindt en/of </span><span id="t3p_2" class="t s1_2">de </span>
                                <span id="t3q_2" class="t s1_2">periode waarbinnen de Klant de levering wenst door Lampiris. </span>
                                <span id="t3r_2" class="t s4_2">- Indien na raadpleging van het toegangsregister blijkt dat een verandering van leverancier niet onmiddellijk </span>
                                <span id="t3s_2" class="t s1_2">mogelijk is omdat er een andere bewerking hangende is in verband met het Leveringspunt, heeft Lampiris </span>
                                <span id="t3t_2" class="t s1_2">het recht om de sluiting van de Overeenkomst met een Residentiële klant op te schorten, tot de hangende </span>
                                <span id="t3u_2" class="t s1_2">bewerking is voltooid en de verandering van leverancier mogelijk is. </span>
                                <span id="t3v_2" class="t s1_2">Indien het leveringspunt van de Klant zich in het Waalse Gewest bevindt en u verwikkelt bent in een </span>
                                <span id="t3w_2" class="t s1_2">procedure zoals beschreven in afdeling 3 van Hoofdstuk IV van het Besluit van de Waalse Regering </span>
                                <span id="t3x_2" class="t s4_2" data-mappings='[[5,"ff"]]'>betreﬀende de openbare dienstverplichtingen op de elektriciteits- en gasmarkt bij een andere leverancier, </span>
                                <span id="t3y_2" class="t s1_2">is de Overeenkomst afgesloten bij Lampiris van rechtswege nietig. </span>
                                <span id="t3z_2" class="t v0_2 s1_2">In ieder geval zal Lampiris zijn beslissing meedelen aan de Klant of een eventueel verzoek om aanvullende </span>
                                <span id="t40_2" class="t v0_2 s1_2">inlichtingen versturen binnen de dertig (30) dagen, te rekenen vanaf de ontvangst van het verzoek van de Klant. </span>
                                <span id="t41_2" class="t s2_2">Artikel 3 - Duur en einde van de Overeenkomst </span>
                                <span id="t42_2" class="t s3_2">3.1</span><span id="t43_2" class="t s1_2">. De Overeenkomst wordt gesloten voor een duurtijd van één, twee of drie jaar of voor onbepaalde </span>
                                <span id="t44_2" class="t s1_2">duur en loopt vanaf de eerste dag van de levering. In het Brussels Hoofdstedelijk Gewest worden </span>
                                <span id="t45_2" class="t s1_2">overeenkomsten gesloten voor een vaste periode van drie jaar. </span>
                                <span id="t46_2" class="t s3_2">3.2 </span><span id="t47_2" class="t s4_2">De levering start wanneer Lampiris in het toegangsregister van de Netbeheerder is geregistreerd als </span>
                                <span id="t48_2" class="t s1_2">leverancier voor de in de Overeenkomst bepaalde aansluitingspunten. </span>
                                <span id="t49_2" class="t s1_2">In het geval van een Verkoop op afstand of een Overeenkomst gesloten buiten de onderneming, kan de </span>
                                <span id="t4a_2" class="t s1_2">levering pas beginnen na het verstrijken van de herroepingstermijn zoals bedoeld in artikel 2.3, behoudens </span>
                                <span id="t4b_2" class="t s1_2">een uitdrukkelijk en schriftelijk verzoek van de Klant op een duurzame drager. </span>
                                <span id="t4c_2" class="t s1_2">In het geval van verandering van leverancier, kan het begin van de Levering nooit eerder vallen dan: </span>
                                <span id="t4d_2" class="t s4_2">- hetzij dertig (30) dagen na de laatste dag van de kalendermaand waarin de volledig ingevulde </span>
                                <span id="t4e_2" class="t s1_2">leveringsaanvraag werd ontvangen, indien de aanvraag werd ontvangen tussen de 1e en de 15e dag </span>
                                <span id="t4f_2" class="t s1_2">van deze maand; </span>
                                <span id="t4g_2" class="t s4_2">- hetzij zestig (60) dagen na de laatste dag van de kalendermaand waarin de volledig ingevulde </span>
                                <span id="t4h_2" class="t s1_2">leveringsaanvraag werd ontvangen, indien de aanvraag werd ontvangen tussen de 16e en de laatste </span>
                                <span id="t4i_2" class="t s1_2">dag van deze maand. </span>
                                <span id="t4j_2" class="t s1_2">De levering van energie kan sowieso maar aanvangen op voorwaarde dat: </span>
                                <span id="t4k_2" class="t s4_2">- Lampiris in het toegangsregister van de Netbeheerder is geregistreerd als leverancier voor het </span>
                                <span id="t4l_2" class="t s1_2">Leveringspunt; </span>
                                <span id="t4m_2" class="t s4_2">- de aansluiting al is aangesloten op het distributienet en niet buiten dienst is gesteld; </span>
                                <span id="t4n_2" class="t s4_2">- in het geval van een nieuwe aansluiting of een afgesloten aansluiting, de opening van de meters werd </span>
                                <span id="t4o_2" class="t s4_2">uitgevoerd door de Netbeheerder. </span>
                                <span id="t4p_2" class="t s3_2">3.3 </span><span id="t4q_2" class="t s1_2">Op het einde van deze periode wordt de Overeenkomst voor opeenvolgende looptijden van één (1) jaar </span>
                                <span id="t4r_2" class="t s1_2">stilzwijgend verlengd volgens de procedure bepaald in artikel 5.5 van deze Algemene voorwaarden, tenzij </span>
                                <span id="t4s_2" class="t s4_2">de Klant afziet van een verlenging door een opzegging overeenkomstig artikel 3.4. </span>
                                <span id="t4t_2" class="t s3_2">3.4 </span><span id="t4u_2" class="t s1_2">Onverminderd artikel 3.1. kan de Klant de Overeenkomst steeds opzeggen met een voorafgaande </span>
                                <span id="t4v_2" class="t s1_2">opzeggingstermijn van één (1) maand. In geval van een leverancierswissel volstaat het bericht van de </span>
                                <span id="t4w_2" class="t s4_2">Netbeheerder als opzegging. In geval van een beëindiging zonder bericht van de Netbeheerder kan de </span>
                                <span id="t4x_2" class="t s1_2">Klant de Overeenkomst enkel beëindigen per aangetekend schrijven aan Lampiris. </span>
                                <span id="t4y_2" class="t s3_2">3.5 </span><span id="t4z_2" class="t s1_2">Indien een Klant, na zijn wens om de Overeenkomst op te zeggen bekend te hebben gemaakt, </span>
                                <span id="t50_2" class="t s1_2">elektriciteit en/of aardgas blijft verbruiken zonder dat een overeenkomst bij een andere leverancier is </span>
                                <span id="t51_2" class="t s1_2">afgesloten, wordt de levering voortgezet onder dezelfde contractuele voorwaarden als vóór het bericht </span>
                                <span id="t52_2" class="t s1_2">van de Klant. </span>
                                <span id="t53_2" class="t s3_2">3.6 </span><span id="t54_2" class="t s1_2">Indien aan deze Overeenkomst een einde komt zonder dat Lampiris vooraf een bericht van de </span>
                                <span id="t55_2" class="t s4_2">Netbeheerder of de Klant heeft ontvangen over de voorgenomen leverancierswissel en de Overeenkomst </span>
                                <span id="t56_2" class="t s1_2">dus voortijdig wordt verbroken, heeft Lampiris het recht om het Leveringspunt af te sluiten op kosten van </span>
                                <span id="t57_2" class="t s1_2">de Klant, en eventuele andere geleden schade op hem te verhalen. </span>
                                <span id="t58_2" class="t s3_2">3.7 </span><span id="t59_2" class="t s1_2">Onverminderd artikel 3.1 kan Lampiris een Overeenkomst van onbepaalde duur op elk moment </span>
                                <span id="t5a_2" class="t s1_2">opzeggen, met een voorafgaande opzeggingstermijn van zestig (60) dagen. </span>
                                <span id="t5b_2" class="t s3_2">3.8 </span><span id="t5c_2" class="t s4_2">Indien de Klant wordt overgedragen aan de Netbeheerder als Beschermde klant in de gewestelijke </span>
                                <span id="t5d_2" class="t s1_2">betekenis, wordt de huidige Overeenkomst automatisch opgezegd zonder opzeggingskosten of </span>
                                <span id="t5e_2" class="t s4_2">-vergoeding. </span>
                                <span id="t5f_2" class="t s2_2">Artikel 4 - Machtiging </span>
                                <span id="t5g_2" class="t s1_2">De Klant machtigt Lampiris om alle handelingen die nodig zijn voor de uitvoering van de Overeenkomst </span>
                                <span id="t5h_2" class="t s1_2">te stellen of te laten stellen met het oog op de verandering van leverancier, de nettoegang, de Levering en </span>
                                <span id="t5i_2" class="t s4_2">het opvragen van alle gegevens, inclusief historische verbruiksgegevens, bij de Netbeheerders. Lampiris </span>
                                <span id="t5j_2" class="t s1_2">zal het recht hebben om de gezinssamenstelling van de Klant of enige andere informatie op te vragen die </span>
                                <span id="t5k_2" class="t s1_2">nodig is voor de uitvoering van de Overeenkomst of voor het nakomen van haar wettelijke verplichtingen </span>
                                <span id="t5l_2" class="t s1_2">als leverancier. Indien deze bewerkingen ertoe leiden dat er kosten worden gefactureerd aan Lampiris, </span>
                                <span id="t5m_2" class="t s1_2">zullen deze zonder vermeerdering worden doorgerekend aan de Klant volgens de factureringsmodaliteiten </span>
                                <span id="t5n_2" class="t s1_2">in artikel 7.5 tot 7.12. </span>
                                <span id="t5o_2" class="t s2_2">Artikel 5 - Prijs </span>
                                <span id="t5p_2" class="t s3_2">5.1 </span><span id="t5q_2" class="t s1_2">De Klant is de energieprijs verschuldigd die Lampiris heeft vastgesteld op basis van de Tariefkaart, die </span>
                                <span id="t5r_2" class="t s1_2">van toepassing is op het ogenblik van de afsluiting van de Overeenkomst. </span>
                                <span id="t5s_2" class="t s3_2">5.2 </span><span id="t5t_2" class="t s4_2" data-mappings='[[64,"ffi"]]'>De volgende kosten worden direct aan de Klant doorgerekend: - heﬃngen, taksen, retributies, </span>
                                <span id="t5u_2" class="t s1_2">toeslagen, belastingen, vergoedingen en andere eventuele kosten die door de bevoegde regelgevende </span>
                                <span id="t5v_2" class="t s1_2">overheid of instantie worden opgelegd; </span>
                                <span id="t5w_2" class="t s4_2">- de kosten voor het transport, de distributie en de huur van de meters, de kosten voor de aansluiting </span>
                                <span id="t5x_2" class="t s1_2">of sluiting van het Leveringspunt, eventuele bijkomende netwerkdiensten, het reactief vermogen en het </span>
                                <span id="t5y_2" class="t s4_2">piekvermogen opgelegd door de Netbeheerder; </span>
                                <span id="t5z_2" class="t s4_2" data-mappings='[[82,"fi"]]'>- de kosten die verband houden met de wettelijke verplichting om groenestroomcertiﬁcaten, groenewarm- </span>
                                <span id="t60_2" class="t s4_2" data-mappings='[[7,"fi"],[32,"fi"],[63,"fi"]]'>tecertiﬁcaten, warmtekrachtcertiﬁcaten en/of soortgelijke certiﬁcaten te genereren in het kader van de </span>
                                <span id="t61_2" class="t s1_2">ontwikkeling van hernieuwbare energiebronnen en de wettelijke verplichtingen inzake milieu. </span>
                                <span id="t62_2" class="t s1_2">Deze kosten kunnen met terugwerkende kracht worden aangerekend, indien dit eveneens van toepassing </span>
                                <span id="t63_2" class="t s1_2">is voor Lampiris. </span>
                                <span id="t64_2" class="t s3_2">5.3 </span><span id="t65_2" class="t s4_2">Lampiris zal op transparante wijze de prestaties factureren die de Netbeheerder uitvoert voor de Klant </span>
                                <span id="t66_2" class="t s1_2">en rechtstreeks aan Lampiris factureert op haar vraag, op vraag van de Klant, of op vraag van Lampiris na </span>
                                <span id="t67_2" class="t s1_2">een fout of nalatigheid van de Klant. In dat geval behoudt Lampiris zich het recht voor om bovenop deze </span>
                                <span id="t68_2" class="t s1_2">kosten administratieve kosten aan te rekenen. </span>
                                <span id="t69_2" class="t s3_2">5.4 </span><span id="t6a_2" class="t s4_2">Lampiris kan de Tariefkaart wijzigen mits inachtneming van de bepalingen van art. 14.1. In dat geval zal </span>
                                <span id="t6b_2" class="t s4_2">de Klant het recht hebben om de Overeenkomst op te zeggen onder de voorwaarden bepaald in art. 14.2. </span>
                                <span id="t6c_2" class="t s3_2">5.5 </span><span id="t6d_2" class="t s1_2">Twee (2) maanden voor het verstrijken van de Overeenkomst deelt Lampiris de Klant schriftelijk een </span>
                                <span id="t6e_2" class="t s1_2">voorstel mee voor nieuwe prijzen en voorwaarden. Dit voorstel is van toepassing bij de vernieuwing van </span>
                                <span id="t6f_2" class="t s1_2">de Overeenkomst, op voorwaarde dat de Klant het voorstel uitdrukkelijk heeft aanvaard. Bij gebrek aan </span>
                                <span id="t6g_2" class="t s1_2">een dergelijke uitdrukkelijke aanvaarding door de Klant, zal Lampiris de prijzen en voorwaarden van haar </span>
                                <span id="t6h_2" class="t s1_2">goedkoopste gelijkwaardige product op de vervaldatum van de Overeenkomst toepassen. In dat geval </span>
                                <span id="t6i_2" class="t s1_2">brengt Lampiris de Klant op de hoogte van de nieuwe prijzen en voorwaarden na het verstrijken van de </span>
                                <span id="t6j_2" class="t s1_2">Overeenkomst. </span>
                                <span id="t6k_2" class="t s2_2">Artikel 6 - Verplichtingen van de Partijen </span>
                                <span id="t6l_2" class="t s3_2">6.1 </span><span id="t6m_2" class="t s1_2">De Klant zal door geen enkele handeling of nalatigheid beletten dat de geleverde hoeveelheid energie </span>
                                <span id="t6n_2" class="t s1_2">juist kan worden vastgesteld, dan wel een situatie creëren waardoor het normaal functioneren van de </span>
                                <span id="t6o_2" class="t s1_2">Meetinrichting wordt verhinderd. </span>
                                <span id="t6p_2" class="t s3_2">6.2 </span><span id="t6q_2" class="t s1_2">De Klant is verantwoordelijk voor de correcte aansluiting van zijn Installatie op het net op het moment </span>
                                <span id="t6r_2" class="t s1_2">van de Levering door Lampiris, zoals voorzien door het Technisch reglement. De Klant doet het nodige </span>
                                <span id="t6s_2" class="t s1_2">opdat al zijn Installaties in goede staat zouden zijn en zouden beantwoorden aan alle technische en </span>
                                <span id="t6t_2" class="t s1_2">wettelijke eisen. </span>
                                <span id="t6u_2" class="t s3_2">6.3 </span><span id="t6v_2" class="t s1_2">De Klant zal Lampiris op de hoogte brengen van elke wijziging van zijn Persoonsgegevens, ongeacht </span>
                                <span id="t6w_2" class="t s1_2">de aard. </span>
                                <span id="t6x_2" class="t s3_2">6.4 </span><span id="t6y_2" class="t s1_2">Het is de taak van de Klant om Lampiris in voorkomend geval in te lichten over zijn statuut van </span>
                                <span id="t6z_2" class="t s1_2">Beschermde klant of zijn recht op de toepassing van het sociaal tarief, en hiervoor alle vereiste </span>
                                <span id="t70_2" class="t s1_2">stavingstukken over te maken binnen de wettelijk voorziene termijnen en modaliteiten. Vanaf het moment </span>
                                <span id="t71_2" class="t s4_2" data-mappings='[[74,"fi"]]'>dat het sociaal tarief wordt toegepast zal de Klant genieten van dit speciﬁeke tarief en zullen de bijzondere </span>
                                <span id="t72_2" class="t s1_2">voorwaarden gelinkt aan dit tarief op hem toepasselijk zijn. </span>
                                <span id="t73_2" class="t s3_2">6.5 </span><span id="t74_2" class="t s1_2">De Klant verbindt zich tot de tijdige en volledige betaling van zijn voorschotten, afrekeningen </span>
                                <span id="t75_2" class="t s1_2">en slotfactu(u)r(en). </span>
                                <span id="t76_2" class="t s3_2">6.6 </span><span id="t77_2" class="t s1_2">Lampiris verbindt zich tot de levering van energie aan de Klant in overeenstemming met de bepalingen </span>
                                <span id="t78_2" class="t s1_2">van de Overeenkomst en de toepasselijke regionale en federale regelgeving. </span>
                                <span id="t79_2" class="t s3_2">6.7</span><span id="t7a_2" class="t s1_2">. De Klant informeert Lampiris onmiddellijk over elk element waarvan hij kennis heeft en dat de </span>
                                <span id="t7b_2" class="t s1_2">uitvoering van de Overeenkomst zou kunnen verhinderen, veranderen of bemoeilijken. Het nalaten van </span>
                                <span id="t7c_2" class="t s1_2">deze verplichting kan leiden tot de voortijdige beëindiging van de Overeenkomst, mits inachtneming van </span>
                                <span id="t7d_2" class="t s1_2">een opzeggingstermijn van dertig (30) dagen. </span>
                                <span id="t7e_2" class="t s2_2">ALGEMENE VERKOOPVOORWAARDEN </span>
                            </div>
                            <!-- End text definitions -->


                        </div>

                    </div>
                </div>
                <div id="page3" style="width: 931px; height: 1286px; margin-top:20px;" class="page">
                    <div class="page-inner" style="width: 931px; height: 1286px;">

                        <div id="p3" class="pageArea" style="overflow: hidden; position: relative; width: 931px; height: 1286px; margin-top:auto; margin-left:auto; margin-right:auto; background-color: white;">

                            <!-- Begin shared CSS values -->
                            <style class="shared-css" type="text/css">
                                .t {
                                    transform-origin: bottom left;
                                    z-index: 2;
                                    position: absolute;
                                    white-space: pre;
                                    overflow: visible;
                                    line-height: 1.5;
                                }

                                .text-container {
                                    white-space: pre;
                                }

                                @supports (-webkit-touch-callout: none) {
                                    .text-container {
                                        white-space: normal;
                                    }
                                }
                            </style>
                            <!-- End shared CSS values -->


                            <!-- Begin inline CSS -->
                            <style type="text/css">
                                #t1_3 {
                                    left: 31px;
                                    bottom: 1253px;
                                    letter-spacing: -0.41px;
                                }

                                #t2_3 {
                                    left: 31px;
                                    bottom: 1237px;
                                    letter-spacing: -0.15px;
                                }

                                #t3_3 {
                                    left: 46px;
                                    bottom: 1237px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.06px;
                                }

                                #t4_3 {
                                    left: 31px;
                                    bottom: 1226px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.49px;
                                }

                                #t5_3 {
                                    left: 31px;
                                    bottom: 1215px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.68px;
                                }

                                #t6_3 {
                                    left: 31px;
                                    bottom: 1205px;
                                    letter-spacing: -0.15px;
                                }

                                #t7_3 {
                                    left: 31px;
                                    bottom: 1188px;
                                    letter-spacing: -0.15px;
                                }

                                #t8_3 {
                                    left: 45px;
                                    bottom: 1188px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.06px;
                                }

                                #t9_3 {
                                    left: 31px;
                                    bottom: 1177px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.03px;
                                }

                                #ta_3 {
                                    left: 31px;
                                    bottom: 1166px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.2px;
                                }

                                #tb_3 {
                                    left: 31px;
                                    bottom: 1156px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.61px;
                                }

                                #tc_3 {
                                    left: 31px;
                                    bottom: 1145px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.65px;
                                }

                                #td_3 {
                                    left: 31px;
                                    bottom: 1134px;
                                    letter-spacing: -0.15px;
                                }

                                #te_3 {
                                    left: 31px;
                                    bottom: 1117px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.43px;
                                }

                                #tf_3 {
                                    left: 31px;
                                    bottom: 1106px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.48px;
                                }

                                #tg_3 {
                                    left: 31px;
                                    bottom: 1096px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.38px;
                                }

                                #th_3 {
                                    left: 31px;
                                    bottom: 1085px;
                                    letter-spacing: -0.15px;
                                }

                                #ti_3 {
                                    left: 31px;
                                    bottom: 1068px;
                                    letter-spacing: -0.15px;
                                }

                                #tj_3 {
                                    left: 47px;
                                    bottom: 1068px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.23px;
                                }

                                #tk_3 {
                                    left: 31px;
                                    bottom: 1057px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.17px;
                                }

                                #tl_3 {
                                    left: 31px;
                                    bottom: 1047px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.15px;
                                }

                                #tm_3 {
                                    left: 31px;
                                    bottom: 1036px;
                                    letter-spacing: -0.15px;
                                }

                                #tn_3 {
                                    left: 31px;
                                    bottom: 1019px;
                                    letter-spacing: -0.15px;
                                }

                                #to_3 {
                                    left: 45px;
                                    bottom: 1019px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.1px;
                                }

                                #tp_3 {
                                    left: 31px;
                                    bottom: 1008px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.25px;
                                }

                                #tq_3 {
                                    left: 31px;
                                    bottom: 998px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.55px;
                                }

                                #tr_3 {
                                    left: 31px;
                                    bottom: 987px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.1px;
                                }

                                #ts_3 {
                                    left: 31px;
                                    bottom: 976px;
                                    letter-spacing: -0.15px;
                                }

                                #tt_3 {
                                    left: 31px;
                                    bottom: 959px;
                                    letter-spacing: -0.15px;
                                }

                                #tu_3 {
                                    left: 45px;
                                    bottom: 959px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.05px;
                                }

                                #tv_3 {
                                    left: 31px;
                                    bottom: 949px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.4px;
                                }

                                #tw_3 {
                                    left: 31px;
                                    bottom: 938px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.23px;
                                }

                                #tx_3 {
                                    left: 31px;
                                    bottom: 927px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.34px;
                                }

                                #ty_3 {
                                    left: 31px;
                                    bottom: 917px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.04px;
                                }

                                #tz_3 {
                                    left: 31px;
                                    bottom: 906px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.47px;
                                }

                                #t10_3 {
                                    left: 31px;
                                    bottom: 895px;
                                    letter-spacing: -0.15px;
                                }

                                #t11_3 {
                                    left: 31px;
                                    bottom: 878px;
                                    letter-spacing: -0.15px;
                                }

                                #t12_3 {
                                    left: 47px;
                                    bottom: 878px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.88px;
                                }

                                #t13_3 {
                                    left: 31px;
                                    bottom: 867px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.3px;
                                }

                                #t14_3 {
                                    left: 31px;
                                    bottom: 857px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 3.96px;
                                }

                                #t15_3 {
                                    left: 31px;
                                    bottom: 846px;
                                    letter-spacing: -0.15px;
                                }

                                #t16_3 {
                                    left: 31px;
                                    bottom: 829px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.78px;
                                }

                                #t17_3 {
                                    left: 31px;
                                    bottom: 818px;
                                    letter-spacing: -0.16px;
                                }

                                #t18_3 {
                                    left: 31px;
                                    bottom: 801px;
                                    letter-spacing: -0.17px;
                                }

                                #t19_3 {
                                    left: 50px;
                                    bottom: 801px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 4.24px;
                                }

                                #t1a_3 {
                                    left: 31px;
                                    bottom: 791px;
                                    letter-spacing: -0.15px;
                                    word-spacing: -0.21px;
                                }

                                #t1b_3 {
                                    left: 31px;
                                    bottom: 780px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.54px;
                                }

                                #t1c_3 {
                                    left: 31px;
                                    bottom: 769px;
                                    letter-spacing: -0.15px;
                                }

                                #t1d_3 {
                                    left: 31px;
                                    bottom: 752px;
                                    letter-spacing: -0.14px;
                                    word-spacing: 2.75px;
                                }

                                #t1e_3 {
                                    left: 31px;
                                    bottom: 742px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.88px;
                                }

                                #t1f_3 {
                                    left: 31px;
                                    bottom: 731px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.82px;
                                }

                                #t1g_3 {
                                    left: 31px;
                                    bottom: 720px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.58px;
                                }

                                #t1h_3 {
                                    left: 31px;
                                    bottom: 710px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.25px;
                                }

                                #t1i_3 {
                                    left: 31px;
                                    bottom: 699px;
                                    letter-spacing: -0.16px;
                                }

                                #t1j_3 {
                                    left: 31px;
                                    bottom: 682px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.79px;
                                }

                                #t1k_3 {
                                    left: 31px;
                                    bottom: 671px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.28px;
                                }

                                #t1l_3 {
                                    left: 31px;
                                    bottom: 661px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.55px;
                                }

                                #t1m_3 {
                                    left: 31px;
                                    bottom: 650px;
                                    letter-spacing: -0.15px;
                                }

                                #t1n_3 {
                                    left: 31px;
                                    bottom: 633px;
                                    letter-spacing: -0.17px;
                                }

                                #t1o_3 {
                                    left: 53px;
                                    bottom: 633px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 1.72px;
                                }

                                #t1p_3 {
                                    left: 31px;
                                    bottom: 622px;
                                    letter-spacing: -0.16px;
                                }

                                #t1q_3 {
                                    left: 31px;
                                    bottom: 605px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.38px;
                                }

                                #t1r_3 {
                                    left: 31px;
                                    bottom: 595px;
                                    letter-spacing: -0.16px;
                                }

                                #t1s_3 {
                                    left: 31px;
                                    bottom: 578px;
                                    letter-spacing: -0.17px;
                                }

                                #t1t_3 {
                                    left: 53px;
                                    bottom: 578px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.13px;
                                }

                                #t1u_3 {
                                    left: 31px;
                                    bottom: 567px;
                                    letter-spacing: -0.15px;
                                }

                                #t1v_3 {
                                    left: 31px;
                                    bottom: 550px;
                                    letter-spacing: -0.17px;
                                }

                                #t1w_3 {
                                    left: 53px;
                                    bottom: 550px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.46px;
                                }

                                #t1x_3 {
                                    left: 31px;
                                    bottom: 539px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.88px;
                                }

                                #t1y_3 {
                                    left: 31px;
                                    bottom: 529px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.55px;
                                }

                                #t1z_3 {
                                    left: 31px;
                                    bottom: 518px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.58px;
                                }

                                #t20_3 {
                                    left: 31px;
                                    bottom: 507px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.67px;
                                }

                                #t21_3 {
                                    left: 31px;
                                    bottom: 496px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.72px;
                                }

                                #t22_3 {
                                    left: 31px;
                                    bottom: 486px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.84px;
                                }

                                #t23_3 {
                                    left: 31px;
                                    bottom: 475px;
                                    letter-spacing: -0.15px;
                                }

                                #t24_3 {
                                    left: 31px;
                                    bottom: 458px;
                                    letter-spacing: -0.17px;
                                }

                                #t25_3 {
                                    left: 53px;
                                    bottom: 458px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.8px;
                                }

                                #t26_3 {
                                    left: 31px;
                                    bottom: 447px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.07px;
                                }

                                #t27_3 {
                                    left: 31px;
                                    bottom: 437px;
                                    letter-spacing: -0.15px;
                                }

                                #t28_3 {
                                    left: 31px;
                                    bottom: 420px;
                                    letter-spacing: -0.17px;
                                }

                                #t29_3 {
                                    left: 53px;
                                    bottom: 420px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.49px;
                                }

                                #t2a_3 {
                                    left: 31px;
                                    bottom: 409px;
                                    letter-spacing: -0.15px;
                                    word-spacing: -0.72px;
                                }

                                #t2b_3 {
                                    left: 31px;
                                    bottom: 398px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.42px;
                                }

                                #t2c_3 {
                                    left: 457px;
                                    bottom: 398px;
                                }

                                #t2d_3 {
                                    left: 31px;
                                    bottom: 388px;
                                    letter-spacing: -0.16px;
                                }

                                #t2e_3 {
                                    left: 31px;
                                    bottom: 365px;
                                    letter-spacing: -0.41px;
                                }

                                #t2f_3 {
                                    left: 31px;
                                    bottom: 348px;
                                    letter-spacing: -0.15px;
                                }

                                #t2g_3 {
                                    left: 46px;
                                    bottom: 348px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.49px;
                                }

                                #t2h_3 {
                                    left: 31px;
                                    bottom: 338px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.78px;
                                }

                                #t2i_3 {
                                    left: 31px;
                                    bottom: 327px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.17px;
                                }

                                #t2j_3 {
                                    left: 31px;
                                    bottom: 316px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.44px;
                                }

                                #t2k_3 {
                                    left: 31px;
                                    bottom: 306px;
                                    letter-spacing: -0.16px;
                                }

                                #t2l_3 {
                                    left: 31px;
                                    bottom: 295px;
                                    letter-spacing: -0.16px;
                                }

                                #t2m_3 {
                                    left: 31px;
                                    bottom: 278px;
                                    letter-spacing: -0.15px;
                                }

                                #t2n_3 {
                                    left: 47px;
                                    bottom: 278px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.3px;
                                }

                                #t2o_3 {
                                    left: 31px;
                                    bottom: 267px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.47px;
                                }

                                #t2p_3 {
                                    left: 31px;
                                    bottom: 256px;
                                    letter-spacing: -0.15px;
                                }

                                #t2q_3 {
                                    left: 31px;
                                    bottom: 233px;
                                    letter-spacing: -0.41px;
                                }

                                #t2r_3 {
                                    left: 31px;
                                    bottom: 217px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.26px;
                                }

                                #t2s_3 {
                                    left: 31px;
                                    bottom: 206px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.74px;
                                }

                                #t2t_3 {
                                    left: 31px;
                                    bottom: 196px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.12px;
                                }

                                #t2u_3 {
                                    left: 31px;
                                    bottom: 185px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.89px;
                                }

                                #t2v_3 {
                                    left: 31px;
                                    bottom: 174px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.04px;
                                }

                                #t2w_3 {
                                    left: 31px;
                                    bottom: 164px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.2px;
                                }

                                #t2x_3 {
                                    left: 31px;
                                    bottom: 153px;
                                    letter-spacing: -0.14px;
                                }

                                #t2y_3 {
                                    left: 31px;
                                    bottom: 136px;
                                    letter-spacing: -0.15px;
                                }

                                #t2z_3 {
                                    left: 31px;
                                    bottom: 119px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.5px;
                                }

                                #t30_3 {
                                    left: 31px;
                                    bottom: 108px;
                                    letter-spacing: -0.15px;
                                }

                                #t31_3 {
                                    left: 31px;
                                    bottom: 91px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.28px;
                                }

                                #t32_3 {
                                    left: 31px;
                                    bottom: 81px;
                                    letter-spacing: -0.16px;
                                }

                                #t33_3 {
                                    left: 31px;
                                    bottom: 64px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.69px;
                                }

                                #t34_3 {
                                    left: 31px;
                                    bottom: 53px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.49px;
                                }

                                #t35_3 {
                                    left: 31px;
                                    bottom: 42px;
                                    letter-spacing: -0.16px;
                                }

                                #t36_3 {
                                    left: 31px;
                                    bottom: 25px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.7px;
                                }

                                #t37_3 {
                                    left: 315px;
                                    bottom: 25px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.7px;
                                }

                                #t38_3 {
                                    left: 31px;
                                    bottom: 15px;
                                    letter-spacing: -0.16px;
                                }

                                #t39_3 {
                                    left: 250px;
                                    bottom: 15px;
                                    letter-spacing: -0.15px;
                                }

                                #t3a_3 {
                                    left: 468px;
                                    bottom: 1253px;
                                    letter-spacing: -0.41px;
                                }

                                #t3b_3 {
                                    left: 468px;
                                    bottom: 1240px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.11px;
                                }

                                #t3c_3 {
                                    left: 468px;
                                    bottom: 1230px;
                                    letter-spacing: -0.15px;
                                }

                                #t3d_3 {
                                    left: 468px;
                                    bottom: 1210px;
                                    letter-spacing: -0.41px;
                                }

                                #t3e_3 {
                                    left: 468px;
                                    bottom: 1198px;
                                    letter-spacing: -0.15px;
                                }

                                #t3f_3 {
                                    left: 487px;
                                    bottom: 1198px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.24px;
                                }

                                #t3g_3 {
                                    left: 468px;
                                    bottom: 1187px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.28px;
                                }

                                #t3h_3 {
                                    left: 468px;
                                    bottom: 1177px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.59px;
                                }

                                #t3i_3 {
                                    left: 468px;
                                    bottom: 1166px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.65px;
                                }

                                #t3j_3 {
                                    left: 468px;
                                    bottom: 1155px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.57px;
                                }

                                #t3k_3 {
                                    left: 468px;
                                    bottom: 1144px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.58px;
                                }

                                #t3l_3 {
                                    left: 468px;
                                    bottom: 1134px;
                                    letter-spacing: -0.15px;
                                    word-spacing: -0.49px;
                                }

                                #t3m_3 {
                                    left: 468px;
                                    bottom: 1123px;
                                    letter-spacing: -0.15px;
                                }

                                #t3n_3 {
                                    left: 468px;
                                    bottom: 1110px;
                                    letter-spacing: -0.15px;
                                }

                                #t3o_3 {
                                    left: 489px;
                                    bottom: 1110px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.31px;
                                }

                                #t3p_3 {
                                    left: 468px;
                                    bottom: 1099px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.07px;
                                }

                                #t3q_3 {
                                    left: 468px;
                                    bottom: 1089px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.68px;
                                }

                                #t3r_3 {
                                    left: 468px;
                                    bottom: 1078px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.44px;
                                }

                                #t3s_3 {
                                    left: 468px;
                                    bottom: 1067px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.42px;
                                }

                                #t3t_3 {
                                    left: 468px;
                                    bottom: 1056px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.04px;
                                }

                                #t3u_3 {
                                    left: 468px;
                                    bottom: 1046px;
                                    letter-spacing: -0.15px;
                                    word-spacing: -0.02px;
                                }

                                #t3v_3 {
                                    left: 468px;
                                    bottom: 1035px;
                                    letter-spacing: -0.16px;
                                }

                                #t3w_3 {
                                    left: 468px;
                                    bottom: 1022px;
                                    letter-spacing: -0.15px;
                                }

                                #t3x_3 {
                                    left: 488px;
                                    bottom: 1022px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.65px;
                                }

                                #t3y_3 {
                                    left: 468px;
                                    bottom: 1011px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.28px;
                                }

                                #t3z_3 {
                                    left: 468px;
                                    bottom: 1000px;
                                    letter-spacing: -0.15px;
                                    word-spacing: -0.57px;
                                }

                                #t40_3 {
                                    left: 468px;
                                    bottom: 990px;
                                    letter-spacing: -0.15px;
                                }

                                #t41_3 {
                                    left: 468px;
                                    bottom: 977px;
                                    letter-spacing: -0.15px;
                                }

                                #t42_3 {
                                    left: 488px;
                                    bottom: 977px;
                                    letter-spacing: -0.15px;
                                    word-spacing: -0.05px;
                                }

                                #t43_3 {
                                    left: 468px;
                                    bottom: 966px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.17px;
                                }

                                #t44_3 {
                                    left: 468px;
                                    bottom: 955px;
                                    letter-spacing: -0.15px;
                                }

                                #t45_3 {
                                    left: 468px;
                                    bottom: 942px;
                                    letter-spacing: -0.15px;
                                }

                                #t46_3 {
                                    left: 491px;
                                    bottom: 942px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 3.3px;
                                }

                                #t47_3 {
                                    left: 468px;
                                    bottom: 931px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.35px;
                                }

                                #t48_3 {
                                    left: 738px;
                                    bottom: 931px;
                                    letter-spacing: -0.15px;
                                }

                                #t49_3 {
                                    left: 895px;
                                    bottom: 931px;
                                }

                                #t4a_3 {
                                    left: 468px;
                                    bottom: 912px;
                                    letter-spacing: -0.42px;
                                }

                                #t4b_3 {
                                    left: 468px;
                                    bottom: 900px;
                                    letter-spacing: -0.15px;
                                }

                                #t4c_3 {
                                    left: 488px;
                                    bottom: 900px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.71px;
                                }

                                #t4d_3 {
                                    left: 468px;
                                    bottom: 889px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.49px;
                                }

                                #t4e_3 {
                                    left: 468px;
                                    bottom: 878px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.8px;
                                }

                                #t4f_3 {
                                    left: 468px;
                                    bottom: 868px;
                                    letter-spacing: -0.15px;
                                }

                                #t4g_3 {
                                    left: 468px;
                                    bottom: 854px;
                                    letter-spacing: -0.15px;
                                }

                                #t4h_3 {
                                    left: 489px;
                                    bottom: 854px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.66px;
                                }

                                #t4i_3 {
                                    left: 468px;
                                    bottom: 844px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.42px;
                                }

                                #t4j_3 {
                                    left: 468px;
                                    bottom: 833px;
                                    letter-spacing: -0.16px;
                                }

                                #t4k_3 {
                                    left: 468px;
                                    bottom: 814px;
                                    letter-spacing: -0.41px;
                                }

                                #t4l_3 {
                                    left: 468px;
                                    bottom: 801px;
                                    letter-spacing: -0.17px;
                                }

                                #t4m_3 {
                                    left: 488px;
                                    bottom: 801px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.16px;
                                }

                                #t4n_3 {
                                    left: 468px;
                                    bottom: 790px;
                                    letter-spacing: -0.15px;
                                    word-spacing: -0.3px;
                                }

                                #t4o_3 {
                                    left: 468px;
                                    bottom: 780px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.84px;
                                }

                                #t4p_3 {
                                    left: 468px;
                                    bottom: 769px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.63px;
                                }

                                #t4q_3 {
                                    left: 468px;
                                    bottom: 758px;
                                    letter-spacing: -0.16px;
                                }

                                #t4r_3 {
                                    left: 468px;
                                    bottom: 732px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.06px;
                                }

                                #t4s_3 {
                                    left: 468px;
                                    bottom: 721px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.6px;
                                }

                                #t4t_3 {
                                    left: 468px;
                                    bottom: 711px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.53px;
                                }

                                #t4u_3 {
                                    left: 468px;
                                    bottom: 700px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.13px;
                                }

                                #t4v_3 {
                                    left: 468px;
                                    bottom: 689px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.26px;
                                }

                                #t4w_3 {
                                    left: 468px;
                                    bottom: 679px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.62px;
                                }

                                #t4x_3 {
                                    left: 468px;
                                    bottom: 668px;
                                    letter-spacing: -0.15px;
                                }

                                #t4y_3 {
                                    left: 468px;
                                    bottom: 655px;
                                }

                                #t4z_3 {
                                    left: 468px;
                                    bottom: 642px;
                                    letter-spacing: -0.15px;
                                }

                                #t50_3 {
                                    left: 488px;
                                    bottom: 642px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.6px;
                                }

                                #t51_3 {
                                    left: 468px;
                                    bottom: 631px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.14px;
                                }

                                #t52_3 {
                                    left: 468px;
                                    bottom: 620px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.47px;
                                }

                                #t53_3 {
                                    left: 468px;
                                    bottom: 609px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.87px;
                                }

                                #t54_3 {
                                    left: 468px;
                                    bottom: 599px;
                                    letter-spacing: -0.15px;
                                }

                                #t55_3 {
                                    left: 468px;
                                    bottom: 586px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.13px;
                                }

                                #t56_3 {
                                    left: 468px;
                                    bottom: 575px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.29px;
                                }

                                #t57_3 {
                                    left: 468px;
                                    bottom: 564px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.8px;
                                }

                                #t58_3 {
                                    left: 468px;
                                    bottom: 554px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.27px;
                                }

                                #t59_3 {
                                    left: 468px;
                                    bottom: 543px;
                                    letter-spacing: -0.16px;
                                }

                                #t5a_3 {
                                    left: 468px;
                                    bottom: 530px;
                                    letter-spacing: -0.15px;
                                }

                                #t5b_3 {
                                    left: 487px;
                                    bottom: 530px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.24px;
                                }

                                #t5c_3 {
                                    left: 468px;
                                    bottom: 519px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.93px;
                                }

                                #t5d_3 {
                                    left: 468px;
                                    bottom: 508px;
                                    letter-spacing: -0.15px;
                                }

                                #t5e_3 {
                                    left: 468px;
                                    bottom: 495px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.12px;
                                }

                                #t5f_3 {
                                    left: 468px;
                                    bottom: 485px;
                                    letter-spacing: -0.16px;
                                }

                                #t5g_3 {
                                    left: 468px;
                                    bottom: 465px;
                                    letter-spacing: -0.41px;
                                }

                                #t5h_3 {
                                    left: 468px;
                                    bottom: 453px;
                                    letter-spacing: -0.15px;
                                }

                                #t5i_3 {
                                    left: 490px;
                                    bottom: 453px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.46px;
                                }

                                #t5j_3 {
                                    left: 468px;
                                    bottom: 442px;
                                    letter-spacing: -0.15px;
                                }

                                #t5k_3 {
                                    left: 468px;
                                    bottom: 429px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.13px;
                                }

                                #t5l_3 {
                                    left: 468px;
                                    bottom: 418px;
                                    letter-spacing: -0.15px;
                                }

                                #t5m_3 {
                                    left: 468px;
                                    bottom: 407px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.91px;
                                }

                                #t5n_3 {
                                    left: 468px;
                                    bottom: 397px;
                                    letter-spacing: -0.15px;
                                    word-spacing: -0.3px;
                                }

                                #t5o_3 {
                                    left: 468px;
                                    bottom: 386px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.26px;
                                }

                                #t5p_3 {
                                    left: 468px;
                                    bottom: 375px;
                                    letter-spacing: -0.15px;
                                }

                                #t5q_3 {
                                    left: 468px;
                                    bottom: 362px;
                                    letter-spacing: -0.16px;
                                    word-spacing: 0.31px;
                                }

                                #t5r_3 {
                                    left: 468px;
                                    bottom: 352px;
                                    letter-spacing: -0.15px;
                                }

                                #t5s_3 {
                                    left: 468px;
                                    bottom: 338px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.72px;
                                }

                                #t5t_3 {
                                    left: 468px;
                                    bottom: 328px;
                                    letter-spacing: -0.16px;
                                }

                                #t5u_3 {
                                    left: 468px;
                                    bottom: 315px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.05px;
                                }

                                #t5v_3 {
                                    left: 468px;
                                    bottom: 304px;
                                    letter-spacing: -0.15px;
                                }

                                #t5w_3 {
                                    left: 468px;
                                    bottom: 291px;
                                    letter-spacing: -0.15px;
                                }

                                #t5x_3 {
                                    left: 490px;
                                    bottom: 291px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 2.38px;
                                }

                                #t5y_3 {
                                    left: 468px;
                                    bottom: 280px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.29px;
                                }

                                #t5z_3 {
                                    left: 468px;
                                    bottom: 269px;
                                    letter-spacing: -0.15px;
                                }

                                #t60_3 {
                                    left: 468px;
                                    bottom: 256px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.59px;
                                }

                                #t61_3 {
                                    left: 468px;
                                    bottom: 245px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.02px;
                                }

                                #t62_3 {
                                    left: 468px;
                                    bottom: 235px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.25px;
                                }

                                #t63_3 {
                                    left: 468px;
                                    bottom: 224px;
                                    letter-spacing: -0.15px;
                                }

                                #t64_3 {
                                    left: 468px;
                                    bottom: 205px;
                                    letter-spacing: -0.41px;
                                }

                                #t65_3 {
                                    left: 468px;
                                    bottom: 192px;
                                    letter-spacing: -0.15px;
                                }

                                #t66_3 {
                                    left: 488px;
                                    bottom: 192px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.13px;
                                }

                                #t67_3 {
                                    left: 468px;
                                    bottom: 182px;
                                    letter-spacing: -0.15px;
                                }

                                #t68_3 {
                                    left: 468px;
                                    bottom: 168px;
                                    letter-spacing: -0.15px;
                                }

                                #t69_3 {
                                    left: 489px;
                                    bottom: 168px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 1.33px;
                                }

                                #t6a_3 {
                                    left: 468px;
                                    bottom: 158px;
                                    letter-spacing: -0.15px;
                                    word-spacing: -0.23px;
                                }

                                #t6b_3 {
                                    left: 468px;
                                    bottom: 147px;
                                    letter-spacing: -0.16px;
                                }

                                #t6c_3 {
                                    left: 468px;
                                    bottom: 134px;
                                    letter-spacing: -0.15px;
                                }

                                #t6d_3 {
                                    left: 488px;
                                    bottom: 134px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 0.52px;
                                }

                                #t6e_3 {
                                    left: 468px;
                                    bottom: 123px;
                                    letter-spacing: -0.16px;
                                    word-spacing: -0.21px;
                                }

                                #t6f_3 {
                                    left: 468px;
                                    bottom: 112px;
                                    letter-spacing: -0.15px;
                                    word-spacing: -0.26px;
                                }

                                #t6g_3 {
                                    left: 468px;
                                    bottom: 102px;
                                    letter-spacing: -0.15px;
                                }

                                #t6h_3 {
                                    left: 468px;
                                    bottom: 76px;
                                    letter-spacing: -0.15px;
                                }

                                #t6i_3 {
                                    left: 468px;
                                    bottom: 62px;
                                    letter-spacing: -0.15px;
                                    word-spacing: 3.15px;
                                }

                                #t6j_3 {
                                    left: 468px;
                                    bottom: 52px;
                                    letter-spacing: -0.15px;
                                }

                                #t6k_3 {
                                    left: 468px;
                                    bottom: 39px;
                                    letter-spacing: -0.16px;
                                }

                                #t6l_3 {
                                    left: 607px;
                                    bottom: 15px;
                                    letter-spacing: 0.15px;
                                }

                                .s1 {
                                    font-size: 11px;
                                    font-family: OpenSans-Bold_k;
                                    color: #00682D;
                                }

                                .s2 {
                                    font-size: 9px;
                                    font-family: OpenSans-Semibold_l;
                                    color: #00682D;
                                }

                                .s3 {
                                    font-size: 9px;
                                    font-family: OpenSans_83;
                                    color: #00682D;
                                }

                                .s4 {
                                    font-size: 9px;
                                    font-family: OpenSans_82;
                                    color: #00682D;
                                }

                                .s5 {
                                    font-size: 7px;
                                    font-family: OpenSansLight-Italic_f;
                                    color: #00682D;
                                }

                                .t.v0_3 {
                                    transform: scaleX(1.1);
                                }
                            </style>
                            <!-- End inline CSS -->

                            <!-- Begin embedded font definitions -->
                            <style id="fonts3" type="text/css">
                                @font-face {
                                    font-family: OpenSans-Bold_k;
                                    src: url("{{ asset('forms/lampiris/electricity_natural_gas_du/') }}/fonts/OpenSans-Bold_k.woff") format("woff");
                                }

                                @font-face {
                                    font-family: OpenSans-Semibold_l;
                                    src: url("{{ asset('forms/lampiris/electricity_natural_gas_du/') }}/fonts/OpenSans-Semibold_l.woff") format("woff");
                                }

                                @font-face {
                                    font-family: OpenSansLight-Italic_f;
                                    src: url("{{ asset('forms/lampiris/electricity_natural_gas_du/') }}/fonts/OpenSansLight-Italic_f.woff") format("woff");
                                }

                                @font-face {
                                    font-family: OpenSans_82;
                                    src: url("{{ asset('forms/lampiris/electricity_natural_gas_du/') }}/fonts/OpenSans_82.woff") format("woff");
                                }

                                @font-face {
                                    font-family: OpenSans_83;
                                    src: url("{{ asset('forms/lampiris/electricity_natural_gas_du/') }}/fonts/OpenSans_83.woff") format("woff");
                                }
                            </style>
                            <!-- End embedded font definitions -->

                            <!-- Begin page background -->
                            <div id="pg3Overlay" style="width:100%; height:100%; position:absolute; z-index:1; background-color:rgba(0,0,0,0); -webkit-user-select: none;"></div>
                            <div id="pg3" style="-webkit-user-select: none;"><object width="931" height="1286" data="{{ asset('forms/lampiris/electricity_natural_gas_du/') }}3/3.svg" type="image/svg+xml" id="pdf3" style="width:931px; height:1286px; -moz-transform:scale(1); z-index: 0;"></object></div>
                            <!-- End page background -->


                            <!-- Begin text definitions (Positioned/styled in CSS) -->
                            <div class="text-container"><span id="t1_3" class="t s1">Artikel 7 - Facturatie, betaling en opzegging </span>
                                <span id="t2_3" class="t s2">7.1 </span><span id="t3_3" class="t s3">Voor de bepaling van de hoeveelheid geleverde energie baseert Lampiris zich op de meetgegevens </span>
                                <span id="t4_3" class="t s4" data-mappings='[[15,"fi"]]'>en verbruiksproﬁelen aangeleverd door de Netbeheerder op basis van gegevens zoals opgenomen of </span>
                                <span id="t5_3" class="t s4">geschat door de Netbeheerder, of verbruiksgegevens aangeleverd door de Klant en gevalideerd door </span>
                                <span id="t6_3" class="t s4">de Netbeheerder. </span>
                                <span id="t7_3" class="t s2">7.2 </span><span id="t8_3" class="t s3">De Klant is voorschotten verschuldigd op de door hem afgenomen elektriciteit en/of aardgas. Lampiris </span>
                                <span id="t9_3" class="t s4" data-mappings='[[70,"fi"]]'>bepaalt het bedrag van deze voorschotten op basis van het verbruiksproﬁel van de Klant zoals vastgesteld </span>
                                <span id="ta_3" class="t s4" data-mappings='[[85,"ff"]]'>door de Netbeheerder, en brengt de Klant op de hoogte van deze voorschotten voor de eﬀectieve </span>
                                <span id="tb_3" class="t s3">facturering en bij elke verandering. De Klant kan Lampiris vragen om het bedrag van de voorschotten te </span>
                                <span id="tc_3" class="t s3">herzien. Lampiris zal een dergelijke vraag gemotiveerd beantwoorden binnen een termijn van maximaal </span>
                                <span id="td_3" class="t s3">tien (10) werkdagen. </span>
                                <span id="te_3" class="t s3">Indien de gevraagde aanpassing onredelijk is, heeft Lampiris het recht om deze te weigeren, met een </span>
                                <span id="tf_3" class="t s3">motivering voor de weigering. Lampiris is niet verantwoordelijk voor de waargenomen verschillen tussen </span>
                                <span id="tg_3" class="t s3">het werkelijke verbruik van de Klant en het geschatte verbruik dat in aanmerking werd genomen voor de </span>
                                <span id="th_3" class="t s3">berekening van de voorschotten. </span>
                                <span id="ti_3" class="t s2">7.3 </span><span id="tj_3" class="t s3">De betaling van de voorschotten en de afrekeningen gebeurt, naar keuze van de Klant, hetzij door </span>
                                <span id="tk_3" class="t s3">overschrijving, hetzij door domiciliëring. Indien voor betaling door middel van domiciliëring wordt gekozen, </span>
                                <span id="tl_3" class="t s3">heeft de Klant op elk ogenblik de mogelijkheid om de betaling van zijn afrekeningsfactuur uit te sluiten via </span>
                                <span id="tm_3" class="t s3">een eenvoudig voorafgaand en schriftelijk verzoek aan Lampiris. </span>
                                <span id="tn_3" class="t s2">7.4 </span><span id="to_3" class="t s3">De factuur die de Klant van Lampiris ontvangt, moet binnen de vijftien (15) dagen na ontvangst worden </span>
                                <span id="tp_3" class="t s3">betaald. Voor de toepassing van deze Overeenkomst worden de facturen en de creditnota’s geacht </span>
                                <span id="tq_3" class="t s3">drie (3) dagen na hun verzendingsdatum te zijn ontvangen. Indien de Klant ervoor gekozen heeft om </span>
                                <span id="tr_3" class="t s3">zijn rekeningen te betalen via domiciliëring, zal er eveneens een termijn van vijftien (15) dagen worden </span>
                                <span id="ts_3" class="t s3">gerespecteerd vooraleer de domiciliëringsopdracht wordt uitgevoerd. </span>
                                <span id="tt_3" class="t s2">7.5 </span><span id="tu_3" class="t s3">De facturen worden geacht te zijn aanvaard bij gebrek aan protest binnen de vijftien (15) dagen na hun </span>
                                <span id="tv_3" class="t s3">ontvangst. Bij wijze van uitzondering zal elke Klant een foutieve factuur kunnen betwisten gedurende twaalf </span>
                                <span id="tw_3" class="t s3">(12) maanden vanaf de ontvangstdatum van de factuur. Bij een redelijkerwijs gefundeerde betwisting van </span>
                                <span id="tx_3" class="t s3">een factuur heeft elke Klant het recht om de betaling van het betwiste gedeelte van die factuur op te </span>
                                <span id="ty_3" class="t s4" data-mappings='[[77,"ff"]]'>schorten, totdat de behandeling van de klacht is afgerond. In geval van een eﬀectieve foutieve facturatie in </span>
                                <span id="tz_3" class="t s3">het nadeel van de Klant, zullen er op de terug te betalen som ook wettelijke interesten worden aangerekend </span>
                                <span id="t10_3" class="t s3">vanaf de dag van betaling van het foutief gefactureerde bedrag. </span>
                                <span id="t11_3" class="t s2">7.6 </span><span id="t12_3" class="t s4">De laattijdige betaling van een factuur of de niet-naleving van een betalingsplan heeft tot gevolg </span>
                                <span id="t13_3" class="t s3">dat alle andere facturen met betrekking tot dezelfde energievoorziening, ook al werd daarvoor een </span>
                                <span id="t14_3" class="t s3">betalingstermijn verleend of een betalingsplan opgesteld, onmiddellijk opeisbaar worden, zonder </span>
                                <span id="t15_3" class="t s3">voorafgaande ingebrekestelling. Indien op om het even welk ogenblik een of meerdere facturen </span>
                                <span id="t16_3" class="t s3">vervallen zijn, zal elke betaling die vervolgens wordt verricht door de Klant, worden toegerekend aan de </span>
                                <span id="t17_3" class="t s3">laatste uitgegeven factuur die nog openstaat. </span>
                                <span id="t18_3" class="t s2">7.7 </span><span id="t19_3" class="t s3">Onverminderd de wettelijke bepalingen kan Lampiris administratieve kosten en/of intresten </span>
                                <span id="t1a_3" class="t s3">aanrekenen voor het verzenden van bijkomende facturen, duplicata, herinneringen of ingebrekestellingen, </span>
                                <span id="t1b_3" class="t s3">voor de opmaak van een betalingsplan als gevolg van een laattijdige betaling of wanneer het voorleggen </span>
                                <span id="t1c_3" class="t s3">van een domiciliëring door de bank wordt geweigerd. </span>
                                <span id="t1d_3" class="t s4">De kosten bedragen 7,50 EUR voor het verzenden van een gewone brief en 15,00 EUR voor een </span>
                                <span id="t1e_3" class="t s3">aangetekende verzending. Bij laattijdige betaling van het totaal of een deel van de factuur, of indien </span>
                                <span id="t1f_3" class="t s4" data-mappings='[[61,"fi"]]'>het voorleggen van een domiciliëring wordt geweigerd door de ﬁnanciële instelling, is de Klant ertoe </span>
                                <span id="t1g_3" class="t s3">gehouden, van rechtswege en zonder ingebrekestelling of herinnering, verwijlinteresten te betalen vanaf </span>
                                <span id="t1h_3" class="t s3">de opeisbaarheid van de factuur, op elk onbetaald bedrag, tot op de datum van de volledige betaling. </span>
                                <span id="t1i_3" class="t s3">Indien de Klant een Residentiële klant is, past Lampiris hiervoor de wettelijke intrestvoet toe. </span>
                                <span id="t1j_3" class="t s3">Behoudens andersluidende regionale bepalingen inzake schadevergoeding, is de Klant gehouden tot de </span>
                                <span id="t1k_3" class="t s3">betaling van een forfaitaire schadevergoeding van 10% op ieder onbetaald bedrag, van rechtswege en </span>
                                <span id="t1l_3" class="t s4">zonder ingebrekestelling, met een minimum van 15,00 EUR en onverminderd het recht van Lampiris om </span>
                                <span id="t1m_3" class="t s3">een vergoeding te eisen voor de werkelijk geleden schade. </span>
                                <span id="t1n_3" class="t s2">7.8 </span><span id="t1o_3" class="t s3">Indien de Klant zijn achterstallige facturen niet betaalt, kan Lampiris de levering stopzetten mits </span>
                                <span id="t1p_3" class="t s3">naleving van de toepasselijke wettelijke procedures. </span>
                                <span id="t1q_3" class="t s3">Behoudens andersluidende regionale bepalingen inzake schadevergoeding, is Lampiris niet aansprakelijk </span>
                                <span id="t1r_3" class="t s3">voor om het even welke schade die voortvloeit uit de stopzetting van de Levering. </span>
                                <span id="t1s_3" class="t s2">7.9 </span><span id="t1t_3" class="t s3">De bepalingen van dit artikel 7 zijn van toepassing op alle facturen van Lampiris, voor de Levering van </span>
                                <span id="t1u_3" class="t s4">producten of diensten door Lampiris of de Netbeheerder. </span>
                                <span id="t1v_3" class="t s2">7.10 </span><span id="t1w_3" class="t s3">Indien de afrekening of de slotfactuur een bedrag vertoont in het voordeel van de Klant, betaalt </span>
                                <span id="t1x_3" class="t s3">Lampiris dit bedrag terug binnen een termijn van vijftien (15) dagen te rekenen vanaf de ontvangst van </span>
                                <span id="t1y_3" class="t s3">de creditnota, op voorwaarde dat Lampiris met zekerheid het rekeningnummer kent waarop het bedrag </span>
                                <span id="t1z_3" class="t s3">moet worden gestort. Bij gebrek aan andere instructies van de Klant, zal Lampiris het saldo terugstorten </span>
                                <span id="t20_3" class="t s3">op het rekeningnummer dat de Klant gewoonlijk heeft gebruikt om zijn facturen te betalen. Lampiris </span>
                                <span id="t21_3" class="t s3">behoudt zich bovendien het recht voor om eventuele tegoeden te compenseren met andere uitstaande </span>
                                <span id="t22_3" class="t s3">vorderingen/facturen tegenover de Klant, uit hoofde van andere Overeenkomsten met Lampiris voor </span>
                                <span id="t23_3" class="t s3">dezelfde energievoorziening. </span>
                                <span id="t24_3" class="t s2">7.11 </span><span id="t25_3" class="t s3">Indien de Klant recht zou hebben op een vergoeding van Lampiris na een laattijdige terugbetaling, </span>
                                <span id="t26_3" class="t s3">heeft de Klant recht op de interesten berekend op de verschuldigde bedragen volgens het wettelijke tarief, </span>
                                <span id="t27_3" class="t s3">te rekenen vanaf de dag na de vervaldatum van de creditnota. </span>
                                <span id="t28_3" class="t s2">7.12 </span><span id="t29_3" class="t s3">In geval van een factureringsfout die aan Lampiris kan worden toegeschreven, kan een rechtzetting </span>
                                <span id="t2a_3" class="t s3">van de facturatie plaatsvinden binnen een periode van maximaal twaalf (12) maanden na de betalingsdatum </span>
                                <span id="t2b_3" class="t s3">van de foutieve factuur, tenzij de rechtzetting te wijten is aan een derde partij. In dat geval is de rechtzet</span><span id="t2c_3" class="t s4">- </span>
                                <span id="t2d_3" class="t s3">tingstermijn van toepassing zoals bepaald in de regelgeving. </span>
                                <span id="t2e_3" class="t s1">Artikel 8 - Overmacht en schorsing van de Levering </span>
                                <span id="t2f_3" class="t s2">8.1 </span><span id="t2g_3" class="t s3">In geval van overmacht worden de verplichtingen onder deze Overeenkomst, behalve de verplichting </span>
                                <span id="t2h_3" class="t s3">tot betaling van een geldsom, geschorst gedurende de periode van de overmacht. Onder overmacht </span>
                                <span id="t2i_3" class="t s3">verstaan wij elke al dan niet onvoorzienbare en onvermijdbare gebeurtenis onafhankelijk van onze wil die </span>
                                <span id="t2j_3" class="t s3">een onoverkomelijk beletsel uitmaakt voor de nakoming van onze Overeenkomst, zoals de uitval van het </span>
                                <span id="t2k_3" class="t s3">net, problemen in het transport of de distributie, het niet kunnen verkrijgen van (voldoende) elektriciteit of </span>
                                <span id="t2l_3" class="t s3">aardgas. Deze opsomming is niet limitatief. </span>
                                <span id="t2m_3" class="t s2">8.2 </span><span id="t2n_3" class="t s3">Indien de Overeenkomst gedurende meer dan drie (3) maanden niet kan worden uitgevoerd door </span>
                                <span id="t2o_3" class="t s3">overmacht, hebben beide Partijen het recht om de Leveringsovereenkomst per aangetekende brief te </span>
                                <span id="t2p_3" class="t s3">beëindigen, zonder dat er een schadevergoeding verschuldigd is aan de andere partij. </span>
                                <span id="t2q_3" class="t s1">Artikel 9 - Waarborg </span>
                                <span id="t2r_3" class="t s3">Zowel voor de aanvang als tijdens de uitvoering van de Overeenkomst is Lampiris gerechtigd, voor </span>
                                <span id="t2s_3" class="t s3">zover toegelaten door en overeenkomstig de toepasselijke wetgeving, om de storting van een waarborg </span>
                                <span id="t2t_3" class="t s3">of een bankwaarborg te vragen ten belope van drie (3) keer het geschatte maandverbruik (bedrag van </span>
                                <span id="t2u_3" class="t s3">de maandelijkse rekeningen) of, in het Brussels Hoofdstedelijk Gewest, ten belope van twee (2) keer </span>
                                <span id="t2v_3" class="t s3">het geschatte maandverbruik, indien de solvabiliteit van de Klant in vraag gesteld kan worden op basis </span>
                                <span id="t2w_3" class="t s3">van objectieve criteria. Deze ‘objectieve criteria’ kunnen, zonder hiertoe beperkt te zijn, de volgende </span>
                                <span id="t2x_3" class="t s3">omstandigheden omvatten: </span>
                                <span id="t2y_3" class="t s4">- uw contract werd beëindigd met uw vorige energieleverancier omdat u uw facturen niet tijdig betaalde; </span>
                                <span id="t2z_3" class="t s4">- het niet-naleven door de Klant van de betalingstermijnen voorzien in deze Overeenkomst of een </span>
                                <span id="t30_3" class="t s3">Betalingsplan. </span>
                                <span id="t31_3" class="t s3">Indien uw Leveringspunt zich in het Waals gewest bevindt, kunnen wij u geen waarborg vragen tijdens de </span>
                                <span id="t32_3" class="t s3">uitvoering van het Contract. </span>
                                <span id="t33_3" class="t s3">Bij gebrek aan de storting van een waarborg of bankwaarborg binnen een termijn van dertig (30) dagen </span>
                                <span id="t34_3" class="t s3">na het verzoek daartoe, kan Lampiris de Overeenkomst weigeren dan wel ontbinden, mits inachtneming </span>
                                <span id="t35_3" class="t s3">van de wettelijke regels. </span>
                                <span id="t36_3" class="t s3">In alle gevallen kan de Klant de waarborg terugvragen van zodra hij </span><span id="t37_3" class="t s3">gedurende één jaar al zijn facturen </span>
                                <span id="t38_3" class="t s3">stipt heeft betaald zonder betalingsherinnering en hij </span><span id="t39_3" class="t s3">bij Lampiris geen openstaande schuld meer heeft. </span>
                                <span id="t3a_3" class="t s1">Artikel 10 - Bescherming van de persoonlijke levenssfeer </span>
                                <span id="t3b_3" class="t s3">De Persoonsgegevens van de Klant worden verzameld en verwerkt door Lampiris in overeenstemming </span>
                                <span id="t3c_3" class="t s3">met ons Privacybeleid, dat geraadpleegd kan worden via de link: https://www.lampiris.be/nl/privacybeleid. </span>
                                <span id="t3d_3" class="t s1">Artikel 11 - Verantwoordelijkheid </span>
                                <span id="t3e_3" class="t s2">11.1 </span><span id="t3f_3" class="t s4">De Netbeheerders zijn verantwoordelijk voor de continuïteit van de energievoorziening en de kwaliteit </span>
                                <span id="t3g_3" class="t s3">van de aangeleverde energie, conform de bepalingen van de wetgeving en de geldende technische </span>
                                <span id="t3h_3" class="t s3">reglementering. Lampiris is hiervoor dus niet verantwoordelijk. In geval van een onderbreking van de </span>
                                <span id="t3i_3" class="t s3">distributie of het transport van elektriciteit en/of aardgas, heeft Lampiris het recht om de levering via de </span>
                                <span id="t3j_3" class="t s4">betrokken transport- of distributienetten te beperken of te onderbreken, zonder ook maar de minste </span>
                                <span id="t3k_3" class="t s3">schadevergoeding verschuldigd te zijn aan de Klant. De Klant kan zich rechtstreeks richten tot zijn </span>
                                <span id="t3l_3" class="t s4">Netbeheerder in geval van schade als gevolg van een onderbreking, een beperking of een onregelmatigheid </span>
                                <span id="t3m_3" class="t s3">in de energietoevoer. </span>
                                <span id="t3n_3" class="t s2">11.2 </span><span id="t3o_3" class="t s3">Zonder afbreuk te doen aan wat voorafgaat, is de verantwoordelijkheid van Lampiris en de Klant </span>
                                <span id="t3p_3" class="t s3">beperkt tot (i) materiële schade die rechtstreeks voortvloeit uit een zware of intentionele fout of de </span>
                                <span id="t3q_3" class="t s4">niet-uitvoering van iedere hoofdprestatie in deze Overeenkomst en (ii) de dood of lichamelijke letsels </span>
                                <span id="t3r_3" class="t s3">die het gevolg zijn van een handeling of een verzuim. De vergoeding voor directe materiële schade is </span>
                                <span id="t3s_3" class="t s3">per schadegeval en per jaar beperkt tot een bedrag gelijk aan twaalf (12) keer het bedrag vastgesteld </span>
                                <span id="t3t_3" class="t s4" data-mappings='[[73,"ff"]]'>als maandelijks voorschot, zonder dat dit bedrag hoger kan zijn dan het eﬀectief gefactureerde bedrag </span>
                                <span id="t3u_3" class="t s3">gedurende de 12 voorafgaande maanden. Lampiris en de Klant zijn niet verantwoordelijk ten opzichte van </span>
                                <span id="t3v_3" class="t s3">elkaar voor indirecte of gevolgschade, productieverlies, winstderving of inkomstenverlies. </span>
                                <span id="t3w_3" class="t s2">11.3 </span><span id="t3x_3" class="t s4">Elke vraag om schadevergoeding en intresten moet tussen de Partijen onderling schriftelijk worden </span>
                                <span id="t3y_3" class="t s3">meegedeeld binnen de dertig (30) werkdagen, te rekenen vanaf het optreden van de schade of de datum </span>
                                <span id="t3z_3" class="t s3">waarop de schade redelijkerwijze geconstateerd kon worden. Laattijdige aanvragen voor schadevergoeding </span>
                                <span id="t40_3" class="t s3">en interesten worden niet vergoed. </span>
                                <span id="t41_3" class="t s2">11.4 </span><span id="t42_3" class="t s3">Indien de verantwoordelijkheid van Lampiris werd ingeroepen voor verborgen gebreken in de zin van </span>
                                <span id="t43_3" class="t s4">artikel 1641 tot 1649 van het Burgerlijk Wetboek, is deze verantwoordelijkheid uitgesloten indien Lampiris </span>
                                <span id="t44_3" class="t s3">kan bewijzen dat dit gebrek niet te ontdekken was. </span>
                                <span id="t45_3" class="t s2">11.5 </span><span id="t46_3" class="t s3">Dit artikel is van rechtswege van toepassing, behoudens andersluidende regionale wettelijke </span>
                                <span id="t47_3" class="t s3">bepalingen inzake schadevergoeding. (Voor klanten in Wallonië, zie </span><span id="t48_3" class="t s4">http://www.indemnisations-energie.be</span><span id="t49_3" class="t s3">. </span>
                                <span id="t4a_3" class="t s1">Artikel 12 - Overdraagbaarheid </span>
                                <span id="t4b_3" class="t s2">12.1 </span><span id="t4c_3" class="t s3">Lampiris heeft het recht om de Overeenkomst over te dragen aan een andere persoon, voor zover </span>
                                <span id="t4d_3" class="t s4" data-mappings='[[47,"ff"]]'>deze voldoet aan de wettelijke bepalingen betreﬀende de levering van elektriciteit of aardgas en over </span>
                                <span id="t4e_3" class="t s3">de nodige vergunningen beschikt, en voor zover de in deze Overeenkomst vastgelegde voorwaarden </span>
                                <span id="t4f_3" class="t s3">gehandhaafd blijven voor de duurtijd van de Overeenkomst. </span>
                                <span id="t4g_3" class="t s2">12.2 </span><span id="t4h_3" class="t s3">De Klant kan de Overeenkomst alleen aan een derde overdragen bij verhuizing, en mits aan de </span>
                                <span id="t4i_3" class="t s3">voorwaarden van artikel 13.1 is voldaan. Alle kosten die voortvloeien uit de overdracht zijn voor rekening </span>
                                <span id="t4j_3" class="t s3">van de Klant. </span>
                                <span id="t4k_3" class="t s1">Artikel 13 - Verhuizing </span>
                                <span id="t4l_3" class="t s2">13.1 </span><span id="t4m_3" class="t s3">Voor elke vraag in verband met zijn verhuis, kan de Klant zich richten tot de klantendienst, waarvan de </span>
                                <span id="t4n_3" class="t s3">gegevens worden vermeld op de facturen. Bij verhuizing moet de Klant: (1) het energieovernamedocument </span>
                                <span id="t4o_3" class="t s4">(hierna EOD genoemd) invullen en bijhouden; (2) Lampiris op de hoogte brengen van zijn nieuwe adres </span>
                                <span id="t4p_3" class="t s4" data-mappings='[[54,"ff"]]'>en (3) ten laatste binnen de dertig (30) dagen na de eﬀectieve verhuizing de laatste meteropnames voor </span>
                                <span id="t4q_3" class="t s3">‘elektriciteit’ en/of ‘aardgas’ meedelen. </span>
                                <span id="t4r_3" class="t s4">Het EOD wordt enkel door de Klant ondertekend indien er geen nieuwe bewoner op het adres intrekt, </span>
                                <span id="t4s_3" class="t s3">en door de Klant en de nieuwe bewoner gezamenlijk indien er wel een nieuwe bewoner intrekt. In geval </span>
                                <span id="t4t_3" class="t s4">van verhuring zal de eigenaar het EOD mede ondertekenen bij gebrek aan een nieuwe huurder. In geval </span>
                                <span id="t4u_3" class="t s4">van betwisting van de referentie-index op het moment van de verhuizing, behoudt Lampiris zich het recht </span>
                                <span id="t4v_3" class="t s4">voor om het volledig ingevulde en ondertekende EOD ter inzage te vragen. Indien het EOD niet ter inzage </span>
                                <span id="t4w_3" class="t s4">wordt voorgelegd, zijn de door de Netbeheerder gevalideerde meterstanden van toepassing. Het EOD is </span>
                                <span id="t4x_3" class="t s3">beschikbaar op de site www.Lampiris.be </span>
                                <span id="t4y_3" class="t s3">. </span>
                                <span id="t4z_3" class="t s2">13.2 </span><span id="t50_3" class="t s4">Na de verhuizing zal deze Overeenkomst verder uitgevoerd worden voor het nieuwe Leveringspunt </span>
                                <span id="t51_3" class="t s3">op het nieuwe adres van de Klant, tenzij hij verhuist naar het buitenland, een ander gewest of een woning </span>
                                <span id="t52_3" class="t s3">waar de Klant geen eigen meter heeft, of indien hij gaat wonen bij een andere Consument die reeds een </span>
                                <span id="t53_3" class="t s3">leveringsovereenkomst gesloten heeft. In deze gevallen zal de Overeenkomst voortijdig kunnen worden </span>
                                <span id="t54_3" class="t s3">beëindigd, mits inachtneming van een opzeggingstermijn van dertig (30) dagen. </span>
                                <span id="t55_3" class="t s3">Indien de Klant Lampiris niet tijdig op de hoogte stelt van de verhuizing, blijft hij gehouden tot zijn </span>
                                <span id="t56_3" class="t s3">verplichtingen onder deze Overeenkomst, en in het bijzonder tot de betaling van alle elektriciteit of aardgas </span>
                                <span id="t57_3" class="t s3">die op het bestaande Leveringspunt door wie ook wordt afgenomen, tot de dag volgend op de dag van </span>
                                <span id="t58_3" class="t s3">zijn mededeling van verhuizing aan Lampiris of de dag volgend op de sluiting van de meter, in toepassing </span>
                                <span id="t59_3" class="t s3">van artikel 13.3. </span>
                                <span id="t5a_3" class="t s2">13.3 </span><span id="t5b_3" class="t s3">Indien de Klant zijn verplichtingen uiteengezet in artikel 13.1 van deze voorwaarden niet nakomt, geeft </span>
                                <span id="t5c_3" class="t s3">de Klant Lampiris hierbij een onherroepelijk mandaat om de sluiting van de meter aan te vragen bij de </span>
                                <span id="t5d_3" class="t s4">Netbeheerder, in naleving van de geldende wettelijke bepalingen. De Klant zal </span>
                                <span id="t5e_3" class="t s3">instaan voor alle kosten van de sluiting die gefactureerd kunnen worden aan Lampiris, en Lampiris draagt </span>
                                <span id="t5f_3" class="t s3">geen enkele verantwoordelijkheid voor de schade die hieruit volgt. </span>
                                <span id="t5g_3" class="t s1">Artikel 14 - Wijziging van de voorwaarden </span>
                                <span id="t5h_3" class="t s2">14.1 </span><span id="t5i_3" class="t s3">Deze Algemene voorwaarden en de Tariefkaart die hierbij van toepassing zijn, kunnen slechts </span>
                                <span id="t5j_3" class="t s3">gewijzigd worden: </span>
                                <span id="t5k_3" class="t s4">- Indien de wijzigingen nadelig zijn voor de Klant: (i) aan het einde van de lopende leveringsperiode, indien </span>
                                <span id="t5l_3" class="t s3">de Klant een overeenkomst voor bepaalde duur heeft afgesloten. In dat geval deelt Lampiris de gewijzigde </span>
                                <span id="t5m_3" class="t s3">voorwaarden minstens twee (2) maanden vóór het einde van de lopende periode mee aan de Klant en </span>
                                <span id="t5n_3" class="t s3">kunnen deze wijzingen pas in voege treden bij de vernieuwing of verlenging van de lopende overeenkomst; </span>
                                <span id="t5o_3" class="t s3">(ii) twee (2) maanden na de mededeling van de gewijzigde voorwaarden aan de Klant indien deze een </span>
                                <span id="t5p_3" class="t s3">overeenkomst voor onbepaalde duur heeft afgesloten; </span>
                                <span id="t5q_3" class="t s4">- Indien de wijzigingen niet nadelig zijn voor de Klant: twee (2) maanden na een mededeling aan de Klant, </span>
                                <span id="t5r_3" class="t s3">ongeacht de aard van de afgesloten overeenkomst. </span>
                                <span id="t5s_3" class="t s3">In afwijking van het bovenstaande, zijn de wijzigingen direct van toepassing indien ze rechtstreeks of </span>
                                <span id="t5t_3" class="t s3">onrechtstreeks voortvloeien uit de beslissing van een overheid. </span>
                                <span id="t5u_3" class="t s3">Deze mededeling kan geschieden door alle gebruikelijke communicatiemiddelen tussen Lampiris en de </span>
                                <span id="t5v_3" class="t s3">Klant, bijvoorbeeld door een vermelding op de factuur. </span>
                                <span id="t5w_3" class="t s2">14.2 </span><span id="t5x_3" class="t s3">De Klant die het niet eens is met de meegedeelde gewijzigde Algemene voorwaarden kan de </span>
                                <span id="t5y_3" class="t s3">overeenkomst schriftelijk beëindigen per aangetekend schrijven binnen één (1) maand na de mededeling </span>
                                <span id="t5z_3" class="t s3">van de gewijzigde Algemene voorwaarden, zonder voorafgaande kennisgeving en zonder kosten. </span>
                                <span id="t60_3" class="t s4" data-mappings='[[22,"ff"]]'>Deze beëindiging zal eﬀectief zijn de dag na ontvangst van de aangetekende opzeggingsbrief. Tot die </span>
                                <span id="t61_3" class="t s3">tijd blijven de oude voorwaarden van toepassing. De Klant zal niet genieten van dit recht op opzegging </span>
                                <span id="t62_3" class="t s3">wanneer de wijzigingen in zijn voordeel zijn, of hem niet minder rechten toekennen of hem niet meer </span>
                                <span id="t63_3" class="t s3">verplichtingen opleggen. </span>
                                <span id="t64_3" class="t s1">Artikel 15 - Overige bepalingen </span>
                                <span id="t65_3" class="t s2">15.1 </span><span id="t66_3" class="t s3">De geldigheid of afdwingbaarheid van de Overeenkomst wordt niet aangetast door de nietigheid van </span>
                                <span id="t67_3" class="t s3">een onderdeel ervan. </span>
                                <span id="t68_3" class="t s2">15.2 </span><span id="t69_3" class="t s4">Het niet-aandringen op de naleving van een of meerdere bepalingen van de Overeenkomst door </span>
                                <span id="t6a_3" class="t s3">Lampiris mag niet worden opgevat als een verzaking hieraan of een beperking van de erin vervatte rechten </span>
                                <span id="t6b_3" class="t s3">of plichten. </span>
                                <span id="t6c_3" class="t s2">15.3 </span><span id="t6d_3" class="t s4">De Overeenkomst is onderworpen aan het Belgisch recht. Elk geschil zal worden voorgelegd aan de </span>
                                <span id="t6e_3" class="t s4">vrederechter van het 4e kanton van Luik, of aan iedere andere rechtbank die materieel bevoegd is voor het </span>
                                <span id="t6f_3" class="t s3">gerechtelijk arrondissement Luik. Residentiële klanten hebben evenwel het recht om het geschil aanhangig </span>
                                <span id="t6g_3" class="t s3">te maken bij de rechtbank van hun woonplaats. </span>
                                <span id="t6h_3" class="t s2">Volgende bijlagen van het contract zijn terug te vinden op : www.lampiris.be/nl/documenten </span>
                                <span id="t6i_3" class="t s4">- Openbare dienstverplichtingen van sociale aard in de elektriciteits- en gasmarkt in het Brussels </span>
                                <span id="t6j_3" class="t s3">Hoofdstedelijk Gewest </span>
                                <span id="t6k_3" class="t s4">- Openbare dienstverplichtingen van sociale aard in de elektriciteits- en gasmarkt in het Waals Gewest </span>
                                <span id="t6l_3" class="t v0_3 s5">Deze algemene voorwaarden zijn gewijzigd op 27 maart 2019 - Versie 11.2019-03-27 </span>
                            </div>
                            <!-- End text definitions -->


                        </div>

                    </div>
                </div>

            </div>
            <button type="submit" class="t" id="t6p_3" style="left:468px; buttom:39px;">Submit</button>
            <button class="btn btn-secondary">Cancel</button>
        </form>
    </div>
    <div id='FDFXFA_PDFDump' style='display:none;'>
        JVBERi0xLjYNJeLjz9MNCjU3IDAgb2JqDTw8L0xpbmVhcml6ZWQgMS9MIDE5OTUyMC9PIDU5L0UgMTI0NTg2L04gMy9UIDE5OTEyNC9IIFsgMTU5MCA2MTddPj4NZW5kb2JqDSAgICAgICAgICAgICAgDQozMDkgMCBvYmoNPDwvRGVjb2RlUGFybXM8PC9Db2x1bW5zIDUvUHJlZGljdG9yIDEyPj4vRmlsdGVyL0ZsYXRlRGVjb2RlL0lEWzwxRDFDQjk2MjAxQzU0M0JDOEFGOTg1RjE0NUM4MTEyMj48ODVGQTc1QjQzOTkxNTY0RDgwRkE1MEEwM0FGMDY2MDk+XS9JbmRleFs1NyA0MDZdL0luZm8gNTYgMCBSL0xlbmd0aCAzMTAvUHJldiAxOTkxMjUvUm9vdCA1OCAwIFIvU2l6ZSA0NjMvVHlwZS9YUmVmL1dbMSAzIDFdPj5zdHJlYW0NCmje7JS/LgVBGMXPjIg/l7hRqVSIQuEhPAAq8Qo0t9FovIAoFBJyJUoRKgmREBKhkhAqlc6t8AKy7vfbwnLNJiNTbvPLydkvZ+d8uxnvpLq81LthdGvGrhN0E14adYN+/+07fAX8fF4B343CBzjL5Db6HD7CV7hf9jSZv4u+grfwA+IrkZ/nK9LPcxTw83ntoC/gE2yV9dIe+ho+w7eynOi+5CiQ80ffwnsVmP+xh9i+iXzH3tSxt6Af6tVxfrVKe6XqG5mfrO84vDf6+f+cJPrkoT8w1j/7pgo6OF9o6mg6uGCsL8FP7ttjuNKm6z813cf2BlbhlHF401hb5C3LxskZ4/QhO+SWrm2hj4w9c+h12DBO8PX9UJvZ2Iu8kzsgTa5ixZTMmtUeopmpe+TuS4ABAJ4OxGoNCmVuZHN0cmVhbQ1lbmRvYmoNc3RhcnR4cmVmDQowDQolJUVPRg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIA0KNDYyIDAgb2JqDTw8L0ZpbHRlci9GbGF0ZURlY29kZS9JIDExODIvTGVuZ3RoIDUyNy9TIDQzMS9WIDkzMj4+c3RyZWFtDQpo3mJgYOBgYGDbBiJ9AxkEGRBAECjGwcDCwPGJgemELAMD89oFLzg5GUYIePz37bv3H379/gNk/Pr97v2fD0BBjg46AwYgbgDZCo0AoBuEGZjmBADpX0D8D+zUZAY+3gDmBeIOyUwGWCnuDdINbxnusC6QYWhhlGAuEGsoYBLATm0Qb0hhMiGdahA7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bGF0ZURlY29kZS9Gb3JtVHlwZSAxL0xlbmd0aCAzNy9NYXRyaXhbMSAwIDAgMSAwIDBdL1Jlc291cmNlczw8L1Byb2NTZXRbL1BERl0+Pi9TdWJ0eXBlL0Zvcm0vVHlwZS9YT2JqZWN0Pj5zdHJlYW0NCkiJMtAzVTCA4qJ0LgM9EwsFMGGuZ2ICIYpSudK4AAIMAJ9GB/wNCmVuZHN0cmVhbQ1lbmRvYmoNMjM5IDAgb2JqDTw8L0JCb3hbMCAwIDguMzk5OTkgOC4zOTk5OV0vRmlsdGVyL0ZsYXRlRGVjb2RlL0Zvcm1UeXBlIDEvTGVuZ3RoIDU3L01hdHJpeFsxIDAgMCAxIDAgMF0vUmVzb3VyY2VzPDwvUHJvY1NldFsvUERGXT4+L1N1YnR5cGUvRm9ybS9UeXBlL1hPYmplY3Q+PnN0cmVhbQ0KSIky0DNVMIDionQuAz0TCwUwYa5nYgIhilK50rgMFEAQqMJQz9hIAUyY6pmbQQiwCoAAAwAiSw7IDQplbmRzdHJlYW0NZW5kb2JqDTI0MCAwIG9iag08PC9CQm94WzAgMCA4LjUyIDguNTJdL0Zvcm1UeXBlIDEvTGVuZ3RoIDAvTWF0cml4WzEgMCAwIDEgMCAwXS9SZXNvdXJjZXM8PC9Qcm9jU2V0Wy9QREZdPj4vU3VidHlwZS9Gb3JtL1R5cGUvWE9iamVjdD4+c3RyZWFtDQoNCmVuZHN0cmVhbQ1lbmRvYmoNMjQxIDAgb2JqDTw8L0JCb3hbMCAwIDguNTIgOC41Ml0vRm9ybVR5cGUgMS9MZW5ndGggMzQvTWF0cml4WzEgMCAwIDEgMCAwXS9SZXNvdXJjZXM8PC9Qcm9jU2V0Wy9QREZdPj4vU3VidHlwZS9Gb3JtL1R5cGUvWE9iamVjdD4+c3RyZWFtDQowIDAgMCByZwoxLjMyIDEuMzIgNS44OCA1Ljg4IHJlCmYKDQplbmRzdHJlYW0NZW5kb2JqDTI0MiAwIG9iag08PC9CQm94WzAgMCA4LjUyIDguNTJdL0ZpbHRlci9GbGF0ZURlY29kZS9Gb3JtVHlwZSAxL0xlbmd0aCAzNy9NYXRyaXhbMSAwIDAgMSAwIDBdL1Jlc291cmNlczw8L1Byb2NTZXRbL1BERl0+Pi9TdWJ0eXBlL0Zvcm0vVHlwZS9YT2JqZWN0Pj5zdHJlYW0NCkiJMtAzVTCA4qJ0LgM9EwsFMGGuZ2oGIYpSudK4AAIMAJ+BCAINCmVuZHN0cmVhbQ1lbmRvYmoNMjQzIDAgb2JqDTw8L0JCb3hbMCAwIDguNTIgOC41Ml0vRmlsdGVyL0ZsYXRlRGVjb2RlL0Zvcm1UeXBlIDEvTGVuZ3RoIDU3L01hdHJpeFsxIDAgMCAxIDAgMF0vUmVzb3VyY2VzPDwvUHJvY1NldFsvUERGXT4+L1N1YnR5cGUvRm9ybS9UeXBlL1hPYmplY3Q+PnN0cmVhbQ0KSIky0DNVMIDionQuAz0TCwUwYa5nagYhilK50rgMFEAQqMJQz9hIAUyY6llYQAiwCoAAAwAjjQ7UDQplbmRzdHJlYW0NZW5kb2JqDTI0NCAwIG9iag08PC9CQm94WzAuMCAwLjAgOC41MjAwMiA4LjUxOTk5XS9Gb3JtVHlwZSAxL0xlbmd0aCA4OC9NYXRyaXhbMS4wIDAuMCAwLjAgMS4wIDAuMCAwLjBdL1Jlc291cmNlczw8L0ZvbnQ8PC9aYURiIDQxMSAwIFI+Pi9Qcm9jU2V0Wy9QREYvVGV4dF0+Pi9TdWJ0eXBlL0Zvcm0vVHlwZS9YT2JqZWN0Pj5zdHJlYW0NCnEKMSAxIDYuNTIgNi41MiByZQpXCm4KQlQKL1phRGIgNC42ODM5IFRmCjIuNDc3OCAyLjY3NDUgVGQKNC41MTA2IFRMCjAgMCBUZAoobikgVGoKRVQKUQoNCmVuZHN0cmVhbQ1lbmRvYmoNMjQ1IDAgb2JqDTw8L0JCb3hbMC4wIDAuMCA4LjUyMDAyIDguNTE5OTldL0Zvcm1UeXBlIDEvTGVuZ3RoIDMwL01hdHJpeFsxLjAgMC4wIDAuMCAxLjAgMC4wIDAuMF0vUmVzb3VyY2VzPDwvUHJvY1NldFsvUERGXT4+L1N1YnR5cGUvRm9ybS9UeXBlL1hPYmplY3Q+PnN0cmVhbQ0KMC43NDkwMjMgZwowIDAgOC41MiA4LjUyIHJlCmYKDQplbmRzdHJlYW0NZW5kb2JqDTI0NiAwIG9iag08PC9CQm94WzAuMCAwLjAgOC41MjAwMiA4LjUxOTk5XS9GaWx0ZXIvRmxhdGVEZWNvZGUvRm9ybVR5cGUgMS9MZW5ndGggMTEzL01hdHJpeFsxLjAgMC4wIDAuMCAxLjAgMC4wIDAuMF0vUmVzb3VyY2VzPDwvRm9udDw8L1phRGIgNDExIDAgUj4+L1Byb2NTZXRbL1BERi9UZXh0XT4+L1N1YnR5cGUvRm9ybS9UeXBlL1hPYmplY3Q+PnN0cmVhbQ0KSIksjLEKwkAQRPv5iim1Wfcue3uXVkxnIywIdoomYBHQ/y+MxubBPIanUq3X3HGCUtmk5BXvB0a8kJjo3+1/eca8PCfsA7vL9XCjibeuZ4zIYrU2ZvFqhXGHSUnqjOOvvYjNvGU8MQRO+AgwAP8gGUMNCmVuZHN0cmVhbQ1lbmRvYmoNMjQ3IDAgb2JqDTw8L0JCb3hbMCAwIDguNTIgOC41Ml0vRm9ybVR5cGUgMS9MZW5ndGggMC9NYXRyaXhbMSAwIDAgMSAwIDBdL1Jlc291cmNlczw8L1Byb2NTZXRbL1BERl0+Pi9TdWJ0eXBlL0Zvcm0vVHlwZS9YT2JqZWN0Pj5zdHJlYW0NCg0KZW5kc3RyZWFtDWVuZG9iag0yNDggMCBvYmoNPDwvQkJveFswIDAgOC41MiA4LjUyXS9Gb3JtVHlwZSAxL0xlbmd0aCAzNC9NYXRyaXhbMSAwIDAgMSAwIDBdL1Jlc291cmNlczw8L1Byb2NTZXRbL1BERl0+Pi9TdWJ0eXBlL0Zvcm0vVHlwZS9YT2JqZWN0Pj5zdHJlYW0NCjAgMCAwIHJnCjEuMzIgMS4zMiA1Ljg4IDUuODggcmUKZgoNCmVuZHN0cmVhbQ1lbmRvYmoNMjQ5IDAgb2JqDTw8L0JCb3hbMCAwIDguNTIgOC41Ml0vRmlsdGVyL0ZsYXRlRGVjb2RlL0Zvcm1UeXBlIDEvTGVuZ3RoIDM3L01hdHJpeFsxIDAgMCAxIDAgMF0vUmVzb3VyY2VzPDwvUHJvY1NldFsvUERGXT4+L1N1YnR5cGUvRm9ybS9UeXBlL1hPYmplY3Q+PnN0cmVhbQ0KSIky0DNVMIDionQuAz0TCwUwYa5nagYhilK50rgAAgwAn4EIAg0KZW5kc3RyZWFtDWVuZG9iag0yNTAgMCBvYmoNPDwvQkJveFswIDAgOC41MiA4LjUyXS9GaWx0ZXIvRmxhdGVEZWNvZGUvRm9ybVR5cGUgMS9MZW5ndGggNTcvTWF0cml4WzEgMCAwIDEgMCAwXS9SZXNvdXJjZXM8PC9Qcm9jU2V0Wy9QREZdPj4vU3VidHlwZS9Gb3JtL1R5cGUvWE9iamVjdD4+c3RyZWFtDQpIiTLQM1UwgOKidC4DPRMLBTBhrmdqBiGKUrnSuAwUQBCowlDP2EgBTJjqWVhACLAKgAADACONDtQNCmVuZHN0cmVhbQ1lbmRvYmoNMjUxIDAgb2JqDTw8L0JCb3hbMCAwIDguNTIgOC41Ml0vRm9ybVR5cGUgMS9MZW5ndGggMC9NYXRyaXhbMSAwIDAgMSAwIDBdL1Jlc291cmNlczw8L1Byb2NTZXRbL1BERl0+Pi9TdWJ0eXBlL0Zvcm0vVHlwZS9YT2JqZWN0Pj5zdHJlYW0NCg0KZW5kc3RyZWFtDWVuZG9iag0yNTIgMCBvYmoNPDwvQkJveFswIDAgOC41MiA4LjUyXS9Gb3JtVHlwZSAxL0xlbmd0aCAzNC9NYXRyaXhbMSAwIDAgMSAwIDBdL1Jlc291cmNlczw8L1Byb2NTZXRbL1BERl0+Pi9TdWJ0eXBlL0Zvcm0vVHlwZS9YT2JqZWN0Pj5zdHJlYW0NCjAgMCAwIHJnCjEuMzIgMS4zMiA1Ljg4IDUuODggcmUKZgoNCmVuZHN0cmVhbQ1lbmRvYmoNMjUzIDAgb2JqDTw8L0JCb3hbMCAwIDguNTIgOC41Ml0vRmlsdGVyL0ZsYXRlRGVjb2RlL0Zvcm1UeXBlIDEvTGVuZ3RoIDM3L01hdHJpeFsxIDAgMCAxIDAgMF0vUmVzb3VyY2VzPDwvUHJvY1NldFsvUERGXT4+L1N1YnR5cGUvRm9ybS9UeXBlL1hPYmplY3Q+PnN0cmVhbQ0KSIky0DNVMIDionQuAz0TCwUwYa5nagYhilK50rgAAgwAn4EIAg0KZW5kc3RyZWFtDWVuZG9iag0yNTQgMCBvYmoNPDwvQkJveFswIDAgOC41MiA4LjUyXS9GaWx0ZXIvRmxhdGVEZWNvZGUvRm9ybVR5cGUgMS9MZW5ndGggNTcvTWF0cml4WzEgMCAwIDEgMCAwXS9SZXNvdXJjZXM8PC9Qcm9jU2V0Wy9QREZdPj4vU3VidHlwZS9Gb3JtL1R5cGUvWE9iamVjdD4+c3RyZWFtDQpIiTLQM1UwgOKidC4DPRMLBTBhrmdqBiGKUrnSuAwUQBCowlDP2EgBTJjqWVhACLAKgAADACONDtQNCmVuZHN0cmVhbQ1lbmRvYmoNMjU1IDAgb2JqDTw8L0JCb3hbMCAwIDguNTIgOC41Ml0vRm9ybVR5cGUgMS9MZW5ndGggMC9NYXRyaXhbMSAwIDAgMSAwIDBdL1Jlc291cmNlczw8L1Byb2NTZXRbL1BERl0+Pi9TdWJ0eXBlL0Zvcm0vVHlwZS9YT2JqZWN0Pj5zdHJlYW0NCg0KZW5kc3RyZWFtDWVuZG9iag0yNTYgMCBvYmoNPDwvQkJveFswIDAgOC41MiA4LjUyXS9Gb3JtVHlwZSAxL0xlbmd0aCAzNC9NYXRyaXhbMSAwIDAgMSAwIDBdL1Jlc291cmNlczw8L1Byb2NTZXRbL1BERl0+Pi9TdWJ0eXBlL0Zvcm0vVHlwZS9YT2JqZWN0Pj5zdHJlYW0NCjAgMCAwIHJnCjEuMzIgMS4zMiA1Ljg4IDUuODggcmUKZgoNCmVuZHN0cmVhbQ1lbmRvYmoNMjU3IDAgb2JqDTw8L0JCb3hbMCAwIDguNTIgOC41Ml0vRmlsdGVyL0ZsYXRlRGVjb2RlL0Zvcm1UeXBlIDEvTGVuZ3RoIDM3L01hdHJpeFsxIDAgMCAxIDAgMF0vUmVzb3VyY2VzPDwvUHJvY1NldFsvUERGXT4+L1N1YnR5cGUvRm9ybS9UeXBlL1hPYmplY3Q+PnN0cmVhbQ0KSIky0DNVMIDionQuAz0TCwUwYa5nagYhilK50rgAAgwAn4EIAg0KZW5kc3RyZWFtDWVuZG9iag0yNTggMCBvYmoNPDwvQkJveFswIDAgOC41MiA4LjUyXS9GaWx0ZXIvRmxhdGVEZWNvZGUvRm9ybVR5cGUgMS9MZW5ndGggNTcvTWF0cml4WzEgMCAwIDEgMCAwXS9SZXNvdXJjZXM8PC9Qcm9jU2V0Wy9QREZdPj4vU3VidHlwZS9Gb3JtL1R5cGUvWE9iamVjdD4+c3RyZWFtDQpIiTLQM1UwgOKidC4DPRMLBTBhrmdqBiGKUrnSuAwUQBCowlDP2EgBTJjqWVhACLAKgAADACONDtQNCmVuZHN0cmVhbQ1lbmRvYmoNMjU5IDAgb2JqDTw8L0JCb3hbMCAwIDguNTIgOC41Ml0vRm9ybVR5cGUgMS9MZW5ndGggMC9NYXRyaXhbMSAwIDAgMSAwIDBdL1Jlc291cmNlczw8L1Byb2NTZXRbL1BERl0+Pi9TdWJ0eXBlL0Zvcm0vVHlwZS9YT2JqZWN0Pj5zdHJlYW0NCg0KZW5kc3RyZWFtDWVuZG9iag0yNjAgMCBvYmoNPDwvQkJveFswIDAgOC41MiA4LjUyXS9Gb3JtVHlwZSAxL0xlbmd0aCAzNC9NYXRyaXhbMSAwIDAgMSAwIDBdL1Jlc291cmNlczw8L1Byb2NTZXRbL1BERl0+Pi9TdWJ0eXBlL0Zvcm0vVHlwZS9YT2JqZWN0Pj5zdHJlYW0NCjAgMCAwIHJnCjEuMzIgMS4zMiA1Ljg4IDUuODggcmUKZgoNCmVuZHN0cmVhbQ1lbmRvYmoNMjYxIDAgb2JqDTw8L0JCb3hbMCAwIDguNTIgOC41Ml0vRmlsdGVyL0ZsYXRlRGVjb2RlL0Zvcm1UeXBlIDEvTGVuZ3RoIDM3L01hdHJpeFsxIDAgMCAxIDAgMF0vUmVzb3VyY2VzPDwvUHJvY1NldFsvUERGXT4+L1N1YnR5cGUvRm9ybS9UeXBlL1hPYmplY3Q+PnN0cmVhbQ0KSIky0DNVMIDionQuAz0TCwUwYa5nagYhilK50rgAAgwAn4EIAg0KZW5kc3RyZWFtDWVuZG9iag0yNjIgMCBvYmoNPDwvQkJveFswIDAgOC41MiA4LjUyXS9GaWx0ZXIvRmxhdGVEZWNvZGUvRm9ybVR5cGUgMS9MZW5ndGggNTcvTWF0cml4WzEgMCAwIDEgMCAwXS9SZXNvdXJjZXM8PC9Qcm9jU2V0Wy9QREZdPj4vU3VidHlwZS9Gb3JtL1R5cGUvWE9iamVjdD4+c3RyZWFtDQpIiTLQM1UwgOKidC4DPRMLBTBhrmdqBiGKUrnSuAwUQBCowlDP2EgBTJjqWVhACLAKgAADACONDtQNCmVuZHN0cmVhbQ1lbmRvYmoNMjYzIDAgb2JqDTw8L0JCb3hbMCAwIDguNTIgOC41Ml0vRm9ybVR5cGUgMS9MZW5ndGggMC9NYXRyaXhbMSAwIDAgMSAwIDBdL1Jlc291cmNlczw8L1Byb2NTZXRbL1BERl0+Pi9TdWJ0eXBlL0Zvcm0vVHlwZS9YT2JqZWN0Pj5zdHJlYW0NCg0KZW5kc3RyZWFtDWVuZG9iag0yNjQgMCBvYmoNPDwvQkJveFswIDAgOC41MiA4LjUyXS9Gb3JtVHlwZSAxL0xlbmd0aCAzNC9NYXRyaXhbMSAwIDAgMSAwIDBdL1Jlc291cmNlczw8L1Byb2NTZXRbL1BERl0+Pi9TdWJ0eXBlL0Zvcm0vVHlwZS9YT2JqZWN0Pj5zdHJlYW0NCjAgMCAwIHJnCjEuMzIgMS4zMiA1Ljg4IDUuODggcmUKZgoNCmVuZHN0cmVhbQ1lbmRvYmoNMjY1IDAgb2JqDTw8L0JCb3hbMCAwIDguNTIgOC41Ml0vRmlsdGVyL0ZsYXRlRGVjb2RlL0Zvcm1UeXBlIDEvTGVuZ3RoIDM3L01hdHJpeFsxIDAgMCAxIDAgMF0vUmVzb3VyY2VzPDwvUHJvY1NldFsvUERGXT4+L1N1YnR5cGUvRm9ybS9UeXBlL1hPYmplY3Q+PnN0cmVhbQ0KSIky0DNVMIDionQuAz0TCwUwYa5nagYhilK50rgAAgwAn4EIAg0KZW5kc3RyZWFtDWVuZG9iag0yNjYgMCBvYmoNPDwvQkJveFswIDAgOC41MiA4LjUyXS9GaWx0ZXIvRmxhdGVEZWNvZGUvRm9ybVR5cGUgMS9MZW5ndGggNTcvTWF0cml4WzEgMCAwIDEgMCAwXS9SZXNvdXJjZXM8PC9Qcm9jU2V0Wy9QREZdPj4vU3VidHlwZS9Gb3JtL1R5cGUvWE9iamVjdD4+c3RyZWFtDQpIiTLQM1UwgOKidC4DPRMLBTBhrmdqBiGKUrnSuAwUQBCowlDP2EgBTJjqWVhACLAKgAADACONDtQNCmVuZHN0cmVhbQ1lbmRvYmoNMjY3IDAgb2JqDTw8L0JCb3hbMCAwIDguNTIgOC41Ml0vRm9ybVR5cGUgMS9MZW5ndGggMC9NYXRyaXhbMSAwIDAgMSAwIDBdL1Jlc291cmNlczw8L1Byb2NTZXRbL1BERl0+Pi9TdWJ0eXBlL0Zvcm0vVHlwZS9YT2JqZWN0Pj5zdHJlYW0NCg0KZW5kc3RyZWFtDWVuZG9iag0yNjggMCBvYmoNPDwvQkJveFswIDAgOC41MiA4LjUyXS9Gb3JtVHlwZSAxL0xlbmd0aCAzNC9NYXRyaXhbMSAwIDAgMSAwIDBdL1Jlc291cmNlczw8L1Byb2NTZXRbL1BERl0+Pi9TdWJ0eXBlL0Zvcm0vVHlwZS9YT2JqZWN0Pj5zdHJlYW0NCjAgMCAwIHJnCjEuMzIgMS4zMiA1Ljg4IDUuODggcmUKZgoNCmVuZHN0cmVhbQ1lbmRvYmoNMjY5IDAgb2JqDTw8L0JCb3hbMCAwIDguNTIgOC41Ml0vRmlsdGVyL0ZsYXRlRGVjb2RlL0Zvcm1UeXBlIDEvTGVuZ3RoIDM3L01hdHJpeFsxIDAgMCAxIDAgMF0vUmVzb3VyY2VzPDwvUHJvY1NldFsvUERGXT4+L1N1YnR5cGUvRm9ybS9UeXBlL1hPYmplY3Q+PnN0cmVhbQ0KSIky0DNVMIDionQuAz0TCwUwYa5nagYhilK50rgAAgwAn4EIAg0KZW5kc3RyZWFtDWVuZG9iag0yNzAgMCBvYmoNPDwvQkJveFswIDAgOC41MiA4LjUyXS9GaWx0ZXIvRmxhdGVEZWNvZGUvRm9ybVR5cGUgMS9MZW5ndGggNTcvTWF0cml4WzEgMCAwIDEgMCAwXS9SZXNvdXJjZXM8PC9Qcm9jU2V0Wy9QREZdPj4vU3VidHlwZS9Gb3JtL1R5cGUvWE9iamVjdD4+c3RyZWFtDQpIiTLQM1UwgOKidC4DPRMLBTBhrmdqBiGKUrnSuAwUQBCowlDP2EgBTJjqWVhACLAKgAADACONDtQNCmVuZHN0cmVhbQ1lbmRvYmoNMjcxIDAgb2JqDTw8L0JCb3hbMCAwIDguNTIgOC41Ml0vRm9ybVR5cGUgMS9MZW5ndGggMC9NYXRyaXhbMSAwIDAgMSAwIDBdL1Jlc291cmNlczw8L1Byb2NTZXRbL1BERl0+Pi9TdWJ0eXBlL0Zvcm0vVHlwZS9YT2JqZWN0Pj5zdHJlYW0NCg0KZW5kc3RyZWFtDWVuZG9iag0yNzIgMCBvYmoNPDwvQkJveFswIDAgOC41MiA4LjUyXS9Gb3JtVHlwZSAxL0xlbmd0aCAzNC9NYXRyaXhbMSAwIDAgMSAwIDBdL1Jlc291cmNlczw8L1Byb2NTZXRbL1BERl0+Pi9TdWJ0eXBlL0Zvcm0vVHlwZS9YT2JqZWN0Pj5zdHJlYW0NCjAgMCAwIHJnCjEuMzIgMS4zMiA1Ljg4IDUuODggcmUKZgoNCmVuZHN0cmVhbQ1lbmRvYmoNMjczIDAgb2JqDTw8L0JCb3hbMCAwIDguNTIgOC41Ml0vRmlsdGVyL0ZsYXRlRGVjb2RlL0Zvcm1UeXBlIDEvTGVuZ3RoIDM3L01hdHJpeFsxIDAgMCAxIDAgMF0vUmVzb3VyY2VzPDwvUHJvY1NldFsvUERGXT4+L1N1YnR5cGUvRm9ybS9UeXBlL1hPYmplY3Q+PnN0cmVhbQ0KSIky0DNVMIDionQuAz0TCwUwYa5nagYhilK50rgAAgwAn4EIAg0KZW5kc3RyZWFtDWVuZG9iag0yNzQgMCBvYmoNPDwvQkJveFswIDAgOC41MiA4LjUyXS9GaWx0ZXIvRmxhdGVEZWNvZGUvRm9ybVR5cGUgMS9MZW5ndGggNTcvTWF0cml4WzEgMCAwIDEgMCAwXS9SZXNvdXJjZXM8PC9Qcm9jU2V0Wy9QREZdPj4vU3VidHlwZS9Gb3JtL1R5cGUvWE9iamVjdD4+c3RyZWFtDQpIiTLQM1UwgOKidC4DPRMLBTBhrmdqBiGKUrnSuAwUQBCowlDP2EgBTJjqWVhACLAKgAADACONDtQNCmVuZHN0cmVhbQ1lbmRvYmoNMjc1IDAgb2JqDTw8L0JCb3hbMC4wIDAuMCA0NS4zNiA5Ljg0XS9Gb3JtVHlwZSAxL0xlbmd0aCAxMy9NYXRyaXhbMS4wIDAuMCAwLjAgMS4wIDAuMCAwLjBdL1Jlc291cmNlczw8L1Byb2NTZXRbL1BERl0+Pi9TdWJ0eXBlL0Zvcm0vVHlwZS9YT2JqZWN0Pj5zdHJlYW0NCi9UeCBCTUMgCkVNQwoNCmVuZHN0cmVhbQ1lbmRvYmoNMjc2IDAgb2JqDTw8L0JCb3hbMC4wIDAuMCA0NS4zNiA5Ljg0XS9Gb3JtVHlwZSAxL0xlbmd0aCAxMy9NYXRyaXhbMS4wIDAuMCAwLjAgMS4wIDAuMCAwLjBdL1Jlc291cmNlczw8L1Byb2NTZXRbL1BERl0+Pi9TdWJ0eXBlL0Zvcm0vVHlwZS9YT2JqZWN0Pj5zdHJlYW0NCi9UeCBCTUMgCkVNQwoNCmVuZHN0cmVhbQ1lbmRvYmoNMjc3IDAgb2JqDTw8L0JCb3hbMC4wIDAuMCA0NS4zNiA5Ljg0XS9Gb3JtVHlwZSAxL0xlbmd0aCAxMy9NYXRyaXhbMS4wIDAuMCAwLjAgMS4wIDAuMCAwLjBdL1Jlc291cmNlczw8L1Byb2NTZXRbL1BERl0+Pi9TdWJ0eXBlL0Zvcm0vVHlwZS9YT2JqZWN0Pj5zdHJlYW0NCi9UeCBCTUMgCkVNQwoNCmVuZHN0cmVhbQ1lbmRvYmoNMjc4IDAgb2JqDTw8L0JCb3hbMC4wIDAuMCA0NS4zNiA5Ljg0XS9Gb3JtVHlwZSAxL0xlbmd0aCAxMy9NYXRyaXhbMS4wIDAuMCAwLjAgMS4wIDAuMCAwLjBdL1Jlc291cmNlczw8L1Byb2NTZXRbL1BERl0+Pi9TdWJ0eXBlL0Zvcm0vVHlwZS9YT2JqZWN0Pj5zdHJlYW0NCi9UeCBCTUMgCkVNQwoNCmVuZHN0cmVhbQ1lbmRvYmoNMjc5IDAgb2JqDTw8L0JCb3hbMCAwIDguNTIgOC41Ml0vRm9ybVR5cGUgMS9MZW5ndGggMC9NYXRyaXhbMSAwIDAgMSAwIDBdL1Jlc291cmNlczw8L1Byb2NTZXRbL1BERl0+Pi9TdWJ0eXBlL0Zvcm0vVHlwZS9YT2JqZWN0Pj5zdHJlYW0NCg0KZW5kc3RyZWFtDWVuZG9iag0yODAgMCBvYmoNPDwvQkJveFswIDAgOC41MiA4LjUyXS9Gb3JtVHlwZSAxL0xlbmd0aCAzNC9NYXRyaXhbMSAwIDAgMSAwIDBdL1Jlc291cmNlczw8L1Byb2NTZXRbL1BERl0+Pi9TdWJ0eXBlL0Zvcm0vVHlwZS9YT2JqZWN0Pj5zdHJlYW0NCjAgMCAwIHJnCjEuMzIgMS4zMiA1Ljg4IDUuODggcmUKZgoNCmVuZHN0cmVhbQ1lbmRvYmoNMjgxIDAgb2JqDTw8L0JCb3hbMCAwIDguNTIgOC41Ml0vRmlsdGVyL0ZsYXRlRGVjb2RlL0Zvcm1UeXBlIDEvTGVuZ3RoIDM3L01hdHJpeFsxIDAgMCAxIDAgMF0vUmVzb3VyY2VzPDwvUHJvY1NldFsvUERGXT4+L1N1YnR5cGUvRm9ybS9UeXBlL1hPYmplY3Q+PnN0cmVhbQ0KSIky0DNVMIDionQuAz0TCwUwYa5nagYhilK50rgAAgwAn4EIAg0KZW5kc3RyZWFtDWVuZG9iag0yODIgMCBvYmoNPDwvQkJveFswIDAgOC41MiA4LjUyXS9GaWx0ZXIvRmxhdGVEZWNvZGUvRm9ybVR5cGUgMS9MZW5ndGggNTcvTWF0cml4WzEgMCAwIDEgMCAwXS9SZXNvdXJjZXM8PC9Qcm9jU2V0Wy9QREZdPj4vU3VidHlwZS9Gb3JtL1R5cGUv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ICAgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiCiAgICAgICAgICAgIHhtbG5zOnN0RXZ0PSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VFdmVudCMiCiAgICAgICAgICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgICAgICAgICAgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIgogICAgICAgICAgICB4bWxuczpwZGY9Imh0dHA6Ly9ucy5hZG9iZS5jb20vcGRmLzEuMy8iPgogICAgICAgICA8eG1wTU06SW5zdGFuY2VJRD51dWlkOmU2NDU1M2E4LTQzYzQtMmY0ZC05OWEwLTgyOTljMTczZjY3YzwveG1wTU06SW5zdGFuY2VJRD4KICAgICAgICAgPHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD5hZG9iZTpkb2NpZDppbmRkOmZkYTZlOWE4LTg5YWItMTFkZi05MWY5LWQ4Yjc1YzM5ZDlmMjwveG1wTU06T3JpZ2luYWxEb2N1bWVudElEPgogICAgICAgICA8eG1wTU06RG9jdW1lbnRJRD54bXAuaWQ6YWNhM2FhOGYtZjQyNS00ZDM4LWIwOTAtYzJjZTdkYzIzMzk1PC94bXBNTTpEb2N1bWVudElEPgogICAgICAgICA8eG1wTU06UmVuZGl0aW9uQ2xhc3M+cHJvb2Y6cGRmPC94bXBNTTpSZW5kaXRpb25DbGFzcz4KICAgICAgICAgPHhtcE1NOkRlcml2ZWRGcm9tIHJkZjpwYXJzZVR5cGU9IlJlc291cmNlIj4KICAgICAgICAgICAgPHN0UmVmOmluc3RhbmNlSUQ+eG1wLmlpZDo4YmU5ZmUyOS01MWU4LTQ1ZGYtODdhOC1hYTM3ZWRiZGFkMDM8L3N0UmVmOmluc3RhbmNlSUQ+CiAgICAgICAgICAgIDxzdFJlZjpkb2N1bWVudElEPnhtcC5kaWQ6NzQ2ZGRmMjctZTRiMi00M2IyLWE2MzAtZTE3ZGQxZTMyYjQxPC9zdFJlZjpkb2N1bWVudElEPgogICAgICAgICAgICA8c3RSZWY6b3JpZ2luYWxEb2N1bWVudElEPmFkb2JlOmRvY2lkOmluZGQ6ZmRhNmU5YTgtODlhYi0xMWRmLTkxZjktZDhiNzVjMzlkOWYyPC9zdFJlZjpvcmlnaW5hbERvY3VtZW50SUQ+CiAgICAgICAgICAgIDxzdFJlZjpyZW5kaXRpb25DbGFzcz5kZWZhdWx0PC9zdFJlZjpyZW5kaXRpb25DbGFzcz4KICAgICAgICAgPC94bXBNTTpEZXJpdmVkRnJvbT4KICAgICAgICAgPHhtcE1NOkhpc3Rvcnk+CiAgICAgICAgICAgIDxyZGY6U2VxPgogICAgICAgICAgICAgICA8cmRmOmxpIHJkZjpwYXJzZVR5cGU9IlJlc291cmNlIj4KICAgICAgICAgICAgICAgICAgPHN0RXZ0OmFjdGlvbj5jb252ZXJ0ZWQ8L3N0RXZ0OmFjdGlvbj4KICAgICAgICAgICAgICAgICAgPHN0RXZ0OnBhcmFtZXRlcnM+ZnJvbSBhcHBsaWNhdGlvbi94LWluZGVzaWduIHRvIGFwcGxpY2F0aW9uL3BkZjwvc3RFdnQ6cGFyYW1ldGVycz4KICAgICAgICAgICAgICAgICAgPHN0RXZ0OnNvZnR3YXJlQWdlbnQ+QWRvYmUgSW5EZXNpZ24gQ0MgMTQuMCAoTWFjaW50b3NoKTwvc3RFdnQ6c29mdHdhcmVBZ2VudD4KICAgICAgICAgICAgICAgICAgPHN0RXZ0OmNoYW5nZWQ+Lzwvc3RFdnQ6Y2hhbmdlZD4KICAgICAgICAgICAgICAgICAgPHN0RXZ0OndoZW4+MjAyMC0wOS0wOFQxNDozMToxMyswMjowMDwvc3RFdnQ6d2hlbj4KICAgICAgICAgICAgICAgPC9yZGY6bGk+CiAgICAgICAgICAgIDwvcmRmOlNlcT4KICAgICAgICAgPC94bXBNTTpIaXN0b3J5PgogICAgICAgICA8eG1wOkNyZWF0ZURhdGU+MjAyMC0wOS0wOFQxNDozMToxMyswMjowMDwveG1wOkNyZWF0ZURhdGU+CiAgICAgICAgIDx4bXA6TW9kaWZ5RGF0ZT4yMDIwLTA5LTA4VDE0OjMxOjE4KzAyOjAwPC94bXA6TW9kaWZ5RGF0ZT4KICAg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czp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iCiAgICAgICAgICAgIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIKICAgICAgICAgICAgeG1sbnM6cGRmPSJodHRwOi8vbnMuYWRvYmUuY29tL3BkZi8xLjMvIj4KICAgICAgICAgPHhtcE1NOkluc3RhbmNlSUQ+dXVpZDo2MGFhM2QxNC0yMzg4LTYwNDItOGU5Mi1iZmU1YmFkOTJlMTY8L3htcE1NOkluc3RhbmNlSUQ+CiAgICAgICAgIDx4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ+YWRvYmU6ZG9jaWQ6aW5kZDpjOGYwMWYyMS1kM2IwLTExZTAtOTAyMy1iNWQzN2E3YWQ3YmE8L3htcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD4KICAgICAgICAgPHhtcE1NOkRvY3VtZW50SUQ+eG1wLmlkOmIyZGVmZTFiLWRjNTgtNGY2Yy04YjEwLWQ2ZDY2ODQ3ZDZmYTwveG1wTU06RG9jdW1lbnRJRD4KICAgICAgICAgPHhtcE1NOlJlbmRpdGlvbkNsYXNzPnByb29mOnBkZjwveG1wTU06UmVuZGl0aW9uQ2xhc3M+CiAgICAgICAgIDx4bXBNTTpEZXJpdmVkRnJvbSByZGY6cGFyc2VUeXBlPSJSZXNvdXJjZSI+CiAgICAgICAgICAgIDxzdFJlZjppbnN0YW5jZUlEPnhtcC5paWQ6MDVlN2UxMGQtNjNjMy00ZWE2LTkxZTAtNDUzMjQ0ZDc5NGNmPC9zdFJlZjppbnN0YW5jZUlEPgogICAgICAgICAgICA8c3RSZWY6ZG9jdW1lbnRJRD54bXAuZGlkOmM0NmUyMGM0LWY2MDYtNDFiOC1iZmZjLTk2MjAzMTQ4ODNjNTwvc3RSZWY6ZG9jdW1lbnRJRD4KICAgICAgICAgICAgPHN0UmVmOm9yaWdpbmFsRG9jdW1lbnRJRD5hZG9iZTpkb2NpZDppbmRkOmM4ZjAxZjIxLWQzYjAtMTFlMC05MDIzLWI1ZDM3YTdhZDdiYTwvc3RSZWY6b3JpZ2luYWxEb2N1bWVudElEPgogICAgICAgICAgICA8c3RSZWY6cmVuZGl0aW9uQ2xhc3M+ZGVmYXVsdDwvc3RSZWY6cmVuZGl0aW9uQ2xhc3M+CiAgICAgICAgIDwveG1wTU06RGVyaXZlZEZyb20+CiAgICAgICAgIDx4bXBNTTpIaXN0b3J5PgogICAgICAgICAgICA8cmRmOlNlcT4KICAgICAgICAgICAgICAgPHJkZjpsaSByZGY6cGFyc2VUeXBlPSJSZXNvdXJjZSI+CiAgICAgICAgICAgICAgICAgIDxzdEV2dDphY3Rpb24+Y29udmVydGVkPC9zdEV2dDphY3Rpb24+CiAgICAgICAgICAgICAgICAgIDxzdEV2dDpwYXJhbWV0ZXJzPmZyb20gYXBwbGljYXRpb24veC1pbmRlc2lnbiB0byBhcHBsaWNhdGlvbi9wZGY8L3N0RXZ0OnBhcmFtZXRlcnM+CiAgICAgICAgICAgICAgICAgIDxzdEV2dDpzb2Z0d2FyZUFnZW50PkFkb2JlIEluRGVzaWduIENDIDE0LjAgKE1hY2ludG9zaCk8L3N0RXZ0OnNvZnR3YXJlQWdlbnQ+CiAgICAgICAgICAgICAgICAgIDxzdEV2dDpjaGFuZ2VkPi88L3N0RXZ0OmNoYW5nZWQ+CiAgICAgICAgICAgICAgICAgIDxzdEV2dDp3aGVuPjIwMTktMDktMDZUMTM6NDA6MzErMDI6MDA8L3N0RXZ0OndoZW4+CiAgICAgICAgICAgICAgIDwvcmRmOmxpPgogICAgICAgICAgICA8L3JkZjpTZXE+CiAgICAgICAgIDwveG1wTU06SGlzdG9yeT4KICAgICAgICAgPHhtcDpDcmVhdGVEYXRlPjIwMTktMDktMDZUMTM6NDA6MzErMDI6MDA8L3htcDpDcmVhdGVEYXRlPgogICAgICAgICA8eG1wOk1vZGlmeURhdGU+MjAxOS0wOS0wNlQxMzo0MDozMSswMjowMDwveG1wOk1vZGlmeURhdGU+CiAgICAgICAgIDx4bXA6TWV0YWRhdGFEYXRlPjIwMTktMDktMDZUMTM6NDA6MzErMDI6MDA8L3htcDpNZXRhZGF0YURhdGU+CiAgICAgICAgIDx4bXA6Q3JlYXRvclRvb2w+QWRvYmUgSW5EZXNpZ24gMTQuMCAoTWFjaW50b3NoKTwveG1wOkNyZWF0b3JUb29sPgogICAgICAgICA8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PSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIgogICAgICAgICAgICB4bWxuczpzdEV2dD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlRXZlbnQjIgogICAgICAgICAgICB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iCiAgICAgICAgICAgIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIKICAgICAgICAgICAgeG1sbnM6cGRmPSJodHRwOi8vbnMuYWRvYmUuY29tL3BkZi8xLjMvIj4KICAgICAgICAgPHhtcE1NOkluc3RhbmNlSUQ+dXVpZDo2MGFhM2QxNC0yMzg4LTYwNDItOGU5Mi1iZmU1YmFkOTJlMTY8L3htcE1NOkluc3RhbmNlSUQ+CiAgICAgICAgIDx4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ+YWRvYmU6ZG9jaWQ6aW5kZDpjOGYwMWYyMS1kM2IwLTExZTAtOTAyMy1iNWQzN2E3YWQ3YmE8L3htcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD4KICAgICAgICAgPHhtcE1NOkRvY3VtZW50SUQ+eG1wLmlkOmIyZGVmZTFiLWRjNTgtNGY2Yy04YjEwLWQ2ZDY2ODQ3ZDZmYTwveG1wTU06RG9jdW1lbnRJRD4KICAgICAgICAgPHhtcE1NOlJlbmRpdGlvbkNsYXNzPnByb29mOnBkZjwveG1wTU06UmVuZGl0aW9uQ2xhc3M+CiAgICAgICAgIDx4bXBNTTpEZXJpdmVkRnJvbSByZGY6cGFyc2VUeXBlPSJSZXNvdXJjZSI+CiAgICAgICAgICAgIDxzdFJlZjppbnN0YW5jZUlEPnhtcC5paWQ6MDVlN2UxMGQtNjNjMy00ZWE2LTkxZTAtNDUzMjQ0ZDc5NGNmPC9zdFJlZjppbnN0YW5jZUlEPgogICAgICAgICAgICA8c3RSZWY6ZG9jdW1lbnRJRD54bXAuZGlkOmM0NmUyMGM0LWY2MDYtNDFiOC1iZmZjLTk2MjAzMTQ4ODNjNTwvc3RSZWY6ZG9jdW1lbnRJRD4KICAgICAgICAgICAgPHN0UmVmOm9yaWdpbmFsRG9jdW1lbnRJRD5hZG9iZTpkb2NpZDppbmRkOmM4ZjAxZjIxLWQzYjAtMTFlMC05MDIzLWI1ZDM3YTdhZDdiYTwvc3RSZWY6b3JpZ2luYWxEb2N1bWVudElEPgogICAgICAgICAgICA8c3RSZWY6cmVuZGl0aW9uQ2xhc3M+ZGVmYXVsdDwvc3RSZWY6cmVuZGl0aW9uQ2xhc3M+CiAgICAgICAgIDwveG1wTU06RGVyaXZlZEZyb20+CiAgICAgICAgIDx4bXBNTTpIaXN0b3J5PgogICAgICAgICAgICA8cmRmOlNlcT4KICAgICAgICAgICAgICAgPHJkZjpsaSByZGY6cGFyc2VUeXBlPSJSZXNvdXJjZSI+CiAgICAgICAgICAgICAgICAgIDxzdEV2dDphY3Rpb24+Y29udmVydGVkPC9zdEV2dDphY3Rpb24+CiAgICAgICAgICAgICAgICAgIDxzdEV2dDpwYXJhbWV0ZXJzPmZyb20gYXBwbGljYXRpb24veC1pbmRlc2lnbiB0byBhcHBsaWNhdGlvbi9wZGY8L3N0RXZ0OnBhcmFtZXRlcnM+CiAgICAgICAgICAgICAgICAgIDxzdEV2dDpzb2Z0d2FyZUFnZW50PkFkb2JlIEluRGVzaWduIENDIDE0LjAgKE1hY2ludG9zaCk8L3N0RXZ0OnNvZnR3YXJlQWdlbnQ+CiAgICAgICAgICAgICAgICAgIDxzdEV2dDpjaGFuZ2VkPi88L3N0RXZ0OmNoYW5nZWQ+CiAgICAgICAgICAgICAgICAgIDxzdEV2dDp3aGVuPjIwMTktMDktMDZUMTM6NDA6MzErMDI6MDA8L3N0RXZ0OndoZW4+CiAgICAgICAgICAgICAgIDwvcmRmOmxpPgogICAgICAgICAgICA8L3JkZjpTZXE+CiAgICAgICAgIDwveG1wTU06SGlzdG9yeT4KICAgICAgICAgPHhtcDpDcmVhdGVEYXRlPjIwMTktMDktMDZUMTM6NDA6MzErMDI6MDA8L3htcDpDcmVhdGVEYXRlPgogICAgICAgICA8eG1wOk1vZGlmeURhdGU+MjAxOS0wOS0wNlQxMzo0MDozMSswMjowMDwveG1wOk1vZGlmeURhdGU+CiAgICAgICAgIDx4bXA6TWV0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ZiMiCiAgICAgICAgICAgIHhtbG5zOnN0RXZ0PSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VFdmVudCMiCiAgICAgICAgICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgICAgICAgICAgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIgogICAgICAgICAgICB4bWxuczpwZGY9Imh0dHA6Ly9ucy5hZG9iZS5jb20vcGRmLzEuMy8iCiAgICAgICAgICAgIHhtbG5zOmFkaG9jd2Y9Imh0dHA6Ly9ucy5hZG9iZS5jb20vQWNyb2JhdEFkaG9jV29ya2Zsb3cvMS4wLyI+CiAgICAgICAgIDx4bXBNTTpJbnN0YW5jZUlEPnV1aWQ6NmY5ZDU1ZTItNGJhZC00M2RkLWJiMGMtZGY1ZjdmNzA3YTg3PC94bXBNTTpJbnN0YW5jZUlEPgogICAgICAgICA8eG1wTU06T3JpZ2luYWxEb2N1bWVudElEPmFkb2JlOmRvY2lkOmluZGQ6ZmRhNmU5YTgtODlhYi0xMWRmLTkxZjktZDhiNzVjMzlkOWYyPC94bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ+CiAgICAgICAgIDx4bXBNTTpEb2N1bWVudElEPnhtcC5pZDpjOTBlYjQ4ZS0wOGVlLTQ0YWMtOWYwNS1jMWJhYmQ1YWNlYTU8L3htcE1NOkRvY3VtZW50SUQ+CiAgICAgICAgIDx4bXBNTTpSZW5kaXRpb25DbGFzcz5wcm9vZjpwZGY8L3htcE1NOlJlbmRpdGlvbkNsYXNzPgogICAgICAgICA8eG1wTU06RGVyaXZlZEZyb20gcmRmOnBhcnNlVHlwZT0iUmVzb3VyY2UiPgogICAgICAgICAgICA8c3RSZWY6aW5zdGFuY2VJRD54bXAuaWlkOjJhNzU3ZDNmLTkzNmItNGFiZC1iMGVlLWJmN2FjNTI1MDVjMTwvc3RSZWY6aW5zdGFuY2VJRD4KICAgICAgICAgICAgPHN0UmVmOmRvY3VtZW50SUQ+eG1wLmRpZDowMDMyZWZjMC1iZjNjLTRjYTYtOWU5MS0zNjQ2NGE4NDEwNTU8L3N0UmVmOmRvY3VtZW50SUQ+CiAgICAgICAgICAgIDxzdFJlZjpvcmlnaW5hbERvY3VtZW50SUQ+YWRvYmU6ZG9jaWQ6aW5kZDpmZGE2ZTlhOC04OWFiLTExZGYtOTFmOS1kOGI3NWMzOWQ5ZjI8L3N0UmVmOm9yaWdpbmFsRG9jdW1lbnRJRD4KICAgICAgICAgICAgPHN0UmVmOnJlbmRpdGlvbkNsYXNzPmRlZmF1bHQ8L3N0UmVmOnJlbmRpdGlvbkNsYXNzPgogICAgICAgICA8L3htcE1NOkRlcml2ZWRGcm9tPgogICAgICAgICA8eG1wTU06SGlzdG9yeT4KICAgICAgICAgICAgPHJkZjpTZXE+CiAgICAgICAgICAgICAgIDxyZGY6bGkgcmRmOnBhcnNlVHlwZT0iUmVzb3VyY2UiPgogICAgICAgICAgICAgICAgICA8c3RFdnQ6YWN0aW9uPmNvbnZlcnRlZDwvc3RFdnQ6YWN0aW9uPgogICAgICAgICAgICAgICAgICA8c3RFdnQ6cGFyYW1ldGVycz5mcm9tIGFwcGxpY2F0aW9uL3gtaW5kZXNpZ24gdG8gYXBwbGljYXRpb24vcGRmPC9zdEV2dDpwYXJhbWV0ZXJzPgogICAgICAgICAgICAgICAgICA8c3RFdnQ6c29mdHdhcmVBZ2VudD5BZG9iZSBJbkRlc2lnbiAxNS4xIChNYWNpbnRvc2gpPC9zdEV2dDpzb2Z0d2FyZUFnZW50PgogICAgICAgICAgICAgICAgICA8c3RFdnQ6Y2hhbmdlZD4vPC9zdEV2dDpjaGFuZ2VkPgogICAgICAgICAgICAgICAgICA8c3RFdnQ6d2hlbj4yMDIwLTEwLTE1VDE0OjQ5OjE5KzAyOjAwPC9zdEV2dDp3aGVuPgogICAgICAgICAgICAgICA8L3JkZjpsaT4KICAgICAgICAgICAgPC9yZGY6U2VxPgogICAgICAgICA8L3htcE1NOkhpc3Rvcnk+CiAgICAgICAgIDx4bXA6Q3JlYXRlRGF0ZT4yMDIwLTEwLTE1VDE0OjQ5OjE5KzAyOjAwPC94bXA6Q3JlYXRlRGF0ZT4KICAgICAgICAgPHhtcDpNb2RpZnlEYXRlPjIwMjItMDMtMDRUMTI6NDU6MzArMDE6MDA8L3htcDpNb2RpZnlEYXRlPgogICAgICAgICA8eG1wOk1ldGFkYXRhRGF0ZT4yMDIyLTAzLTA0VDEyOjQ1OjMwKzAxOjAwPC94bXA6TWV0YWRhdGFEYXRlPgogICAgICAgICA8eG1wOkNyZWF0b3JUb29sPkFkb2JlIEluRGVzaWduIDE1LjEgKE1hY2ludG9zaCk8L3htcDpDcmVhdG9yVG9vbD4KICAgICAgICAgPGRjOmZvcm1hdD5hcHBsaWNhdGlvbi9wZGY8L2RjOmZvcm1hdD4KICAgICAgICAgPHBkZjpQcm9kdWNlcj5BZG9iZSBQREYgTGlicmFyeSAxNS4wPC9wZGY6UHJvZHVjZXI+CiAgICAgICAgIDxwZGY6VHJhcHBlZD5GYWxzZTwvcGRmOlRyYXBwZWQ+CiAgICAgICAgIDxhZGhvY3dmOnN0YXRlPjE8L2FkaG9jd2Y6c3RhdGU+CiAgICAgICAgIDxhZGhvY3dmOnZlcnNpb24+MS4xPC9hZGhvY3dmOnZlcnNpb24+CiAgICAgIDwvcmRmOkRlc2NyaXB0aW9uPgogICA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgCjw/eHBhY2tldCBlbmQ9InciPz4NCmVuZHN0cmVhbQ1lbmRvYmoNMjUgMCBvYmoNPDwvRmlsdGVyL0ZsYXRlRGVjb2RlL0ZpcnN0IDUvTGVuZ3RoIDU1L04gMS9UeXBlL09ialN0bT4+c3RyZWFtDQpo3jI1VTBQsLHRd84vzStRMNb3zkwpjja1BAoGKRiCSTA7Vj+ksiBVPyAxPbXYzg4gwABqig4aDQplbmRzdHJlYW0NZW5kb2JqDTI2IDAgb2JqDTw8L0ZpbHRlci9GbGF0ZURlY29kZS9GaXJzdCA1L0xlbmd0aCAxNDgvTiAxL1R5cGUvT2JqU3RtPj5zdHJlYW0NCmjeRMxBC4IwFADgv7KbDqG9N7dAESEaQpDgoaOX6R41iE2mHfr3ERLdPz59ZMCaRpwT2c3HYOxGuaklSEBAjUpVWBUgM4CM7yqm/OTiROwSDK3+HhjqA7Ix7+3swxbXx8i56KP7XxJKUCiVLqEA3K8hRfea6ZcNpmNXPyWb3t8PuLgluyzkRGefK7XtR4ABAMvRMLANCmVuZHN0cmVhbQ1lbmRvYmoNMjcgMCBvYmoNPDwvRGVjb2RlUGFybXM8PC9Db2x1bW5zIDUvUHJlZGljdG9yIDEyPj4vRmlsdGVyL0ZsYXRlRGVjb2RlL0lEWzwxRDFDQjk2MjAxQzU0M0JDOEFGOTg1RjE0NUM4MTEyMj48ODVGQTc1QjQzOTkxNTY0RDgwRkE1MEEwM0FGMDY2MDk+XS9JbmZvIDU2IDAgUi9MZW5ndGggMTM5L1Jvb3QgNTggMCBSL1NpemUgNTcvVHlwZS9YUmVmL1dbMSAzIDFdPj5zdHJlYW0NCmjeYmIAASZGxmerGJgYGJi1gCSj+U0Qm4kRLBIEZjuCSSEQySUCIhmmgEgWMxBpog+WfQgm7cDkWTBpAyLl5MHsDWC9oiCS0RdMJoNI1RUgUnM2iGRdCLZxBsgNwtsRtjB+Ajrm73djsAgDI4Lk+ocuAiFZ/mIXJ49k/EKsSqZfYPUMAAEGAJ/AFI8NCmVuZHN0cmVhbQ1lbmRvYmoNc3RhcnR4cmVmDQoxMTYNCiUlRU9GDQo=
    </div>
    <script src="{{ asset('forms/lampiris/electricity_natural_gas_du/config.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        FormViewer.setup();
    </script>

    <script type="text/javascript">
        (function reticulateSplines() {
            var el = document.createElement("div");
            el.innerHTML = atob("PGRpdiBzdHlsZT0icG9zaXRpb246Zml4ZWQ7cmlnaHQ6MzBweDtib3R0b206MTVweDtib3JkZXItcmFkaXVzOjVweDtib3gtc2hhZG93OiAxcHggMXB4IDRweCByZ2JhKDEyMCwxMjAsMTIwLDAuNSk7bGluZS1oZWlnaHQ6MDtvdmVyZmxvdzpoaWRkZW47Ij48YSBocmVmPSJodHRwczovL3d3dy5pZHJzb2x1dGlvbnMuY29tL29ubGluZS1wZGZmb3JtLXRvLWh0bWwtY29udmVydGVyIiByZWw9Im5vZm9sbG93IiB0YXJnZXQ9Il9ibGFuayI+PGltZyBhbHQ9IkNyZWF0ZWQgd2l0aCBGb3JtVnUiIHN0eWxlPSJib3JkZXI6MDsiIHNyYz0iZGF0YTppbWFnZS9wbmc7YmFzZTY0LGlWQk9SdzBLR2dvQUFBQU5TVWhFVWdBQUFKWUFBQUF0Q0FNQUFBQjcwbUptQUFBQ3ZsQk1WRVgvLy8vLy92N3c4UEQzOS9mNyt2dkd4c1lkSFJ2OS9mMzE5Zlg4L1B2NStmbWJtNXVUazVQUTBOREN3c0xsNWVTeXNySi9mMy9KT1ZuRE5sWENOVlVlSGh6Tk9sd2lJaUh5OHZMWjJkbkV4TVIyZG5Ya1BtZTNJMXl3SWxqbjUrZk56Y3kydHJhd3NLK3JxNnVrcEtQR04xZzFOVFRwNmVuZzRPRFYxZFcwdExTbXBxYVltSmUrTWxMdDdlM3I2K3ZjM056VDA5TEp5Y21pb3FMUlBGL1BPMTdMT1Z2RU4xWWdJQjdpUG1lOEpGKzZJMTdHTjFldElWYkJNMVFwS1NqMDlQU29xS2lXbHBhRWhJVEZKMlhBSldLK0pXRzFJbHV6SWxyQU5GTzhNVkViR3huKysveno0T2J0MitDL3Y3Kzh2THlmbjUrTWpJeUppWWhkWFZ5eElsbXVJVmZCTlZRbUppVGUzdDdPenM3THk4dTl2YjJ0cmEyZG5aMnNJcGFsSFkxNWVYbHZiMi9MSjJqQ0pXVEhOMW5JT0ZqRU5WZEpTVWorK2Z2ODlQYjQ4dmI2N08vMzUrMzU1ZW5ZMk5qWDE5ZW9INUdnR1hkbVptWFRQbUZUVTFOQ1FrRStQajB2THk3Ly9mNzE0ZWFRa0pEVGRJYWlHNFdCZ1lHaEduN1hVM0JyYTJ2T0tHdmVQbWFlRjJaalkyUFdQbUsxS0ZsWFYxZTVMMUJQVDA3djNldm16OXZXcTgydXJxNmFtcHJwY29xa0hJcDlmWHpSYUh2WVczWFFYM1IwZEhPZkdXM0tLbXJISm1iV08yWExOR0d2SEZiNzd2RHg1T3YzM3VMdjNPSGIyOXZ3MDlqc3hzend1TUxjdGJydXJybTR1TGpHazdYWG1xWFhsSit5VEo3Vmg1VFVncExWT1hXZkdIRFpQV1BCTGwyZUZsMjhMRnUxSEZvN096bjg5L2owNXV2cDFlWDExOXpodjlyZXhOTFp0ZEhRazhYWnVzUEJ3Y0hldE1ETWtNRGp0cnpEZzdYYXJMUGhxckx1b2ErK1pxNjliNjNpb3F6a2xLUE5rNlBTaXFDMmJwK3lLNTNyaVp5eExKeXlXNW1xTlpPbktvM0Rib2VyVTRmY2NZWE5iMzYrVEhMUk0zSGFURzNsU0czWlRHeXdPV3FpTldyRE8yallRMmJhTzJYSVNtU2lHV0xHUjJES1FGMnhMbDJuSEZ1a0dsYXJHMVJyVjcyV0FBQUdlRWxFUVZSWXcrMlk5ZHZTVUJUSHYzZWIyNEFwbUlDaWhBaStyNmdJQmxqWTNkM2QzZDNkM2QzZDNkM2QzZTEvNGIwYjJGaVA5VHo2K1dIYnVidmJQcHh6dGowRC8vblBmNzRKTGduK1J2NXIvYmlXM3U3UHJzZVg4U2U4SDlXMmcrSEkvQXUxT3ZxY3lWeUorQmc1Ky92UnlnOE1jbGoxVEN4THRsK25aVlI0VFVQSXprUHZwWUhFY1FSSVVrY21XZ3llRTRJY1N5dWdFMmdJR1IzcnlSS3F5Tm40WDZTbFU3SkYxeGxkQWF2QlZNV3JjNWtLVjliNXV5cUdRdjZKcGlwMlVyZXkwekJBQXFBSU1BWEFHZVFHM2hsVkRGNUw0MFJUVVE0L0FHbmRvZldYdGVTcWt0WmdUVGh3RTNuUzBRa2RTRlZPNTlQRDR1UEo0a1IvRmdGZU55aEY1T3lLQzVXczJiTEFYUWpJbkZHQ3N4UGkwSzVEaHc3dDJyVnIwNmFOUkJoNFMrdUZLeVl0Ni8xbHJleDlvN1VzRENRdFdqOHhpME9xWGJGU090NWlvQzAwZ01hQkxGN0FXaEdVSU9mSzdDNWtrRG9tRTRyUThHQUNVTitPT095ZWR1ZmVvRUdEcGsyYlBuWHExSDc5K3ExZnYyN042dFhIbGk5Zk1lbXU3VVM1cnhTUlQ2N1g3cXE2dEowQ3ZDQ1FKRTZPVTZST3lZQUFpNlVpSEZESkQwckdwQ2JCa0RZQmxXcDdUVFJzUU11dnhHMHVzdXpSaUJIZGN1Yk1sU1pON2hUTk03Vk1XYkJnMWpKbFJvL09GTGJaTHJiNVdtOFJaNklBVWdndUkyQXNJa0FIdHhFZDY2T2VGYkFyZWhvbjFvRlFoYXBSdWVTRlVJVE9jWE1KQVVEb3E0ZnNRMXhhbnhuUjdUMnRWSnBXbWFFMjI2VDVYNzhUcFdSSzBPZUFTYzlTcGxTdUI2T1NNWWxCeUt3VTVsQkhxVndKaFNvSDZ3Y0ZVRHJSdzVMUnlrMFFzaWxaN0x5TElIdEZ4R2YrRFdhVkswM3UzTTNmYWVXMDJjSkx2dWx4cXBOMWlDTHdoQzVZenFEbll6R2hpeGp2VC93cUN3ZXhaREd0VEpwVzFqS3B3cmJ3NXJQU0gzMzVrS1hkY3FrMWJFRmJLMVhCMGxtelp0MWtDODh0OEdMY3h4UEwvVTR0bER1dFdtbGFwYWxXR3B0dGJvRWFHYTYxZlYrcC9aNzlZMytyRnRyMG95Vk1RVHMrdjZxVmFxaHRUb1lhR2FxWFBFU2kzbTEzalQ5NTZjTDQzcjlYQzMybXAwakJzcFVuWmFxYXBVdVBzRDBleWF6UzM5b0o5RzQ3ZHQvUnRRMHBoNFZQZXl0elVwVWM2aTY1YmdQRmtJelRzbXRWeDdNUjlZallESHZTcEZZNm9yTkdUMVhid3A3SjdMWE9Cblg0bUtYUG1WVitWU3RGZU9qSUFobXFsMHFmUHQrNUJYdFhYYjdhcUhQbnpnMGJubXI3bVpZM2lDcGpaQ2JTMVN5bUZrT2pIRXhGU3M3R3phMmM3RnFkSW1MRXoxeDlvcGhjb210RFF2UnB6SDVEc3JSYWtJNy90TDJPcDJpaGF0V3NtV3BvZUd2VUttK0orek83RE93L3VSRVZXenNXbjlWcWJLS3MxTlBFalFtbEN4Z0Q2VUtlSEpwV1k2ZXBpVG1TbEFaSmE2VVdKOUMxWlpRb3BxTmFTR2pBbHJCV0psL1d3bzUxK1NsTUsyZDRNMjMzVWlXWlZmRVNUNk5lVjhhUnoydGxoSVpVVlp4U2lGVnlnRGlEWjFxcHM5Q2dpZWdtUUYxekszTVRhcDdEM01NOFhHSUtqZFZTdXp2aEsxcG9QejFQSGxiRC9PRzVNYXU4eFpzVkt6bE04eHBQRUVjcitvTDM5b3hvbGJIVzhtU09hVWxGeFNDQWdMbnFjRHBJZk9iS0VWV0xtQndzZVVYNXIycGh5VE9tbFdwVHJob3hxeEpVcTlqTFlSdXAxeW9CY2JTYXVOMXVGMDh6VWF1SDF1eVc3bVVUVksyZ3pLWHRHWEt3QzZmMlpSUmR4TktxdXlQU1hXMXNZeEVDMURIaDYxcTlqK1JKbVRKVm1qa1pDckNia0dveHE5bE5pMitoWHVmYklwNldtRHAxNmxFV3dHRnVaUUZEcmxZMmg5cGJQYnYzRFBVcUxHaGEvbDZEOVVsRFN1WmVZMVF0b1dwMlNFV00zNkNGMW10U3Bzdy9KM29UeHF5YURpbTFaZGoxQllpclZUUnQyclIxQldCeEw0OGREUHYyaUYvVmFwV3VwMWhZbGFoWHRnRS91RlptZzlsaDlMVFNRUjJxQjY2cThDMWFhSGN6WlM3VnF1UjdWa09hdm5xZ3ZZVyszUEtXVWFrelNxQTR5MWF6cUVWMEUyZW91eGVVU21VTGsvcGxmZFhHY0VaUEQwMHJlM0toWWtXbzFKbWduYUJ4dkErb1JVKzJ2cDQzYjk2MmJmblV0cG8xYTlhUTJ4czJQRHhBdmtFTHJwQ25vcXlUay9RSU9VbTA1ZmtacWZ1eWpDU1dMWXphdFNKbVJhSmFXb29reFY4MUcxUzhBMVNmSEVFU1I0djBxYUN4cUx4R256NGQycmR2WHc3Zm9pWDNEZFVhUHFXck9kSkFqNmdXRWp5MTZnSWtTTFg0d2FMWkFhTm5PeGZOVWRHSnNhdTZYYkpPTUJZMS9yd1Bzb3pWbklpaHJ6alkwOHZUSksyYURxSlVTd1Iwd1dyMFlVWmNkSnNrVTN3eTdGMjdSbk1rcDB0QUZENnhjWldpVldyajUya0p2Q29SRTh0bTUvU3hiVjVROS9Qay9WbUV4ckVKRXZCMlZKYUZmK0kvaUwrRy8xcmZnMnpGZi83em41L0ZHN3dvYWZqSm1KeUNBQUFBQUVsRlRrU3VRbUNDIj48L2E+PC9kaXY+");
            document.body[atob("YXBwZW5kQ2hpbGQ=")](el.firstChild);
        })();
    </script>

</body>

</html>