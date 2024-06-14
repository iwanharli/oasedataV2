<base href="{{ url('/') }}">

<!-- Metas -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="keywords" content="OASEDATA data report news berita" />
{{-- <meta name="description" content="OaseData - Transformasi Digital Melalui Teknologi Terkini" /> --}}
{{-- <meta property="og:image" content="{{ asset('assets/img/fav.png') }}"> --}}
@yield('head')
<meta name="author" content="" />


<!-- Title  -->
<title>{{ empty($title) ? 'OASEDATA' : $title . '- OASEDATA' }}</title>
<meta name="description" content="{{ empty($desc) ? 'Transformasi Digital Melalui Teknologi Terkini' : $desc }}" />

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('assets/img/oasebumi.png') }}" title="Favicon" sizes="16x16" />

<!-- ====== bootstrap icons cdn ====== -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->

<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- bootstrap 5 -->
<link rel="stylesheet" href="{{ asset('assets/css/lib/bootstrap.min.css') }}" />

<!-- ====== font family ====== -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&ampdisplay=swap"
    rel="stylesheet">

<link rel="stylesheet" href="{{ asset('assets/css/lib/all.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/lib/animate.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/lib/jquery.fancybox.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/lib/lity.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/lib/swiper.min.css') }}" />

<!-- ====== global style ====== -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-39MD4GZPG9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-39MD4GZPG9');
</script>
<!-- End Google Analytics -->

<style>
    .disqus-footer__link .disqus-footer__link--refresh {
        display: none !important;
        background-image: none !important;
    }


    .sticky-icon {
        z-index: 20;
        position: fixed;
        top: 50%;
        right: 0%;
        width: 220px;
        display: flex;
        flex-direction: column;
    }

    .sticky-icon a {
        transform: translate(160px, 0px);
        border-radius: 50px 0px 0px 50px;
        text-align: left;
        margin: 2px;
        text-decoration: none;
        text-transform: uppercase;
        padding: 10px;
        font-size: 22px;
        font-family: 'Inter', sans-serif;
        font-weight: 500;
        transition: all 0.8s;
    }

    .sticky-icon a:hover {
        color: #FFF;
        transform: translate(0px, 0px);
    }

    .sticky-icon a:hover i {
        transform: rotate(360deg);
    }

    /*.search_icon a:hover i  { transform:rotate(360deg);}*/
    .Whatsapp {
        background-color: #159307;
        color: #FFF;
    }

    .Youtube {
        background-color: #fa0910;
        color: #FFF;
    }

    .Twitter {
        background-color: #53c5ff;
        color: #FFF;
    }

    .Instagram {
        background-color: #b74bff;
        color: #FFF;
    }

    .Tiktok {
        background-color: #000000;
        color: #FFF;
    }

    .sticky-icon a i {
        background-color: #FFF;
        height: 40px;
        width: 40px;
        color: #000;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        margin-right: 20px;
        transition: all 0.5s;
    }

    .sticky-icon a:hover {
        background-color: #805aff;
    }

    .sticky-icon a i.fa-whatsapp {
        background-color: #ffffff;
        color: #2C80D3;
    }

    .sticky-icon a i.fa-tiktok {
        background-color: #FFF;
        color: #000000;
    }

    .sticky-icon a i.fa-instagram {
        background-color: #FFF;
        color: #c249ff;
    }

    .sticky-icon a i.fa-youtube {
        background-color: #FFF;
        color: #fa0910;
    }

    .sticky-icon a i.fa-twitter {
        background-color: #FFF;
        color: #53c5ff;
    }

    .fas fa-shopping-cart {
        background-color: #FFF;
    }

    #myBtn {
        height: 50px;
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        text-align: center;
        padding: 10px;
        text-align: center;
        line-height: 40px;
        border: none;
        outline: none;
        background-color: #1e88e5;
        color: white;
        cursor: pointer;
        border-radius: 50%;
    }

    .fa-arrow-circle-up {
        font-size: 30px;
    }

    #myBtn:hover {
        background-color: #555;
    }

    .nav-item .komparasi:hover {
        color: black !important;
    }


    /* CUSTOM  */
    .blog-content-info img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        border: 4px dotted #d6d6d6;
        margin-bottom: 30px !important;
    }

    .blog-content-info {
        text-align: justify;
    }

    .section-head {
        text-transform: uppercase;
    }

    .content-card .img img {
        border: 5px solid #000000;
        border-radius: 30px;
        /* height: 100% !important; */
    }

    .text-custom p {
        margin-bottom: 20px;
        text-align: justify !important;
    }
</style>
