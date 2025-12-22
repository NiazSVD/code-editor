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
    </style>
</head>

<body>

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
        <div class="sidebar d-flex flex-column align-items-center shadow">
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
        </div>

        <!-- Main Content -->


        <div class="container-fluid vh-100 d-flex flex-column p-3">
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
                                <button id="runBtn" class="btn btn-primary">
                                    <i class="fas fa-play me-2"></i> Run Code
                                </button>
                            </div>
                            <textarea id="code" class="flex-grow-1"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Output -->
                <div class="col-md-5 d-flex flex-column h-100">
                    <div class="card shadow-sm flex-grow-1 d-flex flex-column">
                        <div class="card-body d-flex flex-column p-3 flex-grow-1">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="fw-bold mb-1 mt-1"><i class="fas fa-terminal me-2"></i>Output</h5>
                            </div>
                            <pre id="output" class="flex-grow-1 p-3 rounded">Output will appear here...</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        {{-- <div class="container-fluid p-4">
            <h4 class="mb-3">{{ ucfirst($language) }} Editor</h4>

            <div class="row g-3">
                <!-- Editor -->
                <div class="col-md-6">
                    <div class="card shadow-sm p-3">
                        <h6 class="fw-bold mb-2">Code</h6>
                        <textarea id="code"></textarea>
                        <button id="runBtn" class="btn btn-primary mt-3 w-100">
                            <i class="fas fa-play"></i> Run Code
                        </button>
                    </div>
                </div>

                <!-- Output -->
                <div class="col-md-6">
                    <div class="card shadow-sm p-3">
                        <h6 class="fw-bold mb-2">Output</h6>
                        <pre id="output">Output will appear here...</pre>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

    <!-- Footer -->
    <footer class="bg-primary text-white py-4 text-center">
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
            java: 'text/x-java',
            kotlin: 'text/x-kotlin',
            swift: 'swift',
            dart: 'dart',
            python: 'python',
            ruby: 'ruby',
            go: 'go',
            rust: 'rust'
        };

        // var editor = CodeMirror.fromTextArea(document.getElementById('code'), {
        //     mode: modeMap[language] || 'python',
        //     theme: 'dracula',
        //     lineNumbers: true,
        //     tabSize: 4
        // });

        var editor = CodeMirror.fromTextArea(document.getElementById('code'), {
            mode: 'javascript', // or language
            theme: 'dracula',
            lineNumbers: true,
            tabSize: 4,
            viewportMargin: Infinity
        });
        editor.setSize('100%', '100%');

        document.getElementById('runBtn').addEventListener('click', function() {
            var code = editor.getValue();
            var output = document.getElementById('output');
            output.innerHTML = "";

            // HTML preview
            if (language === 'html') {
                var iframe = document.createElement('iframe');
                iframe.style.width = "100%";
                iframe.style.height = "400px";
                iframe.srcdoc = code;
                output.appendChild(iframe);
                return;
            }

            var spinner = document.createElement('div');
            spinner.innerText = "Running...";
            spinner.classList.add('text-black', 'fw-bold');
            output.appendChild(spinner);

            fetch("/run-code", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({
                        code: code,
                        language: language
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

</body>

</html>
