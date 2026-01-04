<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ ucfirst($language) }} Editor</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icons (Bootstrap Icons) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CodeMirror -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/codemirror.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/theme/dracula.min.css">

    <style>
        body {
            background: #f5f7fa;
        }

        .sidebar {
            width: 70px;
            background: #0c0c0c;
            color: #fff;
            min-height: 100vh;
        }

        .sidebar a {
            color: #fff;
            font-size: 22px;
            padding: 20px 0;
            display: block;
            text-align: center;
            transition: 0.3s;
        }

        .CodeMirror {
            height: 450px;
            border-radius: 6px;
        }

        #output {
            background: rgb(230, 226, 226);
            color: hsl(0, 0%, 0%);
            height: 450px;
            padding: 15px;
            border-radius: 6px;
            overflow-y: auto;
        }

        .sidebar a.active {
            background-color: #0d6efd;
            border-radius: 0px;
            width: 100%;
        }

        body.fullscreen-mode .sidebar {
            display: none !important;
        }

        body.fullscreen-mode .container-fluid {
            width: 100vw !important;
            margin-left: 0 !important;
            padding-left: 20px;
            padding-right: 20px;
        }

        body.fullscreen-mode .CodeMirror body.light-mode {
            --bg-color: #f5f7fa;
            --text-color: #000;
            --card-bg: #fff;
            --card-text: #000;
        }

        body.dark-mode {
            --bg-color: #0c0c0c;
            --text-color: #fff;
            --card-bg: #1a1a1a;
            --card-text: #fff;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
        }

        .card {
            background-color: var(--card-bg);
            color: var(--card-text);
        }

        /* Inputs and output use CSS variables now */
        textarea,
        pre,
        input {
            background-color: var(--card-bg);
            color: var(--card-text);
            border: 1px solid #444 !important;
            border-radius: 6px;
        }

        /* #output specifically */
        #output {
            background-color: var(--card-bg);
            color: var(--card-text);
        }

        #userInput {
            background-color: var(--card-bg);
            color: var(--card-text);
        }


        /* #shareModal .modal-content {
            background: linear-gradient(180deg, #0f172a, #020617);
        }

        #shareModal .form-control::selection {
            background: #044deb;
            color: #fff;
        }

        #shareModal .btn-outline-primary:hover,
        #shareModal .btn-outline-success:hover,
        #shareModal .btn-outline-info:hover {
            transform: scale(1.05);
        } */


        body.dark-mode textarea::placeholder,
        body.dark-mode pre {
            color: #a09e9e !important;
        }


        .text-custom-theme {
            color: #000 !important;
        }

        body.dark-mode .text-custom-theme {
            color: #a09e9e !important;
        }

        .CodeMirror-line {
            border-color: transparent !important;
        }

        .min-w-35px {
            min-width: 35px;
        }

        .btn-theme {
            background-color: #212529;
            color: #fff;
            border: 1px solid #212529;
            transition: all 0.3s ease;
        }

        .btn-theme:hover {
            background-color: #343a40;
            border-color: #343a40;
            color: #fff;
        }

        body.dark-mode .btn-theme {
            background-color: #ffc107;
            color: #212529;
            border: 1px solid #ffc107;
        }

        body.dark-mode .btn-theme:hover {
            background-color: #e0a800;
            border-color: #e0a800;
            color: #212529;
        }

        .hw-social {
            height: 42px !important;
            width: 42px !important;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body class="dark-mode">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="" style="padding-left: 70px; margin:10px">
            <a class="navbar-brand fw-bold" href="#">Online Code Compiler</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="d-flex">

        <!--  Sidebar with Font Awesome Icons -->
        {{-- <div class="sidebar d-flex flex-column align-items-center shadow">
            <a href="{{ route('frontend.index') }}" title="Home"><i class="fa-solid fa-house"></i></a>

            <!-- Language links -->
            <a href="{{ route('frontend.editor', 'java') }}" title="Java"><i class="fa-brands fa-java"></i></a>
            <a href="{{ route('frontend.editor', 'python') }}" title="Python"><i class="fa-brands fa-python"></i></a>
            <a href="{{ route('frontend.editor', 'javascript') }}" title="JavaScript"><i
                    class="fa-brands fa-js"></i></a>
            <a href="{{ route('frontend.editor', 'php') }}" title="PHP"><i class="fa-brands fa-php"></i></a>
            <a href="{{ route('frontend.editor', 'html') }}" title="HTML"><i class="fa-brands fa-html5"></i></a>
            <a href="{{ route('frontend.editor', 'c') }}" title="C"><i class="fa-solid fa-c"></i></a>
            <a href="{{ route('frontend.editor', 'cpp') }}" title="C++" class="text-decoration-none"><i
                    class="fa-solid fa-c"></i>++</a>
            <a href="{{ route('frontend.editor', 'csharp') }}" title="C#" class="text-decoration-none"><i
                    class="fa-solid fa-c"></i>#</a>
            <a href="{{ route('frontend.editor', 'go') }}" title="GO"><i class="fa-brands fa-golang"></i></a>
            <a href="{{ route('frontend.editor', 'node') }}" title="Node.js"> <i class="fa-brands fa-node"></i> </a>

            <a href="{{ route('frontend.editor', 'typescript') }}" title="TypeScript">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-typescript" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm-1.139 7.488q-.585 0-1.006.244a1.67 1.67 0 0 0-.634.674 2.1 2.1 0 0 0-.225.996q0 .753.293 1.182.303.42.967.732l.469.215q.438.186.625.43.185.244.185.635 0 .478-.166.703-.156.224-.527.224-.361.001-.547-.244-.186-.243-.205-.752h-1.162q.02.996.498 1.524.479.527 1.386.527.909 0 1.417-.518.507-.517.507-1.484 0-.81-.332-1.289t-1.045-.79l-.449-.196q-.39-.166-.556-.381-.166-.214-.166-.576 0-.4.165-.596.177-.195.508-.195.361 0 .508.234.156.234.176.703h1.123q-.03-.976-.498-1.484-.47-.518-1.309-.518M7 7.596v1.113h1.3V14.5h1.221V8.709h1.289V7.596z" />
                </svg>
            </a>

            <a href="{{ route('frontend.editor', 'kotlin') }}" title="Kotlin"><i class="fa-solid fa-code"></i></a>
            <a href="{{ route('frontend.editor', 'swift') }}" title="Swift"><i class="fa-brands fa-swift"></i></a>
            <a href="{{ route('frontend.editor', 'dart') }}" title="Dart"><i class="fa-solid fa-code"></i></a>

            <!-- Theme toggle -->
            <a href="#" title="Theme"><i class="fa-solid fa-moon"></i></a>
        </div> --}}


        @php
            $currentLang = $language ?? '';
        @endphp

        <div class="sidebar d-flex flex-column align-items-center shadow">
            <a href="{{ route('frontend.index') }}" class="{{ request()->routeIs('frontend.index') ? 'active' : '' }}"
                title="Home">
                <i class="fa-solid fa-house"></i>
            </a>

            <!-- Language links -->
            <a href="{{ route('frontend.editor', 'java') }}" class="{{ $currentLang === 'java' ? 'active' : '' }}"
                title="Java">
                <i class="fa-brands fa-java"></i>
            </a>

            <a href="{{ route('frontend.editor', 'python') }}" class="{{ $currentLang === 'python' ? 'active' : '' }}"
                title="Python">
                <i class="fa-brands fa-python"></i>
            </a>

            <a href="{{ route('frontend.editor', 'javascript') }}"
                class="{{ $currentLang === 'javascript' ? 'active' : '' }}" title="JavaScript">
                <i class="fa-brands fa-js"></i>
            </a>

            <a href="{{ route('frontend.editor', 'php') }}" class="{{ $currentLang === 'php' ? 'active' : '' }}"
                title="PHP">
                <i class="fa-brands fa-php"></i>
            </a>

            <a href="{{ route('frontend.editor', 'html') }}" class="{{ $currentLang === 'html' ? 'active' : '' }}"
                title="HTML">
                <i class="fa-brands fa-html5"></i>
            </a>

            <a href="{{ route('frontend.editor', 'c') }}" class="{{ $currentLang === 'c' ? 'active' : '' }}"
                title="C">
                <i class="fa-solid fa-c"></i>
            </a>

            <a href="{{ route('frontend.editor', 'cpp') }}" class="{{ $currentLang === 'cpp' ? 'active' : '' }}"
                style="text-decoration: none" title="C++">
                <i class="fa-solid fa-c"></i>++
            </a>

            <a href="{{ route('frontend.editor', 'csharp') }}" class="{{ $currentLang === 'csharp' ? 'active' : '' }}"
                style="text-decoration: none" title="C#">
                <i class="fa-solid fa-c"></i>#
            </a>

            <a href="{{ route('frontend.editor', 'go') }}" class="{{ $currentLang === 'go' ? 'active' : '' }}"
                title="Go">
                <i class="fa-brands fa-golang"></i>
            </a>

            <a href="{{ route('frontend.editor', 'node') }}" class="{{ $currentLang === 'node' ? 'active' : '' }}"
                title="Node.js">
                <i class="fa-brands fa-node"></i>
            </a>

            <a href="{{ route('frontend.editor', 'typescript') }}"
                class="{{ $currentLang === 'typescript' ? 'active' : '' }}" title="TypeScript">
                <i class="fa-solid fa-code"></i>
            </a>

            {{-- <a href="{{ route('frontend.editor', 'kotlin') }}" class="{{ $currentLang === 'kotlin' ? 'active' : '' }}" title="Kotlin">
            <i class="fa-solid fa-code"></i>
            </a> --}}

            <a href="{{ route('frontend.editor', 'swift') }}" class="{{ $currentLang === 'swift' ? 'active' : '' }}"
                title="Swift">
                <i class="fa-brands fa-swift"></i>
            </a>

            <a href="{{ route('frontend.editor', 'dart') }}" class="{{ $currentLang === 'dart' ? 'active' : '' }}"
                title="Dart">
                <i class="fa-solid fa-code"></i>
            </a>

            <!-- Theme toggle -->
            {{-- <a href="#" id="themeToggle" title="Theme"><i class="fa-solid fa-moon"></i></a> --}}

        </div>


        <!-- Main Content -->

        <div class="container-fluid d-flex flex-column p-3">
            {{-- <h4 class="mb-3 text-center">{{ ucfirst($language) }} Editor</h4> --}}

            <div class="row flex-grow-1 g-3 h-100">
                <!-- Editor -->
                <div class="col-md-7 d-flex flex-column h-100">
                    <div class="card shadow-sm flex-grow-1 d-flex flex-column">
                        <div class="card-body d-flex flex-column p-3 flex-grow-1">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="fw-bold mb-1">
                                    <i class="fa-solid fa-code me-2"></i> {{ ucfirst($language) }} Editor
                                </h5>
                                <div class="d-flex align-items-center gap-2">
                                    <button id="fullscreenBtn" class="btn btn-secondary ms-2 btn-sm min-w-35px">
                                        <i class="fa-solid fa-expand"></i>
                                    </button>

                                    <a href="#" id="themeToggle" title="Theme"
                                        class="btn btn-theme btn-sm min-w-35px">
                                        <i class="fa-solid fa-moon"></i>
                                    </a>

                                    <button id="shareBtn" class="btn btn-success btn-sm">
                                        <i class="fa-solid fa-share-nodes me-1"></i> Share
                                    </button>

                                    <button id="runBtn" class="btn btn-primary btn-sm">
                                        <i class="fas fa-play me-2"></i> Run Code
                                    </button>

                                </div>
                            </div>
                            <textarea id="code" class="flex-grow-1 border-none"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Output -->
                <div class="col-md-5 d-flex flex-column h-100">

                    <div class="card shadow-sm flex-grow-1 d-flex flex-column">
                        <div class="card-body d-flex flex-column p-3 flex-grow-1">
                            <div class="mb-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h5 class="fw-bold mb-0">
                                        <i class="fas fa-terminal me-2"></i>User Input (stdin)
                                    </h5>

                                    <button id="clearBtn" class="btn btn-danger btn-sm">
                                        Clear
                                    </button>
                                </div>
                                <textarea id="userInput" class="form-control" rows="3" placeholder="Input for your program"></textarea>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="fw-bold mb-1 mt-1"><i class="fa-solid fa-tv me-2"></i></i>Output</h5>
                            </div>
                            <pre id="output" class="flex-grow-1 p-3 rounded">Output will appear here...</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Dark Share Modal -->
    <div class="modal fade" id="shareModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content shadow-lg rounded-4 bg-dark text-light">

                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-bold text-white">
                        Share your code
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body pt-2">
                    <p class="text-secondary small">
                        Anyone with this link can view & edit the code.
                    </p>

                    <!-- Share link -->
                    <div class="input-group mb-3">
                        <input type="text" id="shareLinkInput"
                            class="form-control form-control-lg bg-black text-light border-secondary" readonly>

                        <button class="btn btn-primary px-4" id="copyShareLink">
                            Copy
                        </button>
                    </div>

                    <!-- Social buttons -->
                    <div class="text-center mt-4">
                        <p class="fw-semibold text-light mb-3">Share On</p>

                        <div class="d-flex justify-content-center gap-3">
                            <a href="#" id="shareFacebook"
                                class="btn btn-outline-primary rounded-circle hw-social">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a href="#" id="shareTwitter"
                                class="btn btn-outline-light rounded-circle hw-social">
                                <i class="fab fa-x-twitter"></i>
                            </a>

                            <a href="#" id="shareWhatsApp"
                                class="btn btn-outline-success rounded-circle hw-social">
                                <i class="fab fa-whatsapp"></i>
                            </a>

                            <a href="#" id="shareLinkedIn"
                                class="btn btn-outline-info rounded-circle hw-social">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="modal-footer border-0 justify-content-center pt-0">
                    <small class="text-secondary">
                        No login required • Permanent link
                    </small>
                </div>

            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="bg-primary text-white py-4 text-center mt-3">
        <div class="container">
            &copy; 2025 Online Code Compiler | Developed by Niaz SVD
        </div>
    </footer>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- CodeMirror core -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/codemirror.min.js"></script>

    <!-- Modes dependencies for HTMLMixed -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/mode/xml/xml.min.js"></script>
    <!-- javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/mode/javascript/javascript.min.js"></script>
    <!-- Other modes -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/mode/css/css.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/mode/htmlmixed/htmlmixed.min.js"></script>
    <!-- php -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/mode/php/php.min.js"></script>
    <!-- python -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/mode/python/python.min.js"></script>
    <!-- ruby -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/mode/ruby/ruby.min.js"></script>
    <!-- go -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/mode/go/go.min.js"></script>
    <!-- rust -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/mode/rust/rust.min.js"></script>
    <!-- Kotlin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/mode/clike/clike.min.js"></script>
    <!-- Swift -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/mode/swift/swift.min.js"></script>
    <!-- Dart -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/mode/dart/dart.min.js"></script>


    <script>
        var currentTheme = 'dark'; // default dark
        const themeToggle = document.getElementById('themeToggle');
        const themeIcon = themeToggle.querySelector('i'); // icon inside button

        themeToggle.addEventListener('click', function(e) {
            e.preventDefault();

            if (currentTheme === 'dark') {
                currentTheme = 'light';
                document.body.classList.remove('dark-mode');
                document.body.classList.add('light-mode');
                themeIcon.classList.remove('fa-moon');
                themeIcon.classList.add('fa-sun');

                // CodeMirror light theme
                editor.setOption('theme', 'default');
            } else {
                currentTheme = 'dark';
                document.body.classList.remove('light-mode');
                document.body.classList.add('dark-mode');
                themeIcon.classList.remove('fa-sun');
                themeIcon.classList.add('fa-moon');

                // CodeMirror dark theme
                editor.setOption('theme', 'dracula');
            }

            // Optional: adjust textarea/output colors (already using CSS variables)
            const inputs = document.querySelectorAll('textarea, pre');
            inputs.forEach(el => {
                el.style.backgroundColor = getComputedStyle(document.body).getPropertyValue('--card-bg');
                el.style.color = getComputedStyle(document.body).getPropertyValue('--card-text');
                el.style.borderColor = currentTheme === 'dark' ? '#444' : '#ccc';
            });
        });













        // var currentTheme = 'dracula'; // default theme
        // var themeIcon = document.querySelector('#themeToggle i');

        // document.getElementById('themeToggle').addEventListener('click', function(e) {
        //     e.preventDefault();
        //     if (currentTheme === 'dracula') {
        //         currentTheme = 'default';
        //         themeIcon.classList.remove('fa-moon');
        //         themeIcon.classList.add('fa-sun');
        //     } else {
        //         currentTheme = 'dracula';
        //         themeIcon.classList.remove('fa-sun');
        //         themeIcon.classList.add('fa-moon');
        //     }

        //     editor.setOption('theme', currentTheme);
        // });


        var language = "{{ $language }}";

        const modeMap = {
            html: 'htmlmixed',
            javascript: 'javascript',
            typescript: 'javascript',
            node: 'javascript',
            php: 'php',
            c: 'text/x-c++src',
            cpp: 'text/x-c++src',
            csharp: 'text/x-csharp',
            dotnet: 'text/x-csharp',
            java: 'text/x-java',
            kotlin: 'text/x-kotlin',
            swift: 'swift',
            dart: 'dart',
            python: 'python',
            ruby: 'ruby',
            go: 'go',
            rust: 'rust'
        };


        var userInput = document.getElementById('userInput');

        const noInputLanguages = ['swift', 'javascript', 'javascript', 'typescript', 'node', 'html'];

        if (noInputLanguages.includes(language)) {
            userInput.value = '';
            userInput.disabled = true;
            userInput.placeholder = 'Input not supported for this language';
        } else {
            userInput.disabled = false;
            userInput.placeholder = 'Input for your program (when need)';
        }

        var editor = CodeMirror.fromTextArea(document.getElementById('code'), {
            mode: modeMap[language] || 'python',
            theme: 'dracula',
            lineNumbers: true,
            tabSize: 4,
            viewportMargin: Infinity
        });
        editor.setSize('100%', '100%');

        document.getElementById('runBtn').addEventListener('click', function() {
            var code = editor.getValue();
            var input = document.getElementById('userInput').value;
            var output = document.getElementById('output');
            output.innerHTML = "";

            // HTML preview
            if (language === 'html') {
                var iframe = document.createElement('iframe');
                iframe.style.width = "100%";
                iframe.style.height = "800px";
                iframe.srcdoc = code;
                output.appendChild(iframe);
                return;
            }

            var spinner = document.createElement('div');
            spinner.innerText = "Running...";
            spinner.classList.add('text-custom-theme', 'fw-bold');
            output.appendChild(spinner);

            fetch("/run-code", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({
                        code: code,
                        language: language,
                        stdin: input
                    })
                })
                .then(res => res.json())
                .then(data => {
                    output.innerText = "";

                    if (data.stderr) {
                        output.innerText = "Error:\n" + data.stderr;
                    } else if (data.stdout) {
                        output.innerText = data.stdout;
                    } else if (data.output) {
                        output.innerText = data.output;
                    } else if (data.message) {
                        output.innerText = data.message;
                    } else {
                        output.innerText = JSON.stringify(data);
                    }
                })
                .catch(err => {
                    output.innerText = "Error running code!";
                    console.error(err);
                });
        });
    </script>

    @if (isset($sharedCode))
        <script>
            editor.setValue(@json($sharedCode->code));
            document.getElementById('userInput').value = @json($sharedCode->stdin);
        </script>
    @endif

    <script>
        const shareBtn = document.getElementById('shareBtn');

        if (shareBtn) {
            shareBtn.addEventListener('click', function() {
                fetch("{{ route('frontend.shareCode') }}", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": "{{ csrf_token() }}"
                        },
                        body: JSON.stringify({
                            language: language,
                            code: editor.getValue(),
                            stdin: document.getElementById('userInput').value
                        })
                    })
                    .then(res => res.json())
                    .then(data => {
                        const link = data.url;

                        // set input
                        document.getElementById('shareLinkInput').value = link;

                        // social urls
                        document.getElementById('shareFacebook').href =
                            `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(link)}`;

                        document.getElementById('shareTwitter').href =
                            `https://twitter.com/intent/tweet?url=${encodeURIComponent(link)}`;

                        document.getElementById('shareWhatsApp').href =
                            `https://wa.me/?text=${encodeURIComponent(link)}`;

                        document.getElementById('shareLinkedIn').href =
                            `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(link)}`;

                        // open modal
                        new bootstrap.Modal(
                            document.getElementById('shareModal')
                        ).show();
                    });
            });
        }

        // copy button
        document.getElementById('copyShareLink').addEventListener('click', function() {
            const input = document.getElementById('shareLinkInput');
            navigator.clipboard.writeText(input.value);

            this.innerHTML = "Copied ✔";
            this.classList.remove('btn-primary');
            this.classList.add('btn-success');

            setTimeout(() => {
                this.innerHTML = "Copy";
                this.classList.remove('btn-success');
                this.classList.add('btn-primary');
            }, 1500);
        });
    </script>

    <script>
        const clearBtn = document.getElementById('clearBtn');
        if (clearBtn) {
            clearBtn.addEventListener('click', function() {

                // clear output
                const outputBox = document.getElementById('output');
                if (outputBox) {
                    outputBox.innerHTML = '';
                }

                // clear stdin
                const inputBox = document.getElementById('userInput');
                if (inputBox) {
                    inputBox.value = '';
                }
            });
        }
    </script>



    <script>
        const fullscreenBtn = document.getElementById('fullscreenBtn');
        const sidebar = document.querySelector('.sidebar');
        const container = document.querySelector('.container-fluid');

        fullscreenBtn.addEventListener('click', function() {
            document.body.classList.toggle('fullscreen-mode');

            if (document.body.classList.contains('fullscreen-mode')) {
                fullscreenBtn.innerHTML = '<i class="fa-solid fa-compress"></i>';
            } else {
                fullscreenBtn.innerHTML = '<i class="fa-solid fa-expand"></i>';
            }
        });
    </script>



</body>

</html>
