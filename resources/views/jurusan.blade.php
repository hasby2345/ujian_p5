@extends('layout.layout')
@section('content')
<style>
    .featurette-heading {
        margin-top: 10rem;
    }
    .img {
        width: 200%;
        height: 200%;
    }
</style>
<div class="container marketing">
    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Rekayasa Perangkat Lunak</h2>
            <p class="lead">Jurusan Rekayasa Perangkat Lunak merupakan jurusan yang didalamnya mempelajari prinsip sekaligus teknik mendesain perangkat lunak yang mudah digunakan dan tepat guna.
                 Jurusan yang juga disebut Software Engineering ini bisa menjadi wadah yang tepat bagi kamu yang ingin mempelajari desain program dan mengembangkan sebuah</p>
        </div>
        <div class="image-container col-md-5">
            <img src="img/baju1.png" alt="" style="width: 25rem" width="500" height="500">
            {{-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                preserveAspectRatio="xMidYMid slice" focusable="false"> --}}

                {{-- <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                    dy=".3em">500x500</text> --}}
            </svg>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Teknik dan Bisnis Sepeda Motor
            </h2>
            <p class="lead">Teknik dan Bisnis Sepeda Motor (TBSM) adalah salah satu cabang ilmu teknik mesin yang mempelajari tentang bagaimana merancang, membuat dan
                mengembangkan alat-alat transportasi darat yang menggunakan mesin, terutama sepeda motor</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="img/baju3.png" alt="" style="width: 25rem" width="500" height="500">
            {{--<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                    dy=".3em">500x500</text> --}}
            {{-- </svg> --}}

        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">T></h2>
            <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really
                intended to be actually read, simply here to give you a better view of what this would look like with
                some actual content. Your content.</p>
        </div>
        <div class="col-md-5">
            <img src="img/baju2.png" alt="" style="width: 25rem" width="500" height="500">
            {{-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                    dy=".3em">500x500</text>
            </svg> --}}

        </div>
    </div>
    <hr class="featurette-divider">
</div><!-- /.container -->

@endsection
