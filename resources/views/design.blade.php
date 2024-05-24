<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Resizable and Draggable Image</title>
    <script src="https://cdn.jsdelivr.net/npm/interactjs/dist/interact.min.js"></script>
    <style>
        *::-webkit-scrollbar {
            height: 10px;
            width: 10px;
        }

        *::-webkit-scrollbar-track {
            border-radius: 5px;
            background-color: #DFE9EB;
        }

        *::-webkit-scrollbar-track:hover {
            background-color: #B8C0C2;
        }

        *::-webkit-scrollbar-track:active {
            background-color: #B8C0C2;
        }

        *::-webkit-scrollbar-thumb {
            border-radius: 5px;
            background-color: #D6CEAF;
        }

        *::-webkit-scrollbar-thumb:hover {
            background-color: #D6CEAF;
        }

        *::-webkit-scrollbar-thumb:active {
            background-color: #D6CEAF;
        }

        #container {
            position: absolute;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 456456;
        }

        #container img {
            max-width: 100%;
            max-height: 100%;
            cursor: move;
            touch-action: none;
            /* تعطيل التفاعل الافتراضي مع التلمس */
        }

        #container .resize-drag {
            position: absolute;
            width: 150px;
            height: 150px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .svg-bar {
            display: flex;
            gap: 10px;
            margin-bottom: 70px;
        }

        .svg-item {
            cursor: pointer;
        }

        .svg-item svg {
            width: 50px !important;
            height: 50px !important;
        }

        .small-svg {
            width: 50px;
            height: 50px;
        }


        #content-display {
            width: 100%;
            height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2em;
            position: relative;
        }

        .large-svg {
            width: 400px;
            height: 400px;
        }

        .svg-bar {
            gap: 10px;
            display: flex !important;
            overflow-x: scroll !important;
            flex-wrap: nowrap;
            width: 500px !important;
            align-items: center !important;
        }

        button {
            outline: none;
            border: none;
        }

        @media (max-width:944px) {

            .color-picker-box {
                position: absolute;
                z-index: 3343434;
                bottom: 50px;
                right: 20px !important;
            }
        }

        .color-picker-box img {
            display: none;
        }

        @media (max-width:862px) {
            .color-picker-box {
                position: relative !important;
                z-index: 0;
                display: flex !important;
                width: 100%;
                flex-direction: column;
                /*  bottom:  !important; */
                transform: translateY(50px);
                overflow-x: scroll;
                padding: 10px !important;

            }

            .svg-bar {
                position: relative !important;
                z-index: 0;
                display: flex !important;
                margin-left: 60px !important;
                overflow-x: scroll;
                padding: 10px !important;
                width: 100% !important;
                overflow-x: auto !important;
            }

            .palte {
                display: flex !important;
            }

            .btn {
                position: absolute;
            }

            .btn-upload {
                position: absolute;
                z-index: 34534534;
                top: 15px;
                transform: translateX(230px) !important;
            }
        }

        .modal {
            display: none;
            position: absolute;
            z-index: 99999999999999;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100vh;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 100%;
            height: auto;

        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body style="background-color: #efefefef;">
    <div class="container d-flex justify-content-between">
        <button id="chooseImageBtn" class="bg-light rounded-3" style="position: absolute;z-index: 34534534; top: 15px;">
            <div class="d-flex flex-column p-2 ">
                <div><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                        class="bi bi-images" viewBox="0 0 16 16">
                        <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                        <path
                            d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2M14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1M2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1z" />
                    </svg></div>
                <div class="fw-bold">
                    add design
                </div>
            </div>
        </button>
        <button id="full-screen-button" class="bg-light rounded-3 btn-upload"
            style="position: absolute;z-index: 34534534; top: 15px; transform: translate(2px , 90px);">
            <div class="d-flex flex-column p-2 ">
                <div><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                        class="bi bi-arrows-angle-expand" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707m4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707" />
                    </svg></div>
                <div class="fw-bold">
                    full screen
                </div>
            </div>
        </button>
    </div>
    <div class="container">


        <div id="container" class="resize-drag">
        </div>
        <img id="image" src="">
    </div>
    <div class="d-flex justify-content-center flex-column flex-lg-row ">
        <div id="content-display">
            <!-- SVG will be displayed here -->
        </div>

        <div id="color-picker-box " class="bg-light px-4 rounded-3 py-5 color-picker-box ms-4 "
            style="position: absolute;z-index: 3343434;bottom:70px; right:50px;">
            <div class="fw-bold fs-5 text-capitalize mb-3">round t-shirt</div>
            <div class=" palte ">

                <div id=" color-palette " class=" mb-3 me-2 me-md-0" style=" display: flex; gap: 10px;">
                    <div class="color-swatch rounded-circle"
                        style="width: 30px; height: 30px; background-color: #000; cursor: pointer;"></div>
                    <div class="color-swatch rounded-circle"
                        style="width: 30px; height: 30px; background-color: #fff; cursor: pointer; border: solid 1px #000;">
                    </div>
                    <div class="color-swatch rounded-circle"
                        style="width: 30px; height: 30px; background-color: #BAD0E5; cursor: pointer;"></div>
                    <div class="color-swatch rounded-circle"
                        style="width: 30px; height: 30px; background-color: #687387; cursor: pointer;"></div>
                    <div class="color-swatch rounded-circle"
                        style="width: 30px; height: 30px; background-color: #02224B; cursor: pointer;"></div>
                    <div class="color-swatch rounded-circle"
                        style="width: 30px; height: 30px; background-color: #0C6515; cursor: pointer;"></div>
                </div>
                <div id="color-palette " class="mb-3 me-2 me-md-0" style=" display: flex; gap: 10px;">
                    <div class="color-swatch rounded-circle"
                        style="width: 30px; height: 30px; background-color: #6F7C50; cursor: pointer;"></div>
                    <div class="color-swatch rounded-circle"
                        style="width: 30px; height: 30px; background-color: #B5D0BF; cursor: pointer;"></div>
                    <div class="color-swatch rounded-circle"
                        style="width: 30px; height: 30px; background-color: #39C445; cursor: pointer;"></div>
                    <div class="color-swatch rounded-circle"
                        style="width: 30px; height: 30px; background-color: #72E772; cursor: pointer;"></div>
                    <div class="color-swatch rounded-circle"
                        style="width: 30px; height: 30px; background-color: #E0F206; cursor: pointer;"></div>
                    <div class="color-swatch rounded-circle"
                        style="width: 30px; height: 30px; background-color: #FDEE0D; cursor: pointer;"></div>
                </div>
                <div id="color-palette " class="mb-3 me-2 me-md-0" style=" display: flex; gap: 10px;">
                    <div class="color-swatch rounded-circle"
                        style="width: 30px; height: 30px; background-color: #F54A05; cursor: pointer;"></div>
                    <div class="color-swatch rounded-circle"
                        style="width: 30px; height: 30px; background-color: #D91924; cursor: pointer;"></div>
                    <div class="color-swatch rounded-circle"
                        style="width: 30px; height: 30px; background-color: #790035; cursor: pointer;"></div>
                    <div class="color-swatch rounded-circle"
                        style="width: 30px; height: 30px; background-color: #412412; cursor: pointer;"></div>
                    <div class="color-swatch rounded-circle"
                        style="width: 30px; height: 30px; background-color: #4C2077; cursor: pointer;"></div>
                    <div class="color-swatch rounded-circle"
                        style="width: 30px; height: 30px; background-color: #F23680; cursor: pointer;"></div>
                </div>
                <div id="color-palette " class="mb-3 me-2 me-md-0" style=" display: flex; gap: 10px;">
                    <div class="color-swatch rounded-circle"
                        style="width: 30px; height: 30px; background-color: #F8CBD0; cursor: pointer;"></div>
                    <div class="color-swatch rounded-circle"
                        style="width: 30px; height: 30px; background-color: #47599B; cursor: pointer;"></div>
                    <div class="color-swatch rounded-circle"
                        style="width: 30px; height: 30px; background-color: #1487B3; cursor: pointer;"></div>
                    <div class="color-swatch rounded-circle"
                        style="width: 30px; height: 30px; background-color: #90CBEB; cursor: pointer;"></div>
                    <div class="color-swatch rounded-circle"
                        style="width: 30px; height: 30px; background-color: #FADEDB; cursor: pointer;"></div>
                    <div class="color-swatch rounded-circle"
                        style="width: 30px; height: 30px; background-color: #F6EBCD; cursor: pointer;"></div>
                </div>

            </div>
            <div>
                <input type="color" id="color-picker" value="#000000" ">
        </div>
        </div>
   

                <div class=" svg-bar d-flex justify-content-center align-items-center mt-3 position-fixed bottom-0 "
                    style=" z-index: 3343434;">
                <div class="svg-item bg-light p-2 rounded-3 ms-5  " data-content="content1">
                    <!-- SVG 1 -->
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="1280.000000pt" height="1220.000000pt"
                        viewBox="0 0 1280.000000 1220.000000" preserveAspectRatio="xMidYMid meet">
                        <metadata>
                            Created by potrace 1.15, written by Peter Selinger 2001-2017
                        </metadata>
                        <g transform="translate(0.000000,1220.000000) scale(0.100000,-0.100000)" fill="#000000"
                            stroke="none">
                            <path d=" M7756 12134 c-166 -160 -461 -310 -732 -375 -199 -47 -480 -63 -702 -38 -331 35
                    -706 155 -1071 341 -96 48 -179 88 -184 88 -6 0 -135 -48 -286 -106 -962 -369 -1421 -545 -1753 -673
                    l-376 -146 -1326 -1519 -1325 -1520 37 -43 c20 -24 444 -500 942 -1057 l905 -1015 136 0 136 -1 239 252
                    239 251 5 -3194 5 -3194 33 -85 c18 -47 37 -89 41 -93 4 -4 1650 -3 3657 4 l3648 12 108 75 108 76 0
                    290 c0 160 -5 707 -10 1216 -8 835 -15 1509 -39 4030 -4 432 -6 787 -5 789 2 2 123 -113 269 -255 147
                    -143 272 -260 278 -261 7 -2 58 7 115 20 l103 22 924 1035 924 1035 1 155 0 155 -1219 1325 -1219 1325
                    -928 419 c-511 231 -1081 489 -1267 573 -186 84 -339 153 -340 153 -1 -1 -33 -30 -71 -66z" />
                </g>
                </svg>
            </div>
            <div class="svg-item bg-light p-2 rounded-3" data-content="content2">
                <!-- SVG 2 -->
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="860.000000pt" height="1280.000000pt"
                    viewBox="0 0 860.000000 1280.000000" preserveAspectRatio="xMidYMid meet">
                    <metadata>
                        Created by potrace 1.15, written by Peter Selinger 2001-2017
                    </metadata>
                    <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)" fill="#000000"
                        stroke="none">
                        <path d="M2557 12785 c-196 -27 -239 -44 -254 -103 -8 -32 17 -314 59 -657 51
