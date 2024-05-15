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

    <div class="shadow-lg p-0 m-0 bg-secondary-subtle">
        <div class="row py-4">
            <ul class="col-md-10 fs-4 fw-semibold d-flex justify-space-between justify-content-around item-center h-9 py-12 mx-auto align-content-center" style="list-style: none">
                <li><a href="{{route('agriculture.index')}}" style="text-decoration: none" class="text-black">Home</a></li>
                    <li>About Us</li>
                    <li>Service</li>
                    <li>Pages</li>
                    <li>Blog</li>
                    <li>Contact</li>
            </ul>
        </div>
    </div>

    <div class="container my-5">
        <div class="row ">
            @foreach ($agricultures as $agriculture)
                <div class="col-md-6 my-3">
                    <div class=" border border-secondary-subtle rounded-3 shadow-lg">
                        <div class="row d-flex justify-space-between">
                            <div class="col-md-6 align-self-center">
                                <div class="row">
                                    <div class="col-md-11 mx-auto">
                                        <img src='{{ asset("/img/$agriculture->id.jpg")}}' alt="" class=" h-auto rounded-2 border border-success-subtle mx-auto w-100">
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 pt-3">
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="width: 20px" style="height: 20px">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                    </svg>
                                    {{$agriculture->author}}
                                </p>
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="width: 20px" style="height: 20px">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                    </svg>
                                    {{$agriculture->date}}
                                </p>
                                <h6 class="fw-semibold">{{$agriculture->title}}</h6>
                                <a href="{{ route('agriculture.show', $agriculture->id)}}" style="font-size: 13px" class="my-3 btn border rounded-4 border-success-subtle btn-success text-white">
                                    Read More
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="width: 11px" style="height: 11px">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
