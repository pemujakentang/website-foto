<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>
<body>

<div class="flex w-full h-screen relative" style="background-image: url('/img/home_backdrop.webp'); background-size: cover; background-position: center;">

    <div class="flex h-full w-[10%] flex-col">
        <div class="flex justify-center w-full h-[30%]">
            <div class="w-[1px] border"></div>
        </div>
        <div class="colums-3 w-full h-[40%] mx-auto">
            <div class="w-full h-1/3 items-center justify-center flex"> 
                <image class="" src="/img/instagram.webp" alt=""></image>
            </div>
            <div class="w-full h-1/3 items-center justify-center flex"> 
                <image class="" src="/img/image.webp" alt=""></image>
            </div>
            <div class="w-full h-1/3 items-center justify-center flex"> 
                <image class="" src="/img/youtube.webp" alt=""></image>
            </div>
        </div>
        <div class="flex justify-center w-full h-[30%]">
            <div class="w-[1px] border"></div>
        </div>
    </div>

    <div class="flex items-center justify-center h-full w-[90%] -translate-y-5">
        <div class="flex flex-col my-auto">
            <p class="text-[6rem] font-inter font-bold text-white">Sirena Motret</p>
            <p class="text-[2rem] font-inter font-medium -mt-8 text-white">Photographer</p>
            <div class="w-full mt-4 flex">
                <button class=" mr-2 w-1/2 h-12 border-2 rounded-full text-white hover:bg-white hover:text-black font-inter font-medium bg-white bg-opacity-20">order photo</button>
                <button class=" ml-2 w-1/2 h-12 border-2  rounded-full text-white hover:bg-white hover:text-black font-inter font-medium bg-white bg-opacity-20">explore</button>
            </div>
        </div>
    </div>
 
</div>

</body>
</html>