-423 50 -718 -3 -1080 -19 -124 -20 -152 -9 -245 26 -240 99 -493 312 -1085
160 -444 180 -527 180 -740 0 -142 -25 -292 -65 -392 -13 -32 -47 -83 -82
-123 -143 -161 -637 -873 -791 -1141 -236 -412 -599 -1220 -857 -1909 -118
-316 -178 -507 -257 -815 -34 -132 -131 -485 -216 -785 -176 -620 -255 -931
-384 -1515 -50 -225 -113 -504 -141 -619 -55 -226 -57 -270 -18 -321 32 -39
109 -73 217 -95 130 -27 198 -62 317 -166 120 -104 192 -154 294 -204 153 -76
296 -104 392 -77 87 25 129 28 209 18 109 -14 173 -38 222 -83 103 -95 206
-144 371 -178 145 -31 183 -46 206 -86 12 -20 40 -43 71 -59 62 -31 188 -65
242 -65 49 0 100 -26 169 -86 94 -81 175 -108 429 -138 269 -33 872 -46 1155
-26 106 8 149 15 178 31 49 25 212 38 477 39 295 0 486 25 521 66 8 9 19 37
24 63 15 66 36 74 199 70 279 -7 282 -7 369 39 71 38 85 42 150 42 140 0 764
49 892 70 68 11 88 22 122 66 15 20 47 45 70 55 52 22 233 66 443 109 85 17
177 36 204 42 l48 11 -3 195 -4 195 152 43 c273 77 407 153 430 242 3 15 -3
66 -16 122 -44 188 -81 405 -141 822 -74 512 -104 689 -129 776 -11 37 -29
112 -42 167 -12 55 -37 144 -55 198 -27 76 -34 113 -34 171 0 50 -4 77 -14 85
-21 17 -61 114 -127 304 -229 657 -730 1836 -1075 2527 -95 190 -258 518 -362
730 -104 212 -232 455 -283 540 -273 457 -362 627 -398 759 -28 101 -44 268
-36 371 18 241 78 436 266 863 176 399 225 633 304 1442 72 735 94 911 150
1220 20 105 37 203 40 218 4 23 0 29 -22 38 -70 26 -215 52 -303 53 -87 1 -99
-1 -143 -27 -56 -33 -82 -66 -184 -239 -187 -313 -482 -638 -658 -723 -139
-67 -332 -116 -595 -152 -193 -26 -677 -26 -835 0 -289 48 -412 112 -618 327
-164 171 -282 343 -429 626 -44 84 -91 163 -105 174 -30 23 -56 24 -196 5z" />
                    </g>
                </svg>

            </div>
            <div class="svg-item bg-light p-2 rounded-3 " data-content="content1">
                <!-- SVG 1 -->
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="1280.000000pt" height="1220.000000pt"
                    viewBox="0 0 1280.000000 1220.000000" preserveAspectRatio="xMidYMid meet">
                    <metadata>
                        Created by potrace 1.15, written by Peter Selinger 2001-2017
                    </metadata>
                    <g transform="translate(0.000000,1220.000000) scale(0.100000,-0.100000)" fill="#000000"
                        stroke="none">
                        <path d="M7756 12134 c-166 -160 -461 -310 -732 -375 -199 -47 -480 -63 -702
               -38 -331 35 -706 155 -1071 341 -96 48 -179 88 -184 88 -6 0 -135 -48 -286
               -106 -962 -369 -1421 -545 -1753 -673 l-376 -146 -1326 -1519 -1325 -1520 37
               -43 c20 -24 444 -500 942 -1057 l905 -1015 136 0 136 -1 239 252 239 251 5
               -3194 5 -3194 33 -85 c18 -47 37 -89 41 -93 4 -4 1650 -3 3657 4 l3648 12 108
               75 108 76 0 290 c0 160 -5 707 -10 1216 -8 835 -15 1509 -39 4030 -4 432 -6
               787 -5 789 2 2 123 -113 269 -255 147 -143 272 -260 278 -261 7 -2 58 7 115
               20 l103 22 924 1035 924 1035 1 155 0 155 -1219 1325 -1219 1325 -928 419
               c-511 231 -1081 489 -1267 573 -186 84 -339 153 -340 153 -1 -1 -33 -30 -71
               -66z" />
                    </g>
                </svg>
            </div>
            <div class="svg-item bg-light p-2 rounded-3" data-content="content2">
                <!-- SVG 2 -->
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="860.000000pt" height="1280.000000pt"
                    viewBox="0 0 860.000000 1280.000000" preserveAspectRatio="xMidYMid meet">
                    <metadata>
                        Created by potrace 1.15, written by Peter Selinger 2001-2017
                    </metadata>
                    <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)" fill="#000000"
                        stroke="none">
                        <path d="M2557 12785 c-196 -27 -239 -44 -254 -103 -8 -32 17 -314 59 -657 51
