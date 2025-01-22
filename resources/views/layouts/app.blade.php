<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="คำอธิบายเว็บไซต์">
    <title>@yield('title', 'Default Title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        @font-face {
            font-family: 'th-krub';
            src: url('/fonts/TH-Krub.ttf') format('woff2');
            font-weight: normal;
        }

        @font-face {
            font-family: 'th-krub';
            src: url('/fonts/TH-Krub-Bold.ttf') format('woff2');
            font-weight: bold;
        }

        body {
            font-family: 'th-krub', sans-serif;
            font-size: 20px;
        }

        /* เปลี่ยนสีของแท็บที่ active */
        .nav-link.active {
            color: white;
            border-radius: 0px;
            font-weight: bold;
        }

        /* เปลี่ยนสีของแท็บเมื่อ hover */
        .nav-link:hover {
            background-color: #f1f1f1;
            /* สีพื้นหลังเมื่อ hover */
            color: #5a9bd5;
            /* สีข้อความเมื่อ hover */
            border-radius: 0px;
            border: 0px solid #000;
        }

        .nav-link {
            color: #808080;
            /* สีข้อความเมื่อแท็บไม่ active */

            border: 0px solid #000;
        }

        /* เมื่อ hover บนรายการใน dropdown */
        .dropdown-item:hover {
            background-color: #f1f1f1;
            /* เปลี่ยนพื้นหลังเมื่อ hover */
            color: #5a9bd5;
            /* เปลี่ยนสีข้อความเมื่อ hover */
        }

        /* หากต้องการให้เมนู logout เปลี่ยนสีเมื่อ hover */
        .dropdown-item.text-danger:hover {
            background-color: #ffebeb;
            /* สีพื้นหลังเมื่อ hover */
            color: #dc3545;
            /* เปลี่ยนสีข้อความให้เข้มขึ้น */
        }

        /* ปรับขนาด scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            /* ความกว้างของ scrollbar */
            height: 8px;
            /* ความสูงของ scrollbar ในกรณีที่เลื่อนแนวนอน */
        }

        /* รูปลักษณ์ของ scrollbar thumb (ส่วนที่เลื่อน) */
        ::-webkit-scrollbar-thumb {
            background-color: #5a9bd5;
            /* สีของ thumb */
            border-radius: 10px;
            /* ขอบโค้งมน */
        }

        /* เมื่อ hover บน scrollbar thumb */
        ::-webkit-scrollbar-thumb:hover {
            background-color: #398cd4;
            /* สีที่เปลี่ยนเมื่อ hover */
        }

        /* รูปลักษณ์ของ track (พื้นหลังของ scrollbar) */
        ::-webkit-scrollbar-track {
            background-color: #f1f1f1;
            /* สีพื้นหลังของ track */
            border-radius: 10px;
            /* ขอบโค้งมน */
        }

        /* ปรับขนาด scrollbar สำหรับกรณีเลื่อนแนวนอน */
        ::-webkit-scrollbar-horizontal {
            height: 6px;
        }

        /* ปรับ scrollbar สำหรับกรณีเลื่อนแนวตั้ง */
        ::-webkit-scrollbar-vertical {
            width: 6px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 border-bottom">
        <!-- Logo -->
        <a class="navbar-brand text-uppercase fs-1" href="#"><span style="color: #5a9bd5">Sarabun</span> Demo</a>

        <!-- Spacer -->
        <div class="flex-grow-1"></div>

        <!-- User Account Dropdown -->
        <div class="dropdown">
            <button class="btn btn-light dropdown-toggle d-flex align-items-center" id="dropdownMenuButton"
                data-bs-toggle="dropdown" aria-expanded="false">
                <!-- ชื่อและตำแหน่งงาน -->
                <div class="text-end lh-1">
                    <span class="d-block fs-4 fw-bold" style="color: #5a9bd5;">กระเพรา</span>
                    <small class="fs-5" style="color: #808080;">นักพัฒนาเว็บไซต์</small>
                </div>
                <!-- รูปโปรไฟล์ -->
                <img src="{{ asset('images/1006-200x200.jpg') }}" alt="User Avatar"
                    class="rounded-circle mx-2 border border-gray" style="width: 50px; height: 50px;" />
            </button>

            <!-- เมนู Dropdown -->
            <ul class="dropdown-menu dropdown-menu-end bg-light text-dark fs-5" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item text-danger" href="#">Logout</a></li>
            </ul>
        </div>

    </nav>

    <!-- Tabs -->
    <div>
        <!-- Tab Navigation -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab"
                    aria-controls="home" aria-selected="true">รับหนังสือ</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                    aria-controls="profile" aria-selected="false">แฟ้มบนโต๊ะ</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tracking-tab" data-bs-toggle="tab" href="#tracking" role="tab"
                    aria-controls="tracking" aria-selected="false">ติดตามหนังสือ</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="create-tab" data-bs-toggle="tab" href="#create" role="tab"
                    aria-controls="create" aria-selected="false">สร้างหนังสือ</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="send-tab" data-bs-toggle="tab" href="#send" role="tab"
                    aria-controls="send" aria-selected="false">ส่งหนังสือ</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="file-tab" data-bs-toggle="tab" href="#file" role="tab"
                    aria-controls="file" aria-selected="false">แฟ้มในตู้</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="result-tab" data-bs-toggle="tab" href="#result" role="tab"
                    aria-controls="result" aria-selected="false">ผลการดำเนินงาน</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="booking-tab" data-bs-toggle="tab" href="#booking" role="tab"
                    aria-controls="booking" aria-selected="false">จองเลข</a>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content px-4" id="myTabContent">
            <!-- Home Tab -->
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    <!-- คอลัมน์ซ้ายสำหรับการกรอกข้อมูล -->
                    <div class="col-md-6 mt-4 p-3 rounded lh-1"
                        style="background-color: #f1f1f1; overflow:auto; max-height: 83vh;">
                        <div class="fs-3 fw-bold">ข้อมูลหนนังสือ</div>
                        <form>
                            <div class="mb-1 row">
                                <label for="registrationBook"
                                    class="col-sm-2 col-form-label text-end">สมุดทะเบียน</label>
                                <div class="col-sm-5 position-relative">
                                    <select class="form-control" id="registrationBookSelect" name="registrationBook">
                                        <option value="" disabled selected hidden>เลือกสมุดทะเบียน</option>
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                        <option value="option3">Option 3</option>
                                    </select>
                                    <span class="text-danger position-absolute fw-bold"
                                        style="top: 10%; right: 5px; transform: translateY(-50%);">*</span>
                                </div>
                                <label for="numberReceive" class="col-sm-2 col-form-label text-end">เลขที่รับ</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="numberReceive"
                                        name="numberReceive" placeholder="เลขที่รับ" readonly>
                                </div>
                            </div>
                            <hr>
                            <div class="mb-1 row">
                                <label for="bookNumber" class="col-sm-2 col-form-label text-end">เลขที่หนังสือ</label>
                                <div class="col-sm-3 position-relative">
                                    <input type="text" class="form-control" id="bookNumber" name="bookNumber"
                                        placeholder="กรอกเลขที่หนังสือ">
                                    <span class="text-danger position-absolute fw-bold"
                                        style="top: 10%; right: 5px; transform: translateY(-50%);">*</span>
                                </div>
                                <div class="col-sm-1  fs-1 p-0 text-center">/</div>
                                <div class="col-sm-3">
                                    <select class="form-control" id="bookNumberSelect" name="bookNumberSelect">
                                        <option value="" disabled selected hidden>เลือกเลขมั้ง</option>
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                        <option value="option3">Option 3</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 position-relative">
                                    <input type="text" class="form-control" id="bookNumberDetail"
                                        name="bookNumberDetail" placeholder="เลขมั้ง">
                                    <span class="text-danger position-absolute fw-bold"
                                        style="top: 10%; right: 5px; transform: translateY(-50%);">*</span>
                                </div>
                            </div>

                            <div class="mb-1 row">
                                <label for="speedLevel" class="col-sm-2 col-form-label text-end">ชั้นความเร็ว</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="speedLevel" name="speedLevel">
                                        <option value="" disabled selected hidden>เลือกชั้นความเร็ว</option>
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                        <option value="option3">Option 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="receivedDate"
                                    class="col-sm-2 col-form-label text-end">วันที่ได้รับ</label>
                                <div class="col-sm-3">
                                    <input type="date" class="form-control" id="receivedDate" name="receivedDate"
                                        placeholder="วันที่ได้รับ">
                                </div>
                                <label for="receivedDateInput"
                                    class="col-sm-2 col-form-label text-end">วันที่รับ</label>
                                <div class="col-sm-3">
                                    <input type="date" class="form-control" id="receivedDateInput"
                                        name="receivedDateInput" placeholder="วันที่รับ">
                                </div>
                                <div class="col-sm-2">
                                    <button class="btn btn-outline-dark pt-2"><i
                                            class="fa-solid fa-clock"></i></button>
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="registrationDate"
                                    class="col-sm-2 col-form-label text-end">ลงวันที่</label>
                                <div class="col-sm-5 position-relative">
                                    <input type="date" class="form-control" id="registrationDate"
                                        name="registrationDate" placeholder="ลงวันที่">
                                    <span class="text-danger position-absolute fw-bold"
                                        style="top: 10%; right: 5px; transform: translateY(-50%);">*</span>
                                </div>
                            </div>
                            <hr>
                            <div class="mb-2 row">
                                <label for="subject" class="col-sm-2 col-form-label text-end">เรื่อง</label>
                                <div class="col-sm-10 position-relative">
                                    <textarea class="form-control" id="subject" name="subject"></textarea>
                                    <span class="text-danger position-absolute fw-bold"
                                        style="top: 10%; right: 5px; transform: translateY(-50%);">*</span>
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="salutation" class="col-sm-2 col-form-label text-end">เรียน</label>
                                <div class="col-sm-10 position-relative">
                                    <input type="text" class="form-control" id="salutation" name="salutation">
                                    <span class="text-danger position-absolute fw-bold"
                                        style="top: 10%; right: 5px; transform: translateY(-50%);">*</span>
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="reference" class="col-sm-2 col-form-label text-end">อ้างถึง</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="reference" name="reference">
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="content" class="col-sm-2 col-form-label text-end">เนื้อหา</label>
                                <div class="col-sm-10 position-relative">
                                    <textarea class="form-control" id="content" name="content"></textarea>
                                    <span class="text-danger position-absolute fw-bold"
                                        style="top: 10%; right: 5px; transform: translateY(-50%);">*</span>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="remark" class="col-sm-2 col-form-label text-end">หมายเหตุ</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="remark" name="remark"></textarea>
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="source" class="col-sm-2 col-form-label text-end">จาก</label>
                                <div class="col-sm-8 position-relative">
                                    <select class="form-control" id="source" name="source">
                                        <option value="" disabled selected hidden></option>
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                        <option value="option3">Option 3</option>
                                    </select>
                                    <span class="text-danger position-absolute fw-bold"
                                        style="top: 10%; right: 5px; transform: translateY(-50%);">*</span>
                                </div>
                                <!-- Button trigger modal -->
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-outline-dark pt-2" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdropx">
                                        <i class="fa-solid fa-address-book"></i>
                                    </button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdropx" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">ปิด</button>
                                                <button type="button" class="btn btn-primary">เลือก</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="mb-1 row">
                                <label for="registrationBook"
                                    class="col-sm-2 col-form-label text-end">หมายเหตุ</label>
                                <div class="col-sm-3">
                                    <input type="checkbox" class="form-check-input fs-4" id="enableDate"
                                        onchange="toggleDateInput()">
                                </div>
                                <label for="registrationBook" class="col-sm-2 col-form-label text-end">วันที่</label>
                                <div class="col-sm-5">
                                    <input type="date" class="form-control" id="dateInput" disabled>
                                </div>
                            </div>

                            <script>
                                function toggleDateInput() {
                                    const checkbox = document.getElementById("enableDate");
                                    const dateInput = document.getElementById("dateInput");

                                    // ถ้า checkbox ถูกเลือก
                                    if (checkbox.checked) {
                                        dateInput.disabled = false; // เปิดให้กรอกวันที่
                                    } else {
                                        dateInput.disabled = true; // ปิดไม่ให้กรอกวันที่
                                        dateInput.value = ''; // ล้างค่าในช่องกรอกวันที่
                                    }
                                }
                            </script>

                            <hr>
                            <button type="submit" class="btn btn-primary w-100 fs-5 fw-bold"><i
                                    class="fa-solid fa-file-arrow-up"></i> บันทึก</button>
                        </form>

                    </div>

                    <!-- คอลัมน์ขวาสำหรับการแสดง Tab Menu -->
                    <div class="col-md-6">
                        <ul class="nav nav-tabs" id="myTab2" role="tablist" style="justify-content: flex-end;">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab2" data-bs-toggle="tab" href="#home2"
                                    role="tab" aria-controls="home2" aria-selected="true">หนังสือรับ</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab2" data-bs-toggle="tab" href="#profile2"
                                    role="tab" aria-controls="profile2"
                                    aria-selected="false">สิ่งที่ส่งมาด้วย</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="settings-tab2" data-bs-toggle="tab" href="#settings2"
                                    role="tab" aria-controls="settings2" aria-selected="false">อ้างถึง</a>
                            </li>
                        </ul>

                        <div class="tab-content border border-top-0" id="myTabContent2"
                            style="overflow:auto; max-height: 80vh; height: 80vh; ">
                            <div class="tab-pane fade show active" id="home2" role="tabpanel"
                                aria-labelledby="home-tab2">
                                <div id="drop-area"
                                    class="d-flex flex-column justify-content-center align-items-center mb-1 mx-3 text-uppercase fw-bold lh-1"
                                    style="max-height: 20vh; height: 20vh; border-bottom: 4px dotted #5a9bd5;">
                                    <p class="text-center fs-1" style="color: #5a9bd5">ลากและวางไฟล์ <i class="bi bi-file-earmark-pdf"></i></p>
                                    <!-- ปุ่มสำหรับเลือกไฟล์ -->
                                    <button id="customFileButton" class="btn btn-primary fs-5 px-5 shadow">
                                         เลือกไฟล์ <i class="bi bi-file-earmark-pdf"></i>
                                    </button>
                                    <input type="file" id="fileInput" accept="application/pdf" class="d-none">
                                    <!-- สคริปต์ -->
                                    <script>
                                        // ดึงปุ่มและ input ไฟล์
                                        const customFileButton = document.getElementById("customFileButton");
                                        const fileInput = document.getElementById("fileInput");

                                        // เมื่อคลิกปุ่ม ให้ทำงานเหมือนคลิก input file
                                        customFileButton.addEventListener("click", () => {
                                            fileInput.click();
                                        });
                                    </script>
                                </div>

                                <!-- พื้นที่ที่จะแสดงไฟล์ PDF ทุกหน้า -->
                                <div id="pdf-container" style="display: flex; flex-direction: column;"></div>



                                <script>
                                    // ฟังก์ชันสำหรับแสดงทุกหน้าใน PDF
                                    function renderPDF(pdfFile) {
                                        const reader = new FileReader();

                                        reader.onload = function(e) {
                                            const loadingTask = pdfjsLib.getDocument(e.target.result);
                                            loadingTask.promise.then(function(pdf) {
                                                // รับจำนวนหน้าทั้งหมดของ PDF
                                                const numPages = pdf.numPages;
                                                const container = document.getElementById('pdf-container');
                                                container.innerHTML = ''; // ลบเนื้อหาที่มีอยู่ก่อน

                                                // วาดทุกหน้า
                                                for (let pageNum = 1; pageNum <= numPages; pageNum++) {
                                                    pdf.getPage(pageNum).then(function(page) {
                                                        const canvas = document.createElement('canvas');
                                                        const context = canvas.getContext('2d');
                                                        const viewport = page.getViewport({
                                                            scale: 2
                                                        });

                                                        canvas.height = viewport.height;
                                                        canvas.width = viewport.width;

                                                        page.render({
                                                            canvasContext: context,
                                                            viewport: viewport
                                                        });

                                                        // เพิ่ม canvas ลงใน container
                                                        container.appendChild(canvas);
                                                    });
                                                }
                                            });
                                        };

                                        reader.readAsArrayBuffer(pdfFile);
                                    }

                                    // ฟังก์ชันเมื่อเลือกไฟล์จาก input
                                    document.getElementById('fileInput').addEventListener('change', function(event) {
                                        const file = event.target.files[0];
                                        if (file && file.type === 'application/pdf') {
                                            renderPDF(file);
                                        } else {
                                            alert('โปรดเลือกไฟล์ PDF');
                                        }
                                    });

                                    // ฟังก์ชันสำหรับการลากและวางไฟล์
                                    const dropArea = document.getElementById('drop-area');
                                    dropArea.addEventListener('dragover', function(event) {
                                        event.preventDefault();
                                        dropArea.style.backgroundColor = '#f0f0f0';
                                    });

                                    dropArea.addEventListener('dragleave', function() {
                                        dropArea.style.backgroundColor = 'transparent';
                                    });

                                    dropArea.addEventListener('drop', function(event) {
                                        event.preventDefault();
                                        dropArea.style.backgroundColor = 'transparent';
                                        const file = event.dataTransfer.files[0];
                                        if (file && file.type === 'application/pdf') {
                                            renderPDF(file);
                                        } else {
                                            alert('โปรดลากไฟล์ PDF');
                                        }
                                    });
                                </script>
                            </div>

                            <div class="tab-pane fade" id="profile2" role="tabpanel"
                                aria-labelledby="profile-tab2">
                                <p>This is the content for the Profile tab.</p>
                            </div>
                            <div class="tab-pane fade" id="settings2" role="tabpanel"
                                aria-labelledby="settings-tab2">
                                <p>This is the content for the Settings tab.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Other Tabs -->
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <h3>แฟ้มบนโต๊ะ</h3>
                <p>This is the content for the Profile tab.</p>
            </div>

            <div class="tab-pane fade" id="tracking" role="tabpanel" aria-labelledby="tracking-tab">
                <h3>ติดตามหนังสือ</h3>
                <p>This is the content for the Tracking tab.</p>
            </div>

            <div class="tab-pane fade" id="create" role="tabpanel" aria-labelledby="create-tab">
                <h3>สร้างหนังสือ</h3>
                <p>This is the content for the Create tab.</p>
            </div>

            <div class="tab-pane fade" id="send" role="tabpanel" aria-labelledby="send-tab">
                <h3>ส่งหนังสือ</h3>
                <p>This is the content for the Send tab.</p>
            </div>

            <div class="tab-pane fade" id="file" role="tabpanel" aria-labelledby="file-tab">
                <h3>แฟ้มในตู้</h3>
                <p>This is the content for the File tab.</p>
            </div>

            <div class="tab-pane fade" id="result" role="tabpanel" aria-labelledby="result-tab">
                <h3>ผลการดำเนินงาน</h3>
                <p>This is the content for the Result tab.</p>
            </div>

            <div class="tab-pane fade" id="booking" role="tabpanel" aria-labelledby="booking-tab">
                <h3>จองเลข</h3>
                <p>This is the content for the Booking tab.</p>
            </div>
        </div>
    </div>



    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>
