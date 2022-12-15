@extends('layouts.guest')

 @section('content')

      @include('layouts.messages')

      <section class="" style="background-color: skyblue ;">

        <div class="p-4 sm:p-10 sm:h-96 w-full bg-no-repeat h-full bg-cover " style="background-image: url('img/headBackground2.jpg');">

          <div class="sm:flex">

            <div class="sm:w-3/4 sm:pr-16" >
              <h1 class="text-white text-2xl md:text-2xl sm:text-2xl font-bold ">Confidence in Research</h1>
              <p class="text-white pt-2 sm:text-xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex dolor delectus dicta commodi incidunt praesentium velit consectetur accusamus quos et laborum quo at, exercitationem accusantium quasi minima consequatur distinctio animi unde optio? Quis animi incidunt qui ex, itaque quibusdam cum necessitatibus fuga magnam! Praesentium illo quidem facilis eum eveniet harum?</p>

              <div class="sm:flex pt-5 text-center">
                <button  class="bg-blue-800 hover:bg-blue-500 text-white font-bold sm:py-2 mb-3 p-2 sm:px-4 mr-4 border rounded"> <a href="{{ route('allpapers') }}"> View All Papers</a>

                </button>

                <button class="bg-blue-800 p-2 hover:bg-blue-500 text-white font-bold sm:py-2 sm:px-4 mb-3 border rounded"> <a href="{{ route('register') }}">Submit Your Paper Now</a>

                </button>
              </div>

            </div>

            <div class="h-60 bg-blue-800 sm:w-1/4  border rounded p-7 text-center ">
              <h2 class="text-white text-center text-2xl">Call for Papers</h2>

              <p class="font-bold text-white ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>

              <button class="mt-4 bg-red-500 hover:bg-pink-700 text-white font-bold py-2 px-4 border rounded"> <a href="{{ route('register') }}">
                Submit Your Paper </a>
              </button>
            </div>

          </div>


        </div>

      </section>


      <!-- 2nd Section -->

      <section class="p-5">

        <div class="grid grid-cols-1 sm:grid-cols-4 sm:gap-4 text-center ">

          <div class="  bg-indigo-200 pb-4">

            <h1 class="bg-blue-800 text-xl font-bold p-1 text-white  ">Categories</h1>
            <ul class="text-left pl-10 list-disc mt-2">
                @foreach ($category as $categories )
                    <li  class=" text-l ">{{ $categories->title }}</li>
                @endforeach


            </ul>

          </div>


          <!-- featured Papers -->


          <div class="col-span-2 bg-indigo-200 pb-4">

            <h3 class="bg-indigo-800 text-xl font-bold p-1 text-white ">Featured Papers</h3>
            <ul class="text-left pl-10 list-disc mt-2">
                @foreach ($journals as $journal)
                <a href="/paperview/{{ $journal->id }}"><li  class=" text-l ">{{ $journal->jtitle }}</li></a>
                @endforeach



            </ul>

          </div>

          <!-- part 3 Notice -->

          <div class="bg-indigo-200 pb-4">

            <h1 class="bg-blue-800 text-xl font-bold p-1 text-white ">Notice</h1>
            <ul class="text-left pl-10 list-disc mt-2">
              <li  class=" text-l ">Notice 001</li>
              <li  class=" text-l ">Notice 002</li>
              <li  class=" text-l ">Notice 003</li>
              <li  class=" text-l ">Notice 004</li>
              <li  class=" text-l ">Notice 005</li>
              <li  class=" text-l ">Notice 007</li>
              <li  class=" text-l ">Notice 006</li>

            </ul>

          </div>

        </div>

      </section>









      <!-- Recent Paper  -->



      <section class="p-5">
        <h1 class="text-3xl pt-3 pb-3  font-medium  ">Recent Paper</h1>

        <div class="grid grid-cols-1 sm:grid-cols-4 sm:gap-4 ">


          @foreach ($journals as $journal)

          <div class="bg-indigo-200 mb-3 w-full pt-6 rounded-2xl">


            <!-- <img class=" object-contain h-40 rounded " src="img/profile2.png" alt=""> -->
            <div class="flex flex-col justify-center items-center"> <img class=" object-contain h-40 rounded-full " src="img/profile2.png" alt=""></div>

            <div class="text-center p-3">
              <p>{{ $journal->a1fname }}</p>
              <p>{{ $journal->jcreated_at }}</p>
              <p>{{ $journal->jtitle }}</p>

            </div>

            <div class="grid sm:grid-cols-1 align-bottom">
              <a href="/paperview/{{ $journal->id }}"><div class="bg-blue-900 text-center h-12 text-bold text-white pt-2">  View Paper</div> </a>

            </div>

          </div>

          @endforeach

        </div>

      </section>


      <!-- 3nd Section -->

      <section class="">


        <div class="grid grid-cols-2 sm:grid-cols-4 sm:gap-4 text-center bg-blue-100">

          <div class="pb-4">

            <h1 class="text-2xl font-bold sm:text-3xl sm:font-bold sm:p-3">50+</h1>
            <p class=" sm:text-xl ">Paper Publish</p>



          </div>


          <!-- featured Papers -->


          <div class=" pb-4">

            <h1 class="text-2xl font-bold sm:text-3xl sm:font-bold sm:p-3">50+</h1>
            <p class=" sm:text-xl ">Indexing</p>


          </div>

          <!-- part 3 Notice -->

          <div class="pb-4">

            <h1 class="text-2xl font-bold sm:text-3xl sm:font-bold sm:p-3">10000+</h1>
            <p class=" sm:text-xl ">Connected Student</p>

          </div>

          <!-- part 4 -->

          <div class="pb-4">

            <h1 class="text-2xl font-bold sm:text-3xl sm:font-bold sm:p-3">10+</h1>
            <p class=" sm:text-xl ">Years Experience</p>

          </div>

        </div>

      </section>
@endsection