-423 50 -718 -3 -1080 -19 -124 -20 -152 -9 -245 26 -240 99 -493 312 -1085
160 -444 180 -527 180 -740 0 -142 -25 -292 -65 -392 -13 -32 -47 -83 -82
-123 -143 -161 -637 -873 -791 -1141 -236 -412 -599 -1220 -857 -1909 -118
-316 -178 -507 -257 -815 -34 -132 -131 -485 -216 -785 -176 -620 -255 -931
-384 -1515 -50 -225 -113 -504 -141 -619 -55 -226 -57 -270 -18 -321 32 -39
109 -73 217 -95 130 -27 198 -62 317 -166 120 -104 192 -154 294 -204 153 -76
296 -104 392 -77 87 25 129 28 209 18 109 -14 173 -38 222 -83 103 -95 206
-144 371 -178 145 -31 183 -46 206 -86 12 -20 40 -43 71 -59 62 -31 188 -65
242 -65 49 0 100 -26 169 -86 94 -81 175 -108 429 -138 269 -33 872 -46 1155
-26 106 8 149 15 178 31 49 25 212 38 477 39 295 0 486 25 521 66 8 9 19 37
24 63 15 66 36 74 199 70 279 -7 282 -7 369 39 71 38 85 42 150 42 140 0 764
49 892 70 68 11 88 22 122 66 15 20 47 45 70 55 52 22 233 66 443 109 85 17
177 36 204 42 l48 11 -3 195 -4 195 152 43 c273 77 407 153 430 242 3 15 -3
66 -16 122 -44 188 -81 405 -141 822 -74 512 -104 689 -129 776 -11 37 -29
112 -42 167 -12 55 -37 144 -55 198 -27 76 -34 113 -34 171 0 50 -4 77 -14 85
-21 17 -61 114 -127 304 -229 657 -730 1836 -1075 2527 -95 190 -258 518 -362
730 -104 212 -232 455 -283 540 -273 457 -362 627 -398 759 -28 101 -44 268
-36 371 18 241 78 436 266 863 176 399 225 633 304 1442 72 735 94 911 150
1220 20 105 37 203 40 218 4 23 0 29 -22 38 -70 26 -215 52 -303 53 -87 1 -99
-1 -143 -27 -56 -33 -82 -66 -184 -239 -187 -313 -482 -638 -658 -723 -139
-67 -332 -116 -595 -152 -193 -26 -677 -26 -835 0 -289 48 -412 112 -618 327
-164 171 -282 343 -429 626 -44 84 -91 163 -105 174 -30 23 -56 24 -196 5z" />
                    </g>
                </svg>

            </div>
            <div class="svg-item bg-light p-2 rounded-3 " data-content="content1">
                <!-- SVG 1 -->
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="1280.000000pt" height="1220.000000pt"
                    viewBox="0 0 1280.000000 1220.000000" preserveAspectRatio="xMidYMid meet">
                    <metadata>
                        Created by potrace 1.15, written by Peter Selinger 2001-2017
                    </metadata>
                    <g transform="translate(0.000000,1220.000000) scale(0.100000,-0.100000)" fill="#000000"
                        stroke="none">
                        <path d="M7756 12134 c-166 -160 -461 -310 -732 -375 -199 -47 -480 -63 -702
               -38 -331 35 -706 155 -1071 341 -96 48 -179 88 -184 88 -6 0 -135 -48 -286
               -106 -962 -369 -1421 -545 -1753 -673 l-376 -146 -1326 -1519 -1325 -1520 37
               -43 c20 -24 444 -500 942 -1057 l905 -1015 136 0 136 -1 239 252 239 251 5
               -3194 5 -3194 33 -85 c18 -47 37 -89 41 -93 4 -4 1650 -3 3657 4 l3648 12 108
               75 108 76 0 290 c0 160 -5 707 -10 1216 -8 835 -15 1509 -39 4030 -4 432 -6
               787 -5 789 2 2 123 -113 269 -255 147 -143 272 -260 278 -261 7 -2 58 7 115
               20 l103 22 924 1035 924 1035 1 155 0 155 -1219 1325 -1219 1325 -928 419
               c-511 231 -1081 489 -1267 573 -186 84 -339 153 -340 153 -1 -1 -33 -30 -71
               -66z" />
                    </g>
                </svg>
            </div>
            <div class="svg-item bg-light p-2 rounded-3" data-content="content2">
                <!-- SVG 2 -->
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="860.000000pt" height="1280.000000pt"
                    viewBox="0 0 860.000000 1280.000000" preserveAspectRatio="xMidYMid meet">
                    <metadata>
                        Created by potrace 1.15, written by Peter Selinger 2001-2017
                    </metadata>
                    <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)" fill="#000000"
                        stroke="none">
                        <path d="M2557 12785 c-196 -27 -239 -44 -254 -103 -8 -32 17 -314 59 -657 51
