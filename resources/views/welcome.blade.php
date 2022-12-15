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
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold sm:py-2 mb-3 p-2 sm:px-4 mr-4 border rounded">
                  View All Papers
                </button>

                <button class="bg-blue-500 p-2 hover:bg-blue-700 text-white font-bold sm:py-2 sm:px-4 mb-3 border rounded">
                  Submit Your Paper Now
                </button>
              </div>

            </div>

            <div class="h-60 bg-blue-400 sm:w-1/4  border rounded p-7 text-center ">
              <h2 class="text-white text-center text-2xl">Call for Papers</h2>

              <p class="font-bold ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>

              <button class="mt-4 bg-red-500 hover:bg-pink-700 text-white font-bold py-2 px-4 border rounded">
                Submit Your Paper
              </button>
            </div>

          </div>


        </div>

      </section>


      <!-- 2nd Section -->

      <section class="p-5">

        <div class="grid grid-cols-1 sm:grid-cols-4 sm:gap-4 text-center ">

          <div class="  bg-indigo-200 pb-4">

            <h1 class="bg-blue-500 text-2xl font-bold p-3 ">Categories</h1>
            <ul class="text-left pl-10 list-disc mt-2">
                @foreach ($category as $categories )
                    <li  class=" text-xl ">{{ $categories->title }}</li>
                @endforeach


            </ul>

          </div>


          <!-- featured Papers -->


          <div class="col-span-2 bg-indigo-200 pb-4">

            <h1 class="bg-indigo-500 text-2xl font-bold p-3 ">Featured Papers</h1>
            <ul class="text-left pl-10 list-disc mt-2">
                @foreach ($journals as $journal)
                <a href="/journals/{{ $journal->id }}"><li  class=" text-xl ">{{ $journal->jtitle }}</li></a>
                @endforeach



            </ul>

          </div>

          <!-- part 3 Notice -->

          <div class="bg-indigo-200 pb-4">

            <h1 class="bg-blue-500 text-2xl font-bold p-3 ">Notice</h1>
            <ul class="text-left pl-10 list-disc mt-2">
              <li  class=" text-xl ">Notice 001</li>
              <li  class=" text-xl ">Notice 002</li>
              <li  class=" text-xl ">Notice 003</li>
              <li  class=" text-xl ">Notice 004</li>
              <li  class=" text-xl ">Notice 005</li>
              <li  class=" text-xl ">Notice 006</li>
              <li  class=" text-xl ">Notice 007</li>

            </ul>

          </div>

        </div>

      </section>









      <!-- Recent Paper  -->



      <section class="p-5">
        <h1 class="text-3xl pt-3 pb-3  font-medium  ">Recent Paper</h1>

        <div class="grid grid-cols-1 sm:grid-cols-4 sm:gap-4 ">

          <div class="bg-indigo-200 mb-3 w-full pt-6 rounded-2xl">


            <!-- <img class=" object-contain h-40 rounded " src="img/profile2.png" alt=""> -->
            <div class="flex flex-col justify-center items-center"> <img class=" object-contain h-40 rounded-full " src="img/profile2.png" alt=""></div>

            <div class="text-center p-3">
              <p>Sabbir Rahman</p>
              <p>Image Modification Using Deep Neural Cellular Automata</p>

            </div>

            <div class="grid sm:grid-cols-2 align-bottom">
              <div class="bg-blue-900 text-center h-12 text-bold text-white pt-2"> Certificate </div>
              <div class="bg-red-500 text-center h-12 text-bold text-white pt-2"> Download Paper </div>
            </div>

          </div>


          <div class="bg-indigo-200 mb-3 w-full pt-6 rounded-2xl">


            <!-- <img class=" object-contain h-40 rounded " src="img/profile2.png" alt=""> -->
            <div class="flex flex-col justify-center items-center"> <img class=" object-contain h-40 rounded-full " src="img/profile2.png" alt=""></div>

            <div class="text-center p-3">
              <p>Sabbir Rahman</p>
              <p>Image Modification Using Deep Neural Cellular Automata</p>

            </div>

            <div class="grid sm:grid-cols-2 align-bottom">
              <div class="bg-blue-900 text-center h-12 text-bold text-white pt-2"> Certificate </div>
              <div class="bg-red-500 text-center h-12 text-bold text-white pt-2"> Download Paper </div>
            </div>

          </div>

          <div class="bg-indigo-200 mb-3 w-full pt-6 rounded-2xl">


            <!-- <img class=" object-contain h-40 rounded " src="img/profile2.png" alt=""> -->
            <div class="flex flex-col justify-center items-center"> <img class=" object-contain h-40 rounded-full " src="img/profile2.png" alt=""></div>

            <div class="text-center p-3">
              <p>Sabbir Rahman</p>
              <p>Image Modification Using Deep Neural Cellular Automata</p>

            </div>

            <div class="grid sm:grid-cols-2 align-bottom">
              <div class="bg-blue-900 text-center h-12 text-bold text-white pt-2"> Certificate </div>
              <div class="bg-red-500 text-center h-12 text-bold text-white pt-2"> Download Paper </div>
            </div>

          </div>

          <div class="bg-indigo-200 mb-3 w-full pt-6 rounded-2xl">


            <!-- <img class=" object-contain h-40 rounded " src="img/profile2.png" alt=""> -->
            <div class="flex flex-col justify-center items-center"> <img class=" object-contain h-40 rounded-full " src="img/profile2.png" alt=""></div>

            <div class="text-center p-3">
              <p>Sabbir Rahman</p>
              <p>Image Modification Using Deep Neural Cellular Automata</p>

            </div>

            <div class="grid sm:grid-cols-2 align-bottom">
              <div class="bg-blue-900 text-center h-12 text-bold text-white pt-2"> Certificate </div>
              <div class="bg-red-500 text-center h-12 text-bold text-white pt-2"> Download Paper </div>
            </div>

          </div>


        </div>

      </section>


      <!-- 3nd Section -->

      <section class="">


        <div class="grid grid-cols-2 sm:grid-cols-4 sm:gap-4 text-center bg-blue-100">

          <div class="pb-4">

            <h1 class="text-2xl font-bold sm:text-3xl sm:font-bold sm:p-3">10+</h1>
            <p class=" sm:text-xl ">Years Experience</p>


          </div>


          <!-- featured Papers -->


          <div class=" pb-4">

            <h1 class="text-2xl font-bold sm:text-3xl sm:font-bold sm:p-3">50+</h1>
            <p class=" sm:text-xl ">Indexing</p>


          </div>

          <!-- part 3 Notice -->

          <div class="pb-4">

            <h1 class="text-2xl font-bold sm:text-3xl sm:font-bold sm:p-3">1000+</h1>
            <p class=" sm:text-xl ">Happy CLients</p>

          </div>

          <!-- part 4 -->

          <div class="pb-4">

            <h1 class="text-2xl font-bold sm:text-3xl sm:font-bold sm:p-3">2000+</h1>
            <p class=" sm:text-xl ">Paper Publish</p>

          </div>

        </div>

      </section>
@endsection
