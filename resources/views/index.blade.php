@extends('layouts.template')

@section('content')
<div class="container">
        <h2>POPULAR MOVIES</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 mt-4">
            <div class="col">
                <a href="#">
                    <img src="/img/panda.png" alt="parasite" class="img-fluid hover-opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover-text-gray-300">Parasite</a>
                </div>
                <div class="d-flex align-items-center text-gray-400">
                    <span>star</span>
                    <span>rating</span>
                </div>
            </div>
            <div class="col">
                <a href="#">
                    <img src="/img/panda.png" alt="parasite" class="img-fluid hover-opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover-text-gray-300">Parasite</a>
                </div>
                <div class="d-flex align-items-center text-gray-400">
                    <span>star</span>
                    <span>rating</span>
                </div>
            </div>
            <div class="col">
                <a href="#">
                    <img src="/img/panda.png" alt="parasite" class="img-fluid hover-opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover-text-gray-300">Parasite</a>
                </div>
                <div class="d-flex align-items-center text-gray-400">
                    <span>star</span>
                    <span>rating</span>
                </div>
            </div>
            <div class="col">
                <a href="#">
                    <img src="/img/panda.png" alt="parasite" class="img-fluid hover-opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover-text-gray-300">Parasite</a>
                </div>
                <div class="d-flex align-items-center text-gray-400">
                    <span>star</span>
                    <span>rating</span>
                </div>
            </div>
        </div>
</div>

@endsection