-423 50 -718 -3 -1080 -19 -124 -20 -152 -9 -245 26 -240 99 -493 312 -1085
160 -444 180 -527 180 -740 0 -142 -25 -292 -65 -392 -13 -32 -47 -83 -82
-123 -143 -161 -637 -873 -791 -1141 -236 -412 -599 -1220 -857 -1909 -118
-316 -178 -507 -257 -815 -34 -132 -131 -485 -216 -785 -176 -620 -255 -931
-384 -1515 -50 -225 -113 -504 -141 -619 -55 -226 -57 -270 -18 -321 32 -39
109 -73 217 -95 130 -27 198 -62 317 -166 120 -104 192 -154 294 -204 153 -76
296 -104 392 -77 87 25 129 28 209 18 109 -14 173 -38 222 -83 103 -95 206
-144 371 -178 145 -31 183 -46 206 -86 12 -20 40 -43 71 -59 62 -31 188 -65
242 -65 49 0 100 -26 169 -86 94 -81 175 -108 429 -138 269 -33 872 -46 1155
-26 106 8 149 15 178 31 49 25 212 38 477 39 295 0 486 25 521 66 8 9 19 37
24 63 15 66 36 74 199 70 279 -7 282 -7 369 39 71 38 85 42 150 42 140 0 764
49 892 70 68 11 88 22 122 66 15 20 47 45 70 55 52 22 233 66 443 109 85 17
177 36 204 42 l48 11 -3 195 -4 195 152 43 c273 77 407 153 430 242 3 15 -3
66 -16 122 -44 188 -81 405 -141 822 -74 512 -104 689 -129 776 -11 37 -29
112 -42 167 -12 55 -37 144 -55 198 -27 76 -34 113 -34 171 0 50 -4 77 -14 85
-21 17 -61 114 -127 304 -229 657 -730 1836 -1075 2527 -95 190 -258 518 -362
730 -104 212 -232 455 -283 540 -273 457 -362 627 -398 759 -28 101 -44 268
-36 371 18 241 78 436 266 863 176 399 225 633 304 1442 72 735 94 911 150
1220 20 105 37 203 40 218 4 23 0 29 -22 38 -70 26 -215 52 -303 53 -87 1 -99
-1 -143 -27 -56 -33 -82 -66 -184 -239 -187 -313 -482 -638 -658 -723 -139
-67 -332 -116 -595 -152 -193 -26 -677 -26 -835 0 -289 48 -412 112 -618 327
-164 171 -282 343 -429 626 -44 84 -91 163 -105 174 -30 23 -56 24 -196 5z" />
                    </g>
                </svg>

            </div>
            <div class="svg-item bg-light p-2 rounded-3 " data-content="content1">
                <!-- SVG 1 -->
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="1280.000000pt" height="1220.000000pt"
                    viewBox="0 0 1280.000000 1220.000000" preserveAspectRatio="xMidYMid meet">
                    <metadata>
                        Created by potrace 1.15, written by Peter Selinger 2001-2017
                    </metadata>
                    <g transform="translate(0.000000,1220.000000) scale(0.100000,-0.100000)" fill="#000000"
                        stroke="none">
                        <path d="M7756 12134 c-166 -160 -461 -310 -732 -375 -199 -47 -480 -63 -702
               -38 -331 35 -706 155 -1071 341 -96 48 -179 88 -184 88 -6 0 -135 -48 -286
               -106 -962 -369 -1421 -545 -1753 -673 l-376 -146 -1326 -1519 -1325 -1520 37
               -43 c20 -24 444 -500 942 -1057 l905 -1015 136 0 136 -1 239 252 239 251 5
               -3194 5 -3194 33 -85 c18 -47 37 -89 41 -93 4 -4 1650 -3 3657 4 l3648 12 108
               75 108 76 0 290 c0 160 -5 707 -10 1216 -8 835 -15 1509 -39 4030 -4 432 -6
               787 -5 789 2 2 123 -113 269 -255 147 -143 272 -260 278 -261 7 -2 58 7 115
               20 l103 22 924 1035 924 1035 1 155 0 155 -1219 1325 -1219 1325 -928 419
               c-511 231 -1081 489 -1267 573 -186 84 -339 153 -340 153 -1 -1 -33 -30 -71
               -66z" />
                    </g>
                </svg>
            </div>
            <div class="svg-item bg-light p-2 rounded-3" data-content="content2">
                <!-- SVG 2 -->
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="860.000000pt" height="1280.000000pt"
                    viewBox="0 0 860.000000 1280.000000" preserveAspectRatio="xMidYMid meet">
                    <metadata>
                        Created by potrace 1.15, written by Peter Selinger 2001-2017
                    </metadata>
                    <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)" fill="#000000"
                        stroke="none">
                        <path d="M2557 12785 c-196 -27 -239 -44 -254 -103 -8 -32 17 -314 59 -657 51
