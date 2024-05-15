<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
</head>
<body>

    <div class="shadow-lg p-0 m-0 overflow-x-hidden bg-secondary-subtle">
        <div class="row py-4">
            <ul class="col-md-10 fw-semibold fs-4 d-flex justify-space-between justify-content-around item-center h-9 py-12 mx-auto align-content-center" style="list-style: none">
                    <li><a href="{{route('agriculture.index')}}" style="text-decoration: none" class="text-black">Home</a></li>
                    <li>About Us</li>
                    <li>Service</li>
                    <li>Pages</li>
                    <li>Blog</li>
                    <li>Contact</li>
            </ul>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-11 mx-auto">
                <img src='{{asset("/img/{$agricultures[0]->id}.jpg")}}' class="rounded-3 w-50 py-3" alt="">
                <p class="my-2">
                    <span class="mx-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="width: 25px" style="height: 25px">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>

                        {{$agricultures[0]->author}}
                    </span>
                    <span class="mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="width: 25px" style="height: 25px">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                        </svg>
                        {{$agricultures[0]->date}}
                    </span>
                    <span class="mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 fs-5" style="width: 25px" style="height: 25px">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                          </svg>
                        Comments-3
                    </span>
                </p>
                <p style="font-size: 22px" class="px-3 py-4">{{$agricultures[0]->title}}</p>
                <p class="px-3">{{$agricultures[0]->content}}</p>
            </div>
        </div>
    </div>

    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
