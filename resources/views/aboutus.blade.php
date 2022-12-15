@extends('layouts.guest')

 @section('content')

<section class="p-5">

    <div class="grid grid-cols-1 sm:grid-cols-4 sm:gap-4 text-center ">




      <!-- featured Papers -->


      <div class="col-span-3  pb-4 pr-4">

        <h1 class="text-2xl font-bold sm:p-3 ">About Us</h1>
        <ul class="text-left sm:pl-10 list-disc mt-2">
              iste ab amet magnam neque praesentium perspiciatis eaque enim iusto ipsa. Aut blanditiis quis repudiandae sapiente, non perspiciatis? Nam quis enim soluta nihil illum modi perspiciatis placeat voluptatem, sequi dignissimos nemo nobis assumenda deleniti voluptatibus beatae vero earum harum corrupti expedita itaque dolorum qui, obcaecati rem. Suscipit repellendus, veniam ducimus mollitia temporibus sit minus pariatur ratione facilis exercitationem, molestias eveniet voluptate consectetur qui <br><br> deserunt  quae possimus nesciunt recusandae excepturi delectus neque tempore! Sapiente deserunt aliquam recusandae, iure ea tempora, beatae cupiditate<br><br> doloribus praesentium totam accusamus perspiciatis voluptates officiis, nihil est quas! Commodi veritatis, optio fuga assumenda ullam nesciunt aliquid distinctio, tempore dolorem illum culpa consectetur maxime. Rerum voluptatibus incidunt modi repudiandae neque alias!</p>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis assumenda, aperiam suscipit quam porro, quisquam voluptatem fugit non, rem laudantium eligendi. Provident soluta, omnis distinctio architecto cumque quas asperiores voluptates rerum saepe hic, velit recusandae quisquam nobis reiciendis. Sint accusamus vitae ad assumenda. Totam praesentium eius, <br><br> nostrum quae eveniet minima voluptate laborum veniam odio harum aut, omnis accusamus, odit porro corporis dolore id vitae asperiores ipsum. Aut laborum dolores reprehenderit fugit quisquam totam iure voluptate sequi. Expedita assumenda voluptates eius suscipit provident et voluptate excepturi sint, recusandae <br><br>
              iste ab amet magnam neque praesentium perspiciatis eaque enim iusto ipsa. Aut blanditiis quis repudiandae sapiente, non perspiciatis? Nam quis enim soluta nihil illum modi perspiciatis placeat voluptatem, sequi dignissimos nemo nobis assumenda deleniti voluptatibus beatae vero earum harum corrupti expedita itaque dolorum qui, obcaecati rem. Suscipit repellendus, veniam ducimus mollitia temporibus sit minus pariatur ratione facilis exercitationem, molestias eveniet voluptate consectetur qui <br> deserunt  quae possimus nesciunt recusandae excepturi delectus neque tempore! Sapiente deserunt aliquam recusandae, iure ea tempora, beatae cupiditate<br> doloribus praesentium totam accusamus perspiciatis voluptates officiis, nihil est quas! Commodi veritatis, optio fuga assumenda ullam nesciunt aliquid distinctio, tempore dolorem illum culpa consectetur maxime. Rerum voluptatibus incidunt modi repudiandae neque alias!</p>

        </ul>

      </div>

      <!-- part 3 Notice -->

      <div class=" pb-4">


          <div class="bg-indigo-200">
              <h1 class="bg-blue-500 text-2xl font-bold p-3 text-white ">Categories</h1>
              <ul class="text-left pl-10 list-disc mt-2">
                @foreach ($category as $categories )
                <li  class=" text-xl ">{{ $categories->title }}</li>
                @endforeach

              </ul>
          </div>






      </div>

    </div>

  </section>
  @endsection
