<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Code Compiler</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icons (Bootstrap Icons) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">


    <style>
        body {
            padding-top: 50px;
            background-color: #f8f9fa;
        }

        .language-card {
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .language-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .language-icon {
            font-size: 3rem;
            color: #0d6efd;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Online Code Compiler</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-primary text-white py-5 text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Choose Your Programming Language</h1>
            <p class="lead mb-4">Click on a language to write and run code online instantly.</p>
        </div>
    </section>

    <section class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <input type="text" id="languageSearch" class="form-control" placeholder="Search Language...">
            </div>
        </div>
    </section>


    <!-- Languages Grid -->
    <section class="container">
        <div class="row g-4 justify-content-center">

            <!-- Java -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'java') }}'">
                    <i class="fa-brands fa-java fa-3x" style="color: #B197FC;"></i>
                    <h5 class="mt-3 fw-bold">Java</h5>
                </div>
            </div>

            <!-- Python -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'python') }}'">
                    <i class="fa-brands fa-python fa-3x" style="color: #B197FC;"></i>
                    <h5 class="mt-3 fw-bold">Python</h5>
                </div>
            </div>

            <!-- JavaScript -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'javascript') }}'">
                    <i class="fa-brands fa-square-js fa-3x" style="color: #FFD43B;"></i>
                    <h5 class="mt-3 fw-bold">JavaScript</h5>
                </div>
            </div>

            <!-- PHP -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'php') }}'">
                    <i class="fa-brands fa-php fa-3x" style="color: #74C0FC;"></i>
                    <h5 class="mt-3 fw-bold">PHP</h5>
                </div>
            </div>

            <!-- C -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'c') }}'">
                    <i class="fa-solid fa-c fa-3x" style="color: #e2733f;"></i>
                    <h5 class="mt-3 fw-bold">C</h5>
                </div>
            </div>

            <!-- C++ -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'cpp') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #ec6363;"></i>
                    <h5 class="mt-3 fw-bold">C++</h5>
                </div>
            </div>

            <!-- C# -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'csharp') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #74C0FC;"></i>
                    <h5 class="mt-3 fw-bold">C#</h5>
                </div>
            </div>

            <!-- HTML -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'html') }}'">
                    <i class="fa-brands fa-html5 fa-3x" style="color: #db3376;"></i>
                    <h5 class="mt-3 fw-bold">HTML</h5>
                </div>
            </div>

            <!-- Ruby -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'ruby') }}'">
                    <i class="fa-solid fa-gem fa-3x" style="color: #df3a81;"></i>
                    <h5 class="mt-3 fw-bold">Ruby</h5>
                </div>
            </div>

            <!-- Go -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'go') }}'">
                    <i class="fa-brands fa-golang fa-3x" style="color: #74C0FC;"></i>
                    <h5 class="mt-3 fw-bold">GO</h5>
                </div>
            </div>

            <!-- Rust -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'rust') }}'">
                    <i class="fa-solid fa-cubes-stacked language-icon" style="color: #DEA584;"></i>
                    <h5 class="mt-3 fw-bold">Rust</h5>
                </div>
            </div>

            <!-- Node Js-->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'node') }}'">
                    <i class="fa-brands fa-node fa-3x" style="color: #0ac720;"></i>
                    <h5 class="mt-3 fw-bold">Node.js</h5>
                </div>
            </div>

            <!-- TypeScript -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'typescript') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #74C0FC;"></i>
                    <h5 class="mt-3 fw-bold">TypeScript</h5>
                </div>
            </div>

            <!-- Kotlin -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'kotlin') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #ec6363;"></i>
                    <h5 class="mt-3 fw-bold">Kotlin</h5>
                </div>
            </div>

            <!-- Swift -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'swift') }}'">
                    <i class="fa-brands fa-swift fa-3x" style="color: #f08a36;"></i>
                    <h5 class="mt-3 fw-bold">Swift</h5>
                </div>
            </div>

            <!-- Dart -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'dart') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #74C0FC;"></i>
                    <h5 class="mt-3 fw-bold">Dart</h5>
                </div>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-white py-4 mt-5 text-center">
        <div class="container">
            &copy; 2025 Online Code Compiler | Developed by Niaz SVD
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const searchInput = document.getElementById('languageSearch');
        const languageCards = document.querySelectorAll('.language-card');

        searchInput.addEventListener('input', function() {
            const query = this.value.toLowerCase();

            languageCards.forEach(card => {
                const langName = card.querySelector('h5').innerText.toLowerCase();
                if (langName.includes(query)) {
                    card.parentElement.style.display = 'block'; // col wrapper
                } else {
                    card.parentElement.style.display = 'none';
                }
            });
        });
    </script>


</body>

</html>
