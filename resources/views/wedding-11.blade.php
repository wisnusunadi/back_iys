<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <audio controls id="musicplayer" control class="fixed bottom-0 left-0 mx-auto w-full mb-5 z-40 ">
        <source src="{{ asset('project/' . $data->bgmusik) }}" type="audio/mpeg">
        Sorry, but your browser doesn't support audio.
    </audio>
    <section class="overflow-hidden">
        <div class="h-screen w-screen absolute z-20 flex flex-col justify-center items-center" id="undangan">
            <div class="m-auto text-center">
                <!-- <p class="undangan"></p> -->
                <p class="font-dance text-white text-4xl mb-3">Dear, <span class="namaUndangan">{{ $nama }}</span></p>
                <p class="font-raleway text-white text-sm mt-3 mb-4">You're invited to wedding of</p>
                <h1 class="text-white font-serif font-bold text-6xl text-center align-middle font-dance mb-10"><span class="text-8xl">{{ substr($data->namaPria, 0, 1) }}</span>{{ substr($data->namaPria, 1) }} & <span class="text-8xl">{{ substr($data->namaWanita, 0, 1) }}</span>{{ substr($data->namaWanita, 1) }}</h1>
                <a-link onclick="openInv()" class="text-black py-2 px-4 border border-white bg-white rounded-full hover:bg-transparent hover:text-white transition-colors font-bold text-sm" id="openInv">Open Invitation</router-link>
            </div>
        </div>
        <div class="w-screen h-screen bg-black absolute opacity-70 z-10"></div>
        <div class="w-screen h-screen bg-cover bg-center md:bg-center-bottom" style="background-image: url('{{ asset('project/' . $data->gambarCover) }}')"></div>
    </section>

    <section class="overflow-x-hidden hidden" id="inv">

        <div class="h-screen w-screen absolute z-20 flex flex-col justify-center ">
            <div class="mt-auto mb-36 ml-10">
                <p class="text-white text-3xl align-middle font-vibes mb-2">The Wedding Of</p>
                <p class="text-white font-prata leading-snug font-bold text-6xl ">{{$data->namaPasangan}}</p>
                <p class="text-white text-xl font-cour">
                    {{$data->dayOfWeek}}, {{$data->dayOfMonth}} {{$data->month}} {{$data->year}}
                </p>
            </div>
        </div>
        <div class="w-screen h-screen bg-black absolute opacity-60 z-10"></div>
        <div class="w-screen h-screen mb-12 bg-center bg-black overflow-hidden">
            <video class="w-screen h-full object-cover object-center" src="{{ asset('template_web/wedding_11/assets/vid2.mp4')}}" poster="{{ asset('project/' . $data->gambarUtama) }}" autoplay loop playsinline>
                <!-- <source src="./assets/vid2.mp4" type="video/mp4"> -->
            </video>
        </div>

        <!-- Ayat Alkitab -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 px-4 lg:pl-10 items-center">
            <div class="image w-full h-96 lg:h-screen bg-cover rounded-3xl bg-center" style="background-image: url('{{ asset('project/' . $data->gambarUtama) }}')">
            </div>
            <div class="ayat justify-center">
                <p class="leading-8 text-xl text-center font-raleway italic">{{$data->kataPengantar}}</p>

                <div class="grid grid-cols-3 items-center mt-6">
                    <hr class="border-black">
                    <p class="text-center font-cour">{{$data->namaPasangan}}</p>
                    <hr class="border-black">
                </div>
            </div>

        </div>
        <!-- Pengantin -->
        <div class="foto mt-8 px-4 mb-8">
            <hr class="mb-8">
            <p class="text-center text-lg font-cour">Kindly honor us with your presence at the marriage ceremony of...</p>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 items-center mt-8">
                <img src="{{ asset('project/' . $data->fotoWanita) }}" alt="" class="w-80 mx-auto h-80 rounded-full object-top object-cover">
                <div>
                    <p class="text-black font-cour text-4xl lg:text-6xl text-center">{{$data->namaLengkapWanita}}</p>
                    <p class="text-center text-lg font-bold font-raleway mt-4">Putri kedua dari</p>
                    <p class="text-center font-raleway">{{$data->ayahWanita}} & {{$data->ibuWanita}} </p>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-5 mt-9 mb-8 items-center">
                <hr>
                <p class="text-center font-dance text-3xl">&</p>
                <hr>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 items-center mt-8">
                <img src="{{ asset('project/' . $data->fotoPria) }}" alt="" class="w-80 mx-auto h-80 rounded-full object-cover object-top">
                <div>
                    <p class="text-black font-cour text-4xl lg:text-6xl text-center">{{$data->namaLengkapPria}}</p>
                    <p class="text-center text-lg font-bold font-raleway mt-4">Putra pertama dari</p>
                    <p class="text-center font-raleway">{{$data->ayahWanita}} & {{$data->ibuWanita}}</p>
                </div>
            </div>
        </div>

        <!-- Save the Date -->
        <div>
            <div class="w-screen h-fit bg-black absolute opacity-60 z-10"></div>
            <div class="h-full w-full tanggal absolute  z-20">
                <div class="py-7 w-screen  z-20 flex flex-col justify-center text-center mt-10">
                    <p class="text-white text-5xl align-middle font-vibes mb-8">Save The Date</p>
                    <div class="w-full text-center">
                        <div class="grid grid-cols-2 md:flex text-center gap-6 self-center">
                            <div>
                                <div class="px-5 py-2 border-2 border-white rounded-xl">
                                    <p id="day" class="text-white text-4xl"></p>
                                </div>
                                <p class="text-white font-bold text-xl mt-1">Days</p>
                            </div>
                            <div>
                                <div class="px-5 py-2 border-2 border-white rounded-xl">
                                    <p id="hours" class="text-white text-4xl"></p>
                                </div>
                                <p class="text-white font-bold text-xl mt-1">Hours</p>
                            </div>
                            <div>
                                <div class="px-5 py-2 border-2 border-white rounded-xl">
                                    <p id="minutes" class="text-white text-4xl"></p>
                                </div>
                                <p class="text-white font-bold text-xl mt-1">Minutes</p>
                            </div>
                            <div>
                                <div class="px-5 py-2 border-2 border-white rounded-xl">
                                    <p id="seconds" class="text-white text-4xl"></p>
                                </div>
                                <p class="text-white font-bold text-xl mt-1">Seconds</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-auto text-center lg:grid lg:grid-cols-2">
                        <div class="px-8 py-6 bg-black mx-6 mt-7 rounded-xl">
                            <div class="image w-full h-48 bg-cover rounded-2xl bg-center mb-6" style="background-image: url('{{ asset('project/' . $data->gambarUtama) }}')"></div>
                            <h2 class="text-white font-prata text-2xl">Holy Matrimony</h2>
                            <p class="text-white text-lg mb-4 font-raleway mt-3">{{$data->tglAkadId}}</p>
                            <hr class="mb-3">
                            <p class="text-white font-raleway mt-3">{{$data->waktuAkad}} - End</p>
                            <!-- <p class="text-white font-raleway mt-3">Kapel Graha Bethany Nginden</p> -->
                            <p class="text-white font-raleway mt-3">{{$data->alamatAkad}}</p>
                            <!-- <p class="text-white mb-6 font-raleway mt-3">Surabaya</p> -->
                            <a href="https://goo.gl/maps/tEKXapGxT8tbZwfV7" target="_blank" class="bg-yellow-600 font-bold text-white px-4 py-2 rounded-md font-raleway mt-3">See Location</a>
                        </div>
                        @if($data->alamatResepsi != '' )
                        <div class="px-8 py-5 bg-black mx-6 mt-7 rounded-xl">
                            <div class="image w-full h-48  bg-cover rounded-2xl bg-center mb-6" style="background-image: url('{{asset('project/' . $data->gambarCover) }}')"></div>
                            <h2 class="text-white font-prata text-2xl">Resepsi</h2>
                            <p class="text-white text-lg mb-4 font-raleway mt-3"> {{$data->tglResepsiId}}</p>
                            <hr class="mb-3">
                            <p class="text-white font-raleway mt-3">{{$data->waktuResepsi}} - end</p>
                            <p class="text-white font-raleway mt-3 mb-6">{{$data->alamatResepsi}}</p>

                            <a href="https://maps.app.goo.gl/ZRjRP1kBqR6XeBE8A?g_st=iw" target="_blank" class="bg-yellow-600 font-bold text-white px-4 py-2 rounded-md font-raleway mt-3">See Location</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="w-full h-screen   bg-cover bg-center" style="background-image: url('{{ asset('project/' . $data->gambarCover) }}')">
            </div>
            <div class="w-screen h-screen bg-black absolute opacity-60 z-10"></div>
            <div class="w-full h-screen   bg-cover bg-top" style="background-image: url('{{ asset('project/' . $data->gambarUtama)}}')"></div>
        </div>

        @if($data->acara == 'wedding')
        @if(count($data->gallery) > 0)
        <!-- Gallery -->


        <div class="gallery mt-28 mb-12">
            <p class="text-5xl align-middle font-vibes mb-8 text-center">Gallery</p>
            <div class="px-9 grid grid-cols-4 gap-4">
                @foreach($data->gallery as $index => $image)
                <figure class="img-gal col-span-1">
                    <img src="{{ asset('project/' .$image) }}" alt="" class="w-full h-full object-cover">
                </figure>
                @endforeach
            </div>
        </div>


        @endif
        @endif


        <!-- Pesan -->
        <div class="pesan mt-20 mb-12">
            <p class="text-5xl align-middle font-vibes mb-8 text-center">Kirim Pesan</p>
            <div>
                <div class="px-9">
                    <form method="POST" action="/api/guest-message">
                        @csrf
                        <div>
                            <label for="name" class="font-raleway">Nama</label>
                            <input type="text" name="nama" id="name" class="w-full border border-black mt-3 px-4 py-2 rounded-2xl" required>
                            <input type="hidden" name="project_id" required value="{{$project_id}}">
                        </div>
                        <div class="mt-6">
                            <label for="name" class="font-raleway">Pesan</label>
                            <textarea type="text" name="message" id="name" class="w-full border border-black mt-3 px-4 py-2 rounded-2xl" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="mt-5 px-5 py-2 bg-black text-white rounded-xl">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>



        <!-- List Pesan -->

        <div class="py-9 px-8 bg-black h-96 overflow-scroll">
            <!-- <List></List> -->

            <h2 class="text-white font-vibes text-5xl text-center">Pesan Kerabat</h2>
            <div class="mb-7 px-4 py-3 rounded-lg border-2 border-white mt-6" ">
                @foreach($message as $m)
                <h3 class=" text-xl font-prata font-bold mb-4 text-white">{{$m->nama}}</h3>
                <p class="font-raleway text-white">{{$m->message}}</p>
                @endforeach
            </div>
        </div>


        <div class="">
            <div class="absolute px-8 py-7 text-center z-30">

                <p class="text-lg font-cour text-black ">Kami yang berbahagia. Keluarga besar kedua mempelai</p>
                <h2 class="text-5xl font-dance font-bold mt-5 text-black">{{$data->namaPria}} & {{$data->namaWanita}}</h2>
                <p class="text-lg font-cour text-black mt-5">Atas Kehadiran dan Doa Restunya <br> Kami Ucapkan Terimakasih</p>
            </div>

            <div class="w-screen h-72 bg-white absolute opacity-70 z-10"></div>
            <div class="w-full h-72   bg-cover bg-top" style="background-image: url('{{ asset('project/' . $data->gambarUtama) }}')"></div>
        </div>

    </section>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        function openInv() {
            var section = document.getElementById('inv');
            section.classList.remove('hidden');


            var audio = document.getElementById('musicplayer');
            audio.play();
        }
        //var countDownDate = new Date("Oct 4, 2024 12:00:00").getTime();
        var countDownDate = new Date("{{ $data->tglMulai }}").getTime();
        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            // document.getElementById("day").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
            document.getElementById("day").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
</body>

</html>