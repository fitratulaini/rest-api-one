<?php
function get_CURL($url) 
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);
    
    return json_decode($result, true);  
}

$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCgWhSOwQSKHg9rNSGY57kVw&key=AIzaSyBudU7U_CDmLvqJ2JRiNL-k0N6p3ynT6OM');

$youtubeProfilepic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelName = $result['items'][0]['snippet']['title'];
$subscribers = $result['items'][0]['statistics']['subscriberCount'];

// latest video
$urlLatestVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyBudU7U_CDmLvqJ2JRiNL-k0N6p3ynT6OM&channelId=UCgWhSOwQSKHg9rNSGY57kVw&maxResults=1&order=date&part=snippet'; 
$result = get_CURL($urlLatestVideo);
$latestVideoId = $result['items'][0]['id']['videoId'];

// Instagram API
$clientID = "9589490684511176";
$accessToken = "IGAATVHZAF7d05BZAE04MF9WaW1mZAlZAhN3ExZAHN4SU9SR1U1MXJmaWhSMEpDS2ZA3bTVET1JlUHFTUmE1a3VRRVJmQ25BYnVKRDRkVEl3TnhQUFp4QzlrVUg4dEZAYdW9wcDUzbk1IZA3YxdVppeHJSMG54eW9yX2RKWEQ1TWtRWHJjYwZDZD";

$result2 = get_CURL ('https://graph.instagram.com/v22.0/me?fields=username,profile_picture_url,followers_count&access_token=IGAATVHZAF7d05BZAE04MF9WaW1mZAlZAhN3ExZAHN4SU9SR1U1MXJmaWhSMEpDS2ZA3bTVET1JlUHFTUmE1a3VRRVJmQ25BYnVKRDRkVEl3TnhQUFp4QzlrVUg4dEZAYdW9wcDUzbk1IZA3YxdVppeHJSMG54eW9yX2RKWEQ1TWtRWHJjYwZDZD');
$usernameIG = $result2['username'];
$profilepictureIG = $result2['profile_picture_url'];
$followersIG = $result2['followers_count'];

// Media IG
$resultGambar2 = get_CURL ('https://graph.instagram.com/v22.0/18108136411502437?fields=media_url&access_token=IGAATVHZAF7d05BZAE04MF9WaW1mZAlZAhN3ExZAHN4SU9SR1U1MXJmaWhSMEpDS2ZA3bTVET1JlUHFTUmE1a3VRRVJmQ25BYnVKRDRkVEl3TnhQUFp4QzlrVUg4dEZAYdW9wcDUzbk1IZA3YxdVppeHJSMG54eW9yX2RKWEQ1TWtRWHJjYwZDZD');
$resultGambar3 = get_CURL ('https://graph.instagram.com/v22.0/18068958148824251?fields=media_url&access_token=IGAATVHZAF7d05BZAE04MF9WaW1mZAlZAhN3ExZAHN4SU9SR1U1MXJmaWhSMEpDS2ZA3bTVET1JlUHFTUmE1a3VRRVJmQ25BYnVKRDRkVEl3TnhQUFp4QzlrVUg4dEZAYdW9wcDUzbk1IZA3YxdVppeHJSMG54eW9yX2RKWEQ1TWtRWHJjYwZDZD');
$gambar2 = $resultGambar2['media_url'];
$gambar3 = $resultGambar3['media_url'];


?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


        <link rel="stylesheet" href="css/style.css">

        <title>WPU Portfolio</title>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">fitratul Aini</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <nav>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">Project</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#portfolio">Portfolio</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </nav>


        <div class="jumbotron" id="home">
            <div class="container">
                <div class="text-center">
                    <img src="img/1.png" class="rounded-circle img-thumbnail">
                    <h1 class="display-4">Fitratul Aini</h1>
                    <h3 class="lead">student</h3>
                </div>
            </div>
        </div>



        <section class="about" id="about">
            <div class="container">
                <div class="row mb-4">
                    <div class="col text-center">
                        <h2>About</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <p>Saya saat ini sedang menempuh pendidikan di Universitas Islam Negeri (UIN) Imam Bonjol Padang, tepatnya di semester 6 pada Fakultas Sains dan Teknologi dengan program studi Sistem Informasi. Semester ini terasa cukup berat dan penuh tantangan—tugas yang datang silih berganti dengan deadline yang mepet, ditambah lagi rasa malas yang sering datang tanpa diundang. Kadang rasanya lelah secara fisik maupun mental, tapi semua itu jadi bagian dari proses belajar dan tumbuh sebagai mahasiswa.</p>
                    </div>
                    <div class="col-md-5">
                        <p>Saya berasal dari Agam, sebuah daerah yang terletak di Provinsi Sumatera Barat. Kehidupan di Agam yang penuh dengan nilai-nilai budaya dan kebersamaan telah membentuk saya menjadi pribadi yang kuat, sederhana, dan menghargai proses. Dari sanalah saya belajar arti kerja keras dan pentingnya menjaga semangat, yang terus saya bawa dalam menjalani kehidupan perkuliahan saat ini.</p>
                    </div>
                </div>
            </div>
        </section>


        <!---youtube & ig --->
        <section class="sosial bg-light" id="sosial">
            <div class="container">
                <div class="row pt-4 mb-4">
                    <div class="col text-center">
                        <h2>Social Media</h2>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?= $youtubeProfilepic; ?>" width="200" class="rounded-circle img-thumbnail">
                            </div>
                            <div class="col-md-8">
                                <h5><?= $channelName; ?></h5>
                                <p><?= $subscribers;?> Subscribers.</p>
                                <div class="g-ytsubscribe" data-channelid="UCgWhSOwQSKHg9rNSGY57kVw" data-layout="default" data-count="default"></div>
                            </div>
                        </div>
                        <div class="row mt-3 pb-3">
                            <div class="col">
                            <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $latestVideoId;?>?rel=0" allowfullscreen></iframe>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                       <div class="row">
                        <div class="col-md-4">
                        <img src="<?= $profilepictureIG; ?>" width="200" class="rounded-circle img-thumbnail">     
                        </div>
                        <div class="col-md-8">
                            <h5><?= $usernameIG; ?> </h5>
                            <p><?= $followersIG;?> followers.</p>
                        </div>
                       </div> 
                       
                       <div class="row mt-3 pb-3">
                        <div class="col">
                            <div class="ig-thumbnail">
                                <img src="<?= $gambar2; ?>">
                            </div>
                            <div class="ig-thumbnail">
                                <img src="<?= $gambar3; ?>">
                            </div> 
                       </div>
                    </div>
                </div>
            </div>
        </section>

