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

            <!-- 1. matl -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'matl') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #777;"></i>
                    <h5 class="mt-3 fw-bold">MATL</h5>
                </div>
            </div>

            <!-- 2. bash -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'bash') }}'">
                    <i class="fa-solid fa-terminal fa-3x" style="color: #4EAA4E;"></i>
                    <h5 class="mt-3 fw-bold">Bash</h5>
                </div>
            </div>

            <!-- 3. befunge93 -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'befunge93') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #9B59B6;"></i>
                    <h5 class="mt-3 fw-bold">Befunge93</h5>
                </div>
            </div>

            <!-- 4. bqn -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'bqn') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #FF5733;"></i>
                    <h5 class="mt-3 fw-bold">BQN</h5>
                </div>
            </div>

            <!-- 5. brachylog -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'brachylog') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #34495E;"></i>
                    <h5 class="mt-3 fw-bold">Brachylog</h5>
                </div>
            </div>

            <!-- 6. brainfuck -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'brainfuck') }}'">
                    <i class="fa-solid fa-bug fa-3x" style="color: #C70039;"></i>
                    <h5 class="mt-3 fw-bold">Brainfuck</h5>
                </div>
            </div>

            <!-- 7. cjam -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'cjam') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #16A085;"></i>
                    <h5 class="mt-3 fw-bold">CJam</h5>
                </div>
            </div>

            <!-- 8. clojure -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'clojure') }}'">
                    <i class="fa-solid fa-leaf fa-3x" style="color: #27AE60;"></i>
                    <h5 class="mt-3 fw-bold">Clojure</h5>
                </div>
            </div>

            <!-- 9. cobol -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'cobol') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #2980B9;"></i>
                    <h5 class="mt-3 fw-bold">COBOL</h5>
                </div>
            </div>

            <!-- 10. coffeescript -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'coffeescript') }}'">
                    <i class="fa-solid fa-mug-hot fa-3x" style="color: #6F4E37;"></i>
                    <h5 class="mt-3 fw-bold">CoffeeScript</h5>
                </div>
            </div>

            <!-- 11. cow -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'cow') }}'">
                    <i class="fa-solid fa-cow fa-3x" style="color: #D35400;"></i>
                    <h5 class="mt-3 fw-bold">Cow</h5>
                </div>
            </div>

            <!-- 12. crystal -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'crystal') }}'">
                    <i class="fa-solid fa-gem fa-3x" style="color: #00BCD4;"></i>
                    <h5 class="mt-3 fw-bold">Crystal</h5>
                </div>
            </div>

            <!-- 13. dart -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'dart') }}'">
                    <i class="fa-brands fa-dart fa-3x" style="color: #0175C2;"></i>
                    <h5 class="mt-3 fw-bold">Dart</h5>
                </div>
            </div>

            <!-- 14. dash -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'dash') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #34495E;"></i>
                    <h5 class="mt-3 fw-bold">Dash</h5>
                </div>
            </div>

            <!-- 15. typescript -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'typescript') }}'">
                    <i class="fa-brands fa-js fa-3x" style="color: #3178C6;"></i>
                    <h5 class="mt-3 fw-bold">TypeScript</h5>
                </div>
            </div>

            <!-- 16. javascript -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'javascript') }}'">
                    <i class="fa-brands fa-square-js fa-3x" style="color: #F0DB4F;"></i>
                    <h5 class="mt-3 fw-bold">JavaScript</h5>
                </div>
            </div>

            <!-- 17. basic.net -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'basic.net') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #FFD700;"></i>
                    <h5 class="mt-3 fw-bold">VB.NET</h5>
                </div>
            </div>

            <!-- 18. fsharp.net -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'fsharp.net') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #8B008B;"></i>
                    <h5 class="mt-3 fw-bold">F#</h5>
                </div>
            </div>

            <!-- 19. fsi -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'fsi') }}'">
                    <i class="fa-solid fa-terminal fa-3x" style="color: #8B008B;"></i>
                    <h5 class="mt-3 fw-bold">FSI</h5>
                </div>
            </div>

            <!-- 20. dragon -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'dragon') }}'">
                    <i class="fa-solid fa-dragon fa-3x" style="color: #E74C3C;"></i>
                    <h5 class="mt-3 fw-bold">Dragon</h5>
                </div>
            </div>

            <!-- 21. elixir -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'elixir') }}'">
                    <i class="fa-solid fa-gem fa-3x" style="color: #6C3483;"></i>
                    <h5 class="mt-3 fw-bold">Elixir</h5>
                </div>
            </div>

            <!-- 22. emacs -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'emacs') }}'">
                    <i class="fa-solid fa-terminal fa-3x" style="color: #4B0082;"></i>
                    <h5 class="mt-3 fw-bold">Emacs</h5>
                </div>
            </div>

            <!-- 23. emojicode -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'emojicode') }}'">
                    <i class="fa-solid fa-smile fa-3x" style="color: #F39C12;"></i>
                    <h5 class="mt-3 fw-bold">Emojicode</h5>
                </div>
            </div>

            <!-- 24. erlang -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'erlang') }}'">
                    <i class="fa-solid fa-cogs fa-3x" style="color: #B83998;"></i>
                    <h5 class="mt-3 fw-bold">Erlang</h5>
                </div>
            </div>

            <!-- 26. file -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'file') }}'">
                    <i class="fa-solid fa-file fa-3x" style="color: #95A5A6;"></i>
                    <h5 class="mt-3 fw-bold">File</h5>
                </div>
            </div>

            <!-- 27. forte -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'forte') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #1ABC9C;"></i>
                    <h5 class="mt-3 fw-bold">Forte</h5>
                </div>
            </div>

            <!-- 28. forth -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'forth') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #E67E22;"></i>
                    <h5 class="mt-3 fw-bold">Forth</h5>
                </div>
            </div>

            <!-- 29. freebasic -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'freebasic') }}'">
                    <i class="fa-solid fa-terminal fa-3x" style="color: #3498DB;"></i>
                    <h5 class="mt-3 fw-bold">FreeBasic</h5>
                </div>
            </div>

            <!-- 30. awk -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'awk') }}'">
                    <i class="fa-solid fa-terminal fa-3x" style="color: #2ECC71;"></i>
                    <h5 class="mt-3 fw-bold">Awk</h5>
                </div>
            </div>

            <!-- 31. c -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'c') }}'">
                    <i class="fa-solid fa-c fa-3x" style="color: #E74C3C;"></i>
                    <h5 class="mt-3 fw-bold">C</h5>
                </div>
            </div>

            <!-- 32. c++ -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'cpp') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #EC6363;"></i>
                    <h5 class="mt-3 fw-bold">C++</h5>
                </div>
            </div>

            <!-- 33. d -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'd') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #8E44AD;"></i>
                    <h5 class="mt-3 fw-bold">D</h5>
                </div>
            </div>

            <!-- 34. fortran -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'fortran') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #3498DB;"></i>
                    <h5 class="mt-3 fw-bold">Fortran</h5>
                </div>
            </div>

            <!-- 35. go -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'go') }}'">
                    <i class="fa-brands fa-golang fa-3x" style="color: #00ADD8;"></i>
                    <h5 class="mt-3 fw-bold">Go</h5>
                </div>
            </div>

            <!-- 36. golfscript -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'golfscript') }}'">
                    <i class="fa-solid fa-golf-ball fa-3x" style="color: #F1C40F;"></i>
                    <h5 class="mt-3 fw-bold">GolfScript</h5>
                </div>
            </div>

            <!-- 37. groovy -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'groovy') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #E67E22;"></i>
                    <h5 class="mt-3 fw-bold">Groovy</h5>
                </div>
            </div>

            <!-- 38. haskell -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'haskell') }}'">
                    <i class="fa-solid fa-h-square fa-3x" style="color: #5E5EFF;"></i>
                    <h5 class="mt-3 fw-bold">Haskell</h5>
                </div>
            </div>

            <!-- 39. husk -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'husk') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #9B59B6;"></i>
                    <h5 class="mt-3 fw-bold">Husk</h5>
                </div>
            </div>

            <!-- 40. iverilog -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'iverilog') }}'">
                    <i class="fa-solid fa-microchip fa-3x" style="color: #16A085;"></i>
                    <h5 class="mt-3 fw-bold">Iverilog</h5>
                </div>
            </div>

            <!-- 41. japt -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'japt') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #E67E22;"></i>
                    <h5 class="mt-3 fw-bold">Japt</h5>
                </div>
            </div>

            <!-- 42. java -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'java') }}'">
                    <i class="fa-brands fa-java fa-3x" style="color: #B197FC;"></i>
                    <h5 class="mt-3 fw-bold">Java</h5>
                </div>
            </div>

            <!-- 43. jelly -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'jelly') }}'">
                    <i class="fa-solid fa-gem fa-3x" style="color: #FF69B4;"></i>
                    <h5 class="mt-3 fw-bold">Jelly</h5>
                </div>
            </div>

            <!-- 44. julia -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'julia') }}'">
                    <i class="fa-solid fa-cubes-stacked fa-3x" style="color: #A569BD;"></i>
                    <h5 class="mt-3 fw-bold">Julia</h5>
                </div>
            </div>

            <!-- 45. kotlin -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'kotlin') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #EC6363;"></i>
                    <h5 class="mt-3 fw-bold">Kotlin</h5>
                </div>
            </div>

            <!-- 46. lisp -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'lisp') }}'">
                    <i class="fa-solid fa-leaf fa-3x" style="color: #27AE60;"></i>
                    <h5 class="mt-3 fw-bold">Lisp</h5>
                </div>
            </div>

            <!-- 47. llvm_ir -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'llvm_ir') }}'">
                    <i class="fa-solid fa-microchip fa-3x" style="color: #34495E;"></i>
                    <h5 class="mt-3 fw-bold">LLVM IR</h5>
                </div>
            </div>

            <!-- 48. lolcode -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'lolcode') }}'">
                    <i class="fa-solid fa-smile fa-3x" style="color: #F39C12;"></i>
                    <h5 class="mt-3 fw-bold">LOLCODE</h5>
                </div>
            </div>

            <!-- 49. lua -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'lua') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #0000FF;"></i>
                    <h5 class="mt-3 fw-bold">Lua</h5>
                </div>
            </div>

            <!-- 50. csharp -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'csharp') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #178600;"></i>
                    <h5 class="mt-3 fw-bold">C# (Mono)</h5>
                </div>
            </div>

            <!-- 51. basic -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'basic') }}'">
                    <i class="fa-solid fa-terminal fa-3x" style="color: #F1C40F;"></i>
                    <h5 class="mt-3 fw-bold">Basic</h5>
                </div>
            </div>

            <!-- 52. nasm -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'nasm') }}'">
                    <i class="fa-solid fa-microchip fa-3x" style="color: #9B59B6;"></i>
                    <h5 class="mt-3 fw-bold">NASM</h5>
                </div>
            </div>

            <!-- 53. nasm64 -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'nasm64') }}'">
                    <i class="fa-solid fa-microchip fa-3x" style="color: #8E44AD;"></i>
                    <h5 class="mt-3 fw-bold">NASM64</h5>
                </div>
            </div>

            <!-- 54. nim -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'nim') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #E74C3C;"></i>
                    <h5 class="mt-3 fw-bold">Nim</h5>
                </div>
            </div>

            <!-- 55. javascript (node) -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'javascript') }}'">
                    <i class="fa-brands fa-node fa-3x" style="color: #68A063;"></i>
                    <h5 class="mt-3 fw-bold">JavaScript (Node)</h5>
                </div>
            </div>

            <!-- 56. ocaml -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'ocaml') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #1ABC9C;"></i>
                    <h5 class="mt-3 fw-bold">OCaml</h5>
                </div>
            </div>

            <!-- 57. octave -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'octave') }}'">
                    <i class="fa-solid fa-microchip fa-3x" style="color: #2980B9;"></i>
                    <h5 class="mt-3 fw-bold">Octave</h5>
                </div>
            </div>

            <!-- 58. osabie -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'osabie') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #7F8C8D;"></i>
                    <h5 class="mt-3 fw-bold">Osabie</h5>
                </div>
            </div>

            <!-- 59. paradoc -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'paradoc') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #F39C12;"></i>
                    <h5 class="mt-3 fw-bold">Paradoc</h5>
                </div>
            </div>

            <!-- 60. pascal -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'pascal') }}'">
                    <i class="fa-solid fa-terminal fa-3x" style="color: #2ECC71;"></i>
                    <h5 class="mt-3 fw-bold">Pascal</h5>
                </div>
            </div>

            <!-- 61. perl -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'perl') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #FF6600;"></i>
                    <h5 class="mt-3 fw-bold">Perl</h5>
                </div>
            </div>

            <!-- 62. php -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'php') }}'">
                    <i class="fa-brands fa-php fa-3x" style="color: #8892BE;"></i>
                    <h5 class="mt-3 fw-bold">PHP</h5>
                </div>
            </div>

            <!-- 63. ponylang -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'ponylang') }}'">
                    <i class="fa-solid fa-horse fa-3x" style="color: #FF5733;"></i>
                    <h5 class="mt-3 fw-bold">PonyLang</h5>
                </div>
            </div>

            <!-- 64. prolog -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'prolog') }}'">
                    <i class="fa-solid fa-brain fa-3x" style="color: #8E44AD;"></i>
                    <h5 class="mt-3 fw-bold">Prolog</h5>
                </div>
            </div>

            <!-- 65. pure -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'pure') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #3498DB;"></i>
                    <h5 class="mt-3 fw-bold">Pure</h5>
                </div>
            </div>

            <!-- 66. powershell -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'powershell') }}'">
                    <i class="fa-brands fa-windows fa-3x" style="color: #0078D6;"></i>
                    <h5 class="mt-3 fw-bold">PowerShell</h5>
                </div>
            </div>

            <!-- 67. pyth -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'pyth') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #9B59B6;"></i>
                    <h5 class="mt-3 fw-bold">Pyth</h5>
                </div>
            </div>

            <!-- 68. python2 -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'python2') }}'">
                    <i class="fa-brands fa-python fa-3x" style="color: #306998;"></i>
                    <h5 class="mt-3 fw-bold">Python 2</h5>
                </div>
            </div>

            <!-- 69. python -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'python') }}'">
                    <i class="fa-brands fa-python fa-3x" style="color: #FFD43B;"></i>
                    <h5 class="mt-3 fw-bold">Python 3</h5>
                </div>
            </div>

            <!-- 70. racket -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'racket') }}'">
                    <i class="fa-solid fa-leaf fa-3x" style="color: #7F8C8D;"></i>
                    <h5 class="mt-3 fw-bold">Racket</h5>
                </div>
            </div>

            <!-- 71. raku -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'raku') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #3498DB;"></i>
                    <h5 class="mt-3 fw-bold">Raku</h5>
                </div>
            </div>

            <!-- 72. retina -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'retina') }}'">
                    <i class="fa-solid fa-eye fa-3x" style="color: #E67E22;"></i>
                    <h5 class="mt-3 fw-bold">Retina</h5>
                </div>
            </div>

            <!-- 73. rockstar -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'rockstar') }}'">
                    <i class="fa-solid fa-guitar fa-3x" style="color: #F39C12;"></i>
                    <h5 class="mt-3 fw-bold">Rockstar</h5>
                </div>
            </div>

            <!-- 74. rscript -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'rscript') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #27AE60;"></i>
                    <h5 class="mt-3 fw-bold">RScript</h5>
                </div>
            </div>

            <!-- 75. ruby -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'ruby') }}'">
                    <i class="fa-solid fa-gem fa-3x" style="color: #E74C3C;"></i>
                    <h5 class="mt-3 fw-bold">Ruby</h5>
                </div>
            </div>

            <!-- 76. rust -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'rust') }}'">
                    <i class="fa-solid fa-cubes-stacked fa-3x" style="color: #DEA584;"></i>
                    <h5 class="mt-3 fw-bold">Rust</h5>
                </div>
            </div>

            <!-- 77. samarium -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'samarium') }}'">
                    <i class="fa-solid fa-atom fa-3x" style="color: #3498DB;"></i>
                    <h5 class="mt-3 fw-bold">Samarium</h5>
                </div>
            </div>

            <!-- 78. scala -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'scala') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #F39C12;"></i>
                    <h5 class="mt-3 fw-bold">Scala</h5>
                </div>
            </div>

            <!-- 79. smalltalk -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'smalltalk') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #8E44AD;"></i>
                    <h5 class="mt-3 fw-bold">Smalltalk</h5>
                </div>
            </div>

            <!-- 80. sqlite3 -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'sqlite3') }}'">
                    <i class="fa-solid fa-database fa-3x" style="color: #2ECC71;"></i>
                    <h5 class="mt-3 fw-bold">SQLite3</h5>
                </div>
            </div>

            <!-- 81. swift -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'swift') }}'">
                    <i class="fa-brands fa-swift fa-3x" style="color: #F08A36;"></i>
                    <h5 class="mt-3 fw-bold">Swift</h5>
                </div>
            </div>

            <!-- 82. typescript -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'typescript') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #3178C6;"></i>
                    <h5 class="mt-3 fw-bold">TypeScript</h5>
                </div>
            </div>

            <!-- 83. vlang -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'vlang') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #1ABC9C;"></i>
                    <h5 class="mt-3 fw-bold">V</h5>
                </div>
            </div>

            <!-- 84. vyxal -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'vyxal') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #9B59B6;"></i>
                    <h5 class="mt-3 fw-bold">Vyxal</h5>
                </div>
            </div>

            <!-- 85. yeethon -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'yeethon') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #34495E;"></i>
                    <h5 class="mt-3 fw-bold">Yeethon</h5>
                </div>
            </div>

            <!-- 86. zig -->
            <div class="col-6 col-md-3">
                <div class="card text-center language-card p-4"
                    onclick="window.location.href='{{ route('frontend.editor', 'zig') }}'">
                    <i class="fa-solid fa-code fa-3x" style="color: #F39C12;"></i>
                    <h5 class="mt-3 fw-bold">Zig</h5>
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