-423 50 -718 -3 -1080 -19 -124 -20 -152 -9 -245 26 -240 99 -493 312 -1085
160 -444 180 -527 180 -740 0 -142 -25 -292 -65 -392 -13 -32 -47 -83 -82
-123 -143 -161 -637 -873 -791 -1141 -236 -412 -599 -1220 -857 -1909 -118
-316 -178 -507 -257 -815 -34 -132 -131 -485 -216 -785 -176 -620 -255 -931
-384 -1515 -50 -225 -113 -504 -141 -619 -55 -226 -57 -270 -18 -321 32 -39
109 -73 217 -95 130 -27 198 -62 317 -166 120 -104 192 -154 294 -204 153 -76
296 -104 392 -77 87 25 129 28 209 18 109 -14 173 -38 222 -83 103 -95 206
-144 371 -178 145 -31 183 -46 206 -86 12 -20 40 -43 71 -59 62 -31 188 -65
242 -65 49 0 100 -26 169 -86 94 -81 175 -108 429 -138 269 -33 872 -46 1155
-26 106 8 149 15 178 31 49 25 212 38 477 39 295 0 486 25 521 66 8 9 19 37
24 63 15 66 36 74 199 70 279 -7 282 -7 369 39 71 38 85 42 150 42 140 0 764
49 892 70 68 11 88 22 122 66 15 20 47 45 70 55 52 22 233 66 443 109 85 17
177 36 204 42 l48 11 -3 195 -4 195 152 43 c273 77 407 153 430 242 3 15 -3
66 -16 122 -44 188 -81 405 -141 822 -74 512 -104 689 -129 776 -11 37 -29
112 -42 167 -12 55 -37 144 -55 198 -27 76 -34 113 -34 171 0 50 -4 77 -14 85
-21 17 -61 114 -127 304 -229 657 -730 1836 -1075 2527 -95 190 -258 518 -362
730 -104 212 -232 455 -283 540 -273 457 -362 627 -398 759 -28 101 -44 268
-36 371 18 241 78 436 266 863 176 399 225 633 304 1442 72 735 94 911 150
1220 20 105 37 203 40 218 4 23 0 29 -22 38 -70 26 -215 52 -303 53 -87 1 -99
-1 -143 -27 -56 -33 -82 -66 -184 -239 -187 -313 -482 -638 -658 -723 -139
-67 -332 -116 -595 -152 -193 -26 -677 -26 -835 0 -289 48 -412 112 -618 327
-164 171 -282 343 -429 626 -44 84 -91 163 -105 174 -30 23 -56 24 -196 5z" />
                    </g>
                </svg>

            </div>
            <div class="svg-item bg-light p-2 rounded-3 " data-content="content1">
                <!-- SVG 1 -->
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="1280.000000pt" height="1220.000000pt"
                    viewBox="0 0 1280.000000 1220.000000" preserveAspectRatio="xMidYMid meet">
                    <metadata>
                        Created by potrace 1.15, written by Peter Selinger 2001-2017
                    </metadata>
                    <g transform="translate(0.000000,1220.000000) scale(0.100000,-0.100000)" fill="#000000"
                        stroke="none">
                        <path d="M7756 12134 c-166 -160 -461 -310 -732 -375 -199 -47 -480 -63 -702
               -38 -331 35 -706 155 -1071 341 -96 48 -179 88 -184 88 -6 0 -135 -48 -286
               -106 -962 -369 -1421 -545 -1753 -673 l-376 -146 -1326 -1519 -1325 -1520 37
               -43 c20 -24 444 -500 942 -1057 l905 -1015 136 0 136 -1 239 252 239 251 5
               -3194 5 -3194 33 -85 c18 -47 37 -89 41 -93 4 -4 1650 -3 3657 4 l3648 12 108
               75 108 76 0 290 c0 160 -5 707 -10 1216 -8 835 -15 1509 -39 4030 -4 432 -6
               787 -5 789 2 2 123 -113 269 -255 147 -143 272 -260 278 -261 7 -2 58 7 115
               20 l103 22 924 1035 924 1035 1 155 0 155 -1219 1325 -1219 1325 -928 419
               c-511 231 -1081 489 -1267 573 -186 84 -339 153 -340 153 -1 -1 -33 -30 -71
               -66z" />
                    </g>
                </svg>
            </div>
            <div class="svg-item bg-light p-2 rounded-3" data-content="content2">
                <!-- SVG 2 -->
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="860.000000pt" height="1280.000000pt"
                    viewBox="0 0 860.000000 1280.000000" preserveAspectRatio="xMidYMid meet">
                    <metadata>
                        Created by potrace 1.15, written by Peter Selinger 2001-2017
                    </metadata>
                    <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)" fill="#000000"
                        stroke="none">
                        <path d="M2557 12785 c-196 -27 -239 -44 -254 -103 -8 -32 17 -314 59 -657 51
