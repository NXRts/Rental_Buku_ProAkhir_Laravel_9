@extends('layouts.mainlayout')

@section('title', 'Profile')

@section('content')
    <style>
        .card {
            width: 400px;
            height: 450px;
            --black: #000000;
            --ch-black: #141414;
            --eer-black: #1b1b1b;
            --night-rider: #2e2e2e;
            --white: #ffffff;
            --af-white: #f3f3f3;
            --ch-white: #e1e1e1;
            font-family: Helvetica, sans-serif;
            margin: 10px;
            /* Margin untuk memberikan sedikit ruang antar kartu */
        }

        .card-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            /* Jarak antara kartu */
            flex-wrap: wrap;
            /* Supaya kartu dapat berpindah ke baris berikutnya pada layar kecil */
        }

        .wrapper {
            margin: 2rem auto;
            width: 250px;
            font-size: small;
        }

        .title {
            text-align: center;
            color: #1b1b1b;
        }

        .heading {
            font-weight: bold;
            letter-spacing: 7px;
            font-size: 1.5rem;
            position: relative;
            margin-bottom: 6px;
        }

        .heading::before {
            content: '';
            position: absolute;
            inset: 0;
            background: #e8e8e8;
            z-index: -1;
            filter: blur(50px);
            height: 50px;
        }

        .color {
            padding: 10px 20px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .hex {
            text-align: end;
            font-family: monospace;
            text-transform: uppercase;
        }

        .black {
            background: var(--black);
            color: var(--ch-white);
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .eerie-black {
            background: var(--ch-black);
            color: var(--ch-white);
        }

        .chinese-black {
            background: var(--eer-black);
            color: var(--ch-white);
        }

        .night-rider {
            background: var(--night-rider);
            color: var(--ch-white);
        }

        .chinese-white {
            background: var(--ch-white);
            color: var(--night-rider);
        }

        .anti-flash-white {
            background: var(--af-white);
            color: var(--night-rider);
        }

        .white {
            background: var(--white);
            color: var(--night-rider);
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        .border {
            color: var(--night-rider);
            padding: 10px 10px;
            text-align: center;
        }

        .border span {
            border-radius: 5px;
            color: var(--ch-white);
            padding: 2px 4px;
            background-color: var(--night-rider);
        }

        .card_2 {
            width: 90%;
            /* Adjusted to fit smaller screens */
            max-width: 400px;
            /* Maximum width for larger screens */
            height: auto;
            /* Adjust height for content */
            background-color: rgb(238, 238, 238);
            display: flex;
            flex-direction: column;
            /* Column direction for better stacking on small screens */
            align-items: center;
            justify-content: center;
            padding: 25px;
            gap: 20px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.055);
            margin: 0 auto;
            box-sizing: border-box;
        }

        /* for all social containers*/
        .socialContainer {
            width: 52px;
            height: 52px;
            background-color: rgb(44, 44, 44);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            transition-duration: .3s;
        }

        /* instagram*/
        .containerOne:hover {
            background-color: #d62976;
            transition-duration: .3s;
        }

        /* twitter*/
        .containerTwo:hover {
            background-color: #00acee;
            transition-duration: .3s;
        }

        /* linkdin*/
        .containerThree:hover {
            background-color: #0072b1;
            transition-duration: .3s;
        }

        /* Whatsapp*/
        .containerFour:hover {
            background-color: #128C7E;
            transition-duration: .3s;
        }

        /* GitHub */
        .containerFive:hover {
            background-color: #333;
            transition-duration: .3s;
        }

        /* YouTube */
        .containerSix:hover {
            background-color: #FF0000;
            transition-duration: .3s;
        }

        .socialContainer:active {
            transform: scale(0.9);
            transition-duration: .3s;
        }

        .socialSvg {
            width: 17px;
        }

        .socialSvg path {
            fill: rgb(255, 255, 255);
        }

        .socialContainer:hover .socialSvg {
            animation: slide-in-top 0.3s both;
        }

        @keyframes slide-in-top {
            0% {
                transform: translateY(-50px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
    <figure class="text-center">
        <blockquote class="blockquote">
            <p>Visi & Misi</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            Visi: <br>
            Menjadi platform terdepan di Indonesia yang memudahkan akses masyarakat terhadap buku, baik fisik maupun
            digital, serta meningkatkan minat baca dan literasi melalui sistem peminjaman buku yang user-friendly dan
            terintegrasi. <br>
            <br>
            Misi: <br>
            1. Mengatasi masalah kurangnya minat literasi di kalangan masyarakat dengan menyediakan akses mudah dan aman ke
            koleksi buku yang beragam. <br>
            2. Menyediakan layanan peminjaman buku yang efisien menggunakan teknologi berbasis web. <br>
            3. Menciptakan ekosistem literasi yang dinamis dengan menyediakan platform bagi pengguna untuk berbagi ulasan
            dan berdiskusi tentang buku. <br>
            4. Mendukung pengembangan literasi dan pengetahuan masyarakat melalui konten menarik dan edukatif yang
            disediakan di platform. <br>
        </figcaption>
    </figure>
    <hr>
    <div class="card-container">
        <div class="card">
            <div class="title">
                <p class="heading">Color Acout</p>
                <p class="desc">Yang digunakan</p>
            </div>
            <div class="wrapper">
                <div class="color black">
                    black
                    <span class="hex">#000000</span>
                </div>
                <div class="color eerie-black">
                    eerie-black
                    <span class="hex">#1b1b1b</span>
                </div>
                <div class="color chinese-black">
                    chinese-black
                    <span class="hex">#141414</span>
                </div>
                <div class="color night-rider">
                    night rider
                    <span class="hex">#2e2e2e</span>
                </div>
                <div class="color chinese-white">
                    chinese-white
                    <span class="hex">#e1e1e1</span>
                </div>
                <div class="color anti-flash-white">
                    anti-flash-white
                    <span class="hex">#f3f3f3</span>
                </div>
                <div class="color white">
                    white
                    <span class="hex">#ffffff</span>
                </div>
                <div class="border">common border radius <span>5px | 8px</span></div>
            </div>
        </div>
        <div class="card">
            <p style="text-align: center" class="heading">Medsos</->
            <div class="card_2">
                <a href="https://www.instagram.com/my_arrofi/" target="_blank" class="socialContainer containerOne">
                    <svg class="socialSvg instagramSvg" viewBox="0 0 16 16">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                        </path>
                    </svg>
                </a>

                <a href="https://twitter.com/MYArrofi" target="_blank" class="socialContainer containerTwo">
                    <svg class="socialSvg twitterSvg" viewBox="0 0 16 16">
                        <path
                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                        </path>
                    </svg>
                </a>

                <a href="#" class="socialContainer containerFour">
                    <svg class="socialSvg whatsappSvg" viewBox="0 0 16 16">
                        <path
                            d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.929 4.66c-.003 3.634-2.96 6.591-6.593 6.591zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z">
                        </path>
                    </svg>
                </a>

                <a href="https://github.com/NXRts" target="_blank" class="socialContainer containerFive">
                    <svg class="socialSvg githubSvg" viewBox="0 0 16 16">
                        <path
                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.58.82-2.14-.08-.2-.36-1.01.08-2.11 0 0 .67-.21 2.2.82a7.68 7.68 0 0 1 2-.27c.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.45 1.1.17 1.91.08 2.11.51.56.82 1.27.82 2.14 0 3.07-1.87 3.75-3.64 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.45.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z">
                        </path>
                    </svg>
                </a>

                <a href="#" class="socialContainer containerSix">
                    <svg class="socialSvg youtubeSvg" viewBox="0 0 24 24">
                        <path
                            d="M19.635 3.968c-1.015-.809-4.016-1.206-7.631-1.206-3.615 0-6.62.398-7.631 1.206C3.366 4.777 3 7.211 3 12s.366 7.223 1.373 8.032c1.015.809 4.016 1.206 7.631 1.206 3.615 0 6.62-.398 7.631-1.206C20.634 19.223 21 16.789 21 12s-.366-7.223-1.365-8.032zm-10.635 9.417V8.615l5.207 2.385-5.207 2.385z">
                        </path>
                    </svg>
                </a>
            </div>

        </div>
    </div>
@endsection
