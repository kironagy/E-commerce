<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}">
    <title>Resizable and Draggable Image</title>
    <script src="https://cdn.jsdelivr.net/npm/interactjs/dist/interact.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

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

        #container2 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
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

        #image {
            position: absolute;
            top: auto;
            left: auto;
            z-index: 50000000000;
            transition: 0.3ms;
        }

        #image:hover {
            outline: 1px solid rgba(40, 113, 248, 0.274);
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
            padding: 0px;
            border: 1px solid #888;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;

        }

        #btn {
            position: absolute;
            bottom: 10px;
            left: 10px;
            z-index: 999999999999999999999;
        }

        .close {
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 30000000000;
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

        @media (min-width: 992px) {
            .col-lg-3 {
                flex: 0 0 auto;
                margin-right: 30px;
                width: 300px !important;
            }
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
                    Add Design
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
                    Full Screen
                </div>
            </div>
        </button>
    </div>

    <div id="container" class="resize-drag">
        <img id="image" src="">
    </div>
    <div class="d-flex justify-content-center flex-column flex-lg-row ">
        <div id="content-display">
            <!-- SVG will be displayed here -->
        </div>

        <div id="color-picker-box " class="bg-light px-4 rounded-3 py-5 color-picker-box ms-4 "
            style="position: absolute;z-index: 3343434;bottom:70px; right:50px;">
<div id="design-name" class="fw-bold fs-5 text-capitalize mb-3"></div>
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


                <div class=" svg-bar d-flex justify-content-center align-items-center  position-fixed bottom-0 "
                    style=" z-index: 3343434;">

                                                 @foreach ($desgines as $desgine)
                <div class="svg-item bg-light p-2 rounded-3 " data-content="content1"  data-name="{{ $desgine->name }}">
                    <!-- SVG 1 -->
                    <?php
                    $svgPath = "allImages/$desgine->img";
                    $svgContent = file_get_contents($svgPath);
                    ?>
                    <div id='svg'
                        style="width: 60px; height: 60px;display: flex;align-items: center;justify-items:center;justify-content: center">
                        {!! $svgContent !!}
                    </div>

                    {{-- <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="1280.000000pt"
                        height="1220.000000pt" viewBox="0 0 1280.000000 1220.000000"
                        preserveAspectRatio="xMidYMid meet">
                        <metadata>
                            Created by potrace 1.15, written by Peter Selinger 2001-2017
                        </metadata>
                    </svg> --}}
                </div>
                @endforeach




            </div>


            <div class="d-flex justify-content-center justify-content-lg-end">
                <button id='print' class="btn btn-dark col-11 col-lg-3 me-lg-3"
                    style="position: fixed; bottom: 20px;right:15px;z-index: 3343434;"> send print</button>
            </div>

        </div>
        <div id="svg-modal" class="modal">
            <span class="close">&times;</span>

            <div id='modal-content' class="modal-content">
                <div id="container2">


                </div>
                <div id="svg-container" class="d-flex justify-content-center align-items-center w-100 vh-100">

                </div>
            </div>

            <form action="{{ route('upload.desgine') }}" method="POST">
                @csrf
            </form>

        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const chooseImageBtn = document.getElementById('chooseImageBtn');
                const imgElement = document.getElementById('image');
                let imgX = 0;
                let imgY = 0;

                chooseImageBtn.addEventListener('click', function() {
                    const input = document.createElement('input');
                    input.type = 'file';
                    input.accept = 'image/*';
                    input.onchange = function(event) {
                        const file = event.target.files[0];
                        if (file) {
                            const reader = new FileReader();
                            reader.onload = function(e) {
                                imgElement.src = e.target.result;

                                interact('#image')
                                    .draggable({
                                        listeners: {
                                            move(event) {
                                                const target = event.target;
                                                imgX = (parseFloat(target.getAttribute('data-x')) ||
                                                    0) + event.dx;
                                                imgY = (parseFloat(target.getAttribute('data-y')) ||
                                                    0) + event.dy;
                                                target.style.transform =
                                                    `translate(${imgX}px, ${imgY }px)`;
                                                target.setAttribute('data-x', imgX);
                                                target.setAttribute('data-y', imgY);
                                                console.log(imgY);
                                            },
                                        },
                                        inertia: true,
                                        modifiers: [
                                            interact.modifiers.restrictRect({
                                                restriction: 'parent',
                                                endOnly: true
                                            })
                                        ],
                                        touchAction: 'none',
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
                const print = document.getElementById("print");
                const modal = document.getElementById("svg-modal");
                const closeModal = document.querySelector(".close");
                const svgContainer = document.getElementById("svg-container");
                const svgContainer2 = document.getElementById("container2");
                    const designNameElement = document.getElementById("design-name"); // العنصر الذي يحتوي على اسم التصميم

                let currentSvg = null;

                svgItems.forEach(item => {
                    item.addEventListener("click", (e) => {
                        const svgClone = item.querySelector("svg").cloneNode(true);
                        svgClone.classList.add("large-svg");

                        if (currentSvg) {
                            contentDisplay.removeChild(currentSvg);
                        }
                        contentDisplay.appendChild(svgClone);
                        currentSvg = svgClone;
                         const designName = item.getAttribute('data-name');
                        designNameElement.textContent = designName;

                        moveFillAttribute(svgClone);
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
                    if (currentSvg && imgElement.src) {
                        const svgClone = currentSvg.cloneNode(true);
                        // svgClone.classList.remove("large-svg");
                        svgClone.style.width = `${currentSvg.clientWidth}px`;
                        svgClone.style.height = `${currentSvg.clientHeight}px`;

                        const imgClone = imgElement.cloneNode(true);

                        imgClone.style.width = `${imgElement.clientWidth}px`;
                        imgClone.style.height = `${imgElement.clientHeight}px`;
                        imgClone.style.transform = `translate(${imgX}px, ${imgY }px)`;

                        imgClone.setAttribute('data-x', imgX);
                        // imgClone.setAttribute('data-y', imgY - 50);

                        svgContainer.innerHTML = "";
                        svgContainer2.innerHTML = "";
                        svgContainer2.appendChild(imgClone);
                        svgContainer.appendChild(svgClone);

                        modal.style.display = "flex";
                        modal.style.justifyContent = "center";
                        modal.style.alignItems = "center";
                        svgContainer.style.transform = `translate(0px, -10.1%)`;
                        console.log("IMGY", imgY);
                    }
                });
                print.addEventListener("click", () => {
                    if (currentSvg && imgElement.src) {
                        const svgClone = currentSvg.cloneNode(true);
                        // svgClone.classList.remove("large-svg");
                        svgClone.style.width = `${currentSvg.clientWidth}px`;
                        svgClone.style.height = `${currentSvg.clientHeight}px`;

                        const imgClone = imgElement.cloneNode(true);

                        imgClone.style.width = `${imgElement.clientWidth}px`;
                        imgClone.style.height = `${imgElement.clientHeight}px`;
                        imgClone.style.transform = `translate(${imgX}px, ${imgY }px)`;

                        imgClone.setAttribute('data-x', imgX);
                        // imgClone.setAttribute('data-y', imgY - 50);

                        svgContainer.innerHTML = "";
                        svgContainer2.innerHTML = "";
                        svgContainer2.appendChild(imgClone);
                        svgContainer.appendChild(svgClone);

                        modal.style.display = "flex";
                        modal.style.justifyContent = "center";
                        modal.style.alignItems = "center";
                        svgContainer.style.transform = `translate(0px, -10.1%)`;
                        var captureElement = document.getElementById('modal-content');
                        var form = document.getElementById('form');
                        var ImgData = "";
                        html2canvas(captureElement).then(canvas => {
                            // Create an anchor element to initiate download
                            var link = document.createElement('a');
                            link.download = 'capture.png';
                            link.href = canvas.toDataURL('image/png');
                            link.click();

                            // Append the anchor element to the document body
                            document.body.appendChild(link);

                            // Create a FormData object
                            var formData = new FormData();
                            // Append the canvas data URL to the FormData object
                            formData.append('image', canvas.toDataURL('image/png'));

                            // Create a form element
                            var form = document.createElement('form');
                            form.method = 'POST';
                            form.action = '{{ route('upload.desgine') }}';

                            // Append CSRF token input field to the form
                            var csrfTokenInput = document.createElement('input');
                            csrfTokenInput.type = 'hidden';
                            csrfTokenInput.name = '_token';
                            csrfTokenInput.value = '{{ csrf_token() }}';
                            form.appendChild(csrfTokenInput);

                            // Append the FormData input field to the form
                            var formDataInput = document.createElement('input');
                            formDataInput.type = 'hidden';
                            formDataInput.name = 'image';
                            formDataInput.value = canvas.toDataURL('image/png');
                            form.appendChild(formDataInput);

                            // Append the form to the document body
                            document.body.appendChild(form);

                            // Submit the form
                            form.submit();

                            // Clean up: remove the anchor and form elements from the DOM
                            document.body.removeChild(link);
                            document.body.removeChild(form);
                        });
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