<!-- projek -->
        <section class="portfolio" id="portfolio">
            <div class="container">
                <div class="row pt-4 mb-4">
                    <div class="col text-center">
                        <h2>Project</h2>
                    </div>
                </div>
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-md mb-4">
                        <div class="card">
                            <img class="card-img-top" src="img/thumbs/projekct1.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">
                                    Proyek ini merupakan aplikasi pemesanan pizza sederhana yang dibuat dengan menggunakan teknologi JSON, JavaScript, PHP, dan HTML. Aplikasi ini memungkinkan pengguna untuk memilih jenis pizza.
                                </p>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-dark">Project Pizza</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md mb-4">
                        <div class="card">
                            <img class="card-img-top" src="img/thumbs/project2.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">
                                    Proyek ini adalah aplikasi pencarian film sederhana yang terintegrasi dengan OMDb API menggunakan API key, memungkinkan pengguna mencari film dan melihat detail seperti judul dan,tahun rilis                                </p>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-dark">Project API Movie</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md mb-4">
                        <div class="card">
                            <img class="card-img-top" src="img/thumbs/project3.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">
                                    Proyek ini adalah aplikasi REST Client berbasis CodeIgniter yang menggunakan GuzzleHTTP (diinstal via Composer) untuk mengakses dan mengonsumsi data dari RESTful API.                                </p>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-dark">Project Rest Client</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!----portfolio---->

        <section class="portfolio" id="portfolio">
            <div class="container">
                <div class="row pt-4 mb-4">
                    <div class="col text-center">
                        <h2>Portfolio</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md mb-4">
                        <div class="card">
                            <img class="card-img-top" src="img/thumbs/aini11.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Hidup ini seperti coding—kadang jalan mulus, kadang error tanpa pesan. Tapi dari situ saya belajar bahwa setiap kesalahan bisa diperbaiki, asal jangan lupa save dulu..</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md mb-4">
                        <div class="card">
                            <img class="card-img-top" src="img/thumbs/aini1.png" alt="card image cap">
                            <div class="card-body">
                                <p class="card-text">Proyek saya dikerjakan dengan penuh dedikasi, bukan karena tidak ada pilihan lain… tapi karena udah terlalu jauh buat menyerah.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md mb-4">
                        <div class="card">
                            <img class="card-img-top" src="img/thumbs/aini4.png" alt="card image cap">
                            <div class="card-body">
                                <p class="card-text">Skill utama: bisa serius di tengah kekacauan, tetap produktif di tengah quarter-life crisis, dan tetap senyum saat dosen bilang, “Coba revisi lagi, ya.”</p>
                            </div>
                        </div>
                    </div>
                </div>

        
        </section>
                    

        <!----contact---->
        <section class="contact bg-light" id="contact">
            <div class="container">
                <div class="row pt-4 mb-4">
                    <div class="col text-center">
                        <h2>Contact</h2>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="card text-white bg-primary mb-4 text-center">
                            <div class="card-body">
                                <h5 class="card-title">Contact Me</h5>
                                <p class="card-text">Kontak saya aja, jangan kontak masa lalu. Itu berat, kamu gak akan kuat.</p>
                            </div>
                        </div>

                        <ul class="list-group mb-4">
                            <li class="list-group-item"><h3>Location</h3></li>
                            <li class="list-group-item">My Life</li>
                            <li class="list-group-item">Jl. Bukan Kamu Tapi Dia</li>
                            <li class="list-group-item">Padang, ID</li>
                        </ul>
                    </div>
                    
                    <div class="col-lg-6">

                        <form>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="telp">No Telepon</label>
                                <input type="telp" class="form-control" id="telp">
                            </div>
                            <div class="form-group">
                                <label for="pesan">Pesan</label>
                                <textarea class="form-control" id="pesan" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>


        <footer class="bg-dark text-white mt-5">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <p>Copyright &copy; 2025.</p>
                    </div>
                </div>
            </div>
        </footer>








        <!-- Optional JavaScript; choose one of the two! -->
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="https://apis.google.com/js/platform.js"></script>
        
    </body>
</html>