-423 50 -718 -3 -1080 -19 -124 -20 -152 -9 -245 26 -240 99 -493 312 -1085
160 -444 180 -527 180 -740 0 -142 -25 -292 -65 -392 -13 -32 -47 -83 -82
-123 -143 -161 -637 -873 -791 -1141 -236 -412 -599 -1220 -857 -1909 -118
-316 -178 -507 -257 -815 -34 -132 -131 -485 -216 -785 -176 -620 -255 -931
-384 -1515 -50 -225 -113 -504 -141 -619 -55 -226 -57 -270 -18 -321 32 -39
109 -73 217 -95 130 -27 198 -62 317 -166 120 -104 192 -154 294 -204 153 -76
296 -104 392 -77 87 25 129 28 209 18 109 -14 173 -38 222 -83 103 -95 206
-144 371 -178 145 -31 183 -46 206 -86 12 -20 40 -43 71 -59 62 -31 188 -65
242 -65 49 0 100 -26 169 -86 94 -81 175 -108 429 -138 269 -33 872 -46 1155
-26 106 8 149 15 178 31 49 25 212 38 477 39 295 0 486 25 521 66 8 9 19 37
24 63 15 66 36 74 199 70 279 -7 282 -7 369 39 71 38 85 42 150 42 140 0 764
49 892 70 68 11 88 22 122 66 15 20 47 45 70 55 52 22 233 66 443 109 85 17
177 36 204 42 l48 11 -3 195 -4 195 152 43 c273 77 407 153 430 242 3 15 -3
66 -16 122 -44 188 -81 405 -141 822 -74 512 -104 689 -129 776 -11 37 -29
112 -42 167 -12 55 -37 144 -55 198 -27 76 -34 113 -34 171 0 50 -4 77 -14 85
-21 17 -61 114 -127 304 -229 657 -730 1836 -1075 2527 -95 190 -258 518 -362
730 -104 212 -232 455 -283 540 -273 457 -362 627 -398 759 -28 101 -44 268
-36 371 18 241 78 436 266 863 176 399 225 633 304 1442 72 735 94 911 150
1220 20 105 37 203 40 218 4 23 0 29 -22 38 -70 26 -215 52 -303 53 -87 1 -99
-1 -143 -27 -56 -33 -82 -66 -184 -239 -187 -313 -482 -638 -658 -723 -139
-67 -332 -116 -595 -152 -193 -26 -677 -26 -835 0 -289 48 -412 112 -618 327
-164 171 -282 343 -429 626 -44 84 -91 163 -105 174 -30 23 -56 24 -196 5z" />
                    </g>
                </svg>

            </div>

        </div>


        <div class="d-flex justify-content-center justify-content-lg-end">
            <button class="btn btn-dark col-11 col-lg-3 me-lg-5 me-0 "
                style="position: fixed; bottom: 20px;z-index: 3343434;"> send print</button>
        </div>

    </div>
    <div id="svg-modal" class="modal">
        <div class="modal-content">
            <span class="close" style="position: absolute;z-index: 56767867867867867867;">&times;</span>
            <div id="svg-container" class="d-flex justify-content-center"></div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const chooseImageBtn = document.getElementById('chooseImageBtn');
            chooseImageBtn.addEventListener('click', function() {
                const input = document.createElement('input');
                input.type = 'file';
                input.accept = 'image/*';
                input.onchange = function(event) {
                    const file = event.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            const img = document.getElementById('image');
                            img.src = e.target.result;

                            interact('#container img')
                                .draggable({
                                    listeners: {
                                        move(event) {
                                            const target = event.target;
                                            const x = (parseFloat(target.getAttribute(
                                                'data-x')) || 0) + event.dx;
                                            const y = (parseFloat(target.getAttribute(
                                                'data-y')) || 0) + event.dy;

                                            target.style.transform =
                                                `translate(${x}px, ${y}px)`;
                                            target.setAttribute('data-x', x);
                                            target.setAttribute('data-y', y);
                                        },
                                    },
                                    touchAction: 'none',
                                    inertia: true,
                                    modifiers: [
                                        interact.modifiers.restrictRect({
                                            restriction: 'parent',
                                            endOnly: true
                                        })
                                    ],
                                })
                                .resizable({
                                    edges: {
                                        left: true,
                                        right: true,
                                        bottom: true,
                                        top: true
                                    },
                                    listeners: {
                                        move(event) {
                                            const target = event.target;
                                            let {
                                                x,
                                                y
                                            } = target.dataset;
                                            x = (parseFloat(x) || 0) + event.deltaRect.left;
                                            y = (parseFloat(y) || 0) + event.deltaRect.top;

                                            target.style.width = `${event.rect.width}px`;
                                            target.style.height = `${event.rect.height}px`;

                                            target.dataset.x = x;
                                            target.dataset.y = y;
                                            target.style.transform =
                                                `translate(${x}px, ${y}px)`;
                                        },
                                    },
                                    modifiers: [
                                        interact.modifiers.restrictSize({
                                            min: {
                                                width: 50,
                                                height: 50
                                            },
                                        }),
                                    ],
                                });
                        };
                        reader.readAsDataURL(file);
                    }
                };
                input.click();
            });

            const svgItems = document.querySelectorAll(".svg-item");
            const contentDisplay = document.getElementById("content-display");
            const colorPicker = document.getElementById("color-picker");
            const colorSwatches = document.querySelectorAll(".color-swatch");
            const fullScreenButton = document.getElementById("full-screen-button");
            const modal = document.getElementById("svg-modal");
            const closeModal = document.querySelector(".close");
            const svgContainer = document.getElementById("svg-container");
            let currentSvg = null;

            svgItems.forEach(item => {
                item.addEventListener("click", () => {
                    const svgClone = item.querySelector("svg").cloneNode(true);
                    svgClone.classList.remove("small-svg");
                    svgClone.classList.add("large-svg");
                    if (currentSvg) {
                        contentDisplay.removeChild(currentSvg);
                    }
                    contentDisplay.appendChild(svgClone);
                    currentSvg = svgClone;

                    moveFillAttribute(currentSvg);
                });
            });

            colorPicker.addEventListener("input", (event) => {
                if (currentSvg) {
                    const selectedColor = event.target.value;
                    currentSvg.setAttribute("fill", selectedColor);
                }
            });

            colorSwatches.forEach(swatch => {
                swatch.addEventListener("click", () => {
                    if (currentSvg) {
                        const selectedColor = swatch.style.backgroundColor;
                        currentSvg.setAttribute("fill", selectedColor);
                    }
                });
            });

            fullScreenButton.addEventListener("click", () => {
                if (currentSvg) {
                    const svgClone = currentSvg.cloneNode(true);
                    svgClone.classList.remove("large-svg");
                    svgClone.style.width = "450px";
                    svgClone.style.height = "450px";
                    svgContainer.innerHTML = "";
                    svgContainer.appendChild(svgClone);
                    modal.style.display = "flex";
                    modal.style.justifyContent = "center";
                    modal.style.alignItems = "center";
                }
            });

            closeModal.addEventListener("click", () => {
                modal.style.display = "none";
            });

            window.addEventListener("click", (event) => {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            });

            function moveFillAttribute(svg) {
                const gElements = svg.querySelectorAll('g[fill]');
                gElements.forEach(g => {
                    const fillValue = g.getAttribute('fill');
                    if (fillValue) {
                        svg.setAttribute('fill', fillValue);
                        g.removeAttribute('fill');
                    }
                });
            }
        });
    </script>
</body>

</html>
