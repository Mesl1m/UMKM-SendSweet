<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SendSweet</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        background: linear-gradient(#FF7CBB, #FA89C0, #DDDDDD);
    }

    .wrapper {
        width: 100%;
        height: 100vh; 
    }
    /* .card{ */
        /* background-color: #E211B4; */
        /* height: 78px;
        margin: 50px;
        border-radius: 50px; */
    /* } */
    .content{
        margin-left: 60px;
    }
</style>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="upNavbar">
                <div class="container" style="width: 800px">
                    <div class="sub-menu mt-2 d-flex justify-content-between gap-4">
                        <button id="homeBtn" type="button" style="color: white" class="btn btn-outline-none fw-bold">Home</button>
                        <button id="catalogBtn" type="button" style="color: white" class="btn btn-outline-none fw-bold">Catalog</button>
                        <button id="contactUs" type="button" style="color: white" class="btn btn-outline-none fw-bold">Contact Us</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="navBar d-flex justify-content-center">
                        <div id="companyName" class="text-center">
                            <h1 class="mb-0 pb-0" style="font-family: 'Passion One'; font-weight: bold; color: #ED3080;">SendSweet</h1>
                            <label class="m-0 p-0" style="font-family: 'Pinyon Script', cursive; font-weight: bold;">Your Dessert Choice</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 d-flex justify-content-center mt-5">
                <div class="col-sm-6">
                    <img style="height: 600px" src="{{asset('img/contactUS.png')}}" alt="">
                </div>
                <div class="col-sm-6" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                    <p style="color: white; font-family: 'itim'; font-size: 25px; font-weight: bold;">Apakah kamu tertarik? jika iya dan ingin pesan silahkan kunjungin kontak di bawah ini ya.</p>
                    <h1 style="color: white; font-weight: bolder; font-size: 50px; font-family:'Luckiest Guy';">Thank you sweeties !!</h1>
                <div class="d-flex gap-5">
                    <div style="display: flex; flex-direction: row;  gap: 12px; align-items: center; justify-content: center;">
                        <img src="{{asset('img/instagram.png')}}" alt=""> 
                        <p class="fw-bold fs-4">@sendsweet</p>
                    </div>
                    <div style="display: flex; flex-direction: row;  gap: 12px; align-items: center; justify-content: center;">
                        <img src="{{asset('img/telephone.png')}}" alt=""> 
                        <p class="fw-bold fs-4">0857-7365-5623</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#homeBtn').on('click', function(e){
            e.preventDefault();
            window.location.href = '{{route('index')}}'
        })
    });
    
    $(document).ready(function () {
        $('#catalogBtn').on('click', function(e){
            e.preventDefault();
            window.location.href = '{{route('catalogSendsweet')}}'
        })
    });

    $(document).ready(function () {
        $('#contactUs').on('click', function(e){
            e.preventDefault();
            window.location.href = '{{route('contactUS')}}'
        })
    });
</script>