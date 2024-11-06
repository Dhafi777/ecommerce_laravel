<<<<<<< HEAD
<!DOCTYPE html> 
<html lang="zxx" class="no-js"> 
 
<head> 
    <!-- Mobile Specific Meta --> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink
to-fit=no"> 
    <!-- Favicon--> 
    <link rel="shortcut icon" href="{{ asset('assets/templates/user/img/fav.png') 
}}"> 
    <!-- Author Meta --> 
    <meta name="author" content="CodePixar"> 
    <!-- Meta Description --> 
    <meta name="description" content=""> 
    <!-- Meta Keyword --> 
    <meta name="keywords" content=""> 
    <!-- meta character set --> 
    <meta charset="UTF-8"> 
    <!-- Site Title --> 
    <title>Merch Store</title> 
 
    <!-- 
        CSS 
        ============================================= --> 
    <link rel="stylesheet" href="{{ 
asset('assets/templates/user/css/linearicons.css') }}"> 
    <link rel="stylesheet" href="{{ 
asset('assets/templates/user/css/owl.carousel.css') }}"> 
    <link rel="stylesheet" href="{{ asset('assets/templates/user/css/themify
icons.css') }}"> 
    <link rel="stylesheet" href="{{ asset('assets/templates/user/css/font
awesome.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('assets/templates/user/css/nice
select.css') }}"> 
    <link rel="stylesheet" href="{{ 
asset('assets/templates/user/css/nouislider.min.css') }}"> 
    <link rel="stylesheet" href="{{ 
asset('assets/templates/user/css/bootstrap.css') }}"> 
    <link rel="stylesheet" href="{{ asset('assets/templates/user/css/main.css') 
}}"> 
</head> 
 
<body> 
     
 
    <!--================Login Box Area =================--> 
    <section class="login_box_area section_gap"> 
        <div class="container"> 
            <h3 class="text-center mb-5">Selamat Datang Di Halaman Utama</h3> 
            <div class="row"> 
            <div class="col-lg-6"> 
                <h5>Data Admin</h5> 
                <table> 
                    <tr> 
                        <th>Nama</th> 
                        <th>Username</th> 
                        <th>Email</th> 
                    </tr> 
                    @forelse ($admins as $item) 
                        <tr> 
                            <td>{{ $item->name }}</td> 
                            <td>{{ $item->username }}</td> 
                            <td>{{ $item->email }}</td> 
                        </tr> 
                    @empty 
                        <tr> 
 22 
                            <td class="text-center">Data Kosong</td> 
                        </tr> 
                    @endforelse 
                </table> 
            </div> 
            <div class="col-lg-6"> 
                <h5>Data User</h5> 
                <table> 
                    <tr> 
                        <th>Name</th> 
                        <th>Email</th> 
                        <th>Points</th> 
                    </tr> 
                    @forelse ($users as $item) 
                        <tr> 
                            <td>{{ $item->name }}</td> 
                            <td>{{ $item->email }}</td> 
                            <td>{{ $item->point }}</td> 
                        </tr> 
                    @empty 
                        <tr> 
                            <td class="text-center">Data Kosong</td> 
                        </tr> 
                    @endforelse 
                </table> 
            </div> 
            <div class="col-lg-6"> 
                <h5>Data Skripsi</h5> 
                <table> 
                    <tr> 
                        <th>judul</th> 
                        <th>nama</th> 
                        <th>nim</th> 
                        <th>angkatan</th> 
                        <th>dosenPembimbing1</th> 
                        <th>dosenPembimbing2</th> 
                    </tr> 
                    @forelse ($skripsis as $item) 
                        <tr> 
                            <td>{{ $item->judul }}</td> 
                            <td>{{ $item->nama }}</td> 
                            <td>{{ $item->nim }}</td> 
                            <td>{{ $item->angkatan }}</td> 
                            <td>{{ $item->dosenPembimbing1 }}</td> 
                            <td>{{ $item->dosenPembimbing2 }}</td> 
                        </tr> 
                    @empty 
                        <tr> 
 22 
                            <td class="text-center">Data Kosong</td> 
                        </tr> 
                    @endforelse 
                </table> 
            </div> 
            </div> 
        </div> 
    </section> 
    <!--================End Login Box Area =================--> 
 
    <script src="{{ asset('assets/templates/user/js/vendor/jquery-2.2.4.min.js') 
}}"></script> 
    <script 
src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" 
integrity="sha384
b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" 
     crossorigin="anonymous"></script> 
    <script src="{{ asset('assets/templates/user/js/vendor/bootstrap.min.js') 
}}"></script> 
    <script src="{{ asset('assets/templates/user/js/jquery.ajaxchimp.min.js') 
}}"></script> 
    <script src="{{ asset('assets/templates/user/js/jquery.nice-select.min.js') 
}}"></script> 
    <script src="{{ asset('assets/templates/user/js/jquery.sticky.js') 
}}"></script> 
    <script src="{{ asset('assets/templates/user/js/nouislider.min.js') 
}}"></script> 
    <script src="{{ asset('assets/templates/user/js/jquery.magnific-popup.min.js') 
}}"></script> 
    <script src="{{ asset('assets/templates/user/js/owl.carousel.min.js') 
}}"></script> 
    <!--gmaps Js--> 
    <script 
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDO
 vfAu6eE"></script> 
    <script src="{{ asset('assets/templates/user/js/gmaps.min.js') }}"></script> 
    <script src="{{ asset('assets/templates/user/js/main.js') }}"></script> 
</body> 
 
</html> 
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
</head>
<body>
<h1>Judul Beranda</h1>

    <a href="/service">Service</a>
    <a href="/about">About</a>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex nulla blanditiis dolor optio, enim similique, itaque quam quia molestiae nesciunt expedita corrupti facilis, facere quasi ipsum alias voluptates aliquam. Sint nesciunt explicabo aspernatur officiis soluta consequuntur consectetur quaerat maxime inventore in sapiente, ipsam blanditiis aliquam voluptatem, qui alias fugiat. Iusto quam ipsam rerum, atque culpa quia eligendi beatae. Quis.</p>
    
</body>
</html>
>>>>>>> 16de45ab6cf11e2649948d7fca0d0415845d2dfa
